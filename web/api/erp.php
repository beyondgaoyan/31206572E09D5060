<?php

/**
 * ERP 接口   20150308
 * ============================================================================
 * ============================================================================
 * $Author: gaoyan
 * hash_code : 31693422540744c0a6b6da635b7a5a93
 */


define('IN_ECS', true);

require('./init.php');
require_once(ROOT_PATH . 'includes/cls_json.php');

$key ='31693422540744c0a6b6da635b7a5a93';
$json = new JSON;

$hash_code = $db->getOne("SELECT `value` FROM " . $ecs->table('shop_config') . " WHERE `code`='hash_code'", true);
//搜索参数
$st = intval($_REQUEST['st']);
$et = intval($_REQUEST['et']);
$p = isset($_REQUEST['p']) ? intval($_REQUEST['p']) : 1;
        $shop_id = isset($data['shop_id'])? intval($data['shop_id']):0;
        $record_number = isset($data['record_number'])? intval($data['record_number']):20;
        $page_number = isset($p)? (intval($p)-1):0;
        $limit = ' LIMIT ' . ($record_number * $page_number) . ', ' . ($record_number+1);


$action = isset($_REQUEST['act'])? $_REQUEST['act']:'';
if (empty($_REQUEST['key']) || empty($_REQUEST['act']))
{
    $results = array('result'=>'false', 'data'=>'缺少必要的参数');
    exit($json->encode($results));
}
if($_REQUEST['key']!=$key){
    $results = array('result'=>'false', 'data'=>'key错误');
    exit($json->encode($results));
}
// if (empty($_REQUEST['verify']) || empty($_REQUEST['key']) || empty($_REQUEST['act']))
// {
//     $results = array('result'=>'false', 'data'=>'缺少必要的参数');
//     exit($json->encode($results));
// }
// if ($_REQUEST['verify'] != md5($hash_code.$_REQUEST['act'].$_REQUEST['key']))
// {
//     $results = array('result'=>'false', 'data'=>'数据来源不合法，请返回');
//     exit($json->encode($results));
// }

parse_str(passport_decrypt($_REQUEST['key'], $hash_code), $data);

