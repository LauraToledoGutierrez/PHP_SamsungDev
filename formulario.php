<!-- Práctica PHP Samsung Desarrolladoras 2022/23. Laura Toledo Gutiérrez -->

<?php
    //Comprueba si se ha enviado algun dato 
    if($_POST){
        //Recoge los datos enviados a traves del formulario
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];

        //Conexion con PDO
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="cursodev";
        
        //Crea la conexion
        $conn = new mysqli($servername, $username, $password, $dbname);
        //Checkea la conexion
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        //Se crea una consulta SQL para insertar los datos en la tabla "usuario"
        $sql = "INSERT INTO usuario (nombre, apellido, email)
                VALUES ('$nombre','$apellido','$email')";

        //Comprueba si la consulta se ejecuta correctamente
        if($conn->query($sql)== TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        //Cierra la conexion con la base de datos
        $conn->close();
    }
?>
   