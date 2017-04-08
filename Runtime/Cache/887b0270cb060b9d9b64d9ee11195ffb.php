<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>测试模板引擎</title>
	</head>
	<body>
		<p>PHP数组形式</p>
		<?php echo ($user['id']); ?>
		<?php echo ($user['name']); ?>
		<p>Java属性模式</p>
		<?php echo ($user["age"]); ?>
		<p>设置当值为空时设置默认值</p>
		<?php echo (($user["sex"])?($user["sex"]):'男'); ?>
		<p>模板运算</p>
		<?php echo ($user['age']+1); ?>
		<p>模板调用函数</p>
		
		<?php echo (substr(md5($user['name']),0,5)); ?>
		<p>模板调用函数</p>
		
		<?php echo (date('Y-m-d H:i:s',$user['now'])); ?>
		<p>ThinkPHP自带的系统变量</p>
		<?php echo (date('Y-m-d g:i a',time())); ?>
		<p>当前ThinkPHP版本</p>
		<?php echo (THINK_VERSION); ?>
		<p>当前域名</p>
		<?php echo ($_SERVER['HTTP_HOST']); ?>
		<p>循环遍历数组 volist</p>
		<p>截取 offset 头 length 长</p>
		<p>当数组为空时 empty 设置默认显示的值</p>
		<?php if(is_array($users)): $i = 0; $__LIST__ = array_slice($users,1,2,true);if( count($__LIST__)==0 ) : echo "没有数据" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; echo ($data['id']); ?><br/>
			<?php echo ($data['name']); ?><br/>
			<?php echo ($data['age']); ?><br/><?php endforeach; endif; else: echo "没有数据" ;endif; ?>
		<p>循环遍历数组 foreach 没有截取</p>
		<?php if(is_array($users)): foreach($users as $key=>$data): echo ($data['id']); ?><br/>
			<?php echo ($data['name']); ?><br/>
			<?php echo ($data['age']); ?><br/><?php endforeach; endif; ?>
		<p>for循环</p>
		<?php $__FOR_START_6041__=1;$__FOR_END_6041__=12;for($i=$__FOR_START_6041__;$i <= $__FOR_END_6041__;$i+=1){ echo ($i); ?><br/><?php } ?>
		<p>if判断</p>
		<?php if($num > 10): ?>num大于10
			<?php elseif($num < 10): ?>num小于10
			<?php else: ?>num等于10<?php endif; ?>
		<p>swicth判断</p>
		<?php switch($name): case "老师": ?>老师...<?php break;?>
			<?php case "小红": ?>小红...<?php break;?>
			<?php default: ?>小明...<?php endswitch;?>
		<p>比较标签</p>
		<?php if(($num) == "10"): ?>num=10
			<?php else: ?>
			num!=10<?php endif; ?>
		<br/>
		<?php if(($num) != "12"): ?>num!=12<?php endif; ?>
		<br/>
		<?php if(($num) == "11"): ?>num=11
			<?php else: ?>
			num!=11<?php endif; ?>
		<p>区间判断</p>
		<?php if(in_array(($num), explode(',',"1,11,111"))): ?>在这个区间<?php endif; ?>
		<br/>
		<?php if(!in_array(($num), explode(',',"2,22,222"))): ?>不在这个区间<?php endif; ?>
		<br/>
		<?php $_RANGE_VAR_=explode(',',"1,111");if($num>= $_RANGE_VAR_[0] && $num<= $_RANGE_VAR_[1]):?>在这个区间<?php endif; ?>
		<br/>
		<?php $_RANGE_VAR_=explode(',',"111,1111");if($num<$_RANGE_VAR_[0] && $num>$_RANGE_VAR_[1]):?>不在这个区间<?php endif; ?>
		<br/>
		<?php if(in_array(($num), explode(',',"1,1111"))): ?>在这个区间<?php endif; ?>
		<br/>
	</body>
</html>