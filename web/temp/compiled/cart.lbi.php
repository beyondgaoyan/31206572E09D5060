<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
<div id="ECS_CARTINFO" style="float:left">
 <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
   
     </div>
<script type="text/javascript">
function deleteCartGoods(rec_id)
{
Ajax.call('flow.php?step=delete_cart_goods', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
      document.getElementById('ECS_CARTINFO').innerHTML = res.content;
  }
}
</script>