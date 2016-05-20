<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css" />
        <meta charset="UTF-8">
    </head>
    <body>
<?php
//declaration des variables et tableau
$message = $_POST['user_message'];
$first_ltr = $_POST['user_message'][0];
$vowel = array('a', 'e', 'i', 'o', 'u', 'y');

//condition qui renvoie une erreur si la première lettre du texte est une voyelle sinon inverse les mots du texte 
if (in_array($first_ltr, $vowel))
{
	echo "Ce texte n'est pas conforme, essayez de nouveau !";
}
else 
{ 	
	echo 'Bravo ' . htmlspecialchars($_POST["nom"]) . '<br />';

	$message_scinde = array();
	$message_scinde = explode (" ", $message);
	$nombre_de_mots = count($message_scinde);
?>
		<div class="rendu">
<?php
		for ($i=$nombre_de_mots; $i>=0; $i--)
		{
			echo $message_scinde[$i]. ' ';
		}
}
?>
		</div>
	</body>
</html>