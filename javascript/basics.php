<!DOCTYPE html>
<html>
<head>
	<link href="../main.css" rel="stylesheet" type="text/css">
	<title>Basics</title>
	<?php include('../pagination.php'); ?>
</head>
<body>
	<div class="page">
	<?php navigation(); ?>
  <article>
	<p>
	Alright, let's get into how to actually make Javascript go boom. Javascript
	can be written in a file with .js extension, written inline with script tags
	in a standard html file just like CSS or PHP, or as parameters to some HTML
	elements' attributes. For now we'll focus on inline Javascript.
	</p>
	<p>
	To add inline javascript to a page we write

	<code>&lt;script type="text/javascript">//HELLO I AM PRETTY JS&lt;/script></code>

	To create a variable in Javascript we just have to say
	<code> var blahblah;</code>
	Although it should be remarked that in JS, if an undeclared variable is made
	reference to, it will be created globally. So 
	<code> 
	var x = 5; </br>
	y = 6;</br>
	var z = x+y;
	</code>
	is completely valid code. Although globals are generally not best practices,
	and should be avoided when possible. This behaviour is also a <b>massive</b>
	source of frustration for code not working right.
	</p>
	</article>
	<?php navigation(); ?>
	</div>
</body>
</html>

