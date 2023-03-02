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
                <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/">
                                <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        
                        if ($logo && has_custom_logo() ) {
                            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" height="100" width="auto">';
                        }else{
                           echo "<h1>"; 
                           bloginfo( 'name' );
                           echo "</h1>";
                        }
                        ?>
                            </a>
                        </div>

                        <div class="collapse navbar-collapse navbar-right">
                            <?php
                            wp_nav_menu( [
                                'theme-location' => 'top-menu',
                                'container' => 'ul',
                                'menu_class'=> 'nav navbar-nav',
                            ] );
                        ?>
                        </div>
                    </div>
                </nav>
            </header>


