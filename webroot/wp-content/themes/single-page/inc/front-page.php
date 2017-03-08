<?php
/* Template name: Front page */
 get_header(); ?>


<div id="main" class="main-content">

    <section class="hero-section frontpage-section" id="home" data-anchor="home"  style="background: url('<?php the_field('hero_image'); ?>') no-repeat; background-position: top center; background-repeat:  no-repeat; background-size:  cover; background-color: #999;">
        

    </section>

    <section class="about-me-section frontpage-section"  id="about-me" data-anchor="about-me">
        <h2>About me</h2>

        <div class="about-me-copy">
            <div class="about-me-copy__item">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
            </div>
            <div class="about-me-copy__item">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
            </div>
        </div>
        <a class="btn" href="http://www.rickycastellani.com/wp-content/uploads/2017/02/Riccardo-Castellani-CV-.pdf" target="_blank" >Download my CV</a>

    </section>

     <section class="media-section frontpage-section" id="media" data-anchor="media">

         <h2>Media</h2>

        <div class="media-section-content">
            <div class="media-section-wrap">
                <div class="media-section-wrap__inner">
                    <a class="btn" href="http://www.rickycastellani.com/video">See all videos</a>
                    <div class="media-section-content__video" style="background: /*linear-gradient(rgba(244,212,49, .5), rgba(244,212,49, .1)) ,*/url('<?php the_field('media_video_img'); ?>')no-repeat; background-position: top center; background-size:  cover;">
                    </div>
                </div>
            </div>
            <div class="media-section-wrap">
                <div class="media-section-wrap__inner">
                    <a class="btn" href="http://www.rickycastellani.com/photos">See all photos</a>
                    <div class="media-section-content__photo" style="background: /*linear-gradient(rgba(244,212,49, .5), rgba(244,212,49, .1)) ,*/url('<?php the_field('media_photo_img'); ?>')no-repeat; background-position: top center; background-size:  cover;">
                    </div>
                </div>
            </div>

        </div>

    </section>

<!--    <section class="next-gig-section frontpage-section" id="next-gig" data-anchor="next-gig"  style="background: url('<?php //the_field('next_gig_background'); ?>') no-repeat; background-position: center center; background-repeat:  no-repeat; background-size:  cover; background-color: #f5f5f5;">-->

<!--      <div class="next-gig-section__right">-->
<!--           <h2>Next gig</h2>-->
<?php //if( have_rows('next-gig') ):
//			$i = 1;
//            ?>
<!--                <div class="next-gig">-->
<!--                     <ul class="">-->
<!--                    --><?php //while ( have_rows('next-gig') ) : the_row(); ?>
<!---->
<!--                        <li class="next-gig__copy">('--><?php //the_sub_field('next_gig_copy'); ?><!--');"></div>-->
<!--                        <a class="next-gig__link" href="--><?php //the_sub_field('next_gig_link'); ?><!--">Find out more</a></li>-->
<!---->
<!--                    --><?php
//                        $i ++;
//                        endwhile;
//                    ?>
<!--                </ul>-->
<!--            --><?php //else : ?>
<!--                <p>No upcoming gigs</p>-->
<!--            --><?php //endif;?>
<!---->
<!--        </div>-->
<!---->
<!--    </section>-->

    <section class="contact-me-section frontpage-section" id="contact-me" data-anchor="contact-me">
        <h2>Contact me</h2>

        <div id="form-messages" class="emailForm"></div>
            <form action="http://www.rickycastellani.com//wp-content/themes/single-page/inc/form.php" id="emailForm" method="post">
                <fieldset>
                    <legend>Send me a message</legend>
                    <div class="controlgruop">
                        <div>
                            <label for="fname" class="errorM">First name:</label>
                            <input value="" class="defaultText required" type="text" name="fname" id="fname" />
                        </div>
                    </div>
                    <div class="controlgruop">
                        <div>
                            <label for="lname" class="errorM">Last name:</label>
                            <input value="" class="defaultText required" type="text" name="lname" id="lname" />
                        </div>
                    </div>
                    <div class="controlgruop">
                        <div>
                            <label for="email" class="errorM">Email:</label>
                            <input value="" class="defaultText required" type="text" name="email" id="email" />
                        </div>
                    </div>
                    <div class="controlgruop">
                        <div>
                            <label for="text" class="errorM">Message:</label>
                            <textarea class="defaultText required" name="message" id="text"></textarea>
                        </div>
                    </div>

                    <div>
                        <input type="submit" name="submit" value="Send"/>
                    </div>
                </fieldset>
            </form>
        </div>

    </section>



</div>


<?php get_footer(); ?>
