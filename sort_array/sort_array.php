<?php
function sort_array ($tab) {
    for($i=0;$i<=(sizeof($tab)-1);$i++)
    {
        for($j=$i+1;$j<=(sizeof($tab)-1);$j++)
        {
            if($tab[$j]<$tab[$i])
            {
                $min=$tab[$j];
                $tab[$j]=$tab[$i];
                $tab[$i]=$min;
            }
            
        }
        
    }
    return $tab;
    
    }
    
?>
