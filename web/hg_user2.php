<?php

/**
* 海关接口-用户相关
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
//发送请求，获得接口新增修改数据

$time = date("Y-m-d H:i:s");
            $xml_data = '<?xm?><Message><Header>';
            $xml_data.="<OrderFrom>0000</OrderFrom>";
            $xml_data.="<Account>130402198204092411</Account>";
            $xml_data.="</Header></Message>";
            $url_get = '';
            $url_get .="userid=higoshop&timestamp=".urlencode($time);
            $sign = "higoshop53c31dfe-800f-4935-9425-02692fd87907".$time;
            
            $url_get .="&sign=".md5($sign);
            $url_get .="&xmlstr=".$xml_data;
            $url_get .="&xmlstr=".$xml_data;
            $url = 'http://i.kjb2c.com/msg/getconsumer.do?'.$url_get;
echo $url;
            $header[] = "Content-type:text/xml";
            $aa['userid'] = "higoshop";
            $aa['timestamp'] = urlencode($time);
            $aa['sign'] = md5($sign);
			$aa['xmlstr'] = $xml_data;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_MUTE, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            

			
			
            $resp = curl_exec($ch);
/*
            if (curl_errno($ch)) {
                helper::datalog('CURL失败原因:' . curl_errno($ch) . " 时间:" . $now_time, 'cron_addtruckcodeforztolog_');
            }
*/
            curl_close($ch);
           
            $result = simplexml_load_string($resp);
            echo "<pre>";
            print_r($result);
?>