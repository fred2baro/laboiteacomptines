<?php
class Categorie
{
	private $categorie;
	private $libelle;
	private $description;

	public Categorie($uneCategorie, $unLibelle, $uneDescription)
	{
		$this->categorie = $uneCategorie;
		$this->libelle = $unLibelle;
		$this->description = $uneDescription;
	}

	public getCategorie()
	{
		return $this->categorie;
	}
	public setCategorie($uneCategorie)
	{
		$this->categorie = $uneCategorie;
	}

	public getlibelle()
	{
		return $this->libelle;
	}
	public setlibelle($unLibelle)
	{
		$this->libelle = $unLibelle;
	}

	public getDescription()
	{
		return $this->description;
	}
	public setDescription($uneDescription)
	{
		$this->description = $uneDescription;
	}
}
?>