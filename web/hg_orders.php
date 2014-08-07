<?php

/**
* 海关接口-用户相关
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
//发送请求，获得接口新增修改数据

$time = date("Y-m-d H:i:s");
$createdate = date("Y-m-d H:i:s");
            $xml_data ="<Message>";
            $xml_data.="<Header><CustomsCode>3302461604</CustomsCode><OrgName>宁波海狗电子商务有限公司</OrgName><CreateTime>$createdate</CreateTime></Header>";
            $xml_data.="<Body>";
            $xml_data.="<Order><OrderFrom>0000</OrderFrom><OrderNo>2014080700003</OrderNo><GoodsAmount>280.00</GoodsAmount><PostFee>0</PostFee><Amount>280.00</Amount><BuyerAccount>haigoutest</BuyerAccount><TaxAmount>0</TaxAmount><DisAmount>0</DisAmount><Promotions></Promotions>";
            $xml_data.="<Goods><Detail>";
            //可循环
            $xml_data.="<ProductId>310520146160400001</ProductId><GoodsName>原装进口 日本花王纸尿裤 L54 新生婴儿宝宝尿不湿纸尿片三倍透气</GoodsName><Qty>2</Qty><Unit>千克</Unit><Price>140.00</Price><Amount>280.00</Amount>";
            $xml_data.="</Detail></Goods>";
            $xml_data.= "</Order>";
            $xml_data.="</Body></Message>";

            $url_get = '';
            $url_get.="userid=higoshop&timestamp=".urlencode($time);
            $sign = "higoshop68848eaf-a2ff-42ab-8c1a-5ed96d65af65".$time;
            
            $url_get.="&sign=".md5($sign);
          $url_get.="&xmlstr=".urlencode($xml_data);
            $url = 'http://i.trainer.kjb2c.com/msg/ordermsg.do?'.$url_get;
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