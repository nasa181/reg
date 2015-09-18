<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

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
                <form method="post" action="/">
                    {!! csrf_field() !!}
                    @if($something)
                        <label> username or password is not correct</label>
                    @endif
                    @if($ok)
                        <label> registration is success</label>
                    @endif
                <div class="row">
                    <p><div class="col-md-6"><label for="1Institution">User Name</label><input type="text" name="name_userName" id="id_userName" class="form-control"></div></p>
                    <p><div class="col-md-6"><label for="1Degree">Password</label><input type="text" name="name_password" id="id_password"  class="form-control"></div></p>
                </div>
                <div class="col-xs-4"><button type="submit" class="btn btn-danger btn-block" id="P_login">Login</button></div>
                </form>
                    <div class="row">
                    <p>

                    <div class="-xs-4"><label>Need to participate? Let's click to join us!!</label><button type="button" id="P_register" onclick="P_reg()">register</button></div>
                    </p>
                </div>

            </div>
        </div>
    <script>
        function P_reg(){
            location.href = '../createNewUser';
        }
    </script>
    </body>
</html>
