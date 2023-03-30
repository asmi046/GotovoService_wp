
<section class="page_head gradient ">
    <div class="_container d_flex f_col">
        <?php get_template_part('template-parts/banner-menu');?>
        <?php

            if ( function_exists( 'yoast_breadcrumb' ) ) :
                yoast_breadcrumb( '<div id="breadcrumbs">', '</div>' );
            endif;

        ?>
        <h1><? the_title(); ?></h1>
    </div>
</section>