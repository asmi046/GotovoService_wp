
<?php
global $wpdb;                            
    $all_person = $wpdb->get_results("SELECT * FROM `all_masters`");
    $rez_person = [];    
    foreach( $all_person as $pr ) {
        $rez_person[$pr->city][] = $pr; 
    }
?>

<script>
    const all_pers = <?echo json_encode($all_person)?>;
    console.log(all_pers)
</script>

<section class="prices">
    <div class="_container">
        <h2>Карта вызовов</h2>
        <div class="map_wrap"> 
            <div class="brad_12" id="map_vz">

            </div>

            <div class="map_counter_wrapper pos_abs">
                <? foreach( $rez_person as $key => $value ) { ?>    
                    <div class="map_counter blue_bg brad_12 white_color shadow">
                        <span><?echo count($value); ?></span><br>
                        <? echo $key?>
                    </div>
                <? } ?>

            </div>

        </div>
    </div>
</section>