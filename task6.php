<?php
#6
$arr = array(1,2,3,4,5,6);
$element=6;
$cnt=0;

for ($i=0; $i < 6 ; $i++)
    { 
        if($arr[$i]==$element)
                {
                        $cnt=1;
                        $pos=$i+1;
                        break;
                }
    
    }
     if($cnt==0)
        {
                echo"<br/>". " Element Not Found..!!";
        }
        else
        {
            echo"<br/>". " Element is Found..!!";
        }
    
    

?>
