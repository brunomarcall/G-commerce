<?php
namespace Controllers;

use Controllers\Controlador;
use Models\Usuario;
use Models\Produtos;

class Autenticacao extends Controlador{
    
    public function __construct(){
        parent::__construct();
    }

    /**
     * Verficando se o token armazenado no cache do navegador
     * corresponde a algum cadastrado no banco de dados.
     */
    public static function checarLogin()
    {
        
        if (!empty($_SESSION['token']))
        {
            $token = $_SESSION['token'];

            $dados = Usuario::select()->where('token', $token)->execute();
            
            if(count($dados) > 0)
            {
                $usuario = new Usuario(
                    $dados[0]['nome'], 
                    $dados[0]['senha'],
                    $dados[0]['email']
                );
                $_SESSION['usuario'] = $dados[0]['nome'];
                return $usuario;
            }
        }
        return false;
    }

    /**
     * Verificando no banco de dados se há registro com esse email.
     * Caso haja, será retornado o token para guardar a sessão.
     */
    public static function verificarLogin($email, $senha)
    {
        $user = Autenticacao::verificarEmail($email);

        if ($user) {
            if ($senha == $user[0]['senha']){
                
                $token = md5(time().rand(0, 9999));
                
                Usuario::update()
                    ->set('token', $token)
                    ->where('email', $email)
                    ->execute();

                return $token;
            }
        } 
        $_SESSION['erro'] = 'Usuário ou senha inválido.';
        return false;
    }

    /**
     * Verificando se o email está cadastrado no banco de dados
     * e retornando os dados do usuário.
     */
    public static function verificarEmail($email)
    {
        $user = Usuario::select()->where('email', $email)->get();
        return ($user) ?? false;
    }

    public function login(){
        if($this->estaLogado()){
            $this->redirecionar("dashboard");
        }
        $usuario = $_POST['email'] ?? null;
        $senha = $_POST['senha'] ?? null;

        if(!empty($usuario) && !empty($senha)){
            
            $data = Autenticacao::verificarLogin($usuario, $senha);
            if(count($data) > 0){
                $_SESSION['token'] = $data;
                $this->redirecionar("dashboard");
            }
        }
        $this->addDadosSessao("erro", "Login Incorreto");
        $this->redirecionar();
        
    }

    public function Cadastro(){
        /**
         * Pegando os dados do formulário de cadastro.
         */
        $nome = 
            ucfirst(trim($_POST['nome'])).' '.
            ucfirst(trim($_POST['sobrenome']));
        $email = $_POST['email'];
        
        /**
         * Fazendo a verificação da senha.
         */
        $senha = (
            trim(filter_input(INPUT_POST, 'senha')) == 
            trim(filter_input(INPUT_POST, 'confirme'))
        ) ? 
            trim(filter_input(INPUT_POST, 'senha')):null;
        
        /**
         * Caso tudo esteja correto um novo usuário será criado.
         */
        if ($nome && $email && $senha)
        {
            if (count(Autenticacao::verificarEmail($email) <= 0))
            {
                $_SESSION['token'] = Autenticacao::adicionarUsuario($nome, $email, $senha);
                $this->redirecionar(); 
            } else {
                $_SESSION['erro'] = 'Email já cadastrado.';
                $this->redirecionar('cadastro');
            } 
        }
        $this->redirecionar();
 
    }

    public static function adicionarUsuario($nome, $email, $senha){
        $token = md5(time().rand(0, 9999));

        Usuario::insert([
            'email'=>$email,
            'senha'=>$senha,
            'nome'=>$nome,
            'token'=>$token
        ])->execute();
        $_SESSION['erro'] = '';

        return $token;
    }

    public function logout(){
        $this->deslogar();
        $this->redirecionar();
    }

    
   
}