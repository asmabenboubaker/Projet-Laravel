<!DOCTYPE html>
<html>
<head>
    <title>Formulaire</title>
</head>
<body>
    <form method="POST" action="{{ route('traiterFormulaire') }}">
        @csrf 
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
        <br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
