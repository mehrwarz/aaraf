<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 
get_header(); ?>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">[wpv-post-link]</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<section id="single-post">
    <div class="container my-5">
        <div class="row">
            <?php if ( have_posts() ):; while ( have_posts() ) : the_post(); ?>
                <div class="col-md-8">
                    <div class="card">
                        <h3>How to look for inspiration</h3>
                        <div class="d-flex justify-content-between border-bottom">
                            <span>
                                <span class="fs-sm me-2">By:</span>
                                <a class="nav-link position-relative p-0" href="#">
                                    <?=strtolower(sanitize_title_with_dashes(get_the_author()));?>
                                </a>
                            </span>
                            <ul class="social-icons">
                                <span class="fs-sm me-2">share:</span>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif;?>
            <div class="col-md-4 bg-primary-subtle">Sidebar</div>
        </div>
    </div>
</section>

</div>

<?php get_footer(); ?>