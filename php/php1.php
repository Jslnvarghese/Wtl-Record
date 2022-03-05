<?php 
$a=400; $b=& $a; 
print "The value of a is " .$a."<br>"; print "The value of a is " .$a."<br>"; 
++$a; 
print "The value of a is " .$a."<br>"; print "The value of a is " .$a."<br>"; 
++$b; 
print "The value of a is " .$a."<br>"; print "The value of a is " .$a."<br>"; 
?> 
