<?php 
    include('conexao.php');
    session_start();

    $no = $_SESSION['pnomes'];

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
            header('location: ../pag_Sec/perfil2.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil2.php'>tras</a>");
            exit();
        }

        exit();
    }elseif(!empty($_POST['ultimo'])){
        $_Query2 = "UPDATE login SET Unome = '$ultimo' WHERE Id_vendedor = '$ID_UTILIZADOR';";

        $result = mysqli_query($conexao, $_Query2);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil2.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil..php'>tras</a>");
            exit();
        }

        exit();
    }elseif (!empty($_POST['utilizador'])) {
        $_Query3 = "UPDATE login SET Utilinome = '$utilizador' WHERE Id_vendedor = '$ID_UTILIZADOR';";

        $result = mysqli_query($conexao, $_Query3);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil2.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil2.php'>tras</a>");
            exit();
        }

        exit();
    }elseif (!empty($_POST['email'])) {
        $_Query4 = "UPDATE login SET Email = '$email' WHERE Id_vendedor = '$ID_UTILIZADOR';" ;

        $result = mysqli_query($conexao, $_Query4);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil2.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil2.php'>tras</a>");
            exit();
        }

        exit();
    }elseif (!empty($_POST['nome']) || !empty($_POST['ultimo']) || !empty($_POST['utilizador']) || !empty($_POST['email'])) {
        $_Query5 = "UPDATE `login` SET `Pnome`='$nome',`Unome`='$ultimo',`Utilinome`='$utilizador',`Email`='$email' WHERE Id_vendedor = '$ID_UTILIZADOR';";

        $result = mysqli_query($conexao, $_Query5);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header('location: ../pag_Sec/perfil2.php');
            exit();
        }else{
            echo("Erro na alteraçao de dados volte para <a href='../perfil2.php'>tras</a>");
            exit();
        }

        exit();
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
        $_Query7 = "UPDATE `login` SET Pnome='$nome', Utilinome='$utilizador' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query7);

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
        $_Query8 = "UPDATE `login` SET Pnome='$nome', Email='$email' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query8);

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
        $_Query9 = "UPDATE `login` SET  Unome='$ultimo',Pnome='$nome' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query9);

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
        $_Query10 = "UPDATE `login` SET Unome='$ultimo', Utilinome='$utilizador' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query10);

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
        $_Query11 = "UPDATE `login` SET Unome='$ultimo', Email='$email' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query11);

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
        $_Query12 = "UPDATE `login` SET  Utilinome='$utilizador',Pnome='$nome' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query12);

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
        $_Query13 = "UPDATE `login` SET Utilinome='$utilizador', Unome='$ultimo' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query13);

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
        $_Query14 = "UPDATE `login` SET Utilinome='$utilizador', Email='$email' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query14);

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
        $_Query15 = "UPDATE `login` SET  Email='$email',Pnome='$nome' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query15);

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
        $_Query16 = "UPDATE `login` SET Email='$email', Unome='$ultimo' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query16);

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
        $_Query17 = "UPDATE `login` SET Email='$email', Utilinome='$utilizador' WHERE Id_vendedor='$ID_UTILIZADOR'";
        $result = mysqli_query($conexao, $_Query17);

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