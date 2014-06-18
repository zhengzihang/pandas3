<?php /* Smarty version Smarty-3.1.18, created on 2014-06-18 09:50:12
         compiled from "./pandas3/templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:203548304353a0f054615c41-25070789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29823b02f497d1592b66fa6d4087de0025bf7496' => 
    array (
      0 => './pandas3/templates/index.html',
      1 => 1403012760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203548304353a0f054615c41-25070789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'foo' => 0,
    'product' => 0,
    'm_img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a0f054682068_18067513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a0f054682068_18067513')) {function content_53a0f054682068_18067513($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>index</title>
<script type="text/javascript" src="pandas3/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="pandas3/js/index.js"></script>
<link href="pandas3/css/index.css" rel="stylesheet">
</head>
<body>
	<div id="i_container">
		<div class="header">
			<div class="three_logo">
		        	<a href="#"><img src="pandas3/images/pandas_logo.jpg"></a>
		    </div>
		</div>
		<div class="new_intro">
			<p>
	    		Снижает риск ракового заболевания.<br>
				Снимает бессонницу и улучшает качество сна.<br>
				Улучшение здоровья глаз и показателей зрения.<br>
				Помогает нормализовать уровень сахара на начальном этапе появления диабета .<br>
				Помогает снижать вес и улучшение иммунитета и уклепление способности регули
				-рования тела .
    		</p>
	    	<div class="news_img">
	    		<ul>
	    			<li class="current_pic"><img src="pandas3/images/1-1.jpg"></li>
	    			<li><img src="pandas3/images/1-2.jpg"></li>
	    			<li><img src="pandas3/images/1-3.jpg"></li>
	    			<li><img src="pandas3/images/1-4.jpg"></li>
	    			<li><img src="pandas3/images/1-5.jpg"></li>
	    		</ul>
	    		<div class="lunbo">
	    			<span class="current_num" val="0">1</span>
	    			<span val="1">2</span>
	    			<span val="2">3</span>
	    			<span val="3">4</span>
	    			<span val="4">5</span>
	    		</div>
	    	</div>
		</div>
		<div class="main">
			<div class="main_nav">
				<ul>

					<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
						<a href="index.php?category_id='<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
'"><li category_id='<?php echo $_smarty_tpl->tpl_vars['foo']->value["id"];?>
'><img src="pandas3/images/item_icon.jpg"><span><?php echo $_smarty_tpl->tpl_vars['foo']->value["name"];?>
</span></li></a>
					<?php } ?>
				</ul>
	    		<!-- <ul>
	    			<li><img src="pandas3/images/item_icon.jpg"><span>(枸杞)</span></li>
	    			<li><img src="pandas3/images/item_icon.jpg"><span>(零食)</span></li>
	    			<li><img src="pandas3/images/item_icon.jpg"><span>(糖果)</span></li>
	    			<li><img src="pandas3/images/item_icon.jpg"><span>(饮料)</span></li>
	    			<li><img src="pandas3/images/item_icon.jpg"><span>(调料)</span></li>
	    			<li><img src="pandas3/images/item_icon.jpg"><span>(调味汁)</span></li>
	    			<li><img src="pandas3/images/item_icon.jpg"><span>(下酒菜)</span></li>
	    			<li><img src="pandas3/images/item_icon.jpg"><span>(送货)</span></li>
	    		</ul> -->
    		</div>
	    	<div class="main_content">
	    		<ul>
	    			<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
	    				<li product_id='<?php echo $_smarty_tpl->tpl_vars['foo']->value["id"];?>
'><a href="index.php?action=detail&product_id='<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
'"><img src='<?php echo $_smarty_tpl->tpl_vars['m_img_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['foo']->value["main_image_path"];?>
'></a><p><?php echo $_smarty_tpl->tpl_vars['foo']->value["name_rs"];?>
</p></li>
					<?php } ?>
	    		</ul>
	    		<!-- <ul>
	    			<li><a href="index.php?action=detail"><img src="pandas3/images/main-product/main-1.png"></a></li>
	    			<li><img src="pandas3/images/main-product/main-2.jpg"></li>
	    			<li><img src="pandas3/images/main-product/main-3.jpg"></li>
	    			<li><img src="pandas3/images/main-product/main-4.jpg"></li>
	    			<li><img src="pandas3/images/main-product/main-5.jpg"></li>
	    			<li><img src="pandas3/images/main-product/main-6.jpg"></li>
	    			<li><img src="pandas3/images/main-product/main-7.jpg"></li>
	    			<li><img src="pandas3/images/main-product/main-8.jpg"></li>
	    			<li><img src="pandas3/images/main-product/main-9.jpg"></li>
	    			<li><img src="pandas3/images/main-product/main-10.jpg"></li>
	    			<li><img src="pandas3/images/main-product/main-11.jpg"></li>
	    			<li><img src="pandas3/images/main-product/main-12.jpg"></li>
	    			<li><img src="pandas3/images/main-product/main-1.png"></li>
	    			<li><img src="pandas3/images/main-product/main-2.jpg"></li>
	    			<li><img src="pandas3/images/main-product/main-3.jpg"></li>
	    			<li><img src="pandas3/images/main-product/main-9.jpg"></li>
	    			<li><img src="pandas3/images/main-product/main-10.jpg"></li>
	    			<li><img src="pandas3/images/main-product/main-11.jpg"></li>
	    		</ul> -->
	    	</div>
		</div>
		<div style="clear:both;"></div>
		<div class="footer">
			<div class="slider_t">
		    	<p>Please join us Three Pandas.com</p>
		    </div>
		    <div class="slider_b">
		    	<p>yjl444693812@yandex.ru 9681812059 Дмитрий   9681812058Лёва</p>
		    </div>
		</div>
	</div>
</body>
</html><?php }} ?>
