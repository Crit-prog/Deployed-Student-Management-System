<?php

function connect()
{
	$host = 'sql107.infinityfree.com';
	$dbname = 'if0_39159447_StudentManagementSystem';
	$username = 'if0_39159447';
	$password = 'GmMP7IIoHZUTG';

	try {
		$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		echo "Connection Succesful";
	} catch (PDOException $e) {
		echo "Connection Failed" . $e->getMessage();
	}

}

connect();