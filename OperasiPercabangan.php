<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Operasi Percabangan</h1>
        <hr style="border-width: 2px">
        <div style="margin-left: 100px; margin-right: 100px; font-style: italic;">
            Diketahui Nilai keaktifan : 89 <br>
            Diketahui Nilai Tugas : 76 <br>
            Diketahui Nilai Ujian : 68 <br>
            <hr style="border: black dotted medium">            
        <?php
            $aktif = 89;
            $tugas = 76;
            $ujian = 68;
            $akhir = $aktif*0.2 + $tugas*0.3 + $ujian*0.5;
            
            echo "Nilai akhir : ".$akhir." <br>";
            echo "<hr style='border: black dotted medium'>";
            
            switch ($akhir) {
            case ($akhir >= 91 && $akhir <= 100):
                echo "A | ";
            break;
            case ($akhir >= 86 && $akhir <= 90) :
                echo "A- | "; 
            break; 
            case ($akhir >= 76 && $akhir <= 85) :
                 echo "B | "; 
            break;
            case ($akhir >= 66 && $akhir <= 75) :
                echo "B- | "; 
            break;
            case ($akhir >= 56 && $akhir <= 65) :
                echo "C | ";
            break;
            case ($akhir >= 45 && $akhir <= 55) :
                echo "D | ";
            break;
            default :
                echo "E | "; 
            break;
            }
            
            if ($akhir >= 86 && $akhir <= 100){ echo "Anda lulus, EXCELLENT"; }
            else if ($akhir >= 66 && $akhir <= 85){ echo "Anda lulus dengan baik, pertahankan prestasimu"; }
            else if ($akhir >= 56 && $akhir <= 65){ echo "Anda lulus, tingkatkan prestasimu"; }
            else{ echo "Anda tidak lulus, tingkatkan belajar anda"; }
            echo "<hr style='border: black dotted medium'>";
        ?>
            
        </div>
    </body>
</html>
