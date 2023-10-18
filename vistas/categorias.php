<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-6">
                <h1 class="m-0">Categorías</h1>
            </div><!-- /.col -->
            <div class="col-md-6">
                <ol class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item active">Productos</li>
                    <li class="breadcrumb-item active">Categorías</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content pb-2">
    <div class="row p-0 m-0">
        <div class="col-md-8">
            <div class="card card-info card-outline shadow">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-list"></i>Listado de Categorías</h3>
                </div>
                <div class="card-body">
                    <table id="lstCategorias" class="display nowrap table-striped w-100 shadow rounded">
                        <thead style="background-color: #18a2b5 !important; color: white;" class="bg-info text-left">
                            <th>id</th>
                            <th>Categoría</th>
                            <th>Medida</th>
                            <th>F. Creación</th>
                            <th>F. Actualización</th>
                            <th class="text-center">Opciones</th>
                        </thead>
                        <tbody class="small text left"></tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-info card-outline shadow">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-edit"></i>Registro de Categorías</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->

<script>
        $(document).ready(function(){
            var tableCategorias = $('#lstCategorias').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'pdf', 'excel', 'print', 'pageLength',
                ],
                ajax:{
                    url: 'ajax/categorias.ajax.php',
                    dataSrc: ""
                },
                columnDefs:[
                    {
                        targets: 2,
                        sortable: false,
                        createdCell: function(td, cellData, rowData,row, col){
                            if(parseInt(rowData[2]) == 0){
                                $(td).html("Und(s)")
                            }else{
                                $(td).html("Mtr(s)")
                            }
                        }
                },
                {
                    targets: 5,
                    sortable: false,
                    render: function(data, type, full, meta){
                        return"<center>" +
                            "<span class='btnEditarCategoria text-primary px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Editar Categoría'>" +
                            "<i class='fas fa-pencil-alt fs-5'></i>" + 
                            "</span>" + 
                            "<span class='btnEliminarCategoria text-danger px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar Categoría'>" +
                            "<i class='fas fa-trash fs-5'></i>" + 
                            "</span>"+
                        "</center>";
                    }
                }   
                ],
                "order":[[0, 'desc ']],
                lengthMenu: [0, 5, 10, 15, 20, 50],
                "pageLength": 15,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                }
            });

            $('#lstCategorias tbody').on('click', '.btnEditarCategoria', function(){
                
                if($(this).parents('tr').hasClass('selected')){

                    $(this).parents('tr').removeClass('selected');

                }else{

                    tableCategorias.$('tr.selected').removeClass('selected');

                    $(this).parents('tr').addClass('selected');
                }
            })
        })
</script>