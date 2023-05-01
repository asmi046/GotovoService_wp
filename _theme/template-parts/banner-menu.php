<div class="bnr_menu brad_12 white_bg pos_abs d_flex jc_sb">
    <?    
     global $menu_combine;

    foreach ($menu_combine as $key => $value) { ?>
          
          <div class="bnr_menu_punct">
               <a href="#"><span><? echo $value["title"]?></span></a>
               
               <? if (!empty($value["subpuncts"])) {?>
                    <div class="sub_menu ">
                         <div class="sub_menu_puncts d_flex f_wrap">
                         <? foreach ($value["subpuncts"] as $itemSub) {
                         ?>
                              <a href="<? echo $itemSub->url?>"><span><? echo $itemSub->title?></span></a>
                         <? 
                              }
                         ?>
                         </div>
                    </div>
               <? }?>
          </div> 
    <? } ?>
      


</div>