<?php
$score = 0;
$correct_answers = [
    'q1' => 'a', 
    'q2' => 'a',
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
        
        <div class="result-summary">
            <p>Vous avez répondu à <strong>  <?=$score; ?> questions</strong> sur <strong>3</strong>.</p>
            <p class="score"> <?=$score; ?>/3</p>
            <p class="time">Temps total :  <?=$minutes; ?>m:<?=$seconds; ?>s</p>
        </div>

        <div class="button-container">
            <button onclick="history.go(-1)">Retour</button>
        </div>

        <div class="explanation">
            <h3>Explication des réponses :</h3>
            <ul>
                <li><strong>Question 1 :</strong> La bonne réponse était "Lomé"</li>
                <li><strong>Question 2 :</strong> La bonne réponse était "Institut Africain d'Informatique"</li>
                <li><strong>Question 3 :</strong> La bonne réponse était "$nomVariable;" – En PHP, une variable est déclarée avec un signe dollar suivi de son nom.</li>
            </ul>
        </div>
       
    </div>
    <footer>
  <div class="footer-content">
    <p>&copy; 2024 Quiz Game. All rights reserved.</p>
    <p>Made with ❤️ for fun and learning.</p>
  </div>
</footer>

</body>
</html>
