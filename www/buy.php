<?php
	
	session_start();
	ob_start();
	
	$p_id=$_GET["p_id"];
	$p_name=$_GET["p_name"];
	$p_num=$_GET["p_num"];
	$p_price=$_GET["p_price"];
	
	$arr=$_SESSION["mycar"];
	if(is_array($arr)){
		if(array_key_exists($p_id, $arr)){
			$uu=$arr[$p_id];
			$uu["num"]+=1;
			$arr[$p_id]=$uu;
		}else{
			$arr[$p_id]=array("p_id"=>$p_id,"p_name"=>$p_name,"p_num"=>$p_num,"p_price"=>$p_price);
		}
	}else{
		$arr[$p_id]=array("p_id"=>$p_id,"p_name"=>$p_name,"p_num"=>$p_num,"p_price"=>$p_price);
	}
	$_SESSION["mycar"]=$arr;
	ob_clean();
	header("location:car.php");
?>