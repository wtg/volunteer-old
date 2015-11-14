<?php
	require 'resources/connect.php';
	require 'vendor/autoload.php';

	try {
		$conn = new PDO("mysql:host=$server;", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
    	echo "Connection failed: " . $e->getMessage();
    }

    $app = new \Slim\Slim();
     $app->get('/', function() {
    	include('public_html/index.html');
    });
	$app->run();
?>
