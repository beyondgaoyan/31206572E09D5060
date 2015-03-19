$(function(){
	$(".imgInfo").slide({mainCell:".imgInfo_img ul",effect:"left",titCell:".picture img",titOnClassName:"onbg",prevCell:"#goodsPicPrev",nextCell:"#goodsPicNext",trigger:"click"});
	
	var desc_top = $(".AreaR").offset().top - 65;

	var goodsPar_top = $("#goodsPar").offset().top - 65;
	var ECS_COMMENT_top = $("#ECS_COMMENT").offset().top - 65;
	var goodsFaq = $("#goodsFaq").offset().top - 65;
	
	$(window).scroll(function(){
		if ($(window).scrollTop() > $(".AreaR").offset().top + 52){
			$("#goodsSubBar").show().addClass("goods-sub-bar-play");
		
			if($(window).scrollTop() >= desc_top)
			{

				$("#goddsDescMenu li:not(:eq(0))").removeClass("current");
				$("#goodsSubBar .clearfix li:not(:eq(0))").removeClass("current");
				$("#goddsDescMenu li:eq(0)").addClass("current");
				$("#goodsSubBar .clearfix li:eq(0)").addClass("current");
			}
		
			if($(window).scrollTop() >= goodsPar_top)
			{
				$("#goddsDescMenu li:not(:eq(1))").removeClass("current");
				$("#goodsSubBar .clearfix li:not(:eq(1))").removeClass("current");
				$("#goddsDescMenu li:eq(1)").addClass("current");
				$("#goodsSubBar .clearfix li:eq(1)").addClass("current");
			}
			
			if($(window).scrollTop() >= ECS_COMMENT_top)
			{
				$("#goddsDescMenu li:not(:eq(2))").removeClass("current");
				$("#goodsSubBar .clearfix li:not(:eq(2))").removeClass("current");
				$("#goddsDescMenu li:eq(2)").addClass("current");
				$("#goodsSubBar .clearfix li:eq(2)").addClass("current");
			}
			
			if($(window).scrollTop() >= goodsFaq)
			{
				$("#goddsDescMenu li:not(:eq(3))").removeClass("current");
				$("#goodsSubBar .clearfix li:not(:eq(3))").removeClass("current");
				$("#goddsDescMenu li:eq(3)").addClass("current");
				$("#goodsSubBar .clearfix li:eq(3)").addClass("current");
			}
			
		}
		else
		{
			if($(window).scrollTop() >= desc_top)
			{

				$("#goddsDescMenu li:not(:eq(0))").removeClass("current");
				$("#goodsSubBar .clearfix li:not(:eq(0))").removeClass("current");
				$("#goddsDescMenu li:eq(0)").addClass("current");
				$("#goodsSubBar .clearfix li:eq(0)").addClass("current");
			}
		
			if($(window).scrollTop() >= goodsPar_top)
			{
				$("#goddsDescMenu li:not(:eq(1))").removeClass("current");
				$("#goodsSubBar .clearfix li:not(:eq(1))").removeClass("current");
				$("#goddsDescMenu li:eq(1)").addClass("current");
				$("#goodsSubBar .clearfix li:eq(1)").addClass("current");
			}
			
			if($(window).scrollTop() >= ECS_COMMENT_top)
			{
				$("#goddsDescMenu li:not(:eq(2))").removeClass("current");
				$("#goodsSubBar .clearfix li:not(:eq(2))").removeClass("current");
				$("#goddsDescMenu li:eq(2)").addClass("current");
				$("#goodsSubBar .clearfix li:eq(2)").addClass("current");
			}
			
			if($(window).scrollTop() >= goodsFaq)
			{
				$("#goddsDescMenu li:not(:eq(3))").removeClass("current");
				$("#goodsSubBar .clearfix li:not(:eq(3))").removeClass("current");
				$("#goddsDescMenu li:eq(3)").addClass("current");
				$("#goodsSubBar .clearfix li:eq(3)").addClass("current");
			}
			$("#goodsSubBar").removeClass("goods-sub-bar-play");
			$("#goodsSubBar").css("display","none")
		}
	});
})

function gaq_push(div_obj)
{
	if(div_obj == '')
	{
		$("html,body").animate({scrollTop:$(".AreaR").offset().top-60}, 800);
	}
	else
	{
		$("html,body").animate({scrollTop:$(div_obj).offset().top-60}, 800);
	}
   	return false;
}