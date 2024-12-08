<?php
$score = 0;
$correct_answers = [
    'q1' => 'a', 
    'q2' => 'c',
    'q3' => 'c'
];

foreach ($correct_answers as $question => $correct_answer) {
    if (isset($_POST[$question]) && $_POST[$question] == $correct_answer) {
        $score++;
    }
}

$time_taken = $_POST['time_taken'];
$minutes = floor($time_taken / 60000);
$seconds = floor(($time_taken % 60000) / 1000);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result.css">
    <title>Résultats du Quiz</title>
    
</head>
<body>
    <div class="container">
        <h1>Résultats du Quiz</h1>
        <div class="score">
            <p>Vous avez obtenu <?= $score; ?> sur 3.</p>
        </div>
        <div class="time">
            <p>Temps écoulé : <?= $minutes; ?> minutes et <?= $seconds; ?> secondes.</p>
        </div>
    </div>
</body>
</html>
