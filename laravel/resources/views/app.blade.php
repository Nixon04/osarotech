<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @if(app()->environment('production'))
    @vite(['resources/js/app.js', 'resources/js/Pages/front_components/asset/app.css', 'resources/js/Pages/front_components/asset/media.css'])
    #endif
    @inertiaHead 
  </head>
  <body>
    @inertia
  </body>