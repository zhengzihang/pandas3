<?php
	session_start();
	$arr=$_SESSION["mycar"];
?>
<table width="600" height="37"border="1">
  <tr>
   <td width="96">商品ID</td>
   <td width="158">商品名称</td>
   <td width="154">商品数量</td>
   <td width="177">删除</td>
  </tr>
<?php 
  foreach($arr as $a){
?>
 <tr>
   <td width="96"><?php echo $a["p_id"];?></td>
   <td width="158"><?php echo $a["p_name"];?></td>
   <td width="154"><?php echo $a["p_num"];?></td>
   <td width="177"></td>
</tr>
 
<?php
 
}
 
?>
 
</table>

