<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ventas
        </h1>

    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Nueva</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">

                        <form action="<?php echo base_url(); ?>movimientos/ventas/store" method="POST">
                            <div class="form-group form-row">
                                <div class="col-md-3">
                                    <label for="">Comprobante:</label>
                                    <select name="comprobantes" id="comprobantes" class="form-control" required>
                                        <option value="">Seleccione...</option>
                                        <?php foreach ($tipocomprobantes as $tipocomprobante) : ?>
                                            <?php $datacomprobante = $tipocomprobante->id . "*" . $tipocomprobante->cantidad . "*" . $tipocomprobante->igv . "*" . $tipocomprobante->serie; ?>
                                            <option value="<?php echo $datacomprobante; ?>"><?php echo $tipocomprobante->nombre ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <input type="hidden" id="idcomprobante" name="idcomprobante">
                                    <input type="hidden" id="igv">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Serie:</label>
                                    <input type="text" class="form-control" id="serie" name="serie" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Numero:</label>
                                    <input type="text" class="form-control" id="numero" name="numero" readonly>
                                </div>

                            </div>
                            <div class="form-group form-row">
                                <div class="col-md-6">
                                    <label for="">Cliente:</label>
                                    <div class="input-group">
                                        <input type="hidden" name="idcliente" id="idcliente">
                                        <input type="text" class="form-control" disabled="disabled" id="cliente">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal-default"><span class="fa fa-search"></span> Buscar</button>
                                        </span>
                                    </div><!-- /input-group -->
                                </div>
                                <div class="col-md-3">
                                    <label for="">Fecha:</label>
                                    <input type="date" class="form-control" name="fecha" required>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <div class="col-md-6">
                                    <label for="">Producto:</label>
                                    <input type="text" class="form-control" id="producto">
                                </div>
                                <div class="col-md-2">
                                    <label for="">&nbsp;</label>
                                    <button id="btn-agregar" type="button" class="btn btn-success btn-flat btn-block"><span class="fa fa-plus"></span> Agregar</button>
                                </div>
                            </div>
                            <table id="tbventas" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>

                                        <th>Precio</th>
                                        <th>Stock Max.</th>
                                        <th>Cantidad</th>
                                        <th>Importe</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>

                            <div class="form-group form-row">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Subtotal:</span>
                                        <input type="text" class="form-control" placeholder="Subtotal" name="subtotal" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-text">IVA:</span>
                                        <input type="text" class="form-control" placeholder="IVA" name="igv" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Descuento:</span>
                                        <input type="text" class="form-control" placeholder="Descuento" name="descuento" value="0.00" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Total:</span>
                                        <input type="text" class="form-control" placeholder="Total" name="total" readonly="readonly">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade row" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lista de Clientes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body row">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Opcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($clientes)) : ?>
                            <?php foreach ($clientes as $cliente) : ?>
                                <tr>
                                    <td><?php echo  $cliente->id; ?></td>
                                    <td><?php echo  $cliente->nombre; ?></td>
                                    <td><?php echo  $cliente->num_documento; ?></td>
                                    <?php $datacliente = $cliente->id . "*" . $cliente->nombre . "*" . $cliente->tipocliente . "*" . $cliente->tipodocumento . "*" .
                                        $cliente->num_documento . "*" . $cliente->telefono . "*" . $cliente->direccion; ?>
                                    <td>
                                       <button type="button" class="btn btn-success btn-check" value="<?php echo $datacliente;?>"><span class="fas fa-check"></span></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
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