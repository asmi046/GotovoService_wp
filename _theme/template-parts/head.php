<header id="vue_app" >
        <div class="_container">
            
            <a href="<? echo get_site_url();?>" class="logo"></a>
            <div class="city_time d_flex f_col">
                <city-select page-mode="head"></city-select>
                <span class="time_work"><? echo carbon_get_theme_option("worck_time")?></span>
            </div>
            <a href="" class="phone"><? echo carbon_get_theme_option("phone")?></a>
            <?php get_template_part('template-parts/osn_menu');?>
        </div>
</header>