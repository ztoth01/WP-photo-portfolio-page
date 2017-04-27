<?php
/* Template name: Front page */
 get_header(); ?>


<div id="" class="container" style="max-width: 90%;">

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

<span class="tigger thumbnailsIcon" id="thumbnailsIcon" style="display:none !important;"></span>
<span class="tigger closeThumbNails" id="closeThumbNails" style="display:none !important;"></span>
<span class="controls previous" id="previous" style="display:none !important;"></span>
<span class="controls next" id="next" style="display:none !important;"></span>

<?php get_footer(); ?>
