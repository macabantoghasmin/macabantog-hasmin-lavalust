<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f3ff;
            margin: 0;
            padding: 50px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.10);
        }

        h1 {
            text-align: center;
            color: #7c3aed;
            margin-bottom: 30px;
        }

        .info {
            padding: 15px;
            margin: 10px 0;
            background: #f5f3ff;
            border-radius: 8px;
        }

        .label {
            font-weight: bold;
            color: #7c3aed;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            background: #7c3aed;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Student Profile</h1>

    <div class="info">
        <span class="label">Student ID:</span>
        <?= $student_id; ?>
    </div>

    <div class="info">
        <span class="label">Name:</span>
        <?= $name; ?>
    </div>

    <div class="info">
        <span class="label">Course:</span>
        <?= $course; ?>
    </div>

    <div class="info">
        <span class="label">Year:</span>
        <?= $year; ?>
    </div>

    <div class="info">
        <span class="label">Section:</span>
        <?= $section; ?>
    </div>

    <div class="info">
        <span class="label">Email:</span>
        <?= $email; ?>
    </div>

    <a href="/LavaLust-dev-v4/student">
        ← Back to Student Home
    </a>

</div>

</body>
</html>