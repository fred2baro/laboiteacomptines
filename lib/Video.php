<?php
class Video
{

	private $idVideo ;
	private $titre;
	private $urlScreen;getset
	private $urlVideo;
	private $nbvue;
	private $note;
	private $description;
	private $paroles;
	private $date;

	public Video($unId, $unTitre, $unUrlScreen, $unUrlVideo, $unNbvue, $uneNote, $uneDescription, $desParoles, $uneDate)
	{
		$this->idVideo = $unId;
		$this->titre = $unTitre;
		$this->urlScreen = $unUrlScreen;
		$this->urlVideo = $unUrlVideo;
		$this->nbvue = $unNbvue;
		$this->note = $uneNote;
		$this->description = $uneDescription;
		$this->paroles = $desParoles;
		$this->date = $uneDate;
	}
	public getIdVideo()
	{
		return $this->idVideo;
	}
	public setIdVideo($unId)
	{
		$this->idVideo = $unId;
	}

	public getTitre()
	{
		return $this->titre;
	}
	public setTitre($unTitre)
	{
		$this->titre = $unTitre;
	}

	public getScreen()
	{
		return $this->urlScreen;
	}
	public setScreen($unScreen)
	{
		$this->urlScreen = $unScreen;
	}

	public getVideo()
	{
		return $this->urlVideo;
	}
	public setVideo($Video)
	{
		$this->urlVideo = $Video;
	}

	public getNbvue()
	{
		return $this->nbvue;
	}
	public setNbvue($nbVue)
	{
		$this->nbvue = $nbVue;
	}

	public getNote()
	{
		return $this->note;
	}
	public setNote($uneNote)
	{
		$this->note = $uneNote;
	}

	public getDescription()
	{
		return $this->description;
	}
	public setDescription($uneDescription)
	{
		$this->description = $uneDescription
	}

	public getParoles()
	{
		return $this->paroles;
	}
	public setParoles($desParoles)
	{
		$this->paroles = $desParoles;
	}

	public getLaDate()
	{
		return $this->date;
	}
	public setLaDate($uneDate)
	{
		$this->date = $uneDate;
	}	
}
?>