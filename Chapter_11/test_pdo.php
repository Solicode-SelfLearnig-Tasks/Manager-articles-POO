<?php
require 'Database.php';

$db = (new Database())->getConnection();

// --- Étape 2 : Exécuter un SELECT ---
echo "<h2>1. SELECT</h2>";
$stmt = $db->query("SELECT * FROM articles");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($articles as $article) {
    echo $article['titre'] . " - " . $article['auteur'] . "<br>";
}

// --- Étape 3 : Insérer un nouvel enregistrement ---
echo "<h2>2. INSERT</h2>";
$sql = "INSERT INTO articles (titre, contenu, auteur) VALUES (:titre, :contenu, :auteur)";
$stmtInsert = $db->prepare($sql);
$stmtInsert->execute([
    'titre' => 'Nouveau post',
    'contenu' => 'Ceci est un article ajouté via PDO.',
    'auteur' => 'Admin'
]);
echo "<p>Opération d'insertion effectuée.</p>";

// --- Étape 4 : Mettre à jour un enregistrement ---
echo "<h2>3. UPDATE</h2>";
$stmtUpdate = $db->prepare("UPDATE articles SET auteur = :auteur WHERE id = :id");
$stmtUpdate->execute(['auteur' => 'Alice', 'id' => 1]);
echo "<p>Opération de mise à jour effectuée.</p>";

// --- Étape 5 : Supprimer un enregistrement ---
echo "<h2>4. DELETE</h2>";
$stmtDelete = $db->prepare("DELETE FROM articles WHERE id = :id");
$stmtDelete->execute(['id' => 2]);
echo "<p>Opération de suppression effectuée.</p>";
