<?php

/*1*/

$age = 12;
if ($age >= 18) {
    echo "Vous ếtes majeur! <br>";
}else {
    echo "Vous êtes mineur! <br>";
}

/*2*/

$isEasy = true;
if ($isEasy){
    echo "C'est facile !";
}else {
    echo "C'est difficile !";
}
 /* OU */

 echo $isEasy ? "C'est facile !" : "C'est difficile !";

 /*3*/

 $age = 30;
 $gender = "homme";

if ($age >= 18 && $gender === "homme" ){
    echo "Vous êtes un homme et vous êtes majeur";
}
else if ($age <= 18 && $gender === "homme" ){
    echo "Vous êtes un homme et vous êtes mineur";
}
else if ($age >= 18 && $gender === "femme" ){
    echo "Vous êtes une femme et vous êtes majeur";
}
else {
 echo "Vous êtes une femme et vous êtes mineur";
}

/*4*/

$magnitude = 7;

switch ($magnitude){
    case 1: echo "Micro-séisme impossible à ressentir.";
    break;
    case 2: echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
    break;
    case 3: echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
    break;
    case 4: echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
    break;
    case 5: echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
    break;
    case 6:echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
    break;
    case 7: echo "	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
    break;
    case 8: echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
    break;
    case 9: echo "Séisme capable de tout détruire sur une très vaste zone.";
	break; 	
}

/*5*/

if ($gender != 'Homme'){
    echo "C'est une développeuse !!!";
} else {
    echo "C'est un développeur !!!";
}

/*6*/

if ($age >= 18) {
    echo "Tu es majeur";
   }else {
        echo "Tu n'es pas majeur";
    } 

    /*7*/

    $isOk = false;

    if ($isOk == false) {
        echo "c'est pas bon !!!";
    }else {
       echo "C'est ok !!";
}

 /*8*/

 if  ($isEasy){
    echo  "c'est ok !!";
 } else {
    "c'est pas bon !!!";
 }


