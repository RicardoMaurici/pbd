<?php
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
?>
<!-- Menu com seus devidos links -->
<nav id="navbar-example" class="navbar navbar-default navbar-static col-md-10 col-md-offset-1" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
          	<a class="navbar-brand" href=<?php echo "$uri/main.php";?> >HOME</a>
        </div>
        <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
          <ul class="nav navbar-nav">

            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Aulas<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Horário</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Atendimento<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Registrar</a></li>                                
              </ul>
            </li>

          </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container-fluid -->
</nav> <!-- /navbar-example -->