 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Clientes </h1>
                 </div>
                 <div class="col-sm-6">
                 </div>
             </div>
             <div class="card">
                 <div class="card-header">
                     <h3 class="card-title">Listado</h3>
                 </div>
                 <div class="card-body">
                     
                     <div class="row">
                         <div class="col-md-12">
                             <table id="example" class="table table-bordered table-hover">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>Nombre</th>
                                         <th>Tipo de Cliente</th>
                                         <th>Tipo de Documento</th>
                                         <th>Numero de Documento</th>
                                         <th>Telefono</th>
                                         <th>Direccion</th>
                                         <th>Opciones</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php if (!empty($clientes)) : ?>
                                         <?php foreach ($clientes as $cliente) : ?>
                                             <tr>
                                                 <td><?php echo  $cliente->id; ?></td>
                                                 <td><?php echo  $cliente->nombre; ?></td>
                                                 <td><?php echo  $cliente->tipocliente; ?></td>
                                                 <td><?php echo  $cliente->tipodocumento; ?></td>
                                                 <td><?php echo  $cliente->num_documento; ?></td>
                                                 <td><?php echo  $cliente->telefono; ?></td>
                                                 <td><?php echo $cliente->direccion; ?></td>
                                                 <?php $datacliente = $cliente->id . "*" . $cliente->nombre . "*" . $cliente->tipocliente . "*" . $cliente->tipodocumento . "*" .
                                                        $cliente->num_documento . "*" . $cliente->telefono . "*" . $cliente->direccion; ?>
                                                 <td>
                                                     <div class="btn-group">
                                                         <button type="button" class="btn btn-info btn-view-cliente" data-toggle="modal" data-target="#modal-default" value="<?php echo $datacliente ?>">
                                                             <span class="fa fa-search"></span>
                                                         </button>
                                                     </div>
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
                 <h4 class="modal-title">Información</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">

             </div>
             <div class="modal-footer justify-content-between">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
             </div>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>
 <!-- /.modal -->