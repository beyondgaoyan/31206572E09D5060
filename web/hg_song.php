<?php

/**
* 海关接口-用户相关
＊ API-进口运单
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
//发送请求，获得接口新增修改数据

$time = date("Y-m-d H:i:s");
$createdate = date("Y-m-d H:i:s");
            $xml_data ="<Message>";
            $xml_data.="<Header><CustomsCode>3302461604</CustomsCode><OrgName>宁波海狗电子商务有限公司</OrgName><CreateTime>$createdate</CreateTime></Header>";
            $xml_data.="<Body>";
            $xml_data.="<Logistics>";
            $xml_data.="<LogisticsNo>2014080730003</LogisticsNo><OrderNo>2014080700003</OrderNo><LogisticsName>邮政速递</LogisticsName><Consignee>高岩</Consignee><Province>浙江省</Province><City>宁波市</City><District>保税区</District><ConsigneeAddr>浙江省宁波市兴业保税区二路8号3楼388室</ConsigneeAddr><ConsigneeTel>18611706483</ConsigneeTel><GoodsName>货物名称暂无</GoodsName>";
            $xml_data.= "</Logistics>";
            $xml_data.="</Body></Message>";

            $url_get = '';
            $url_get.="userid=higoshop&timestamp=".urlencode($time);
            $sign = "higoshop68848eaf-a2ff-42ab-8c1a-5ed96d65af65".$time;
            
            $url_get.="&sign=".md5($sign);
          $url_get.="&xmlstr=".urlencode($xml_data);
           //$url_get.="&xmlstr=".$xml_data;
            $url = 'http://i.trainer.kjb2c.com/msg/logisticsmsg.do?'.$url_get;
echo $url;
            $header[] = "Content-type:text/xml; charset=utf-8";
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_MUTE, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_HEADER, 0);

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