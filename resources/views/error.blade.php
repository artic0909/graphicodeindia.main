<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1A2238;
            color: white;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .error-text {
            font-size: 9rem;
            font-weight: 800;
            letter-spacing: 5px;
        }

        .badge-custom {
            background-color: #FF6A3D;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            transform: rotate(12deg);
            display: inline-block;
        }

        .btn-custom {
            position: relative;
            display: inline-block;
            font-size: 1rem;
            font-weight: 500;
            color: #FF6A3D;
            text-decoration: none;
            padding: 10px 30px;
            border: 2px solid #FF6A3D;
            background-color: transparent;
            transition: all 0.3s;
        }

        .btn-custom:hover {
            background-color: #FF6A3D;
            color: white;
        }
    </style>
</head>

<body>
    <h1 class="error-text">404</h1>
    <div class="badge-custom">Page Not Found</div>
    <a href="/" class="btn btn-custom mt-4">Go Home</a>
</body>

</html>