<footer>
    <div class="_container">
        <div class="navigation_footer d_flex f_wrap">
            <div>
                <a href="<? echo get_site_url();?>"> <img class="logo_footer" src="<?php echo get_template_directory_uri();?>/img/logo_white.svg" sizes="any" alt="Логотип подвал"></a>
            </div>
            
            
                <?php get_template_part('template-parts/osn_menu');?>
            
        </div>
        <div class="general_info d_flex jc_sb">
            <div class="sqp">
                <h3>Услуги</h3>
                <ul>
                    <li><a href="#">Ремонт бытовой техники</a></li>
                    <li><a href="#">Ремонт цифровой техники</a></li>
                    <li><a href="#">Ремонт электрики</a></li>
                    <li><a href="#">Ремонт сантехники</a></li>
                    <li><a href="#">Услуги мастера на час</a></li>
                    <li><a href="#">Транспортировка и установка техники</a></li>
                    <li><a href="#">Обучение ремонту бытовой техники</a></li>
                </ul>
            </div>
            <div class="sqp">
                <h3>Вопросы</h3>
                <ul>
                    <li><a href="#">Типовые неисправности бытовой техники</a></li>
                    <li><a href="#">Типовые неисправности холодильников</a></li>
                    <li><a href="#">Типовые неисправности стиральных машин</a></li>
                    <li><a href="#">Типовые неисправности кухонных плит</a></li>
                    <li><a href="#">Типовые неисправности сантехники</a></li>
                    <li><a href="#">Типовые неисправности электрики</a></li>
                </ul>
            </div>
            <div class="sqp">
                <h3>Реквизиты</h3>
                <ul>
                    <li><? echo carbon_get_theme_option("company")?></li>
                    <li>ИНН <? echo carbon_get_theme_option("inn")?></li>
                    <li><a href="mailto:<? echo carbon_get_theme_option("email")?>"><? echo carbon_get_theme_option("email")?></a></li>
                    <li><a href="tel:<? echo carbon_get_theme_option("phone")?>"><? echo carbon_get_theme_option("phone")?></a></li>
                    <li><? echo carbon_get_theme_option("adress")?></li>
                    <li>ОГРН <? echo carbon_get_theme_option("ogrn")?></li>
                </ul>
                <a href="#">Политика персональных данных</a>
                <p>* Некоторые виды работ могут быть выполнены подрядными организациями</p>
            </div>
        </div>
<!--И тут либо <hr> либо div со стилем background-color:blue и height: 3-4px с border-radius -->
<div class="hr"></div>
   <p class="offer_footer">Вся предоставленная на сайте информация, касающаяся сроков, стоимости и порядка предоставления услуг, носит информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями Статьи 437(2) Гражданского кодекса РФ.</p>     
    </div>
</footer>