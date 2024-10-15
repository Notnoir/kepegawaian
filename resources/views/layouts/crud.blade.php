<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"/>
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  @vite('resources/css/app.css')
</head>
<body>

    <!-- This is an example component -->
      
      <div class="py-4 text-gray-700 bg-gray-200 h-screen w-screen">
        @yield('content')
      </div>

      @include('sweetalert::alert')
</body>
</html>