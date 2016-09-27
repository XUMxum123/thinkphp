<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Index</title>
<script type="text/javascript" src="/Thinkphp/Public/Test/js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="/Thinkphp/Public/Test/js/test.js"></script>
</head>
<body>
   <div style="font-size:30px; color: #f00; text-align:center;"><?php echo ($name); ?></div>
   <div style="font-size:30px; color: #f00; text-align:center;">
     <input type="text" id="text" value="" /> <br />
     <input type="submit" id="submit" value="点击" />
   </div>
   <div style="font-size:30px; color: #f00; text-align:center;" id="inner"></div>
</body>
</html>