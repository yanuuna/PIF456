<?php
    print("<div style='margin-left:50px'>");
    print("<h2>Operasi Aritmatika</h2>");
    $i = 37;
    $j = 42;
    $x = 27.457;
    $y = 7.22;
    echo "<h2>Variable Values : </h2>";
    echo "	i = ".$i."</br>";
    echo "	j = ".$j."</br>";
    echo "	x = ".$x."</br>";
    echo "	y = ".$y."</br>";

    echo "<h2>Adding : </h2>";
    echo "	i+j = ".($i+$j)."</br>";
    echo "	x+y = ".($x+$y)."</br>";

    echo "<h2>Substracting : </h2>";
    echo "	i-j = ".($i-$j)."</br>";
    echo "	x-y = ".($x-$y)."</br>";

    echo "<h2>Multipliying : </h2>";
    echo "	i*j = ".($i*$j)."</br>";
    echo "	x*y = ".($x*$y)."</br>";

    echo "<h2>Deviding :</h2>";
    echo "	i/j = ".($i/$j)."</br>";
    echo "	x/y = ".($x/$y)."</br>";

    echo "<h2>Mixing Type :</h2>";
    echo "	j+y = ".($j+$y)."</br>";
    echo "	i*x = ".($i*$x)."</br>";

    echo "<h2>Modulus operation :</h2>";
    echo "i modulus %4 = ".($i%4)."</br>";
    echo "j modulus %4 = ".($j%4)."</br>";
    echo "x modulus %4 = ".($x%4)."</br>";
    echo "y modulus %4 = ".($y%4)."</br>";

?>
