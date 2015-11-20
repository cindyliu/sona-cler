<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CLER @ HBS</title>
        <link rel="shortcut icon" href="hbs-logo.png">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="hbs-cler-header">
            <h4>Harvard Business School Computer Lab for Experimental Research</h4>
            <a href="mailto:{{ env('APP_WEBMASTER_EMAIL','cler@hbs.edu') }}" role="button">
                <p>
                    <span class='glyphicon glyphicon-send'></span>
                </p>
            </a>
        </div>

        @yield('sidebar')
        @yield('page-header')
        @yield('messages')

        <div id="main-content" class="container">
            @yield('content')
        </div>

        @yield('page-footer')

        @if (env('APP_DEBUG') == TRUE)
            <div id="dev-flair">
                DEV
            </div>
        @endif

    </body>
</html>
