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
        /* 🌸 Fundo e estilo geral */
        body {
            background: linear-gradient(135deg, #ffe6f2, #ffd6eb);
            font-family: 'Poppins', sans-serif;
            color: #5c3d4e;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
            padding-bottom: 80px;
        }

        /* 🌼 Flores decorativas */
        body::before, body::after {
            content: "";
            position: absolute;
            background-image: url('https://cdn.pixabay.com/photo/2017/08/30/05/55/flower-2698055_1280.png');
            background-size: contain;
            background-repeat: no-repeat;
            opacity: 0.2;
            z-index: -1;
        }

        body::before {
            top: -20px;
            left: -30px;
            width: 250px;
            height: 250px;
        }

        body::after {
            bottom: 0;
            right: 0;
            width: 300px;
            height: 300px;
        }

        /* 🌸 Títulos */
        h1 {
            font-family: 'Pacifico', cursive;
            color: #e75480;
            margin-bottom: 10px;
        }

        .lead {
            color: #8a4b63;
            margin-bottom: 40px;
            font-size: 1.1rem;
        }

        /* 🌺 Cartões das perguntas */
        .card {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 25px;
            border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            padding: 25px;
        }

        .card h2 {
            font-size: 1.3rem;
            color: #d14d72;
            font-weight: 600;
            margin-bottom: 15px;
        }

        /* 🌸 Inputs de resposta */
        .form-check-input {
            accent-color: #ff80aa;
            transform: scale(1.2);
        }

        .form-check-label {
            color: #5c3d4e;
            font-size: 1rem;
        }

        /* 💕 Botão */
        .btn-pink {
            background-color: #ff80aa;
            border: none;
            color: white;
            font-size: 1.1rem;
            padding: 12px 35px;
            border-radius: 30px;
            transition: all 0.3s ease;
            box-shadow: 0 3px 8px rgba(255, 128, 170, 0.4);
        }

        .btn-pink:hover {
            background-color: #ff99c8;
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(255, 128, 170, 0.6);
        }

        /* 🌸 Footer */
        footer {
            text-align: center;
            margin-top: 50px;
            color: #b85c7a;
            font-size: 0.9rem;
            font-style: italic;
        }

        /* 🌷 Animação de flores flutuantes */
        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); opacity: 1; }
            50% { transform: translateY(-20px) rotate(10deg); opacity: 0.9; }
            100% { transform: translateY(0) rotate(0deg); opacity: 1; }
        }

        .flower {
            position: absolute;
            width: 40px;
            opacity: 0.3;
            animation: float 4s ease-in-out infinite;
        }

        .flower1 { top: 10%; left: 5%; animation-delay: 0s; }
        .flower2 { top: 30%; right: 10%; animation-delay: 1s; }
        .flower3 { bottom: 20%; left: 15%; animation-delay: 2s; }
    </style>
</head>

<body>
    <!-- 🌸 Flores flutuantes -->
    <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/flower-1296879_1280.png" class="flower flower1" alt="Flor decorativa">
    <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/flower-1296879_1280.png" class="flower flower2" alt="Flor decorativa">
    <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/flower-1296879_1280.png" class="flower flower3" alt="Flor decorativa">

    <div class="container py-5">
        <div class="text-center mb-4">
            <h1>🌺 Início das Questões 🌺</h1>
            <p class="lead">Responda com calma e veja seu resultado encantador ao final 💕</p>
        </div>

        <form method="POST" action="{{ route('quizz.responder') }}">
            @csrf

            @foreach($perguntas as $pergunta)
                <div class="card mb-4">
                    <h2>{{ $pergunta->texto }}</h2>

                    <div class="mt-3">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="{{ $pergunta->id }}" id="opcaoA_{{ $pergunta->id }}" value="A">
                            <label class="form-check-label" for="opcaoA_{{ $pergunta->id }}">{{ $pergunta->opcao_a }}</label>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="{{ $pergunta->id }}" id="opcaoB_{{ $pergunta->id }}" value="B">
                            <label class="form-check-label" for="opcaoB_{{ $pergunta->id }}">{{ $pergunta->opcao_b }}</label>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="{{ $pergunta->id }}" id="opcaoC_{{ $pergunta->id }}" value="C">
                            <label class="form-check-label" for="opcaoC_{{ $pergunta->id }}">{{ $pergunta->opcao_c }}</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="{{ $pergunta->id }}" id="opcaoD_{{ $pergunta->id }}" value="D">
                            <label class="form-check-label" for="opcaoD_{{ $pergunta->id }}">{{ $pergunta->opcao_d }}</label>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="text-center mt-5">
                <button class="btn btn-pink btn-lg" type="submit">Enviar Respostas 💖</button>
            </div>
        </form>

        <footer>Feito com amor e flores 🌸💫</footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
