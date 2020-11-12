 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Permisos</h1>
                 </div>
             </div>
             <div class="card">
                 <div class="card-header">
                     <h3 class="card-title">Listado</h3>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-12">
                             <a href="<?= base_url() ?>administrador/permisos/add" class=" btn btn-primary "><span class="fas fa-plus"></span> Agregar Permisos</a>
                         </div>
                     </div>
                     <hr>
                     <div class="row">
                         <div class="col-12">
                             <table id="example1" class="table table-bordered btn-hover">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>Menú</th>
                                         <th>Rol</th>
                                         <th>Leer</th>
                                         <th>Insertar</th>
                                         <th>Actualizar</th>
                                         <th>Eliminar</th>
                                         <th>Opciones</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php if (!empty($permisos)) : ?>
                                         <?php foreach ($permisos as $permiso) : ?>
                                             <tr>
                                                 <td><?php echo $permiso->id; ?></td>
                                                 <td><?php echo $permiso->menu; ?></td>
                                                 <td><?php echo $permiso->rol; ?></td>
                                                 <td>
                                                     <?php if ($permiso->read == 0) : ?>
                                                         <span class="fas fa-times"></span>
                                                     <?php else : ?>
                                                         <span class="fas fa-check"></span>
                                                     <?php endif; ?>
                                                 </td>
                                                 <td><?php if ($permiso->insert == 0) : ?>
                                                         <span class="fas fa-times"></span>
                                                     <?php else : ?>
                                                         <span class="fas fa-check"></span>
                                                     <?php endif; ?>
                                                 </td>
                                                 <td>
                                                     <?php if ($permiso->update == 0) : ?>
                                                         <span class="fas fa-times"></span>
                                                     <?php else : ?>
                                                         <span class="fas fa-check"></span>
                                                     <?php endif; ?>
                                                 </td>
                                                 <td>
                                                     <?php if ($permiso->delete == 0) : ?>
                                                         <span class="fas fa-times"></span>
                                                     <?php else : ?>
                                                         <span class="fas fa-check"></span>
                                                     <?php endif; ?>
                                                 </td>
                                                 <td>
                                                     <div class="btn-group">
                                                         <a href="<?= base_url() ?>administrador/permisos/edit/<?php echo $permiso->id; ?>" class="btn btn-warning"><span class="fas fa-pencil-alt"></span></a>
                                                         <a href="<?= base_url() ?>administrador/permisos/delete/<?php echo $permiso->id; ?>" class="btn btn-danger "><span class="fas fa-trash-alt"></span></a>
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