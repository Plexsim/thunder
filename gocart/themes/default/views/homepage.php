
<div class="span2 hidden-xs hidden-sm hidden-md" id="sidebar-right">
	<?php echo $rs_sidebar['right_content'] ?>	
</div>

<div class="span2 hidden-xs hidden-sm hidden-md" id="sidebar-left">
	<?php echo $rs_sidebar['left_content'] ?>	
</div>

<div class="row">
	<div class="container">
		<div class="col-sm-6">


			<div class="myJumbotron">
				<img src="<?php echo theme_img('search-banner.png')?>" width="100%" class="margin-top-negative-10">

				<img src="<?php echo theme_img('search-device.png')?>" width="40%" class="search-device-image">
				
				
				<ul style="margin-left:-20px;font-size:12px;">
					<li>Free Shipping</li>
					<li>60 branches to support Online Shopping</li>
					<li>Multi-brand of I.T & Mobile Gadget</li>
					<li>Various Payment Method</li>
				</ul>

				<form action="<?php echo site_url('cart/search')?>"
					method="post">

					<p class="lead">
						<input type="text" name="term" class="form-control"
							placeholder="Search">
					</p>

					<p>					
						<i class="ion-ios7-telephone"></i> <span class="align-top">+603-</span><span class="align-top">9282 5232</span> 
						<i class="ion-ios7-email"></i> <span class="align-top">sales@tmt.my</span>
																																									
						<input type="submit" class="btn btn-lg btn-danger pull-right" value="Search">												 																			
					</p>
				</form>
			</div>

		</div>


		<div class="col-sm-6">
			<!-- Carousel -->
			<div id="myCarousel" class="carousel slide jumbotron">

				<?php 
					$active_banner	= 'active ';
					$number_slide = 0;
				?>
			
				<ol class="carousel-indicators">
					<?php 
						foreach($banners as $banner):
							if($number_slide == 0):
								$active_banner = 'active ';
							else:
								$active_banner = '';
							endif;
					?>					
						<li class="<?php echo $active_banner?>" data-target="#myCarousel" data-slide-to="<?php echo $number_slide?>"></li>
					<?php
						$number_slide++;
						endforeach;
					?>															
				</ol>
				<div class="carousel-inner">

					<?php		
					$active_banner	= 'active ';
					foreach($banners as $banner):
					?>

					<div class="<?php echo $active_banner;?>item">
						<?php

						$banner_image	= '<img src="'.base_url('uploads/'.$banner->image).'" />';
						$banner_text 	= '<p class="slider-desc">We provide promote services in mobile social messenger</p>	';
						
						if($banner->link)
						{
							$target=false;
							if($banner->new_window)
							{
								$target=' target="_blank"';
							}
							echo '<a href="'.$banner->link.'"'.$target.'>'.$banner_image.'</a>';
						}
						else
						{							
							echo '<div class="slider-size">'.$banner_image.'</div>';
						}
						?>
						<?php /*?>
						<div class="carousel-caption">
						<?php echo $banner->title;?>
						</div>
							<?php */ ?>
																					
							<div class="header-text hidden-xs">
		                        <div class="col-md-12 text-center">
		                            
		                            <h3>
		                            	<span><?php echo $banner->banner_text ?></span>
		                            </h3>
		                            		                            
		                        </div>
		                    </div><!-- /header-text -->
							
							
							
					</div>



					<?php 
					$active_banner = false;
					endforeach;
					?>


				
				</div>

				<a class="left carousel-control" href="#myCarousel"
					data-slide="prev"> <span class="icon-prev"></span>
				</a> <a class="right carousel-control" href="#myCarousel"
					data-slide="next"> <span class="icon-next"></span>
				</a>
			</div>
			<!-- End carousel -->
		</div>
	</div>
</div>


<div id="demo">

	<div class="span12">
		<h4>Amazing smart devices with great deals!</h4>
		<div id="owl-demo" class="owl-carousel">
		<?php 		
			$count_new_items = 20;
			$base_url	= 'new_arrival';
			
			if(isset($rs_feature_items)){ 
				foreach($rs_feature_items as $feature_item){
					if($count_new_items > 0){
					$photo	= theme_img('no_picture.png', lang('no_image_available'));
					$images	= array_values((array)json_decode($feature_item->images));					
		?>		
			<?php 
				$i = 0;								
				foreach($images as $img):
					if($i == 0):
						if(isset($img) && !empty($img)){						
			?>
				<div class="item">
					<a href="<?php echo !empty($feature_item->tmturl) ? $feature_item->tmturl : '#' ?>"><img class="lazyOwl" 
						data-src="<?php echo base_url('uploads/images/medium/'.$img->filename) ?>"
						alt="Product"></a>
						
					<a href="<?php echo !empty($feature_item->tmturl) ? $feature_item->tmturl : '#' ?>"><h4> <?php echo $feature_item->name ?></h4></a>
					<span class="price">RM <?php echo $feature_item->saleprice ?></span>
					<span class="price">Before: RM <?php echo $feature_item->price ?></span>	
									
				</div>
				
				<?php }else{?>
					<img class="lazyOwl"
						data-src="<?php echo theme_img("no_picture.png"); ?>"
						alt="No Picture">																									
				<?php }
					
					endif;
					$i++;
					endforeach;
				
				?>
			
		
		<?php 
				$count_new_items --;
					}		
				}
			}		
		?>
			
		</div>

	</div>


</div>


<div class="row">
	<div class="container">
		<div class="span12">
			<h6>*All prices are valid fpr brances, and are for reference purposes
				only. Prices may differ for other brances and are subject to change
				without prior notice. Terms and conditions apply.</h6>
		</div>
	</div>
</div>



<div class="row">
	<div class="container">
		<div class="userJumbotron">

			<div class="row">
				<div class="container">
					<?php echo $rs_content_custom['content'] ?>
				</div>
				<!--/container -->
			</div>
			<!--/row-->
		</div>
	</div>
	<!--/container -->
</div>
<!--/row-->





