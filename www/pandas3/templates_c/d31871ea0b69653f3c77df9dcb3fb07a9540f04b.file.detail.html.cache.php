<?php /* Smarty version Smarty-3.1.18, created on 2014-06-18 09:52:43
         compiled from "./pandas3/templates/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:37536259153a0f0ebbd34b5-37920513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd31871ea0b69653f3c77df9dcb3fb07a9540f04b' => 
    array (
      0 => './pandas3/templates/detail.html',
      1 => 1403012838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37536259153a0f0ebbd34b5-37920513',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'm_img_dir' => 0,
    'thumbArr' => 0,
    'thumb_dir' => 0,
    'foo' => 0,
    'detailImgArr' => 0,
    'detail_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a0f0ebc0dbb4_03003666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a0f0ebc0dbb4_03003666')) {function content_53a0f0ebc0dbb4_03003666($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>详情页</title>
<script type="text/javascript" src="pandas3/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="pandas3/js/detail.js"></script>
<link href="pandas3/css/detail.css" rel="stylesheet">
</head>
<body>
	<div id="d_container">
		<div class="header">
			<div class="three_logo">
		        	<a href="index.php"><img src="pandas3/images/pandas_logo.jpg"></a>
		    </div>
		</div>
		<div class="main">
			<div class="p_img">
				<div class="p_img_area">
					<a href="index.php">首页</a>
					<span><?php echo $_smarty_tpl->tpl_vars['product']->value[0]["name_rs"];?>
</span>
					<div class="p_main_img">
						<img src='<?php echo $_smarty_tpl->tpl_vars['m_img_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product']->value[0]["main_image_path"];?>
'>
						<!-- <img src="pandas3/images/main-product/main-1.png"> -->
					</div>
					<ul class="p_main_thumb">
						<?php $_smarty_tpl->tpl_vars['thumbArr'] = new Smarty_variable(explode(";",$_smarty_tpl->tpl_vars['product']->value[0]["thumb_path"]), null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thumbArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
							<li><img src='<?php echo $_smarty_tpl->tpl_vars['thumb_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
'></li>
						<?php } ?>
						<!-- <li><img src="pandas3/images/main-product/main-1.png"></li>
						<li><img src="pandas3/images/main-product/main-1.png"></li>
						<li><img src="pandas3/images/main-product/main-1.png"></li> -->
					</ul>
				</div>
			</div>
			<div class="p_price">
				<p class="p_price_title">
					<?php echo $_smarty_tpl->tpl_vars['product']->value[0]["name_rs"];?>

				</p>
				<div class="p_price_area">
					<p class="p_price_value"><?php echo $_smarty_tpl->tpl_vars['product']->value[0]["price"];?>
</p>
					<p class="purchase_num">
						<span>数量</span>
						<input type="number">
						<span>件</span>
					</p>
					<div class="shop_cart" p_id="<?php echo $_smarty_tpl->tpl_vars['product']->value[0]['id'];?>
" p_name="<?php echo $_smarty_tpl->tpl_vars['product']->value[0]['name'];?>
" p_price="<?php echo $_smarty_tpl->tpl_vars['product']->value[0]['price'];?>
">加入购物车</div>
					<div class="to_charge">去结算</div>
				</div>
			</div>
		</div>
		<div class="m_content">
			<div class="m_content_title">
				<div class="m_content_tab">
					<span class="product_detail m_active">商品详情</span>
					<span class="comment_detail">评价详情</span>
					<span class="record_detail">购买记录</span>
				</div>
				<div class="m_content_remain">
				</div>
			</div>
			<div class="m_product_detail">
				<p>
					<?php echo $_smarty_tpl->tpl_vars['product']->value[0]["content"];?>

				</p>
				<!-- <p>
					品名：康师傅冰糖雪梨<br>
					1.配料:水，雪梨，糖,啧啧啧啧啧啧啧啧啧啧啧啧啧啧啧在，水水水水谁谁谁水水水水，啧啧啧啧啧啧啧啧啧啧啧啧啧啧啧<br>
					2.保质期：365天<br>
					3.净含量：450ml/瓶<br>
				</p> -->
				<div class="m_product_detail_img">
					<?php $_smarty_tpl->tpl_vars['detailImgArr'] = new Smarty_variable(explode(";",$_smarty_tpl->tpl_vars['product']->value[0]["detail_image_path"]), null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['detailImgArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
						<img src='<?php echo $_smarty_tpl->tpl_vars['detail_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
'>
					<?php } ?>
					<!-- <img src="pandas3/images/main-product/main-1.png">
					<img src="pandas3/images/main-product/main-2.jpg"> -->
				</div>
			</div>
		</div>
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
