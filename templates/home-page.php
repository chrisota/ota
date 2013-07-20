<?php

/*
 * Template Name: Home Page Template
 */

get_header(); ?>

        <article class="columns twelve offset-by-two">
            <header>
                <h1><?php the_title(); ?></h1>
                <p><?php the_field('sub-heading'); ?></p>
            </header>
        </article>
    </div>
</div>
<!-- End Intro -->

<div class="wrapper" id="wrapper-02">
    <div class="container">
        <aside class="sixteen columns">
            <h2>Let's work together to build something that is pixel perfect</h2>
        </aside>
	</div>
</div>
<!-- End Text -->

<div class="wrapper" id="wrapper-03">
	<div id="timeline">
    	<ol>
        	<li id="timeline-00">
            	<div class="container">
                    <div class="columns five">
                        <h2>Process</h2>
                    </div> 
                    <div class="columns two visible-desktop">
                        <div class="tl-icon-lg icons">&#128161;</div>
                    </div>
                    <div class="columns nine">
                        <!--<h3>How Does It Work</h3>
                        <p>I improve on an idea by taking several steps to ensure you deliever a product your audience will appreciate from a usability and visual standpoint.</p>-->
                	</div>
                </div>            
            </li>
        	<li id="timeline-01">
            	<div class="container">
                    <div class="columns five hidden-phone">
                        <span class="tl-step">Step 01</span>
                    </div>
                    <div class="columns two visible-desktop">
                        <span class="tl-bull" id="tl-bull-01">&bull;</span>
                    </div>
                    <div class="columns nine">
                        <div class="tl-cont" id="tl-cont-01">
                            <div class="tl-icon-sm icons" id="tl-icon-sm-01">&#127891;</div>
                            <?php query_posts('category_name=home-consulting&showposts=1'); 
                            while (have_posts()) : the_post();
                            the_content(); endwhile;?>
                        </div>
                    </div>  
            	</div>          
            </li>
            <li id="timeline-02">
            	<div class="container">
                    <div class="columns five hidden-phone">
                        <span class="tl-step">Step 02</span>
                    </div>
                    <div class="columns two visible-desktop">
                        <span class="tl-bull" id="tl-bull-02">&bull;</span>
                    </div>
                    <div class="columns nine">
                        <div class="tl-cont" id="tl-cont-02">
                    	<div class="tl-icon-sm icons" id="tl-icon-sm-02">&#9998;</div>
                        <?php query_posts('category_name=home-designing&showposts=1'); 
                            while (have_posts()) : the_post();
                            the_content(); endwhile;?>
                 	</div>
                    </div>  
            	</div>          
            </li>
            <li id="timeline-03">
            	<div class="container">
                    <div class="columns five hidden-phone">
                        <span class="tl-step">Step 03</span>
                    </div>
                    <div class="columns two visible-desktop">
                        <span class="tl-bull" id="tl-bull-03">&bull;</span>
                    </div>
                    <div class="columns nine">
                        <div class="tl-cont" id="tl-cont-03">
                    	<div class="tl-icon-sm icons" id="tl-icon-sm-03">&#128712;</div>
                        <?php query_posts('category_name=home-building&showposts=1'); 
                            while (have_posts()) : the_post();
                            the_content(); endwhile;?>
                 	  </div>
                    </div>  
            	</div>          
            </li>
            <li id="timeline-04">
            	<div class="container">
                    <div class="columns five hidden-phone">
                        <span class="tl-step">Step 04</span>
                    </div>
                    <div class="columns two visible-desktop">
                        <span class="tl-bull" id="tl-bull-04">&bull;</span>
                    </div>
                    <div class="columns nine">
                        <div class="tl-cont" id="tl-cont-04">
                    	<div class="tl-icon-sm icons" id="tl-icon-sm-04">&#9874;</div>
                        <?php query_posts('category_name=home-maintaining&showposts=1'); 
                            while (have_posts()) : the_post();
                            the_content(); endwhile;?>
                 	</div>
                    </div>  
            	</div>          
            </li>
            
            <li id="timeline-05">
            	<div class="container">
                    <div class="columns five">
                    </div>
                    <div class="columns two visible-desktop">
                        <div class="tl-icon-lg icons">&#127942;</div>
                    </div>
                    <div class="columns nine">
                    	<!--<h3>Succeeding</h3>
                        <p>By following these basic steps, you can be assured your product will be successful online to help your business grow.</p>-->
                	</div>
                </div>            
            </li>
        </ol>
    </div>
</div>
<!-- End Timeline -->

<div class="wrapper" id="wrapper-04">
    <div class="container">
        <h2 class="columns sixteen">Recent Work</h2>
        <ul>
        <?php query_posts('category_name=home-recent-update&showposts=3');
    while (have_posts()) : the_post();?>
            <li class="column one-third">
                <div class="recent">
                    <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    } 
                    the_content();?>
                </div>
            </li>
        <?php endwhile;?>
        </ul>            
	</div>
</div>
<!-- End Recent Work -->

<div class="wrapper" id="wrapper-05">
    <div class="container">
        <section class="eight columns">
			<h2>Blog</h2>
            <ul>
            <?php query_posts('category_name=blog&showposts=2');
while (have_posts()) : the_post();?>
                <li>
                	<h6><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h6>
					<?php the_excerpt();?>
                    <p><a href="<?php echo get_permalink(); ?>">Read More &gt;</a></p>

                </li>
        	<?php endwhile;?>
			</ul>     
		</section>
        <section class="eight columns">
			<?php 
            if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Homepage - Right') ) : ?>
            <?php endif;?>
            <h6><span><?php echo twitter_count(); ?></span><br />Followers</h6>
		</section>
	
<?php get_footer(); ?>