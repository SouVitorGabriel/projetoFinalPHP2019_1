<?php
	class Heroi{
		public $nome;
		   $vida;

		function Apresentacao(){
			echo "Olar, sou " . $this->nome." vc nao eh<br>";
		}

		function falaVida(){
			echo "Olar, minha vida é " . $this->vida."<br>";
		}
	}
	

	class Suporte extends Heroi{

		public $valorCura = 5;

		function Cura($heroi)
		{
			$heroi->vida = $heroi->vida + $this->valorCura;
		}
	}

	$boneco = new Heroi();
	$boneco->nome = "Petunia";
	$ ->vida = 10;
	$boneco->falaVida();

	$curandeiro = new Suporte();
	$curandeiro->nome = "Dougras";
	$curandeiro->Apresentacao();
	$curandeiro->Cura($boneco);
	$boneco->falaVida();

?>