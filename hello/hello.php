<?php
function hello ($name=NULL) {
   if($name==NULL) {
  echo ("Hello world !"."\n");
   }
   else {
    echo  ('Hello'.' '.$name .' '.'!' ."\n");
   }
}
?>