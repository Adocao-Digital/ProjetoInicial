<?php

if(!isset($_SESSION))
{
    session_start();
}

class UsuarioController
{
    public function cadastro()
    {
		$msg = array("","","","","");
		$erro = false;
		if($_POST)
		{
		    if(empty($_POST["nome"]))
			{
				$msg[0] = "Preencha o seu nome";
				$erro = true;
			}
			if(empty($_POST["email"]))
			{
				$msg[1] = "Preencha o seu e-mail";
				$erro = true;
			}
			else
			{
				$usuario = new Usuario(email:$_POST["email"]);
				$usuarioDAO = new UsuarioDAO();
				$retorno = $usuarioDAO->login($usuario);
				
				if(count($retorno) > 0)
				{
					$msg[1] = "E-mail já cadastrado";
					$erro = true;
				}
			}
			if (empty($_POST["cpf"])) {
				$msg[4] = "Preencha o CPF";
				$erro = true;
			} else {
				$usuario = new Usuario(cpf:$_POST["cpf"]);
				$usuarioDAO = new UsuarioDAO();
				$retorno = $usuarioDAO->login($usuario);
				
				if(count($retorno) > 0)
				{
					$msg[4] = "CPF já cadastrado";
					$erro = true;
				}
			}
			if(empty($_POST["senha"]))
			{
				$msg[2] = "Preencha a senha";
				$erro = true;
			}
			if(empty($_POST["confirma"]))
			{
				$msg[3] = "Confirme a senha";
				$erro = true;
			}
			if($_POST["senha"]!= "" && $_POST["confirma"] != "")
			{
				if($_POST["senha"] != $_POST["confirma"])
				{
					$msg[3] = "Senhas não conferem";
					$erro = true;
				}
			}
			if(!$erro)
			{
				
				$usuario = new Usuario(nome:$_POST["nome"], sobrenome:$_POST["sobrenome"], email:$_POST["email"], cpf:$_POST["cpf"], senha:password_hash($_POST["senha"], PASSWORD_DEFAULT), telefone:$_POST["telefone"], sexo:$_POST["sexo"], datanasc:$_POST["datanasc"], perfil:"Usuario");
				$usuarioDAO = new UsuarioDAO();
				$usuarioDAO->inserir($usuario);
				$msg[4] = "Inserido com sucesso";
			}
		}
    	require_once "views/cadastro.php";
    }

	public function logout()
	{
		$_SESSION = array();
		session_destroy();
		header("Location:/ccz/");
		die();
	}

    public function login()
    {
        $msg = array("","");
        $erro = false;
        $mensagem = "";
        if($_POST)
        {
            if(empty($_POST["email"]))
            {
                $msg[0] = "informe o E-mail";
                $erro = true;
            }
            if(empty($_POST["senha"]))
            {
                $msg[1] = "Informe a senha";
                $erro = true;
            }
            if(!$erro)
            {
                //verificar no BD
                $usuario = new Usuario(email:$_POST["email"]);
                
                $usuarioDAO = new UsuarioDAO();
                $retorno = $usuarioDAO->login($usuario);
                
                if(count($retorno) == 1)
                {
                    //encontrou
                    if(password_verify($_POST['senha'], $retorno[0]->senha_usuario))
                    {
                        $_SESSION["idusuario"] = $retorno[0]->id_usuario;
                        $_SESSION["nome"] = $retorno[0]->nome_usuario;
                        $_SESSION["sobrenome"] = $retorno[0]->sobrenome_usuario;
                        $_SESSION["perfil"] = $retorno[0]->perfil;
						$_SESSION["email"] = $retorno[0]->email_usuario;
						$redirectTo = $_SESSION['redirect_to'] ?? '/ccz/';
						unset($_SESSION['redirect_to']);
						header("Location: $redirectTo");
						exit;
                        die();
                    }
                }
                    //não encontrou
                    $mensagem = "Verifique os dados informados";
            }
            
        }
        require_once "views/login.php";
    }
}
?>