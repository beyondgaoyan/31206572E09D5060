<?php exit;?>a:3:{s:8:"template";a:11:{i:0;s:81:"/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/themes/default/category.dwt";i:1;s:92:"/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/themes/default/library/page_header.lbi";i:2;s:88:"/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/themes/default/library/ur_here.lbi";i:3;s:85:"/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/themes/default/library/cart.lbi";i:4;s:94:"/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/themes/default/library/category_tree.lbi";i:5;s:88:"/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/themes/default/library/history.lbi";i:6;s:95:"/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/themes/default/library/recommend_best.lbi";i:7;s:91:"/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/themes/default/library/goods_list.lbi";i:8;s:86:"/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/themes/default/library/pages.lbi";i:9;s:85:"/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/themes/default/library/help.lbi";i:10;s:92:"/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/themes/default/library/page_footer.lbi";}s:7:"expires";i:1404986620;s:8:"maketime";i:1404983020;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>泥_食品_海狗商城演示站</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/default/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/global.js"></script><script type="text/javascript" src="js/compare.js"></script></head>
<body>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div class="block header ">
<div class="top">
 <div class=" logo">
 <a href="index.php" class="icon-common icon-common-logo">  </a>
 </div>
 <div class="right clearfix">
 
   <div class="menu">
 
  <ul class="clearfix">
  <li><a href="" onClick="javascript:window.open('http://wpa.qq.com/msgrd?V=1&uin=405704570&site=qq&menu=yes'+document.location, '_blank','height=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" target="_blank"><strong>在线客服</strong></a></li>
   <li><a href="/user.php">我的海狗商城</a></li>
	  
	      <li id="topNav" class="clearfix">
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script><script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/jquery.SuperSlide.js"></script>    <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script>    <font id="ECS_MEMBERZONE">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </font>
    </li>
   							
   </ul>
   
   </div>
    
<div id="search" class="search">
     
        <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()"  >
		
          <input name="keywords" type="text" id="keyword" value="饼 干" onclick="javascript:this.value=''" class="txt " />
          <input name="imageField" type="submit" value="" class="hdbtnsearch mbtn"  />
	<span class="icon-common icon-common-search iconsear"></span>
        </form>
      
      <label  class="hot">
       
          <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
           alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
	
    </script>
   
        <span>搜索热词：</span>  <a href="search.php?keywords=%E8%AF%BA%E5%9F%BA%E4%BA%9A">诺基亚</a><a href="search.php?keywords=%E8%8B%B9%E6%9E%9C">苹果</a><a href="search.php?keywords=%E4%B8%89%E6%98%9F">三星</a></label>
    </div>
<div class="header_menu_top_cart">
   <div   class="buy_car_bg clearfix"  onmouseover="this.className='buy_car_bg ul1_on'" onmouseout=  "this.className='buy_car_bg'">
	
	<img src="themes/default/imagesgy/car.png" width="16" height="13" style="float:left; margin-right:5px; margin-left:18px; margin-top:13px; line-height:13px;" /> 
	<script type="text/javascript" src="js/transport.js"></script><div id="ECS_CARTINFO" style="float:left">
 554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca   
     </div>
<script type="text/javascript">
function deleteCartGoods(rec_id)
{
Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}
/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
      document.getElementById('ECS_CARTINFO').innerHTML = res.content;
  }
}
</script>
	  </div>
	  </div>
   </div>
  
    </div>
   <div class="blank"></div>
 
   <div id="mainNav" class="block nav"  style="position:relative; z-index:999;" > 
   <div class=" category_all2 " onmouseover="this.className='category_all2 category_all2_on'" onmouseout="this.className='category_all2'"> <a class="all" href="catalog.php" style="color:#FFFFFF">全部商品分<em class="tri icon-header-arrow" style=""></em></a>
        <div class="my_left_category my_left_category2" id="aaa"  style="top:45px;" >
		    <ul class="lists">
                          
            <li class="category_none" onmouseover="this.className='category_none category_over'" onmouseout="this.className='category_none'">
              <a class="tit" href="category-95-b0.html" >母婴用品 </a> 
            <em class="icon-common icon-common-arrowright"></em>
            
             <label class="tri" ><i></i></label>
                <div  class="show " >
				<div class="lt">
				<dl class="firstdl">
                                    
                    <dd> <a href="category-123-b0.html">婴幼儿辅食</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-128-b0.html">纸尿裤</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-137-b0.html">浴盆温度计</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-142-b0.html">婴儿奶瓶</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-144-b0.html">奶瓶微波消毒专用袋</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-147-b0.html">拉拉裤</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-149-b0.html">奶嘴</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-152-b0.html">安抚奶嘴</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-156-b0.html">婴儿餐具</a> </dd>
                    
                   
                
                  				  <div  style="clear:both;"></div>
				  <dt class="dton"><a href="#"><span class="icon-common icon-common-grid"></span>全部分类</a></dt>
				    </dl>
				  </div>
                </div>
                
             
              <div class="dang"></div>
            </li>
       
                                    
            <li class="category_none" onmouseover="this.className='category_none category_over'" onmouseout="this.className='category_none'">
              <a class="tit" href="category-98-b0.html" >食品饮料 </a> 
            <em class="icon-common icon-common-arrowright"></em>
            
             <label class="tri" ><i></i></label>
                <div  class="show " >
				<div class="lt">
				<dl class="firstdl">
                                    
                    <dd> <a href="category-118-b0.html">饼干</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-119-b0.html">巧克力</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-120-b0.html">咖啡</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-129-b0.html">面</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-133-b0.html">速溶咖啡</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-145-b0.html">红茶</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-168-b0.html">果汁</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-175-b0.html">矿泉水</a> </dd>
                    
                   
                
                  				  <div  style="clear:both;"></div>
				  <dt class="dton"><a href="#"><span class="icon-common icon-common-grid"></span>全部分类</a></dt>
				    </dl>
				  </div>
                </div>
                
             
              <div class="dang"></div>
            </li>
       
                                    
            <li class="category_none" onmouseover="this.className='category_none category_over'" onmouseout="this.className='category_none'">
              <a class="tit" href="category-99-b0.html" >日用百货 </a> 
            <em class="icon-common icon-common-arrowright"></em>
            
             <label class="tri" ><i></i></label>
                <div  class="show " >
				<div class="lt">
				<dl class="firstdl">
                                    
                    <dd> <a href="category-124-b0.html">手工皂</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-130-b0.html">毛巾</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-146-b0.html">洗涤剂</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-148-b0.html">牙膏</a> </dd>
                    
                   
                
                  				  <div  style="clear:both;"></div>
				  <dt class="dton"><a href="#"><span class="icon-common icon-common-grid"></span>全部分类</a></dt>
				    </dl>
				  </div>
                </div>
                
             
              <div class="dang"></div>
            </li>
       
                                    
            <li class="category_none" onmouseover="this.className='category_none category_over'" onmouseout="this.className='category_none'">
              <a class="tit" href="category-100-b0.html" >厨卫用具 </a> 
            <em class="icon-common icon-common-arrowright"></em>
            
             <label class="tri" ><i></i></label>
                <div  class="show " >
				<div class="lt">
				<dl class="firstdl">
                                    
                    <dd> <a href="category-122-b0.html">保温杯</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-126-b0.html">滤水壶滤芯</a> </dd>
                    
                   
                
                                    
                    <dd> <a href="category-150-b0.html">锅具</a> </dd>
                    
                   
                
                  				  <div  style="clear:both;"></div>
				  <dt class="dton"><a href="#"><span class="icon-common icon-common-grid"></span>全部分类</a></dt>
				    </dl>
				  </div>
                </div>
                
             
              <div class="dang"></div>
            </li>
       
                                    
            <li class="category_none" onmouseover="this.className='category_none category_over'" onmouseout="this.className='category_none'">
              <a class="tit" href="category-127-b0.html" >小家电 </a> 
            <em class="icon-common icon-common-arrowright"></em>
            
             <label class="tri" ><i></i></label>
                <div  class="show " >
				<div class="lt">
				<dl class="firstdl">
                                    
                    <dd> <a href="category-131-b0.html">血压计</a> </dd>
                    
                   
                
                  				  <div  style="clear:both;"></div>
				  <dt class="dton"><a href="#"><span class="icon-common icon-common-grid"></span>全部分类</a></dt>
				    </dl>
				  </div>
                </div>
                
             
              <div class="dang"></div>
            </li>
       
                                    
            <li class="category_none" onmouseover="this.className='category_none category_over'" onmouseout="this.className='category_none'">
              <a class="tit" href="category-163-b0.html" >卫生巾 </a> 
            <em class="icon-common icon-common-arrowright"></em>
            
             <label class="tri" ><i></i></label>
                <div  class="show " >
				<div class="lt">
				<dl class="firstdl">
                                    
                    <dd> <a href="category-174-b0.html">卫生巾</a> </dd>
                    
                   
                
                  				  <div  style="clear:both;"></div>
				  <dt class="dton"><a href="#"><span class="icon-common icon-common-grid"></span>全部分类</a></dt>
				    </dl>
				  </div>
                </div>
                
             
              <div class="dang"></div>
            </li>
       
                                    
            <li class="category_none" onmouseover="this.className='category_none category_over'" onmouseout="this.className='category_none'">
              <a class="tit" href="category-164-b0.html" >耳温枪 </a> 
            <em class="icon-common icon-common-arrowright"></em>
            
             <label class="tri" ><i></i></label>
                <div  class="show " >
				<div class="lt">
				<dl class="firstdl">
                                    
                    <dd> <a href="category-170-b0.html">耳温枪</a> </dd>
                    
                   
                
                  				  <div  style="clear:both;"></div>
				  <dt class="dton"><a href="#"><span class="icon-common icon-common-grid"></span>全部分类</a></dt>
				    </dl>
				  </div>
                </div>
                
             
              <div class="dang"></div>
            </li>
       
                                    
            <li class="category_none" onmouseover="this.className='category_none category_over'" onmouseout="this.className='category_none'">
              <a class="tit" href="category-165-b0.html" >牛奶 </a> 
            <em class="icon-common icon-common-arrowright"></em>
            
             <label class="tri" ><i></i></label>
                <div  class="show " >
				<div class="lt">
				<dl class="firstdl">
                                    
                    <dd> <a href="category-173-b0.html">牛奶</a> </dd>
                    
                   
                
                  				  <div  style="clear:both;"></div>
				  <dt class="dton"><a href="#"><span class="icon-common icon-common-grid"></span>全部分类</a></dt>
				    </dl>
				  </div>
                </div>
                
             
              <div class="dang"></div>
            </li>
       
                                    
            <li class="category_none" onmouseover="this.className='category_none category_over'" onmouseout="this.className='category_none'">
              <a class="tit" href="category-166-b0.html" >安全座椅 </a> 
            <em class="icon-common icon-common-arrowright"></em>
            
             <label class="tri" ><i></i></label>
                <div  class="show " >
				<div class="lt">
				<dl class="firstdl">
                                    
                    <dd> <a href="category-171-b0.html">安全座椅</a> </dd>
                    
                   
                
                  				  <div  style="clear:both;"></div>
				  <dt class="dton"><a href="#"><span class="icon-common icon-common-grid"></span>全部分类</a></dt>
				    </dl>
				  </div>
                </div>
                
             
              <div class="dang"></div>
            </li>
       
                                    
            <li class="category_none" onmouseover="this.className='category_none category_over'" onmouseout="this.className='category_none'">
              <a class="tit" href="category-176-b0.html" >奶粉 </a> 
            <em class="icon-common icon-common-arrowright"></em>
            
             <label class="tri" ><i></i></label>
                <div  class="show " >
				<div class="lt">
				<dl class="firstdl">
                                    
                    <dd> <a href="category-177-b0.html">奶粉</a> </dd>
                    
                   
                
                  				  <div  style="clear:both;"></div>
				  <dt class="dton"><a href="#"><span class="icon-common icon-common-grid"></span>全部分类</a></dt>
				    </dl>
				  </div>
                </div>
                
             
              <div class="dang"></div>
            </li>
       
                    		     </ul>
        </div>
      </div>
               
              <ul class="u1" onmouseover="this.className='u1 u1_over '" onmouseout="this.className='u1'"   >
  <a class="a1" href="/">首页</a>
  </ul>
                           
              <ul class="u1" onmouseover="this.className='u1 u1_over '" onmouseout="this.className='u1'"   >
  <a class="a1" href="category.php?id=20">跨境购</a>
  </ul>
                           
              <ul class="u1" onmouseover="this.className='u1 u1_over '" onmouseout="this.className='u1'"   >
  <a class="a1" href="category.php?id=21">预售商品</a>
  </ul>
                           
              <ul class="u1" onmouseover="this.className='u1 u1_over '" onmouseout="this.className='u1'"   >
  <a class="a1" href="category.php?id=25">加拿大产品</a>
  </ul>
                           
              <ul class="u1" onmouseover="this.className='u1 u1_over '" onmouseout="this.className='u1'"   >
  <a class="a1" href="category.php?id=22">德国产品</a>
  </ul>
                           
              <ul class="u1" onmouseover="this.className='u1 u1_over '" onmouseout="this.className='u1'"   >
  <a class="a1" href="category.php?id=23">英国产品</a>
  </ul>
                           
              <ul class="u1" onmouseover="this.className='u1 u1_over '" onmouseout="this.className='u1'"   >
  <a class="a1" href="category.php?id=24">美国产品</a>
  </ul>
                    
 </div>
 
	
	
	
