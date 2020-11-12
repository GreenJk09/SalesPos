 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Inicio</h1>
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
             <div class="row">
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-info">
                         <div class="inner">
                             <h3><?php echo $cantClientes; ?></h3>

                             <p>Clientes</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-bag"></i>
                         </div>
                         <a href="<?php echo base_url() ?>mantenimiento/clientes" class="small-box-footer">Ver Clientes <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-success">
                         <div class="inner">
                             <h3><?php echo $cantProductos ?></h3>

                             <p>Productos</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-stats-bars"></i>
                         </div>
                         <a href="<?php echo base_url() ?>mantenimiento/productos" class="small-box-footer">Ver Productos <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-warning">
                         <div class="inner">
                             <h3><?php echo $cantUsuarios ?></h3>

                             <p>Usuarios</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-person-add"></i>
                         </div>
                         <a href="<?php echo base_url() ?>administrador/usuarios" class="small-box-footer">Ver Usuarios <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-danger">
                         <div class="inner">
                             <h3><?php echo $cantVentas ?></h3>

                             <p>Ventas</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-pie-graph"></i>
                         </div>
                         <a href="<?php echo base_url() ?>movimientos/ventas" class="small-box-footer">Ver Ventas <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
             </div>
             <!-- /.row -->

         </div>
         <!-- ./col -->
     </section>
     <section class="content">
         <div class="row">
             <div class="col-md-12">
                 <div class="card">
                     <div class="card-header with-border">
                         <h5 class="card-title">Gráfico de Ventas</h5>

                         <div class="card-tools pull-right">
                             <select name="year" id="year" class="form-control">
                                 <?php foreach ($years as $year) : ?>
                                     <option value="<?php echo $year->year ?>"><?php echo $year->year ?></option>
                                 <?php endforeach; ?>
                             </select>
                         </div>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                         <div class="row">
                             <div class="col-md-12">
                                 <div id="grafico" style="min-width: 310px; height:400px; margin: 0 auto;"> </div>
                             </div>
                             <!-- /.col -->
                         </div>
                         <!-- /.row -->
                     </div>
                     <!-- ./card-body -->
                     <div class="card-footer">
                         <div class="row">
                             <div class="col-sm-3 col-6">

                             </div>
                         </div>
                         <!-- /.row -->
                     </div>
                     <!-- /.card-footer -->
                 </div>
                 <!-- /.card -->
             </div>
             <!-- /.col -->
         </div>
     </section>

     <!-- /.row -->
 </div>


 <!-- /.card -->