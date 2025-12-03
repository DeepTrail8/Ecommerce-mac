<!DOCTYPE html>
<html lang="en">
<head>
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    @vite(["resources/css/app.css", "resources/js/app.js"]);

</head>
<body >
   @include('backend.layouts.sidebar');

     @yield('body')

</body>
</html>