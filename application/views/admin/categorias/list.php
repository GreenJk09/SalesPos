 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Categorías</h1>
                 </div>
             </div>
             <div class="card">
                 <div class="card-header">
                     <h3 class="card-title">Listado</h3>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-12">
                             <?php if ($permisos->insert == 1) : ?>
                                 <a href="<?= base_url() ?>mantenimiento/categorias/add" class=" btn btn-primary "><span class="fas fa-plus"></span> Agregar Categorías</a>
                             <?php endif; ?>
                         </div>
                     </div>
                     <hr>
                     <div class="row">
                         <div class="col-12">
                             <table id="example1" class="table table-bordered btn-hover">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>Nombre</th>
                                         <th>Descripción</th>
                                         <th>Opciones</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php if (!empty($categorias)) : ?>
                                         <?php foreach ($categorias as $categoria) : ?>
                                             <tr>
                                                 <td><?php echo $categoria->id; ?></td>
                                                 <td><?php echo $categoria->nombre; ?></td>
                                                 <td><?php echo $categoria->descripcion; ?></td>
                                                 <td>
                                                     <div class="btn-group">
                                                         <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $categoria->id; ?>">
                                                             <span class="fa fa-search"></span>
                                                         </button>
                                                         <?php if ($permisos->update == 1) : ?>
                                                             <a href="<?= base_url() ?>mantenimiento/categorias/edit/<?php echo $categoria->id; ?>" class="btn btn-warning"><span class="fas fa-pencil-alt"></span></a>
                                                         <?php endif; ?>
                                                         <?php if ($permisos->delete == 1) : ?>
                                                             <a href="<?= base_url() ?>mantenimiento/categorias/delete/<?= $categoria->id; ?>" class="btn btn-danger btn-remove"><span class="fas fa-trash-alt"></span></a>
                                                         <?php endif; ?>
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