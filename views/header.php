<?php
if (strlen(session_id()) < 1)//si no existe una variable de session  y si esta iniciada no hay falla
{
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Add User - Administracion</title>

    <link href="../public/css/styles.css" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="../public/assets/img/favicon.png"/>


    <script src="../public/js/all.min.js" crossorigin="anonymous"></script><!--Font Awesome-->
    <script src="../public/js/father.min.js" crossorigin="anonymous"></script>
    <script src="../public/js/jquery.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../public/js/bootbox.all.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../public/js/dataTables/datatables.min.css"/>
    <script type="text/javascript" src="../public/js/dataTables/datatables.min.js"></script>

</head>
<body class="nav-fixed">


<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
     id="sidenavAccordion">
    <!-- Sidenav Toggle Button-->
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i
                data-feather="menu"></i></button>
    <!-- Navbar Brand-->
    <!-- * * Tip * * You can use text or an image for your navbar brand.-->
    <!-- * * * * * * When using an image, we recommend the SVG format.-->
    <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
    <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="index.html">Administración</a>
    <!-- Navbar Search Input-->
    <!-- * * Note: * * Visible only on and above the lg breakpoint-->
    <form class="form-inline me-auto d-none d-lg-block me-3">
        <div class="input-group input-group-joined input-group-solid">
            <input class="form-control pe-0" type="search" placeholder="Search" aria-label="Search"/>
            <div class="input-group-text"><i data-feather="search"></i></div>
        </div>
    </form>
    <!-- Navbar Items-->
    <ul class="navbar-nav align-items-center ms-auto">
        <!-- Documentation Dropdown-->
        <!-- Navbar Search Dropdown-->
        <!-- * * Note: * * Visible only below the lg breakpoint-->
        <li class="nav-item dropdown no-caret me-3 d-lg-none">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button"
               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="search"></i></a>
            <!-- Dropdown - Search-->
            <div class="dropdown-menu dropdown-menu-end p-3 shadow animated--fade-in-up"
                 aria-labelledby="searchDropdown">
                <form class="form-inline me-auto w-100">
                    <div class="input-group input-group-joined input-group-solid">
                        <input class="form-control pe-0" type="text" placeholder="Search for..." aria-label="Search"
                               aria-describedby="basic-addon2"/>
                        <div class="input-group-text"><i data-feather="search"></i></div>
                    </div>
                </form>
            </div>
        </li>
        <!-- Alerts Dropdown-->
        <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts"
               href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false"><i data-feather="bell"></i></a>
            <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                 aria-labelledby="navbarDropdownAlerts">
                <h6 class="dropdown-header dropdown-notifications-header">
                    <i class="me-2" data-feather="bell"></i>
                    Alerts Center
                </h6>
                <!-- Example Alert 1-->
                <a class="dropdown-item dropdown-notifications-item" href="#!">
                    <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-details">December 29, 2021</div>
                        <div class="dropdown-notifications-item-content-text">This is an alert message. It's nothing
                            serious, but it requires your attention.
                        </div>
                    </div>
                </a>
                <!-- Example Alert 2-->
                <a class="dropdown-item dropdown-notifications-item" href="#!">
                    <div class="dropdown-notifications-item-icon bg-info"><i data-feather="bar-chart"></i></div>
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-details">December 22, 2021</div>
                        <div class="dropdown-notifications-item-content-text">A new monthly report is ready. Click here
                            to view!
                        </div>
                    </div>
                </a>
                <!-- Example Alert 3-->
                <a class="dropdown-item dropdown-notifications-item" href="#!">
                    <div class="dropdown-notifications-item-icon bg-danger"><i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-details">December 8, 2021</div>
                        <div class="dropdown-notifications-item-content-text">Critical system failure, systems shutting
                            down.
                        </div>
                    </div>
                </a>
                <!-- Example Alert 4-->
                <a class="dropdown-item dropdown-notifications-item" href="#!">
                    <div class="dropdown-notifications-item-icon bg-success"><i data-feather="user-plus"></i></div>
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-details">December 2, 2021</div>
                        <div class="dropdown-notifications-item-content-text">New user request. Woody has requested
                            access to the organization.
                        </div>
                    </div>
                </a>
                <a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
            </div>
        </li>
        <!-- Messages Dropdown-->
        <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages"
               href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false"><i data-feather="mail"></i></a>
            <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                 aria-labelledby="navbarDropdownMessages">
                <h6 class="dropdown-header dropdown-notifications-header">
                    <i class="me-2" data-feather="mail"></i>
                    Message Center
                </h6>
                <!-- Example Message 1  -->
                <a class="dropdown-item dropdown-notifications-item" href="#!">
                    <img class="dropdown-notifications-item-img"
                         src="../public/assets/img/illustrations/profiles/profile-2.png"/>
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="dropdown-notifications-item-content-details">Thomas Wilcox · 58m</div>
                    </div>
                </a>
                <!-- Example Message 2-->
                <a class="dropdown-item dropdown-notifications-item" href="#!">
                    <img class="dropdown-notifications-item-img"
                         src="../public/assets/img/illustrations/profiles/profile-3.png"/>
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="dropdown-notifications-item-content-details">Emily Fowler · 2d</div>
                    </div>
                </a>
                <!-- Example Message 3-->
                <a class="dropdown-item dropdown-notifications-item" href="#!">
                    <img class="dropdown-notifications-item-img"
                         src="../public/assets/img/illustrations/profiles/profile-4.png"/>
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="dropdown-notifications-item-content-details">Marshall Rosencrantz · 3d</div>
                    </div>
                </a>
                <!-- Example Message 4-->
                <a class="dropdown-item dropdown-notifications-item" href="#!">
                    <img class="dropdown-notifications-item-img"
                         src="../public/assets/img/illustrations/profiles/profile-5.png"/>
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="dropdown-notifications-item-content-details">Colby Newton · 3d</div>
                    </div>
                </a>
                <!-- Footer Link-->
                <a class="dropdown-item dropdown-notifications-footer" href="#!">Read All Messages</a>
            </div>
        </li>
        <!-- User Dropdown-->
        <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
               href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false"><img class="img-fluid"
                                          src="../public/assets/img/illustrations/profiles/profile-1.png"/></a>
            <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                 aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center">
                    <img class="dropdown-user-img" src="../public/assets/img/illustrations/profiles/profile-1.png"/>
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name">Valerie Luna</div>
                        <div class="dropdown-user-details-email">vluna@aol.com</div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#!">
                    <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                    Account
                </a>
                <a class="dropdown-item" href="#!">
                    <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>


<div id="layoutSidenav">



    <div id="layoutSidenav_nav">

        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <!-- Sidenav Menu Heading (Account)-->
                    <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                    <div class="sidenav-menu-heading d-sm-none">Account</div>
                    <!-- Sidenav Link (Alerts)-->
                    <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                    <a class="nav-link d-sm-none" href="#!">
                        <div class="nav-link-icon"><i data-feather="bell"></i></div>
                        Alerts
                        <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
                    </a>
                    <!-- Sidenav Link (Messages)-->
                    <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                    <a class="nav-link d-sm-none" href="#!">
                        <div class="nav-link-icon"><i data-feather="mail"></i></div>
                        Messages
                        <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
                    </a>
                    <!-- Sidenav Menu Heading (Core)-->
                    <div class="sidenav-menu-heading">Core</div>
                    <!-- Sidenav Accordion (Dashboard)-->
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                       data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                        <div class="nav-link-icon"><i data-feather="activity"></i></div>
                        Dashboards
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseDashboards" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                            <a class="nav-link" href="dashboard-1.html">
                                Default
                                <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                            </a>
                            <a class="nav-link" href="dashboard-2.html">Multipurpose</a>
                            <a class="nav-link" href="dashboard-3.html">Affiliate</a>
                        </nav>
                    </div>


                </div>
            </div>






            <!-- Sidenav Footer-->

            <div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class="sidenav-footer-subtitle">Logged in as:</div>
                    <div class="sidenav-footer-title">Pabel Andino</div>
                </div>
            </div>
        </nav>

    </div>



</div>








</body>





<script src="../public/js/bootsatrap510.bundle.min.js" crossorigin="anonymous"></script>
<script src="../public/js/scripts.js"></script>
<script src="../public/js/datatablelatest.js" crossorigin="anonymous"></script>
<script src="../public/js/datatables/datatables-simple-demo.js" crossorigin="anonymous"></script>

</html>