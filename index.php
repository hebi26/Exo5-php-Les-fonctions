<!DOCTYPE HTML>
<html lang="fr">
<head>
  <meta charset="utf-8"/>

</head>
<body>
<p>Identité :</p>

<form name="inscription" method="post" action="index.php">
votre genre :
<select name="sexe" >
    <option value="homme">Homme</option>
    <option value="femme">Femme</option>
</select></br>

votre age <input type="number" min="1" max="99" name="age"/></br>
<input type="submit" name="valider" value="OK"/>
</form>

<?php


if ($_POST['valider']==true){

  $sexe=$_POST['sexe'];
  $age=$_POST['age'];
  $genre=NULL;

function gender($sexe, $age){


if ($sexe =='homme'){
  $genre=NULL;
  echo 'tu es un homme';
}
elseif ($sexe =='femme'){
 $genre='e';
  echo 'tu es une femme';

}
if ($age < 18 && $age > 0){
  echo ' et tu es mineur'.$genre;
}
elseif ($age >= 18){

  echo ' et tu es majeur'.$genre;
}
else{
  echo ' et l\'age est non défini !';
}
}
}
gender($sexe, $age);
// gender('homme', 18);
?>

</body>
</html>
