 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Productos</h1>
                 </div>
             </div>
             <div class="card">
                 <div class="card-header">
                     <h3 class="card-title">Nuevo</h3>
                 </div>
                 <div class="card-body">
                     <div class="row">
                     </div>

                     <div class="row">
                         <div class="col-12">
                             <?php if ($this->session->flashdata("error")) : ?>
                                 <div class="alert alert-danger alert-dismissible">
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                     <p><i class="icon fa fa-ban"><?php echo $this->session->flashdata("error"); ?></i></p>
                                 </div>
                             <?php endif ?>

                             <form action="<?= base_url() ?>mantenimiento/productos/store" method="POST">
                                 <div class="form-group">
                                     <label for="codigo">Codigo</label>
                                     <input type="text" class="form-control <?php echo !empty(form_error('codigo'))? 'is-invalid':'';?>" id="codigo" name="codigo"
                                     value="<?php echo set_value('codigo');?>">
                                     <?php echo form_error("codigo","<span class='help-block'>","</span>")?>
                                 </div>
                                 <div class="form-group">
                                     <label for="nombre">Nombre</label>
                                     <input type="text" class="form-control <?php echo !empty(form_error('nombre'))? 'is-invalid':'';?>" id="nombre" name="nombre"
                                     value="<?php echo set_value('nombre');?>">
                                     <?php echo form_error("nombre","<span class='help-block'>","</span>")?>
                                 </div>
                                 <div class="form-group">
                                     <label for="descripcion">Descripción</label>
                                     <input type="text" class="form-control" id="descripcion" name="descripcion">
                                 </div>
                                 <div class="form-group">
                                     <label for="precio">Precio</label>
                                     <input type="text" class="form-control <?php echo !empty(form_error('precio'))? 'is-invalid':'';?>" id="precio" name="precio"
                                     value="<?php echo set_value('precio');?>">
                                     <?php echo form_error("precio","<span class='help-block'>","</span>")?>
                                 </div>
                                 <div class="form-group">
                                     <label for="stock">Stock</label>
                                     <input type="text" class="form-control <?php echo !empty(form_error('stock'))? 'is-invalid':'';?>" id="stock" name="stock"
                                     value="<?php echo set_value('stock');?>">
                                     <?php echo form_error("stock","<span class='help-block'>","</span>")?>
                                 </div>
                                 <div class="form-group">
                                     <label for="categoria">Categoría</label>
                                     <select name="categoria" id="categoria" class="form-control">
                                         <option value="">Seleccione...</option>
                                         <?php foreach($categorias as $categoria):?>
                                            <option value="<?php echo $categoria->id?>"><?php echo $categoria->nombre;?></option>
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