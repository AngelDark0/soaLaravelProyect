<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Guarda</title>
</head>
<body>
    <div class="container">
            
            <div class="card">
                <div class="card-header">
                    <h3>Agregar un nuevo Estudiantes API</h3>
                    
                </div>
                
                <div class="card-body">
                    <form action="{{route('api.guardar')}}" method="post">
                        @csrf
                        @method('post')

                        <label>Cedula: </label>
                        <input type="text" name="est_cedula" class="form-control" placeholder="Cedula">
                        <label>Nombre: </label>
                        <input type="text" name="est_nombre" class="form-control" placeholder="Nombre">
                        <label>Apellido: </label>
                        <input type="text" name="est_apellido" class="form-control" placeholder="Apellido">
                        <label>Telefono: </label>
                        <input type="text" name="est_telefono" class="form-control" placeholder="Telefono">
                        <label>Direccion: </label>
                        <input type="text" name="est_direccion" class="form-control" placeholder="Direccion">
                        
                        <input type="submit" name="accion" value="Guardar" class="btn btn-primary mt4">
                        
                    </form>
                    
                    
                </div>
                
            </div>
            
        </div>
    
</body>
</html>