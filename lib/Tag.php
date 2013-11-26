<?php
class Tag
{
	private $tag;
	private $libelle;
	private $description;

	public Tag($unTag, $unLibelle, $uneDescription)
	{
		$this->tag = $unTag;
		$this->libelle = $unLibelle;
		$this->description = $uneDescription;
	}

	public getTag()
	{
		return $this->tag;
	}
	public setTag($unTag)
	{
		$this->tag = $unTag;
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