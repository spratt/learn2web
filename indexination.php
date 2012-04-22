<?php
$pages = new DOMDocument();
$pages->load("pages.xml");

$pageList = $pages->documentElement;


function index(){
	global $pageList;
	echo "Index:</br>";
	foreach ($pageList->childNodes AS $page){
		if(strlen(trim($page->nodeValue))>0){
			echo "<a href='".$page->nodeValue."'>";
			echo $page->getAttribute("name");
			echo "</a></br>";
		}
	}
}
?>
