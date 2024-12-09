<?php
session_start();

// Hardcode username dan password untuk contoh
$valid_username = "admin";
$valid_password = "12345";

// Jika form dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek kredensial
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        header('Location: index.php'); // Redirect ke halaman utama
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Warung Online</title>
    <style>
        /* Gaya dasar halaman */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container h2 {
            font-size: 2em;
            color: #333;
            margin-bottom: 20px;
        }

        .login-container label {
            font-size: 1em;
            color: #555;
            text-align: left;
            display: block;
            margin-bottom: 5px;
        }

        .login-container input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            background-color: #f9f9f9;
            transition: border-color 0.3s ease;
        }

        .login-container input:focus {
            border-color: #28a745; /* Warna border saat fokus */
        }

        .login-container button {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #218838;
        }

        .login-container .error {
            color: red;
            font-size: 0.9em;
            margin-bottom: 15px;
            text-align: center;
        }

        .login-container .footer {
            font-size: 0.9em;
            margin-top: 20px;
            color: #888;
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 768px) {
            .login-container {
                padding: 20px;
                width: 90%;
            }

            .login-container h2 {
                font-size: 1.8em;
            }

            .login-container input,
            .login-container button {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (!empty($error)) : ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <div class="footer">
            <p>&copy; 2024 Warung Online</p>
        </div>
    </div>
</body>
</html>
