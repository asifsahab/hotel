<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>404 - Page Not Found</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .error-container {
            text-align: center;
        }

        h1 {
            font-size: 6rem;
            margin: 0;
            color: #ff0000;
        }

        p {
            font-size: 1.5rem;
        }

        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="error-container">
        <h1>404</h1>
        <p>Page Not Found BB</p>
        <a href="{{ route('index') }}" class="btn-back">Back to Home</a>
    </div>
</body>

</html>
