<?php
function is_negative_ternary($n)  {
   if (is_int($n)== FALSE) {
      echo  "Le parametre n'est pas un Int\n";
    } else {
   echo( $n>=0 ? "False\n"  : "True\n" );
}
}
?>