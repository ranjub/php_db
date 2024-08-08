<?php
//pattern-1

for($i=0;$i<=4;$i++){        
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br/>";
}
echo "<br />";
//pattern-2
for($i=1;$i<=5;$i++){
    for($j=1;$j<=5-$i;$j++){
     echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
                echo "*&nbsp;&nbsp;";
    }
echo "<br />";
}
echo "<br />";



//pattern-3
for($i=1;$i<=7;$i+=2){
    for($j=1;$j<=7-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
                echo "*&nbsp;&nbsp;";
    }
echo "<br />";
}
echo "<br />";


//function to get individual characters from the given string
$x="ranju";
$y=substr($x,0,1);
echo $y;
?>