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
	$link[] = array('text' => $_LANG['go_back'], 'href' => 'mc_user.php');
	//$upfile_flash
   $password = $_REQUEST['password'];
   $confirm_password = $_REQUEST['confirm_password'];
   
   if(!$password || $password!=$confirm_password){
	   sys_msg('两次密码输入不一致,请检查;', 0, $link);
	}
   
   if(!$_FILES['upfile']){
	     sys_msg('没有上传文件;', 0, $link);
	}
      
   //文件上传
   $path = "../mc_upfile/".date("Ym")."/";
     //上传,备份;
	$file_chk=uploadfile("upfile",$path,'mc_user.php',1024000,'txt');
	if($file_chk){
		$filename = $path.$file_chk[0];
		//读取内容;
		$str = mc_read_txt($filename);
		//注册用户
		if($str){
		  mc_reg_user($str, $password);
		}else{
			sys_msg('读取文件出错;', 0, $link);
		}
		
	  sys_msg('恭喜，批量注册用户成功！;', 0, $link);	
	}else{
       sys_msg('文件未上传成功;', 0, $link);	
	}    
}

/*------------------------------------------------------ */
//-- 操作界面
/*------------------------------------------------------ */
else
{

	$smarty->display('mc_user.htm');
}

function mc_reg_user($str,$password){
  	if(!$str) return false;
	$str_arr = explode(',',$str);
	//用户信息
	$password_str = md5($password); 
	$email = mc_random(8,'abcdefghijklmnopqrstuvwxyz').'@126.com';
	$reg_time = time();
	$alias ='';
	$msn = mc_random(8,'abcdefghijklmnopqrstuvwxyz').'@hotmail.com';
	$qq = mc_random(9,'1234567890');
	$office_phone = mc_random(7,'1234567890');
	$home_phone = mc_random(7,'1234567890');
	$mobile_phone = mc_random(11,'1234567890');
	$is_validated = 0;
	$credit_line = 0;
	$passwd_question = '';
	$passwd_answer  = '';
	
	$reg_i =0;
	foreach($str_arr as $key => $value){
		$value = iconv("gb2312","UTF-8",trim($value));  //乱码
	   if(strlen($value)>=3){
		   //判断用户是否存在;
		  $res = $GLOBALS['db']->getOne("SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('users') ." WHERE user_name = '$value'");
		  if(!$res){
			 $sql = "insert into ".$GLOBALS['ecs']->table('users'). " set email='$email',user_name='$value',password='$password_str',reg_time='$reg_time',last_login='$reg_time',alias='$alias',msn='$msn',qq='$qq',office_phone='$office_phone',home_phone='$home_phone',mobile_phone='$mobile_phone',is_validated='$is_validated',credit_line='$credit_line',passwd_question='$passwd_question',passwd_answer='$passwd_answer'";
			 $GLOBALS['db']->query($sql);
			 
			 $user_id = $GLOBALS['db']->insert_id();
			 
			//插入用户收货地址
			$address_arr = array('北京朝阳区朝外大街20号联合大厦六层 610室','朝阳区定福庄北里1号鲁班大厦','天津市经济技术开发区洞庭路66号','北京市朝阳区光华路2手阳光100写字搂D厘203号','崇文区法华寺南里甲8号楼','大光路35号商务楼201室','大连市甘井子区山东路138号大连金州区分公司','台北市长春路447号11楼','武汉市汉口京汉大道华智大厦一楼','安徽省合肥市濉溪路421号','上海市宝山区南大路799弄1号大院','温州市苍南县城上林小区29幢三单元406室','广州市天河黄埔大道北罗斗岗1号翠湖山庄11栋','北京市崇文区安乐林路18号','深圳市罗湖区湖贝路2号锦湖宾馆1015室','广州市天河区棠下科新路8号优可商务中心D栋四楼','黑龙江省大庆市开发区软件园B栋二层','中国厦门市埭辽路22号','上海市中山北路1958号华源世界广场2501室');
			$consignee_arr = array('王先生','张小姐','李丽','张蔡','张蔡','桂盈盈','李哕','钱梅','郭东贵','郭生','李纱','马梭','马良','赵中力','赵本红','郭红','贵菊','郭先生','钱小姐','赵先生');
//   500-517
$region[0]['province'] = 2;
$region[0]['city'] = 52;
$region[0]['district'] = 500;

$region[11]['province'] = 2;
$region[11]['city'] = 52;
$region[11]['district'] = 501;

$region[12]['province'] = 2;
$region[12]['city'] = 52;
$region[12]['district'] = 502;

$region[13]['province'] = 2;
$region[13]['city'] = 52;
$region[13]['district'] = 503;

$region[14]['province'] = 2;
$region[14]['city'] = 52;
$region[14]['district'] = 504;

//city:36-51  dis: 

$region[1]['province'] = 3;
$region[1]['city']     = 36;
$region[1]['district'] = 398;

$region[15]['province'] = 3;
$region[15]['city']     = 36;
$region[15]['district'] = 399;

$region[16]['province'] = 3;
$region[16]['city']     = 36;
$region[16]['district'] = 400;

$region[17]['province'] = 3;
$region[17]['city']     = 36;
$region[17]['district'] = 401;

//city: 53-61 
$region[2]['province'] = 4;
$region[2]['city']     = 53;
$region[2]['district'] = 518;

$region[18]['province'] = 4;
$region[18]['city']     = 53;
$region[18]['district'] = 519;

$region[19]['province'] = 4;
$region[19]['city']     = 53;
$region[19]['district'] = 520;

$region[20]['province'] = 4;
$region[20]['city']     = 53;
$region[20]['district'] = 521;

$region[21]['province'] = 4;
$region[21]['city']     = 53;
$region[21]['district'] = 522;

//city: 62-75 

$region[3]['province'] = 5;
$region[3]['city']     = 62;
$region[3]['district'] = 604;

$region[22]['province'] = 5;
$region[22]['city']     = 62;
$region[22]['district'] = 605;

$region[23]['province'] = 5;
$region[23]['city']     = 62;
$region[23]['district'] = 606;

$region[24]['province'] = 5;
$region[24]['city']     = 62;
$region[24]['district'] = 607;

$region[25]['province'] = 5;
$region[25]['city']     = 62;
$region[25]['district'] = 608;

//76-96
$region[4]['province'] = 6;
$region[4]['city']     = 76;
$region[4]['district'] = 692;

//
$region[5]['province'] = 7;
$region[5]['city']     = 97;
$region[5]['district'] = 853;

//
$region[6]['province'] = 8;
$region[6]['city']     = 111;
$region[6]['district'] = 962;

//
$region[7]['province'] = 9;
$region[7]['city']     = 120;
$region[7]['district'] = 1054;

//
$region[8]['province'] = 10;
$region[8]['city']     = 138;
$region[8]['district'] = 1078;

//
$region[9]['province'] = 11;
$region[9]['city']     = 149;
$region[9]['district'] = 1251;

//
$region[10]['province'] = 12;
$region[10]['city']     = 167;
$region[10]['district'] = 1415;
			
			
		   if($user_id){
		     //
			   $address_id = rand(0, (count($address_arr)-1));		
			   $random_address_str = $address_arr[$address_id];  //乱码
			 //
			   $consignee_id = rand(0, (count($consignee_arr)-1));		
			   $random_consignee_str = $consignee_arr[$consignee_id];  //乱码 
			//
			   $region_id = rand(0, (count($region)-1));		
		   
		   
			 $address_name ='';
			 $user_id = $user_id;
			 $consignee = $random_consignee_str;
			 $email = $email;
			 $country = 1;
			 $province = $region[$region_id]['province'];
			 $city =  $region[$region_id]['city'];
			 $district =  $region[$region_id]['district'];
			 
			 $address = $random_address_str;
			 $zipcode = mc_random(6,'1234567890');
			 $tel = $home_phone;
			 $mobile = $mobile_phone;
			 $sign_building = '';
			 $best_time = '';
			 
			 
			  $sql = "insert into ".$GLOBALS['ecs']->table('user_address'). " set address_name='$address_name',user_id='$user_id',consignee='$consignee',email='$email',country='$country',province='$province',city='$city',district='$district',address='$address',zipcode='$zipcode',tel='$tel',mobile='$mobile',sign_building='$sign_building',best_time='$best_time'";
			 $GLOBALS['db']->query($sql);
		    }
			 $reg_i++;
		  }		   
	   }
	}
	return $reg_i;
}

?>