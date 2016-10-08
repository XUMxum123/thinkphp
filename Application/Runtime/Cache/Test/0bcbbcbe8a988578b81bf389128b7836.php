<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Index</title>
<script type="text/javascript" src="/thinkphp/Public/Test/js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="/thinkphp/Public/Test/js/test.js"></script>
</head>
<body>
   <div style="font-size:30px; color: #f00; text-align:center;"><?php echo ($name); ?></div>
   <div style="font-size:30px; color: #f00; text-align:center;">
     <input type="text" id="text" value="" /> <br />
     <input type="submit" id="submit" value="点击" />
   </div>
   <div style="font-size:30px; color: #f00; text-align:center;" id="inner"></div>
   <div style="font-size:30px; color: #f00; text-align:center;">
     <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo[DB_NBATEAM_NAME]); ?>---<img src="<?php echo ($vo[DB_NBATEAM_LOGO]); ?>" style="width: 30px; height: 30px;" /><br /><?php endforeach; endif; else: echo "" ;endif; ?>
   </div>
</body>
</html>