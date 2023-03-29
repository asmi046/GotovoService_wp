<section class="popular-questions m_b_40">
    <div class="_container">
        <h2>Популярные вопросы</h2>
        <div class="d_flex">   
            <div class="f_1 faq">
                
                <?php
                    $pop_q = carbon_get_theme_option('faq');
                    $i = 1;
					foreach ($pop_q as $pq)  {
                ?>

                <details>
                    <summary><?echo $pq["q"]; ?></summary>
                    <div class="response">
                        <?echo $pq["r"]; ?>
                    </div>
                </details>

                <?
                    }
                ?>
                

                <a href="#" class="btn btn_full">Получить консультацию</a>
            </div>

            <div class="f_1 d_flex pos_rel">
                <div class="circle gray_bg pos_abs"></div>
                <img class="m_auto" src="<?php echo get_template_directory_uri();?>/img/questionsman.webp" alt="">  
            </div>
        </div>
    </div>
</section>