<?php 
/***************************************

## Version: 0.1

****************************************/
?>
<div class="main_right sidebar">
<?php
if ( is_active_sidebar( 'sidebar-1' ) ){
	dynamic_sidebar( 'sidebar-1' );
}else{?>
	<div>请到 外观=》小工具 页面设置该模块调用内容。</div>
<?php } ?>
</div>
