<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('https://i.ibb.co/ZB0wJTg/landscape-photography-of-seashore-under-cumulus-clouds.jpg');
            background-size: cover;
        }
        .logo {
            width: 4rem;
            height: 4rem;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('https://doy.tech/wp-content/uploads/doy-icon-512x.png');
            background-size: contain;
            background-repeat: no-repeat;
          box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <div class="logo">
        <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
            <!-- The Laravel documentation SVG logo -->
            <g>
                <!-- Paths and other SVG components for the Laravel logo -->
            </g>
        </svg>
    </div>
</body>
</html>
