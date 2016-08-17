<?php 
ini_set(display_errors, 1);
// ------------- EXERCICE 1 ----------------
// Teste avec le balise if.

$age = 8;

if ($age === 6 || $age === 7 ) {
	echo '"Poussin" de 6 a 7 ans. <br />'."\n";
	}
	elseif($age >= 8){
		echo '"Pupille" de 8 a 9 ans. <br />'."\n";
	}
	elseif($age >= 10){
		echo '"Minime" de 10 a 11 ans. <br />'."\n";
	}
	elseif($age >= 12){
		echo '"Cadet" après 12 ans. <br />'."\n";
	}
		
	else {
		echo "Vous êtes trop jeune. <br />\n";
			
	}
// ------------- EXERCICE 1 ----------------
//Teste avec le balise switch.

	switch ($age) {
		case $age >= 12:
			echo '"Cadet" après 12 ans. <br />'."\n";
			break;

		case $age >= 10:
			echo '"Minime" de 10 a 11 ans. <br />'."\n";
			break;

		case $age >= 8:
			echo '"Pupille" de 8 a 9 ans. <br />'."\n";
			break;

		case $age >= 6:
			echo '"Poussin" de 6 a 7 ans. <br />'."\n";
			break;

		// case 7:
		// 	echo '"Poussin" de 6 a 7 ans. <br />';
		// 	break;		

		default:
			echo "Vous êtes trop jeune. <br />\n";
			break;
	}


// ------------- EXERCICE 2 ----------------

$nb = 4;

if (($nb % 2) === 0):
	echo "pair. <br />\n";
else:
	echo "impair. <br />\n";
endif;


// ------------- EXERCICE 3 ----------------

$caracter = "Chaîne";
$cnt = strlen($caracter);

if( $cnt > 3 && $cnt < 10):
	echo "OK <br />\n";

endif;


//------------ Exemple tableau ---------------

$noms = array(
	'Alice'	=>	'Cooper',
	'Bob'	=>	'Marley',
	'Sam'	=>	'Gamegie'
	);
echo '<pre>';
var_dump($noms);


// $mot = "Anticonstitutionnellement";
// echo strtolower($mot). "<br />";
// echo strtoupper($mot). "<br />";
// echo strlen($mot). "<br />";
// echo $mot[4]. "<br />";
// echo substr($mot,0,4). "<br />";
// echo strpos($mot, "ti"). "<br />";
// echo strpos($mot, "z"). "<br />";


// ------------- EXERCICE 4 ----------------

$nbCop10 = 10;
$nbCop20 = 20;
$nbCop = 11;

if ($nbCop <= 10):
	$result4 = $nbCop * 0.1;
	echo "Resultat exercice 4: $result4 \n";
elseif($nbCop <= 30):
	$result4 = ($nbCop10 * 0.1) + (($nbCop - 10) * 0.08);
	echo "Resultat exercice 4: $result4 \n";
else:
	$result4 = ($nbCop10 * 0.1) + ($nbCop20 * 0.08) + (($nbCop - 30) * 0.05);
	echo "Resultat exercice 4: $result4 \n";
	
endif;


// ------------- EXERCICE 5 ----------------
$valeur = 5;
$result5 = 0;

for ($i=0; $i <= $valeur; $i++) { 
	$result5 = $result5+$i;
	
}
echo "Resultat exercice 5: $result5 \n";


// ------------- EXERCICE 6 ----------------
 $numb = 4;
 $result6 = 1;

 // for ($i=1; $i <= $numb ; $i++) { 
 // 	$result6 = $result6 * $i;
 // 	echo $result6 . '<br />';
 // }

 // echo "Resultat exercice 6: $result6 \n";

 function fact($nb){
 	if($nb === 1):
 		return 1;
 	endif;

 	return $nb * fact($nb-1);
 }

$result6 = fact($numb);

echo "Resultat exercice 6: $result6 \n";

echo "<hr>";
 // ------------- EXERCICE 8 ----------------


