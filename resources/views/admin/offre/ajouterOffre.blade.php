<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Offre</title>
</head>
<body>

  <div>
    <h1>Ajouter d'Offre</h1>
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
          <label for="typeOffre">Type d'offre</label>
          <input id="typeOffre" class="form-control" name="typeOffre" type="text">
        </div>
        <div class="form-group">
          <label for="offre">Offre</label>
          <input id="offre" class="form-control" name="offre" type="text">
        </div>
        <div class="form-group">
          <label for="note">La note de service</label>
          <input id="note" class="form-control" name="note" type="text">
        </div>
        <div class="form-group">
          <label for="dateDiffuse">Secteur d'activite</label>
          <input id="dateDiffuse" class="form-control" name="dateDiffuse" type="text">
        </div>
        <div class="form-group">
          <label for="secteurActivite">Secteur d'activite</label>
          <input id="secteurActivite" class="form-control" name="secteurActivite" type="text">
        </div>
        <input class="btn btn-primary" type="submit" value="Submit">
        <input type="hidden" name="" value="{{$partenaire ->idPartenaire}}">
      </fieldset>
    </form>
  </div>
</body>
</html>