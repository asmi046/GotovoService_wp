<div class="rev_blk shadow pad_50_40 d_flex f_col brad_12 border_lg  pos_rel swiper-slide">
    <img src="<?php echo get_template_directory_uri();?>/img/icons/rew_logo.svg" class="rew_stiker pos_abs">
    <h3><? the_title()?></h3>
    <p class="data m_t_22 dgray_color"><? the_date("d.m.Y");?></p>
    <p class="quote m_t_22">
        <? the_excerpt(); ?>
    </p>
    <a href="<? echo carbon_get_the_post_meta( 'reviews_lnk' )?>" class="blue_color m_t_22">Читать в источнике</a>
</div>