<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ asset(mix('/css/app.css')) }}" rel="stylesheet" />
    <script src="{{ asset(mix('/js/app.js')) }}" defer></script>

    <style>
      body {
        overflow: hidden; /* Hide scrollbars */
      }  
    </style>

  </head>

  <body>
    @inertia
  </body>
  
</html>