</div>
<div class="block box">
 <div id="ur_here">
  当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=16">食品</a> <code>&gt;</code> <a href="category.php?id=27">泥</a> </div>
</div>
<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaL">
    
<div id="ECS_CARTINFO" style="float:left">
 554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca   
     </div>
<script type="text/javascript">
function deleteCartGoods(rec_id)
{
Ajax.call('flow.php?step=delete_cart_goods', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}
/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
      document.getElementById('ECS_CARTINFO').innerHTML = res.content;
  }
}
</script><div class="box">
 <div class="box_1">
  <div id="category_tree">
         <dl>
     <dt><a href="category.php?id=26">米粉</a></dt>
            
       </dl>
         <dl>
     <dt><a href="category.php?id=27">泥</a></dt>
            
       </dl>
     
  </div>
 </div>
</div>
<div class="blank5"></div>
 <div class="box" id='history_div'>
 <div class="box_1">
  <h3><span>浏览历史</span></h3>
  <div class="boxCenterList clearfix" id='history_list'>
    554fcae493e564ee0dc75bdf2ebf94cahistory|a:1:{s:4:"name";s:7:"history";}554fcae493e564ee0dc75bdf2ebf94ca  </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>
    
  </div>
  
  
  <div class="AreaR">
	 
	  	  <div class="box">
		 <div class="box_1">
			<h3><span>商品筛选</span></h3>
						<div class="screeBox">
			  <strong>品牌：</strong>
														<span>全部</span>
																			<a href="category.php?id=27&amp;brand=1&amp;price_min=0&amp;price_max=0">德国喜宝HIPP</a>&nbsp;
																			<a href="category.php?id=27&amp;brand=2&amp;price_min=0&amp;price_max=0">德国汉高</a>&nbsp;
												</div>
											 </div>
		</div>
		<div class="blank5"></div>
	  	 
   
