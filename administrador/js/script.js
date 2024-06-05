
function validar() {
   var usuario = document.getElementById('usuario').value.trim();
   var password = document.getElementById('pass').value.trim();

    if(usuario === '' || password === '') {
        Swal.fire(
            'Atencion...',
            'Todos los campos son necesarios',
            'error'
        );
        return false;
    } 
}

function profesor(){
    document.getElementById('profesor').style.display = 'block';
    document.getElementById('admin').style.display = 'none';
}

function administrador(){
    document.getElementById('admin').style.display = 'block';
    document.getElementById('profesor').style.display = 'none';
}



function verpassword(){
      var tipo = document.getElementById("pass");
      if(tipo.type == "password")
	  {
          tipo.type = "text";
      }
	  else
	  {
         tipo.type = "password";
    }
}

function loginAdministrador(){
    var usuario =$('#usuario').val;
    var pass =$('#pass').val; 

    $.ajax({
        url: 'administrador/Tools/loginAdmin.php',
        method: 'POST',
        data: {
            usuario:usuario,
            pass:pass
        },
        success: function(data) {
            $('#mensajeAdmin').html(data);

            if(data.indexOf('iniciando Sesion') >- 0){
                window.location = './Index.php';
            }
        }
    })

}
function loginProfesor(){
    const formprofe = document.querySelector('#formProfesor');
    
        
    formprofe.addEventListener('submit', (event) => {
        event.preventDefault();
    })

}
