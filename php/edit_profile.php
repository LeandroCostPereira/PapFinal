<?php 
    include('conexao.php');
    session_start();

    $no = $_SESSION['pnome'];

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $ultimo =mysqli_real_escape_string($conexao, $_POST['ultimo']);
    $utilizador = mysqli_real_escape_string($conexao, $_POST['utilizador']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);


      $ID_UTILIZADOR = $_SESSION['id'];
    
    if (!empty($_POST['nome'])) {
        $_Query1 = "UPDATE login SET Pnome = '$nome' WHERE Id_vendedor = '$ID_UTILIZADOR';";

        $result = mysqli_query($conexao, $_Query1);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil.php'>tras</a>");
            exit();
        }

        exit();
    }elseif(!empty($_POST['ultimo'])){
        $_Query2 = "UPDATE login SET Unome = '$ultimo' WHERE Id_vendedor = '$ID_UTILIZADOR';";

        $result = mysqli_query($conexao, $_Query2);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil.php'>tras</a>");
            exit();
        }

        exit();
    }elseif (!empty($_POST['utilizador'])) {
        $_Query3 = "UPDATE login SET Utilinome = '$utilizador' WHERE Id_vendedor = '$ID_UTILIZADOR';";

        $result = mysqli_query($conexao, $_Query3);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil.php'>tras</a>");
            exit();
        }

        exit();
    }elseif (!empty($_POST['email'])) {
        $_Query4 = "UPDATE login SET Email = '$email' WHERE Id_vendedor = '$ID_UTILIZADOR';" ;

        $result = mysqli_query($conexao, $_Query4);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil.php'>tras</a>");
            exit();
        }

        exit();
    }elseif (!empty($_POST['nome']) || !empty($_POST['ultimo']) || !empty($_POST['utilizador']) || !empty($_POST['email'])) {
        $_Query5 = "UPDATE `login` SET `Pnome`='$nome',`Unome`='$ultimo',`Utilinome`='$utilizador',`Email`='$email' WHERE Id_vendedor = '$ID_UTILIZADOR';";

        $result = mysqli_query($conexao, $_Query5);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil.php'>tras</a>");
            exit();
        }

        exit();
        //Verificaçao se dois campos foram preenchidos,
    }elseif(!empty($_POST['nome']) || !empty($_POST['ultimo'])){
        $_Query6 = "UPDATE `login` SET Pnome='$nome', Unome='$ultimo' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query6);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil.php'>tras</a>");
            exit();
        }

        exit();
    }elseif(!empty($_POST['nome']) || !empty($_POST['utilizador'])){
        $_Query6 = "UPDATE `login` SET Pnome='$nome', Utilinome='$utilizador' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query6);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil.php'>tras</a>");
            exit();
        }

        exit();
    }elseif(!empty($_POST['nome']) || !empty($_POST['email'])){
        $_Query6 = "UPDATE `login` SET Pnome='$nome', Email='$email' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query6);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil.php'>tras</a>");
            exit();
        }

        exit();
    }
    //---------------------------------------
    elseif(!empty($_POST['ultimo']) || !empty($_POST['nome'])){
        $_Query6 = "UPDATE `login` SET  Unome='$ultimo',Pnome='$nome' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query6);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil.php'>tras</a>");
            exit();
        }

        exit();
    }elseif(!empty($_POST['ultimo']) || !empty($_POST['utilizador'])){
        $_Query6 = "UPDATE `login` SET Unome='$ultimo', Utilinome='$utilizador' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query6);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil.php'>tras</a>");
            exit();
        }

        exit();
    }elseif(!empty($_POST['ultimo']) || !empty($_POST['email'])){
        $_Query6 = "UPDATE `login` SET Unome='$ultimo', Email='$email' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query6);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil.php'>tras</a>");
            exit();
        }

        exit();
    }
    //---------------------------------------------------
    elseif(!empty($_POST['utilizador']) || !empty($_POST['nome'])){
        $_Query6 = "UPDATE `login` SET  Utilinome='$utilizador',Pnome='$nome' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query6);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil.php'>tras</a>");
            exit();
        }

        exit();
    }elseif(!empty($_POST['utilizador']) || !empty($_POST['ultimo'])){
        $_Query6 = "UPDATE `login` SET Utilinome='$utilizador', Unome='$ultimo' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query6);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil.php'>tras</a>");
            exit();
        }

        exit();
    }elseif(!empty($_POST['utilizador']) || !empty($_POST['email'])){
        $_Query6 = "UPDATE `login` SET Utilinome='$utilizador', Email='$email' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query6);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil.php'>tras</a>");
            exit();
        }

        exit();
    }
    //-----------------------------------------------------------------´~
    elseif(!empty($_POST['email']) || !empty($_POST['nome'])){
        $_Query6 = "UPDATE `login` SET  Email='$email',Pnome='$nome' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query6);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil.php'>tras</a>");
            exit();
        }

        exit();
    }elseif(!empty($_POST['email']) || !empty($_POST['ultimo'])){
        $_Query6 = "UPDATE `login` SET Email='$email', Unome='$ultimo' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query6);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil.php'>tras</a>");
            exit();
        }

        exit();
    }elseif(!empty($_POST['email']) || !empty($_POST['utilizador'])){
        $_Query6 = "UPDATE `login` SET Email='$email', Utilinome='$utilizador' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query6);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil.php'>tras</a>");
            exit();
        }

        exit();
    }
    ?>