<br />
<b>Deprecated</b>:  preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in <b>/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/includes/cls_template.php</b> on line <b>300</b><br />
<br />
<b>Strict Standards</b>:  Only variables should be passed by reference in <b>/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/includes/cls_template.php</b> on line <b>422</b><br />
<br />
<b>Strict Standards</b>:  Only variables should be passed by reference in <b>/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/includes/cls_template.php</b> on line <b>422</b><br />
<br />
<b>Strict Standards</b>:  Only variables should be passed by reference in <b>/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/includes/cls_template.php</b> on line <b>422</b><br />
<br />
<b>Strict Standards</b>:  Only variables should be passed by reference in <b>/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/includes/cls_template.php</b> on line <b>422</b><br />
<br />
<b>Deprecated</b>:  preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in <b>/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/includes/cls_template.php</b> on line <b>552</b><br />
<br />
<b>Strict Standards</b>:  Only variables should be passed by reference in <b>/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/includes/cls_template.php</b> on line <b>422</b><br />
<br />
<b>Strict Standards</b>:  Only variables should be passed by reference in <b>/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/includes/cls_template.php</b> on line <b>422</b><br />
<br />
<b>Strict Standards</b>:  Only variables should be passed by reference in <b>/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/includes/cls_template.php</b> on line <b>422</b><br />
<br />
<b>Strict Standards</b>:  Only variables should be passed by reference in <b>/Users/deblue/webDes/mydes/徐凯旋-海狗商城/web/includes/cls_template.php</b> on line <b>422</b><br />
  <div class="box">
 <div class="box_1">
  <h3>
  <span>商品列表</span><a name='goods_list'></a>
  <form method="GET" class="sort" name="listform">
  显示方式：
  <a href="javascript:;" onClick="javascript:display_mode('list')"><img src="themes/default/images/display_mode_list.gif" alt=""></a>
  <a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="themes/default/images/display_mode_grid_act.gif" alt=""></a>
  <a href="javascript:;" onClick="javascript:display_mode('text')"><img src="themes/default/images/display_mode_text.gif" alt=""></a>&nbsp;&nbsp;
  
  <a href="category.php?category=27&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=ASC#goods_list"><img src="themes/default/images/goods_id_DESC.gif" alt="按上架时间排序"></a>
  <a href="category.php?category=27&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC#goods_list"><img src="themes/default/images/shop_price_default.gif" alt="按价格排序"></a>
  <a href="category.php?category=27&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=last_update&order=DESC#goods_list"><img src="themes/default/images/last_update_default.gif" alt="按更新时间排序"></a>
  <input type="hidden" name="category" value="27" />
  <input type="hidden" name="display" value="grid" id="display" />
  <input type="hidden" name="brand" value="0" />
  <input type="hidden" name="price_min" value="0" />
  <input type="hidden" name="price_max" value="0" />
  <input type="hidden" name="filter_attr" value="0" />
  <input type="hidden" name="page" value="1" />
  <input type="hidden" name="sort" value="goods_id" />
  <input type="hidden" name="order" value="DESC" />
  </form>
  </h3>
      <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
            <div class="centerPadd">
    <div class="clearfix goodsBox" style="border:none;">
             <div class="goodsItem">
           <a href="goods.php?id=45"><img src="images/201407/thumb_img/45_thumb_G_1404898933747.jpg" alt="德国pril原..." class="goodsimg" /></a><br />
           <p><a href="goods.php?id=45" title="德国pril原装进口 芦荟护肤洗洁精 超浓缩600ML 敏感型孕妇可用">德国pril原...</a></p>
                       市场价<font class="market_s">￥71元</font><br />
                                    本店价<font class="shop_s">￥59元</font><br />
                       <a href="javascript:collect(45);" class="f6">收藏</a> |
           <a href="javascript:addToCart(45)" class="f6">购买</a> |
           <a href="javascript:;" id="compareLink" onClick="Compare.add(45,'德国pril原...','0')" class="f6">比较</a>
        </div>
                 <div class="goodsItem">
           <a href="goods.php?id=44"><img src="images/201407/thumb_img/44_thumb_G_1404898081265.jpg" alt="德国汉高pri..." class="goodsimg" /></a><br />
           <p><a href="goods.php?id=44" title="德国汉高pril原味浓缩高效餐具洗洁精 蓝瓶加量装900ml">德国汉高pri...</a></p>
                       市场价<font class="market_s">￥66元</font><br />
                                    本店价<font class="shop_s">￥55元</font><br />
                       <a href="javascript:collect(44);" class="f6">收藏</a> |
           <a href="javascript:addToCart(44)" class="f6">购买</a> |
           <a href="javascript:;" id="compareLink" onClick="Compare.add(44,'德国汉高pri...','0')" class="f6">比较</a>
        </div>
                 <div class="goodsItem">
           <a href="goods.php?id=43"><img src="images/201407/thumb_img/43_thumb_G_1404897246614.jpg" alt="德国汉高原装p..." class="goodsimg" /></a><br />
           <p><a href="goods.php?id=43" title="德国汉高原装pril浓缩高效餐具洗洁精粉红清香900毫升">德国汉高原装p...</a></p>
                       市场价<font class="market_s">￥74元</font><br />
                                    本店价<font class="shop_s">￥62元</font><br />
                       <a href="javascript:collect(43);" class="f6">收藏</a> |
           <a href="javascript:addToCart(43)" class="f6">购买</a> |
           <a href="javascript:;" id="compareLink" onClick="Compare.add(43,'德国汉高原装p...','0')" class="f6">比较</a>
        </div>
                 <div class="goodsItem">
           <a href="goods.php?id=42"><img src="images/201407/thumb_img/42_thumb_G_1404897084828.jpg" alt="喜宝HIPP有..." class="goodsimg" /></a><br />
           <p><a href="goods.php?id=42" title="喜宝HIPP有机鸡肉泥 125G 4个月">喜宝HIPP有...</a></p>
                       市场价<font class="market_s">￥83元</font><br />
                                    本店价<font class="shop_s">￥69元</font><br />
                       <a href="javascript:collect(42);" class="f6">收藏</a> |
           <a href="javascript:addToCart(42)" class="f6">购买</a> |
           <a href="javascript:;" id="compareLink" onClick="Compare.add(42,'喜宝HIPP有...','0')" class="f6">比较</a>
        </div>
                 <div class="goodsItem">
           <a href="goods.php?id=41"><img src="images/201407/thumb_img/41_thumb_G_1404897026381.jpg" alt="喜宝有机胡萝卜..." class="goodsimg" /></a><br />
           <p><a href="goods.php?id=41" title="喜宝有机胡萝卜米饭三文鱼泥 8个月">喜宝有机胡萝卜...</a></p>
                       市场价<font class="market_s">￥83元</font><br />
                                    本店价<font class="shop_s">￥69元</font><br />
                       <a href="javascript:collect(41);" class="f6">收藏</a> |
           <a href="javascript:addToCart(41)" class="f6">购买</a> |
           <a href="javascript:;" id="compareLink" onClick="Compare.add(41,'喜宝有机胡萝卜...','0')" class="f6">比较</a>
        </div>
                 <div class="goodsItem">
           <a href="goods.php?id=40"><img src="images/201407/thumb_img/40_thumb_G_1404896967540.jpg" alt="喜宝胡萝卜泥4..." class="goodsimg" /></a><br />
           <p><a href="goods.php?id=40" title="喜宝胡萝卜泥4个月以上">喜宝胡萝卜泥4...</a></p>
                       市场价<font class="market_s">￥83元</font><br />
                                    本店价<font class="shop_s">￥69元</font><br />
                       <a href="javascript:collect(40);" class="f6">收藏</a> |
           <a href="javascript:addToCart(40)" class="f6">购买</a> |
           <a href="javascript:;" id="compareLink" onClick="Compare.add(40,'喜宝胡萝卜泥4...','0')" class="f6">比较</a>
        </div>
                 <div class="goodsItem">
           <a href="goods.php?id=39"><img src="images/201407/thumb_img/39_thumb_G_1404896843800.jpg" alt="德国hipp喜..." class="goodsimg" /></a><br />
           <p><a href="goods.php?id=39" title="德国hipp喜宝牛肉泥 辅食婴儿有机1段牛肉泥4个月+ 补铁补锌">德国hipp喜...</a></p>
                       市场价<font class="market_s">￥83元</font><br />
                                    本店价<font class="shop_s">￥69元</font><br />
                       <a href="javascript:collect(39);" class="f6">收藏</a> |
           <a href="javascript:addToCart(39)" class="f6">购买</a> |
           <a href="javascript:;" id="compareLink" onClick="Compare.add(39,'德国hipp喜...','0')" class="f6">比较</a>
        </div>
                 <div class="goodsItem">
           <a href="goods.php?id=38"><img src="images/201407/thumb_img/38_thumb_G_1404896865445.jpg" alt="德国HIPP喜..." class="goodsimg" /></a><br />
           <p><a href="goods.php?id=38" title="德国HIPP喜宝梨子泥有机免敏辅食健脾胃 4个月">德国HIPP喜...</a></p>
                       市场价<font class="market_s">￥83元</font><br />
                                    本店价<font class="shop_s">￥69元</font><br />
                       <a href="javascript:collect(38);" class="f6">收藏</a> |
           <a href="javascript:addToCart(38)" class="f6">购买</a> |
           <a href="javascript:;" id="compareLink" onClick="Compare.add(38,'德国HIPP喜...','0')" class="f6">比较</a>
        </div>
            </div>
    </div>
        </form>
  
 </div>
