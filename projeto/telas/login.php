<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/style.css">

        <link rel="icon" href="Favicon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <style>
            body{
                margin: 0;
                font-size: .9rem;
                font-weight: 400;
                line-height: 1.6;
                color: #212529;
                text-align: left;
                background-color: #f5f8fa;
            }
            .my-form
            {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }

            .my-form .row
            {
                margin-left: 0;
                margin-right: 0;
            }

            .login-form
            {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }

            .login-form .row
            {
                margin-left: 0;
                margin-right: 0;
            }
        </style>
    </head>
    <body>
        <main class="login-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Login</div>
                            <div class="card-body">
                                <form action="./script/loginScript.php" method="post">
                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">Login</label>
                                        <div class="col-md-6">
                                            <input type="text" id="login" class="form-control" name="login" required autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>
                                        <div class="col-md-6">
                                            <input type="password" id="senha" class="form-control" name="senha" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                        <a href="valida.php" type="submit" class="btn btn-primary">
                                            Entrar
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
