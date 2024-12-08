<?php
session_start(); // Démarre la session

// Si le temps de début n'est pas encore enregistré, on l'initialise
if (!isset($_SESSION['start_time'])) {
    $_SESSION['start_time'] = time(); // Enregistre l'heure de début du quiz
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
                    <label><input type="radio" name="q1" value="a"> Créer des pages web dynamiques</label>
                    <label><input type="radio" name="q1" value="b"> Gérer les bases de données uniquement</label>
                    <label><input type="radio" name="q1" value="c"> Styliser les pages web</label>
                    <label><input type="radio" name="q1" value="d"> Gérer les serveurs</label>
                </div>
            </div>

            <div class="question">
                <h2>2. Quelle est l'extension d'un fichier PHP ?</h2>
                <div class="answers">
                    <label><input type="radio" name="q2" value="a"> .html</label>
                    <label><input type="radio" name="q2" value="b"> .css</label>
                    <label><input type="radio" name="q2" value="c"> .php</label>
                    <label><input type="radio" name="q2" value="d"> .js</label>
                </div>
            </div>

            <div class="question">
                <h2>3. Comment déclarer une variable en PHP ?</h2>
                <div class="answers">
                    <label><input type="radio" name="q3" value="a"> var $nomVariable;</label>
                    <label><input type="radio" name="q3" value="b"> let nomVariable;</label>
                    <label><input type="radio" name="q3" value="c"> $nomVariable;</label>
                    <label><input type="radio" name="q3" value="d"> declare nomVariable;</label>
                </div>
            </div>

            <!-- Champ caché pour envoyer le temps écoulé -->
            <input type="hidden" name="time_taken" id="time_taken">

            <button type="submit">Soumettre</button>
        </form>
    </div>

    <script>
        // Démarre le compteur de temps
        let startTime = Date.now();
        let timerElement = document.getElementById("timer");

        // Fonction pour formater le temps
        function formatTime(ms) {
            let minutes = Math.floor(ms / 60000);
            let seconds = Math.floor((ms % 60000) / 1000);
            if (seconds < 10) {
                seconds = "0" + seconds;
            }
            return `${minutes}:${seconds}`;
        }

        // Fonction pour mettre à jour le temps
        function updateTimer() {
            let elapsedTime = Date.now() - startTime;
            timerElement.textContent = `Temps écoulé : ${formatTime(elapsedTime)}`;
            setTimeout(updateTimer, 1000); // Mise à jour chaque seconde
        }

        // Démarre l'affichage du temps
        updateTimer();

        // Lors de la soumission du formulaire, on envoie le temps
        document.getElementById("quizForm").onsubmit = function() {
            let timeTaken = Date.now() - startTime; // Calcul du temps écoulé en millisecondes
            document.getElementById("time_taken").value = timeTaken; // Envoi du temps au serveur
        };
    </script>
</body>
</html>
