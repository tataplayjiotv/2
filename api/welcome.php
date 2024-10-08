<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telegram Channel</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('upscaled(7).png');
            background-size: cover;
            background-position: center;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            text-align: center;
        }

        .border-container {
            border-radius: 15px;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.5);
            animation: fadeIn 1s forwards;
        }

        .logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            animation: zoom 3s infinite;
        }

        @keyframes zoom {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        /* Different animations for each letter */
        @keyframes slideIn {
            from { transform: translateX(-100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes fadeInUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        h1, p {
            display: inline-block; /* Ensure spans are displayed inline */
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 15px;
            color: white; /* Set header color to white */
        }

        p {
            font-size: 1.2em;
            margin: 15px 0;
        }

        .timer {
            font-size: 1em;
            margin: 15px 0;
            animation: fadeInUp 1s forwards;
        }

        a {
            text-decoration: none;
            color: #00aced;
            font-weight: bold;
            font-size: 1em;
            padding: 8px 16px;
            border: 2px solid #00aced;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            opacity: 0;
            animation: scaleIn 1s forwards;
            animation-delay: 1s;
        }

        a:hover {
            background-color: #00aced;
            color: white;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="border-container">
        <div class="container">
            <img src="https://i.imghippo.com/files/ojRcn1726452710.png" alt="Logo" class="logo">
            <h1>
                <span style="animation: slideIn 1s forwards;">T</span>
                <span style="animation: slideIn 2s forwards;">A</span>
                <span style="animation: slideIn 3s forwards;">T</span>
                <span style="animation: slideIn 4s forwards;">A</span>
                <span style="animation: slideIn 5s forwards;">P</span>
                <span style="animation: slideIn 6s forwards;">L</span>
                <span style="animation: slideIn 7s forwards;">A</span>
                <span style="animation: slideIn 8s forwards;">Y</span>
                <span style="animation: slideIn 9s forwards;">J</span>
                <span style="animation: slideIn 10s forwards;">I</span>
                <span style="animation: slideIn 11s forwards;">O</span>
                <span style="animation: slideIn 12s forwards;">T</span>
                <span style="animation: slideIn 13s forwards;">V</span>
            </h1>
            <p>
                <span style="animation: fadeInUp 1s forwards;">Stay</span>
                <span style="animation: fadeInUp 2s forwards;">updated</span>
                <span style="animation: fadeInUp 3s forwards;">with</span>
                <span style="animation: fadeInUp 4s forwards;">the</span>
                <span style="animation: fadeInUp 5s forwards;">latest</span>
                <span style="animation: fadeInUp 6s forwards;">news</span>
                <span style="animation: fadeInUp 7s forwards;">and</span>
                <span style="animation: fadeInUp 8s forwards;">insights.</span>
            </p>
            <div class="timer" id="timer">Redirecting in 5 seconds...</div>
            <a id="join-button" href="https://t.me/tataplayjiotv" target="_blank">Visit Channel</a>
        </div>
    </div>

    <script>
        window.onload = function() {
            const elements = document.querySelectorAll('h1 span, p span, .timer, a');
            let countdown = 5;

            elements.forEach((element, index) => {
                if (element.tagName === 'A') return; // Skip the link animation
                setTimeout(() => {
                    element.style.opacity = 1;
                }, index * 1000); // Each word appears every second
            });

            const timerElement = document.getElementById('timer');
            const countdownInterval = setInterval(() => {
                countdown--;
                timerElement.textContent = `Redirecting in ${countdown} seconds...`;
                
                if (countdown <= 0) {
                    clearInterval(countdownInterval);
                    document.getElementById('join-button').click();
                }
            }, 1000);
        };
    </script>
</body>
</html>
