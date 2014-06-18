<?php
	require './config/smarty_set.php';
	require 'DB.php';
	require 'shopCart.php';
	require './config/config.php';
	
	class ThreePandasIndex{
		private static $action;
		private static $smarty;
		public static function Display($_action,$_smarty){
			self::$smarty=$_smarty;
			if($_action){
				self::$action=$_action;
				self::$_action();
			}else{
				self::$action="index";
				self::index();
			}
		}
		
		private static function index(){
			$db=new DB();
			$db->setTable("pro_category");
			$db->field("*");
			$category=$db->sel();
			$db->setTable("product");
			$db->field("*");
			@$category_id=$_GET['category_id'];
			if($category_id){
				$db->setCondition("category_id=$category_id");
			}else{
				$db->setCondition("is_display=1");
			}
			$product=$db->sel();
			//$m_img_dir="pandas3/images/index-product/";
			//self::$smarty->assign('m_img_dir',$m_img_dir);
			self::$smarty->assign('m_img_dir',MAIN_IMAGE_PATH);
			self::$smarty->assign('product',$product);
			self::$smarty->assign('category',$category);
			self::$smarty->display("index.html");
		}
		private static function detail(){
			$db=new DB();
			$db->setTable("product");
			$db->field("*");
			$product_id=$_GET["product_id"];
			$db->setCondition("id=$product_id");
			$product=$db->sel();
			//$m_img_dir="pandas3/images/index-product/";
			//self::$smarty->assign('m_img_dir',$m_img_dir);
			self::$smarty->assign('m_img_dir',MAIN_IMAGE_PATH);
			//$thumb_dir="pandas3/images/thumb/";
			//self::$smarty->assign('thumb_dir',$thumb_dir);
			self::$smarty->assign('thumb_dir',THUMB_IMAGE_PATH);
			//$detail_dir="pandas3/images/detail/";
			//self::$smarty->assign('detail_dir',$detail_dir);
			self::$smarty->assign('detail_dir',DETAIL_IMAGE_PATH);
			self::$smarty->assign("product",$product);
			self::$smarty->display("detail.html");
		}
		private static function addCart(){
			$cart=Cart::Getcat();
			$cart->Additem($_REQUEST["p_id"], $_REQUEST["p_name"], $_REQUEST["p_num"], $_REQUEST["p_price"]);
			$arr=$_SESSION['cat'];
			print_r($arr);
		}
	}
	@$action = $_REQUEST['action'];
	@$_smarty=$smarty;
	ThreePandasIndex::Display($action,$_smarty);
?>
