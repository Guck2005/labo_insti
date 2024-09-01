<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Recuperation des information du partenaire</h1>
    <div>
        <div>
            <em>Adresse: {{ $partenaire ->adresse }}
            <em>Nom du partenaire:{{$partenaire->nomPartenaire}}</em>
            <em>Adresse: {{ $partenaire ->adresse }}</em>
            <em>Contact: {{ $partenaire ->contact }}</em>
            <em>Secteur d'activité: {{ $partenaire ->secteurActivite }}</em>
            <em>Site web: {{ $partenaire ->siteWeb }}</em>
            <em>Adresse mail: {{ $partenaire ->mail }}</em>
            <button type="submit">
            <a href="#">Modifier</a>
            </button> 
            <button type="submit">
                <a href="#">Supprimer</a>
            </button> 
        </div> 
    </div>
</body>
</html>