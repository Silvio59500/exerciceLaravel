<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="/contact">
    @csrf
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
    </div>
    <div>
        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="objet">Objet :</label>
        <input type="text" id="objet" name="objet" required>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>
    </div>
    <button type="submit">Envoyer</button>
</form>

</body>
</html>


