let interval1, interval2, interval3;

function startCounter() {
    let count1 = 0, count2 = 0, count3 = 0;

    // Compteur pour le premier bloc (0-98%)
    interval1 = setInterval(() => {
        if (count1 <= 98) {
            document.getElementById('block1').innerText = count1 + '%';
            count1++;
        } else {
            clearInterval(interval1);
        }
    }, 50); // Ajustez la vitesse si nécessaire

    // Compteur pour le deuxième bloc (0-95%)
    interval2 = setInterval(() => {
        if (count2 <= 95) {
            document.getElementById('block2').innerText = count2 + '%';
            count2++;
        } else {
            clearInterval(interval2);
        }
    }, 53); // Ajustez la vitesse si nécessaire

    // Compteur pour le troisième bloc (0-4%)
    interval3 = setInterval(() => {
        if (count3 <= 4) {
            document.getElementById('block3').innerText = count3;
            count3++;
        } else {
            clearInterval(interval3);
        }
    }, 100); // Ajustez la vitesse si nécessaire
}

// Démarrer le compteur automatiquement au chargement de la page
window.onload = startCounter;