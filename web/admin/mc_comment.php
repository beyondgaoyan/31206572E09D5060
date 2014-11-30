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
	//header('Content-type: text/html; charset=gb2312'); //如果乱码,加入此句;
	
	$link[] = array('text' => $_LANG['go_back'], 'href' => 'mc_comment.php');

	//$upfile_flash
   $comment_id = $_REQUEST['comment_id'];
   $comment_num = (is_numeric($_REQUEST['comment_num']) && $_REQUEST['comment_num']>0 ? $_REQUEST['comment_num'] : 100);
   $mc_user_str = '';
   $mc_comment_str = '';
   $mc_comment_id = '';
   
   if(!$comment_id){
	   sys_msg('需评论的商品ID不能为空,请检查;', 0, $link);
	}else{
	  	$mc_comment_id = mc_explode_str($comment_id, ',', 'int');
		if(!$mc_comment_id){		   	
		 	sys_msg('没有符合条件的,评论商品ID,请检查;', 0, $link);
		}		
	}
   
   if(!$_FILES['upfile'] || !$_FILES['upfile_msg']){
	     sys_msg('没有上传用户或留言的文件;', 0, $link);
	}
      
   //文件上传 == 批量上传 的文件做了..备份保存;
   $path = "../mc_upfile/".date("Ym")."/";
   
   //上传,备份;
	$file_chk = uploadfile("upfile",$path,'mc_comment.php',1024000,'txt');
	$file_chk2 = uploadfile("upfile_msg",$path,'mc_comment.php',1024000,'txt');
	
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
	 
	/* 读取评论内容 */
	if($file_chk2){
		$filename2 = $path.$file_chk2[0];
		//读取内容;
		$comment_str = mc_read_txt($filename2);

		//截取字符,返加数组
		if($comment_str){
		  $mc_comment_str = mc_explode_str($comment_str, '$_www.wofeel.cn_$');
		}else{
			sys_msg('读取评论文件出错;', 0, $link);
		}
		
	 }else{
       sys_msg('文件未上传成功;', 0, $link);	
	 }  
	
	//写入评论
	for($i=1; $i<=$comment_num; $i++){
	   $random_id = rand(0, (count($mc_comment_id)-1));		
	   $random_comment_id = $mc_comment_id[$random_id];
	   //
	   $user_id = rand(0, (count($mc_user_str)-1));		
	   $random_user_id = $mc_user_str[$user_id];
	   //
	   $comment_id = rand(0, (count($mc_comment_str)-1));		
	   $random_comment_str = $mc_comment_str[$comment_id];
	   
	   //判断是否有此商品
	   $sql = "SELECT COUNT(*) FROM " .$ecs->table('goods'). " where goods_id='$random_comment_id'";
       $renum = $db->getOne($sql);
	   if($renum){
		  $comment_type = 0;
		  $id_value = $random_comment_id;
		  
		  $sql2 = "SELECT user_id,email,user_name FROM " .$ecs->table('users'). " where user_name='$random_user_id'";
          $renum2 = $db->getRow($sql2);
		  if($renum2){			  
			  
			  $email = $renum2['email'];
			  $user_name = $renum2['user_name'];
			  $content = iconv("gb2312","UTF-8",trim($random_comment_str));  //乱码
			  $comment_rank = rand(1,5);
			  $add_time = time()+($i*300+rand(1,600));
			  $ip_address = '';		  
			  $status = 1; //不需要审核
			  $parent_id = 0;
			  $user_id = $renum2['user_id'];
			  //写入
			   $sql = "insert into " .$ecs->table('comment'). "  set comment_type='$comment_type',id_value='$id_value',email='$email',user_name='$user_name',content='$content',comment_rank='$comment_rank',add_time='$add_time',ip_address='$ip_address',status='$status',parent_id='$parent_id',user_id='$user_id'";

			 $db->query($sql);
		  }
	   }
	}
	
	sys_msg('恭喜，批量评论成功！', 0, $link);
	
}

/*------------------------------------------------------ */
//-- 操作界面
/*------------------------------------------------------ */
else
{

	$smarty->display('mc_comment.htm');
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
	   if(strlen($value)>=3){
		   //判断用户是否存在;
		  $res = $GLOBALS['db']->getOne("SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('users') ." WHERE user_name = '$value'");
		  if(!$res){
			 $sql = "insert into ecs_users set email='$email',user_name='$value',password='$password_str',reg_time='$reg_time',last_login='$reg_time',alias='$alias',msn='$msn',qq='$qq',office_phone='$office_phone',home_phone='$home_phone',mobile_phone='$mobile_phone',is_validated='$is_validated',credit_line='$credit_line',passwd_question='$passwd_question',passwd_answer='$passwd_answer'";
			 $GLOBALS['db']->query($sql);
			 $reg_i++;
		  }		   
	   }
	}
	return $reg_i;
}


?>