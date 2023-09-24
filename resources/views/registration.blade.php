<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'enregistrement'</title>
    <style>
        body {
            font-family: "Trebuchet MS", Helvetica, sans-serif;
            background-color: #f4f4f4;
            background-image: url(https://media.licdn.com/dms/image/D4E05AQFSuyBGJrlQRw/videocover-high/0/1694078936888?e=2147483647&v=beta&t=GK9gIA5aefnfxqMYQ47fO6M3oXvyE8tUGHbUUnST05s);
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            width: 50%;
            color: #B62D2D;
            padding: 10px;
            margin: 0 auto;
            
        }

        p {
            text-align: center;
        }

        h1,
        p,
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="num_tel"],
        input[type="email"],
        input[type="password"],
        textarea {
            width: 90%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"] {
            background-color: #13579f;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #850e0e;
        }
    </style>
</head>
<body>
    <h1>S'inscrire</h1>
    <p>Remplissez le formulaire ci-dessous pour vous enregistrer :</p>

    <form action="/login" method="POST">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <label for="password">Confirmez le Mot de passe :</label>
            <input type="password" id="password" name="password" required>
        </div>


        <button type="submit">Créer le Compte</button>
    </form>
</body>
</html>

