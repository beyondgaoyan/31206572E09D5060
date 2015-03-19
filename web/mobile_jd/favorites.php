<?php

/**
 * ECSHOP 用户中心
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: user.php 16643 2009-09-08 07:02:13Z liubo $
*/
session_start();

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */

require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/user.php');
if ($_SESSION['user_id'] > 0)
{
    $smarty->assign('user_name', $_SESSION['user_name']);
}

$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$smarty->assign('shop_name',     $GLOBALS['_CFG']['shop_name']);
$smarty->assign('shop_address',     $GLOBALS['_CFG']['shop_address']);
$smarty->assign('qq',     $GLOBALS['_CFG']['qq']);
$smarty->assign('ww',     $GLOBALS['_CFG']['ww']);
$smarty->assign('skype',     $GLOBALS['_CFG']['skype']);
$smarty->assign('ym',     $GLOBALS['_CFG']['ym']);
$smarty->assign('msn',     $GLOBALS['_CFG']['msn']);

$smarty->assign('service_email',     $GLOBALS['_CFG']['service_email']);
$smarty->assign('service_phone',     $GLOBALS['_CFG']['service_phone']);
$act = isset($_GET['act']) ? $_GET['act'] : '';



/* 用户中心 */


    if ($_SESSION['user_id'] > 0)
    {
        show_user_center();
    }
    else
    {
        $smarty->assign('footer', get_footer());
        $smarty->display('login.html');
    }

/**
 * 客服中心显示
 */
function show_user_center()
{
    $best_goods = get_recommend_goods('best');
    if (count($best_goods) > 0)
    {
        foreach  ($best_goods as $key => $best_data)
        {
            $best_goods[$key]['shop_price'] = encode_output($best_data['shop_price']);
            $best_goods[$key]['name'] = encode_output($best_data['name']);
        }
    }
    $GLOBALS['smarty']->assign('best_goods' , $best_goods);
    $GLOBALS['smarty']->assign('footer', get_footer());
    $GLOBALS['smarty']->display('favorites.html');
}




?>