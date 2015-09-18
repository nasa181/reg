<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

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
        <div class="content">
          <h1>Login</h1>

            <button type="submit" onclick="P_logout()">Logout</button>

        </div>
    </div>
    <script>
        function P_logout(){
            location.href='../logout';
        }
    </script>
</body>
</html>