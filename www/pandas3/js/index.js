$(function(){
	Index.init();
	Index.lunboPic();
})
var Index={
	totalPic:5,
	currentIndex:"",
	toDisplayNum:0,
	init:function(){
		$(".main_nav ul li").mouseover(function(){
			$(".main_nav ul li").removeClass("category_active");
			$(this).addClass("category_active");
		})
	},
	lunboPic:function(){
		$(".lunbo span").click(function(){
			Index.currentIndex=$(this).attr("val");
			$(this).parent().children().removeClass("current_num");
			$(this).addClass("current_num");
			var Pic=$(this).parent().parent().children("ul");
			$(Pic).children().removeClass("current_pic");
			$(Pic).children("li").eq(Index.currentIndex).addClass("current_pic");
		});
		setTimeout(Index.picNumClick(),3000);
	},
	picNumClick:function(){
		$(".lunbo span").eq(Index.toDisplayNum).trigger("click");
		Index.toDisplayNum=(Index.toDisplayNum+1)%(Index.totalPic);
		setTimeout("Index.picNumClick()",3000);
	}
}