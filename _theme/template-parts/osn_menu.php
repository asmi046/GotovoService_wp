<!-- <ul class="menu d_flex">
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Обучение</a></li>          
                <li><a href="#">Компании</a></li>          
                <li><a href="#">Клиентам</a></li>
                <li><a href="#">Неисправности</a></li>      
                <li><a href="#">Контакты</a></li>
</ul> -->

<?php wp_nav_menu( [
    'theme_location' => 'menu-head',
    'menu_class' => 'menu d_flex',
	'container' => false ]); ?>