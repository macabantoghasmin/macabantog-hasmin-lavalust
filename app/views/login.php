
<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

$error = $error ?? '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Product Management</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f7f5fc;
            color: #211936;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }

        .login-container {
            width: 100%;
            max-width: 440px;
        }

        .login-card {
            background: white;
            border: 1px solid #e6dff2;
            border-radius: 18px;
            padding: 42px;
            box-shadow: 0 8px 25px rgba(86, 53, 140, 0.06);
        }

        .logo {
            width: 64px;
            height: 64px;
            background: #7044c4;
            color: white;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            font-weight: bold;
            margin: 0 auto 24px;
        }

        h1 {
            text-align: center;
            font-family: Georgia, serif;
            font-size: 32px;
            margin-bottom: 10px;
            color: #211936;
        }

        .subtitle {
            text-align: center;
            color: #756b88;
            font-size: 15px;
            margin-bottom: 30px;
        }

        .error {
            background: #fff0f1;
            color: #c62845;
            border: 1px solid #f4c5ce;
            padding: 12px 14px;
            border-radius: 10px;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            color: #4e4264;
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 9px;
        }

        input {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #ddd5eb;
            border-radius: 10px;
            background: #fff;
            color: #211936;
            font-size: 15px;
            outline: none;
            transition: border-color 0.2s;
        }

        input:focus {
            border-color: #7044c4;
            box-shadow: 0 0 0 3px rgba(112, 68, 196, 0.10);
        }

        input::placeholder {
            color: #aaa1b8;
        }

        .login-button {
            width: 100%;
            padding: 14px;
            background: #7044c4;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 8px;
            transition: background 0.2s;
        }

        .login-button:hover {
            background: #5d35aa;
        }

        .footer-text {
            text-align: center;
            color: #8a809a;
            font-size: 13px;
            margin-top: 28px;
        }

        @media (max-width: 480px) {

            .login-card {
                padding: 28px 22px;
            }

            h1 {
                font-size: 28px;
            }

        }

    </style>
</head>

<body>

    <div class="login-container">

        <div class="login-card">

            <div class="logo">P</div>

            <h1>Welcome Back</h1>

            <p class="subtitle">
                Login to your account
            </p>

            <?php if (!empty($error)): ?>

                <div class="error">
                    <?= htmlspecialchars($error) ?>
                </div>

            <?php endif; ?>

            <form method="POST" action="<?= site_url('login') ?>">

                <div class="form-group">

                    <label for="username">
                        Username
                    </label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Enter username"
                        autocomplete="username"
                        required
                    >

                </div>

                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter password"
                        autocomplete="current-password"
                        required
                    >

                </div>

                <button
                    type="submit"
                    class="login-button"
                >
                    Login
                </button>

            </form>

            <p class="footer-text">
                Product Management System
            </p>

        </div>

    </div>

</body>
</html>