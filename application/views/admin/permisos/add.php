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
                     <h3 class="card-title">Nuevo</h3>
                 </div>
                 <div class="card-body">

                     <div class="row">
                         <div class="col-12">
                             <?php if ($this->session->flashdata("error")) : ?>
                                 <div class="alert alert-danger alert-dismissible">
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                     <p><i class="icon fa fa-ban"><?php echo $this->session->flashdata("error"); ?></i></p>
                                 </div>
                             <?php endif ?>

                             <form action="<?= base_url() ?>administrador/permisos/store" method="POST">
                                 <div class="form-group">
                                     <label for="rol">Roles:</label>
                                     <select name="rol" id="rol" class="form-control">
                                         <?php foreach($roles as $rol):?>
                                            <option value="<?php echo $rol->id;?>"><?php echo $rol->nombre;?></option>
                                         <?php endforeach;?>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="menu">Menú:</label>
                                     <select name="menu" id="menu" class="form-control">
                                         <?php foreach($menus as $menu):?>
                                            <option value="<?php echo $menu->id;?>"><?php echo $menu->nombre;?></option>
                                         <?php endforeach;?>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="read">Leer: </label>
                                     <label class="form-check-inline form-check-label">
                                         <input type="radio" class="form-check-input" name="read" value="1" checked="checked">Si 
                                     </label>
                                     <label class="form-check-inline">
                                         <input type="radio" class="form-check-input" name="read" value="0" checked="checked">No 
                                     </label>
                                 </div>
                                 <div class="form-group">
                                     <label for="insert">Agregar: </label>
                                     <label class="form-check-inline">
                                         <input type="radio" class="form-check-input" name="insert" value="1" checked="checked">Si 
                                     </label>
                                     <label class="form-check-inline">
                                         <input type="radio" class="form-check-input" name="insert" value="0" checked="checked">No 
                                     </label>
                                 </div>
                                 <div class="form-group">
                                     <label for="update">Actualizar: </label>
                                     <label class="form-check-inline">
                                         <input type="radio" class="form-check-input" name="update" value="1" checked="checked">Si 
                                     </label>
                                     <label class="form-check-inline">
                                         <input type="radio" class="form-check-input" name="update" value="0" checked="checked">No
                                     </label>
                                 </div>
                                 <div class="form-group">
                                     <label for="delete">Eliminar: </label>
                                     <label class="form-check-inline">
                                         <input type="radio" class="form-check-input" name="delete" value="1" checked="checked">Si 
                                     </label>
                                     <label class="form-check-inline">
                                         <input type="radio" class="form-check-input" name="delete" value="0" checked="checked">No 
                                     </label>
                                 </div>
                                 <div class="form-group">
                                     <button type="submit" class="btn btn-success"><span class="fas fa-save"></span>  Guardar</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
                 <!-- /.card-body -->
                 <!-- /.card-footer-->
             </div>
         </div>
 </div><!-- /.container-fluid -->
 </section>