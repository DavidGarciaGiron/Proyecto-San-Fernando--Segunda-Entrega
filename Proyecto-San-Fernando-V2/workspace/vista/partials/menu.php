<nav class="navbar navbar-inverse navbar-fixed-top nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">SAN FERNANDO</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../../index.php">SAN FERNANDO</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            
            <?php if (!isset($_SESSION["usuario"])) {?>
            <li><a href="login.php"></a></li>
            <?php } else {
    ?>
              <?php if ($_SESSION["usuario"]["privilegio"] == 1) {?>
              <li><a href="admin.php" class="navbar-brand2 glyphicon glyphicon-user"> Técnico</a></li>
              <?php } else if($_SESSION["usuario"]["privilegio"] == 2){?>
              <li><a href="usuario.php" class="navbar-brand2 glyphicon glyphicon-user"> Lider</a></li>
              <?php }else if($_SESSION["usuario"]["privilegio"] == 3){?>
              <li><a href="tecnico.php" class="navbar-brand2 glyphicon glyphicon-user"> Ingeniero</a></li>              
              <?php         }

}?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>