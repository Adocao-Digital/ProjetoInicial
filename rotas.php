<?php
	class Rotas
	{
		public array $rotas = [];
		
		public function get(string $nome_rota, array $dados)
		{
			$this->rotas["GET"][$nome_rota] = $dados;
		}
		
		public function post(string $nome_rota, array $dados)
		{
			$this->rotas["POST"][$nome_rota] = $dados;
		}
		
		public function verificar_rota($metodo, $nome_rota)
		{
			if(isset($this->rotas[$metodo][$nome_rota]))
			{
				$dados = $this->rotas[$metodo][$nome_rota];
				$method = $dados[1];
				$obj = new $dados[0]();
				return $obj->$method();
			}
			exit("Rota é inválida");
		}
	}//fim da classe
	//instanciar um objeto classe Rotas
	$route = new Rotas();
	$route->get("/",[iniciocontroller::class,"inicio"]);
	$route->get("/index.php",[iniciocontroller::class,"inicio"]);
	$route->get("/adotar",[adotarcontroller::class,"tela"]);
	$route->get("/sobre",[sobrecontroller::class,"tela"]);
	$route->get("/fale",[falecontroller::class,"tela"]);
	$route->get("/ajudar",[ajudarcontroller::class,"tela"]);
	$route->get("/cadastro-pet",[cadastropetcontroller::class,"cadastropet"]);
    $route->get("/cadastro", [cadastrocontroller::class, "cadastro"]);
    $route->get("/login", [logincontroller::class, "login"]);