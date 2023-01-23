<?php
	//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	
	$nr_indeksu = '163293';
	echo "$nr_indeksu";
	
	$strona = 'html/index.html';
	if($_GET["idp"] == "")
		$strona = 'html/index.html';
	if($_GET["idp"] == "uslugi")
		$strona = 'html/uslugi.html';
	if($_GET["idp"] == "kontakt")
		$strona = "html/kontakt.html";
	if($_GET["idp"] == "about")
		$strona = "html/about.html";
	if($_GET["idp"] == "software")
		$strona = "html/software.html";
	if($_GET["idp"] == "filmy")
		$strona = "html/filmy.html";
	
	include($strona);
?>