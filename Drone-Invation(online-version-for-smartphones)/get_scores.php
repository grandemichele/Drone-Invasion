<?php
// get_scores.php
header('Content-Type: application/json; charset=utf-8');

$scoresFile = __DIR__ . '/scores.json';
if (!file_exists($scoresFile)) {
    echo json_encode([]);
    exit;
}

// 1) Leggi tutto
$scores = json_decode(file_get_contents($scoresFile), true) ?: [];

// 2) Ordina dal più alto al più basso
usort($scores, function($a, $b) {
    return $b['score'] - $a['score'];
});

// 3) Restituisci TUTTI i record
echo json_encode($scores, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
