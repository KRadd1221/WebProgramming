<!DOCTYPE html>
<html>
  <head>
    <title>Kevin</title>
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
          
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                   <div class="container">
                           <div class="navbar-header">
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".nav-c">
                                    <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                              <a class="navbar-brand" href="#">Kevin</a>
                        </div>
                
                        <div class="collapse navbar-collapse nav-c">
                    <ul class="nav navbar-nav">
                                                
                                                
                                        <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Databases <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                          <li><a href="http://cs.newpaltz.edu/~n02704859/2013/Final/Views/Users/">Users</a></li>
                                          <li><a href="http://cs.newpaltz.edu/~n02704859/2013/Final/Views/Keywords/">Keywords</a></li>
                                          <li><a href="http://cs.newpaltz.edu/~n02704859/2013/Final/Views/Inventory/">Inventory</a></li>
                                          <li><a href="http://cs.newpaltz.edu/~n02704859/2013/Final/Views/Product_Categories/">Product Categories</a></li>
                                          <li><a href="http://cs.newpaltz.edu/~n02704859/2013/Final/Views/Users/">Feedback</a></li>
                                          <li><a href="http://cs.newpaltz.edu/~n02704859/2013/Final/Views/Orders/">Orders</a></li>
                                        </ul>
                                      </li>
                              </ul>
                                <p class="navbar-text pull-right">Signed in as <a href="#" class="navbar-link"><? $user=Auth::GetUser(); echo $user['LastName'];?></a></p>
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
