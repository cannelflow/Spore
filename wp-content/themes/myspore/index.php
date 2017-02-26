<?php get_header() ; ?>
    
    

<!-- MENU TAB -->
<div id="main-wrapper-menu">
  <div id="wrapper-cross"></div>
	<div id="wrapper-menu">
	
    <div class="recent-post text-part-menutab">
        <ul>
        <li><div id="recent-post-title">Our recent post</div></li>
    	<li><div id="recent-post-1"><a href="spore-post1.html">Post a youtube video</a></div></li>
		<li><div id="recent-post-2"><a href="spore-post2.html">Post an animated image</a></div></li>
		<li><div id="recent-post-3"><a href="spore-post5.html">Post featured image</a></div></li>
		<li><div id="recent-post-4"><a href="spore-post3.html">Auto-resized image</a></div></li>
        </ul>
    </div>
    
	<div class="category-post text-part-menutab">
    	<div id="line-category-post"></div>
        <ul>
        <li><div id="category-post-title">Categories post</div></li>
    	<li><div id="category-post-1"><a href="spore-cat-video.html">Video articles</a></div></li>
		<li><div id="category-post-2"><a href="spore-cat-hotpost.html">Hot articles</a></div></li>
		<li><div id="category-post-3"><a href="spore-cat-image.html">Images</a></div></li>
        </ul>
    </div>
    
    </div>
</div>

<!-- BOUTON MENU TAB -->

<div id="wrapper-plus" class="object"></div>

<!-- HEADER -->

<div id="A1-main">
	    
    <div id="wrapper-logo" class="object">
	<a href="#"><div id="logo" class="shadow object" ><img src="<?php echo get_theme_mod('header_logo'); ?>" width="169" height="45"/></div></a>
	</div>
    
    <div id="A1">
    
    	<div class="blank"></div>
    
    	<div id="A0" style="background-image:url('<?php echo get_theme_mod('header_background') ?>');"></div>
    	<div id="A0-2"></div>
    	<div id="trame"></div>
        
		
    	<div id="wrapper-head">
   			<div id="title" class="object"><?php echo get_theme_mod( 'head_description', 'Spore is a creative onepage wordpress theme for web developers who change the world.' ); ?></div>

            <div id="wrapper-learnmore">
            	<div class="bouton-learnmore object">
        			<div class="text-learnmore object"><?php echo get_theme_mod( 'button_text', 'Learn More' ); ?></div>
    			</div>
            </div>
           <a href="#ancre"><div id="fleche1"></div></a>
   	    </div>


		<div id="wrapper-plus" class="object"></div>
        
	</div>
        
</div>

<a name="ancre"></a>

<!-- PART 2 - TITLE -->

<div id="A2">
    
    <div id="text-2" class="wow fadeIn" data-wow-offset="10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore<span style="color:#999;"> magna aliquam.</span></div>
    
</div>
    
<!-- PART 3 - PORTFOLIO ARTICLES 3 GRID -->

<div id="wrapper-A3" class="object">
    
    	<div id="A3-left">
    	    
    	    
             <?php if(is_active_sidebar('sidebar-search')) : ?>
					<?php dynamic_sidebar('sidebar-search'); ?>
			 <?php endif; ?>
    	    
    	    <?php
    	     $args = array(
    	        'posts_per_page'   => 3,
	            'cat'         => 3,
    	    );
    	    ?>
    	    
    	    <?php $q = new WP_Query($args); ?>
    	    
    	    <?php if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post(); ?>
    	    
    	       	<div id="wrapper-post1" class="text-part-A5">
            	<div class="video-container-1">
					 <a href="<?php the_permalink() ; ?>">
					     <?php the_post_thumbnail('full',array(
                                    'class' => 'img-responsive',
                            )); ?>
					 </a>
                </div>
            
            	<div id="wrapper-A3-left-date-1">
            		<div id="A3-left-date-1"><?php the_time('F j, Y'); ?></div>
                	<div id="A3-left-icone-1"></div>
            	</div> 
            	<ul>
            		<li><div id="A3-left-title-1"><a href="<?php the_permalink() ; ?>"><?php the_title() ; ?></a></div></li>
            	</ul>
                <div id="A3-left-text-1"> 
                   <?php 
                     $content = get_the_content();
                     $content = strip_tags($content);
                     echo substr($content, 0, 200);
                   ?>
                </div>
            </div>
    	    
    	    <?php endwhile; else : ?>
	            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        
        <div id="A3-middle">
        
        	    <?php
    	     $args = array(
    	        'posts_per_page'    => 3,
	            'post_type'         => 'page',
    	    );
    	    ?>
    	    
    	    <?php $q = new WP_Query($args); ?>
    	    
    	    <?php if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post(); ?>
    	    
    	       	<div id="wrapper-post1" class="text-part-A5">
            	<div class="video-container-1">
					 <a href="<?php the_permalink() ; ?>">
					     <?php the_post_thumbnail('full',array(
                                    'class' => 'img-responsive',
                            )); ?>
					 </a>
                </div>
            
            	<div id="wrapper-A3-left-date-1">
            		<div id="A3-left-date-1"><?php the_time('F j, Y'); ?></div>
                	<div id="A3-left-icone-1"></div>
            	</div> 
            	<ul>
            		<li><div id="A3-left-title-1"><a href="<?php the_permalink() ; ?>"><?php the_title() ; ?></a></div></li>
            	</ul>
                <div id="A3-left-text-1"> 
                   <?php 
                     $content = get_the_content();
                     $content = strip_tags($content);
                     echo substr($content, 0, 200);
                   ?>
                </div>
            </div>
    	    
    	    <?php endwhile; else : ?>
	            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        	   
        </div>
  
    	<div id="A3-right">
    	    
    	    
             <?php if(is_active_sidebar('sidebar')) : ?>
					<?php dynamic_sidebar('sidebar'); ?>
			 <?php endif; ?>
    	    
        </div>
        
        
        
	<div class="calage"></div>     
</div>

<!-- PART 4 - BOUTON PAGE 1-4 -->

<div id="A4" class="object">

	<div id="wrapper-A4" class="wow bounceInRight" data-wow-offset="10">
    	
        
        <div id="page1" class="object">
        	<div id="text-page1"><strong>1</strong></div>
        </div>
        
        <div id="main-page2">
        	<div id="page2" class="object">
          		<div id="text-page2" class="object"><strong>2</strong></div>
        	</div>
        </div>
        
        <div id="main-page3">
        	<div id="page3" class="object">
            	<div id="text-page3" class="object"><strong>3</strong></div>
        	</div>
        </div>
        
		<div id="main-page4">
        	<div id="page4" class="object">
            	<div id="text-page4" class="object"><strong>4</strong></div>
        	</div>
		</div>
        
    </div>

</div>



<?php get_footer() ; ?>