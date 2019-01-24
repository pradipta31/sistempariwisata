<!-- header header  -->
<div class="header">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- Logo -->
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
                <!-- Logo icon -->
                <b><i class="fa fa-home"></i></b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span>SI Pariwisata</span>
            </a>
        </div>
        <!-- End Logo -->
        <div class="navbar-collapse">
            <!-- toggle and nav items -->
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
            </ul>
            <!-- User profile and search -->
            <ul class="navbar-nav my-lg-0">
                
                <!-- Profile -->
                <li class="nav-item dropdown">
                    
                    <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                        if($row['foto'] == null){
                            echo '<img src="images/user.jpg" class="img-rounded" width="30px" height="30px" style="border-radius: 50%">';
                        }else{ ?>
                            <img src="images/<?= $row['foto']; ?>" alt="" class="img-rounded" width="30px" height="30px" style="border-radius: 50%">
                    <?php
                        }
                    ?>
                    <!-- <img src="images/user.jpg" class="img-rounded" width="30px" height="30px"> -->
                     <?= $row['username'];?><i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                        <ul class="dropdown-user">
                            <li><a href="profile.php"><i class="ti-user"></i> Profile</a></li>
                            <li><a href="../logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- End header header -->