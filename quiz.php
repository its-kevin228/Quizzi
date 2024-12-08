<?php
session_start(); 

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
<style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f7f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 700px;
            text-align: center;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .timer {
            font-size: 20px;
            color: #333;
            margin-bottom: 30px;
        }

        .question {
            margin-bottom: 30px;
            text-align: left;
        }

        .question h2 {
            font-size: 22px;
            color: #444;
            margin-bottom: 15px;
        }

        .answers label {
            display: block;
            padding: 10px;
            margin-bottom: 12px;
            background-color: #f5f5f5;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .answers input {
            margin-right: 10px;
        }

        .answers label:hover {
            background-color: #e3e3e3;
            transform: translateX(5px);
        }

        .answers input:checked + label {
            background-color: #6c63ff;
            color: #fff;
        }

        button {
            padding: 15px 30px;
            font-size: 18px;
            background-color: #6c63ff;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #5a53e3;
            transform: scale(1.05);
        }

        button:active {
            transform: scale(0.98);
        }

        .question:last-child {
            margin-bottom: 0;
        }
    </style>
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
        </form>
    </div>

<script src="quiz.js"></script>    
</body>
</html>
