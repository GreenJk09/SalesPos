 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Reportes</h1>
                 </div>
                 <div class="col-sm-6">
                 </div>
             </div>
             <div class="card">
                 <div class="card-header">
                     <h3 class="card-title">Ventas</h3>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <form action="<?php echo current_url();?>" method="POST" class="form-check">
                             <div class="form-group form-row">
                                 <label>Desde:</label>
                                 <div class="col-md-3">
                                     <input type="date" class="form-control form-check-label" name="fechainicio" value="<?php echo !empty($fechainicio) ? $fechainicio: '';?>">
                                 </div>
                                 <label>Hasta:</label>
                                 <div class="col-3">
                                 <input type="date" class="form-control" name="fechafin" value="<?php echo !empty($fechafin) ? $fechafin: '';?>">
                                 </div>
                                 <div class="col-4">
                                     <input type="submit" name="buscar" value="Buscar" class="btn btn-primary">
                                     <a href="<?php echo base_url();?>reportes/ventas" class="btn btn-danger">Restablecer</a>
                                 </div>
                             </div>
                         </form>
                         <div class="col-md-12">
                             <table id="example" class="table table-bordered table-hover">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>Nombre del Cliente</th>
                                         <th>Tipo Comprobante</th>
                                         <th>Número del Comprobante</th>
                                         <th>Fecha</th>
                                         <th>Total</th>
                                         <th>Opciones</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php if (!empty($ventas)) : ?>
                                         <?php foreach ($ventas as $venta) : ?>
                                             <tr>
                                                 <td><?= $venta->id ?></td>
                                                 <td><?= $venta->nombre ?></td>
                                                 <td><?= $venta->tipocomprobante ?></td>
                                                 <td><?= $venta->num_documento ?></td>
                                                 <td><?= $venta->fecha ?></td>
                                                 <td><?= $venta->total ?></td>
                                                 <td>
                                                     <button type="button" class="btn btn-info btn-view-venta" value="<?php echo $venta->id ?>" data-toggle="modal" data-target="#modal-default"><span class="fas fa-search"></span></button>
                                                 </td>
                                             </tr>
                                         <?php endforeach; ?>
                                     <?php endif; ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- /.card-body -->
             <!-- /.card-footer-->
             <!-- /.container-fluid -->
     </section>
 </div>

 <div class="modal fade" id="modal-default">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Información de la Venta</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">

             </div>
             <div class="modal-footer justify-content-between">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                 <button type='button' class="btn btn-primary btn-print"><span class="fas fa-print"> Imprimir</span></button>
             </div>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>
 <!-- /.modal -->