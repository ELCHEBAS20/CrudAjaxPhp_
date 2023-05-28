<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>CrudPhpAjax</title>
</head>

<body>

  <div class="m-5">
    <div class="card w-75 m-auto">
      <div class="card-header">
        <b>Informacion del usuario</b>
        <div class="d-flex justify-content-end">
          <button class="btn btn-success" id="btn-insert" onclick="Form_template_Modal('Insertar', [])" data-toggle="modal" data-target="#exampleModal">Agregar informacion</button>
        </div>
      </div>
      <div class="card-body">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Edad</th>
              <th scope="col">Direccion</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody id="cx-final">

          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!-- Modal para modificar -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" id="close-btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form id="form-submit">
            <label for=""><b>#</b></label>
            <input type="text" class="form-control" readonly name="id" id="input-0">
            <label for=""><b>Nombre</b></label>
            <input type="text" class="form-control" name="nombre" id="input-1">
            <label for=""><b>Apellido</b></label>
            <input type="text" class="form-control" name="apellido" id="input-2">
            <label for=""><b>Edad</b></label>
            <input type=" text" class="form-control" name="edad" id="input-3">
            <label for=""><b>Direccion</b></label>
            <input type=" text" class="form-control" name="direccion" id="input-4">
            <div class="m-2 d-flex justify-content-center">
              <button type="submit" class="btn btn-primary w-100" id="btn-submit"></button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="./Scripts/app.js"></script>
</body>

</html>