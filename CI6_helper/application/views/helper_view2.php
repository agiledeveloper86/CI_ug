<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>url helper</title>
</head>
<body>
<h1>helper view 2 page</h1>
<p>This is example of helper.anchor function of url helper.<br />
	This page loaded by hleper_controller via view2 function.<br />
	Go to view 1 page</p>
<p><?php echo anchor('helper_controller/index', 'link to helper_view1.php', 'title="go to view 1"');?></p>
</body>
</html>