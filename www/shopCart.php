<?php

	class Cart{
		static protected $ins;//实例变量
		protected $item=array();//放商品的容器
		
		//禁止外部调用
		final protected function __construct(){
			session_start();//使用session之前一定要将session开启
			ob_start();
		}
		
		//禁止克隆
		final protected function __clone(){
			
		}
		
		//类内部实例化
		static protected function Getins(){
			if(!(self::$ins instanceof self)){
				self::$ins=new self();
			}
			return self::$ins;
		}
		
		//为了能使商品跨页面保存,放到 session中
		public function Getcat(){
			if(!($_SESSION['cat'])||!($_SESSION['cat'] instanceof self)){
				$_SESSION['cat']=self::Getins();
			}
			return $_SESSION['cat'];
		}
		//保存商品时检验是否已经在购物车里了
		public function Initem($goods_id){
			if($this->Gettype()==0){
				return false;
			}
			if(!(array_key_exists($goods_id, $this->item))){
				return false;
			}else{
				return $this->item[$goods_id]['num'];
			}
		}
		
		//添加一个商品 
		public function Additem($goods_id,$name,$num,$price){
			if($this->Initem($goods_id)!=false){
				$this->item[$goods_id]['num']+=$num;
				return;
			}
			$this->item[$goods_id]=array();//一个商品为一个数组
			$this->item[$goods_id]['num']=$num;
			$this->item[$goods_id]['name']=$name;
			$this->item[$goods_id]['price']=$price;
			
		}
		
		//减少一个商品
		public function Reduceitem($goods_id,$num){
			if($this->Initem($goods_id)==false){
				return;
			}
			if($num>$this->Getnum($goods_id)){
				unset($this->item[$goods_id]);
			}else{
				$this->item[$goods_id]['num']-=$num;
			}
		}
		
		//去掉一个商品
		public function Delitem($goods_id){
			if($this->Initem($goods_id)){
				unset($this->item[$goods_id]);
			}
		}
		
		//返回购买的商品列表
		public function Itemlist(){
			return $this->item;
		}
		
		//一共几种商品
		public function Gettype(){
			return count($this->item);
		}
		
		//获得一种商品的总个数
		public function Getnum($goods_id){
			return $this->item[$goods_id]['num'];
		}
		
		//查询购物车中有多少个商品
		public function Getnumber(){
			$num=0;
			if($this->Gettype()==0){
				return 0;
			}
			foreach($this->item as $k=>$v){
				$num+=$v['num'];
			}
			return $num;
		}
		
		//计算zong价格
		public function Getprice(){
			$price=0;
			if($this->Gettype()==0){
				return 0;
			}
			foreach($this->item as $k=>$v){
				$price+=$v['num']*$v['price'];
			}
			return $price;
		}
		
		//清空购物车
		public function Emptyitem(){
			$this->item=array();
		}
	}
?>