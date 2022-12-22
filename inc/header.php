<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Lady</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
             
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu">
                  <?php
                      foreach($categories as $categories){
                        print '<li><a class="dropdown-item" href="#">'.$categories['nom'].'</a></li>';
                      }

                  ?>

                </ul>

                      <?php
                          if(isset($_SESSION['fullname'])){
                            print ' <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="profile.php">profile</a>
                        </li>';
                          }else{
                            print'<li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="register.php">Register</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                          </li>';
                          }
                      ?>

                
              
            </ul>
            <form class="d-flex" action="index.php" method="POST">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <?php
            if(isset($_SESSION['fullname'])){
              print'<a href="logout.php" class="btn btn-success">LOG OUT</a>';
            }
            ?>
          </div>
        </div>
      </nav>
