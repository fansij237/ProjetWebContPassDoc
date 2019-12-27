<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--- Site CSS -->
    <link rel="stylesheet" type="text/css" href="../../style/Semantic-UI-master/dist/components/reset.css">
    <link rel="stylesheet" type="text/css" href="../../style/Semantic-UI-master/dist/components/site.css">
    <link rel="stylesheet" type="text/css" href="../../style/Semantic-UI-master/dist/components/grid.css">

    <!--- Component CSS -->
    <link rel="stylesheet" type="text/css" href="../../style/Semantic-UI-master/dist/components/menu.css">
    <link rel="stylesheet" type="text/css" href="../../style/Semantic-UI-master/dist/components/input.css">
    <link rel="stylesheet" type="text/css" href="../../style/Semantic-UI-master/dist/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../../style/Semantic-UI-master/dist/components/icon.css">
    <link rel="stylesheet" type="text/css" href="../../style/Semantic-UI-master/dist/components/button.css">
    <link rel="stylesheet" type="text/css" href="../../style/Semantic-UI-master/dist/components/transition.css">
    <link rel="stylesheet" type="text/css" href="../../style/Semantic-UI-master/dist/components/form.css">
    <link rel="stylesheet" type="text/css" href="../../style/Semantic-UI-master/dist/components/search.css">
    <link rel="stylesheet" type="text/css" href="../../style/Semantic-UI-master/dist/components/transition.css">
    <link rel="stylesheet" type="text/css" href="../../fonts/hawcons/style.css"/>
    <link rel="stylesheet" type="text/css" href="../../fonts/Linearicons/Web Font/style.css"/>

    <!--- Example Libs -->
    <link rel="stylesheet" type="text/css" href="../../style/Semantic-UI-master/dist/components/popup.css">
    <link rel="stylesheet" type="text/css" href="../../style/Semantic-UI-master/dist/components/table.css">
    <script src="../../style/Semantic-UI-master/examples/assets/library/jquery.min.js"></script>
    <script src="../../style/Semantic-UI-master/examples/assets/library/iframe-content.js"></script>
    <script src="../../style/Semantic-UI-master/examples/assets/show-examples.js"></script>
    <script type="text/javascript" src="../../style/Semantic-UI-master/dist/components/popup.js"></script>
    <script type="text/javascript" src="../../style/Semantic-UI-master/dist/components/form.js"></script>
    <script type="text/javascript" src="../../style/Semantic-UI-master/dist/components/search.js"></script>
    <script type="text/javascript" src="../../GestContPassDoc/style/Semantic-UI-master/file.js"></script>

    <!--- Component JS -->
    <script type="text/javascript" src="../../style/Semantic-UI-master/dist/components/transition.js"></script>
    <script type="text/javascript" src="../../style/Semantic-UI-master/dist/components/dropdown.js"></script>

     <!--- Example CSS -->
  <style>
    body {
      padding: 1em;
    }
    .ui.menu {
      margin: 3em 0em;
    }
    .ui.menu:last-child {
      margin-bottom: 110px;
    }
    @keyframes loglizer {
      0%{
        color: rgb(36, 1, 70);
      }
      20%{
        color: rgb(1, 82, 62);
      }
      40%{
        color: rgb(112, 65, 3);
      }
      60%{
        color: rgb(76, 82, 0);
      }
      80%{
        color: rgb(71, 15, 1);
      }
      100%{
        color: rgb(117, 2, 102);
      }
    }
    span.barnerName{
      animation:logolizer 1s linear infinite!important;
      color: rgb(245, 233, 243);
      font-size: large;
      font-weight: 250;
    }
    span.barnerName2{
      animation:logolizer 1s linear infinite!important;
      color: rgb(245, 233, 243);
      font-size: large;
      font-weight: 450; 
      letter-spacing: 2px;
      margin-left: 5px;
      color: rgb(0, 59, 99);
    }
    </style>
  
    <!--- Example Javascript -->
    <script>
    $(document)
      .ready(function() {
        $('.ui.menu .ui.dropdown').dropdown({
          on: 'click'
        });
        $('.ui.menu a.item')
          .on('click', function() {
            $(this)
              .addClass('active')
              .siblings()
              .removeClass('active')
            ;
          })
        ;
      })
    ;
    </script>
  </head>
  <body>
  <div class="ui inverted mini menu"  style="background:rgba(136, 79, 32, 0.815);font-size:15px; height: 42px;">
    <div class=" item"><span class="lnr  lnr-database"  lnr-laptop-phone style="font-size: 30px;"></span>&nbsp;&nbsp;&nbsp;&nbsp; <span class="barnerName">Solid</span><span class="barnerName2">Memory</span></div>
    <div class="ui dropdown item">
        <span class=" lnr-phone-handset lnr"></span>&nbsp;&nbsp;Contacts&nbsp;&nbsp;&nbsp;&nbsp;
      <i class="dropdown icon"></i>
      <div class="menu">
        <div class="item"><span class="lnr lnr-eye"></span>&nbsp;&nbsp;Afficher</div>
        <div class="item"><span class="lnr lnr-plus-circle"></span>&nbsp;&nbsp; Ajouter</div>
        <div class="item"><span class="lnr lnr-pencil"></span>&nbsp;&nbsp;Modifier</div>     
        <div class="item"><span class="lnr lnr-trash"></span> &nbsp;&nbsp;Supprimer</div>  
    </div>
    </div>
    <div class="ui dropdown item">
        <span class="lnr-lock lnr"></span>&nbsp;&nbsp;Mots de passe
      <i class="dropdown icon"></i>
      <div class="menu">
        <div class="item"><span class="lnr lnr-eye"></span>&nbsp;&nbsp;Afficher</div>
        <div class="item"><span class="lnr lnr-plus-circle"></span>&nbsp;&nbsp; Ajouter</div>
        <div class="item"><span class="lnr lnr-pencil"></span>&nbsp;&nbsp;Modifier</div>     
        <div class="item"><span class="lnr lnr-trash"></span&nbsp;&nbsp;> Supprimer</div>  
    </div>
    </div>
    <div class="ui dropdown item">
      <span class=" lnr-file-empty lnr"></span>&nbsp;&nbsp;Documents
      <i class="dropdown icon"></i>
      <div class="menu">
        <div class="item"><span class="lnr lnr-eye"></span>&nbsp;&nbsp;Afficher</div>
        <div class="item"><span class="lnr lnr-file-add"></span>&nbsp;&nbsp; Ajouter</div>
        <div class="item"><span class="lnr lnr-pencil"></span>&nbsp;&nbsp;Modifier</div>     
        <div class="item"><span class="lnr lnr-trash"></span> &nbsp;&nbsp;Supprimer</div>  
    </div>
    </div>
    <div class="right menu">
      <form action="index.php" name="search">
        <button type="submit" class="item" style="visibility: hidden; display: none; width: 0px; height:0px;"></button>
          
      <div class="item" style="margin-top: -2px;">
        <div class="ui inverted icon input">
            <i class="search icon" style="color:white"></i>
            <input type="text" placeholder="Search" style="background-color: rgba(146, 67, 3, 0.5); color:whitesmoke;">
            </div>
        </form>
      </div>
        <div class="ui dropdown item">
            <img src="../../img/contactUs.png" width="65" style="margin-bottom: -20px;margin-top: -20px; border-radius: 50%;" class="ui item" alt="">
            <i class="dropdown icon"></i>
            <div class="menu">
                <a href="settings.php" class="item"><i class="large settings icon"></i>&nbsp;&nbsp;&nbsp;Personnaliser</a>
                <a class="item"><i class="ui list ol icon"></i>&nbsp;&nbsp;&nbsp;Evenements</a>
                <a class="item"><i class="lnr lnr-question-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aide</a>
                <div class="divider"></div>
                <a href="index.php" class="item"><i class="lnr lnr-exit"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Deconnexion</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  