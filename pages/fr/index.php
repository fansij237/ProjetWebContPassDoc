<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gestionnaire</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../style/Semantic-UI-master/dist/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="../../style/loader.css">
        <script src="../../js/scripts/jquery3.4.1.js"></script>
        <!-- jQuery -->
        <script>
            $('#password').onFocus(function(){
                    $('.forpassname').hide();
            });
        </script>
        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                border: 0;
            }

            html, body {
                height: 100%;
                font-family: 'Lora', serif;
            }
            .containere { margin:150px auto; text-align:center;}
        </style>
    </head>
    <body>
        
        <div id="all">
            <center>
            <div class="ui middle aligned center aligned grid">
                <div class="column">
                <form class="ui large form" method="POST" autocomplete="off" action="contact.php" aria-kbdshortcuts="'ctrl'+'p'">
                        <div class="ui stacked segment">
                            <h2 class="ui orange image header">
                                <div class="content">
                                Connexion <span style="color: transparent;">blancblancblanc</span>
                                </div>
                            </h2>
                            <div class="field">
                                <div class="ui left icon input">
                                <i class="users icon"></i>
                                <input type="text" name="login" placeholder="Login">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input type="password" name="password" id="password" placeholder="Mot de passe">
                                </div>
                            </div>
                            <button class="ui fluid large orange submit button">Connexion</button>
                        </div>
                    </form>
                    <div class="ui message">
                        Mot de passe oublie <a href="#"><i class="ui icon help"></i>Aide</a>
                    </div>
                </div>
          </div>
          </center>
        </div>
        <div  id="loader">
            <div class="containere">
            <h1 id="patientez">.</h1>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="my-progress-bar"></div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../../js/scripts/plugin.js"></script>
        <script src="../../js/scripts/script.js"></script>
    </body>
</html>
