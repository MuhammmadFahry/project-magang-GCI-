<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            background: url('https://png.pngtree.com/thumb_back/fh260/background/20230526/pngtree-an-old-bookcase-in-a-library-image_2642908.jpg') no-repeat center center fixed; 
            background-size: cover;
        }

        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5); /* Optional: adds a dark overlay for better readability */
        }

        .register-box {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            width: 300px;
        }

        .register-box h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .input-box {
            position: relative;
            margin-bottom: 20px;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            background: transparent;
            border: none;
            border-bottom: 1px solid #333;
            outline: none;
            color: #333;
            font-size: 16px;
        }

        .input-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #333;
            pointer-events: none;
            transition: 0.5s;
        }

        .input-box input:focus ~ label,
        .input-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: #03a9f4;
            font-size: 12px;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            background: #03a9f4;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #0288d1;
        }

        .login-link {
            display: block;
            margin-top: 15px;
            color: #03a9f4;
            text-decoration: none;
            font-size: 14px;
        }

        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-box">
            <h2>Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-box">
                    <input type="text" name="username" value="{{ old('username') }}" required>
                    <label>Username</label>
                </div>
                @error('username')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror

                <div class="input-box">
                    <input type="password" name="password" id="password" required>
                    <label>Password</label>
                </div>
                @error('password')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror

                <div class="input-box">
                    <input type="password" name="password_confirmation" id="password-confirm" required>
                    <label>Confirm Password</label>
                </div>

                <button type="submit">Register</button>
            </form>
            <a href="{{ route('login') }}" class="login-link">Already have an account? Login</a>
        </div>
    </div>
</body>
</html>
