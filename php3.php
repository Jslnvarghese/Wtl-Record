<html> 
<body> 
<?php  
$x=1; $s=0; do {     if($x%2==0) 
    { 
    $s=$s+$x; 
    $x++; 
    }     else     { 
    $x++; 
    } 
} while ($x <= 10); print "The sum of first ten even numbers is:".$s;  
?> 
 
</body> 
</html> 
