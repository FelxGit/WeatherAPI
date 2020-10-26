<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href=" {{ mix('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->    
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    
    </head>
    <body>
        <div id="app">
            <app></app>
        </div>

        <script src="{{ mix('js/bootstrap.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>
        <noscript>
            This website relies on JavaScript, which you appear to have disabled. You will not be
            able to use many of this website's features without JavaScript enabled.
        </noscript>
    </body>
</html>
