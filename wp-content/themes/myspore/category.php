<?php get_header() ; ?>
    
    

<!-- MENU TAB -->
<div id="main-wrapper-menu">
  <div id="wrapper-cross"></div>
	<div id="wrapper-menu">
	
    <div class="recent-post text-part-menutab">
        <?php if(is_active_sidebar('footer-sidebar-1')) : ?>
					<?php dynamic_sidebar('footer-sidebar-1'); ?>
		<?php endif; ?>
		
		<div id="A5-left" class="wow flipInX" data-wow-offset="10">
    			<div id="left-text-post"><strong>Our recent post</strong></div>
            	<div id="left-line-post"></div>
            	<div id="left-line2-post"></div>
			<ul>	
                <li><div id="left-text-post-1"><strong><a href="spore-post1.html">Post a youtube video</a></strong></div></li>
				<li><div id="left-text-post-2"><strong><a href="spore-post2.html">Post an animated image</a></strong></div></li>
				<li><div id="left-text-post-3"><strong><a href="spore-post5.html">Post featured image</a></strong></div></li>
				<li><div id="left-text-post-4"><strong><a href="spore-post3.html">Auto-resized image</a></strong></div></li>
        	</ul>
            </div>
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



<a name="ancre"></a>


    
<!-- PART 3 - PORTFOLIO ARTICLES 3 GRID -->

<div id="wrapper-A3" class="object">
    
    	<div>
    	    
    	    <h3>Category: <?php single_cat_title() ; ?></h3>
    	    
    	    
    	    
    	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	    
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