<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CI1_installation</title>
<body><pre>


----------------
1.installation
-----------------
1.unzip
2.delete user guide and lincense
3.application/config/config.php-->base url setting
4.application/config/database.php -->database setting
5.replace local/system folder and local/index.php to upgrade from a previous version
6.removing index.php-->local/.htaccess
                    -->local/app/config/config.php-->config['index_page'] = '';
                    -->local/app/config/config.php-->$config['uri_protocol'] = “AUTO”

</pre>
</body>
</html>