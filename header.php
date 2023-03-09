<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= wp_get_document_title(  ); ?></title>
    <?= wp_head();?>
</head>

<body id="home" class="homepage" <?=body_class( )?>>

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default fixed-top navbar-expand-lg bg-light opacity-75" role="banner">
            <div class="container-fluid mx-5 d-flex justify-content-between">
                <a class="navbar-brand" href="/">
                    <?php
                      $custom_logo_id = get_theme_mod( 'custom_logo' );
                      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                      
                      if ($logo && has_custom_logo() ) {
                          echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" height="100" width="auto">';
                      }else{  echo "<h1>";   bloginfo( 'name' );  echo "</h1>"; } ?>
                </a>

                <div class="phone">
                    <p><i class="fa fa-phone"></i>(484) 545-8792</p>
                    <a href="mailto:info@aaraf.org"><i class="fa fa-envelope"></i> info@aaraf.org</a>
                </div>
                <div class="collapse navbar-collapse" id="topMenu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'top-menu',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));  ?>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topMenu"
                    aria-controls="topMenu" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>