<?php get_header() ; ?>
    
    



<!-- BOUTON MENU TAB -->

<div id="wrapper-plus" class="object"></div>

<a name="ancre"></a>

<!-- PART 3 - PORTFOLIO ARTICLES 3 GRID -->

<div id="wrapper-A3" class="object">
    
    	    
    	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	    
    	       <div id="wrapper-post1" class="text-part-A5">
                <h1><?php the_title() ; ?></h1>
            	<h3>
            	    Published On <?php the_time('F j, Y'); ?> 
            	    By <?php the_author_posts_link(); ?>
            	    Category <?php if(has_category()) {
                                        the_category(', ');
                                      } else {
                                       echo("No Category Found!!");
                                        }
                                      ?>
                                    <?php if(has_tag()) {
                                        the_tags();
                                      } else {
                                       echo("No Tags Found!!");
                                        }
                                      ?>
            	</h3>
				<hr>
				<a href="<?php the_permalink() ; ?>">
					     <?php the_post_thumbnail('full',array(
                                    'class' => 'img-responsive',
                            )); ?>
				</a>
				
                <div id="A3-left-text-1"> 
                   <?php 
                     $content = get_the_content();
                     echo $content ;
                     echo('<hr>');
                     echo(" Previous Blog Post ");
				     previous_post_link();
				     echo(' ... ');
				     echo(" Next Blog Post ");
				     next_post_link();
                   ?>
                </div>
                <div class="blog-comment">
                    <h3>Leave A Comment</h3>
                    <?php comments_template() ; ?>
                </div>
            </div>
    	    
    	    <?php endwhile; else : ?>
	            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
    
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