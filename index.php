<?php get_header(); ?>
        <div class="content-container cf gu8">
            <section class = "blog-roll cf">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="post-summary gu6">
                    <div class="dateblock gu1">
                        <ul>
                            <li><span class="date-month"><?php the_time('M'); ?></span></li>
                            <li><span class="date-day"><?php the_time('d'); ?> </span></li>
                            <li><span class="date-year"><?php the_time('Y'); ?></span></li>
                        </ul>
                    </div>
                    <div class="blogpost gu5">
                            <div class="title">
                                <h1><?php the_title(); ?></h1>
                            </div>
                            <?php if ( has_post_thumbnail()) : ?>
                            <div class="image gu2" style="width: 200px">
                                <?php the_post_thumbnail(); ?>
                            </div>
                              <?php endif; ?>
                            <div class="summary gu3">
                               <h3> <?php the_excerpt(); ?></h3>
                                 <a href="">by <?php the_author_posts_link(); ?></a>
                                 <a href="<?php the_permalink(); ?>" class="read-more">read more >></a>
                            </div>
                    </div>
                </div>  
                <?php endwhile; ?>	
                <?php endif; ?>	
               </section>   
               <div class="pagination">
               	<p class="older"><?php next_posts_link('Older posts'); ?></p>
               	<p class="newer"><?php previous_posts_link('Newer posts'); ?></p>
               </div><!--end pagenation-->	 
               <?php get_sidebar(); ?>
               	<?php get_footer(); ?>