<?php 
‫‪error_reporting‬‬(E_ALL);‬‬
‫$php_version_error‬‬ ‫‪="<b><font‬‬ ‫‪face=tahoma‬‬ ‫‪color=990000‬‬ size=3‬‬>

	You need php 5 or higher
	</font></b‬‬>" ‫;‬
‫‪if‬‬ ‫‪(version_compare(phpversion(),‬‬ ‫‪'5',‬‬'<'‬ ‫) ‫==‬ ‫)true)‬‬ ‫{‬ ‫‪die‬‬($php_version_error‬‬); ‫}‬
‫‪define‬‬ ‫‪('SH',‬‬"/");
‫‪$url‬‬ ‫=‬ ‫realpath(dirname(__FILE‬‬__)‪.‬‬‫‪SH‬‬‫‪.‬‬‫'..‪'.‪SH)‬‬‬‬.‪SH‬;‬
‫‪define‬‬‪('URL',‬‬$url‬‬);‪



‫‪function‬‬ ‫‪__autoload($class_name‬‬) ‫{‬
‫‪$filename‬‬ ‫=‬ ‫strtolower($class_name‬‬).'‪.php‬‬' ‫;
‫‪$file‬‬ ‫=‬ ‫‪URL‬‬ ‫‪.‬‬ ‫'‪classes‬‬' ‫‪.‬‬ ‫‪SH‬‬ ‫‪.‬‬$filename‬‬ ‫;‪
‫‪if‬‬(file_exists($file)‬‬ ‫==‬ ‪false‬‬ ‫) ‫{‬
‫‪return‬‬ ‪false‬‬ ‫;
‫}‬
‫‪include‬‬ ‫($file‬‬);‪
‫}‬
?>