$cpt = 0;
 for ($i=0; $i <= 100; $i++) { 
 	 	if($cpt === 10):
 	 		echo $i ." ";
 	 		echo "<br>";
 	 		$cpt = 1;
 	 	else:
 	 		echo $i . ", ";
 	 		$cpt++;
 	 	endif;
 	 	
 }
 // $i = 0;
//  while ( $i < 100) {
//  	echo $i . '<br />';
//  	$i++;
//  }
// do {
// 	echo $i . '<br />';
// 	$i++;
// } while ( $i <= 100);

// ------------- EXERCICE 9 ----------------

echo "<hr>";

$text = "Salut \n";
$length = strlen($text);
$tabs = array();

for ($i=0; $i < $length; $i++) { 
	$tabs[] = $text[$i];

}
$rever = array_reverse($tabs);
var_dump($rever);

foreach ($rever as $value) {
	echo $value ;
}
for ($i=$length-1; $i >=0 ; $i--) { 
	echo $tabs[$i];
}
echo "<hr>";


// ------------- EXERCICE 10 ----------------

$verbe = "manger";
$pronoms = ["Je", "Tu", "Il/Elle/On", "Nous", "Vous", "Ils/Elles"];
$terms = ["ais", "ais", "ait", "ions", "iez", "aient"];
$verbSansEr = substr($verbe, 0, strlen($verbe)-2);
$lettreAvantEr = $verbSansEr[strlen($verbSansEr)-1];
	for ($cpt=0; $cpt < count($pronoms); $cpt++) { 
		echo $pronoms[$cpt], " ";
		if ($lettreAvantEr === 'g' && $cpt != 3 && $cpt != 4) :
			echo $verbSansEr,"e";
		else:
			echo $verbSansEr;
		endif;

		echo $terms[$cpt], "<br>";
		echo "<hr>";
	}




// ------------- EXERCICE 11 ----------------

$entier = array(11,32, 13, 40, 15, 26);
$sum = 0;
$avg = 0;



foreach ($entier as $value) {
	echo "<hr>",$value, " ";
	$sum += $value;
}

	$avg = $sum / count($entier);
	echo "La moyenne est de: ", $avg , "<br>";
	

// ------------- EXERCICE 12 ----------------


shuffle($entier);


// ------------- EXERCICE 13 ----------------
echo "------------- EXERCICE 13 ----------------<br/>";

$valeur = 5;
$string = "*";

for ($i=0; $i < $valeur ; $i++) { 
	for ($j=0; $j < $i ; $j++) { 
		echo $string, " ";
	}
		echo $string, "<br>";
}

// function pyramide($valeur, $string, $col=0){
// 	if($line > 0) {
// 		for ($cpt=0; $cpt < ; $cpt++) { 
			
// 		}
// 	}
// }

echo "<hr>";
// ------------- EXERCICE 14 ----------------
echo "------------- EXERCICE 14 ----------------<br/>";

$tableau = [220, 145, 26, 87];

for ($i=0; $i < count($tableau) ; $i++) { 
		
	for ($j=0; $j < count($tableau) ; $j++) { 
		if($tableau[$i] > $tableau[$j]) :
			$tableau[$i] = $tableau[$i];
		else :
			$tableau[$i] = $tableau[$j];

		endif;
	}

}
echo $tableau[$i-1];
echo "<hr>";



// ------------- EXERCICE 15 ----------------
echo "------------- EXERCICE 15 ----------------<br/>";
$multi = 7;

for ($i=1; $i <= 10 ; $i++) { 
	$tot = $multi * $i;
	echo "$multi x $i = ", $tot , "<br />";
}

echo "<hr>";
// ------------- EXERCICE 16 ----------------
echo "------------- EXERCICE 16 ----------------<br/>";
$n = 0;
do {
	if($n % 2 == 0) {
		echo $n , " est pair <br />";
		$n += 3;
		// continue;
	}
	if ($n % 3 == 0) {
		echo $n , " est multiple de 3 <br />";
		$n += 5;
	}
	if ($n % 5 == 0) {
		echo $n , " est multiple de 5 <br />";
		break;
	}
	$n += 1;
} while (true);

echo "<hr>";

// ------------- EXERCICE 17 ----------------
echo "------------- EXERCICE 17 ----------------<br/>";
$p = 0;
$n = 0;
 while ($n <= 5) {
  $n++;
 }
 echo "A : n = " . $n . "<br/>";

