<?php
require 'db.php';
 ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="Martin Ebel">
    <title>Project Manager</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/meteocons/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/morris.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/timeline.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item mr-auto">
              <a class="navbar-brand" href="dashboard.php">
                <h5 class="brand-text text-center">Project Manager</h5></a></li>
            <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">

            </ul>
            <ul class="nav navbar-nav float-right">

              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag badge badge-danger float-right m-0">5 New</span></h6>
                  </li>
                  <li class="scrollable-container media-list">
                      <a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                          <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                        </div>
                      </div>
                    </a>
                    </li>
                  <li class="dropdown-menu-footer">
                    <a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a>
                  </li>
                </ul>
              </li>

              <li class="dropdown dropdown-user nav-item">
                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                  <span class="avatar avatar-online">
                    <img src="app-assets/images/avatar.jpg">
                  </span>
                  <span class="user-name"><?php echo $_SESSION["nombreusuario"];?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="user-profile.html">
                    <i class="ft-user"></i> Edit Profile
                  </a>
                  <a class="dropdown-item" href="app-email.html">
                    <i class="ft-mail"></i> My Inbox
                  </a>
                  <a class="dropdown-item" href="user-cards.html">
                    <i class="ft-check-square"></i> Task
                  </a>
                  <a class="dropdown-item" href="app-chat.html">
                    <i class="ft-message-square"></i> Chats
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="login-with-bg-image.html">
                    <i class="ft-power"></i> Logout
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

          <li class=" nav-item"><a href="dashboard.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>

          <li class=" nav-item"><a href="inbox.php"><i class="ft-mail"></i><span class="menu-title" data-i18n="">Email</span></a>
          </li>
          <li class=" nav-item"><a href="tickets.php"><i class="ft-check-square"></i><span class="menu-title" data-i18n="">Tickets</span></a>
          </li>
          <li class=" nav-item"><a href="clientes.php"><i class="ft-users"></i><span class="menu-title" data-i18n="">Clientes</span></a>
          </li>
          <li class=" nav-item"><a href="proyectos.html"><i class="ft-airplay"></i><span class="menu-title" data-i18n="">Proyectos</span></a>
          </li>

          <li class=" nav-item"><a href="#"><i class="ft-user"></i><span class="menu-title" data-i18n="">Users</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="user-profile.html">Users Profile</a>
              </li>
              <li><a class="menu-item" href="user-cards.html">Users Cards</a>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->
