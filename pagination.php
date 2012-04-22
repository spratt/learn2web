<?php

function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$curPage = curPageName();
$nextPage = "";
$prevPage = "";

$pages = new DOMDocument();
$pages->load("pages.xml");

$pageList = $pages->documentElement;
$shouldQuit = false;
foreach ($pageList->childNodes AS $page){
	if(strlen(trim($page->nodeValue))>0){
		if($shouldQuit){
			$nextPage = $page->nodeValue;
			break;
		}
		if(strcmp(trim($page->nodeValue),trim($curPage))==0){
			$shouldQuit = true;
		}else{
			$prevPage = $page->nodeValue;
		}
  }
}

function navigation(){
	global $prevPage, $nextPage;
	if(strlen($prevPage)>0){
		echo "<a href='".$prevPage."'>Previous </a>";
	}
	
	echo "<a href='./'> Main </a>";
	
	if(strlen($nextPage)>0){
		echo "<a href='".$nextPage."'> Next</a>";
	}
}
?>
