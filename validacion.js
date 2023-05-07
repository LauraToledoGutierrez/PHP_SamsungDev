// Práctica PHP Samsung Desarrolladoras 2022/23. Laura Toledo Gutiérrez

//Cuando se carga la pagina en el navegador
window.addEventListener('load', function() {
    
    //Funcion para validar el formulario
    function validarFormulario(event) {

        //Obtenemos el valor de los campos del formulario
        var nombre = document.getElementsByName('nombre')[0].value;
        var apellido = document.getElementsByName('apellido')[0].value;
        var email = document.getElementsByName('email')[0].value;
      
        //Comprobamos si hay algun campo vacio
        if (nombre == '' || apellido == '' || email == '') {
            //Si hay algun campo vacio muestra un mensaje indicando que hay que completar todos los campos
            alert('Por favor, complete todos los campos.');
            //Evita que se envie el formulario 
            event.preventDefault();
        }
    }
    // Agregamos al boton al hacer click la funcion validarFormulario
    document.getElementById('submit-btn').addEventListener('click', validarFormulario);
  });



  