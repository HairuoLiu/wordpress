<?php
/***************************************

## Version: 0.1

****************************************/
wp_get_header();?>
  <div class="fl">
    <div class="fl_title">
      <div class="fl01"> 搜索结果：</div>
    </div>
    <div class="filter-wrap">
      <div class="filter-tag">
		<div class="fl_list"><span> 共找到<?php global $wp_query; echo $wp_query->found_posts; ?>篇关于“<?php echo get_search_query(); ?>”的内容</span>
		</div>            
      </div>      
    </div>
  </div>
<?php
/** 调用分类列表 **/
cx__template('archive');
/**底部**/
get_footer(); 
