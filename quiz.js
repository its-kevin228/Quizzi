
        let startTime = Date.now();
        let timerElement = document.getElementById("timer");

        
        function formatTime(ms) {
            let minutes = Math.floor(ms / 60000);
            let seconds = Math.floor((ms % 60000) / 1000);
            if (seconds < 10) {
                seconds = "0" + seconds;
            }
            return `${minutes}:${seconds}`;
        }

        
        function updateTimer() {
            let elapsedTime = Date.now() - startTime;
            timerElement.textContent = `Temps écoulé : ${formatTime(elapsedTime)}`;
            setTimeout(updateTimer, 1000); 
        }

        
        updateTimer();

        document.getElementById("quizForm").onsubmit = function() {
            let timeTaken = Date.now() - startTime; // Calcul du temps écoulé en millisecondes
            document.getElementById("time_taken").value = timeTaken; // Envoi du temps au serveur
        };