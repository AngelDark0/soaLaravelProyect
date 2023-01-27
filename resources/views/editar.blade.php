<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
            
            <div class="card">
                <div class="card-header">
                    <h3>Editar Estudiantes </h3>
                    
                </div>
                
                <div class="card-body">
                    <form action="{{route('pag.updateService')}}" method="post">
                        @csrf

                        <label>Cedula: </label>
                        <input type="text" name="cedula" class="form-control" placeholder="Cedula" value="{{$est->est_cedula}}" readonly>
                        <label>Nombre: </label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{$est->est_nombre}}"> 
                        <label>Apellido: </label>
                        <input type="text" name="apellido" class="form-control" placeholder="Apellido" value="{{$est->est_apellido}}">
                        <label>Telefono: </label>
                        <input type="text" name="telefono" class="form-control" placeholder="Telefono", value="{{$est->est_telefono}}">
                        <label>Direccion: </label>
                        <input type="text" name="direccion" class="form-control" placeholder="Direccion" value="{{$est->est_direccion}}">
                        
                        <input type="submit" name="accion" value="Guardar" class="btn btn-primary mt4">
                        
                    </form>
                    
                    
                </div>
                
            </div>
            
        </div>
    
</body>
</html>