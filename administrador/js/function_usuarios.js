var table = $('#table_usuarios').DataTable({
    "language": {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        
    },
    
});


function advertencia(e){
  e.preventDefault();
  var url = e.currentTarget.getAttribute('href');
    Swal.fire({
    title: "¿Estás seguro que quieres eliminar?",
    text: "¡No podrás revertir!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#00CC00",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, Eliminar!"
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href=url;
    }
  });

}

function nuevoUsuario(){
   $('#modalUsuario').modal('show');
};

function nuevoUsuarioProfe(){
    $('#modalUsuarioProfe').modal('show');
 };

 function ModificarUsuario_Admin(){
  $('#ModificarmodalUsuario').modal('show');
};

function verpasswordModificar(){
  var tipo = document.getElementById("passModificar");
  if(tipo.type == "password")
{
      tipo.type = "text";
  }
else
{
     tipo.type = "password";
}
}

function ModificarUsuario_1erGrado(){
  $('#1erGrado_modalUsuario').modal('show');
};

function ModificarUsuario_2doGrado(){
  $('#2doGrado_modalUsuario').modal('show');
};

function ModificarUsuario_3erGrado(){
  $('#3erGrado_modalUsuario').modal('show');
};

function ModificarUsuario_4toGrado(){
  $('#4toGrado_modalUsuario').modal('show');
};

function ModificarUsuario_5toGrado(){
  $('#5toGrado_modalUsuario').modal('show');
};

function ModificarUsuario_6toGrado(){
  $('#6toGrado_modalUsuario').modal('show');
};
