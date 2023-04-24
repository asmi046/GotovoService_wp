<?
$services_menu = wp_get_nav_menu_items( 11 );

$menu_combine = [];


foreach ($services_menu as $item) {
     if ($item->menu_item_parent == 0) {
          $menu_combine[$item->db_id] = [
               "title" => $item->title,
               "subpuncts" => []
          ];
     }
}

foreach ($services_menu as $item) {
     if ($item->menu_item_parent != 0) {
          $menu_combine[$item->menu_item_parent]["subpuncts"][] =  $item;
     }
}

// echo "<pre>";
// var_dump ($menu_combine);
// echo "</pre>";
?>

<div class="bnr_menu brad_12 white_bg pos_abs d_flex jc_sb">
    <? foreach ($menu_combine as $key => $value) { ?>
          
          <div class="bnr_menu_punct">
               <a href="#"><span><? echo $value["title"]?></span></a>
               
               <? if (!empty($value["subpuncts"])) {?>
                    <div class="sub_menu ">
                         <div class="sub_menu_puncts d_flex f_wrap">
                         <? foreach ($value["subpuncts"] as $itemSub) {
                         ?>
                              <a href="#"><span><? echo $itemSub->title?></span></a>
                         <? 
                              }
                         ?>
                         </div>
                    </div>
               <? }?>
          </div> 
    <? } ?>
      


</div>