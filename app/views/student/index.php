<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hasmin's Student Hub</title>

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
            width: 100%;
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(255,255,255,0.85);
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

        .hero {
            max-width: 1100px;
            margin: 55px auto 25px;
            padding: 0 25px;
        }

        .hero-card {
            padding: 45px;
            border-radius: 28px;
            background: linear-gradient(135deg, #7c3aed, #a855f7, #c084fc);
            color: white;
            box-shadow: 0 20px 45px rgba(124,58,237,0.25);
        }

        .tag {
            display: inline-block;
            padding: 8px 14px;
            background: rgba(255,255,255,0.18);
            border-radius: 50px;
            font-size: 13px;
            margin-bottom: 18px;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 12px;
        }

        .hero p {
            font-size: 17px;
            line-height: 1.7;
            max-width: 650px;
            opacity: .92;
        }

        .content {
            max-width: 1100px;
            margin: 25px auto 60px;
            padding: 0 25px;
        }

        .section-title {
            margin-bottom: 18px;
            font-size: 24px;
        }

        .profile-card {
            background: white;
            border-radius: 24px;
            padding: 30px;
            box-shadow: 0 12px 35px rgba(50,30,80,0.08);
            border: 1px solid #eee8f8;
        }

        .profile-top {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 28px;
        }

        .avatar {
            width: 75px;
            height: 75px;
            border-radius: 22px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #ede9fe;
            color: #6d28d9;
            font-size: 27px;
            font-weight: bold;
        }

        .profile-top h2 {
            margin-bottom: 5px;
        }

        .profile-top p {
            color: #777083;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .info {
            padding: 18px;
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
            margin-bottom: 6px;
        }

        .value {
            font-weight: bold;
            color: #392d4d;
        }

        .button {
            display: inline-block;
            margin-top: 25px;
            padding: 13px 22px;
            border-radius: 12px;
            background: #7c3aed;
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: .2s;
        }

        .button:hover {
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
            .hero h1 {
                font-size: 31px;
            }

            .hero-card {
                padding: 30px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            nav {
                padding: 18px 5%;
            }

            .nav-links a {
                margin-left: 10px;
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

<section class="hero">
    <div class="hero-card">
        <span class="tag">LAVALUST • STUDENT INFORMATION SYSTEM</span>

        <h1>Welcome, Hasmin! 👋</h1>

        <p>
            Welcome to my personal Student Information Page.
            This space contains my academic information and student profile.
        </p>
    </div>
</section>

<section class="content">

    <h2 class="section-title">Student Overview</h2>

    <div class="profile-card">

        <div class="profile-top">

            <div class="avatar">HM</div>

            <div>
                <h2>Hasmin A. Macabantog</h2>
                <p>BS Information Technology • 3rd Year • F6</p>
            </div>

        </div>

        <div class="info-grid">

            <div class="info">
                <span class="label">Student ID</span>
                <span class="value">MCC2023-01228</span>
            </div>

            <div class="info">
                <span class="label">Course</span>
                <span class="value">BS Information Technology</span>
            </div>

            <div class="info">
                <span class="label">Year Level</span>
                <span class="value">3rd Year</span>
            </div>

            <div class="info">
                <span class="label">Section</span>
                <span class="value">F6</span>
            </div>

            <div class="info">
                <span class="label">Email</span>
                <span class="value">hasminambola33@gmail.com</span>
            </div>

        </div>

        <a class="button" href="/student/profile">
            View Full Profile →
        </a>

    </div>

</section>

<footer>
    © 2026 Hasmin's Student Hub • Built with LavaLust
</footer>

</body>
</html>