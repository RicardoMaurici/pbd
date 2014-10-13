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
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Registros<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Recebimento Material</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Recebimento Documento Aluno</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Entrega Material Aluno</a></li>             
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Pedido Material</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Doação</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Fornecedor</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Parceiro</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Consulta<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Material</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Fornecedor</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Parceiro</a></li>
              </ul>
            </li>

          </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container-fluid -->
</nav> <!-- /navbar-example -->