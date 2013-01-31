<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>url helper</title>
</head>
<body>
<h1>helper view 1 page</h1>
<p>This is example of helper.anchor function of url helper.<br />
	This page loaded by hleper_controller via index function.<br />
	Go to view 2 page</p>
<p><?php echo anchor('helper_controller/view2', 'link to helper_view2.php', 'title="go to view 2"') ; ?></p>
</body>
</html>