<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CI5_model</title>
<body><pre>

----------------
5.model
-----------------
1.local/app/config/autoload.php--> load database library.
2.local/app/models/demo_model.php-->creating a Demo_model.. 
                                 -->creating _construct and test functions
3.local/app/controllers/demo_controller.php-->Loading Demo_model to demo_controller.php controller
                                        -->accessing test function of demo_model after loading
                                        -->assigning demo_model to a different object name fubar
4.local/app/config/autoload.php-->Auto-loading Models.

</pre>
</body>
</html>