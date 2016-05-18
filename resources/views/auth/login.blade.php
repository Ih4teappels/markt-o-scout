<!DOCTYPE html>
<html>
    <head>
        <title>Markt-o-Scout</title>
        <link rel="stylesheet" href="../style/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Inloggen</div>
                <form method="POST" action="/auth/login">
                    {!! csrf_field() !!}

                    <div>
                        Email
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div>
                        Password
                        <input type="password" name="password" id="password">
                    </div>
                    <div>
                        <input type="checkbox" name="remember"> Remember Me
                    </div>

                    <div>
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
