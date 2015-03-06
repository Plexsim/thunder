
<section id="footer-defoult">
	<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="padding-top-20 padding-right-60 padding-left-60">
						<h4>Contact Us</h4>
						<p>Customer Service Hotline : <br>
						<span class="align-top">03 </span><span class="align-top">9282 0010</span>  </p>
						<p>Email : <br>
						customerservice@thundermatch.com.my</p>

						Thunder Match Technology Sdn. Bhd<br>
						No 1, Jalan 8/91 Taman Shamelin Perkasa<br>
						56000, Cheras, Kuala Lumpur<br> 						
					</div>								
				</div>
				<div class="col-md-3">
					<div class="padding-top-20 padding-right-60 padding-left-60">
						<h4>Company Information</h4>
						<a href="<?php echo base_url("company");?>">About Us</a><br>
						<a href="<?php echo base_url("membership");?>">Membership</a><br>
						<a href="<?php echo base_url("price_list");?>">Price List</a><br>
						<a href="<?php echo base_url("events");?>">Events</a><br>
						<a href="<?php echo base_url("awards_and_recognitions");?>">Awards</a><br>
						<a href="<?php echo base_url("outlets");?>">Outlets</a><br>
						<a href="<?php echo base_url("career");?>">Careers</a><br>
						<a href="<?php echo base_url("term_of_use");?>">Term of Use</a><br>
						<a href="<?php echo base_url("privacy_policy");?>">Privacy Policy</a><br>
						<a href="http://www.thundermatch.com.my/info/" target="_blank">Staff Access</a><br> 						
					</div>
				</div>
				<div class="col-md-5">
					<div class="padding-top-20 padding-right-60 padding-bottom-20" id="twitter_bottom">
					
					<a class="twitter-timeline" href="https://twitter.com/ThunderMatch" data-widget-id="526637048120086528">Tweets by @ThunderMatch</a>

					
						<!--h4>Tweets</h4>
						<b>ThunderMatch</b><br>
						@CorridorDigital + @Pond5 Giving away 50 stock media files valued at $1000 + absolute free<br>
						
						...<br><br>
						<b>ThunderMatch</b><br>
						@CorridorDigital + @Pond5 Giving away 50 stock media files valued at $1000 + absolute free<br>
						
						...<br-->						
					</div>
				</div>				
			</div><!--row end -->
		
	</div><!--container-->		
</section><!--footer default end-->


<div class="copyright">
	<div class="row">
		<div class="col-md-12 text-center">
			<span>&copy; copyright 2014 by <?php echo $this->config->item('company_name');?> | All right reserved.</span>
		</div>
	</div>
</div>	




<!--scripts-->


</div> <!-- END of Container in file header.php -->

	<!--scripts-->
	
	<?php echo theme_js('jquery-1.10.2.min.js', true);?>
	<?php echo theme_js('jquery.easing.1.3.min.js', true);?>
	<?php echo theme_js('bootstrap.min.js', true);?>
	<?php echo theme_js('bootstrap-hover-dropdown.min.js', true);?>	 
	<script src="<?php echo theme_url('assets/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>		
	<?php echo theme_js('jquery.flexslider-min.js', true);?>
	<?php echo theme_js('jquery.mixitup.min.js', true);?>
	<?php echo theme_js('app.js', true);?>
		
	<?php echo theme_js('owl-carousel/owl.carousel.js', true);?>	

    <!-- Demo -->

    <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    
    /* laptops */
	@media (max-width: 1023px) and (min-width: 992px) {
	    #owl-demo .item img{
	        display: block;
	        width: 100%;
	        height: 150px;
	    }
	   
	}
	
	/* desktops */
	@media (min-width: 1024px) {
		  #owl-demo .item img{
		        display: block;
		        width: 100%;
		        height: 150px;
		  }  		    
	}
    
    </style>


    <script>
    
      $("#owl-demo").owlCarousel({
        items : 6,
        lazyLoad : true,        
      });
      
   	   //$('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
       //$('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});

       $('#list').click(function(){$('#products .item').addClass('list-group-item');});
  	   $('#grid').click(function(){$('#products .item').removeClass('list-group-item');});

       
    </script>
	
	<?php echo theme_js('bootstrap-transition.js', true);?>
	
	<?php echo theme_js('bootstrap-tab.js', true);?>
	
	<?php echo theme_js('google-code-prettify/prettify.js', true);?>
	
	<?php echo theme_js('application.js', true);?>
       
       
    <?php echo theme_js('jquery.rwdImageMaps.min.js', true);?>
	<script>
		$('img[usemap]').rwdImageMaps();
		
		$('area').on('click', function() {
			//alert($(this).attr('alt') + ' clicked');
		});	

		function centerModal() {
		    $(this).css('display', 'block');
		    var $dialog = $(this).find(".modal-dialog");
		    var offset = ($(window).height() - $dialog.height()) / 1;
		    // Center modal vertically in window
		    //$dialog.css("margin-top", offset);
		}

		$('.modal').on('show.bs.modal', centerModal);
		$(window).on("resize", function () {
		    $('.modal:visible').each(centerModal);
		});
		
	</script>  
	
	
         
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>	

</body>
</html>