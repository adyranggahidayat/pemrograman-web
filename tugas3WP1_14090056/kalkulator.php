<!DOCTYPE html>
<html>
<head><title>Kalkulator di PHP</title>
<style type="text/css">
body{
background: url('eltsa 7.jpg') no-repeat scroll;
background-size: 100% 100%;
min-height: 660px;
}
</style></head>
<body>
<main>
<article style="background-color:green; width:30%;float:left;margin:40px 30%;text-align:center">
<h1>Kalkulator Sederhana</h1>
<form method="post" action="kalkulator.php">
<br>Angka 1 
<input type="number" name="angka1" value="<?php echo $_POST['angka1'];?>" required><br>
<br>Angka 2
<input type="number" name="angka2" value="<?php echo $_POST['angka2'];?>" required><br>
   <?php
     if(isset($_POST["jumlah"])){
        $hasil = $_POST["angka1"] + $_POST["angka2"];   
     }
     if(isset($_POST["kurang"])){
        $hasil = $_POST["angka1"] - $_POST["angka2"];   
     }
     if(isset($_POST["kali"])){
        $hasil = $_POST["angka1"] * $_POST["angka2"];   
     }
     if(isset($_POST["bagi"])){
        $hasil = $_POST["angka1"] / $_POST["angka2"];   
     }
	 if(isset($_POST["mod"])){
        $hasil = $_POST["angka1"] % $_POST["angka2"];   
     }
   ?>
   <br>
   Operasi = 
   <input type="submit" name="jumlah" value="+"> &nbsp
   <input type="submit" name="kurang" value="-"> &nbsp
   <input type="submit" name="kali" value="*"> &nbsp
   <input type="submit" name="bagi" value="/"> &nbsp
   <input type="submit" name="mod" value="%"><br>
   <br> Hasilnya 
   <input type="number" name="hasil" disabled value="<?php echo $hasil;?>">
<br><br><br>
</form>
</article>
</main>
by El Araya
</body>
</html>