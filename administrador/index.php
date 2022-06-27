<?php include("./config/conexionBD.php"); ?>
<?php 
    if(isset($_POST['iniciar'])){
        $username = ($_POST['username']);
        $pass_word = ($_POST['pass_word']);

        // BUSCANDO EN LA BASE DE DATOS
        $sql = $conexion->prepare("SELECT * FROM usuarios_login WHERE username=:user AND pass_word=:password");

        // ENVIA PARAMETROS
        $sql->bindParam("user",$username, PDO::PARAM_STR);
        $sql->bindParam("password",$pass_word, PDO::PARAM_STR);

        // EJECUTO DICHA SENTENCIA
        $sql->execute();

        //FETCH RECUPERA LA INFORMACION QUE ESTAMOS PIDIENDO 
        $registro = $sql->fetch(PDO::FETCH_ASSOC);

        // print_r($registro);

        // CONTABILIZA LOS NUMEROS DE REGISTROS
        $numeroRegistros = $sql->rowCount();

        if($numeroRegistros >= 1){
            
        session_start();
        $_SESSION['username']=$registro;

            header('Location:./inicio.php');
        }else{
            echo "NO EXISTE";
        }
    }

    
    // session_start();
    // if ($_POST) {
    //     if (($_POST['username']=="maicolarteaga") && ($_POST['pass_word']=="123456")) {
            

    //         $_SESSION['username']="ok";
    //         $_SESSION['nombreUsuario']="maicolarteaga";
    //         header("Location:inicio.php");
    //     }else{
    //         $mensaje = "Error: El usuario o contraseña no existen";
    //     }
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <a href="../index.php" class="btn">Volver al Sitio</a>
    <div class="content-login login">
       
            <form action="index.php" method="POST" class="item-login login">
                
                <h1>Iniciar Sesión</h1>
                <?php if(isset($mensaje)) {?>
                <?php echo $mensaje; ?>
                <?php }; ?>
                <input type="text" name="username" id="" class="campo" placeholder="Nombre">


                <input type="password" name="pass_word" id="" class="campo" placeholder="Contraseña">

                <button type="submit" value="Entrar" name="iniciar" class="btn">Entrar</button>
            </form>

    </div>
</body>
</html>