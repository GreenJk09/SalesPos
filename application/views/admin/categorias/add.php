 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Categorías </h1>
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

                             <form action="<?= base_url() ?>mantenimiento/categorias/store" method="POST">
                                 <div class="form-group">
                                     <label for="nombre">Nombre</label>
                                     <input type="text" class="form-control <?php echo !empty(form_error("nombre"))? 'is-invalid':'';?>" id="nombre" name="nombre"
                                      value="<?php echo set_value("nombre")?>">
                                     <?php echo form_error("nombre","<span class='help-block'>","</span>")?>
                                 </div>
                                 <div class="form-group">
                                     <label for="descripciom">Descripcion</label>
                                     <input type="text" class="form-control" id="descripcion" name="descripcion">
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