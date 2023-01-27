<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div>
        <h2>Estudiantes</h2>

        <div class="card">
         <div class="card-header">
         <a href="{{route('pag.Guardar')}}" class="btn btn-primary">Nuevo Estudiante</a>
    
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Dirección</th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach($data as $est){?>
                        <tr>
                        <!--Esto es un comentario 
                            <td></*?php echo $est['est_cedula']; ?></td>
                            <td></*?php echo $est['est_nombre']; ?></td>
                            <td></*?php echo $est['est_apellido']; ?></td>
                            <td></*?php echo $est['est_telefono']; ?></td>
                            <td></*?php echo $est['est_direccion'];?></td> -->
                            @php
                                $cedula = $est['est_cedula']; 
                                $nombre = $est['est_nombre'];
                                $apellido = $est['est_apellido'];
                                $telefono = $est['est_telefono']; 
                                $direccion = $est['est_direccion']; 
                                @endphp
                                <td>{{$cedula}}</td>
                               <td>{{$nombre}}</td>
                               <td>{{$apellido}}</td>
                               <td>{{$telefono}}</td>
                               <td>{{$direccion}}</td>
                            <td>
                                    <a href="{{route('pag.update', $est['est_cedula'])}}" class="btn btn-warning">Editar</a>
                                    <a href="{{route('pag.update1', [$cedula,$nombre,$apellido,$telefono,$direccion])}}" class="btn btn-warning">Editar1</a>
                                     <a href="{{route('pg.destroy', $est['est_cedula'])}}" class="btn btn-danger">Eliminar</a>
                                </td>
                        </tr>
                        <?php } ?>
                        
                </tbody>

            </table>

        </div>


        </div>

    </div>
    
</body>
</html>