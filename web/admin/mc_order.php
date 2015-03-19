<?php

/**
 *
 * 美承网 开发管理 - www.wofeel.cn 
 * 联系QQ: 36629084	
 * 美承案例：http://www.wofeel.cn/
 *	
 * .以诚待人,以信交友;美承网站建设[竭诚为您服务
 *					 ]
 * ﹏专业的设计·满意的网站·从美承开始！ 美承网站建设[竭诚为您服务].oоО
 * ------------------------美承网 欢迎您的咨询--------------------------------
 * $Author: meicheng $
 * $QQ:     36629084 $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require('mc_function.php'); 

/* act操作项的初始化 */
if (empty($_REQUEST['act']))
{
    $_REQUEST['act'] = 'list';
}
else
{
    $_REQUEST['act'] = trim($_REQUEST['act']);
}


/*------------------------------------------------------ */
//-- 批量写入
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'mc_add')
{
	$link[] = array('text' => $_LANG['go_back'], 'href' => 'mc_order.php');
	//$upfile_flash
   $comment_id = $_REQUEST['comment_id'];
   $comment_num = (is_numeric($_REQUEST['comment_num']) && $_REQUEST['comment_num']>0 ? $_REQUEST['comment_num'] : 100);
   $mc_comment_id = '';
   $mc_user_str = '';
   
   if(!$comment_id){
	   sys_msg('需购买商品ID不能为空,请检查;', 0, $link);
	}else{
	  	$mc_comment_id = mc_explode_str($comment_id, ',', 'int');
		if(!$mc_comment_id){		   	
		 	sys_msg('没有符合条件的,购买商品ID,请检查;', 0, $link);
		}		
	}
	
	if(!$_FILES['upfile']){
	     sys_msg('没有上传用户的文件;', 0, $link);
	}
	
	//文件上传 == 批量上传 的文件做了..备份保存;
    $path = "../mc_upfile/".date("Ym")."/";
	//上传,备份;
	$file_chk = uploadfile("upfile",$path,'mc_order.php',1024000,'txt');
	
	/* 读取用户名 */
	if($file_chk){
		$filename = $path.$file_chk[0];
		//读取内容;
		$user_str = mc_read_txt($filename);	
		
		//截取字符,返加数组
		if($user_str){
		  $mc_user_str = mc_explode_str($user_str, ',', 'user');
		}else{
			sys_msg('读取用户名文件出错;', 0, $link);
		}
		
	 }else{
       sys_msg('文件未上传成功;', 0, $link);	
	 }
	 
	//写入订单
	//=======第一套方案=============
	for($i=1; $i<=$comment_num; $i++){
	   //
	   $user_id = rand(0, (count($mc_user_str)-1));		
	   $random_user_id = $mc_user_str[$user_id];
	   //
	   $comment_id = rand(0, (count($mc_comment_id)-1));		
	   $random_comment_id = $mc_comment_id[$comment_id];
	   //判断是否有此商品
	   $sql = "SELECT goods_id,cat_id,goods_sn,goods_name,goods_number,goods_weight,market_price,shop_price FROM " .$ecs->table('goods'). " where goods_id='$random_comment_id'";
       $goods = $db->getRow($sql); //getRow
   
	   //判断用户
	   $sql2 = "SELECT u.user_id,u.user_name,a.consignee,a.country,a.province,a.city,a.district,a.address,a.zipcode,a.tel,a.mobile,a.email FROM " .$ecs->table('users'). " as u left join " .$ecs->table('user_address'). " as a on u.user_id = a.user_id where u.user_name='$random_user_id'";
       $renum2 = $db->getRow($sql2);
	   
	   if($goods && $renum2){	
	      $order_sn = mc_get_order_sn();
		  $user_id  = $renum2['user_id'];
		  $order_status = 1;
		  $shipping_status = 2;
		  $pay_status = 2;
		  $consignee = $renum2['consignee'];
		  $country = $renum2['country'];
		  
		  $province = $renum2['province'];
		  $city = $renum2['city'];
		  $district = $renum2['district'];
		  $address  = $renum2['address'];
		  $zipcode = $renum2['zipcode'];
		  $tel = $renum2['tel'];
		  $mobile = $renum2['mobile'];
		  
		  $email = $renum2['email'];
		  $postscript = '';
		  $goods_amount = $goods['goods_weight']; 
		  
	      $surplus = $goods['goods_weight'] + 15;
		  $posttime = time();
	   
			//插入订单－信息
			$sql_dl = "insert into " .$ecs->table('order_info'). " set order_sn='$order_sn',user_id='$user_id',order_status='$order_status',shipping_status='$shipping_status',pay_status='$pay_status',consignee='$consignee',country='$country',province='$province',city='$city',district='$district',address='$address',zipcode='$zipcode',tel='$tel',mobile='$mobile',email='$email',postscript='$postscript',shipping_id='5',shipping_name='申通快递',pay_id='1',pay_name='余额支付',goods_amount='$goods_amount',shipping_fee='15',surplus='$surplus',referer='本站',add_time='$posttime',confirm_time='$posttime',pay_time='$posttime',shipping_time='0',invoice_no='',extension_code='',inv_type=''";
			$db->query($sql_dl);
			$order_id  = $db->insert_id();
			
			//插入订单－商品
			$goods_id = $goods['goods_id'];
			$goods_name = $goods['goods_name'];
			$goods_sn = $goods['goods_sn'];
			$goods_number = 1;
			
			$market_price = $goods['market_price'];
			$goods_price = $goods['shop_price'];
			$goods_attr = '';
			$send_number = 1;
			$is_real = 1;
			$extension_code = '';
			$parent_id = 0;
			$is_gift = 0;
			
	        $sql_shop = "insert into " .$ecs->table('order_goods'). " set order_id='$order_id',goods_id='$goods_id',goods_name='$goods_name',goods_sn='$goods_sn',goods_number='$goods_number',market_price='$market_price',goods_price='$goods_price',goods_attr='$goods_attr',send_number='$send_number',is_real='$is_real',extension_code='$extension_code',parent_id='$parent_id',is_gift='$is_gift'";
			$db->query($sql_shop);
	   }
	}
/*	
	//=======第二套方案=============
	foreach($mc_user_str as $key => $value){
	   $comment_id = rand(0, (count($mc_comment_str)-1));		
	   $random_comment_str = $mc_comment_str[$comment_id];
	  
	}
*/
   sys_msg('恭喜，批量购买商品成功！', 0, $link);
}

/*------------------------------------------------------ */
//-- 操作界面
/*------------------------------------------------------ */
else
{

	$smarty->display('mc_order.htm');
}

function mc_get_order_sn()
{
    /* 选择一个随机的方案 */
    mt_srand((double) microtime() * 1000000);

    return date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
}
?>