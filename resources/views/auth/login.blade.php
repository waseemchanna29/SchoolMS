<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sign in — Forco</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --brand: #4F46E5; --brand-dark: #3730A3; --brand-light: #EEF2FF;
            --gray-50: #F9FAFB; --gray-100: #F3F4F6; --gray-200: #E5E7EB;
            --gray-400: #9CA3AF; --gray-600: #4B5563; --gray-800: #1F2937;
            --red: #DC2626; --red-bg: #FEF2F2;
            --radius: 8px;
        }
        body {
            font-family: 'Inter', sans-serif; font-size: 14px; color: var(--gray-800);
            background: var(--gray-50); min-height: 100vh;
            display: flex; align-items: center; justify-content: center; padding: 24px;
        }
        .card {
            background: #fff; border: 1px solid var(--gray-200); border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,.08); width: 100%; max-width: 420px; padding: 40px;
        }
        .logo-wrap {
            display: flex; align-items: center; gap: 10px; margin-bottom: 32px; justify-content: center;
        }
        .logo-mark {
            width: 36px; height: 36px; background: var(--brand); border-radius: 10px;
            display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; font-size: 18px;
        }
        .logo-wrap span { font-weight: 700; font-size: 20px; }

        h1 { font-size: 22px; font-weight: 600; text-align: center; margin-bottom: 6px; }
        .subtitle { color: var(--gray-400); font-size: 13px; text-align: center; margin-bottom: 28px; }

        /* Google button */
        .btn-google {
            display: flex; align-items: center; justify-content: center; gap: 10px;
            width: 100%; padding: 11px 16px; border: 1px solid var(--gray-200); border-radius: var(--radius);
            background: #fff; color: var(--gray-800); font-size: 14px; font-weight: 500;
            text-decoration: none; cursor: pointer; transition: background .15s, border-color .15s;
            margin-bottom: 20px;
        }
        .btn-google:hover { background: var(--gray-50); border-color: var(--gray-400); }

        .divider {
            display: flex; align-items: center; gap: 12px; margin-bottom: 20px; color: var(--gray-400); font-size: 12px;
        }
        .divider::before, .divider::after { content: ''; flex: 1; height: 1px; background: var(--gray-200); }

        label { display: block; font-weight: 500; font-size: 13px; margin-bottom: 6px; }
        input[type="email"], input[type="password"] {
            width: 100%; padding: 10px 12px; border: 1px solid var(--gray-200); border-radius: var(--radius);
            font-size: 14px; font-family: inherit; color: var(--gray-800); outline: none;
            transition: border-color .15s, box-shadow .15s;
        }
        input:focus { border-color: var(--brand); box-shadow: 0 0 0 3px rgba(79,70,229,.12); }
        .form-group { margin-bottom: 16px; }

        .btn-primary {
            display: flex; align-items: center; justify-content: center; width: 100%;
            padding: 11px 16px; background: var(--brand); color: #fff; border: none;
            border-radius: var(--radius); font-size: 14px; font-weight: 600; cursor: pointer;
            transition: background .15s; margin-top: 20px;
        }
        .btn-primary:hover { background: var(--brand-dark); }

        .alert { padding: 10px 14px; border-radius: var(--radius); font-size: 13px; margin-bottom: 16px; }
        .alert-danger { background: var(--red-bg); color: var(--red); border: 1px solid #FECACA; }

        .footer-text { text-align: center; color: var(--gray-400); font-size: 12px; margin-top: 24px; }
        .footer-text a { color: var(--brand); font-weight: 500; text-decoration: none; }
        .footer-text a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo-wrap">
            <div class="logo-mark">F</div>
            <span>Forco</span>
        </div>

        <h1>Welcome back</h1>
        <p class="subtitle">Sign in to your account to continue</p>

        @if($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        {{-- Google sign-in --}}
        {{-- <a class="btn-google" href="{{ route('google.redirect') }}">
            <svg width="18" height="18" viewBox="0 0 256 262" xmlns="http://www.w3.org/2000/svg">
                <path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285f4"/>
                <path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34a853"/>
                <path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602z" fill="#fbbc05"/>
                <path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#eb4335"/>
            </svg>
            Continue with Google
        </a> --}}

        <div class="divider">or continue with email</div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="userEmail">Email address</label>
                <input type="email" id="userEmail" name="email" value="{{ old('email') }}" placeholder="you@example.com" required autocomplete="email">
            </div>
            <div class="form-group">
                <label for="userPassword">Password</label>
                <input type="password" id="userPassword" name="password" placeholder="••••••••" required autocomplete="current-password">
            </div>
            <button type="submit" class="btn-primary">Sign in</button>
        </form>

        {{-- <p class="footer-text" style="margin-top:16px;">
            Don't have an account? <a href="{{ route('google.redirect') }}">Sign up with Google</a>
        </p> --}}
    </div>
</body>
</html>
