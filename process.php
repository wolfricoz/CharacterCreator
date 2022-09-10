<html>
<head></head>
<body>
<h1>General Info</h1>
<?php

use PhpOffice\PhpWord\PhpWord;

$fname = $_POST["Fname"];
    $lname = $_POST["Lname"];
    echo "Name: " . $fname ." ". $lname;
    $age = $_POST["age"];
    echo "<br>Age: " . $age;
    $sex = $_POST["sex"];
    echo "<br>Sex: ". $sex;
    $occ = $_POST["occupation"];
    echo "<br>occupation: ". $occ;
    $orientation = $_POST["orientation"];
    echo "<br>orientation: " . $orientation;
    $SC = $_POST["SC"];
    echo "<br>Social Class: " . $SC;
?>
<h1>Appearance</h1>
<?php
    $species = $_POST["species"];
    echo "Species: " . $species;
    $height = $_POST["height"] / 100;
    echo "<br>height: " . $height . " M";
    $weight = $_POST["weight"];
    echo "<br>Weight: " . $weight . " Kg";
    $pd = $_POST["pd"];
    echo "<br>Physical Description: " . $pd;
    $ap = $_POST["ap"];
    echo "<br>Appearance: " . $ap;
    $voice = $_POST["Voice"];
    if(empty($voice)){

    }else{
        echo "<br>Voice: " . $voice;
    }

    $df = $_POST["df"];
    echo "<br>Distinguishing Features: " . $df;
?>
<h1>About</h1>
<?php
$pers = $_POST["Pers"];
echo "Personality: " . $pers;
$stre = $_POST["stre"];
echo "<br>Strengths:" . $stre;
$weak = $_POST["weak"];
echo "<br>Weaknesses" . $weak;
$fears = $_POST["fears"];
echo "<br>Fears: " . $fears;
$nskills = $_POST["nskills"];
echo "<br>Non-Combat Skills:" . $nskills;
$inter = $_POST["inter"];
echo "<br>Interests/Quirks: " . $inter;
$rel = $_POST["rel"];
echo "<br>Religion: " . $rel;
$past = $_POST["past"];
echo "<br>Past Occupation(s): " . $past;
$goals = $_POST["goals"];
echo "<br>Goals: " . $goals;


?>
<h1>Family:</h1>
<?php
$father = $_POST["father"];
echo "Father(s):" . $father;
$mother = $_POST["mother"];
echo "<br>Mother(s):" . $mother;
$sib = $_POST["sibling"];
echo "<br>Sibling(s): " . $sib;
$pet = $_POST["pet"];
echo "<br>Pet(s):" . $pet;
require_once 'vendor\autoload.php';
$phpword = new PhpWord()
?>
</body>
</html>
