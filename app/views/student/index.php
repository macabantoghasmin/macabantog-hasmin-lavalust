<?php 
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');  
?>  
  
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Student Home</title>  
  
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
            max-width: 850px;  
            background: #ffffff;  
            padding: 55px 45px;  
            border-radius: 24px;  
            text-align: center;  
            box-shadow: 0 15px 40px rgba(76, 29, 149, 0.15);
            border: 1px solid #e9d5ff;
        }

        .icon {
            width: 75px;
            height: 75px;
            margin: 0 auto 25px;
            background: #ede9fe;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
        }
  
        h1 {  
            color: #5b21b6;  
            font-size: 38px;
            margin-bottom: 15px;
        }  
  
        p {  
            color: #6b7280;  
            font-size: 17px;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }
  
        a {  
            display: inline-block;  
            padding: 13px 25px;  
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

        .profile {
            background: #f3f4f6;
            color: #5b21b6;
            box-shadow: none;
        }

        .profile:hover {
            background: #ede9fe;
        }

        .footer {
            margin-top: 30px;
            color: #9ca3af;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            body {
                padding: 20px;
            }

            .container {
                padding: 40px 20px;
            }

            h1 {
                font-size: 30px;
            }

            p {
                font-size: 16px;
            }

            .buttons {
                flex-direction: column;
            }

            a {
                width: 100%;
            }
        }
    </style>  
</head>  
  
<body>  
  
<div class="container">  

    <div class="icon">🎓</div>
  
    <h1>Welcome to My Student Hub</h1>  
  
    <p>  
        Welcome to my LavaLust Student Information Page.  
    </p>  

    <div class="buttons">
  
        <a href="/student">
    Home
    </a>

     <a href="/student/profile">
    Student Profile
    </a> 

    </div>

    <div class="footer">
        LavaLust Student Information System
    </div>
  
</div>  
  
</body>  
</html>