</div>
<div class="blank5"></div>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
var button_compare = '';
var exist = "您已经选择了%s";
var count_limit = "最多只能选择4个商品进行对比";
var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>  
<form name="selectPageForm" action="/category.php" method="get">
 <div id="pager" class="pagebar">
  <span class="f_l f6" style="margin-right:10px;">总计 <b>8</b>  个记录</span>
      
      </div>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
  </div>  
  
</div>
<div class="blank5"></div>
<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
    <dl>
  <dt><a href='article_cat.php?id=5' title="新手上路 ">新手上路 </a></dt>
    <dd><a href="article.php?id=9" title="售后流程">售后流程</a></dd>
    <dd><a href="article.php?id=10" title="购物流程">购物流程</a></dd>
    <dd><a href="article.php?id=11" title="订购方式">订购方式</a></dd>
  </dl>
<dl>
  <dt><a href='article_cat.php?id=6' title="手机常识 ">手机常识 </a></dt>
    <dd><a href="article.php?id=12" title="如何分辨原装电池">如何分辨原装电池</a></dd>
    <dd><a href="article.php?id=13" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
    <dd><a href="article.php?id=14" title="如何享受全国联保">如何享受全国联保</a></dd>
  </dl>
<dl>
  <dt><a href='article_cat.php?id=7' title="配送与支付 ">配送与支付 </a></dt>
    <dd><a href="article.php?id=15" title="货到付款区域">货到付款区域</a></dd>
    <dd><a href="article.php?id=16" title="配送支付智能查询 ">配送支付智能查询</a></dd>
    <dd><a href="article.php?id=17" title="支付方式说明">支付方式说明</a></dd>
  </dl>
