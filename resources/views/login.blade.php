<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <style>
        body {
            font-family: "Trebuchet MS", Helvetica, sans-serif;
            background-color: #f4f4f4;
            background-image: url(https://media.licdn.com/dms/image/D4E05AQFSuyBGJrlQRw/videocover-high/0/1694078936888?e=2147483647&v=beta&t=GK9gIA5aefnfxqMYQ47fO6M3oXvyE8tUGHbUUnST05s);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            background-color: #fafafc;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(236, 230, 230, 0.1);
            text-align: center;
        }

        h1 {
            color: #B62D2D;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 40%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"] {
            background-color: #1c31d0;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #B62D2D;
        }

        .forgot-password {
            margin-top: 10px;
        }

        .register-button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>S'identifier</h1>
        <form method="post" action="visitor">
            @csrf
            <div>
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" required>
            </div>
    
            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
    
            <button type="submit">Se connecter</button>
        </form>

        <div class="forgot-password">
            <a href="mot_de_passe_oublie.php">Mot de passe oublié?</a>
        </div>

        <div class="register-button">
            <a href="/registration">Nouvel utilisateur? S'inscrire ici</a>
        </div>
    </div>
</body>
</html>
