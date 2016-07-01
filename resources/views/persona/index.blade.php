@extends('layouts.master')

@section('title')

<title>Prueba</title>

@stop


@section('content')

<div id="page-wrapper">
 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Administrador de Personas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registros Almacenados
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                              
                        <table id="table"></table>
                               
                               
                            
                            <!-- /.table-responsive -->
                           
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


@stop

@section('javascript')

 <script>
    $(document).ready(function() {
        $('#table').bootstrapTable({
    url: 'http://localhost:8080/sitioadmin/public/demo.response.json',
    columns: [{
        field: 'id',
        title: 'Item ID'
    }, {
        field: 'name',
        title: 'Item Name'
    }, {
        field: 'price',
        title: 'Item Price'
    }, ]
});
    });
    </script>

    @stop