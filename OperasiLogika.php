<?php
    print("<div style='margin-left:50px'>");
    print("<h2>Operasi Logika</h2>");
    $i=37;
    $j=42;
    $k=42;

    echo "<h2>Nilai variabel</h2>";
    echo "	i=".$i."</br>";
    echo "	j=".$j."</br>";
    echo "	k=".$k."</br>";

    //lebih besar dari
    echo "<h2>Lebih besar dari</h2>";
    echo "i>j : ".($i>$j)."</br>";
    echo "j>i : ".($j>$i)."</br>";
    echo "k>j : ".($k>$j)."</br>";

    //lebih besar sama dengan
    echo "<h2>Lebih besar samadengan</h2>";
    echo "i>=j : ".($i>=$j)."</br>";
    echo "j>=i : ".($j>=$i)."</br>";
    echo "k>=j : ".($k>=$j)."</br>";

    //lebih kecil dari
    echo "<h2>Lebih kecil dari</h2>";
    echo "i &lt; j : ".($i<$j)."</br>";
    echo "j &lt; i : ".($j<$i)."</br>";
    echo "k &lt; j : ".($k<$j)."</br>";

    //lebih kecil samadengan
    echo "<h2>Lebih kecil samadengan</h2>";
    echo "i<=j : ".($i<=$j)."</br>";
    echo "j<=i : ".($j<=$i)."</br>";
    echo "k<=j : ".($k<=$j)."</br>";

    //samadengan
    echo "<h2>Samadengan</h2>";
    echo "i==j : ".($i==$j)."</br>";
    echo "j==i : ".($j==$i)."</br>";
    echo "k==j : ".($k==$j)."</br>";

    //tidak sama dengan
    echo "<h2>Tidak samadengan</h2>";
    echo "i!=j : ".($i!=$j)."</br>";
    echo "j!=i : ".($j!=$i)."</br>";
    echo "k!=j : ".($k!=$j)."</br>";

?>
