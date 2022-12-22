<?php

    session_start();

    include "../../inc/functions.php";

    $categories = getAllCategories();

?>



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper_2/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 13:00:24 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Admin page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico">


    <!-- App css -->
    <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="../../assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
       <?php  
        include "../template/navigation.php";
       ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>





                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="../../assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name"><?php echo $_SESSION['nom']; ?></span>
                                    <span class="account-position">Founder</span>
                                </span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">

                               <!-- item-->
                              <!--  <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>
                                -->
                                <!-- item-->
                                <!--<a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-edit me-1"></i>
                                    <span>Settings</span>
                                </a> */

                                    -->
                                <!-- item-->
                                <a href="../../logout.php" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <div class="app-search dropdown d-none d-lg-block">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control dropdown-toggle" placeholder="Search..."
                                    id="top-search">
                                <span class="mdi mdi-magnify search-icon"></span>
                                <button class="input-group-text btn-primary" type="submit">Search</button>
                            </div>
                        </form>


                    </div>
                </div>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">

                        <h1 class="text mt-5">List Of Categories</h1> 
                        <div class="col-lg-2 ms-auto mt-2"><a href="ajout.php" class="btn btn-dark mt-3 w-50 ms-5 mx-5" data-bs-toggle="modal" data-bs-target="#exampleModal" >ADD</a></div>
                        

                        <div class="table">


                                <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 0;
                                            foreach($categories as $c){
                                                $i++;
                                                print '<tr>
                                                <th scope="row">'.$i.'</th>
                                                <td >'.$c['nom'].'</td>
                                                <td >'.$c['description'].'</td>
                                                <td> <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal'.$c['id'].'" >Update</a>
                                                 <a href="supprimer.php?idc='.$c['id'].'" class="btn btn-danger">Delete</a> </td>
                                            </tr>';
                                            }
                                            ?>
                                            
                                        </tbody>
                                </table>
                                



                        </div><br/>
                        
                       

                    </div>
                    <!-- end page title -->



                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Button trigger modal -->
                

               
                    

                    <!-- Modal Ajout-->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Category</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="ajout.php" method="post">
                                <div class="form-group">
                                    <input name="nom" type="text" class="form-control" placeholder="Category name...">
                                </div>
                                <div class="form-group">
                                    <textarea name="description"  class="form-control" placeholder="Category ..."></textarea>
                                </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">ADD</button>
                        </div>
                        </form>
                        </div>
                 </div>

                  <?php foreach($categories as $index => $categorie){ ?>
                                                     <!-- Modal -->
                                                     <div class="modal fade" id="editModal<?php echo $categorie['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Category</h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                            <div class="modal-body">
                                                                <form action="update.php" method="post">
                                                                    <div class="form-group">
                                                                        <input name="nom" type="text" value="<?php echo $categorie['nom']; ?>" class="form-control" placeholder="Category name...">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <textarea name="description"  class="form-control" placeholder="Category description ..."><?php echo $categorie['description']; ?></textarea>
                                                                    </div>
                                                                
                                                            
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">update</button>
                                                            </div>
                                                            </form>
                                                            </div>
                                                            </div>
                                                     </div>
                                                 

                    <?php } ?>
                  
</div>

                    <!-- Modal modifier -->
                   




    <!-- bundle -->
    <script src="../../assets/js/vendor.min.js"></script>
    <script src="../../assets/js/app.min.js"></script>





</body>

<!-- Mirrored from coderthemes.com/hyper_2/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 13:01:05 GMT -->

</html>