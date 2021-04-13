<?php
include 'Note.php';
class Matiere
{
    /**
     * Libelle de la matière
     *
     * @var string $libelle 
     */
    private $libelle;
    
    /**
     * Liste des notes de la matière
     *
     * @var array $listeNote
     */
    private array $listeNote;
    
    /**
     * Le coefficient de la matière. par défaut 1
     *
     * @var int $coefficient
     */
    private $coefficient;

    public function __construct(string $libelle = '', int $coefficient = 1)
    {
        $this->libelle = $libelle;
        $this->listeNote = array();
        $this->coefficient= $coefficient;
    }

    public function addNote(Note $noteMatiere){
        $this->listeNote[] = $noteMatiere;
    }
    
    /**
     * Get $libelle
     *
     * @return  string
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set $libelle
     *
     * @param  string  $libelle  $libelle
     *
     * @return  self
     */ 
    public function setLibelle(string $libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get $listeNote
     *
     * @return  array
     */ 
    public function getListeNote()
    {
        return $this->listeNote;
    }

    /**
     * Set $listeNote
     *
     * @param  array  $listeNote  $listeNote
     *
     * @return  self
     */ 
    public function setListeNote(array $listeNote)
    {
        $this->listeNote = $listeNote;

        return $this;
    }
   

    /**
     * Get $coefficient
     *
     * @return  int
     */ 
    public function getCoefficient()
    {
        return $this->coefficient;
    }

    /**
     * Set $coefficient
     *
     * @param  int  $coefficient  $coefficient
     *
     * @return  self
     */ 
    public function setCoefficient(int $coefficient)
    {
        $this->coefficient = $coefficient;

        return $this;
    }
     


}