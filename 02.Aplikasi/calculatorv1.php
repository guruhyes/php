<center>KALKULATOR PURE PHP v1</center>
<form method="POST" target="">
    <input type="text" name="angka1"><br>
    <input type="text" name="angka2"><br>

    <input type="submit" name="kali" value="x">
    <input type="submit" name="bagi" value="/">
    <input type="submit" name="tambah" value="+">
    <input type="submit" name="kurang" value="-">
</form>

<?php 
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
if (isset($_POST['kali'])){
    
    echo $angka1 * $angka2 ;
}
if(isset($_POST['bagi'])){
    echo $angka1 / $angka2;
}
if(isset($_POST['tambah'])){
    echo $angka1 + $angka2;
}
if(isset($_POST['kurang'])){
    echo $angka1 - $angka2;
}


?>