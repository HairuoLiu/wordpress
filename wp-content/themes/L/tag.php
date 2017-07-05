<?php
/***************************************

## Version: 0.1

****************************************/
wp_get_header();
?>

 <?php cat_meta_information();?>
    <div class="fl_title">
      <div class="fl01"> <?php single_cat_title(); ?></div>
    </div>
  </div>

  
<?php 
/** 调用分类列表 **/
cx__template('archive');
/** 掉用公共底部 **/
get_footer();
