<html>
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
</html>

<body>
<div class="antialiased bg-gray-50 dark:bg-gray-900">
        @include("layouts.admin.headerHorizontal")
    <!-- Sidebar -->
  @include("layouts.admin.headerVertical")
    <main class="p-4 md:ml-64 h-auto pt-20">
@yield("page-content")
    </main>
  </div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
