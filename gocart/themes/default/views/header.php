<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo (!empty($seo_title)) ? $seo_title .' - ' : ''; echo $this->config->item('company_name'); ?></title>


<?php if(isset($meta)):?>	
	<meta name="description" content="<?php echo $meta;?>" />	
<?php else:?>
<meta name="Keywords" content="Shopping Cart, eCommerce, ThunderMatch, TMT.MY">
<meta name="Description" content="Thunder Match Technology Sdn Bhd">
<?php endif;?>

<!--bootstrap3 css-->
<link href="<?php echo theme_url('assets/bootstrap/css/bootstrap.css') ?>" rel='stylesheet' type='text/css'>
	
<!--ion icon fonts css-->
<?php echo theme_css('ionicons.css', true);?>
<!--custom css-->
<?php echo theme_css('style.css', true);?>
<!--google raleway font family-->
 <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,100,700,500' rel='stylesheet' type='text/css'>
 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!--flex slider css-->
<?php echo theme_css('flexslider.css', true);?>

<?php echo theme_css('owl-carousel/owl.carousel.css', true);?>
<?php echo theme_css('owl-carousel/owl.theme.css', true);?>

<meta name="twitter:widgets:theme" content="light">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


<?php
//with this I can put header data in the header instead of in the body.
if(isset($additional_header_info))
{
	echo $additional_header_info;
}

?>
</head>

<body>

	<div class="container">
		
		<div class="row tmt-header">
			<div class="col-sm-3 ">
				<a href="<?php echo base_url()?>"><img
					src="<?php echo theme_url('assets/img/logo.png') ?>"
					class="img-responsive" alt="logo-white"> </a>
			</div>
			<div class="col-sm-3 hidden-xs">
				<a href="https://www.facebook.com/ohyesstore"><img
					src="<?php echo theme_url('assets/img/yes-logo.png') ?>"
					class="img-yes" alt="logo-white"> </a>
			</div>
			<div class="col-sm-3">&nbsp;</div>
			<div class="col-sm-3 hidden-xs">
					<div class="row">
						<div class="pull-right">
							<a href="https://www.facebook.com/ThunderMatch"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
							<a href="https://twitter.com/ThunderMatch"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
							<a href="http://www.youtube.com/user/thundermatchtech"><i id="social" class="fa fa-youtube-square fa-3x social-gp"></i></a>	<br>

						</div>
					</div>
					<div class="row">
						<div class="pull-right">
								Customer Service: 03-9282 0010					
						</div>		
					</div>
			</div>			
		</div>				
		
		<header class="tmt-page-header">
			
			<!-- Navbar -->
			<div class="navbar navbar-default" role="navigation">
				<div class="container">
					
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span>
					</button>

					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-left">							
							<li class="<?php echo $this->uri->segment(1)=="index" || $this->uri->segment(1)=="" ? "active":"nonactive" ?>" ><a href="<?php echo base_url();?>" class="highlight">WHAT'S NEW</a></li>														
							<li class="dropdown <?php echo $this->uri->segment(1)=="latest_promotions" || $this->uri->segment(1)=="price_list" ? "active" : "nonactive" ?>">
				             	<a class="dropdown-toggle js-activated"  data-toggle="dropdown" href="<?php echo base_url("latest_promotions");?>">PROMOTION</a>
				             	<ul class="dropdown-menu">
					             	<li>
	                    				<a href="<?php echo base_url("latest_promotions");?>" >LATEST PROMOTIONS</a>
	                    			</li>
	                    			<li>
	                    				<a href="<?php echo base_url("price_list");?>">PRICE LIST</a>
	                    			</li>	
								</ul>
							</li>
							<li class="<?php echo $this->uri->segment(1)=="membership" ? "active" : "nonactive" ?>"><a href="<?php echo base_url("membership");?>" class="highlight">MEMBERSHIP</a></li>
							
							
							<li class="<?php echo $this->uri->segment(1)=="outlets" ? "active" : "nonactive" ?>"><a href="<?php echo base_url("outlets");?>" class="highlight">OUTLETS</a></li>
							<li class="dropdown <?php echo $this->uri->segment(1)=="company" || $this->uri->segment(1)=="career" ? "active" : "nonactive" ?>">
								<a class="dropdown-toggle js-activated"  data-toggle="dropdown" href="<?php echo base_url("company");?>">COMPANY</a>
								<ul class="dropdown-menu">
					             	<li>
	                    				<a href="<?php echo base_url("company");?>">ABOUT US</a>
	                    			</li>
	                    			<li>
	                    				<a href="<?php echo base_url("career");?>">CAREERS</a>
	                    			</li>	
								</ul>
							</li>
																					
							<li class="<?php echo $this->uri->segment(1)=="contact_us" ? "active" : "nonactive" ?>"><a href="<?php echo base_url("contact_us");?>" class="highlight">CONTACT US</a></li>
						
						<?php 
							if(isset($this->pages) && isset($this->pages[0]))
							{
								
							$sub_no = 1;	
							
							foreach($this->pages[0] as $menu_page):?>
							<li class="dropdown <?php echo $this->uri->segment(1)==$menu_page->slug ? "active" : "nonactive" ?>"">
								
							<?php if(empty($menu_page->content)):?> 
								<a class="dropdown-toggle js-activated" data-toggle="dropdown" href="<?php echo $menu_page->url;?>" <?php if($menu_page->new_window ==1){echo 'target="_blank"';} ?>><?php echo $menu_page->menu_title;?></a> <?php else:?> <a href="<?php echo site_url($menu_page->slug);?>"><?php echo $menu_page->menu_title;?></a> 
								
								<?php if(isset($this->pages[$menu_page->id])):?>
								<ul class="dropdown-menu">
									<?php foreach($this->pages[$menu_page->id] as $sub_menu_page):?>									
					             	<li>
					             	<?php if(empty($sub_menu_page->content)):?> 
	                    				<a href="<?php echo $sub_menu_page->url;?>" <?php if($sub_menu_page->new_window ==1){echo 'target="_blank"';} ?>><?php echo $sub_menu_page->menu_title;?></a> <?php else:?> <a href="<?php echo site_url($sub_menu_page->slug);?>"><?php echo strtoupper($sub_menu_page->menu_title);?></a> 
	                    			<?php endif;?>				
	                    			</li>
	                    			<?php endforeach;?>
								</ul>
								<?php endif;?>
																								
							<?php endif;?>
							</li>

							<?php endforeach;	
							}
							?>
						
						</ul>
						
						
					</div>
					
				</div>
			</div>
			<!-- End navbar -->
			
		</header>

		





	<?php
	/*
	 End header.php file
*/