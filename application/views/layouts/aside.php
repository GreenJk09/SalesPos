 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->

   <a href="" class="brand-link">
     <img src="<?php echo base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">System Ventas</span>
   </a>


   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="<?php echo base_url()?>assets/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block"><?php echo $this->session->userdata("nombre") ?></a>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item menu-open">
           <a href="<?php echo base_url()?>dashboard" class="nav-link ">
             <i class="nav-icon fas fa-home"></i>
             <p>
               Inicio
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-cogs"></i>
             <p>
                Mantenimiento
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo base_url();?>mantenimiento/categorias" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p> Categorías</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo base_url();?>mantenimiento/productos" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p> Productos</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo base_url();?>mantenimiento/clientes" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p> Clientes</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-share-alt"></i>
             <p>
                Movimientos
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo base_url() ?>movimientos/ventas" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p> Ventas</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class=" nav-icon fas fa-print"></i>
             <p>
                Reportes
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo base_url() ?>reportes/productos" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Productos</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo base_url() ?>reportes/clientes" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Clientes</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo base_url() ?>reportes/ventas" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Ventas</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-user-circle"></i>
             <p>
                Administrador
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo base_url() ?>administrador/usuarios" class="nav-link">
                 <i class="nav-icon far fa-circle nav-icon"></i>
                 <p>Usuarios</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo base_url() ?>administrador/permisos" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Permiso</p>
               </a>
             </li>
           </ul>
         </li>
       </ul>

       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>