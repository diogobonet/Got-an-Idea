<?php
    require('../../db_conection/conexao.php');

    class Registro{
        public $mysql_conection;

        public $email;
        public $nome;
        public $sobrenome;
        public $apelido;
        public $senha;

        public function __construct(string $email_param, string $nome_param, string $sobrenome_param, string $apelido_param, string $senha_param)
        {
            $this->email = $email_param;
            $this->nome = $nome_param." ".$sobrenome_param;
            $this->apelido = $apelido_param;
            $this->senha = $senha_param;
            
        }
    }

    $register = new Registro($_POST['email_input'], $_POST['nome_input'], $_POST['sobrenome_input'], $_POST['apelido_input'], md5($_POST['senha_input']));

    $sql = "INSERT INTO Usuario(email, nome, apelido, telefone, imagem, tipo_conta, senha, cidade, bio, formacao) VALUES ('$register->email', '$register->nome', '$register->apelido', NULL, NULL, 1, '$register->senha', NULL, NULL, NULL)";

    try{
        if($conn->query($sql)){ // O objeto Mysqli devolverá um objeto do tipo Mysql_result
            header('Location: ../../login/login.php?msg=0');
        }
    } catch(Exception $e){
        if($e->getCode() == 1062){
            if( str_contains( $e->getMessage(), 'usuario.PRIMARY' ) ){
                header('Location: ../registro.php?erro=0'); // Se o erro se caracterizar por tentar usar a mesma Primary key, retorna para a página registro o erro "0"
            } else{
                header('Location: ../registro.php?erro=1'); // Caso haja uma conta com o mesmo apelido tentando ser utilizado, retornará o valor "1" para identificar o erro
            }
        }
    }
?>