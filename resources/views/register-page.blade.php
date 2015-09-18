<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }

    </style>
</head>
<body>
    <div class="container">
        <form method="post" action="/createNewUser">
        {!! csrf_field() !!}
        <div class="row">
            <p><div class="col-md-6"><label for="newUser">User Name</label><input type="text" name="newUser" id="newUser" class="form-control"></div></p>
        </div>
        <div class="row">
            <p><div class="col-md-6"><label for="newPass">Your new Password</label><input type="text" name="newPass" id="newPass"></div></p>
        </div>
        <div class="row">
            <p><div class="col-md-6"><label for="conPass">confirm your Password</label><input type="text" name="conPass" id="conPass"></div></p>
        </div>
        <div class="row">
            <p><div class="col-md-6"><label for="new_mail">E-mail</label><input type="text" name="new_mail" id="conPass"></div></p>
        </div>
        <div>
            <button type="submit" id="P_register">Submit</button>
        </div>
        </form>
    </div>

</body>
</html>