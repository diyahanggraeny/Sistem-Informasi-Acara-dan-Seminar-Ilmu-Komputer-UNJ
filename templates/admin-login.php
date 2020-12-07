<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../static/css/main.css">
    <link rel="stylesheet" href="../static/css/materialize.css">
</head>
<body>
    <main class="white">
        <div class="container">
            <h3 class="center typo-1"><b>ADMIN LOGIN</b></h3>
            <div class="row">
                <div class="center col s12 m6 offset-m3 l6 offset-l3">
                    <i class="center large material-icons icon-acc">account_circle</i>
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="input-field col s12 m6 offset-m3 l6 offset-l3">
                        <input id="username" type="text" class="validate">
                        <label for="username">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 offset-m3 l6 offset-l3">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="center col s12 m6 offset-m3 l6 offset-l3">
                        <button class="btn waves-effect waves-light black-text" type="submit" name="action"><b>LOGIN</b>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>    

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../static/js/materialize.min.js"></script>
</body>
</html>
