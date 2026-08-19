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
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body { 
            font-family: Arial, sans-serif; 
            min-height: 100vh;
            background: linear-gradient(135deg, #f5f3ff, #ede9fe, #faf5ff);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        } 
 
        .container { 
            width: 100%;
            max-width: 750px; 
            background: #ffffff; 
            padding: 45px; 
            border-radius: 24px; 
            box-shadow: 0 15px 40px rgba(76, 29, 149, 0.15);
            border: 1px solid #e9d5ff;
        } 

        .profile-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: #ede9fe;
            color: #7c3aed;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 35px;
        }
 
        h1 { 
            text-align: center; 
            color: #5b21b6; 
            font-size: 34px;
            margin-bottom: 30px; 
        } 

        .info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 17px 20px; 
            margin: 12px 0; 
            background: #faf9ff;
            border: 1px solid #ede9fe;
            border-radius: 12px;
            transition: 0.3s ease;
        }

        .info:hover {
            background: #f5f3ff;
            border-color: #ddd6fe;
            transform: translateX(4px);
        }
 
        .label { 
            font-weight: bold; 
            color: #7c3aed; 
        }

        .value {
            color: #374151;
            text-align: right;
        }
 
        a { 
            display: block;
            width: fit-content;
            margin: 30px auto 0; 
            padding: 13px 24px; 
            background: #7c3aed; 
            color: white; 
            text-decoration: none; 
            border-radius: 10px;
            font-weight: bold;
            transition: 0.3s ease;
            box-shadow: 0 5px 12px rgba(124, 58, 237, 0.20);
        } 

        a:hover {
            background: #5b21b6;
            transform: translateY(-3px);
            box-shadow: 0 8px 18px rgba(91, 33, 182, 0.25);
        }

        @media (max-width: 600px) {
            body {
                padding: 20px;
            }

            .container {
                padding: 35px 20px;
            }

            h1 {
                font-size: 28px;
            }

            .info {
                flex-direction: column;
                align-items: flex-start;
                gap: 6px;
            }

            .value {
                text-align: left;
                word-break: break-word;
            }

            a {
                width: 100%;
                text-align: center;
            }
        }
    </style> 
</head> 
 
<body> 
 
<div class="container"> 

    <div class="profile-icon">👤</div>
 
    <h1>Student Profile</h1> 
 
    <div class="info"> 
        <span class="label">Student ID</span> 
        <span class="value"><?= $student_id; ?></span> 
    </div> 
 
    <div class="info"> 
        <span class="label">Name</span> 
        <span class="value"><?= $name; ?></span> 
    </div> 
 
    <div class="info"> 
        <span class="label">Course</span> 
        <span class="value"><?= $course; ?></span> 
    </div> 
 
    <div class="info"> 
        <span class="label">Year</span> 
        <span class="value"><?= $year; ?></span> 
    </div> 
 
    <div class="info"> 
        <span class="label">Section</span> 
        <span class="value"><?= $section; ?></span> 
    </div> 
 
    <div class="info"> 
        <span class="label">Email</span> 
        <span class="value"><?= $email; ?></span> 
    </div> 
 
    <a href="/student">
    ← Back to Student Home
    </a>
 
</div> 
 
</body> 
</html>