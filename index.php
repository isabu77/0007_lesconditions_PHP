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
echo "-- Exercice 3 : Genre et Age " . "<br>";
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

// exercice 4 : 
echo "-- Exercice 4 : L'échelle de Richter " . "<br>";
$magnitude = 0;
for ($magnitude = 1 ; $magnitude < 10 ; $magnitude++){
	switch ($magnitude){
		case 1:
			echo $magnitude . " : Micro-séisme impossible à ressentir.<br>";
			break;
		case 2:
			echo $magnitude . " : Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.<br>";
			break;
		case 3:
			echo $magnitude . " : Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<br>";
			break;
		case 4:
			echo $magnitude . " : Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<br>";
			break;
		case 5:
			echo $magnitude . " : Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.<br>";
			break;
		case 6:
			echo $magnitude . " : Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.<br>";
			break;
		case 7:
			echo $magnitude . " : Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.<br>";
			break;
		case 8:
			echo $magnitude . " : Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.<br>";
			break;
		case 9:
			echo $magnitude . " : Séisme capable de tout détruire sur une très vaste zone.<br>";
			break;
	}
}

// exercice 5 : 
echo "-- Exercice 5 : Traduction de code php en if-else " . "<br>";

$maVariable = "Homme";
	if ($maVariable != "Homme"){
		echo "'C'est une développeuse !!! <br>";
	}
	else{
		echo "C'est un développeur !!! <br>";
	}
$maVariable = "Femme";
	if ($maVariable != "Homme"){
		echo "'C'est une développeuse !!! <br>";
	}
	else{
		echo "C'est un développeur !!! <br>";
	}

// exercice 6 : 
echo "-- Exercice 6 : Traduction de code php en if-else " . "<br>";
$monAge = 19;
	if ($monAge >= 18){
		echo "Tu es majeur<br>";
	}else{
		echo "Tu n'es pas majeur<br>";
	}
$monAge = 15;
	if ($monAge >= 18){
		echo "Tu es majeur<br>";
	}else{
		echo "Tu n'es pas majeur<br>";
	}

// exercice 7 : 
echo "-- Exercice 7 : Traduction de code php en if-else " . "<br>";
$maVariable = false;
	if ($maVariable == false){
		echo "c'est pas bon !!!<br>";
	}else{
		echo "c'est ok !!<br>";
	}
$maVariable = true;
	if ($maVariable == false){
		echo "c'est pas bon !!!<br>";
	}else{
		echo "c'est ok !!<br>";
	}

// exercice 8:: 
echo "-- Exercice 8 : Traduction de code php en if-else " . "<br>";
$maVariable = true;
	if ($maVariable){
		echo "c'est ok !!<br>";
	}else{
		echo "c'est pas bon !!!<br>";
	}
$maVariable = false;
	if ($maVariable){
		echo "c'est ok !!<br>";
	}else{
		echo "c'est pas bon !!!<br>";
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