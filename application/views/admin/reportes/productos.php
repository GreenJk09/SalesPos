 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Productos</h1>
                 </div>
                 <div class="col-sm-6">
                 </div>
             </div>
             <div class="card">
                 <div class="card-header">
                     <h3 class="card-title">Listado</h3>
                 </div>
                 <div class="card-body">

                     <hr>
                     <div class="row">
                         <div class="col-12">
                             <table id="example" class="table table-bordered btn-hover">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>Codigo</th>
                                         <th>Nombre</th>
                                         <th>Descripción</th>
                                         <th>Precio</th>
                                         <th>Stock</th>
                                         <th>Categoría</th>
                                         <th>Opciones</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php if (!empty($productos)) : ?>
                                         <?php foreach ($productos as $producto) : ?>
                                             <tr>
                                                 <td><?php echo $producto->id; ?></td>
                                                 <td><?php echo $producto->codigo; ?></td>
                                                 <td><?php echo $producto->nombre; ?></td>
                                                 <td><?php echo $producto->descripcion; ?></td>
                                                 <td><?php echo $producto->precio; ?></td>
                                                 <td><?php echo $producto->stock; ?></td>
                                                 <td><?php echo $producto->categoria; ?></td>
                                                 <?php $dataproducto = $producto->id . "*" . $producto->codigo
                                                        . "*" . $producto->nombre . "*" . $producto->descripcion . "*" . $producto->precio . "*" . $producto->stock
                                                        . "*" . $producto->categoria ?>
                                                 <td>
                                                     <div class="btn-group">
                                                         <button type="button" class="btn btn-info btn-view-producto" data-toggle="modal" data-target="#modal-default" value="<?php echo $dataproducto; ?>">
                                                             <span class="fa fa-search"></span>
                                                         </button>
                                                     </div>
                                                 </td>
                                             </tr>
                                         <?php endforeach ?>
                                     <?php endif ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
                 <!-- /.card-body -->
                 <!-- /.card-footer-->
             </div>
         </div>
 </div><!-- /.container-fluid -->
 </section>

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