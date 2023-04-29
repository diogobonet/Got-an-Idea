<?php
    class Registro{
        public readonly string $email;
        public readonly string $nome;
        public readonly string $sobrenome;
        public readonly string $apelido;
        public readonly string $senha;

        public function __construct(string $email_param, string $nome_param, string $sobrenome_param, string $apelido_param, string $senha_param)
        {
            $this->email = $email_param;
            $this->nome = $nome_param;
            $this->apelido = $apelido_param;
            $this->senha = $senha_param;

            $this->nome = $nome_param + " " + $sobrenome_param;
            
        }
    }

    $novoRegistro = new Registro($_POST['email_input'], $_POST['nome_input'], $_POST['sobrenome_input'], $_POST['apelido_input'], md5($_POST['senha_input']));
    
    /*
    $email = $_POST['email_input'];
    $apelido = $_POST['apelido_input'];
    $nome = $_POST['nome_input'];
    $sobrenome = $_POST['sobrenome_input'];
    $senha = md5($_POST['senha_input']);
    */

    // $nome = $nome + " " + $sobrenome;

?>

<?=$novoRegistro->nome;?>