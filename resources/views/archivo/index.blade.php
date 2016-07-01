@extends('layouts.master')

@section('title')

<title>Prueba</title>

@stop


@section('content')

<div id="page-wrapper">
 <div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Administrador de Archivos</h1>
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
              <input type="email" class="form-control input-sm" id="email">
            </div>
            <div class="form-group">
              <label for="pwd">Detalle:</label>
              <input type="password" class="form-control input-sm" id="pwd">
            </div>
            <button id="btnBuscar" type="button" class="btn btn-primary btn-xs" title="Aplicar Filtro">Buscar</button>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalAgregar" title="Agregar Nuevo Elemento"><i class="fa fa-plus-circle fa-fw"></i></button>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalExportar" title="Exportar Registros"><i class="fa fa-arrow-circle-o-down fa-fw"></i></button>
            <button id="btnRefrescar" type="button" class="btn btn-primary btn-xs" title="Refrescar"><i class="fa fa-refresh fa-fw"></i></button>

            <a href="#" title="Header" data-toggle="popover" data-trigger="hover" data-content="Some content">Hover over me</a>

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
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
              </tr>
            </thead>
            <tbody>
              <tr class="odd gradeX">
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td class="center">4</td>
                <td class="center">X</td>
              </tr>
             
            
              <tr class="gradeU">
                <td>Other browsers</td>
                <td>All others</td>
                <td>-</td>
                <td class="center">-</td>
                <td class="center">U</td>
              </tr>
            </tbody>
          </table>
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
        
       <form role="form">

        <div class="form-group">
          <label>Nombre:</label>
          <input class="form-control input-sm" placeholder="Enter text">
        </div>
        <div class="form-group">
          <label>Tipo:</label>
          <select class="form-control input-sm">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        
        <div class="form-group">
          <label>Descripcion:</label>
          <textarea class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label>Vigente:</label>
          <label class="radio-inline">
            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Si
          </label>
          <label class="radio-inline">
            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No
          </label>
        </div>
        
        
      </form>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button type="button" class="btn btn-primary">Guardar</button>
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
   
   $('[data-toggle="tooltip"]').tooltip();
   $('[data-toggle="popover"]').popover();

   $("#btnBuscar" ).click(function() {
     $('#dataTables-example').DataTable();

     $( "#collapsePanelDos" ).click();
   });

   $('#btnRefrescar').click(function() {
    location.reload();
  });
 });
</script>

@stop

