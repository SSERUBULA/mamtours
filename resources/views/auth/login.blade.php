<x-guest-layout>
    <style>
        body {
            background-color: #b3b0b0ff;;
            font-family: 'Poppins', sans-serif;
        }

        .login-card {
            background: gray;
            border-radius: 16px;
            padding: 40px 35px;
            box-shadow: 0 8px 20px rgba(4, 0, 0, 0.15);
            width: 100%;
            max-width: 420px;
            margin: 80px auto;
        }

        .login-title {
            text-align: center;
            font-weight: 700;
            color: #000505ff;
            margin-bottom: 25px;
            font-size: 1.6rem;
            text-transform: uppercase;
        }

        label {
            font-weight: 500;
            color: #070000ff;
        }

        input {
            border-radius: 8px;
            border: 1px solid #ccc;
            width: 100%;
            padding: 10px 12px;
            margin-top: 5px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        input:focus {
            border-color: #0d47a1;
            outline: none;
            box-shadow: 0 0 0 2px rgba(13, 71, 161, 0.2);
        }

        .btn-primary {
            width: 100%;
            background: #112f88ff;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background: #1565c0;
        }

        .links {
            text-align: center;
            margin-top: 10px;
        }

        .links a {
            color: #0d47a1;
            font-weight: 500;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }
    </style>

    <div class="login-card">
        <!-- ✅ This is the fixed heading -->
        <h2 class="login-title">MAM Tours and Travels Admin Login</h2>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 text-red-600" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />
            </div>

            <!-- Password -->
            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mb-4">
                <input id="remember_me" type="checkbox" class="mr-2" name="remember">
                <label for="remember_me">Remember me</label>
            </div>

            <button type="submit" class="btn-primary">
                Log in
            </button>

            <div class="links">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                @endif
            </div>
        </form>
    </div>
</x-guest-layout>
