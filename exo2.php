<?php
//declaration des variables et tableau
$message = $_POST['user_message'];
$first_ltr = $_POST['user_message'][0];
$vowel = array('a', 'e', 'i', 'o', 'u', 'y');

//condition qui permet de renvoyer une erreur si la première lettre du texte est une voyelle sinon 
if (in_array($first_ltr, $vowel))
{
		echo "Ce texte n'est pas conforme, essayez de nouveau !";
}
else 
{ 	
		echo "Bravo ";
		echo htmlspecialchars($_POST["nom"]);
		echo '<br />';

		for ($i=strlen($_POST['user_message']); $i>=0; $i--)
		{
				echo $message[$i];
		}
}
?>
