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

/* 生成随机字符 */
function mc_random($length,$char_str = 'abcdefghijklmnopqrstuvwxyz0123456789'){
	$hash='';
	$chars = $char_str;
	$max=strlen($chars);
	for($i=0;$i<$length;$i++){
		$hash .=substr($chars,(rand(0,1000)%$max),1); 
	}
	return $hash;
}

// 当chk='user' 时,,判断用户是否合法; 当 chk='int'时..判断为数字;
function mc_explode_str($str, $exp=',', $chk=''){
   	$str_arr = explode($exp,$str);
	if($chk == 'user'){
	  $user_arr = array();
	  foreach($str_arr as $key => $value){	
	     if(strlen($value)>=3){
	        $user_arr[] = $value;
		 }
	  }
	  $str_arr = $user_arr;
	}elseif($chk == 'int'){
	  $id_arr = array();
	  foreach($str_arr as $key => $value){	
	     if(is_numeric($value)){
	        $id_arr[] = $value;
		 }
	  }
	  $str_arr = $id_arr;
	}
	return $str_arr;
}

function mc_read_txt($file){
	$pathfile=$file;
	if (!file_exists($pathfile)) {
	  return false;
	}
	$fs = fopen($pathfile,"r+"); 
	$content = fread($fs,filesize($pathfile));//读文件
	fclose($fs);
	
	if(!$content) return false;	
	return $content;
}

function uploadfile($upfile,$upload_path,$redirect,$f_size="102400",$f_type="txt,jpg|jpeg|gif|png"){
	if(!file_exists($upload_path)){mkdir($upload_path,0777);chmod($upload_path,0777);}//检测文件夹是否存,不存在则创建;
	$file_name=$_FILES[$upfile]['name'];

	if(empty($file_name))return false;	
	
	$file_type=$_FILES[$upfile]['type'];
	$file_size=$_FILES[$upfile]['size'];
	$file_tmp=$_FILES[$upfile]['tmp_name'];
	$upload_dir=$upload_path;

	$ext=explode(".",$file_name);
	$sub=count($ext)-1;
	$ext_type=strtolower($ext[$sub]);//转换成小写
	$up_type=explode("|",$f_type);
	if(!in_array($ext_type,$up_type)){
		die("
		<script language=javascript>
			 alert('您上传的文件类型不符合要求！请重新上传！\\n\\n上传类型只能是".$f_type."。');
			 location.href='".$redirect."';
		</script>");
	}
	
	$file_names=time().rand(1,9999).".".$ext[$sub];
	$upload_file_name=$upload_dir.$file_names;
	$chk_file=move_uploaded_file($file_tmp,$upload_file_name);
	if($chk_file){ //判断文件上传是否成功

		chmod($upload_file_name,0777);//设置上传文件的权限
		unset($ext[$sub]);$file_name=implode(".",$ext);//先去除扩展名,后获取文件名
		return array($file_names,$file_size,$ext_type,$file_name); 
	}else{
		return false;
	}
}
?>