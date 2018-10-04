<?php

if(count($_REQUEST) >= 1){
		$security = array("~","'","union","SELECT","INSERT","UNION","FROM","VERSION","DELETED",'"',"1=1","=","/","-","--","|","0x","%",">","<","&");
		foreach ($_REQUEST as $key => $value) {
			$kx = str_replace($security, '', $value);
			$_REQUEST[$key] = $kx;
		}
	}
	if(count($_POST) >= 1){
		$security = array("~","'","union","SELECT","INSERT","UNION","FROM","VERSION","DELETED",'"',"1=1","=","/","-","--","|","0x","%",">","<","&");
		foreach ($_POST as $key => $value) {
			$kx = str_replace($security, '', $value);
			$_POST[$key] = $kx;
		}
	}
	if(count($_GET) >= 1){
		$security = array("~","'","union","SELECT","INSERT","UNION","FROM","VERSION","DELETED",'"',"1=1","=","/","-","--","|","0x","%",">","<","&");
		foreach ($_GET as $key => $value) {
			$kx = str_replace($security, '', $value);
			$_GET[$key] = $kx;
		}
	}
