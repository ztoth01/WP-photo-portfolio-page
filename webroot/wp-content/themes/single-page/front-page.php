<?php
/* Template name: Front page */
 get_header(); ?>


<div id="" class="container">

        <?php if( have_rows('front_page') ):
            $i = 1;
            ?>
            <div id="imgFront" class="imgFront">
                <div id="crossfade" class="crossfade ">
                    <?php while ( have_rows('front_page') ) : the_row(); ?>

<!--                    <a href="--><?php //the_sub_field('link_to'); ?><!--">-->
                        <img class="" src="<?php the_sub_field('image_front-page'); ?>" alt="<?php echo $i;?>" />
<!--                     </a>-->

                    <?php
                        $i ++;
                        endwhile;
                    ?>
                </div>
            </div>
        <?php endif; ?>
</div>
<?php get_footer(); ?>
