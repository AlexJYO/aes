<nav id="sidebar">
    <div class="sidebar-header">
        <?php if($_SESSION['rol'] == 1) $dir="aesAdminInfo.php";?>

       <a href="<?php echo $dir;?>" class="logo text-center">
           <span class="logo-lg">
               
           </span>

           <!-- We should use a small logo for this image tag -->
       </a>
    </div>

    <ul class="list-unstyled components">
        
        <li id="linkInf">
            <a href="<?php echo $dir;?>">Información</a>
        </li>
        <li class="dropdown show" id="linkRequest">
            <a class="dropdown-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                Solicitudes
            </a>
            <div class="collapse " id="home-collapse">
                 <ul class="list-unstyled">
                <li><a href="aesAdminNewSol.php">Nueva</a></li>
                <li><a href="aesAdminSol.php">Solicitudes</a></li>
                 <!-- <li><a href="#" >Busqueda</a></li> -->
                </ul>
            </div>
        </li>
        <li id="linkUser">
            <a href="aesAdminItem.php">Artículos</a>
        </li>
      
         <li id="linkUser">
            <a href="aesAdminUser.php">Usuarios</a>
        </li>
        <li id="linkUser">
            <a href="aesAdminLeader.php">Lideres</a>
        </li>
        <li>
            <a href="aesAdminAbout.php">About</a>
        </li>
        <!--<li>
            <a href="#">Tema 4</a>
        </li>-->
    </ul>

    
</nav>