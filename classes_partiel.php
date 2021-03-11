<?php

//Définition de la classe Article

class Article {
	//Attributs
	protected $reference;
	protected $marque;
	protected $punit;

	//Constructeur
	function __construct($reference, $marque, $punit ) {
		$this->reference = $reference;
		$this->marque = $marque;
		$this->punit=$punit;
	}

	//Accesseurs
	public function getReference() {
		return $this->reference;
	}

	public function getMarque() {
		return $this->marque;
	}
	
	public function getPunit() {
		return $this->punit;
	}

    //Setters
    public function setPunit ($valeur) {
        $this->punit = $valeur;
    }

	function toHTML() {
		echo "<td>".$this->reference."</td><td>".$this->marque."</td><td>".$this->punit."</td>";
	}
}


//Définition de la classe Ordinateur

class Ordinateur extends Article {

//Attributs
	private $freqproc;
	private $ram;

//Constructeur
function __construct($reference, $marque, $punit, $freqproc, $ram) {
	parent::__construct($reference, $marque, $punit);
	$this->freqproc = $freqproc;
	$this->ram = $ram;
}

public function getfreqProc() {
	return $this->freqproc;
}

public function getRam() {
	return $this->ram;
}

public function setRam($valeur) {
	$this->ram = $valeur;
}

public function toHTML() {
	parent:: toHTML()."<td>".$this->freqproc."</td><td>".$this->ram."</td><td>";
}

} //Fin de la classe Ordinateur

class Imprimante extends Article {

	//Attributs
		private $resolution;
		private $type;
	
	//Constructeur
	function __construct($reference, $marque, $punit, $resolution, $type) {
		parent::__construct($reference, $marque, $punit);
		$this->resolution = $resolution;
		$this->type = $type;
	}
	
	public function getResolution() {
		return $this->resolution;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function toHTML() {
		parent:: toHTML()."<td>".$this->resolution."</td><td>".$this->type."</td><td>";
	}
	} //Fin de la classe Imprimante
	
	class Lot extends Article {

		//Attributs
			public $nbreart;
			private $prixlot;
			private $bonus;
		
		//Constructeur
		function __construct($reference, $marque, $punit, $nbreart, $bonus) {
			parent::__construct($reference, $marque, $punit);
			$this->nbreart= $nbreart;
			$this->bonus = $bonus;
			$this->prixlot =  $this->nbreart * $this->punit * ($this->nbreart - $this->bonus)/100;
		}
		
		function getNbreArt() {
			return $this->nbreart;
		}

		function getBonus() {
			return $this->bonus;
		}

		function setNbreArt($valeur) {
			 $this->nbreart = $valeur;
		}

		function setBonus($valeur) {
			$this->bonus = $valeur;
		}
		public function toHTML() {
			parent::toHTML();
			echo "<td>".$this->nbreart."</td><td>".$this->prixlot."</td>";
		}
		} //Fin de la classe Lot