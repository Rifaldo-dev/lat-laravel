<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Nyasar cuy?</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            max-width: 1000000000000px;
            text-align: center;
            animation: fadeIn 1s ease-out;
        }

        .error-404 {
            font-size: 100px;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.2);
            animation: bounce 2s infinite;
        }

        .error-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            margin-top: 20px;
        }

        .title {
            font-size: 2.5em;
            color: white;
            margin-bottom: 25px;
            animation: pulse 2s infinite;
        }

        .message {
            color: rgba(255,255,255,0.9);
            font-size: 1.2em;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .reasons {
            text-align: left;
            color: rgba(255,255,255,0.8);
            margin: 20px auto;
            max-width: 400px;
        }

        .reasons li {
            margin: 15px 0;
            list-style: none;
            padding-left: 25px;
            position: relative;
            animation: slideIn 0.5s ease-out;
        }

        .reasons li:before {
            content: '•';
            position: absolute;
            left: 0;
            color: white;
        }

        .back-button {
            background: white;
            color: #6366f1;
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
        }

        .back-button:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .footer {
            color: rgba(255,255,255,0.6);
            font-size: 0.9em;
            margin-top: 30px;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }

        /* Responsiveness */
        @media (max-width: 480px) {
            .error-404 { font-size: 100px; }
            .title { font-size: 2em; }
            .message { font-size: 1em; }
            .error-card { padding: 20px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="error-404">404</div>
        <div class="error-card">
            <h1 class="title">Waduhh, Nyasar Kemana Nih!! 🤔</h1>
            
            <p class="message">
                Duh cuy, kayaknya lu ke tempat yang salah deh. Page yang lu cari gak ada nih, sorry banget ya! 🙏
            </p>
<div class="reasons">
                <p>Btw, ini bisa jadi karena:</p>
                <ul id="reasonsList">
                    <li>Link-nya udah expired kali ya? 👻</li>
                    <li>Atau jangan-jangan typo pas ngetik URL? </li>
                    <li>Bisa jadi page-nya udah pindah rumah nih cuy~ 🏃‍♂️</li>
                </ul>
            </div>

            <button class="back-button" onclick="goBack()">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                <a href="/">Balik ke Home yuk!</a>
            </button>

            <p class="footer">
                Yang sabar ya cuy, namanya juga teknologi kadang suka error gitu~ 😅✨
            </p>
        </div>
    </div>

    <script>
        // Animasi untuk list reasons
        document.querySelectorAll('#reasonsList li').forEach((li, index) => {
            li.style.animationDelay = ${index * 0.2}s;
        });

        // Fungsi untuk tombol kembali
        function goBack() {
            window.location.href = '/';
        }

        // Efek hover pada tombol
        const button = document.querySelector('.back-button');
        button.addEventListener('mouseover', () => {
            button.style.transform = 'scale(1.05)';
        });
        button.addEventListener('mouseout', () => {
            button.style.transform = 'scale(1)';
        });

        // Easter egg: Klik 404
        const error404 = document.querySelector('.error-404');
        error404.addEventListener('click', () => {
            error404.style.animation = 'none';
            error404.offsetHeight; // Trigger reflow
            error404.style.animation = 'bounce 2s infinite';
        });
    </script>
</body>
</html>
