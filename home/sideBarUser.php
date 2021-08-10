<nav id="sidebar">
    <div class="sidebar-header">
       <?php if($_SESSION['rol'] == 2) $dir="aesUserInfo.php";?>

       <a href="<?php echo $dir;?>" class="logo text-center">
           <span class="logo-lg">
               
           </span>

           <!-- We should use a small logo for this image tag -->
       </a>
    </div>

    <ul class="list-unstyled components">
        
        <li>
            <a href="<?php echo $dir;?>">Información</a>
        </li>
        <li class="dropdown show">
      <a class="dropdown-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
        Solicitudes
      </a>
      <div class="collapse " id="home-collapse">
        <ul class="list-unstyled">
          <li><a href="aesUserNewSol.php" >Nueva</a></li>
          <li><a href="aesUserSol.php" >Mis Solicitudes</a></li>
          <!-- <li><a href="#" >Busqueda</a></li> -->
        </ul>
      </div>
    </li>
      
        <li>
            <a href="aesUserAbout.php">About</a>
        </li>
        <!--<li>
            <a href="#">Tema 4</a>
        </li>-->
    </ul>

    
</nav>