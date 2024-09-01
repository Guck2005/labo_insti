<html>
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- plugins:css -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/vendor.bundle.base.css">
        <link rel="stylesheet" href="css/vendor.bundle.addons.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="images/favicon.png" />

        <link rel="stylesheet" href="style.css">

        {{-- bootstrap en ligne --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    </head>

<body>
        @include("layouts.admin.headerHorizontal")
    <!-- Sidebar -->
      @include("layouts.admin.headerVertical")
      <div class="antialiased bg-gray-50 dark:bg-gray-900">

    <main class="p-4 md:ml-64 h-auto pt-10">
      @yield("page-content")
    </main>
  </div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="js/vendor.bundle.base.js"></script>
<script src="js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/template.js"></script>
<script src="js/settings.js"></script>
<script src="js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="js/data-table.js"></script>
<!-- End custom js for this page-->




<script>
  // Ajoutez un gestionnaire d'événement pour le bouton
  document.getElementById("redirectionButton").onclick = function() {
      // Effectue la redirection vers la page souhaitée
      window.location.href = "{{URL::to('/edit_materiel_location')}}";
  };
</script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
