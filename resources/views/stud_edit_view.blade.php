<!Doctype html>
<html>
<head>
<title>Tabla de usuarios</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                <div class="d-flex">
                 <div class="mr-auto p-2">{{ __('Usuario') }}</div>
                  <!--<div class="mr-auto p-2"><h3><span class="glyphicon glyphicon-user"></span></h3></div>-->
                 <div class="ml-auto p-2"><a href = "/insert" class="btn btn-success">Nuevo Usuario</a></div>
                </div>
                </div>
<div>
<table border = "1">
<tr>
<td>ID</td>
<td>Name</td>
<td>Email</td>
<!--<td>Contraseña</td>-->
<td>Editar</td>
<td>Eliminar</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<!--<td>{{ $user->password }}</td>-->
<td><a href = 'edit/{{ $user->id }}' class="btn btn-warning">Editar</a></td>
<td><a href = 'delete/{{ $user->id }}' class="btn btn-danger">Borrar</a></td>
</tr>
@endforeach
</table>
</div>
<div>
<link href=https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css rel=stylesheet>
<link href=https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.16.0/bootstrap-table.min.css rel=stylesheet>
<table data-sort-name=id data-sort-order=desc data-toggle=table>
<thead>
<tr>
<th data-field=id data-sortable=true>id</th>
<th data-sortable=true>name</th>
<th data-sortable=true>email</th>
<th data-sortable=true>editar</th>
<th data-sortable=true>eliminar</th>
</tr>
<tr>
<td data-sortable=true></td>
<td data-sortable=true></td>
<td data-sortable=true></td>
<td data-sortable=true></td>
<td data-sortable=true></td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td><a href = 'edit/{{ $user->id }}' class="btn btn-warning">Editar</a></td>
<td><a href = 'delete/{{ $user->id }}' class="btn btn-danger">Borrar</a></td>
</tr>
</thead>
@endforeach
</table>
<script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js></script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.16.0/bootstrap-table.min.js></script>
</div>

                
            </div>
        </div>
    </div>
</div>
@endsection

</body>
</html> 
