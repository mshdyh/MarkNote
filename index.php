<?php
	//MarkNote 轻量级云记事本系统

	require 'include/user.php';

	error_reporting(E_ALL);
	ini_set('display_errors', '1');


	if( !file_exists('config.php') ){
		header("Location: include/install.php");
		exit();
	}

	if( isset($_GET['type']) ){
		$type = $_GET['type'];
	}else{
		$type = 'home';
	}

	echo 'index.php<br/>type='.$type.'<br/>';


	if( $type == 'user' ){
		require 'user.php';
	}

	if( $type == 'notebook' ){
		require 'notebook.php';
	}

	if( $type == 'note' ){
		require 'note.php';
	}

	if( $type == 'home' ){
		if(hasLogin())
			require 'edit.php';
		else
			require 'login.php';
	}

?>
