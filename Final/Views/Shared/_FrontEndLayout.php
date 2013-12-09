<!DOCTYPE html>
<html>
  <head>
    <titleKevin?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <style type="text/css">
            body { padding-top: 70px; }
    </style>
  </head>
  <body>
          <header>
                  <div class="container">
                          <h1>Kevin</h1>
                  </div>
          </header>
          
    <div class="navbar navbar-default" role="navigation">
                   <div class="container">
                           <div class="navbar-header">
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".nav-c">
                                    <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                              <a class="navbar-brand" href="#">Playground</a>
                        </div>
                
                        <div class="collapse navbar-collapse nav-c">
                    <ul class="nav navbar-nav">
                                                
                                        <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                          <li><a href="">Kevin Costner</a></li>
                                          <li><a href="">Kevin Smith</a></li>
                                          <li><a href="">Kevin James</a></li>
                                          <li><a href="">Kevin Spacey</a></li>
                                          <li><a href="">Kevin Bacon</a></li>
                                        </ul>
                                      </li>
                              </ul>
                                <p class="navbar-text pull-right" id="shopping-cart"><a href="#" class="navbar-link">Cart</a></p>
                        </div>
                </div>
        </div>

        <? include $view; ?>




    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="Scripts/main.js"></script>
    <? if(function_exists('Scripts')) Scripts(); ?>
 </body>
</html>