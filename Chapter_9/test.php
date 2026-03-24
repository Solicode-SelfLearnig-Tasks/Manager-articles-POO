<?php

require_once 'Article.php';

echo "--- Testing Chapter 9: Encapsulation and Best Practices ---<br><br>";

$article = new Article("POO en PHP", "Introduction à la POO.");

echo "Attempting to set valid title: 'POO en PHP'<br>";
$article->setTitre("POO en PHP");

echo "Attempting to set invalid title: 'PHP'<br>";
$article->setTitre("PHP");

echo "Attempting to set content with HTML tags: '<p>Introduction à la POO.</p>'<br>";
$article->setContenu("<p>Introduction à la POO.</p>");

echo "<br> Final Result :<br>";
echo $article->afficher();

echo "<br> End of Test <br>";
?>
