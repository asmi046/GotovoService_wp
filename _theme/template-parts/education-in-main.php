<section class="main_education">
    <div class="_container">
        <h2>Обучение мастеров</h2>
            <div class="education-doctrine d_flex jc_sb m_b_40 f_wrap">
                <div class="education-box brad_12 gradient">
                    <div>
                        <p class="education-info"><span><? echo carbon_get_post_meta(225, "teach_number_b1"); ?></span><? echo carbon_get_post_meta(225, "teach_title_b1"); ?></p>
                    </div>
                    <? echo  apply_filters('the_content', carbon_get_post_meta(225, "teach_puncts_b1")); ?>
                </div>

                <div class="education-box brad_12 gradient">
                    <div>
                        <p class="education-info"><span><? echo carbon_get_post_meta(225, "teach_number_b2"); ?></span><? echo carbon_get_post_meta(225, "teach_title_b2"); ?></p>
                    </div>
                    <? echo  apply_filters('the_content', carbon_get_post_meta(225, "teach_puncts_b2")); ?>
                </div>

                <div class="education-box brad_12 gradient">
                    <div>
                        <p class="education-info"><span><? echo carbon_get_post_meta(225, "teach_number_b3"); ?></span><? echo carbon_get_post_meta(225, "teach_title_b3"); ?></p>
                    </div>
                    <? echo  apply_filters('the_content', carbon_get_post_meta(225, "teach_puncts_b3")); ?>
                </div>
                
            </div>

            <div class="education-documents d_flex m_b_40 jc_sb f_wrap">
                <div class="documents-title">
                    <h2>Документы, <br>которые вы получите</h2>
                    <div class="documents-icons"></div>
                    <? echo  apply_filters('the_content', carbon_get_post_meta(225, "teach_all_docs")); ?>
                </div>
                <div class="education-image d_flex f_wrap jc_sb">
                    <img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(225, "teach_sert_1"), 'full')[0];?>" alt="Документ 1">
                    <img src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(225, "teach_sert_2"), 'full')[0];?>" alt="Документ 2">
                </div>
            </div>
    </div>
</section>