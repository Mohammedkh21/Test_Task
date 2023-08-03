<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <style>
            #notification {
                display: flex;
                flex-direction: column;
                gap: 1em;
            }
            #notification > div {
                border: 1px solid black ;
                padding: 1em
            }
        </style>
    </head>
    <body class="antialiased" style="display: flex;flex-direction: column;align-items: center">
        <h1>
            notification
        </h1>
        <div href="#" id="notification" >


        </div>

    </body>
    @vite('resources/js/app.js')
    <script >
        var appendTo = (content)=>{
            return `
             <div>
                <h5>content : </h5>
                <p>${content}</p>
            </div>
            `
        }
        $(document).ready(function (){
            window.Echo.private('App.Models.User.{{ auth()->id() }}')
                .notification((notification) => {
                    $('#notification').prepend(appendTo(notification.content))
                });
        })

    </script>
</html>
