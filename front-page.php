<?= get_header(  );?>

<?php get_template_part( '/templet-parts/carousel' );?>


<?php if ( have_posts() ) :; the_post();?>
<div class="container px-5 mx-5">
    <div class="section-header">
        <?= the_content();?>
    </div>
</div>
<?php endif;?>

<?= get_footer(  ); ?>