<?= get_header(  );?>



<section id="about">
        <div class="container">

            <div class="section-header">
                <h3 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"><?= the_title( )?></h3>
                <p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Afghan American Research and Academic Foundation <br>
                    (AARAF)
                </p>
            </div>

            <div class="row">
                <div class="wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <?= the_content( );?>
                </div>
            </div>
        </div>
    </section>
<?= get_footer(  ); ?>