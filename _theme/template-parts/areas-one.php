<?php get_template_part('template-parts/areas-template');?>

<section class="areas-main m_b_40">
    <div class="_container" >
        <h2>Районы и метро</h2>

        <?php
            if (is_category())
                $true_cat_id = get_cat_ID( single_cat_title('', 0) );
            else     
                $true_cat_id = get_the_category( $post->ID )[0]->term_id;
        ?>

        <div id="geo_app">
            <div id="raion-info<?echo $true_cat_id?>" class="raion-info active">
                <geo-in-main catid="<?echo $true_cat_id?>"></geo-in-main>
            </div>
        </div>


    </div>
</section>