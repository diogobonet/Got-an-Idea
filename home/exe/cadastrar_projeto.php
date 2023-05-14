<?php
    require('../../db_conection/conexao.php');
    session_start();

    class RegistroCadastro{
        
        public $conexao;
        public $nome;
        public $usuario_post;
        public $opcao;
        public $titulo;
        public $descricao;
        public $tipo_cadastro;
        public $imagem;

        public function __construct(string $usuario, string $titulo, string $descricao, string $opcao, string $nome, string $imagem_string, mysqli $conexao){

            $this->nome = $nome;
            $this->usuario_post = $usuario;
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->opcao = $opcao;
            $this->imagem = $imagem_string;

            $this->conexao = $conexao;


        }

        public function salvar():void{

            $today = date("d.m.y");
            $sql = "INSERT INTO projeto(data_post, filtros, titulo, imagem, descricao, fk_Usuario_email, nome) VALUES (?, ?, ?, ?, ?, ?, ?)";
            try{
                $imagem_blob = base64_decode($this->imagem, true);
                if($imagem_blob == false){die("DEU ERRO NA DECODIFICAÇÂO");}

                $sql_preparado = $this->conexao->prepare($sql);
                $sql_preparado->bind_param("sssbsss", $today, $this->opcao, $this->titulo, $imagem_blob, $this->descricao, $this->usuario_post, $this->nome);
                $sql_preparado->execute();

                header("location: ../home.php");
            }
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
    $imagem_Session = $_SESSION['imagem'];

    $registro = new RegistroCadastro($email_Session, $titulo_Post, $descricao_Post, $opcao_Post, $nome_Session, $imagem_Session, $conn);

    $registro->salvar();

?>