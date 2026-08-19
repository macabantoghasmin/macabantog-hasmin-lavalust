<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hasmin's Profile</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background:
                radial-gradient(circle at top left, #ddd6fe 0, transparent 35%),
                radial-gradient(circle at bottom right, #f5d0fe 0, transparent 35%),
                #f8f7ff;
            color: #29213d;
        }

        nav {
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(255,255,255,0.88);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid #e9e2f8;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            color: #6d28d9;
        }

        .nav-links a {
            text-decoration: none;
            color: #5b556b;
            margin-left: 25px;
            font-weight: 600;
        }

        .nav-links a:hover {
            color: #7c3aed;
        }

        .page {
            max-width: 900px;
            margin: 55px auto;
            padding: 0 25px;
        }

        .profile-card {
            background: white;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 18px 45px rgba(50,30,80,0.10);
            border: 1px solid #eee8f8;
        }

        .profile-header {
            padding: 45px;
            text-align: center;
            background: linear-gradient(135deg, #7c3aed, #a855f7, #c084fc);
            color: white;
        }

        .avatar {
            width: 95px;
            height: 95px;
            margin: 0 auto 18px;
            border-radius: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,255,255,0.20);
            border: 2px solid rgba(255,255,255,0.5);
            font-size: 34px;
            font-weight: bold;
        }

        .profile-header h1 {
            font-size: 32px;
            margin-bottom: 8px;
        }

        .profile-header p {
            opacity: .9;
        }

        .details {
            padding: 35px;
        }

        .details h2 {
            margin-bottom: 22px;
            color: #392d4d;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .info {
            padding: 20px;
            border-radius: 16px;
            background: #faf9ff;
            border: 1px solid #eee8f8;
        }

        .label {
            display: block;
            color: #8a8298;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 7px;
        }

        .value {
            color: #392d4d;
            font-weight: bold;
            word-break: break-word;
        }

        .back {
            display: inline-block;
            margin-top: 25px;
            padding: 13px 22px;
            background: #7c3aed;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: bold;
            transition: .2s;
        }

        .back:hover {
            background: #6d28d9;
            transform: translateY(-2px);
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #8a8298;
            font-size: 13px;
        }

        @media (max-width: 650px) {
            .info-grid {
                grid-template-columns: 1fr;
            }

            .profile-header {
                padding: 35px 20px;
            }

            .details {
                padding: 25px;
            }
        }
    </style>
</head>

<body>

<nav>
    <div class="logo">Hasmin's Hub</div>

    <div class="nav-links">
        <a href="/student">Home</a>
        <a href="/student/profile">Profile</a>
    </div>
</nav>

<div class="page">

    <div class="profile-card">

        <div class="profile-header">

            <div class="avatar">HM</div>

            <h1>Hasmin A. Macabantog</h1>

            <p>BS Information Technology • 3rd Year • Section F6</p>

        </div>

        <div class="details">

            <h2>Personal & Academic Information</h2>

            <div class="info-grid">

                <div class="info">
                    <span class="label">Student ID</span>
                    <span class="value"><?= $student_id; ?></span>
                </div>

                <div class="info">
                    <span class="label">Full Name</span>
                    <span class="value"><?= $name; ?></span>
                </div>

                <div class="info">
                    <span class="label">Course</span>
                    <span class="value"><?= $course; ?></span>
                </div>

                <div class="info">
                    <span class="label">Year Level</span>
                    <span class="value"><?= $year; ?></span>
                </div>

                <div class="info">
                    <span class="label">Section</span>
                    <span class="value"><?= $section; ?></span>
                </div>

                <div class="info">
                    <span class="label">Email Address</span>
                    <span class="value"><?= $email; ?></span>
                </div>

            </div>

            <a class="back" href="/student">
                ← Back to Student Home
            </a>

        </div>

    </div>

</div>

<footer>
    © 2026 Hasmin's Student Hub • Built with LavaLust
</footer>

</body>
</html>