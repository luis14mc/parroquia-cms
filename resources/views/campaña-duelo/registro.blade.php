<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Registro | II Congreso de Bioética</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            background: #f5f4f8;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        /* Paleta extraída directamente de los logos */
        :root {
            --purple:    #6B3FA0; /* Bioética - logo congreso */
            --purple-dk: #4e2d78;
            --purple-lt: #f0ebf9;
            --green:     #2E7D54; /* Cuidados Paliativos - logo congreso */
            --green-lt:  #eaf4ef;
            --wine:      #8C1F52; /* Pastoral del Duelo - logo duelo */
            --wine-lt:   #f8eef3;
            --steel:     #607B8B; /* Piedad - logo duelo */
            --white:     #ffffff;
            --bg:        #f5f4f8;
            --card:      #ffffff;
            --border:    #e8e4f0;
            --text:      #1e1b2e;
            --muted:     #7a7591;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
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
            background: radial-gradient(circle, rgba(107,63,160,0.08) 0%, transparent 70%);
            border-radius: 50%;
        }
        .page-bg::after {
            content: '';
            position: absolute;
            bottom: -20%;
            right: -10%;
            width: 55%;
            aspect-ratio: 1;
            background: radial-gradient(circle, rgba(140,31,82,0.07) 0%, transparent 70%);
            border-radius: 50%;
        }

        /* Wrapper principal */
        .wrapper {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 680px;
        }

        /* Barra de logos */
        .logos-bar {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 2rem;
            background: var(--white);
            border-radius: 1.5rem;
            padding: 1.5rem 2rem;
            box-shadow: 0 4px 24px rgba(107,63,160,0.08);
            border: 1px solid var(--border);
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
        }
        .logos-bar img {
            height: 110px;
            width: auto;
            object-fit: contain;
            flex-shrink: 0;
        }
        .logos-divider {
            width: 1px;
            height: 90px;
            background: var(--border);
            flex-shrink: 0;
        }

        /* Cabecera del evento */
        .event-header {
            text-align: center;
            margin-bottom: 2rem;
            padding: 0 0.5rem;
        }
        .event-badge {
            display: inline-block;
            padding: 0.35rem 1rem;
            background: var(--purple-lt);
            color: var(--purple);
            font-size: 0.65rem;
            font-weight: 800;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            border-radius: 99px;
            margin-bottom: 1rem;
            border: 1px solid rgba(107,63,160,0.2);
        }
        .event-title {
            font-size: clamp(1.6rem, 4vw, 2.25rem);
            font-weight: 900;
            line-height: 1.15;
            color: var(--text);
            margin-bottom: 0.5rem;
            letter-spacing: -0.03em;
        }
        .event-title .highlight-purple { color: var(--purple); }
        .event-title .highlight-green  { color: var(--green); }
        .event-slogan {
            font-size: 0.95rem;
            font-style: italic;
            font-weight: 500;
            color: var(--wine);
            margin-top: 0.75rem;
        }

        /* Tarjeta del formulario */
        .form-card {
            background: var(--card);
            border-radius: 2rem;
            border: 1px solid var(--border);
            box-shadow: 0 12px 48px rgba(107,63,160,0.1), 0 2px 8px rgba(0,0,0,0.04);
            overflow: hidden;
        }

        /* Barra superior de acento */
        .accent-bar {
            height: 5px;
            background: linear-gradient(90deg, var(--purple) 0%, var(--green) 50%, var(--wine) 100%);
        }

        .form-inner {
            padding: 2.5rem 2.5rem 2rem;
        }

        .form-heading {
            display: flex;
            align-items: center;
            gap: 0.875rem;
            margin-bottom: 2rem;
        }
        .form-heading-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: var(--purple-lt);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--purple);
            flex-shrink: 0;
        }
        .form-heading h2 {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--text);
        }
        .form-heading p {
            font-size: 0.8rem;
            color: var(--muted);
            margin-top: 0.125rem;
        }

        /* Grupos de inputs */
        .field-group {
            margin-bottom: 1.25rem;
        }
        .field-label {
            display: block;
            font-size: 0.65rem;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 0.5rem;
            padding-left: 0.25rem;
        }
        .field-optional {
            font-weight: 400;
            text-transform: none;
            letter-spacing: 0;
            font-size: 0.65rem;
        }
        .field-input-wrap {
            position: relative;
        }
        .field-input-wrap .field-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--muted);
            font-size: 1.25rem;
            transition: color 0.2s;
            pointer-events: none;
        }
        .field-input-wrap:focus-within .field-icon {
            color: var(--purple);
        }
        .field-input {
            width: 100%;
            padding: 0.9rem 1rem 0.9rem 3.25rem;
            background: #faf9fc;
            border: 1.5px solid var(--border);
            border-radius: 0.875rem;
            font-family: 'Inter', sans-serif;
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--text);
            transition: border-color 0.2s, box-shadow 0.2s;
            outline: none;
        }
        .field-input::placeholder { color: #b0acbd; font-weight: 400; }
        .field-input:focus {
            border-color: var(--purple);
            box-shadow: 0 0 0 4px rgba(107,63,160,0.08);
            background: var(--white);
        }
        .field-error {
            font-size: 0.7rem;
            font-weight: 700;
            color: #e53e3e;
            margin-top: 0.375rem;
            padding-left: 0.25rem;
        }

        /* Grid 2 columnas */
        .grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.25rem;
        }

        /* Radio asistencia */
        .radio-group-label {
            display: block;
            font-size: 0.65rem;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 0.75rem;
            padding-left: 0.25rem;
        }
        .radio-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.875rem;
        }
        .radio-option {
            position: relative;
            cursor: pointer;
        }
        .radio-option input[type="radio"] {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }
        .radio-tile {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 1.25rem;
            background: #faf9fc;
            border: 1.5px solid var(--border);
            border-radius: 0.875rem;
            transition: all 0.2s;
        }
        .radio-option input:checked ~ .radio-tile {
            border-color: var(--purple);
            background: var(--purple-lt);
        }
        .radio-option:nth-child(2) input:checked ~ .radio-tile {
            border-color: var(--wine);
            background: var(--wine-lt);
        }
        .radio-dot {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            border: 2px solid #c5bfda;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: all 0.2s;
        }
        .radio-option input:checked ~ .radio-tile .radio-dot {
            border-color: var(--purple);
        }
        .radio-option:nth-child(2) input:checked ~ .radio-tile .radio-dot {
            border-color: var(--wine);
        }
        .radio-dot::after {
            content: '';
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--purple);
            opacity: 0;
            transition: opacity 0.2s, transform 0.2s;
            transform: scale(0.5);
        }
        .radio-option:nth-child(2) .radio-dot::after {
            background: var(--wine);
        }
        .radio-option input:checked ~ .radio-tile .radio-dot::after {
            opacity: 1;
            transform: scale(1);
        }
        .radio-label-text {
            font-size: 0.875rem;
            font-weight: 700;
            color: var(--muted);
            transition: color 0.2s;
        }
        .radio-option input:checked ~ .radio-tile .radio-label-text {
            color: var(--purple);
        }
        .radio-option:nth-child(2) input:checked ~ .radio-tile .radio-label-text {
            color: var(--wine);
        }

        /* Divider */
        .divider {
            height: 1px;
            background: var(--border);
            margin: 2rem 0 1.75rem;
        }

        /* Botón enviar */
        .btn-submit {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            padding: 1rem 1.5rem;
            background: linear-gradient(135deg, var(--purple) 0%, var(--purple-dk) 100%);
            color: var(--white);
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 800;
            letter-spacing: -0.01em;
            border: none;
            border-radius: 0.875rem;
            cursor: pointer;
            box-shadow: 0 8px 24px rgba(107,63,160,0.3);
            transition: all 0.2s;
        }
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 32px rgba(107,63,160,0.4);
            background: linear-gradient(135deg, var(--purple-dk) 0%, #3b1f5a 100%);
        }
        .btn-submit:active { transform: scale(0.98); }

        /* Mensaje de éxito */
        .success-msg {
            display: flex;
            align-items: flex-start;
            gap: 0.875rem;
            background: var(--green-lt);
            border: 1.5px solid rgba(46,125,84,0.2);
            border-radius: 1rem;
            padding: 1rem 1.25rem;
            margin-bottom: 1.75rem;
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--green);
        }

        /* Cita bíblica */
        .biblica {
            margin: 2rem 2.5rem;
            padding: 1.5rem;
            background: linear-gradient(135deg, var(--purple-lt) 0%, var(--wine-lt) 100%);
            border-left: 4px solid var(--purple);
            border-radius: 0 1rem 1rem 0;
            text-align: left;
        }
        .biblica p {
            font-size: 0.875rem;
            font-style: italic;
            font-weight: 500;
            color: #4a3f6a;
            line-height: 1.7;
        }
        .biblica cite {
            display: block;
            margin-top: 0.875rem;
            font-size: 0.7rem;
            font-weight: 800;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--purple);
            font-style: normal;
        }

        /* Footer */
        .page-footer {
            text-align: center;
            margin-top: 2rem;
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: #b0acbd;
        }

        /* Responsive móvil */
        @media (max-width: 580px) {
            body { padding: 1.5rem 1rem; }
            .logos-bar { gap: 1.25rem; padding: 1.25rem 1.5rem; }
            .logos-bar img { height: 80px; }
            .logos-divider { height: 64px; }
            .form-inner { padding: 1.75rem 1.5rem 1.5rem; }
            .grid-2 { grid-template-columns: 1fr; gap: 1.25rem; }
            .biblica { margin: 1.5rem 1.5rem; }
        }
    </style>
