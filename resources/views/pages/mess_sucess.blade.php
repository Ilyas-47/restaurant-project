<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message de Succès</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f8ff;
        }
        .success-container {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 10px;
            padding: 40px;
            text-align: center;
            width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .success-icon {
            font-size: 50px;
            margin-bottom: 20px;
        }
        .success-text {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .btn-back {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .btn-back:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-icon">✅</div>
        <div class="success-text">Les donnees a été réalisée avec succès.</div>
        <a href="{{asset('form_plat')}}" class="btn-back">Revenir à la page principale</a>
    </div>
</body>
</html>

