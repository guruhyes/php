<!-- V2 Mengubah operator aritmatika menjadi inputan '+,-,x,/'
     Dengan satu button hitung
 -->
<center>KALKULATOR PURE PHP v2</center>
<form method="POST" target="">
    <input type="text" name="angka1"><br>
    <input type="text" name="operator">Operator<br>
    <input type="text" name="angka2"><br>
    
    <input type="submit" name="hitung" value="Hitung">
</form>

<?php 
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];

switch($_POST['operator']){
    case "+":
        echo $angka1 + $angka2;
        break;
    case "-":
        echo $angka1 - $angka2;
        break;
    case "x":
        echo $angka1 * $angka2;
        break;
    case "/":
        echo $angka1 / $angka2;
        break;
    default:
        if(isset($_POST['operator'])){
            echo "Operator Tidak Ditemukan";
        }
}



?>