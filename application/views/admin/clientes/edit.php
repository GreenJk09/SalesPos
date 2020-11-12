 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Clientes</h1>
                 </div>
             </div>
             <div class="card">
                 <div class="card-header">
                     <h3 class="card-title">Editar</h3>
                 </div>
                 <div class="card-body">
                     <div class="row">
                     </div>

                     <div class="row">
                         <div class="col-12">
                             <?php if ($this->session->flashdata("error")) : ?>
                                 <div class="alert alert-danger alert-dismissible">
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                     <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>

                                 </div>
                             <?php endif; ?>
                             <form action="<?php echo base_url(); ?>mantenimiento/clientes/update" method="POST">
                                 <input type="hidden" name="idcliente" value="<?php echo $cliente->id; ?>">

                                 <div class="form-group">
                                     <label for="nombre">Nombre</label>
                                     <input type="text" class="form-control <?php echo form_error("nombre") != false ? 'is-invalid' : ''; ?>" id="nombre" name="nombre" value="<?php echo form_error("nombre") != false ? set_value("nombre") : $cliente->nombre; ?>">
                                     <?php echo form_error("nombre", "<span class='help-block'>", "</span>"); ?>
                                 </div>
                                 <div class="form-group">
                                     <label for="tipocliente">Tipo de Cliente</label>
                                     <select name="tipocliente" id="tipocliente" class="form-control <?php echo form_error("tipocliente") != false ? 'is-invalid' : ''; ?>">
                                         <option value="">Seleccione...</option>
                                         <?php if (form_error("tipocliente") != false || set_value("tipocliente") != false) : ?>
                                             <?php foreach ($tipoclientes as $tipocliente) : ?>
                                                 <option value="<?php echo $tipocliente->id; ?>" <?php echo set_select("tipocliente", $tipocliente->id) ?>><?php echo $tipocliente->nombre ?></option>
                                             <?php endforeach; ?>
                                         <?php else : ?>
                                            <?php foreach ($tipoclientes as $tipocliente) : ?>
                                                 <option value="<?php echo $tipocliente->id; ?>" <?php echo$tipocliente->id == $cliente->tipo_cliente_id ? 'selected':''; ?>><?php echo $tipocliente->nombre ?></option>
                                             <?php endforeach; ?>
                                         <?php endif; ?>
                                     </select>
                                     <?php echo form_error("tipocliente", "<span class='help-block'>", "</span>"); ?>
                                 </div>
                                 <div class="form-group">
                                     <label for="tipodocumento">Tipo de Documento</label>
                                     <select name="tipodocumento" id="tipodocumento" class="form-control <?php echo form_error("tipodocumento") != false ? 'is-invalid' : ''; ?>">
                                         <option value="">Seleccione...</option>
                                         <?php if (form_error("tipodocumento") != false || set_value("tipocliente") != false) : ?>
                                             <?php foreach ($tipodocumentos as $tipodocumento) : ?>
                                                 <option value="<?php echo $tipodocumento->id; ?>" <?php echo set_select("tipocliente", $tipodocumento->id) ?>><?php echo $tipodocumento->nombre ?></option>
                                             <?php endforeach; ?>
                                         <?php else : ?>
                                            <?php foreach ($tipodocumentos as $tipodocumento)  : ?>
                                                 <option value="<?php echo $tipodocumento->id; ?>" <?php echo$tipodocumento->id == $cliente->tipo_documento_id ? 'selected':''; ?>><?php echo $tipodocumento->nombre ?></option>
                                             <?php endforeach; ?>
                                         <?php endif; ?>
                                     </select>
                                     <?php echo form_error("tipodocumento", "<span class='help-block'>", "</span>"); ?>
                                 </div>
                                 <div class="form-group">
                                     <label for="numero">Numero del Documento:</label>
                                     <input type="text" class="form-control <?php echo form_error("numero") != false ? 'is-invalid' : ''; ?>"" id=" numero" name="numero" value="<?php echo form_error("numero") != false ? set_value("numero") : $cliente->num_documento; ?>">
                                     <?php echo form_error("numero", "<span class='help-block'>", "</span>"); ?>
                                 </div>

                                 <div class="form-group">
                                     <label for="telefono">Telefono:</label>
                                     <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $cliente->telefono; ?>">
                                 </div>
                                 <div class="form-group">
                                     <label for="direccion">Direccion:</label>
                                     <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $cliente->direccion; ?>">
                                 </div>

                                 <div class="form-group">
                                     <button type="submit" class="btn btn-success btn-flat">Guardar</button>
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