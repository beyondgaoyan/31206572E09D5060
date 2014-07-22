<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
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
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script><script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/jquery.SuperSlide.js"></script>    <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script>    <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
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

   
       <?php if ($this->_var['searchkeywords']): ?> <span>搜索热词：</span>  <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?><a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><?php endif; ?></label>
    </div>
<div class="header_menu_top_cart">
   <div   class="buy_car_bg clearfix"  onmouseover="this.className='buy_car_bg ul1_on'" onmouseout=  "this.className='buy_car_bg'">
	
	<img src="themes/default/imagesgy/car.png" width="16" height="13" style="float:left; margin-right:5px; margin-left:18px; margin-top:13px; line-height:13px;" /> 
	<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
<div id="ECS_CARTINFO" style="float:left">
 <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
   
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
      <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
         
              <ul class="u1" onmouseover="this.className='u1 u1_over '" onmouseout="this.className='u1'"   >
  <a class="a1" href="<?php echo $this->_var['nav']['url']; ?>"><?php echo $this->_var['nav']['name']; ?></a>
  </ul>
            <?php if ($this->_var['nav']['active'] == 1): ?>
            <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  
 </div>
 
	
	
	
</div>