$n = $p = 0;
 while ($n <= 8) {
  $n += $p++; 
} 
 echo "B : n = " . $n . "<br/>";

$n = $p = 0;
 while ($n <= 8) {
 $n += ++$p; 
} 
echo "C : n = " . $n . "<br/>";
 
 $n = $p = 0;
 while ($p <= 5) { 
 $n += $p++;
} 
echo "D : n = " . $n . "<br/>";

$n = $p = 0; 
while ($p <= 5) { 
 $n += ++$p; 
} 
echo "E : n = " . $n . "<br/>";
echo "<hr>";

// ------------- EXERCICE 18 ----------------
echo "------------- EXERCICE 18 ----------------<br/>";
$valeur = 6;
$string = "*";
$space = 12;


for ($i=0; $i < $valeur ; $i++) { 
	for($x = 0; $x < $space; $x++){
			echo " ";					
	}
	$space--;
	for ($j=0; $j < $i ; $j++) { 
		
		echo $string, " ";
	}
	
		echo $string, "<br>";
}

echo "<hr>";

// ------------- EXERCICE 19 ----------------
echo "------------- EXERCICE 19 ----------------<br/>";
$premier = true;
for ($i=2; $i <= 100 ; $i++) { 
	for ($j=2; $j <= $i-1 ; $j++) { 
		if ($i % $j == 0) {
			$premier = false;
			break;
		}
	}
	if ($premier) {
		echo $i , " est un numbre premier. <br />";
	}
	$premier = true;
}
echo "<hr>";
// ------------- EXERCICE 20 ----------------
echo "------------- EXERCICE 20 ----------------<br/>";

$val = 5492;
// $length = strlen($val);
$ord = array();


//  for ($i=0; $i < $length; $i++) { 
//  	$table[] = $val[$i];	
 	
//  }
//  for ($j= $length-1; $j >= 0; $j--) { 
//  		echo $ord[] = $table[$j];

//  	}
//print_r($ord);

// for ($i=0; $i < 4 ; $i++) { 
// 	  $ord[] = $val % 10;
// 	   echo $ord[$i]; 
// 	  $val = floor($val/10);
	  
// 	 }
// print_r($table);

$count = 0;
do{

	$ord[] = $val % 10;
	   echo $ord[$count]; 	
	$val = floor($val / 10);

	$count++;
} while ($val != 0);

// for ($i=0; $i < $count ; $i++) { 
// 	  $table[] = $val[$i] => ($val%10);
// 	 }
echo "<hr>";
// ------------- EXERCICE 21 ----------------
echo "------------- EXERCICE 21 ----------------<br/>";



echo "<hr>";
// ------------- EXERCICE 22 ----------------
echo "------------- EXERCICE 22 ----------------<br/>";



echo "<hr>";
// ------------- EXERCICE 23 ----------------
echo "------------- EXERCICE 23 ----------------<br/>";



echo "<hr>";

function AgeJours($datatime) {
	$datenaiss = mktime(18,00,00,21,09,1976);
	$aujourdhui = time();
	$age = $aujourdhui - $datenaiss;
	$jours = floor($age/ (60*60*24));
	$reste = $age % (60*60*24);
	$heures = floor($reste / (60*60));
	$reste = $reste % (60*60);
	$minutes = floor($reste /60);
	$secondes = $reste % (60);

	$TimeJours = "j'ai $jours jours, $heures heures, $minutes minutes, ";
	return $TimeJours;

}

?>
<head>
<script language="javascript" type="text/javascript">		
	setInterval(showTimer,1000); 

	function showTimer() { 
		var time = new Date();
		var second 	= time.getSeconds();
  	if(second<10) second = "0"+second;
 		var st = "<?php echo AgeJours(Time()) ?>"+second+" secondes.";
  		document.getElementById("timer").innerHTML=st; 



	}
	</script>
</head>

 <h1>Mon age en jours</h1>
 <section id="timer">
 <?php
	
	// echo "j'ai $jours jours, $heures heures, $minutes minutes, $secondes secondes.";
 