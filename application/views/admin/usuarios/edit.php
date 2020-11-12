 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Usuarios</h1>
                 </div>
             </div>
             <div class="card">
                 <div class="card-header">
                     <h3 class="card-title">Editar</h3>
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

                             <form action="<?= base_url() ?>administrador/usuarios/update" method="POST">
                             <input type="hidden" name="idusuario" value="<?php echo $usuario->id?>">
                                 <div class="form-group">
                                     <label for="nombres">Nombres:</label>
                                     <input type="text" class="form-control" id="nombres" name="nombres"
                                      value="<?php echo $usuario->nombres;?>">
                                 </div>
                                 <div class="form-group">
                                     <label for="apellidos">Apellidos</label>
                                     <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $usuario->apellidos;?>">
                                 </div>
                                 <div class="form-group">
                                     <label for="telefono">Teléfono:</label>
                                     <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $usuario->telefono;?>">
                                 </div>
                                 <div class="form-group">
                                     <label for="email">Email:</label>
                                     <input type="email" class="form-control" id="email" name="email" value="<?php echo $usuario->email;?>">
                                 </div>
                                 <div class="form-group">
                                     <label for="username">Usuario:</label>
                                     <input type="text" class="form-control" id="username" name="username" value="<?php echo $usuario->username;?>">
                                 </div>
                                 
                                 <div class="form-group">
                                     <label for="rol">Roles:</label>
                                    <select name="rol" id="rol" class="form-control">
                                        <?php foreach($roles as $rol):?>
                                            <option value="<?php echo $rol->id?>" <?php echo $rol->id == $usuario->rol_id ? "selected": "";?>><?php echo $rol->nombre?> </option>
                                        <?php endforeach;?>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                     <button type="submit" class="btn btn-success">Guardar</button>
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