</head>
<body>

    {{-- Fondo decorativo --}}
    <div class="page-bg"></div>

    <div class="wrapper">

        {{-- Barra de Logos --}}
        <div class="logos-bar">
            <img src="{{ asset('images/campaña_duelo/Logo Congreso.png') }}" alt="II Congreso de Bioética">
            <div class="logos-divider"></div>
            <img src="{{ asset('images/campaña_duelo/Pastoral del Duelo _ 1.png') }}" alt="Pastoral del Duelo">
        </div>

        {{-- Encabezado del Evento --}}
        <div class="event-header">
            <span class="event-badge">Inscripciones Abiertas</span>
            <h1 class="event-title">
                <span class="highlight-purple">II Congreso de Bioética,</span><br>
                <span class="highlight-green">Cuidados Paliativos</span><br>
                y Pastoral del Duelo
            </h1>
            <p class="event-slogan">"Cuando no se puede curar, siempre se puede cuidar"</p>
        </div>

        {{-- Tarjeta del Formulario --}}
        <div class="form-card">
            <div class="accent-bar"></div>

            <div class="form-inner">

                <div class="form-heading">
                    <div class="form-heading-icon">
                        <span class="material-symbols-outlined">assignment_ind</span>
                    </div>
                    <div>
                        <h2>Registro de Asistencia</h2>
                        <p>Complete sus datos para confirmar su participación.</p>
                    </div>
                </div>

                @if(session('success'))
                    <div class="success-msg">
                        <span class="material-symbols-outlined" style="color: #2E7D54; flex-shrink: 0;">verified</span>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                <form action="{{ route('campaña-duelo.store') }}" method="POST">
                    @csrf

                    {{-- Nombre Completo --}}
                    <div class="field-group">
                        <label for="nombre_completo" class="field-label">Nombre Completo</label>
                        <div class="field-input-wrap">
                            <span class="material-symbols-outlined field-icon">person</span>
                            <input type="text" name="nombre_completo" id="nombre_completo" required value="{{ old('nombre_completo') }}"
                                   class="field-input" placeholder="Nombre y Apellidos">
                        </div>
                        @error('nombre_completo') <p class="field-error">{{ $message }}</p> @enderror
                    </div>

                    {{-- Teléfono y Email --}}
                    <div class="grid-2">
                        <div class="field-group" style="margin-bottom: 0;">
                            <label for="telefono" class="field-label">Teléfono</label>
                            <div class="field-input-wrap">
                                <span class="material-symbols-outlined field-icon">call</span>
                                <input type="tel" name="telefono" id="telefono" required value="{{ old('telefono') }}"
                                       class="field-input" placeholder="0000-0000">
                            </div>
                            @error('telefono') <p class="field-error">{{ $message }}</p> @enderror
                        </div>

                        <div class="field-group" style="margin-bottom: 0;">
                            <label for="email" class="field-label">
                                Email <span class="field-optional">(opcional)</span>
                            </label>
                            <div class="field-input-wrap">
                                <span class="material-symbols-outlined field-icon">mail</span>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                       class="field-input" placeholder="correo@ejemplo.com">
                            </div>
                            @error('email') <p class="field-error">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    {{-- Confirmar Asistencia --}}
                    <div class="field-group" style="margin-top: 1.5rem;">
                        <span class="radio-group-label">¿Confirma su asistencia al evento?</span>
                        <div class="radio-grid">
                            <label class="radio-option">
                                <input type="radio" name="confirmar_asistencia" value="1" checked>
                                <div class="radio-tile">
                                    <div class="radio-dot"></div>
                                    <span class="radio-label-text">Sí, asistiré</span>
                                </div>
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="confirmar_asistencia" value="0">
                                <div class="radio-tile">
                                    <div class="radio-dot"></div>
                                    <span class="radio-label-text">No podré asistir</span>
                                </div>
                            </label>
                        </div>
                        @error('confirmar_asistencia') <p class="field-error">{{ $message }}</p> @enderror
                    </div>

                    <div class="divider"></div>

                    <button type="submit" class="btn-submit">
                        <span class="material-symbols-outlined">how_to_reg</span>
                        Confirmar mi Registro
                    </button>
                </form>
            </div>

            {{-- Cita Bíblica --}}
            <div class="biblica">
                <p>"Pero un samaritano que iba de camino llegó junto a él, y al verlo tuvo compasión; y acercándose, vendó sus heridas, echándoles aceite y vino..."</p>
                <cite>Lucas 10, 33-35</cite>
            </div>
        </div>

        {{-- Footer --}}
        <p class="page-footer">&copy; {{ date('Y') }} Pastoral del Duelo · Arquidiócesis de Tegucigalpa</p>
    </div>

</body>
</html>
