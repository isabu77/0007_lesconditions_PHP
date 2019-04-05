<?php
//LES CONDITIONS

// exercice 1 : 
echo "-- Exercice 1 : si age >= 18 majeur sinon mineur" . "<br>";
$age = 56;
if ($age >= 18){
	echo "Vous êtes majeur" . "<br>";
}
else{
	echo "Vous êtes mineur" . "<br>";

}

// exercice 2 : 
echo "-- Exercice 2 : Afficher C'est facile!!" . "<br>";
$IsEasy = true;
if ($IsEasy === true){
	echo "C'est facile!! " . "<br>";
}
else{
	echo "C'est difficile !!!" . "<br>";

}
if ($IsEasy === true){
	print "C'est facile!! " . "<br>";
}
else{
	print "C'est difficile !!!" . "<br>";

}

// exercice 3 : 
echo "-- Exercice 3 : " . "<br>";
$age = 56;
$genre = "Homme";
if ($genre == "Homme"){
	echo "Vous êtes un " . $genre; 
}else{
	echo "Vous êtes une " . $genre; 

}
if ($age >= 18){
	echo " et vous êtes majeur <br>";
}else{
	echo " et vous êtes mineur <br>";
}
$age = 15;
if ($genre == "Homme"){
	echo "Vous êtes un " . $genre; 
}else{
	echo "Vous êtes une " . $genre; 

}
if ($age >= 18){
	echo " et vous êtes majeur <br>";
}else{
	echo " et vous êtes mineur <br>";
}
$age = 56;
$genre = "Femme";
if ($genre == "Homme"){
	echo "Vous êtes un " . $genre; 
}else{
	echo "Vous êtes une " . $genre; 

}
if ($age >= 18){
	echo " et vous êtes majeur <br>";
}else{
	echo " et vous êtes mineur <br>";
}
$age = 17;
if ($genre == "Homme"){
	echo "Vous êtes un " . $genre; 
}else{
	echo "Vous êtes une " . $genre; 

}
if ($age >= 18){
	echo " et vous êtes majeur <br>";
}else{
	echo " et vous êtes mineur <br>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Les conditions</title>
</head>
<body>


</body>
</html>