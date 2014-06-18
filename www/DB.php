<?php
	class DB{
		protected $conn;
		protected $tableName;
		protected $fieldName; 
		protected $update_values;
		protected $condition;
		protected $result;
		//连接数据库
		public function __construct(){
			$this->conn=mysql_connect(DB_DSN,DB_USER,DB_PASS);
			mysql_query("set names utf8");
			mysql_select_db("pandas3");
		}
		//设置表的字段
		public function field($str){
			if($str){
				$this->fieldName=''.$str.'';
			}else{
				$this->fieldName='*';
			}
			return $this;
			
		}
		//选择数据表
		public function setTable($_tableName){
			$this->tableName=''.$_tableName.'';
			return $this;
		}
		//设置更新值
		public function setValues($_update_values){
			$this->update_values = $_update_values;
			return $this;
		}
		//设置查询条件
		public function setCondition($_condition){
			$this->condition = $_condition;
			return $this;
		}


		//查询数据
		public function sel(){
			if($this->condition){
				$sql="select ".$this->fieldName." from ".$this->tableName.' where '.$this->condition;
//echo "11111</br>";
			}else{
				$sql="select ".$this->fieldName." from ".$this->tableName;
//echo $sql."</br>";
//echo "22222</br>";
			}
			$result=mysql_query($sql);
//var_dump($result);
			$data=array();
			while($row = mysql_fetch_array($result)){
				$data[]=$row;
			}
			//print_r($data);
			return $data;
		}
		//插入数据
		public function insert(){
			$sql='insert into '.$this->tableName.'('.$this->fieldName.') values ('.$this->update_values.')'; 
			$state=mysql_query($sql);
//echo "$sql</br>";
//echo "$state</br>";
			$insert_id = mysql_insert_id();
			$result=array();
			$result = array(
				'state'   =>  $state,
				'id'      =>  $insert_id,
				);

			return $result;
		}
		//更新数据
		public function update(){
			if($this->condition){
				$sql='update '.$this->tableName.' set '.$this->fieldName.'='.$this->update_values.' where '.$this->condition;
//echo "$sql</br>";
			}else{
				$sql='update '.$this->tableName.' set '.$this->fieldName.'='.$this->update_values;
//echo "$sql</br>";
			}
			$result=mysql_query($sql);
			return $result;
		}
		//删除数据
		public function delete(){
			$sql='delete from '.$this->tableName.' where '.$this->condition;
			$result=mysql_query($sql);
//echo "$sql</br>";
			return $result;
		}
		//关闭数据库
		public function __destruct(){
			mysql_close();
		}
	}

/*

    define('DB_DSN','127.0.0.1:3306');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','3pandas');

echo "aaaaa";
$db=new DB();
$db->setTable("product");
$db->field("name,price,category_id,sales,image_url,is_display");
$condition = 'id =13';
$values = '"啊啊啊","2222","333","444","3pandas/images/main-product/main-1.png","1"';
$db->setValues($values);
$db->setCondition($condition);
$result =$db->delete();
var_dump($result);

 */


?>
