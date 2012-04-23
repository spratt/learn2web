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
	echo "<div class='container'><nav>";
	if(strlen($prevPage)>0){
		echo "<div class='left'><a href='".$prevPage."'>Previous </a></div>";
	}
	
	echo "<div class='center'><a href='./'> Index </a></div>";
	
	if(strlen($nextPage)>0){
		echo "<div class='right'><a href='".$nextPage."'> Next</a></div>";
	}
	echo "</nav></div></br>";
}
?>
