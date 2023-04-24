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