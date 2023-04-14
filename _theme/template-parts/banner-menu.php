<?
$services_menu = wp_get_nav_menu_items( 11 );

// echo "<pre>";
// var_dump ($services_menu);
// echo "</pre>";
?>

<div class="bnr_menu brad_12 white_bg pos_abs d_flex jc_sb">
    <? foreach ($services_menu as $item) {
          if ($item->menu_item_parent == 0) {
     ?>
          
          <div class="bnr_menu_punct">
               <a href="#"><span><? echo $item->title?></span></a>
               
               <!-- 
               <div class="sub_menu ">
                    <div class="sub_menu_puncts">

                    </div>
               </div> -->
          </div> 
    <? 
          }
     } 
     ?>
    


</div>