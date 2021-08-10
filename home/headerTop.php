<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-justify"></i>
            <span>Menu</span>
        </button>


        <div  id="navbarAU">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="account-user-avatar">
                    <img src="../img/adminSM.png" alt="user-image" class="rounded-circle">
                </span>
                
                    <span class="account-user-name"><?php echo $_SESSION['name']?>
                            
                    </span>
                    <span class="account-position">
                       <?php 
                           if($_SESSION['rol'] == 1) echo 'Admin';
                           if($_SESSION['rol'] == 2) echo 'User';

                       ?>
                    </span>
               
            </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="userEdit.php">Mi cuenta</a></li>
                <li><a class="dropdown-item" href="../backend/aesCerrarSe.php">Salir</a></li>
              </ul>
        </div>


        <!-- <div id="navbarAU">
            <ul class="list-unstyled input-group">
                <li id="heaTop">
                    <a href="userEdit.php" role="button">
                        <span class="account-user-avatar">
                            <img src="../img/adminSM.png" alt="user-image" class="rounded-circle">
                        </span>
                    </a>
                <li id="heaN">
                    <span>
                        <span class="account-user-name"><?php echo $_SESSION['name']?>
                            
                        </span><br>
                        <span class="account-position">
                            <?php 
                                if($_SESSION['rol'] == 1) echo 'Admin';
                                if($_SESSION['rol'] == 2) echo 'User';

                            ?>
                        </span>
                    </span>
                </li>
                <li >
                    <a class="btn btn-primary" href="../backend/ciberCerrarSe.php" role="button">Salir</a>
                </li>
            </ul>
        </div> -->
    </div>
</nav>