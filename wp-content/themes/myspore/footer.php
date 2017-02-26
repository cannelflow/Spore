<!-- PART 5 - SUB MENU AND SHORTCUTS -->

<div id="A5"> 
 
	<div id="wrapper-A5">
    
        <div id="wrapper-part-left" class="text-part-A5">
        	<div id="A5-left" class="wow flipInX" data-wow-offset="10">
    			<?php if(is_active_sidebar('footer-sidebar-1')) : ?>
					<?php dynamic_sidebar('footer-sidebar-1'); ?>
		        <?php endif; ?>
            </div>
        </div>
        
        <div id="wrapper-part-mid" class="text-part-A5">
        	<div id="A5-middle" class="wow flipInX" data-wow-offset="10" data-wow-delay="0.2s">
    			<?php if(is_active_sidebar('footer-sidebar-2')) : ?>
					<?php dynamic_sidebar('footer-sidebar-2'); ?>
		        <?php endif; ?>
            </div>
        </div>
        
        <div id="wrapper-part-right" class="text-part-A5">
        	<div id="A5-right" class="wow flipInX" data-wow-offset="10" data-wow-delay="0.4s">
    			<?php if(is_active_sidebar('footer-sidebar-3')) : ?>
					<?php dynamic_sidebar('footer-sidebar-3'); ?>
		        <?php endif; ?>
           </div>
        </div>
    
    <div class="A5-calage"></div>
	</div>
    
</div>


<!-- PART 5 BIS - SUB MENU AND RELATED NUMBERS -->

<div id="A5b"> 
 
	<div id="wrapper-A5b">
    
        <div id="wrapper-A5b-part-left">
        	<div id="A5b-left" class="wow flipInX" data-wow-offset="10">
    			<div id="left-A5b-text-post">14</div>
            	<div id="left-A5b-line-post"></div>
            	<div id="left-A5b-line2-post"></div>
				<div id="left-A5b-text-post-1"><strong>Posts</strong></div>
        	</div>
        </div>
        
        <div id="wrapper-A5b-part-mid">
        	<div id="A5b-middle" class="wow flipInX" data-wow-offset="10" data-wow-delay="0.2s">
    			<div id="mid-A5b-text-post">235</div>
            	<div id="mid-A5b-line-post"></div>
            	<div id="mid-A5b-line2-post"></div>
				<div id="mid-A5b-text-post-1"><strong>Likes</strong></div>
        	</div>
        </div>
        
        <div id="wrapper-A5b-part-right">
        	<div id="A5b-right" class="wow flipInX" data-wow-offset="10" data-wow-delay="0.4s">
    			<div id="right-A5b-text-post">6509</div>
            	<div id="right-A5b-line-post"></div>
            	<div id="right-A5b-line2-post"></div>
				<div id="right-A5b-text-post-1"><strong>Views</strong></div>
           </div>
        </div>
        
    <div class="A5b-calage"></div>
	</div>
    
</div>

<!-- PART 6 - SOCIAL PART -->

<div id="A6">

<div id="wrapper-social" class="wow bounceInLeft" data-wow-offset="10">
    
    	<div id="main-behance">
    		<div id="cadre-behance" class="object">
        		<a href="https://www.behance.net/<?php echo get_theme_mod( 'behance_link', 'cannelflow' ); ?>"><div id="behance" class="object">E</div></a>
    		</div>
        </div>
        
        <div id="main-dribbble">
    		<div id="cadre-dribbble" class="object">
      	  		<a href="https://dribbble.com/<?php echo get_theme_mod( 'drible_link', 'cannelflow' ); ?>"><div id="dribbble" class="object">D</div></a>
    		</div>
        </div>

		<div id="main-facebook">
    		<div id="cadre-facebook" class="object">
	        	<a href="https://www.facebook.com/<?php echo get_theme_mod( 'fb_link', 'BollyGossipp' ); ?>"><div id="facebook" class="object">F</div></a>
        	</div>
        </div>
 
		<div id="main-google">
    		<div id="cadre-google" class="object">
        		<a href="https://plus.google.com/<?php echo get_theme_mod( 'gplus_link', 'cannelflow' ); ?>"><div id="google" class="object">G</div></a>
        	</div>
        </div>
        
        <div id="main-linked">
    		<div id="cadre-linked" class="object">
        		<a href="https://www.instagram.com/<?php echo get_theme_mod( 'gplus_link', 'cannelflow' ); ?>>"<div id="linked" class="object">I</div></a>
        	</div>
        </div>
        
    </div>
