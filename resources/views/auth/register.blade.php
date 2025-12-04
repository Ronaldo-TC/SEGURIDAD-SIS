<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Registro</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|poppins:400,500,600,700" rel="stylesheet" />

    <!-- Styles -->
    <style>
        :root {
            /* Paleta de colores púrpura y azul oscuro */
            --primary-50: #f5f3ff;
            --primary-100: #ede9fe;
            --primary-200: #ddd6fe;
            --primary-300: #c4b5fd;
            --primary-400: #a78bfa;
            --primary-500: #8b5cf6;
            --primary-600: #7c3aed;
            --primary-700: #6d28d9;
            --primary-800: #5b21b6;
            --primary-900: #4c1d95;
            --primary-950: #2e1065;

            --dark-blue-50: #eff6ff;
            --dark-blue-100: #dbeafe;
            --dark-blue-200: #bfdbfe;
            --dark-blue-300: #93c5fd;
            --dark-blue-400: #60a5fa;
            --dark-blue-500: #3b82f6;
            --dark-blue-600: #2563eb;
            --dark-blue-700: #1d4ed8;
            --dark-blue-800: #1e40af;
            --dark-blue-900: #1e3a8a;
            --dark-blue-950: #172554;

            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-400: #9ca3af;
            --gray-500: #6b7280;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-800: #1f2937;
            --gray-900: #111827;
            --gray-950: #030712;

            --success-400: #34d399;
            --success-500: #10b981;
            --success-600: #059669;

            /* Gradientes */
            --gradient-primary: linear-gradient(135deg, var(--primary-700) 0%, var(--dark-blue-800) 100%);
            --gradient-dark: linear-gradient(135deg, var(--primary-900) 0%, var(--dark-blue-950) 100%);
            --gradient-success: linear-gradient(135deg, var(--success-500) 0%, var(--dark-blue-600) 100%);

            /* Sombras */
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            --shadow-inner: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            background: var(--gradient-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        /* Fondos decorativos */
        .background-shapes {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.15;
        }

        .shape-1 {
            width: 600px;
            height: 600px;
            top: -300px;
            right: -200px;
            background: var(--primary-600);
        }

        .shape-2 {
            width: 500px;
            height: 500px;
            bottom: -250px;
            left: -150px;
            background: var(--dark-blue-700);
            opacity: 0.1;
        }

        .shape-3 {
            width: 400px;
            height: 400px;
            top: 30%;
            right: 10%;
            background: var(--success-400);
            opacity: 0.08;
        }

        .shape-4 {
            width: 300px;
            height: 300px;
            bottom: 20%;
            left: 5%;
            background: var(--primary-400);
            opacity: 0.06;
        }

        /* Contenedor principal */
        .register-container {
            width: 100%;
            max-width: 480px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 48px 40px;
            box-shadow: var(--shadow-xl);
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .register-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-success);
        }

        /* Header */
        .register-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-bottom: 24px;
        }

        .logo-icon {
            width: 48px;
            height: 48px;
            background: var(--gradient-success);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            font-weight: 600;
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);
        }

        .logo-text {
            font-family: 'Poppins', sans-serif;
            font-size: 32px;
            font-weight: 700;
            background: var(--gradient-success);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .register-title {
            font-size: 24px;
            font-weight: 600;
            color: white;
            margin-bottom: 8px;
        }

        .register-subtitle {
            font-size: 14px;
            color: var(--gray-400);
            font-weight: 400;
            line-height: 1.5;
        }

        /* Formulario */
        .register-form {
            width: 100%;
        }

        .form-group {
            margin-bottom: 24px;
            position: relative;
        }

        .form-label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            font-weight: 500;
            color: var(--gray-300);
            margin-bottom: 8px;
            transition: color 0.2s;
        }

        .form-label-icon {
            width: 16px;
            height: 16px;
            color: var(--gray-500);
        }

        .form-label:hover {
            color: white;
        }

        .form-label:hover .form-label-icon {
            color: var(--primary-400);
        }

        .input-container {
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 16px 20px 16px 48px;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            font-size: 15px;
            color: white;
            transition: all 0.3s ease;
            outline: none;
            font-family: 'Inter', sans-serif;
        }

        .form-input:focus {
            border-color: var(--success-500);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.1);
        }

        .form-input:hover {
            border-color: rgba(255, 255, 255, 0.2);
        }

        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-500);
            transition: color 0.3s;
            width: 20px;
            height: 20px;
        }

        .form-input:focus+.input-icon {
            color: var(--success-400);
        }

        /* Indicador de fortaleza de contraseña */
        .password-strength {
            margin-top: 8px;
            display: none;
        }

        .password-strength.active {
            display: block;
        }

        .strength-meter {
            height: 4px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 2px;
            overflow: hidden;
            margin-bottom: 8px;
        }

        .strength-fill {
            height: 100%;
            width: 0%;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .strength-text {
            font-size: 12px;
            color: var(--gray-400);
            display: flex;
            justify-content: space-between;
        }

        .strength-label {
            transition: color 0.3s;
        }

        /* Mensajes de error */
        .error-messages {
            margin-top: 8px;
        }

        .error-message {
            font-size: 13px;
            color: #f87171;
            display: flex;
            align-items: center;
            gap: 6px;
            margin-top: 4px;
        }

        .error-message::before {
            content: '⚠';
            font-size: 12px;
        }

        /* Indicador de coincidencia de contraseñas */
        .password-match {
            font-size: 12px;
            margin-top: 8px;
            display: flex;
            align-items: center;
            gap: 6px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .password-match.visible {
            opacity: 1;
        }

        .password-match.success {
            color: var(--success-400);
        }

        .password-match.error {
            color: #f87171;
        }

        /* Términos y condiciones */
        .terms-container {
            margin: 24px 0;
            padding: 16px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .checkbox-input {
            display: none;
        }

        .checkbox-custom {
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .checkbox-custom::after {
            content: '';
            width: 10px;
            height: 10px;
            background: var(--gradient-success);
            border-radius: 3px;
            transform: scale(0);
            transition: transform 0.3s;
        }

        .checkbox-input:checked+.checkbox-custom {
            border-color: var(--success-500);
        }

        .checkbox-input:checked+.checkbox-custom::after {
            transform: scale(1);
        }

        .checkbox-label {
            color: var(--gray-300);
            font-size: 14px;
            line-height: 1.5;
            cursor: pointer;
            user-select: none;
            transition: color 0.3s;
        }

        .checkbox-label a {
            color: var(--success-400);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }

        .checkbox-label a::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--success-400);
            transition: width 0.3s;
        }

        .checkbox-label a:hover {
            color: var(--success-300);
        }

        .checkbox-label a:hover::after {
            width: 100%;
        }

        .checkbox-label:hover {
            color: white;
        }

        /* Acciones */
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 32px;
        }

        .login-link {
            color: var(--success-300);
            font-size: 14px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            position: relative;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .login-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--success-300);
            transition: width 0.3s;
        }

        .login-link:hover {
            color: var(--success-200);
            gap: 12px;
        }

        .login-link:hover::after {
            width: 100%;
        }

        .register-button {
            background: var(--gradient-success);
            color: white;
            border: none;
            padding: 16px 32px;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-width: 140px;
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);
            position: relative;
            overflow: hidden;
        }

        .register-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s;
        }

        .register-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(16, 185, 129, 0.4);
        }

        .register-button:hover::before {
            left: 100%;
        }

        .register-button:active {
            transform: translateY(0);
        }

        .register-button:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none !important;
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.2) !important;
        }

        .button-icon {
            width: 18px;
            height: 18px;
        }

        /* Indicador de pasos (opcional) */
        .steps-indicator {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            margin-bottom: 32px;
        }

        .step {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s;
        }

        .step.active {
            width: 24px;
            border-radius: 4px;
            background: var(--success-500);
        }

        /* Footer */
        .register-footer {
            text-align: center;
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--gray-500);
            font-size: 13px;
            line-height: 1.5;
        }

        /* Responsive */
        @media (max-width: 520px) {
            .register-container {
                padding: 32px 24px;
                margin: 0 16px;
            }

            .logo-text {
                font-size: 24px;
            }

            .register-title {
                font-size: 20px;
            }

            .form-actions {
                flex-direction: column;
                gap: 20px;
                align-items: stretch;
            }

            .login-link {
                order: 2;
                justify-content: center;
            }

            .register-button {
                order: 1;
                width: 100%;
            }

            .shape-1,
            .shape-2 {
                display: none;
            }
        }

        /* Animaciones */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }

        .register-container {
            animation: fadeInUp 0.6s ease-out;
        }

        /* Ajustes para modo oscuro */
        @media (prefers-color-scheme: dark) {
            .register-container {
                background: rgba(15, 23, 42, 0.7);
            }

            .form-input {
                background: rgba(30, 41, 59, 0.5);
            }

            .terms-container {
                background: rgba(30, 41, 59, 0.3);
            }
        }

        /* Estado de carga */
        .loading {
            animation: pulse 1.5s infinite;
        }
    </style>
