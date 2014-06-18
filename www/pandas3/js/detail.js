$(function(){
	$(".p_main_thumb li img").mouseover(function(){
		var img_src=$(this).attr("src");
		$(".p_main_img img").attr("src",img_src);
	});
	$(".p_main_img img").mouseover(function(){
		var img_src=$(this).attr("src");
		var imgDiv='<div id="imgDiv" style="width:400px;height:400px;z-index:10;position:absolute;top:100px;left:480px;"><img style="width:400px;height:400px;" src="'+img_src+'"></div>';
		$("#d_container").append(imgDiv);
	});
	$(".p_main_img img").mouseout(function(){
		$("#imgDiv").remove();
	});
	$(".m_content_tab span").mouseover(function(){
		$(this).parent().children().removeClass("m_active");
		$(this).addClass("m_active");
	});
	$(".shop_cart").click(function(){
		var p_id=$(this).attr("p_id");
		var p_name=$(this).attr("p_name");
		var p_price=$(this).attr("p_price");
		var p_num=$(".purchase_num input").val();
		console.log(p_id,p_name,p_price,p_num);
		$.ajax({
			url:"buy.php",
			type:"GET",
			data:{p_id:p_id,p_name:p_name,p_price:p_price,p_num:p_num},
			dataType:"json",
			success:function(response){
				console.log(response);
			}
		})
	})
})