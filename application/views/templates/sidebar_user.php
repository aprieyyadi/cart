 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-utensils"></i>
         </div>
         <div class="sidebar-brand-text mx-3">JAJAKE<sup>2</sup></div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a href="<?= base_url('user') ?>" class="nav-link">
             <i class="fas fa-fw fa-shopping-cart"></i>
             <span>Produk</span>
         </a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Menu
     </div>


     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
         <a href="<?= base_url('user/pesananku') ?>" class="nav-link">
             <i class="fas fa-fw fa-clipboard"></i>
             <span>Pesananku</span>
         </a>
     </li>



     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Logout -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('home'); ?>">
             <i class="fas fa-fw fa-sign-out-alt"></i>
             <span>Logout</span></a>
     </li>

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->