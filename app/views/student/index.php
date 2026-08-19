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
        body {
            font-family: Arial, sans-serif;
            background: #f5f3ff;
            margin: 0;
            padding: 50px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.10);
        }

        h1 {
            color: #7c3aed;
        }

        p {
            color: #555;
            font-size: 18px;
        }

        a {
            display: inline-block;
            margin: 10px;
            padding: 12px 20px;
            background: #7c3aed;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        a:hover {
            background: #5b21b6;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Welcome to My Student Hub</h1>

    <p>
        Welcome to my LavaLust Student Information Page.
    </p>

   <a href="/LavaLust-dev-v4/student">
    Home
</a>

<a href="/LavaLust-dev-v4/student/profile">
    Student Profile
</a>

</div>

</body>
</html>