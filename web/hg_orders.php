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
            $xml_data.="<Order>";
            $xml_data.="<OrderFrom>0000</OrderFrom>";//购物网站代码
            $xml_data.="<OrderNo>2014081945944</OrderNo>";//订单号
            $xml_data.="<GoodsAmount>109.50</GoodsAmount>";//订单总金额
            $xml_data.="<PostFee>4.5</PostFee>";//运费（无运费时请设置0）
            $xml_data.="<Amount>109.5</Amount>";//买家实付金额
            $xml_data.="<BuyerAccount>fwl_77</BuyerAccount>";//买家账号
            $xml_data.="<TaxAmount>0</TaxAmount>";//税额（免税请设置0）
            $xml_data.="<DisAmount>0</DisAmount>";//优惠金额
            $xml_data.="<Promotions></Promotions>";//订单优惠清单列表
			$xml_data.="<Goods>";

            /*可循环 */
	            $xml_data.="<Detail>";
		            $xml_data.="<ProductId>310520146160400036</ProductId>";
		            $xml_data.="<GoodsName>原装进口 日本尤妮佳moony尿不湿L58片 尤尼佳纸尿裤 增量装</GoodsName>";
		            $xml_data.="<Qty>1</Qty>";
		            $xml_data.="<Unit>千克</Unit>";
		            $xml_data.="<Price>105.00</Price>";
		            $xml_data.="<Amount>105.00</Amount>";
	            $xml_data.="</Detail>";
            
            $xml_data.="</Goods>";
            $xml_data.= "</Order>";
            $xml_data.="</Body></Message>";

            $url_get = '';
            $url_get.="userid=higoshop&timestamp=".urlencode($time);
            $sign = "higoshop53c31dfe-800f-4935-9425-02692fd87907".$time;
            
            $url_get.="&sign=".md5($sign);
          $url_get.="&xmlstr=".urlencode($xml_data);
            $url = 'http://i.kjb2c.com/msg/ordermsg.do?'.$url_get;
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