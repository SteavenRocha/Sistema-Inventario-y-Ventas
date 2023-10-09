<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ventas</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Ventas</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <div class="row mb-3">

            <div class="col-md-9">

                <div class="row">
                    <!-- INPUT PARA INGRESO DEL CODIGO DE BARRAS O DESCRIPCION DEL PRODUCTO -->
                    <div class="col-md-12 mb-3">

                        <div class="form-group mb-2">

                            <label class="col-form-label" for="iptCodigoVenta">
                                <i class="fas fa-barcode fs-6"></i>
                                <span class="small">Productos</span>
                            </label>

                            <input type="text" class="form-control form-control-sm" id="iptCodigoVenta" placeholder="Ingrese el código de barras o el nombre del producto">
                        </div>
                    </div>

                    <!-- ETIQUETA QUE MUESTRA LA SUMA TOTAL DE LOS PRODUCTOS AGREGADOS AL LISTADO -->
                    <div class="col-md-6 mb-3">
                        <h3>Total Venta: S/.<span id="totalVenta">0.00</span></h3>
                    </div>

                    <!-- BOTONES PARA VACIAR LISTADO Y COMPLETAR LA VENTA -->
                    <div class="col-md-6 text-right">
                        <button class="btn btn-primary" id="btnIniciarVenta">
                            <i class="fas fa-shopping-cart"></i> Realizar Venta
                        </button>
                        <button class="btn btn-danger" id="btnVaciarListado">
                            <i class="far fa-trash-alt"></i> Vaciar Listado
                        </button>
                    </div>

                    <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                    <div class="col-md-12">

                        <table id="lstProductosVenta" class="display nowrap table-striped w-100 shadow ">
                            <thead style="background-color: #18a2b5 !important;" class="bg-gray text-left fs-6">
                                <tr>
                                    <th>Item</th>
                                    <th>Codigo</th>
                                    <th>Id Categoria</th>
                                    <th>Categoria</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                    <th class="text-center">Opciones</th>
                                    <th>Metros</th>
                                </tr>
                            </thead>
                            <tbody class="small text-left fs-6">
                            </tbody>
                        </table>
                        <!-- / table -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-gray shadow">

                    <h5 class="card-header py-1 bg-primary text-white text-center">
                        Total Venta: S./ <span id="totalVentaRegistrar">0.00</span>
                    </h5>

                    <div class="card-body p-2">

                        <!-- SELECCIONAR TIPO DE DOCUMENTO -->
                        <div class="form-group mb-2">

                            <label class="col-form-label p-0" for="selCategoriaReg">
                                <i class="fas fa-file-alt fs-6"></i>
                                <span class="small">Documento</span><span class="text-danger">*</span>
                            </label>

                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="selDocumentoVenta">
                                <option value="0">Seleccione Documento</option>
                                <option value="1" selected="true">Boleta</option>
                                <option value="2">Factura</option>
                                <option value="3">Ticket</option>
                            </select>

                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                Debe Seleccione documento
                            </span>

                        </div>

                        <!-- SELECCIONAR TIPO DE PAGO -->
                        <div class="form-group mb-2">

                            <label class="col-form-label p-0" for="selCategoriaReg">
                                <i class="fas fa-money-bill-alt fs-6"></i>
                                <span class="small">Tipo Pago</span><span class="text-danger">*</span>
                            </label>

                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="selTipoPago">
                                <option value="0">Seleccione Tipo Pago</option>
                                <option value="1" selected="true">Efectivo</option>
                                <option value="2">Yape</option>
                                <option value="3">Plin</option>
                                <option value="4">Transferencia</option>
                            </select>

                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                Debe Ingresar tipo de pago
                            </span>

                        </div>

                        <!-- SERIE Y NRO DE BOLETA -->
                        <div class="form-group">

                            <div class="row">

                                <div class="col-md-4">

                                    <label for="iptNroSerie" class="p-0 m-0">Serie</label>

                                    <input type="text" min="0" name="iptEfectivo" id="iptNroSerie" class="form-control form-control-sm" placeholder="nro Serie" disabled>
                                </div>

                                <div class="col-md-8">

                                    <label for="iptNroVenta" class="p-0 m-0">Correlativo</label>

                                    <input type="text" min="0" name="iptEfectivo" id="iptNroVenta" class="form-control form-control-sm" placeholder="Nro Venta" disabled>

                                </div>

                            </div>

                        </div>

                        <!-- INPUT DE EFECTIVO ENTREGADO -->
                        <div class="form-group">
                            <label for="iptEfectivoRecibido" class="p-0 m-0">Efectivo recibido</label>
                            <input type="number" min="0" name="iptEfectivo" id="iptEfectivoRecibido" class="form-control form-control-sm" placeholder="Cantidad de efectivo recibida">
                        </div>

                        <!-- INPUT CHECK DE EFECTIVO EXACTO -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="chkEfectivoExacto">
                            <label class="form-check-label" for="chkEfectivoExacto">
                                Efectivo Exacto
                            </label>
                        </div>

                        <!-- MOSTRAR MONTO EFECTIVO ENTREGADO Y EL VUELTO -->
                        <div class="row mt-2">

                            <div class="col-12">
                                <h6 class="text-start fw-bold">Monto Efectivo: S./ <span id="EfectivoEntregado">0.00</span></h6>
                            </div>

                            <div class="col-12">
                                <h6 class="text-start text-danger fw-bold">Vuelto: S./ <span id="Vuelto">0.00</span>
                                </h6>
                            </div>

                        </div>

                        <!-- MOSTRAR EL SUBTOTAL, IGV Y TOTAL DE LA VENTA -->
                        <div class="row fw-bold">

                            <div class="col-md-7">
                                <span>SUBTOTAL</span>
                            </div>
                            <div class="col-md-5 text-right">
                                S./ <span class="" id="boleta_subtotal">0.00</span>
                            </div>

                            <div class="col-md-7">
                                <span>IGV (18%)</span>
                            </div>
                            <div class="col-md-5 text-right">
                                S./ <span class="" id="boleta_igv">0.00</span>
                            </div>

                            <div class="col-md-7">
                                <span>TOTAL</span>
                            </div>
                            <div class="col-md-5 text-right">
                                S./ <span class="" id="boleta_total">0.00</span>
                            </div>
                        </div>

                    </div><!-- ./ CARD BODY -->

                </div><!-- ./ CARD -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<script>
    var table;
    var items = []; //INPUT DE AUTOCOMPLETE
    var itemProducto = 1;

    $(document).ready(function() {

        /* ======================================================================================
        INICIALIZAR LA TABLA DE VENTAS
        ======================================================================================*/
        table = $('#lstProductosVenta').DataTable({
            "columns":[
                {"data": "id"},
                {"data": "codigo_producto"},
                {"data": "id_categoria"},
                {"data": "nombre_categoria"},
                {"data": "descripcion_producto"},
                {"data": "cantidad"},
                {"data": "precio_venta_producto"},
                {"data": "total"},
                {"data": "acciones"},
                {"data": "aplica_peso"}
            ],

            columnDefs: [{
                    targets: 0,
                    visible: false
                },
                {
                    targets: 3,
                    visible: false
                },
                {
                    targets: 2,
                    visible: false
                },
                {
                    targets: 6,
                    orderable: false
                },
                {
                    targets: 9,
                    visible: false
                }
            ],
            "order": [
                [0, 'desc']
            ],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });

        /* ======================================================================================
		TRAER LISTADO DE PRODUCTOS PARA INPUT DE AUTOCOMPLETADO
		======================================================================================*/
        $.ajax({
            async: false,
            url: "ajax/productos.ajax.php",
            method: "POST",
            data: {
                'accion': 6
            },
            dataType: 'json',
            success: function(respuesta) {

                for (let i = 0; i < respuesta.length; i++) {
                    items.push(respuesta[i]['descripcion_producto'])
                }

                $("#iptCodigoVenta").autocomplete({

                    source: items,
                    select: function(event, ui) {

                        CargarProductos(ui.item.value);

                        //$("#iptCodigoVenta").val("");

                        //$("#iptCodigoVenta").focus();

                        return false;
                    }
                })

            }
        });

        /* ======================================================================================
		EVENTO QUE REGISTRA EL PRODUCTO EN EL LISTADO CUANDO SE INGREODIGO DE BARRAS
		======================================================================================*/
        $("#iptCodigoVenta").change(function(){
            CargarProductos();
        });

        /* ======================================================================================
		EVENTO PARA ELIMINAR UN PRODUCTO DEL LISTADO
		======================================================================================*/
        $('#lstProductosVenta tbody').on('click', '.btnEliminarproducto', function(){
            table.row($(this).parents('tr')).remove().draw();
            recalcularTotales();
        });

        /* ======================================================================================
		EVENTO PARA AUMENTAR LA CANTIDAD DE UN PRODUCTO DEL LISTADO
		======================================================================================*/
        $('#lstProductosVenta tbody').on('click', '.btnAumentarCantidad', function(){
            
            var data = table.row($(this).parents('tr')).data(); //Recuperar los datos de la fila

            var idx = table.row($(this).parents('tr')).index(); //Recuperar el indice de la fila

            var codigo_producto = data['codigo_producto'];
            var cantidad = data['cantidad'];
            
            $.ajax({
                async: false,
                url: "ajax/productos.ajax.php",
                method: "POST",

                data: {
                    'accion': 8,
                    'codigo_producto': codigo_producto,
                    'cantidad_a_comprar': cantidad
                },

                dataType: 'json',
                success: function(respuesta){

                    if(parseInt(respuesta['existe']) == 0){

                        Toast.fire({
                            icon: 'error',
                            title: ' El producto ' + data['descripcion_producto'] + ' ya no tiene stock'
                        });

                        //flag_stock = 0;
                        $("#iptCodigoVenta").val("");
                        $("#iptCodigoVenta").focus();
                    }else{

                        cantidad = parseInt(data['cantidad']) + 1;

                        table.cell(idx, 5).data(cantidad + ' Und(s)').draw();

                        NuevoPrecio = (parseInt(data['cantidad']) * data ['precio_venta_producto'].replace("S./ ", "")).toFixed(2);
                        NuevoPrecio = "S./ " + NuevoPrecio;

                        table.cell(idx, 7).data(NuevoPrecio).draw();

                        recalcularTotales();
                        //actualizarVuelto();
                    }

                }
            });

        });

        /* ======================================================================================
		EVENTO PARA DISMINUIR LA CANTIDAD DE UN PRODUCTO DEL LISTADO
		======================================================================================*/
        $('#lstProductosVenta tbody').on('click', '.btnDisminuirCantidad', function(){
            
            var data = table.row($(this).parents('tr')).data(); //Recuperar los datos de la fila

            if(data['cantidad'].replace('Und(s)', '') >= 2){

                cantidad = parseInt(data['cantidad'].replace('Und(s)', '')) -1;

                var idx = table.row($(this).parents('tr')).index(); 

                table.cell(idx, 5).data(cantidad + ' Und(s)').draw();

                NuevoPrecio = (parseInt(data['cantidad']) * data ['precio_venta_producto'].replace("S./ ", "")).toFixed(2);
                NuevoPrecio = "S./ " + NuevoPrecio;

                table.cell(idx, 7).data(NuevoPrecio).draw();

            }

            recalcularTotales();
        });
    })

    /*===================================================================*/
    //FUNCION PARA RECALCULAR TOTALES DE VENTA
    /*===================================================================*/

    function recalcularTotales(){

        var TotalVenta = 0.00;

        table.rows().eq(0).each(function(index){

            var row = table.row(index);
            var data = row.data();

            TotalVenta = parseFloat(TotalVenta) + parseFloat(data['total'].replace("S./ ", ""));
        });

        $("#totalVenta").html("");
        $("#totalVenta").html(TotalVenta.toFixed(2));

        var totalVenta = $("#totalVenta").html();
        var igv = parseFloat(totalVenta) * 0.18;
        var subtotal = parseFloat(totalVenta) - parseFloat(igv);

        $("#totalVentaRegistrar").html(totalVenta);

        $("#boleta_subtotal").html(parseFloat(subtotal).toFixed(2));
        $("#boleta_igv").html(parseFloat(igv).toFixed(2));
        $("#boleta_total").html(parseFloat(totalVenta).toFixed(2));

        $("#iptCodigoVenta").val("");
        $("#iptCodigoVenta").focus();
        //actualizarVuelto();
    }

    /*===================================================================*/
    //FUNCION PARA CARGAR PRODUCTOS EN EL DATATABLE
    /*===================================================================*/
    function CargarProductos(producto = "") {

        if (producto != "") {
            var codigo_producto = producto;

        } else {
            var codigo_producto = $("#iptCodigoVenta").val();
        }

        //codigo_producto = $.trim(codigo_producto.split('/')[0]);
        console.log("🚀 ~ file: ventas.php:844 ~ CargarProductos ~ codigo_producto", codigo_producto)

        $.ajax({
            url: "ajax/productos.ajax.php",
            method: "POST",
            data: {
                'accion': 7, //BUSCAR PRODUCTOS POR SU CODIGO DE BARRAS
                'codigo_producto': codigo_producto
            },
            dataType: 'json',
            success: function(respuesta) {
                /*===================================================================*/
                //SI LA RESPUESTA ES VERDADERO, TRAE ALGUN DATO
                /*===================================================================*/
                if(respuesta){
                    
                    var TotalVenta = 0.00;

                    if(respuesta['aplica_peso'] == 1){
                        table.row.add({
                            'id': itemProducto,
                            'codigo_producto': respuesta['codigo_producto'],
                            'id_categoria': respuesta['id_categoria'],
                            'nombre_categoria': respuesta['nombre_categoria'],
                            'descripcion_producto': respuesta['descripcion_producto'],
                            'cantidad': respuesta['cantidad'] + 'mt(s)',
                            'precio_venta_producto': respuesta['precio_venta_producto'],
                            'total': respuesta['total'],
                            'acciones': "<center>" +
                            "<span class='btnIngresarPeso text-success px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Aumentar Stock'> " +
                            "<i class='fas fa-balance-scale fs-5'></i> " +
                            "</span> " +
                            "<span class='btnEliminarproducto text-danger px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                            "<i class='fas fa-trash fs-5'></i> " +
                            "</span>" +
                            "</center>",
                            'aplica_peso': respuesta['aplica_peso'],
                        }).draw();

                        itemProducto = itemProducto + 1;
                    }else{
                        table.row.add({
                            'id': itemProducto,
                            'codigo_producto': respuesta['codigo_producto'],
                            'id_categoria': respuesta['id_categoria'],
                            'nombre_categoria': respuesta['nombre_categoria'],
                            'descripcion_producto': respuesta['descripcion_producto'],
                            'cantidad': respuesta['cantidad'] + 'Und(s)',
                            'precio_venta_producto': respuesta['precio_venta_producto'],
                            'total': respuesta['total'],
                            'acciones': "<center>" +
                            "<span class='btnAumentarCantidad text-success px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Aumentar Stock'> " +
                            "<i class='fas fa-cart-plus fs-5'></i> " +
                            "</span> " +
                            "<span class='btnDisminuirCantidad text-warning px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Disminuir Stock'> " +
                            "<i class='fas fa-cart-arrow-down fs-5'></i> " +
                            "</span> " +
                            "<span class='btnEliminarproducto text-danger px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                            "<i class='fas fa-trash fs-5'></i> " +
                            "</span>" +
                            "</center>",
                            'aplica_peso': respuesta['aplica_peso'],
                        }).draw();

                        itemProducto = itemProducto + 1;
                    }
                    //recalculamos el total de la venta
                    recalcularTotales();
                    
                }else{
                    Toast.fire({
                        icon: 'error',
                        title: 'El producto no existe o no tiene stock'
                    });

                    $("#iptCodigoVenta").val("");
                    $("#iptCodigoVenta").focus();
                }   
            }

        })    
    } /* FIN CargarProductos */
</script>