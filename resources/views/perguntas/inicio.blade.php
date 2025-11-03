<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz Encantado 🌸</title>

    <!-- Fonte e Bootstrap -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #ffd6eb, #ffe6f2);
            background-attachment: fixed;
            font-family: 'Poppins', sans-serif;
            color: #5c3d4e;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Flores decorativas */
        body::before, body::after {
            content: "";
            position: absolute;
            background-image: url('https://cdn.pixabay.com/photo/2017/08/30/05/55/flower-2698055_1280.png');
            background-size: contain;
            background-repeat: no-repeat;
            opacity: 0.2;
        }
        body::before {
            top: 0;
            left: 0;
            width: 250px;
            height: 250px;
        }
        body::after {
            bottom: 0;
            right: 0;
            width: 300px;
            height: 300px;
        }

        .quiz-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 25px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 50px;
            text-align: center;
            max-width: 600px;
            width: 90%;
        }

        h1 {
            font-family: 'Pacifico', cursive;
            color: #e048a1ec;
            margin-bottom: 20px;
        }

        .lead {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }

        .btn-pink {
            background-color: #ff80aa;
            border: none;
            color: white;
            font-size: 1.1rem;
            padding: 12px 30px;
            border-radius: 30px;
            transition: all 0.3s ease;
            box-shadow: 0 3px 8px rgba(255, 128, 170, 0.4);
        }

        .btn-pink:hover {
            background-color: #ff99c8;
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(255, 128, 170, 0.6);
        }

        footer {
            position: absolute;
            bottom: 15px;
            text-align: center;
            width: 100%;
            font-size: 0.9rem;
            color: #b85c7a;
        }
    </style>
</head>
<body>

    <div class="quiz-card">
        <h1>Bem-vindo ao Quiz Encantado 🌸</h1>
        <p class="lead">
            Teste seus conhecimentos com <strong>{{ $total_perguntas }}</strong> perguntas delicadas e divertidas.
        </p>
        <a href="{{ route('responder') }}" class="btn btn-pink btn-lg">Iniciar Quiz 💕</a>
    </div>

    <footer>
        Feito com 💖 para você
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
