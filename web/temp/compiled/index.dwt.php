<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/default/index.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />


<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body class="root61">
<?php echo $this->fetch('library/page_header_index.lbi'); ?>

<div class="block clearfix">

<div style="float:right" class="span12">
		<div class="slideBox2" id="slideBox">
		
			<div class="bd">
				<ul>
				<?php $_from = $this->_var['banner1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'banner');$this->_foreach['ban'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ban']['total'] > 0):
    foreach ($_from AS $this->_var['banner']):
        $this->_foreach['ban']['iteration']++;
?>
				<li style="display: list-item;"><table cellspacing="0" cellpadding="0">
				<tbody><tr><td><a target="_blank" href="<?php echo $this->_var['banner']['ad_link']; ?>"><img border="0" src="<?php echo $this->_var['banner']['ad_code']; ?>"></a></td></tr>
				</tbody></table> </li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
				</ul>
			</div>
			
			<a href="javascript:void(0)" class="prev"></a>
			<a href="javascript:void(0)" class="next"></a>
		</div>
		
		
		<div class="home-hd-show clearfix">
		<?php $_from = $this->_var['banner2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'banner');$this->_foreach['ban'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ban']['total'] > 0):
    foreach ($_from AS $this->_var['banner']):
        $this->_foreach['ban']['iteration']++;
?>
		<div class="hd-show-item hd-show-item-first J_randomItem">
                    <a href="<?php echo $this->_var['banner']['ad_link']; ?> " class="item" style="display: inline;"><img srcset="<?php echo $this->_var['banner']['ad_code']; ?>" src="<?php echo $this->_var['banner']['ad_code']; ?>" ></a>
                </div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 

        </div>
</div>
<script type="text/javascript">
		jQuery(".slideBox2").slide({mainCell:".bd ul",autoPlay:true});
		</script>
<div class="blank"></div>


<div style="margin: 0px auto; width: 1240px;" class="ad_index_big4">

<?php $this->assign('ads_id','3'); ?><?php $this->assign('ads_num','4'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>
<div style="margin: 0px auto; width: 1240px;" class="ad_index_big10">
 
<?php $this->assign('ads_id','4'); ?><?php $this->assign('ads_num','15'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>

</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
