<!doctype html>
<html>
<head>
	<meta charset='utf-8'>
</head>

<body>
<form method='post' action='index.php'>
3CV:<input type="radio" name="CV" id="3CV" value="3">
4CV:<input type="radio" name="CV" id="4CV" value="4">
5CV:<input type="radio" name="CV" id="5CV" value="5">
6CV:<input type="radio" name="CV" id="6CV" value="6">
7CV ou +:<input type="radio" name="CV" id="7CV" value="7">
<br><br>
Nombre de kilomètre parcouru: <input type="text" name="km" id="km">

<br><br>
<input type = "submit" value="envoyer" name ="calcul" id="calcul">
</form>
<?php
$km = $_POST['km'];
$cv = $_POST['CV'];

/*CVX_Y X= nb chevaux, Y = 1: moins de 5000km, Y = 2: entre 5001 et 20000km, Y = 3: plus de 20000km.*/

$CV3_1 = 0.41 * $km;
$CV3_2 = (0.245 * $km) + 824;
$CV3_3 = 0.285 * $km;
$CV4_1 = 0.493 * $km;
$CV4_2 =(0.27 * $km) + 1082;
$CV4_3 =0.332 * $km;
$CV5_1 =0.543 * $km;
$CV5_2 =(0.305 * $km) + 1168;
$CV5_3 =0.364 * $km;
$CV6_1 =0.568 * $km;
$CV6_2 =(0.32 * $km) + 1244;
$CV6_3 =0.382 * $km;
$CV7_1 =0.595 * $km;
$CV7_2 =(0.337 * $km) + 1288;
$CV7_3 =0.401 * $km;

/*test 3CV*/
if(isset($_POST['calcul'])){
    if(isset($km) AND isset($cv) AND ($km < 5000) AND $cv == 3) {
        echo"<br>avec ".$cv."CV sur une voiture, vous êtes indemnisé à ". $CV3_1. " euros.";
    }
    if (isset($km) AND isset($cv) AND (5000<=$km) AND ($km<=20000) AND ($cv == 3)) {
        echo "<br>avec ".$cv."CV sur une voiture, vous êtes indemnisé à ". $CV3_2. " euros.";
    }
    if (isset($km) AND isset($cv) AND ($km > 20000) AND ($cv == 3)) {
        echo "<br>avec ".$cv."CV sur une voiture, vous êtes indemnisé à ". $CV3_3. " euros.";
    }

    /*test 4CV*/
    if (isset($km) AND isset($cv) AND ($km < 5000) AND $cv == 4) {
        echo "<br>avec ".$cv."CV sur une voiture, vous êtes indemnisé à ". $CV4_1. " euros.";
    }
    if (isset($km) AND isset($cv) AND (5000 <= $km AND $km <= 20000) AND ($cv == 4)) {
        echo "<br>avec ".$cv."CV sur une voiture, vous êtes indemnisé à ". $CV4_2. " euros.";
    }
    if (isset($km) AND isset($cv) AND ($km > 20000) AND ($cv == 4)) {
        echo "<br>avec ".$cv."CV sur une voiture, vous êtes indemnisé à ". $CV4_3. " euros.";
    }

    /*test 5CV*/
    if (isset($km) AND isset($cv) AND ($km < 5000) AND $cv == 5) {
        echo "<br>avec ".$cv."CV sur une voiture, vous êtes indemnisé à ". $CV3_1. " euros.";
    }
    if (isset($km) AND isset($cv) AND (5000 <= $km AND $km <= 20000) AND ($cv == 5)) {
        echo "<br>avec ".$cv."CV sur une voiture, vous êtes indemnisé à ". $CV5_2. " euros.";
    }
    if (isset($km) AND isset($cv) AND ($km > 20000) AND ($cv == 5)) {
        echo "<br>avec ".$cv."CV sur une voiture, vous êtes indemnisé à ". $CV5_3. " euros.";
    }
    /*test 6CV*/
    if (isset($km) AND isset($cv) AND ($km < 5000) AND $cv == 6) {
        echo "<br>avec ".$cv."CV sur une voiture, vous êtes indemnisé à ". $CV6_1. " euros.";
    }
    if (isset($km) AND isset($cv) AND (5000 <= $km AND $km <= 20000) AND ($cv == 6)) {
        echo "<br>avec ".$cv."CV sur une voiture, vous êtes indemnisé à ". $CV6_2. " euros.";
    }
    if (isset($km) AND isset($cv) AND ($km > 20000) AND ($cv == 6)) {
        echo "<br>avec ".$cv."CV sur une voiture, vous êtes indemnisé à ". $CV6_3. " euros.";
    }
    /*test 7CV et + */
    if (isset($km) AND isset($cv) AND ($km < 5000) AND $cv == 7) {
        echo "<br>avec ".$cv."CV sur une voiture, vous êtes indemnisé à ". $CV7_1. " euros.";
    }
    if (isset($km) AND isset($cv) AND (5000 <= $km AND $km <= 20000) AND ($cv == 7)) {
        echo "<br>avec ".$cv."CV sur une voiture, vous êtes indemnisé à ". $CV7_2. " euros.";
    }
    if (isset($km) AND isset($cv) AND ($km > 20000) AND ($cv == 7)) {
        echo"<br>avec ".$cv."CV sur une voiture, vous êtes indemnisé à ".  $CV7_3. " euros.";
    }
}
?>
</body>
</html>