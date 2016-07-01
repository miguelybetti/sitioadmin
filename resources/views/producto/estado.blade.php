@extends('layouts.master')

@section('title')

<title>Estado</title>

@stop


@section('content')

<div id="page-wrapper">
 <div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Administrador de Estado Producto</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<div class="row">
  <div class="col-lg-12">

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a id='collapsePanelUno' role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Filtros
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
           <form class="form-inline" role="form">
            <div class="form-group">
              <label for="email">Nombre:</label>
              <input type="text" class="form-control input-sm" id="txtnombrefiltro">
            </div>

            <button id="btnBuscar" type="button" class="btn btn-primary btn-xs" title="Aplicar Filtro">Buscar</button>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalAgregar" title="Agregar Nuevo Elemento"><i class="fa fa-plus-circle fa-fw"></i></button>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalExportar" title="Exportar Registros"><i class="fa fa-arrow-circle-o-down fa-fw"></i></button>
            <button id="btnRefrescar" type="button" class="btn btn-primary btn-xs" title="Refrescar"><i class="fa fa-refresh fa-fw"></i></button>

               </form>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a id='collapsePanelDos' class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
           Tabla
         </a>
       </h4>
     </div>
     <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <div class="dataTable_wrapper">

                                <div id="divGrilla">
                                    <table id="tablaGrilla" class="table table-striped table-bordered" data-show-refresh="true"></table>                         
                                </div>
       
                            </div>
        <!-- /.table-responsive -->                     
      </div>
    </div>
  </div>





</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>

<!-- Modal -->
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar</h4>
      </div>
      <div class="modal-body">
        
       <form id="prueba">

        <div class="form-group">
          <label>Nombre:</label>
          <input id="txtnombre" name="txtnombre" class="form-control input-sm" placeholder="Enter text"  required maxlength="50">
        </div>
 
        <div class="form-group">
          <label>Vigente:</label>
          <label class="radio-inline">
            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="si" checked>Si
          </label>
          <label class="radio-inline">
            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="no">No
          </label>
        </div>
        
        
      </form>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button type="submit" id="submit" class="btn btn-primary">Guardar</button>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="modalExportar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Exportar</h4>
      </div>
      <div class="modal-body">
        
        <form role="form">

          <div class="form-group">
            <label>Formato</label>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="">Excel(*.xls)
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="">Pdf(*.pdf)
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="">Text(*.txt)
              </label>
            </div>
          </div>
          
          
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Descargar</button>
      </div>
    </div>
  </div>
</div>

@stop

@section('javascript')

 <script>
    $(document).ready(function() {

 $("#submit").click(function(){

var nombre = $("#txtnombre").val();

if(nombre=='')
{
alert("Please Fill All Fields");
}
else
{
    
// AJAX Code To Submit Form.

$.ajax({
type: "get",
url: "agregarestado",
data: $("#prueba").serialize(),
cache: false,
success: function(result){

$('#modalAgregar').modal('hide');
$('#tablaGrilla').bootstrapTable('refresh');
$("#collapsePanelDos").click();
$.notify({
    title: '<strong>Exito!</strong>',
    message: 'Registro almacenado.'
},{
    type: 'success'
});
},
error: function(result) {
    $('#modalAgregar').modal('hide');
    $.notify({
    title: '<strong>Error!</strong>',
    message: 'Error interno del servidor, Reintente.'
    },{
    type: 'warning'
    });
}

});
}
return false;
});

 $('#modalAgregar').on('show.bs.modal', function (event) {
   
          var nombre = "gfghgfh" // Extraer la información de atributos de datos
          
          var modal = $(this)
         
          modal.find('.modal-body #txtnombre').val(nombre)
         
        
        });

    $("#btnBuscar" ).click(function() {

    $('#tablaGrilla').bootstrapTable('refresh');
       
    $('#tablaGrilla').bootstrapTable({
            method: 'get',
            url: '../producto/listadoestadojson',
            search: true,
            sortable: true,
            pagination: true,
            queryParams: function (p) {
            return {
                    txtnombrefiltro: $('#txtnombrefiltro').val(),
                    //estadoId: $('#ddlEstadoId').val(),
                    //anio: $('#ddlAnio :selected').text()
            }
        },
            columns: [
            [
                { field: 'id', title: 'Id', sortable: true, visible: true, align: 'center', width: '10%' },
                { field: 'nombre', title: 'Nombre', sortable: true, visible: true, align: 'center', width: '40%' },
                { field: 'vigente', title: 'Vigente', sortable: true, align: 'center', width: '10%' },
                { field: 'fecha', title: 'Fecha', sortable: true, align: 'center', width: '25%' },
                { field: 'Acciones', title: 'Acciones', sortable: true, align: 'center', width: '15%', events: operateEvents, formatter: operateFormatter }
                ]
            ]
        });

     $( "#collapsePanelDos" ).click();
    });

   $('#btnRefrescar').click(function() {
    location.reload();
   });

        
    });

    function operateFormatter(value, row, index) {
    var botones = "";

        botones = botones + '<a class="VerEditar" href="javascript:void(0)" title="Editar">'
        botones = botones + '<i class="fa fa-pencil-square-o text-primary fa-lg" style="margin-left: 3px;margin-right: 3px;"></i>'
        botones = botones + '</a>';

        botones = botones + '<a class="VerEliminar" href="javascript:void(0)" title="Eliminar">'
        botones = botones + '<i class="fa fa-trash text-primary fa-lg" style="margin-left: 3px;margin-right: 3px;margin-bottom: 6px;"></i>'
        botones = botones + '</a>';
      
    return botones;
    }
   

    window.operateEvents = {
        'click .VerEditar': function (e, value, row, index) {
        alert(row.id);
    },
        'click .VerEliminar': function (e, value, row, index) {
    alert(row.id);
    }
    }

   
    </script>

    @stop