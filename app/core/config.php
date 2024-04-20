<?php 

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	/** database config **/
	define('DBNAME', 'Final-Project');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', 'root');
	define('DBDRIVER', '');
	
	define('ROOT', 'http://localhost:8888/');

}else
{
	/** database config **/
	define('DBNAME', $env['Final-Project']);
	define('DBHOST', $env['localhost']);
	define('DBUSER', $env['root']);
	define('DBPASS', $env['root']);
	define('DBDRIVER', '');

	define('ROOT', 'https://www.yourwebsite.com');

}

define('APP_NAME', "My Webiste");
define('APP_DESC', "Best website on the planet");

/** true means show errors **/
define('DEBUG', true);

