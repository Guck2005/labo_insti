<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <div>
    <h1>Ajouter Partenaire</h1>
    @if (Session::has('status'))
         <div class="alert alert-success">
             {{Session::get('status')}}
         </div>
         @endif
         @if (count($errors)>0)
         <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
    @endif
    <form class="cmxform" id="signupForm" method="post" action="{{route('sauverPartenaire')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
      <fieldset>
        <div class="form-group">
          <label for="nomPartenaire">Nom de l'entreprise</label>
          <input id="nomPartenaire" value="{{ $partenaire ->nomPartenaire }}" class="form-control" name="nomPartenaire" type="text">
        </div>
        <div class="form-group">
          <label for="adresse">Adresse</label>
          <input id="adresse" value="{{ $partenaire ->adresse }}" class="form-control" name="adresse" type="text">
        </div>
        <div class="form-group">
          <label for="contact">Contact</label>
          <input id="contact" value="{{ $partenaire ->contact }}" class="form-control" name="contact" type="text">
        </div>
        <div class="form-group">
          <label for="secteurActivite">Secteur d'activite</label>
          <input id="secteurActivite" value="{{ $partenaire ->secteurActivite }}" class="form-control" name="secteurActivite" type="text">
        </div>
        <div class="form-group">
          <label for="siteWeb">Lien du site web de l'entreprise</label>
          <input id="siteWeb" value="{{ $partenaire ->siteWeb }}" class="form-control" name="siteWeb" type="text">
        </div>
        <div class="form-group">
          <label for="mail">Email</label>
          <input id="mail" value="{{ $partenaire ->mail }}" class="form-control" name="mail" type="mail">
        </div>
        <div class="form-group">
          <label for="imagePartenaire">Entre l'image de profile de l'entreprise</label>
          <input id="imagePartenaire" value="{{ $partenaire ->imagePartenaire }}" class="form-control" name="imagePartenaire" type="file">
        </div>
        <input class="btn btn-primary" type="submit" value="Submit">
      </fieldset>
    </form>
  </div>
</body>
</html>