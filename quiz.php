<?php
session_start(); 

if (!isset($_SESSION['start_time'])) {
    $_SESSION['start_time'] = time(); 
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quiz.css">
    <title>Quiz de Monsieur PHP</title>
   
</head>

<body>
    <div class="container">
        <h1>Quiz de Monsieur PHP</h1>
        <p class="timer" id="timer">Temps écoulé : 00:00</p>

        <form action="result.php" method="post" id="quizForm">

            <div class="question">
                <h2>1. Quel est le rôle principal de PHP ?</h2>
                <div class="answers">
                    <input type="radio" id="q1a" name="q1" value="a">
                    <label for="q1a">Créer des pages web dynamiques</label>
                    
                    <input type="radio" id="q1b" name="q1" value="b">
                    <label for="q1b">Gérer les bases de données uniquement</label>

                    <input type="radio" id="q1c" name="q1" value="c">
                    <label for="q1c">Styliser les pages web</label>

                    <input type="radio" id="q1d" name="q1" value="d">
                    <label for="q1d">Gérer les serveurs</label>
                </div>
            </div>

            <div class="question">
                <h2>2. Quelle est l'extension d'un fichier PHP ?</h2>
                <div class="answers">
                    <input type="radio" id="q2a" name="q2" value="a">
                    <label for="q2a">.html</label>

                    <input type="radio" id="q2b" name="q2" value="b">
                    <label for="q2b">.css</label>

                    <input type="radio" id="q2c" name="q2" value="c">
                    <label for="q2c">.php</label>

                    <input type="radio" id="q2d" name="q2" value="d">
                    <label for="q2d">.js</label>
                </div>
            </div>

            <div class="question">
                <h2>3. Comment déclarer une variable en PHP ?</h2>
                <div class="answers">
                    <input type="radio" id="q3a" name="q3" value="a">
                    <label for="q3a">var $nomVariable;</label>

                    <input type="radio" id="q3b" name="q3" value="b">
                    <label for="q3b">let nomVariable;</label>

                    <input type="radio" id="q3c" name="q3" value="c">
                    <label for="q3c">$nomVariable;</label>

                    <input type="radio" id="q3d" name="q3" value="d">
                    <label for="q3d">declare nomVariable;</label>
                </div>
            </div>

            
            <input type="hidden" name="time_taken" id="time_taken">

            <button type="submit"><a href="result.php"></a>Soumettre</button>
            <hr>
            <hr>
            <button onclick="history.go(-1)">Retour</button>

        </form>
        
    </div>
    
    <footer>
  <div class="footer-content">
    <p>&copy; 2024 Quiz Game. All rights reserved.</p>
    <p>Made with ❤️ for fun and learning.</p>
  </div>
</footer>

<script src="quiz.js"></script>    
</body>

</html>