<dl>
  <dt><a href='article_cat.php?id=10' title="会员中心">会员中心</a></dt>
    <dd><a href="article.php?id=18" title="资金管理">资金管理</a></dd>
    <dd><a href="article.php?id=19" title="我的收藏">我的收藏</a></dd>
    <dd><a href="article.php?id=20" title="我的订单">我的订单</a></dd>
  </dl>
<dl>
  <dt><a href='article_cat.php?id=8' title="服务保证 ">服务保证 </a></dt>
    <dd><a href="article.php?id=21" title="退换货原则">退换货原则</a></dd>
    <dd><a href="article.php?id=22" title="售后服务保证 ">售后服务保证</a></dd>
    <dd><a href="article.php?id=23" title="产品质量保证 ">产品质量保证</a></dd>
  </dl>
<dl>
  <dt><a href='article_cat.php?id=9' title="联系我们 ">联系我们 </a></dt>
    <dd><a href="article.php?id=24" title="网站故障报告">网站故障报告</a></dd>
    <dd><a href="article.php?id=25" title="选机咨询 ">选机咨询</a></dd>
    <dd><a href="article.php?id=26" title="投诉与建议 ">投诉与建议</a></dd>
  </dl>
   </div>
  </div>  
</div>
<div class="blank"></div>
<div class="blank"></div>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="bNavList clearfix">
   <div class="f_l">
              <a href="article.php?id=1" >免责条款</a>
                   -
                      <a href="article.php?id=2" >隐私保护</a>
                   -
                      <a href="article.php?id=3" >咨询热点</a>
                   -
                      <a href="article.php?id=4" >联系我们</a>
                   -
                      <a href="article.php?id=5" >公司简介</a>
                   -
                      <a href="wholesale.php" >批发方案</a>
                   -
                      <a href="myship.php" >配送方式</a>
                   </div>
   <div class="f_r">
   <a href="#top"><img src="themes/default/images/bnt_top.gif" /></a> <a href="index.php"><img src="themes/default/images/bnt_home.gif" /></a>
   </div>
  </div>
 </div>
</div>
<div class="blank"></div>
<div id="footer">
 <div class="text">
 &copy; 2005-2014 海狗商城 版权所有，并保留所有权利。<br />
                                                                                     <br />
    554fcae493e564ee0dc75bdf2ebf94caquery_info|a:1:{s:4:"name";s:10:"query_info";}554fcae493e564ee0dc75bdf2ebf94ca<br />
  <a href="http://www.ecshop.com" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span>&nbsp;<span style="color: #FF9966">v2.7.3</span></strong></a>&nbsp;<a href="http://www.ecshop.com/license.php?product=ecshop_b2c&url=http%3A%2F%2Fwww.xkx.com%2F" target="_blank"
>&nbsp;&nbsp;Licensed</a><br />
        <div align="left"  id="rss"><a href="feed.php?cat=27"><img src="themes/default/images/xml_rss2.gif" alt="rss" /></a></div>
 </div>
</div>
</body>
</html>
