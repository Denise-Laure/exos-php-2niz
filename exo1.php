
<?php

// Declaration des variables pour le tableau 

$tab = array();
$posy = 0;
$posx = 0;
$taille_tableau = 15;

//initialisation du tableau 

for ($posy=0 ; $posy<$taille_tableau; $posy++) {
	for ($posx=0 ; $posx<$taille_tableau ; $posx++) {
    	$tab[$posy][$posx] = '<p style="display:inline; color:#ECEBEE;">#</p>';
    }
}

// Tableau répertoriant les mots 
$mot = array();
$mot[0]= array('mot' => 'avion','posx' => 3, 'posy' => 3, 'direction' => 0);
$mot[1]= array('mot' => 'papillon','posx' => 2, 'posy' => 3, 'direction' => 1);
$mot[2]= array('mot' => 'fee','posx' => 7, 'posy' => 8, 'direction' => 0);

foreach ($mot as $mot[$j] ) {
  $word = $mot[$j]['mot'];
  $posx = $mot[$j]['posx'];
  $posy = $mot[$j]['posy'];
  $direction = $mot[$j]['direction'];
  $taille_mot = strlen($word);  

// boucle qui permet d'ecrire horizontalement ou verticalement

	if ($direction == 1) {
        // gauche à droite 
  		for ($i=$posx ; $i<$taille_mot+$posx ;$i++ ) {
     		$tab[$posy][$i] = $word[$i-$posx];
  		}
	} else {
		// haut en bas
  		for ($i=$posy ; $i<$taille_mot+$posy ;$i++ ) {
    		$tab[$i][$posx] = $word[$i-$posy];
  		}
	}
}

// boucle qui permet d'afficher le tableau 

for ($i=0 ; $i<$taille_tableau ; $i++) {
        foreach ($tab[$i] as $tableau) {
        echo  $tableau ;
        }
	echo '<br>';
}

?>
