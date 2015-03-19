<?php
define('IN_ECS', true);
/* 设置最长执行时间为5分钟 */
@set_time_limit(300);
require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . 'includes/lib_order.php');
require_once(ROOT_PATH . 'includes/lib_goods.php');
/* 检查权限 */
    admin_priv('order_kjg_push');
if(!empty($_GET['order_id'])){
	$order_id=$_GET['order_id'];

	//跨境购订单接口 by gaoyan
	$kjg_list = array();
	$kjg_list = $GLOBALS['db']->getAll("SELECT * FROM " . $GLOBALS['ecs']->table("kjg_status") . " where order_id=$order_id");

	if(!empty($kjg_list)){
	
		foreach($kjg_list AS $k){
			//暂未提交订单
			$orderinfo = array();
			$orderinfo = getOrder($k['order_id']);
			
			if(!empty($orderinfo)){
					$date = kjg_api_pay($orderinfo);
			}
		}
	}
}	
   /* 操作成功 */
        if(!empty($date) && isset($date->Header->Result) && $date->Header->Result=='F'){
       		$links[] = array('href' => 'order.php?act=list&' . list_link_postfix(), 'text' => $date->Header->ResultMsg);
	        sys_msg('提交错误', 0, $links);
        } else {
			$links[] = array('href' => 'order.php?act=list&' . list_link_postfix(), 'text' => $_LANG['02_order_list']);
			sys_msg($_LANG['act_ok'], 0, $links);
        }
	//订单详情
    function getOrder($order_id){
	    //发货地址所在地
	    $region_array = $order = array();
	    $order = order_info($order_id);
	    if(!empty($order)){
			$region = $GLOBALS['db']->getAll("SELECT region_id, region_name FROM " . $GLOBALS['ecs']->table("region")."");
		        foreach($region as $region_data)
		        {
		            $region_array[$region_data['region_id']] = $region_data['region_name'];
		        }
			$order['t_customer_country'] = $region_array[$order['country']]; //收件人-国家
		    $order['t_customer_province'] = $region_array[$order['province']]; //收件人-省份
		    $order['t_customer_city'] = $region_array[$order['city']]; //收件人-城市
		    $order['t_customer_district'] = $region_array[$order['district']]; //收件人-区/县
		    //购货人
		    $user = user_info($order['user_id']);
		    $order['user_name'] = $user['user_name'];
		    //商品列表
		    /* 取得订单商品及货品 */
		    $goods_list = array();
		    $goods_attr = array();
		    $sql = "SELECT o.* 
		            FROM " . $GLOBALS['ecs']->table('order_goods') . " AS o
		                LEFT JOIN " . $GLOBALS['ecs']->table('goods') . " AS g
		                    ON o.goods_id = g.goods_id
		            WHERE o.order_id = '$order[order_id]'";
		    $res = $GLOBALS['db']->query($sql);
		    while ($row = $GLOBALS['db']->fetchRow($res))
		    {
		        $order['goods_list'][] = $row;
		    }
	    }
	    return $order;
    }

	
	function kjg_api_order($orderinfo=''){
		if(!empty($orderinfo) && $orderinfo['pay_status']=='2'){
			$time = date("Y-m-d H:i:s");
			$createdate = date("Y-m-d H:i:s");
            $xml_data ="<Message>";
            $xml_data.="<Header><CustomsCode>3302461604</CustomsCode><OrgName>宁波海狗电子商务有限公司</OrgName><CreateTime>$createdate</CreateTime></Header>";
            $xml_data.="<Body>";
            $xml_data.="<Order>";
            $xml_data.="<OrderFrom>0000</OrderFrom>";//购物网站代码
            $xml_data.="<OrderNo>".$orderinfo['order_sn']."</OrderNo>";//订单号
            $xml_data.="<GoodsAmount>".$orderinfo['total_fee']."</GoodsAmount>";//订单总金额
            $xml_data.="<PostFee>".$orderinfo['shipping_fee']."</PostFee>";//运费（无运费时请设置0）
            $xml_data.="<Amount>".$orderinfo['money_paid']."</Amount>";//买家实付金额
            $xml_data.="<BuyerAccount>".$orderinfo['user_name']."</BuyerAccount>";//买家账号
            $xml_data.="<TaxAmount>".$orderinfo['tariff_fee']."</TaxAmount>";//税额（免税请设置0）
            $xml_data.="<DisAmount>0</DisAmount>";//优惠金额
            $xml_data.="<Promotions></Promotions>";//订单优惠清单列表
			$xml_data.="<Goods>";

            /*可循环 */
            foreach($orderinfo['goods_list'] AS $g){
	            $xml_data.="<Detail>";
		            $xml_data.="<ProductId>".$g['goods_sn']."</ProductId>";
		            $xml_data.="<GoodsName>".$g['goods_name']."</GoodsName>";
		            $xml_data.="<Qty>".$g['goods_number']."</Qty>";
		            $xml_data.="<Unit>千克</Unit>";
		            $xml_data.="<Price>".$g['goods_price']."</Price>";
		            $xml_data.="<Amount>".$g['goods_number']*$g['goods_price']."</Amount>";
	            $xml_data.="</Detail>";
            }
            $xml_data.="</Goods>";
            $xml_data.= "</Order>";
            $xml_data.="</Body></Message>";

            $url_get = '';
            $url_get.="userid=higoshop&timestamp=".urlencode($time);
            $sign = "higoshop53c31dfe-800f-4935-9425-02692fd87907".$time;
            
            $url_get.="&sign=".md5($sign);
			$url_get.="&xmlstr=".urlencode($xml_data);
            $url = 'http://i.kjb2c.com/msg/ordermsg.do?'.$url_get;

            $header[] = "Content-type:text/xml; charset=utf-8";
            $ch = curl_init();

            //curl_setopt($ch, CURLOPT_MUTE, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_HEADER, 0);

            $resp = curl_exec($ch);
			curl_close($ch);
           
            $result = simplexml_load_string($resp);
			if(!empty($result->Header->Result) && $result->Header->Result=='T'){
            	update_status("api_order",$orderinfo['order_id']);
	            //return kjg_api_pay($orderinfo);
            } else {
	            return "F";
            }
	   } else {
		   return "F";
	   }
	}
	function kjg_api_pay($orderinfo){
		if(!empty($orderinfo) && $orderinfo['pay_status']=='2'){
			$time = date("Y-m-d H:i:s");
			$createdate = date("Y-m-d H:i:s");
            $xml_data ="<Message>";
            $xml_data.="<Header><CustomsCode>3302461604</CustomsCode><OrgName>宁波海狗电子商务有限公司</OrgName><CreateTime>$createdate</CreateTime></Header>";
            $xml_data.="<Body>";
            $xml_data.="<Pay>";
            $xml_data.="<PaymentNo>".$orderinfo['order_sn']."</PaymentNo><OrderNo>".$orderinfo['order_sn']."</OrderNo><OrderSeqNo>".$orderinfo['order_sn']."</OrderSeqNo><Amount>".$orderinfo['money_paid']."</Amount><CurrCode>RMB</CurrCode><BuyerAccount>".$orderinfo['order_sn']."</BuyerAccount><Source>02</Source>";
            $xml_data.= "</Pay>";
            $xml_data.="</Body></Message>";

            $url_get = '';
            $url_get.="userid=higoshop&timestamp=".urlencode($time);
            $sign = "higoshop53c31dfe-800f-4935-9425-02692fd87907".$time;
            
            $url_get.="&sign=".md5($sign);
			$url_get.="&xmlstr=".urlencode($xml_data);
            $url = 'http://i.kjb2c.com/msg/paymsg.do?'.$url_get;
            $header[] = "Content-type:text/xml; charset=utf-8";
            $ch = curl_init();

            //curl_setopt($ch, CURLOPT_MUTE, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_HEADER, 0);

            $resp = curl_exec($ch);
            curl_close($ch);

            $result = simplexml_load_string($resp);
            if(!empty($result->Header->Result) && $result->Header->Result=='T'){
            	update_status("api_pay",$orderinfo['order_id']);
	           // return kjg_api_shopping($orderinfo);
            } else {
	            return $result;
            }
        } else {
		   return "F";
	   }
	}
	function kjg_api_shopping($orderinfo){
		if(!empty($orderinfo) && $orderinfo['pay_status']=='2'){
			$consigneetel = !empty($orderinfo['tel']) ? $orderinfo['tel'] : $orderinfo['mobile'];
			$time = date("Y-m-d H:i:s");
			$createdate = date("Y-m-d H:i:s");
            $xml_data ="<Message>";
            $xml_data.="<Header><CustomsCode>3302461604</CustomsCode><OrgName>宁波海狗电子商务有限公司</OrgName><CreateTime>$createdate</CreateTime></Header>";
            $xml_data.="<Body>";
            $xml_data.="<Logistics>";
            $xml_data.="<LogisticsNo></LogisticsNo><OrderNo>".$orderinfo['order_sn']."</OrderNo><LogisticsName>".$orderinfo['shipping_name']."</LogisticsName><Consignee>".$orderinfo['consignee']."</Consignee><Province>".$orderinfo['t_customer_province']."</Province><City>".$orderinfo['t_customer_city']."</City><District>".$orderinfo['t_customer_district']."</District><ConsigneeAddr>".$orderinfo['address']."</ConsigneeAddr><ConsigneeTel>".$consigneetel."</ConsigneeTel><GoodsName></GoodsName>";
            $xml_data.= "</Logistics>";
            $xml_data.="</Body></Message>";
            $url_get = '';
            $url_get.="userid=higoshop&timestamp=".urlencode($time);
            $sign = "higoshop53c31dfe-800f-4935-9425-02692fd87907".$time;
            
            $url_get.="&sign=".md5($sign);
			$url_get.="&xmlstr=".urlencode($xml_data);
            $url = 'http://i.kjb2c.com/msg/logisticsmsg.do?'.$url_get;
            $header[] = "Content-type:text/xml; charset=utf-8";
            $ch = curl_init();

            //curl_setopt($ch, CURLOPT_MUTE, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            $resp = curl_exec($ch);
            curl_close($ch);
           
            $result = simplexml_load_string($resp);
            if(!empty($result->Header->Result) && $result->Header->Result=='T'){
            	 update_status("api_shopping",$orderinfo['order_id']);
            	 return "T";
            } else {
	            return "F";
            }
	   } else {
		   return "F";
	   }

	}
	function update_status($field,$order_id){
		if($field=='api_shopping'){
			$gmtime=gmtime();
			$sql = "UPDATE " .$GLOBALS['ecs']->table('kjg_status')." SET $field = 1,allok_time='$gmtime' WHERE order_id='$order_id'";
			$GLOBALS['db']->query($sql);

		} else {
			$sql = "UPDATE " .$GLOBALS['ecs']->table('kjg_status')." SET $field = 1 WHERE order_id='$order_id'";
		
			$GLOBALS['db']->query($sql);
		}
		
	}
?>