<!DOCTYPE html>
<html>
<head>
	<link href="../main.css" rel="stylesheet" type="text/css">
	<title>Introduction to Javascript</title>
	<?php include('../pagination.php'); ?>
</head>
<body>
	<div class="page">
	<?php navigation(); ?>
	<article>
	<p>
	Javascript (JS) is probably the most powerful and useful language from a web
	developper's perspective. But what the hell is it?
	</p>
	
	<p>
	Javascript is a client-side, weakly typed, garbage collected, object oriented language.
	Holy shit what did I just say? 
	</p>
	
	<p>
	<i>Object oriented</i> (OO) languages are those
	that like to break up the universe into discrete packages that are
	referred to as "objects" (oh, very descriptive, I know). For instance, 
	if you were writing a program for a 
	workplace, an object oriented approach might define an "Employee" object,
	an "Office" object, and a "Building" object. Each of these objects would contain
	a bunch of information about itself, as well as a bunch of functions that can
	manipulate that information. 
	</p>
	<p>
	Continuing with our example, an Employee might
	hold information such as "name", "salary", "office", "at work", and 
	"in meeting"; Offices
	might have "has window" and "employees"; and Buildings might have "offices" and
	"rent". Notice that Buildings contain Offices, Offices contain Employees, 
	and Employees also contain Offices.  
	This is critical to OO: objects can hold other objects which
	in turn can hold others and so on. The fact that objects can also contain 
	their containers is a bit odd, but that's because containment may not be 
	litteral. It would perhaps be best to think of this relationship as "having" or
	sometimes "knowing", rather
	than "containing", although there are some objects (such as the Office)
	where we do intend litteral containment. Offices have Employees, and Employees
	have Offices, just like in real life. 
	</p>
	<p>
	As for functions, an Employee might have functions
	like "get raise" or "go to meeting" which change the values the employee stores,
	or functions like "should be fired" or "has office with window", which just ask
	questions about the current state of the employee. There is no physical 
	distinction between these two types of functions, but from a design perspective
	the distinction can be meaningful. Also, a function can be used to do both at
	once.
	</p>
	
	<p>
	<i>Garbage collected</i> describes how information is tidied up. In our
	example, say we wanted to fire an employee. Once the procedure is complete,
	we don't really care about that employee anymore and want to clear up the
	space it's taking up on the computer. With a <i>garbage collector</i> (GC)
	things automatically get cleaned up if they've been forgotten about. You can
	think of this as litterally having a garbage man walk through the program and 
	finding the stuff no one remembers and collecting it up. 
	</p>
	<p>
	To explain what
	forgetting is, we will pretend there is some sort of "Program" object which
  stores some of the objects, and is all the program is allowed to "know". 
  In our example, the only things Program would need to 
  know about are our company's Buildings. This is because we can get to all the 
  Offices
  through the Buildings, and all the Employees through the Offices (this is 
  a really awesome company where every employee has an office). To get to an
  Employee we would just ask the Program to ask a Building to ask an Office
  about it. However, if a Building was removed from the Program such that it
  didn't know about it anymore, then all the Offices and Employees that were
  part of that Building would be unknowable to the Program. This information
  is now forgotten, and will be collected up by the garbage collector. So the
  GC collects up things that the program can't possibly ever
  access anymore.
  </p>
  <p>
  It is important to remember that the GC can only work so fast,
  and you may run out of memory because you were forgetting too many things
  faster than the GC could tidy them up. 
	</p>
	<p>
	A <i>weakly typed</i> language is simply a language that lets you
	change your mind about what should be stored in a variable. So while in many
	languages putting a number in a variable means that variable can only hold
	numbers, in Javascript you can just turn around and start putting text or
	objects in it. This makes JS more flexible, but also makes it easier for
	the programmer to make mistakes without knowing about it.
	<p>
	Finally, a client-side language is one that runs on the user's computer, and
	not on the computer that stores the website. This is really powerful because
	it means the language can be incredibly responsive, and it also means that your
	server undergoes no extra load if there are 10, 100, or 1000 people just 
	idling on a page running javascript applications. You may as well be serving
	static html pages. Of course, if you have the
	application communicate with the server this benefit is lessened.
	</p>
	</article>
	<?php navigation(); ?>
	</div>
</body>
</html>

