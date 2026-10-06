<?php
// Livello 2: Credenziali definite direttamente in PHP (in chiaro)
$username_corretto = "admin";
$password_corretta = "segreto123";

$messaggio = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_inserito = $_POST['username'] ?? '';
    $pass_inserita = $_POST['password'] ?? '';

    // Verifica delle credenziali
    if ($user_inserito === $username_corretto && $pass_inserita === $password_corretta) {
        $messaggio = "<div class='alert success'>Accesso riuscito! Benvenuto, $user_inserito! 🎉</div>";
    } else {
        $messaggio = "<div class='alert error'>Username o password errati. Riprova! ❌</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Livello 2</title>
    <style>
        /* Stile grafico curato e moderno */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .login-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 320px;
            text-align: center;
        }
        h2 {
            margin-bottom: 25px;
            color: #333;
        }
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #666;
            font-size: 14px;
            font-weight: 600;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 14px;
            outline: none;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #667eea;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #667eea;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
        }
        button:hover {
            background: #5a6fd6;
        }
        .alert {
            margin-top: 20px;
            padding: 10px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
        }
        .success {
            background: #d4edda;
            color: #155724;
        }
        .error {
            background: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Area Riservata 🔒</h2>
        <form method="POST" action="">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Accedi</button>
        </form>
        <?php echo $messaggio; ?>
    </div>
</body>
</html>