switch ($action)
{
    //get_order_list
    case 'get_order_list':
    {
        $count = $db->getOne("SELECT count(order_id) FROM ecs_order_info WHERE add_time >= ".$st." AND add_time <= ".$et."");
        $sql = "SELECT
    g.goods_id as goodsid,
    g.goods_name as goodsname,
    g.goods_sn as goodsno,
    g.goods_number as goodsnum,
    g.goods_price as goodsprice,
    o.confirm_time as modtime,
    o.inv_payee as inv_payee,
    o.inv_type as inv_type,
    o.inv_content as inv_content,
    o.to_buyer as to_buyer,
    o.money_paid as money_paid,
    o.order_status as orderstatus,
    o.pay_status as paystatus,
    o.ishaiwai,
    o.order_sn as ordersn,
    u.user_name as username,
    u.idcard as certificate,
    u.truename as relName,
    o.address as dr_name,
    o.zipcode,
    o.email,
    o.best_time as besttime,
    o.postscript,
    o.tel,
    o.mobile,
    o.consignee as name,
    o.shipping_name as shippingname,
    o.pay_name as payname,
    o.goods_amount as goodsamount,
    o.shipping_fee as shippingfee,
    o.insure_fee as insurefee,
    o.tariff_fee as texfee,
    o.trade_no as bankno,
    o.add_time as addtime,
    o.pay_time as paytime,
    o.province,
    o.city,
    o.district,
    b.type_money as bonusfee
FROM
    ecs_order_goods g left
    JOIN ecs_order_info o ON o.order_id = g.order_id left
    JOIN ecs_users u ON u.user_id = o.user_id left
    JOIN ecs_user_bonus ub ON ub.bonus_id = o.bonus_id left
    JOIN ecs_bonus_type b ON b.type_id = ub.bonus_type_id
WHERE
    o.add_time >= ".$st."
    AND o.add_time <= ".$et."
group by o.order_id order by o.add_time asc ".$limit;
        $results = array('result' => 'false',  'data' => array());
        $query = $db->query($sql);
        $record_count = 0;
        // while ($goods = $db->fetch_array($query))
        // {
        //     $goods['goods_thumb'] = (!empty($goods['goods_thumb']))? 'http://' . $_SERVER['SERVER_NAME'] . '/' . $goods['goods_thumb']:'';
        //     $goods['goods_img'] = (!empty($goods['goods_img']))? 'http://' . $_SERVER['SERVER_NAME'] . '/' . $goods['goods_img']:'';
        //     $results['data'][] = $goods;
        //     $record_count++;
        // }
        // if ($record_count > 0)
        // {
        //     $results['result'] = 'true';
        // }
        // if ($record_count > $record_number)
        // {
        //     array_pop($results['data']);
        //     $results['next'] = 'true';
        // }
        $results['result'] = true;
        $results['tp'] = ceil($count / $record_number);
        $results['p'] = $p;
        //$results['data'][] = $db->fetch_array($query);
        while($q = $db->fetch_array($query)){
            $cr_name= get_regions_name($q['province']);
            $pr_name= get_regions_name($q['city']);
            $tr_name = get_regions_name($q['district']);
            $q['cr_name'] = $cr_name;
            $q['pr_name'] = $pr_name;
            $q['tr_name'] = $tr_name;
            $results['data'][] = $q;
        }
        /**
             安装数据
         */

        exit($json->encode($results));
        break;
    }
    //get_goods_list
    case 'get_goods_list':
    {
        $results = array('result' => 'true', 'data' => array());
        $sql = "SELECT `value` FROM " . $ecs->table('shop_config') . " WHERE code='shop_name'";
        $shop_name = $db->getOne($sql);
        $sql = "SELECT `value` FROM " . $ecs->table('shop_config') . " WHERE code='currency_format'";
        $currency_format = $db->getOne($sql);
        $sql = "SELECT r.region_name, sc.value FROM " . $ecs->table('region') . " AS r INNER JOIN " . $ecs->table('shop_config') . " AS sc ON r.`region_id`=sc.`value` WHERE sc.`code`='shop_country' OR sc.`code`='shop_province' OR sc.`code`='shop_city' ORDER BY sc.`id` ASC";

        $shop_region = $db->getAll($sql);
        $results['data'] = array
        (
            'shop_name' => $shop_name,
            'domain' => 'http://' . $_SERVER['SERVER_NAME'] . '/',
            'shop_region' => $shop_region[0]['region_name'] . ' ' . $shop_region[1]['region_name'] . ' ' . $shop_region[2]['region_name'],
            'currency_format' => $currency_format
        );
        exit($json->encode($results));
        break;
    }
    //更改发货状态
    case 'send_shipping':
    {
        $results = array('result' => 'false', 'data' => array());
        $sql = "SELECT `shipping_id`, `shipping_name`, `insure` FROM " . $ecs->table('shipping');
        $result = $db->getAll($sql);
        if (!empty($result))
        {
            $results['result'] = 'true';
            $results['data'] = $result;
        }
        exit($json->encode($results));
        break;
    }
    case 'get_goods_attribute':
    {
        $results = array('result' => 'false', 'data' => array());
        $goods_id = isset($data['goods_id'])? intval($data['goods_id']):0;
        if (!empty($goods_id))
        {
            $sql = "SELECT t2.attr_name, t1.attr_value FROM " . $ecs->table('goods_attr') . " AS t1 LEFT JOIN " . $ecs->table('attribute') . " AS t2 ON t1.attr_id=t2.attr_id WHERE t1.goods_id='$goods_id'";
            $result = $db->getAll($sql);
            if (!empty($result))
            {
                $results['result'] = 'true';
                $results['data'] = $result;
            }
        }
        else
        {
            $results = array('result'=>'false', 'data'=>'缺少商品ID，无法获取其属性');
        }
        exit($json->encode($results));
        break;
    }
    default:
    {
        $results = array('result'=>'false', 'data'=>'缺少动作');
        exit(json_encode($results));
        break;
    }
}

/**
 * 解密函数
 *
 * @param string $txt
 * @param string $key
 * @return string
 */
function passport_decrypt($txt, $key)
{
    $txt = passport_key(base64_decode($txt), $key);
    $tmp = '';
    for ($i = 0;$i < strlen($txt); $i++) {
        $md5 = $txt[$i];
        $tmp .= $txt[++$i] ^ $md5;
    }
    return $tmp;
}

/**
 * 加密函数
 *
 * @param string $txt
 * @param string $key
 * @return string
 */
function passport_encrypt($txt, $key)
{
    srand((double)microtime() * 1000000);
    $encrypt_key = md5(rand(0, 32000));
    $ctr = 0;
    $tmp = '';
    for($i = 0; $i < strlen($txt); $i++ )
    {
        $ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
        $tmp .= $encrypt_key[$ctr].($txt[$i] ^ $encrypt_key[$ctr++]);
    }
    return base64_encode(passport_key($tmp, $key));
}

/**
 * 编码函数
 *
 * @param string $txt
 * @param string $key
 * @return string
 */
function passport_key($txt, $encrypt_key)
{
    $encrypt_key = md5($encrypt_key);
    $ctr = 0;
    $tmp = '';
    for($i = 0; $i < strlen($txt); $i++)
    {
        $ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
        $tmp .= $txt[$i] ^ $encrypt_key[$ctr++];
    }
    return $tmp;
}
function get_regions_name($id = 0)
{
    $sql = 'SELECT region_name FROM ' . $GLOBALS['ecs']->table('region') .
            " WHERE region_id = '$id' limit 1";

    return $GLOBALS['db']->getOne($sql);
}
?>