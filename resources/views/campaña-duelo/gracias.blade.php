<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro Confirmado | II Congreso de Bioética</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;0,700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --accent:       #8B1538;
            --accent-hover: #6d102c;
            --accent-muted: rgba(139, 21, 56, 0.14);
            --slate:        #6A7B88;
            --white:        #ffffff;
            --bg:           #0a0a0a;
            --card:         #111111;
            --surface:      #161616;
            --border:       #2a2a2a;
            --text:         #f5f5f4;
            --muted:        #7E7E7E;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            background: var(--bg);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        /* Fondo decorativo */
        .page-bg {
            position: fixed;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
        }
        .page-bg::before {
            content: '';
            position: absolute;
            top: -20%;
            left: -10%;
            width: 55%;
            aspect-ratio: 1;
            background: radial-gradient(circle, rgba(139, 21, 56, 0.07) 0%, transparent 68%);
            border-radius: 50%;
        }
        .page-bg::after {
            content: '';
            position: absolute;
            bottom: -20%;
            right: -10%;
            width: 55%;
            aspect-ratio: 1;
            background: radial-gradient(circle, rgba(106, 123, 136, 0.06) 0%, transparent 68%);
            border-radius: 50%;
        }

        .wrapper {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 600px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
        }

        /* Logos */
        .logos {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 2.5rem;
            flex-wrap: wrap;
            background: var(--card);
            border-radius: 1.5rem;
            padding: 1.5rem 2rem;
            border: 1px solid var(--border);
            box-shadow: 0 4px 32px rgba(0,0,0,0.45);
        }
        .logos img {
            height: 110px;
            width: auto;
            object-fit: contain;
        }
        .logos-divider {
            width: 1px;
            height: 80px;
            background: var(--border);
        }

        /* Card principal */
        .card {
            background: var(--card);
            border-radius: 20px;
            border: 1px solid var(--border);
            box-shadow: 0 12px 48px rgba(0, 0, 0, 0.5);
            width: 100%;
            padding: 3rem 2.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 1.5rem;
        }

        /* Ícono de éxito */
        .success-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--accent-muted);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .success-icon .material-symbols-outlined {
            font-size: 42px;
            color: #c97a8f;
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        /* Título */
        .card-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 1.75rem;
            font-weight: 600;
            color: var(--text);
            line-height: 1.2;
        }
        .card-title span {
            color: #e8b4c4;
        }

        /* Mensaje */
        .card-message {
            font-size: 1rem;
            color: var(--slate);
            line-height: 1.7;
            max-width: 440px;
        }

        /* Datos del registrado */
        .registro-datos {
            width: 100%;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 1.25rem 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 0.6rem;
            text-align: left;
        }
        .registro-datos-title {
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 0.25rem;
        }
        .registro-dato {
            display: flex;
            align-items: flex-start;
            gap: 0.6rem;
            font-size: 0.9rem;
            color: var(--text);
        }
        .registro-dato .material-symbols-outlined {
            font-size: 18px;
            color: var(--slate);
            flex-shrink: 0;
            margin-top: 2px;
        }

        /* Divider */
        .divider {
            width: 100%;
            height: 1px;
            background: var(--border);
        }

        /* Slogan */
        .slogan {
            font-size: 0.85rem;
            font-style: italic;
            color: var(--slate);
            font-weight: 500;
            letter-spacing: 0.02em;
        }

        /* Cita bíblica */
        .biblica {
            width: 100%;
            text-align: center;
            padding: 1.5rem 1rem 0;
        }
        .biblica p {
            font-size: 0.85rem;
            font-style: italic;
            color: var(--slate);
            line-height: 1.6;
        }
        .biblica cite {
            display: block;
            margin-top: 0.5rem;
            font-size: 0.8rem;
            font-weight: 700;
            color: #e8b4c4;
            font-style: normal;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        /* Footer */
        .page-footer {
            font-size: 0.75rem;
            color: var(--muted);
            text-align: center;
            padding-top: 0.5rem;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .logos img { height: 85px; }
            .logos-divider { display: none; }
            .card { padding: 2rem 1.25rem; }
            .card-title { font-size: 1.4rem; }
            .success-icon { width: 68px; height: 68px; }
            .success-icon .material-symbols-outlined { font-size: 34px; }
        }
    </style>
</head>
<body>

    <div class="page-bg"></div>

    <div class="wrapper">

        {{-- Logos --}}
        <div class="logos">
            <img src="{{ asset('images/campaña_duelo/Logo Congreso.png') }}" alt="Logo II Congreso de Bioética">
            <div class="logos-divider"></div>
            <img src="{{ asset('images/campaña_duelo/Pastoral del Duelo _ 1.png') }}" alt="Logo Pastoral del Duelo">
        </div>

        {{-- Card de confirmación --}}
        <div class="card">

            <div class="success-icon">
                <span class="material-symbols-outlined">check_circle</span>
            </div>

            <div>
                <p class="card-title">¡Registro <span>confirmado</span>!</p>
            </div>

            <p class="card-message">
                Tu registro ha sido recibido exitosamente.<br>
                Te esperamos en el <strong>II Congreso de Bioética, Cuidados Paliativos y Pastoral del Duelo</strong>.
            </p>

            @if(session('nombre'))
            <div class="registro-datos">
                <p class="registro-datos-title">Datos de tu registro</p>
                <div class="registro-dato">
                    <span class="material-symbols-outlined">person</span>
                    <span>{{ session('nombre') }}</span>
                </div>
                <div class="registro-dato">
                    <span class="material-symbols-outlined">call</span>
                    <span>{{ session('telefono') }}</span>
                </div>
                @if(session('dias'))
                <div class="registro-dato">
                    <span class="material-symbols-outlined">calendar_month</span>
                    <span>
                        @foreach(session('dias') as $dia)
                            {{ $dia === 'sabado' ? 'Sábado 18 de abril' : 'Domingo 19 de abril' }}{{ !$loop->last ? ' · ' : '' }}
                        @endforeach
                    </span>
                </div>
                @endif
                <div class="registro-dato">
                    <span class="material-symbols-outlined">location_on</span>
                    <span>Casa Sacerdotal - Tegucigalpa. Honduras.</span>
                </div>
                <div class="registro-dato">
                    <span class="material-symbols-outlined">schedule</span>
                    <span>8:00 a.m. – 4:00 p.m.</span>
                </div>
            </div>
            @endif

            <div class="divider"></div>

            <p class="slogan">"cuando no se puede curar, siempre se puede cuidar"</p>

        </div>

        {{-- Cita bíblica --}}
        <div class="biblica">
            <p>"Pero un samaritano que iba de camino llegó junto a él, y al verlo tuvo compasión; y acercándose, vendó sus heridas, echándoles aceite y vino..."</p>
            <cite>Lucas 10, 33-35</cite>
        </div>

        <p class="page-footer">&copy; {{ date('Y') }} Pastoral del Duelo · Arquidiócesis de Tegucigalpa</p>

    </div>

</body>
</html>
