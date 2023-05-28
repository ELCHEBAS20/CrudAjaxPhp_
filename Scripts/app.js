'use strict';

var arrayData = [];
const getInput = document.getElementById('form-submit').getElementsByTagName('input');
$('#btn-submit').text('');

function ListView() {

  $.ajax({
    url: "./main.php?StrlAccion=Lista",
    dataType: 'json',
    success: function (response) {

      document.getElementById('cx-final').innerHTML = '';
      arrayData = [];

      for (let index = 0; index < response.length; ++index) {
        arrayData.push(response[index]);
        document.getElementById('cx-final').innerHTML += `
        <tr>
        <th>${response[index].id}</th>
        <th>${response[index].nombre}</th>
        <th>${response[index].apellido}</th>
        <th>${response[index].edad}</th>
        <th>${response[index].direccion}</th>
        <th>
        <button class='btn btn-primary' data-toggle="modal" data-target="#exampleModal" onclick="OpenModal(${response[index].id})">Modificar</button>
        <button class='btn btn-danger' onclick="DeleteUser(${response[index].id})">Eliminar</button>
        </th>
        </tr>`;
      }

    }
  });
}

function DeleteUser(id) {
  swal({
    title: "¿Deseas eliminar el usuario respectivo?",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
          type: "POST",
          url: "./main.php?StrlAccion=Eliminar",
          data: { idUser: id },
          dataType: "text",
          success: function (response) {
            ListView();
          }
        });
      }
    });
}

function OpenModal(id) {
  const rstFilter = arrayData.filter(item => item.id == id);
  const ObjValues = Object.values(rstFilter[0]);
  Form_template_Modal('Modificar', ObjValues);
}

function Form_template_Modal(btnName, data) {
  for (let index = 0; index < getInput.length; ++index) {
    $(`#input-${index}`).val(data[index]);
  }
  $('#btn-submit').text(btnName);
  document.getElementById('input-0').style.display = `${btnName == 'Modificar' ? '' : 'none'}`;
  document.getElementById('form-submit').children[0].style.display = `${btnName == 'Modificar' ? '' : 'none'}`;
}

function Template_Post_Put() {
  $('#form-submit').submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: `main.php?StrlAccion=${$('#btn-submit').text()}`,
      data: $('#form-submit').serialize(),
      dataType: "text",
      success: function (response) {
        ListView();
        document.querySelector('#close-btn').click();
      }
    });
  });
}

ListView();
Template_Post_Put();