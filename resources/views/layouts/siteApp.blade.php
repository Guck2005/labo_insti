<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Application de Laboratoire</title>
    
</head>
<body>
    <header>
        <a href="/">Accueil</a>
    </header>

    <main>
        @yield('content')
        
    </main>

    <footer>
        <!-- Ajoutez le pied de page ici -->
    </footer>
    
</body>
</html>
