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
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;0,700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
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

        /* Paleta Pastoral del Duelo (logo) — tema claro */
        :root {
            --accent:       #8B1538;
            --accent-hover: #6d102c;
            --accent-muted: rgba(139, 21, 56, 0.09);
            --slate:        #6A7B88;
            --white:        #ffffff;
            --bg:           #fafaf9;
            --card:         #ffffff;
            --surface:      #f5f5f4;
            --border:       #e7e5e4;
            --text:         #1c1917;
            --muted:        #7E7E7E;
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
            background: radial-gradient(circle, rgba(139, 21, 56, 0.05) 0%, transparent 68%);
            border-radius: 50%;
        }
        .page-bg::after {
            content: '';
            position: absolute;
            bottom: -20%;
            right: -10%;
            width: 55%;
            aspect-ratio: 1;
            background: radial-gradient(circle, rgba(106, 123, 136, 0.04) 0%, transparent 68%);
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
            background: var(--card);
            border-radius: 1.5rem;
            padding: 1.5rem 2rem;
            box-shadow: 0 4px 24px rgba(28, 25, 23, 0.06);
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
            background: var(--accent-muted);
            color: var(--accent);
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            border-radius: 99px;
            margin-bottom: 1rem;
            border: 1px solid rgba(139, 21, 56, 0.2);
        }
        .event-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(1.5rem, 4vw, 2.1rem);
            font-weight: 600;
            line-height: 1.25;
            color: var(--text);
            margin-bottom: 0.5rem;
            letter-spacing: 0.01em;
        }
        .event-slogan {
            font-size: 0.95rem;
            font-style: italic;
            font-weight: 500;
            color: var(--slate);
            margin-top: 0.75rem;
        }

        /* Tarjeta del formulario */
        .form-card {
            background: var(--card);
            border-radius: 2rem;
            border: 1px solid var(--border);
            box-shadow: 0 12px 40px rgba(28, 25, 23, 0.08), 0 2px 8px rgba(0,0,0,0.04);
            overflow: hidden;
        }

        /* Barra superior de acento */
        .accent-bar {
            height: 3px;
            background: var(--accent);
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
            background: var(--accent-muted);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent);
            flex-shrink: 0;
        }
        .form-heading h2 {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 1.15rem;
            font-weight: 600;
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
            color: var(--accent);
        }
        .field-input {
            width: 100%;
            padding: 0.9rem 1rem 0.9rem 3.25rem;
            background: var(--surface);
            border: 1.5px solid var(--border);
            border-radius: 0.875rem;
            font-family: 'Inter', sans-serif;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text);
            transition: border-color 0.2s, box-shadow 0.2s;
            outline: none;
        }
        .field-input::placeholder { color: #a8a29e; font-weight: 400; }
        .field-input:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(139, 21, 56, 0.12);
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
            background: var(--surface);
            border: 1.5px solid var(--border);
            border-radius: 0.875rem;
            transition: all 0.2s;
        }
        .radio-option input:checked ~ .radio-tile {
            border-color: var(--accent);
            background: var(--accent-muted);
        }
        .radio-option:nth-child(2) input:checked ~ .radio-tile {
            border-color: var(--accent);
            background: var(--accent-muted);
        }
        .radio-dot {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            border: 2px solid rgba(106, 123, 136, 0.45);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: all 0.2s;
        }
        .radio-option input:checked ~ .radio-tile .radio-dot {
            border-color: var(--accent);
        }
        .radio-option:nth-child(2) input:checked ~ .radio-tile .radio-dot {
            border-color: var(--accent);
        }
        .radio-dot::after {
            content: '';
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--accent);
            opacity: 0;
            transition: opacity 0.2s, transform 0.2s;
            transform: scale(0.5);
        }
        .radio-option:nth-child(2) .radio-dot::after {
            background: var(--accent);
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
            color: var(--accent);
        }
        .radio-option:nth-child(2) input:checked ~ .radio-tile .radio-label-text {
            color: var(--accent);
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
            background: var(--accent);
            color: var(--white);
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            font-weight: 600;
            letter-spacing: 0.04em;
            border: none;
            border-radius: 0.875rem;
            cursor: pointer;
            box-shadow: 0 4px 20px rgba(139, 21, 56, 0.35);
            transition: background 0.2s, box-shadow 0.2s, transform 0.15s;
        }
        .btn-submit:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 24px rgba(139, 21, 56, 0.45);
            background: var(--accent-hover);
        }
        .btn-submit:active { transform: scale(0.98); }

        /* Mensaje de éxito */
        .success-msg {
            display: flex;
            align-items: flex-start;
            gap: 0.875rem;
            background: var(--accent-muted);
            border: 1px solid rgba(139, 21, 56, 0.25);
            border-radius: 1rem;
            padding: 1rem 1.25rem;
            margin-bottom: 1.75rem;
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--accent);
        }

        /* Cita bíblica */
        .biblica {
            margin: 2rem 2.5rem;
            padding: 1.5rem;
            background: var(--surface);
            border-left: 3px solid var(--accent);
            border-radius: 0 0.75rem 0.75rem 0;
            text-align: left;
        }
        .biblica p {
            font-size: 0.875rem;
            font-style: italic;
            font-weight: 500;
            color: var(--slate);
            line-height: 1.7;
        }
        .biblica cite {
            display: block;
            margin-top: 0.875rem;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--accent);
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
            color: var(--muted);
        }

        /* Info del congreso */
        .congreso-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.75rem;
            margin-top: 1.5rem;
        }
        .congreso-info-item {
            display: flex;
            align-items: flex-start;
            gap: 0.6rem;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 0.85rem 1rem;
        }
        .congreso-info-item .material-symbols-outlined {
            font-size: 20px;
            color: var(--slate);
            margin-top: 1px;
            flex-shrink: 0;
        }
        .info-label {
            font-size: 0.65rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--accent);
            margin-bottom: 2px;
        }
        .info-value {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text);
        }
        .congreso-info-full {
            grid-column: 1 / -1;
        }

        /* Checkboxes de días */
        .check-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.75rem;
            margin-top: 0.6rem;
        }
        .check-option {
            cursor: pointer;
            display: block;
        }
        .check-option input[type="checkbox"] {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }
        .check-tile {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.9rem 1rem;
            border: 2px solid var(--border);
            border-radius: 12px;
            background: var(--surface);
            transition: border-color 0.2s, background 0.2s, box-shadow 0.2s;
        }
        .check-option input:checked ~ .check-tile,
        .check-option.checked .check-tile {
            border-color: var(--accent);
            background: var(--accent-muted);
            box-shadow: 0 0 0 2px rgba(139, 21, 56, 0.15);
        }
        .check-box {
            width: 22px;
            height: 22px;
            border-radius: 6px;
            border: 2px solid var(--border);
            background: var(--surface);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: border-color 0.2s, background 0.2s;
        }
        .check-option input:checked ~ .check-tile .check-box,
        .check-option.checked .check-box {
            border-color: var(--accent);
            background: var(--accent);
        }
        .check-icon {
            font-size: 14px;
            color: white;
            opacity: 0;
            font-variation-settings: 'FILL' 1, 'wght' 700, 'GRAD' 0, 'opsz' 24;
            transition: opacity 0.15s;
        }
        .check-option input:checked ~ .check-tile .check-icon,
        .check-option.checked .check-icon {
            opacity: 1;
        }
        .check-text {
            display: flex;
            flex-direction: column;
            gap: 1px;
        }
        .check-day {
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--text);
        }
        .check-date {
            font-size: 0.75rem;
            color: var(--muted);
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
            .congreso-info { grid-template-columns: 1fr; }
            .check-grid { grid-template-columns: 1fr; }
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
                II Congreso de Bioética,<br>
                Cuidados Paliativos<br>
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

                @error('db')
                    <p class="field-error" style="margin-bottom:1rem;padding:0.75rem 1rem;background:rgba(229,62,62,0.08);border-radius:0.5rem;border:1px solid rgba(229,62,62,0.25);">{{ $message }}</p>
                @enderror

                <form action="{{ url('/congreso') }}" method="POST">
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

                    {{-- Info del Congreso --}}
                    <div class="congreso-info">
                        <div class="congreso-info-item">
                            <span class="material-symbols-outlined">calendar_month</span>
                            <div>
                                <p class="info-label">Fechas</p>
                                <p class="info-value">18 y 19 de abril de 2026</p>
                            </div>
                        </div>
                        <div class="congreso-info-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <div>
                                <p class="info-label">Horario</p>
                                <p class="info-value">8:00 a.m. – 4:00 p.m.</p>
                            </div>
                        </div>
                        <div class="congreso-info-item congreso-info-full">
                            <span class="material-symbols-outlined">location_on</span>
                            <div>
                                <p class="info-label">Sede</p>
                                <p class="info-value">Casa Sacerdotal - Tegucigalpa. Honduras.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Días de asistencia --}}
                    <div class="field-group" style="margin-top: 1.25rem;">
                        <span class="radio-group-label">¿Qué día(s) participará? <span style="color:var(--muted);font-size:0.75rem;font-weight:600;">(seleccione al menos uno)</span></span>
                        <div class="check-grid">
                            <label class="check-option {{ in_array('sabado', old('dias_asistencia', [])) ? 'checked' : '' }}">
                                <input type="checkbox" name="dias_asistencia[]" value="sabado"
                                    {{ in_array('sabado', old('dias_asistencia', [])) ? 'checked' : '' }}>
                                <div class="check-tile">
                                    <div class="check-box">
                                        <span class="material-symbols-outlined check-icon">check</span>
                                    </div>
                                    <div class="check-text">
                                        <span class="check-day">Sábado</span>
                                        <span class="check-date">18 de abril</span>
                                    </div>
                                </div>
                            </label>
                            <label class="check-option {{ in_array('domingo', old('dias_asistencia', [])) ? 'checked' : '' }}">
                                <input type="checkbox" name="dias_asistencia[]" value="domingo"
                                    {{ in_array('domingo', old('dias_asistencia', [])) ? 'checked' : '' }}>
                                <div class="check-tile">
                                    <div class="check-box">
                                        <span class="material-symbols-outlined check-icon">check</span>
                                    </div>
                                    <div class="check-text">
                                        <span class="check-day">Domingo</span>
                                        <span class="check-date">19 de abril</span>
                                    </div>
                                </div>
                            </label>
                        </div>
                        @error('dias_asistencia') <p class="field-error">{{ $message }}</p> @enderror
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
