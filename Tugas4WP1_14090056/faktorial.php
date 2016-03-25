<!DOCTYPE html>
<html>
<center>
<head>
<title>Menghitung Nilai Faktorial</title>
</head>
<body>
<form name="frm01" method="post">
<table>
<tr>
<td>Masukkan Angka</td>
<td><input type="text" name="txtAngka" size="5"/></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="hasil" value="Hasil"/></td>
</tr>
</table>
<?php
error_reporting(0);
if($_POST['hasil']!=''){
            $angka=$_POST['txtAngka'];
           
            function faktorial($angka){
            if($angka<=1){
                        $hasil=1;
                        return $hasil; 
            }elseif($angka>1){
                        for($i=1; $i<=$angka; $i++){
                             $hasil=$angka * faktorial($angka-1);
                        }
                        return $hasil;
            }
}
         echo "<br>";
   echo "Faktorial dari "." ".$angka." "."adalah :"." ".faktorial($angka);
}
?>
</form>
<br>
<a href="faktorial.php"><button>kembali</button></a>
</body>
</center>
</html>