</div>
<!-- PART 7 - COPYRIGHT -->

<div id="A7">

	<div id="wrapper-A7">
    <div id="line-A7"></div>
	<div id="copyright"><strong> &copy; Copyright <?php echo date("Y"); ?>. All rights reserved.&nbsp Designed by <a href="#"><?php echo get_theme_mod( 'footer_author', 'cannelflow' ); ?></a></strong></div>
    </div>
    
</div>

<!-- SCRIPT -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo bloginfo('template_directory') ; ?>/JS/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="<?php echo bloginfo('template_directory') ; ?>/JS/jquery.localScroll.min.js"></script>
    <script type="text/javascript" src="<?php echo bloginfo('template_directory') ; ?>/JS/jquery-animate-css-rotate-scale.js"></script>
    <script type="text/javascript" src="<?php echo bloginfo('template_directory') ; ?>/JS/wow.min.js"></script>
	<script type="text/javascript">new WOW().init();</script>
      <script type="text/javascript" src="<?php echo bloginfo('template_directory') ; ?>/JS/fastclick.js"></script>
    <script type='application/javascript'>
window.addEventListener('load', function() {
    new FastClick(document.body);
}, false);
</script>

	<script>
	
	$(window).on('beforeunload', function(){
		$(".blank").fadeIn(300);
		$("#main-wrapper-menu,#A1-main,#A2,#A3,#A4,#A5,#A6,#A7").animate({'opacity':'0'},300);
  		$(window).delay(1000).scrollTop(0);
	});
	
   $(document).ready(function() {
	
	$.localScroll();
	
	$(".blank").delay(1000).fadeOut(300);
	$("#wrapper-head").delay(2000).animate({'opacity':'1'},500);
	$("#wrapper-logo").delay(3200).animate({'opacity':'1'},300);
	$("#wrapper-plus").delay(3200).animate({'opacity':'1'},300);
});

$(function() {
	var bar = $('#wrapper-head');
	var opacity = bar.css('opacity');
	var top = bar.css('top');
	
	$(window).scroll(function() {
		if($(this).scrollTop() > 100) {
			bar.stop().animate({ opacity :'0', top :'-10%'},250);
		} 
	});
		
	$(window).scroll(function() {
		if($(this).scrollTop() < 100) {
			bar.stop().animate({ opacity :'1', top :'0'},250);
		}	
	});
});


/*CLICK PLUS AND CROSS MENU*/

var SS = document.getElementById('wrapper-plus');

SS.addEventListener('click', function() {
             $("#main-wrapper-menu").animate({'height':'100%'},500);
             $(".recent-post").delay(500).fadeIn(500);
             $(".category-post").delay(500).fadeIn(500);
			 $("#wrapper-plus").fadeOut(250);
}); 

var WC = document.getElementById('wrapper-cross');

WC.addEventListener('click', function() {
             $("#main-wrapper-menu").animate({'height':'0'},500);
			 $(".recent-post").fadeOut(250);
		     $(".category-post").fadeOut(250);
			 $("#wrapper-plus").delay(1000).fadeIn(250);			 
}); 

/*BUTTON ARROW*/

$(document).on('touchstart mouseover', '#fleche1', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#fleche1").stop().animate({'top':'92.5%'},200);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#fleche1', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#fleche1").stop().animate({'top':'90%'},200);
			 
            event.handled = true;
        } else {
            return false;
        }
});


/*BUTTON LOGO*/

$(document).on('touchstart mouseover', '#wrapper-logo', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#wrapper-logo").stop().animate({'scale':'1.1','opacity':'0.5'},200);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-logo', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#wrapper-logo").stop().animate({'scale':'1','opacity':'1'},200);

            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON PLUS*/

$(document).on('touchstart mouseover', '#wrapper-plus', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#wrapper-plus").stop().animate({'opacity':'0.75','scale':'1.1'},150);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-plus', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#wrapper-plus").stop().animate({'opacity':'1','scale':'1'},150);
			 
            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON CROSS*/

$(document).on('touchstart mouseover', '#wrapper-cross', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#wrapper-cross").stop().animate({'opacity':'0.75','scale':'1.1'},150);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-cross', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#wrapper-cross").stop().animate({'opacity':'1','scale':'1'},150);
			 
            event.handled = true;
        } else {
            return false;
        }
});


