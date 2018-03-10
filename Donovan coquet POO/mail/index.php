<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="./style.css" media="all">
	<meta charset="utf-8">
</head>
<body>
<form action='index.php' method='get'>
    <label>Expéditeur:<input type = 'mail' id = 'expediteur' name='expediteur' required></label><br>
    <label>Destinataire:<input type = 'mail' id = 'destinataire' name='destinataire' required></label><br>
    <label>Objet:<input type = 'text' id = 'objet' name='objet' required></label><br>
    <label><textarea width='300' height='300' placeholder='Write your email..' name='textMail' id='textMail' required>
    </textarea></label><br>
    <label><input type='submit' name='Envoyer' value='Visualiser le mail'></label>
</form>
<?php
    /*test si le bouton envoyer a été cliqué, et que les valeurs dans les champs sont bien remplie*/
	if(isset($_GET['Envoyer']) AND isset($_GET['expediteur']) AND isset($_GET['destinataire']) AND isset($_GET['objet']) AND isset($_GET['textMail'])) {
        $objet = trim(htmlentities($_GET['objet']));
        $textMail = trim(htmlentities($_GET['textMail']));
        $expediteur = trim(htmlentities($_GET['expediteur']));
        $destinataire = trim(htmlentities($_GET['destinataire']));
        if ((preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $_GET['expediteur'])) AND (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $_GET['destinataire']))) {
            echo "<fieldset><legend>Expéditeur: </legend>" . $expediteur . "</fieldset><br>" .
                "<fieldset><legend>Destinataire: </legend>" . $destinataire . "</fieldset><br>" .
                "<fieldset><legend>objet: </legend>" . $objet . "</fieldset><br>" .
                "<fieldset><legend>Mail: </legend>" . $textMail . "</fieldset>".
                "<input type = 'submit' value='envoyer' name='valider'>";
        } else {
            echo "Le mail est incorrectement formaté, ou est incomplet.";
            if (!isset($_GET['expediteur']) OR (!isset($_GET['destinataire'])) OR (!isset($_GET['objet'])) OR (!isset($_GET['textMail']))) {
                Echo "Champs manquant: ";
                if (!isset($_GET['expediteur'])) {
                    echo "- Expéditeur";
                }
                if (!isset($_GET['destinataire'])) {
                    echo "- Destinataire";
                }
                if (!isset($_GET['objet'])) {
                    echo "- Objet du mail";
                }
                if (!isset($_GET['textMail'])) {
                    echo "- Contenu du mail";
                }
            }
        }
    }

?>
</body>

</html>
