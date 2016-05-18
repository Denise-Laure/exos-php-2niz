<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <meta charset="UTF-8">
    </head>
    <body>
    <?php
// Declaration des variables pour le tableau 
    $tab = array();
    $posy = 0;
    $posx = 0;
    $taille_tableau = 15;

//initialisation du tableau 
    for ($posy=0 ; $posy<$taille_tableau ; $posy++) 
    {
        for ($posx=0 ; $posx<$taille_tableau ; $posx++) 
        {
            $tab[$posy][$posx] = '<p class="hash">#</p>'; 
        }
    }

// Tableau répertoriant les mots 
    $mot = array();
    $mot[0] = array('mot' => 'avion', 'posx' => 3, 'posy' => 3, 'direction' => 0);
    $mot[1] = array('mot' => 'papillon', 'posx' => 2, 'posy' => 3, 'direction' => 1);
    $mot[2] = array('mot' => 'fee', 'posx' => 7, 'posy' => 8, 'direction' => 0);
    $mot[3] = array('mot' => 'pelle', 'posx' => 6, 'posy' => 10, 'direction' => 1);
    $mot[4] = array('mot' => 'chaton', 'posx' => 12, 'posy' => 5, 'direction' => 0);
    $mot[5] = array('mot' => 'doux', 'posx' => 11, 'posy' => 9, 'direction' => 1);

    foreach ($mot as $key => $val) 
    {
        $word = $val['mot'];
        $posx = $val['posx'];
        $posy = $val['posy'];
        $direction = $val['direction'];
        $taille_mot = strlen($word);

// boucle qui permet d'ecrire horizontalement ou verticalement
        if ($direction == 1) 
// gauche à droite 
        {
            for ($i=$posx ; $i<$taille_mot+$posx ;$i++ ) 
            {
                $tab[$posy][$i] = $word[$i-$posx];
            }
        } 
        else 
 // haut en bas
        {
            for ($i=$posy ; $i<$taille_mot+$posy ;$i++ ) 
            {
                $tab[$i][$posx] = $word[$i-$posy];
            }
        }
    }
// boucle qui permet d'afficher le tableau 
    for ($i=0 ; $i<$taille_tableau ; $i++) 
    {
        foreach ($tab[$i] as $tableau) 
        {
            echo $tableau;
        }
        echo '<br />';
    }
    ?>
     </body>
</html>