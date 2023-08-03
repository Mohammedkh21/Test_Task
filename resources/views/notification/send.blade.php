<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    </head>
    <body class="antialiased"
          style="display: flex;align-items : center;flex-direction: column;gap: 2em ;" >
        <div>
            select user
        </div>
        <div>
            <select name="user" id="">
                @foreach($users as $user)
                    <option  value="{{ $user->id }}" >{{ $user->name }}</option >
                @endforeach
            </select>
        </div>
        <label for="inp">
            content : <input type="text">
        </label>
        <div>
            <button id="send">
                send
            </button>
        </div>
    </body>
    <script>
        $(document).on('click', '#send', function (e) {
            user = $('select').val();
            content = $('input').val();

            $.ajax({
                type: 'post',
                url: "{{ route('notifications.send') }}",
                data: {'_token':"{{csrf_token()}}" , user , content },
                success: function (data) {
                    console.log(data)
                }, error: function (reject) {
                    console.log(reject)
                }
            });

        });
    </script>
</html>
