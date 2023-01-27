<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Estudiantes</h1>
           <div class="card">
               <div class="card-header">
                   <a href="{{route('pag.Guardar')}}" class="btn btn-primary">Nuevo Estudiante</a><br></br>
               </div>
               <div class="card-body">
                   <table class="table table-hover">
                       <tbody>
                       <tr>
                               <th>cedula</th>
                               <th>nombre</th>
                               <th>apellido</th>
                               <th>telefono</th>
                               <th>direccion</th>
                        <tr>
                           @foreach($data as $est)
                           @php
                                $cedula = $est['est_cedula']; 
                                $nombre = $est['est_nombre'];
                                $apellido = $est['est_apellido'];
                                $telefono = $est['est_telefono']; 
                                $direccion = $est['est_direccion']; 
                                @endphp
                                <tr>
                               <td>{{$cedula}}</td>
                               <td>{{$nombre}}</td>
                               <td>{{$apellido}}</td>
                               <td>{{$telefono}}</td>
                               <td>{{$direccion}}</td>
                               <td>
                                    <a href="{{route('pag.update1', [$cedula,$nombre,$apellido,$telefono,$direccion])}}" class="btn btn-warning">Editar</a>
                                    
                                </td>
                           </tr>

                           @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
        </div>
       
    </body>
</html>