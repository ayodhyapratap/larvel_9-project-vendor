<!DOCTYPE html>
<!-- 
Jampack
Author: Hencework
Contact: contact@hencework.com
-->
<html lang="en">

<!-- Mirrored from hencework.com/theme/jampack/classic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Oct 2022 18:49:38 GMT -->
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jampack - Admin CRM Dashboard Template</title>
    <meta name="description" content="A modern CRM Dashboard Template with reusable and flexible components for your SaaS web applications by hencework. Based on Bootstrap."/>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <!-- Daterangepicker CSS -->
    <link href="<?php echo e(asset('vendors/daterangepicker/daterangepicker.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Data Table CSS -->
    <link href="<?php echo e(asset('vendors/datatables.net-bs5/css/dataTables.bootstrap5.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('vendors/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- CSS -->
    <link href="<?php echo e(Asset('dist/css/style.css')); ?>" rel="stylesheet" type="text/css">
</head>
<body>

   



    <!-- Wrapper -->
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
        <!-- Top Navbar -->
        <nav class="hk-navbar navbar navbar-expand-xl navbar-light fixed-top">
            <div class="container-fluid">
            <!-- Start Nav -->
            <div class="nav-start-wrap">
                <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle d-xl-none"><span class="icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span></button>
                    
                <!-- Search -->
                <form class="dropdown navbar-search">
                    <div class="dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside">
                        <a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover  d-xl-none"><span class="icon"><span class="feather-icon"><i data-feather="search"></i></span></span></a>
                        <div class="input-group d-xl-flex d-none">
                            <span class="input-affix-wrapper input-search affix-border">
                                <input type="text" class="form-control  bg-transparent"  data-navbar-search-close="false" placeholder="Search..." aria-label="Search">
                                <span class="input-suffix"><span>/</span>
                                    <span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
                                    <span class="spinner-border spinner-border-sm input-loader text-primary" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div  class="dropdown-menu p-0">
                        <!-- Mobile Search -->
                        <div class="dropdown-item d-xl-none bg-transparent">
                            <div class="input-group mobile-search">
                                <span class="input-affix-wrapper input-search">
                                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
                                    <span class="input-suffix">
                                        <span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
                                        <span class="spinner-border spinner-border-sm input-loader text-primary" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </span>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <!--/ Mobile Search -->
                        <div data-simplebar class="dropdown-body p-2">
                            <h6 class="dropdown-header">Recent Search
                            </h6>
                            <div class="dropdown-item bg-transparent">
                                <a href="#" class="badge badge-pill badge-soft-secondary">Grunt</a>
                                <a href="#" class="badge badge-pill badge-soft-secondary">Node JS</a>
                                <a href="#" class="badge badge-pill badge-soft-secondary">SCSS</a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header">Help
                            </h6>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media align-items-center">
                                    <div class="media-head me-2">
                                        <div class="avatar avatar-icon avatar-xs avatar-soft-light avatar-rounded">
                                            <span class="initial-wrap">
                                                <span class="svg-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        How to setup theme?
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media align-items-center">
                                    <div class="media-head me-2">
                                        <div class="avatar avatar-icon avatar-xs avatar-soft-light avatar-rounded">
                                            <span class="initial-wrap">
                                                <span class="svg-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        View detail documentation
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header">Users
                            </h6>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media align-items-center">
                                    <div class="media-head me-2">
                                        <div class="avatar avatar-xs avatar-rounded">
                                            <img src="<?php echo e(asset('dist/img/avatar3.jpg')); ?>" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        Sarah Jone
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media align-items-center">
                                    <div class="media-head me-2">
                                        <div class="avatar avatar-xs avatar-soft-primary avatar-rounded">
                                            <span class="initial-wrap">J</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        Joe Jackson
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media align-items-center">
                                    <div class="media-head me-2">
                                        <div class="avatar avatar-xs avatar-rounded">
                                            <img src="<?php echo e(asset('dist/img/avatar4.jpg')); ?>" alt="user" class="avatar-img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        Maria Richard
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-footer d-xl-flex d-none"><a href="#"><u>Search all</u></a></div>
                    </div>
                </form>
                <!-- /Search -->
            </div>
            <!-- /Start Nav -->
            
            <!-- End Nav -->
            <div class="nav-end-wrap">
                <ul class="navbar-nav flex-row">
                    <li class="nav-item">
                        <a href="email.html" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover"><span class="icon"><span class=" position-relative"><span class="feather-icon"><i data-feather="inbox"></i></span><span class="badge badge-sm badge-soft-primary badge-sm badge-pill position-top-end-overflow-1">4</span></span></span></a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown dropdown-notifications">
                            <a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation role="button" aria-haspopup="true" aria-expanded="false"><span class="icon"><span class="position-relative"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge badge-success badge-indicator position-top-end-overflow-1"></span></span></span></a>
                            <div class="dropdown-menu dropdown-menu-end p-0">
                                <h6 class="dropdown-header px-4 fs-6">Notifications<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"><span class="icon"><span class="feather-icon"><i data-feather="settings"></i></span></span></a>
                                </h6>
                                <div data-simplebar class="dropdown-body  p-2">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar avatar-rounded avatar-sm">
                                                    <img src="<?php echo e(asset('dist/img/avatar2.jpg')); ?>" alt="user" class="avatar-img">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="notifications-text">Morgan Freeman accepted your invitation to join the team</div>
                                                    <div class="notifications-info">
                                                        <span class="badge badge-soft-success">Collaboration</span>
                                                        <div class="notifications-time">Today, 10:14 PM</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar  avatar-icon avatar-sm avatar-success avatar-rounded">
                                                    <span class="initial-wrap">
                                                        <span class="feather-icon"><i data-feather="inbox"></i></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="notifications-text">New message received from Alan Rickman</div>
                                                    <div class="notifications-info">
                                                        <div class="notifications-time">Today, 7:51 AM</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar  avatar-icon avatar-sm avatar-pink avatar-rounded">
                                                    <span class="initial-wrap">
                                                        <span class="feather-icon"><i data-feather="clock"></i></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="notifications-text">You have a follow up with Jampack Head on Friday, Dec 19 at 9:30 am</div>
                                                    <div class="notifications-info">
                                                        <div class="notifications-time">Yesterday, 9:25 PM</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo e(asset('dist/img/avatar3.jpg')); ?>" alt="user" class="avatar-img">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="notifications-text">Application of Sarah Williams is waiting for your approval</div>
                                                    <div class="notifications-info">
                                                        <div class="notifications-time">Today 10:14 PM</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar avatar-sm avatar-rounded">
                                                    <img src="<?php echo e(asset('dist/img/avatar10.jpg')); ?>" alt="user" class="avatar-img">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div>	
                                                    <div class="notifications-text">Winston Churchil shared a document with you</div>
                                                    <div class="notifications-info">
                                                        <span class="badge badge-soft-violet">File Manager</span>
                                                        <div class="notifications-time">2 Oct, 2021</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <div class="media">
                                            <div class="media-head">
                                                <div class="avatar  avatar-icon avatar-sm avatar-danger avatar-rounded">
                                                    <span class="initial-wrap">
                                                        <span class="feather-icon"><i data-feather="calendar"></i></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div>	
                                                    <div class="notifications-text">Last 2 days left for the project to be completed</div>
                                                    <div class="notifications-info">
                                                        <span class="badge badge-soft-orange">Updates</span>
                                                        <div class="notifications-time">14 Sep, 2021</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-footer"><a href="#"><u>View all notifications</u></a></div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown ps-2">
                            <a class=" dropdown-toggle no-caret" href="#" role="button" data-bs-display="static" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside" aria-expanded="false">
                                <div class="avatar avatar-rounded avatar-xs">
                                    <img src="<?php echo e(asset('dist/img/avatar12.jpg')); ?>" alt="user" class="avatar-img">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="p-2">
                                    <div class="media">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-primary avatar-sm avatar-rounded">
                                                <span class="initial-wrap">Hk</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="dropdown">
                                                <a href="#" class="d-block dropdown-toggle link-dark fw-medium"  data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="inside"><?php echo e(Auth::user()->name); ?></a>
                                                
                                            </div>
                                            <div class="fs-7">contact@hencework.com</div>


                                            <form method="POST" action="<?php echo e(route('logout')); ?>" x-data>
                                                <?php echo csrf_field(); ?>
                                                    <input class="form-control" type="submit" name="" id="" value="logout ">
                                                
                                            </form>



                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /End Nav -->
            </div>									
        </nav>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <div class="hk-menu">
            <!-- Brand -->
            <div class="menu-header">
                <span>
                    <a class="navbar-brand" href="index.html">
                        <img class="brand-img img-fluid" src="<?php echo e(asset('dist/img/brand-sm.svg')); ?>" alt="brand" />
                        <img class="brand-img img-fluid" src="<?php echo e(asset('dist/img/Jampack.svg')); ?>" alt="brand" />
                    </a>
                    <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
                        <span class="icon">
                            <span class="svg-icon fs-5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="10" y1="12" x2="20" y2="12"></line>
                                    <line x1="10" y1="12" x2="14" y2="16"></line>
                                    <line x1="10" y1="12" x2="14" y2="8"></line>
                                    <line x1="4" y1="4" x2="4" y2="20"></line>
                                </svg>
                            </span>
                        </span>
                    </button>
                </span>
            </div>
            <!-- /Brand -->

            <!-- Main Menu -->
            <div data-simplebar class="nicescroll-bar">
                <div class="menu-content-wrap">
                    <div class="menu-group">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-template" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <rect x="4" y="4" width="16" height="4" rx="1" />
                                                <rect x="4" y="12" width="6" height="8" rx="1" />
                                                <line x1="14" y1="12" x2="20" y2="12" />
                                                <line x1="14" y1="16" x2="20" y2="16" />
                                                <line x1="14" y1="20" x2="20" y2="20" />
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Dashboard</span>
                                    <span class="badge badge-sm badge-soft-pink ms-auto">Hot</span>
                                </a>
                            </li>
                        </ul>	
                    </div>
                    <div class="menu-gap"></div>
                    <div class="menu-group">
                        <div class="nav-header">
                            <span>Apps</span>
                        </div>
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_chat">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-dots" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                                <line x1="12" y1="11" x2="12" y2="11.01" />
                                                <line x1="8" y1="11" x2="8" y2="11.01" />
                                                <line x1="16" y1="11" x2="16" y2="11.01" />
                                            </svg>
                                        </span>
                                    </span>
                                    
                                    <span class="nav-link-text">Users</span>
                                </a>
                                <ul id="dash_chat" class="nav flex-column collapse  nav-children">
                                    <li class="nav-item">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="/info"><span class="nav-link-text">Users</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/update"><span class="nav-link-text">Users Update/Delete</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="chats-contact.html"><span class="nav-link-text">Create Users</span></a>
                                            </li>
                                        </ul>	
                                    </li>	
                                </ul>	
                            </li>	
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_chatpop">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1" />
                                                <line x1="12" y1="12" x2="12" y2="12.01" />
                                                <line x1="8" y1="12" x2="8" y2="12.01" />
                                                <line x1="16" y1="12" x2="16" y2="12.01" />
                                            </svg>
                                        </span>
                                    </span>
                                    
                                    <span class="nav-link-text">Products</span>
                                    
                                </a>
                                <ul id="dash_chatpop" class="nav flex-column collapse  nav-children">
                                    <li class="nav-item">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><span class="nav-link-text">Show Products</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><span class="nav-link-text">Update Products</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><span class="nav-link-text">Create Products</span></a>
                                            </li>
                                        </ul>	
                                    </li>	
                                </ul>	
                            </li>	
                                
                            
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_scrumboard">
                                    <span class="nav-icon-wrap position-relative">
                                        <span class="badge badge-sm badge-primary badge-sm badge-pill position-top-end-overflow">3</span>
                                        <span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-kanban" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <line x1="4" y1="4" x2="10" y2="4" />
                                                <line x1="14" y1="4" x2="20" y2="4" />
                                                <rect x="4" y="8" width="6" height="12" rx="2" />
                                                <rect x="14" y="8" width="6" height="6" rx="2" />
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Venders</span>
                                </a>
                                <ul id="dash_scrumboard" class="nav flex-column collapse  nav-children">
                                    <li class="nav-item">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-board.html"><span class="nav-link-text">All Venders</span></a>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a class="nav-link" href="kanban-board.html"><span class="nav-link-text">Update Venders</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pipeline.html"><span class="nav-link-text">Create Venders</span></a>
                                            </li>
                                        </ul>	
                                    </li>	
                                </ul>	
                            </li>
                            
                        </ul>
                    </div>
                    
                    
                </div>
            </div>
            <!-- /Main Menu -->
        </div>
        <div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>
        <!-- /Vertical Nav -->

        <!-- Chat Popup -->
        <div class="hk-chatbot-popup">
            <header>
                <div class="chatbot-head-top">
                    <a class="btn btn-sm btn-icon btn-dark btn-rounded" href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-notifications-active"></i><span>Send push notifications</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-volume-off"></i><span>Mute Chat</span></a>
                    </div>
                    <span class="text-white">Chat with Us</span>
                    <a id="minimize_chatbot" href="javascript:void(0);" class="btn btn-sm btn-icon btn-dark btn-rounded">
                        <span class="icon"><span class="feather-icon"><i data-feather="minus"></i></span></span>
                    </a>
                </div>
                <div class="separator-full separator-light mt-0 opacity-10"></div>
                <div class="media-wrap">
                    <div class="media">
                        <div class="media-head">
                            <div class="avatar avatar-sm avatar-soft-primary avatar-icon avatar-rounded position-relative">
                                <span class="initial-wrap">
                                    <i class="ri-customer-service-2-line"></i>
                                </span>
                                <span class="badge badge-success badge-indicator badge-indicator-lg badge-indicator-nobdr position-bottom-end-overflow-1"></span>
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="user-name">Chat Robot</div>
                            <div class="user-status">Online</div>
                        </div>


                    </div>
                </div>
            </header>
            
        </div>
        
        
        <!-- /Chat Popup -->

        <!-- Main Content -->
         <div class="hk-pg-wrapper">
            <div class="container-xxl">
                <!-- Page Header -->
                
                <!-- /Page Header -->

                <!-- Page Body -->
                <?php echo $__env->yieldContent('content'); ?>
                
                
                


                
                <!-- /Page Body -->		
            </div>
            
            <!-- Page Footer -->
            
            <!-- / Page Footer -->

        </div> 
        <!-- /Main Content -->
    </div>
    <!-- /Wrapper -->

    <!-- jQuery -->
    <script src="<?php echo e(asset('vendors/jquery/dist/jquery.min.js')); ?>"></script>

    <!-- Bootstrap Core JS -->
    <script src="<?php echo e(asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- FeatherIcons JS -->
    <script src="<?php echo e(asset('dist/js/feather.min.js')); ?>"></script>

    <!-- Fancy Dropdown JS -->
    <script src="<?php echo e(asset('dist/js/dropdown-bootstrap-extended.js')); ?>"></script>

    <!-- Simplebar JS -->
    <script src="<?php echo e(asset('vendors/simplebar/dist/simplebar.min.js')); ?>"></script>
    
    <!-- Data Table JS -->
    <script src="<?php echo e(asset('vendors/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/datatables.net-bs5/js/dataTables.bootstrap5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/datatables.net-select/js/dataTables.select.min.js')); ?>"></script>

    <!-- Daterangepicker JS -->
    <script src="<?php echo e(asset('vendors/moment/min/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/daterangepicker/daterangepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/daterangepicker-data.js')); ?>"></script>

    <!-- Amcharts Maps JS -->
    <script src="<?php echo e(asset('vendors/%40amcharts/amcharts4/core.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/%40amcharts/amcharts4/maps.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/%40amcharts/amcharts4-geodata/worldLow.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/%40amcharts/amcharts4-geodata/worldHigh.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/%40amcharts/amcharts4/themes/animated.js')); ?>"></script>

    <!-- Apex JS -->
    <script src="<?php echo e(asset('vendors/apexcharts/dist/apexcharts.min.js')); ?>"></script>

    <!-- Init JS -->
    <script src="<?php echo e(asset('dist/js/init.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/chips-init.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/dashboard-data.js')); ?>"></script>
</body>

<!-- Mirrored from hencework.com/theme/jampack/classic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Oct 2022 18:50:05 GMT -->
</html><?php /**PATH /home/ayodhya/Desktop/websales/resources/views/dashboardlayout.blade.php ENDPATH**/ ?>