</head>

<body>
    <!-- Fondos decorativos -->
    <div class="background-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
    </div>

    <div class="register-container">
        <!-- Header -->
        <div class="register-header">
            <!-- Indicador de pasos (opcional) -->
            <div class="steps-indicator">
                <div class="step active"></div>
                <div class="step"></div>
                <div class="step"></div>
            </div>

            <div class="logo">
                <div class="logo-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <span class="logo-text">{{ config('app.name', 'Nexus') }}</span>
            </div>
            <h1 class="register-title">Crear Cuenta</h1>
            <p class="register-subtitle">Únete a nuestra comunidad y comienza tu viaje con nosotros</p>
        </div>

        <!-- Formulario -->
        <form method="POST" action="{{ route('register') }}" class="register-form" id="registerForm">
            @csrf

            <!-- Nombre -->
            <div class="form-group">
                <label for="name" class="form-label">
                    <svg class="form-label-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    Nombre Completo
                </label>
                <div class="input-container">
                    <input id="name"
                        class="form-input"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        autofocus
                        autocomplete="name"
                        placeholder="Ingresa tu nombre completo">
                    <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                @if ($errors->has('name'))
                <div class="error-messages">
                    @foreach ($errors->get('name') as $error)
                    <div class="error-message">{{ $error }}</div>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email" class="form-label">
                    <svg class="form-label-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    Correo Electrónico
                </label>
                <div class="input-container">
                    <input id="email"
                        class="form-input"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        placeholder="Ingresa tu correo electrónico">
                    <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </div>
                @if ($errors->has('email'))
                <div class="error-messages">
                    @foreach ($errors->get('email') as $error)
                    <div class="error-message">{{ $error }}</div>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Contraseña -->
            <div class="form-group">
                <label for="password" class="form-label">
                    <svg class="form-label-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                    Contraseña
                </label>
                <div class="input-container">
                    <input id="password"
                        class="form-input"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                        placeholder="Crea una contraseña segura">
                    <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                </div>

                <!-- Indicador de fortaleza de contraseña -->
                <div class="password-strength" id="passwordStrength">
                    <div class="strength-meter">
                        <div class="strength-fill" id="strengthFill"></div>
                    </div>
                    <div class="strength-text">
                        <span class="strength-label" id="strengthLabel">Fortaleza de la contraseña</span>
                        <span id="strengthScore">0%</span>
                    </div>
                </div>

                @if ($errors->has('password'))
                <div class="error-messages">
                    @foreach ($errors->get('password') as $error)
                    <div class="error-message">{{ $error }}</div>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Confirmar Contraseña -->
            <div class="form-group">
                <label for="password_confirmation" class="form-label">
                    <svg class="form-label-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                    Confirmar Contraseña
                </label>
                <div class="input-container">
                    <input id="password_confirmation"
                        class="form-input"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                        placeholder="Confirma tu contraseña">
                    <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>

                <!-- Indicador de coincidencia de contraseñas -->
                <div class="password-match" id="passwordMatch">
                    <span id="matchText">Las contraseñas coinciden</span>
                </div>

                @if ($errors->has('password_confirmation'))
                <div class="error-messages">
                    @foreach ($errors->get('password_confirmation') as $error)
                    <div class="error-message">{{ $error }}</div>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Términos y condiciones -->
            <div class="terms-container">
                <div class="checkbox-group">
                    <input id="terms"
                        type="checkbox"
                        name="terms"
                        class="checkbox-input"
                        required>
                    <label for="terms" class="checkbox-custom"></label>
                    <label for="terms" class="checkbox-label">
                        Acepto los <a href="#">Términos de Servicio</a> y la <a href="#">Política de Privacidad</a>.
                        Entiendo que mis datos serán procesados de acuerdo con estas políticas.
                    </label>
                </div>
                @if ($errors->has('terms'))
                <div class="error-messages">
                    @foreach ($errors->get('terms') as $error)
                    <div class="error-message">{{ $error }}</div>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Acciones -->
            <div class="form-actions">
                <a class="login-link" href="{{ route('login') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 12H6M12 5l-7 7 7 7" />
                    </svg>
                    ¿Ya tienes una cuenta?
                </a>

                <button type="submit" class="register-button" id="registerButton">
                    <svg class="button-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <line x1="20" y1="8" x2="20" y2="14"></line>
                        <line x1="23" y1="11" x2="17" y2="11"></line>
                    </svg>
                    Crear Cuenta
                </button>
            </div>
        </form>

        <!-- Footer -->
        <div class="register-footer">
            <p>Al crear una cuenta, aceptas nuestros términos y reconoces nuestra política de privacidad.</p>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        // Calculadora de fortaleza de contraseña
        function calcularFortalezaContraseña(contraseña) {
            let puntaje = 0;

            // Verificar longitud
            if (contraseña.length >= 8) puntaje += 25;
            if (contraseña.length >= 12) puntaje += 15;

            // Verificar variedad de caracteres
            if (/[A-Z]/.test(contraseña)) puntaje += 15;
            if (/[a-z]/.test(contraseña)) puntaje += 15;
            if (/[0-9]/.test(contraseña)) puntaje += 15;
            if (/[^A-Za-z0-9]/.test(contraseña)) puntaje += 15;

            // Bonus por no usar patrones comunes
            if (!/(.)\1{2,}/.test(contraseña)) puntaje += 10;

            return Math.min(puntaje, 100);
        }

        function actualizarIndicadorFortaleza(contraseña) {
            const strengthDiv = document.getElementById('passwordStrength');
            const strengthFill = document.getElementById('strengthFill');
            const strengthLabel = document.getElementById('strengthLabel');
            const strengthScore = document.getElementById('strengthScore');

            if (contraseña.length === 0) {
                strengthDiv.classList.remove('active');
                return;
            }

            strengthDiv.classList.add('active');
            const puntaje = calcularFortalezaContraseña(contraseña);

            // Actualizar visual
            strengthFill.style.width = `${puntaje}%`;
            strengthScore.textContent = `${puntaje}%`;

            // Actualizar color y etiqueta basado en el puntaje
            if (puntaje < 40) {
                strengthFill.style.background = '#ef4444';
                strengthLabel.textContent = 'Débil';
                strengthLabel.style.color = '#ef4444';
            } else if (puntaje < 70) {
                strengthFill.style.background = '#f59e0b';
                strengthLabel.textContent = 'Aceptable';
                strengthLabel.style.color = '#f59e0b';
            } else if (puntaje < 90) {
                strengthFill.style.background = '#10b981';
                strengthLabel.textContent = 'Buena';
                strengthLabel.style.color = '#10b981';
            } else {
                strengthFill.style.background = 'var(--gradient-success)';
                strengthLabel.textContent = 'Fuerte';
                strengthLabel.style.color = '#10b981';
            }
        }

        // Verificador de coincidencia de contraseñas
        function verificarCoincidenciaContraseñas() {
            const contraseña = document.getElementById('password').value;
            const confirmarContraseña = document.getElementById('password_confirmation').value;
            const matchDiv = document.getElementById('passwordMatch');
            const matchText = document.getElementById('matchText');

            if (confirmarContraseña.length === 0) {
                matchDiv.classList.remove('visible', 'success', 'error');
                return;
            }

            matchDiv.classList.add('visible');

            if (contraseña === confirmarContraseña) {
                matchDiv.classList.add('success');
                matchDiv.classList.remove('error');
                matchText.textContent = '✓ Las contraseñas coinciden';
                matchText.style.color = 'var(--success-400)';
            } else {
                matchDiv.classList.add('error');
                matchDiv.classList.remove('success');
                matchText.textContent = '✗ Las contraseñas no coinciden';
                matchText.style.color = '#f87171';
            }
        }

        // Validación del formulario
        function validarFormulario() {
            const nombre = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const contraseña = document.getElementById('password').value;
            const confirmarContraseña = document.getElementById('password_confirmation').value;
            const terminos = document.getElementById('terms').checked;
            const boton = document.getElementById('registerButton');

            const esValido = nombre &&
                email &&
                contraseña &&
                contraseña === confirmarContraseña &&
                calcularFortalezaContraseña(contraseña) >= 40 &&
                terminos;

            boton.disabled = !esValido;
            return esValido;
        }

        // Inicializar
        document.addEventListener('DOMContentLoaded', function() {
            const contraseñaInput = document.getElementById('password');
            const confirmarInput = document.getElementById('password_confirmation');
            const inputsFormulario = document.querySelectorAll('.form-input');
            const checkboxTerminos = document.getElementById('terms');

            // Event Listeners
            contraseñaInput.addEventListener('input', function() {
                actualizarIndicadorFortaleza(this.value);
                verificarCoincidenciaContraseñas();
                validarFormulario();
            });

            confirmarInput.addEventListener('input', function() {
                verificarCoincidenciaContraseñas();
                validarFormulario();
            });

            checkboxTerminos.addEventListener('change', validarFormulario);

            inputsFormulario.forEach(input => {
                input.addEventListener('input', validarFormulario);

                // Efecto de foco
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'scale(1.01)';
                });

                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'scale(1)';
                });
            });

            // Validar en la carga inicial
            validarFormulario();

            // Efecto hover para el contenedor
            const container = document.querySelector('.register-container');
            container.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });

            container.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });

            // Validación en tiempo real del email
            const emailInput = document.getElementById('email');
            emailInput.addEventListener('blur', function() {
                const email = this.value.trim();
                if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    this.style.borderColor = '#f87171';
                } else if (email) {
                    this.style.borderColor = 'rgba(255, 255, 255, 0.1)';
                }
            });

            // Envío del formulario con validación
            const formulario = document.getElementById('registerForm');
            formulario.addEventListener('submit', function(e) {
                if (!validarFormulario()) {
                    e.preventDefault();

                    // Resaltar campos inválidos
                    const campos = ['name', 'email', 'password', 'password_confirmation'];
                    campos.forEach(campoId => {
                        const campo = document.getElementById(campoId);
                        if (!campo.value.trim()) {
                            campo.style.borderColor = '#f87171';
                            campo.parentElement.style.animation = 'shake 0.5s';
                            setTimeout(() => {
                                campo.parentElement.style.animation = '';
                            }, 500);
                        }
                    });

                    // Verificar términos
                    if (!checkboxTerminos.checked) {
                        checkboxTerminos.nextElementSibling.style.borderColor = '#f87171';
                    }

                    return false;
                }

                // Mostrar estado de carga
                const boton = document.getElementById('registerButton');
                boton.classList.add('loading');
                boton.innerHTML = `
                    <svg class="button-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" stroke-dasharray="30" stroke-dashoffset="30">
                            <animate attributeName="stroke-dashoffset" values="30;0;30" dur="1.5s" repeatCount="indefinite" />
                        </circle>
                    </svg>
                    Creando cuenta...
                `;
            });

            // Restaurar color del border al escribir
            inputsFormulario.forEach(input => {
                input.addEventListener('input', function() {
                    this.style.borderColor = 'rgba(255, 255, 255, 0.1)';
                });
            });

            // Animación de shake para errores
            const style = document.createElement('style');
            style.textContent = `
                @keyframes shake {
                    0%, 100% { transform: translateX(0); }
                    10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
                    20%, 40%, 60%, 80% { transform: translateX(5px); }
                }
            `;
            document.head.appendChild(style);
        });

        // Sugerencias para contraseña segura
        function generarSugerenciaContraseña() {
            const caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*';
            let contraseña = '';
            for (let i = 0; i < 12; i++) {
                contraseña += caracteres.charAt(Math.floor(Math.random() * caracteres.length));
            }
            return contraseña;
        }

        // Opcional: Botón para generar contraseña
        document.addEventListener('DOMContentLoaded', function() {
            const contraseñaInput = document.getElementById('password');
            const sugerenciaBtn = document.createElement('button');
            sugerenciaBtn.type = 'button';
            sugerenciaBtn.innerHTML = 'Generar contraseña segura';
            sugerenciaBtn.style.cssText = `
                background: rgba(16, 185, 129, 0.1);
                color: var(--success-400);
                border: 1px solid rgba(16, 185, 129, 0.3);
                padding: 8px 12px;
                border-radius: 8px;
                font-size: 12px;
                cursor: pointer;
                margin-top: 8px;
                transition: all 0.3s;
                display: inline-block;
            `;
            sugerenciaBtn.addEventListener('mouseenter', function() {
                this.style.background = 'rgba(16, 185, 129, 0.2)';
                this.style.transform = 'translateY(-1px)';
            });
            sugerenciaBtn.addEventListener('mouseleave', function() {
                this.style.background = 'rgba(16, 185, 129, 0.1)';
                this.style.transform = 'translateY(0)';
            });
            sugerenciaBtn.addEventListener('click', function() {
                const nuevaContraseña = generarSugerenciaContraseña();
                contraseñaInput.value = nuevaContraseña;
                document.getElementById('password_confirmation').value = nuevaContraseña;
                actualizarIndicadorFortaleza(nuevaContraseña);
                verificarCoincidenciaContraseñas();
                validarFormulario();
            });

            // Insertar botón después del campo de contraseña
            const contraseñaGroup = contraseñaInput.closest('.form-group');
            if (contraseñaGroup) {
                contraseñaGroup.appendChild(sugerenciaBtn);
            }
        });
    </script>
</body>

</html>