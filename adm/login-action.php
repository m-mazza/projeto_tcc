
<?php
    error_reporting(E_WARNING);
    include('requires/conexao.php');    
        if(@$_POST) { 
        $email = mysqli_real_escape_string($conexao, @$_POST['email']);
        $cpf = mysqli_real_escape_string($conexao, @$_POST['cpf']);
        $sql="SELECT * FROM gestor where ds_email='$email' AND cd_cpf='$cpf'";
        $resultado = $conexao->query($sql);
     

        $linhas = $resultado->num_rows;
       
        if($linhas > 0 ) {
            @session_start ();
            $_SESSION['sslogado'] = "S";
            $_SESSION['senha'] = "S";
            $_SESSION['gestor'] = $resultado->fetch_all(MYSQLI_ASSOC)[0];
            echo "<script>self.location = './'</script>";  

        } else {
            echo "<script>self.location='login?erro=true'</script>";
        }
    }
?>