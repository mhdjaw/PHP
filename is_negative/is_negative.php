<?php
function is_negative($n)  {
   if (is_int($n) == FALSE) {
      echo  "Le parametre n'est pas un Int\n";
    } else  if($n>=0) {
        echo ("False\n");
    }
    else  {
        echo ("True\n");
    } 
}

?>