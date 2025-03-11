<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap_css/darck_mode\bootstrap.min.css" >
    <script src={{ asset('bootstrap_js/bootstrap.min.js') }}   ></script> 
    <title>Insert</title>
</head>
<body>
    <table class="table">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>
                    <h3 class="text-success" >Insertar</h3>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-active">
                
                <td>
                    <input  class="btn btn-success" 
                            type="button" 
                            id="insert" 
                            onclick="insertar()" 
                            value="insertar">
                </td>
                
                </tr>
            </tbody>
        </table>
    </table>
    <script>
        function insertar(){
            fetch('/insertar_valores')
            .then(response => {
                if(!response.ok){
                    throw new Error("NO SE PUDO ESTABLECER COMUNICACION CON EL INSERTADOR")
                }
                return response.json();
            })
            .then(data =>{
                console.log("inserción exitosa con salida de los siguiente datos");
                console.log(data);
                
            })
            
        }
        
    </script>
</body>
</html>