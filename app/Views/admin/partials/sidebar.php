   <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
     <!--begin::Sidebar Brand-->
     <div class="sidebar-brand">
       <!--begin::Brand Link-->
       <a href="./index.html" class="brand-link">
         <!--begin::Brand Image-->
         <img src="<?= base_url("adminlte/assets/img/AdminLTELogo.png") ?>" alt="AdminLTE Logo"
           class="brand-image opacity-75 shadow" />
         <!--end::Brand Image-->
         <!--begin::Brand Text-->
         <span class="brand-text fw-light">Admin Dashboard</span>
         <!--end::Brand Text-->
       </a>
       <!--end::Brand Link-->
     </div>
     <!--end::Sidebar Brand-->
     <!--begin::Sidebar Wrapper-->
     <div class="sidebar-wrapper">
       <nav class="mt-2">
         <!--begin::Sidebar Menu-->
         <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
           aria-label="Main navigation" data-accordion="false" id="navigation">

           <li class="nav-item">
             <a href="dashboard" class="nav-link active">
               <i class="nav-icon bi bi-speedometer"></i>
               <p>
                 Dashboard

               </p>
             </a>

           </li>

           <li class="nav-item">
             <a href="#" class="nav-link">
               <i class="nav-icon bi bi-box-seam-fill"></i>
               <p>
                 Posts
                 <i class="nav-arrow bi bi-chevron-right"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="#" class="nav-link">
                   <i class="nav-icon bi bi-circle"></i>
                   <p>All Posts</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="#" class="nav-link">
                   <i class="nav-icon bi bi-circle"></i>
                   <p>Add Posts</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="#" class="nav-link">
                   <i class="nav-icon bi bi-circle"></i>
                   <p>Draft Posts</p>
                 </a>
               </li>
             </ul>
           </li>
           <li class="nav-item">
             <a href="#" class="nav-link">
               <i class="nav-icon bi bi-clipboard-fill"></i>
               <p>
                 Comments

                 <i class="nav-arrow bi bi-chevron-right"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="#" class="nav-link">
                   <i class="nav-icon bi bi-circle"></i>
                   <p>All comments</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="#" class="nav-link">
                   <i class="nav-icon bi bi-circle"></i>
                   <p>Pending Approval</p>
                 </a>
               </li>

             </ul>
           </li>
           <li class="nav-item">
             <a href="#" class="nav-link">
               <i class="nav-icon bi bi-clipboard-fill"></i>
               <p>
                 Users

                 <i class="nav-arrow bi bi-chevron-right"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="#" class="nav-link">
                   <i class="nav-icon bi bi-circle"></i>
                   <p>All Users</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="#" class="nav-link">
                   <i class="nav-icon bi bi-circle"></i>
                   <p>Create User</p>
                 </a>
               </li>

             </ul>

           </li>

           <li class="nav-item">
             <a href="#" class="nav-link">
               <i class="nav-icon bi bi-palette"></i>
               <p>Permissions</p>
             </a>
           </li>

           <li class="nav-item">
             <a href="#" class="nav-link">
               <i class="nav-icon bi bi-palette"></i>
               <p>Profile</p>
             </a>
           </li>

         </ul>
         <!--end::Sidebar Menu-->
       </nav>
     </div>
     <!--end::Sidebar Wrapper-->
   </aside>