 <!-- BEGIN LOADER -->
 <div id="load_screen">
     <div class="loader">
         <div class="loader-content">
             <div class="spinner-grow align-self-center"></div>
         </div>
     </div>
 </div>
 <!--  END LOADER -->

 <!--  BEGIN NAVBAR  -->
 <div class="header-container fixed-top">
     <header class="header navbar navbar-expand-sm">
         <ul class="navbar-item theme-brand flex-row text-center">
             <!-- <li class="nav-item theme-logo">
                 <a href="index.html">
                     <img src="{{asset('backend/assets/img/logo.svg')}}" class="navbar-logo" alt="logo">
                 </a>
             </li> -->
             <li class="nav-item theme-text">
                 <a href="{{route('index')}}" class="nav-link"> Maimoon </a>
             </li>

         </ul>



         <!-- <ul class="navbar-item flex-row ml-md-auto">
             <li class="nav-item dropdown user-profile-dropdown">
                 <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <img src="{{asset('backend/assets/img/profile-16.jpg')}}" alt="avatar" />
                 </a>
                 <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                     <div class="">
                         <div class="dropdown-item">
                             <a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                     <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                     <polyline points="16 17 21 12 16 7"></polyline>
                                     <line x1="21" y1="12" x2="9" y2="12"></line>
                                 </svg> Log Out
                                 <form id="logout-form" action="" method="POST" style="display: none;">
                                     {{ csrf_field() }}
                                 </form>
                             </a>
                         </div>
                     </div>
                 </div>
             </li>
         </ul> -->
     </header>
 </div>
 <!--  END NAVBAR  -->


 <!--  BEGIN NAVBAR  -->
 <div class="sub-header-container">
     <header class="header navbar navbar-expand-sm">
         <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                 <line x1="3" y1="12" x2="21" y2="12"></line>
                 <line x1="3" y1="6" x2="21" y2="6"></line>
                 <line x1="3" y1="18" x2="21" y2="18"></line>
             </svg></a>

         <ul class="navbar-nav flex-row">
             <li>
                 <div class="page-header">
                     <nav class="breadcrumb-one" aria-label="breadcrumb">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item">
                                 <a href="{{route('index')}}">Dashboard</a>
                             </li>

                         </ol>
                     </nav>
                 </div>
             </li>
         </ul>
     </header>
 </div>
 <!--  END NAVBAR  -->