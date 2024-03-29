<?php
    date_default_timezone_set('America/Sao_Paulo');
    require('../../db_conection/conexao.php');
    session_start();

    class RegistroCadastro{
        
        public $conexao;
        public $usuario_post;
        public $opcao;
        public $titulo;
        public $descricao;
        public $tipo_postagem;
        public $meta_arrecadacao;

        public function __construct(string $usuario, string $titulo, string $descricao, string $opcao, int $tipoPostagem, float|null $meta_param, mysqli $conexao){

            if($tipoPostagem == 1){
                $this->tipo_postagem = 1;
            }else if($tipoPostagem == 2){
                $this->tipo_postagem = 2;
                $this->meta_arrecadacao = $meta_param;
            }
            $this->usuario_post = $usuario;
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->opcao = $opcao;

            $this->conexao = $conexao;


        }

        public function salvar():void{
            $today = date("d/m/y");
            if($this->tipo_postagem == 1){ // Cadastro para ideias (meta e valor NULOS)
                $sql = "INSERT INTO postagens(data_post, filtros, titulo, descricao, fk_email, fk_idPost, meta_de_arrecadacao, valor_arrecadado) VALUES (?, ?, ?, ?, ?, ?, NULL, NULL)";
                try{
                    $sql_preparado = $this->conexao->prepare($sql);
                    $sql_preparado->bind_param("sssssi", $today, $this->opcao, $this->titulo, $this->descricao, $this->usuario_post, $this->tipo_postagem);
                    $sql_preparado->execute();
    
                    header("location: ../home.php");
                }
                catch(Exception $e){
                    echo " Erro";
                    echo "</br>";
                    echo $e->getMessage();
                }
            } else if($this->tipo_postagem == 2){ // Cadastro para projetos (meta e valor zerados de inicio)
                $sql = "INSERT INTO postagens(data_post, filtros, titulo, descricao, fk_email, fk_idPost, meta_de_arrecadacao, valor_arrecadado) VALUES (?, ?, ?, ?, ?, ?, ?, 0)";
                try{
                    $sql_preparado = $this->conexao->prepare($sql);
                    $sql_preparado->bind_param("sssssdd", $today, $this->opcao, $this->titulo, $this->descricao, $this->usuario_post, $this->tipo_postagem, $this->meta_arrecadacao);
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
    }


    $titulo_Post = $_POST['input-titulo-cadastro'];
    $descricao_Post = $_POST['input-descricao-cadastro'];
    $opcao_Post = $_POST['input-select-opcao'];
    $tipoPostagem_Post = $_POST['input-tipo-postagem'];
    if(isset($_POST['input-meta'])){
        $meta_param = $_POST['input-meta'];
        if($meta_param == ""){
            $meta_param = NULL;
        }
    }

    $email_Session = $_SESSION['email'];
    $nome_Session = $_SESSION['nome'];
    $imagem_Session = $_SESSION['imagem'];

    $registro = new RegistroCadastro($email_Session, $titulo_Post, $descricao_Post, $opcao_Post, $tipoPostagem_Post, $meta_param, $conn);

    $registro->salvar();

?>