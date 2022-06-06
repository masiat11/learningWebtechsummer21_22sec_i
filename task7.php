<?php

for($i=1; $i<=5; $i++) {
for($j=1; $j<=$i; $j++)
{
echo '*';
} echo "\n";
}
<br><?php   
#B.
for ($i=0; $i<=3; $i++) 
{    
for($j=1;$j<=3-$i;$j++)     
{       
echo $j;  
}       
echo "<br/>";       
}  

?
<?php   
#C.
for ($i=0; $i<=3; $i++) 
{    
for($j=1;$j<=$i-3;$j++)     
{       
echo $j;  
}       
echo "<br/>";       
}  

?>

?>