/*BUTTON FACEBOOK*/

$(document).on('touchstart mouseover', '#main-facebook', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#facebook").stop().css({'color':'#FFF'});
			 $("#cadre-facebook").stop().css({'background-color':'#7A9DED'});

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#main-facebook', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#facebook").stop().css({'color':'#66676D'});
			 $("#cadre-facebook").stop().css({'background-color':'transparent'});
			 
            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON DRIBBBLE*/

$(document).on('touchstart mouseover', '#main-dribbble', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#dribbble").stop().css({'color':'#FFF'});
			 $("#cadre-dribbble").stop().css({'background-color':'#E29ADE'});


            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#main-dribbble', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#dribbble").stop().css({'color':'#66676D'});
			 $("#cadre-dribbble").stop().css({'background-color':'transparent'});

            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON BEHANCE*/

$(document).on('touchstart mouseover', '#main-behance', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#behance").stop().css({'color':'#FFF'});
			 $("#cadre-behance").stop().css({'background-color':'#606060'});


            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#main-behance', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#behance").stop().css({'color':'#66676D'});
			 $("#cadre-behance").stop().css({'background-color':'transparent'});

            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON LINKED*/

$(document).on('touchstart mouseover', '#main-linked', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#linked").stop().css({'color':'#FFF'});
			 $("#cadre-linked").stop().css({'background-color':'#516182'});


            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#main-linked', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#linked").stop().css({'color':'#66676D'});
			 $("#cadre-linked").stop().css({'background-color':'transparent'});

            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON GOOGLE*/

$(document).on('touchstart mouseover', '#main-google', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#google").stop().css({'color':'#FFF'});
			 $("#cadre-google").stop().css({'background-color':'#EA6E75'});

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#main-google', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#google").stop().css({'color':'#66676D'});
			 $("#cadre-google").stop().css({'background-color':'transparent'});

            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON PAGE2*/

$(document).on('touchstart mouseover', '#main-page2', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#page2").stop().css({'background-color':'transparent','border-color':'#444549'});
			 $("#text-page2").stop().css({'color':'#444549'},250);
			 $("#main-page2").stop().animate({'scale':'1.1'},250);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#main-page2', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#page2").stop().css({'background-color':'#9C9C9C','border-color':'#9C9C9C'});
		     $("#text-page2").stop().css({'color':'#FFF'},250);
	         $("#main-page2").stop().animate({'scale':'1'},250);
			 
            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON PAGE3*/

$(document).on('touchstart mouseover', '#main-page3', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#page3").stop().css({'background-color':'transparent','border-color':'#444549'});
			 $("#text-page3").stop().css({'color':'#444549'},250);
			 $("#main-page3").stop().animate({'scale':'1.1'},250);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#main-page3', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#page3").stop().css({'background-color':'#9C9C9C','border-color':'#9C9C9C'});
		     $("#text-page3").stop().css({'color':'#FFF'},250);
	         $("#main-page3").stop().animate({'scale':'1'},250);
			 
            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON PAGE4*/

$(document).on('touchstart mouseover', '#main-page4', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#page4").stop().css({'background-color':'transparent','border-color':'#444549'});
			 $("#text-page4").stop().css({'color':'#444549'},250);
			 $("#main-page4").stop().animate({'scale':'1.1'},250);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#main-page4', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#page4").stop().css({'background-color':'#9C9C9C','border-color':'#9C9C9C'});
		     $("#text-page4").stop().css({'color':'#FFF'},250);
	         $("#main-page4").stop().animate({'scale':'1'},250);
			 
            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON HEADER LEARN MORE*/

$(document).on('touchstart mouseover', '#wrapper-learnmore', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $(".bouton-learnmore").stop().css({'background-color':'#FFF'});
			 $(".text-learnmore").stop().css({'color':'#333'},250);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-learnmore', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $(".bouton-learnmore").stop().css({'background-color':'transparent'});
		     $(".text-learnmore").stop().css({'color':'#FFF'},250);
			 
            event.handled = true;
        } else {
            return false;
        }
});

	</script>
	
<?php wp_footer() ; ?>
</body>
</html>
