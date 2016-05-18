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
                <div class="title">Registreren</div>

                <form method="POST" action="/auth/register">
                    {!! csrf_field() !!}

                    <div>
                        Name
                        <input type="text" name="name" value="{{old('name') }}">
                    </div>

                    <div>
                        Username
                        <input type="text" name="username">
                    </div>

                    <div>
                        Email
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div>
                        City
                        <input type="text" name="city" value="{{ old('city') }}">
                    </div>

                    <div>
                        Password
                        <input type="password" name="password">
                    </div>

                    <div>
                        Confirm Password
                        <input type="password" name="password_confirmation">
                    </div>

                    <div>
                        <button type="submit">Register</button>
                    </div>

                </form>
                
            </div>
        </div>
    </body>
</html>
