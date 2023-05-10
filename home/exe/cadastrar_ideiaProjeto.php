<?php
    require('../../db_conection/conexao.php');
    session_start();

    class RegistroCadastro{
        
        public readonly mysqli $conexao;
        public readonly string $nome;
        public readonly string $usuario_post;
        public readonly string $opcao;
        public readonly string $titulo;
        public readonly string $descricao;
        public readonly string $tipo_cadastro;

        public function __construct(string $usuario, string $titulo, string $descricao, string $opcao, string $nome, mysqli $conexao){

            $this->nome = $nome;
            $this->usuario_post = $usuario;
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->opcao = $opcao;
            $this->conexao = $conexao;

        }

        public function salvar(){

            $today = date("d.m.y");
            echo "$today";
            $sql = "INSERT INTO ideia(data_post, filtros, titulo, imagem, descricao, fk_Usuario_email, nome) VALUES ('$today', '$this->opcao', '$this->titulo', NULL, '$this->descricao', '$this->usuario_post', '$this->nome')";
            try{$this->conexao->query($sql);}
            catch(Exception $e){
                echo " Erro";
                echo "</br>";
                echo $e->getMessage();
            }

        }
        
    }


    $titulo_Post = $_POST['input-titulo-cadastro'];
    $descricao_Post = $_POST['input-descricao-cadastro'];
    $opcao_Post = $_POST['input-select-opcao'];
    $email_Session = $_SESSION['email'];
    $nome_Session = $_SESSION['nome'];

    $registro = new RegistroCadastro($email_Session, $titulo_Post, $descricao_Post, $opcao_Post, $nome_Session, $conn);
    $registro->salvar();

?>