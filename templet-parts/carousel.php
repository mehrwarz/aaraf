        <section id="main-slider">
            <div class="owl-carousel">
                <?php 
                $args = array( 'post_type' => 'dynamic_slider'); 
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();?>

                <div class="item" style="background-image:<?= get_the_post_thumbnail_url()? "url(".get_the_post_thumbnail_url().")":'linear-gradient(15deg, #505050, #686eb8)';?>;background-position: center;background-repeat: no-repeat; background-size: cover;
                <?= $link? "background-image:url($link)":''; ?>;">
                    <div class="slider-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="carousel-content">
                                        <h2><?= the_title(); ?></h2>
                                        <p><?= the_content( ) ;?> </p>
                                        <a class="btn btn-primary btn-lg" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </section>