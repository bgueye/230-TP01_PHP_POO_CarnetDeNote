<?php

class Note
{
    /**
     * Une note
     *
     * @var float
     */
    private ?float $note;

    /**
     * Note min
     *
     * @var float
     */
    private float $noteMin;

    /**
     * Note max
     *
     * @var float
     */
    private float $noteMax;

  
    public function __construct(float $note = 0)
    {
        $this->note = 0;
        $this->noteMin = 0.0;
        $this->noteMax = 20.0;
        if ($note >= $this->noteMin && $note <= $this->noteMax){
            $this->note = $note;
        }else
        {
            echo 'la note doit être supérieure à '.$this->noteMin.' et inférieure à '.$this->noteMax;
        }

    }
    
    public function affiche (){
        echo "La note est de $this->note (comprise entre $this->noteMin et $this->noteMax)";
    }


    /**
     * Getter d'une note
     *
     * @return  float
     */ 
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Setter d'une note
     *
     * @param  float  $note  Une note
     *
     * @return  self
     */ 
    public function setNote(float $note)
    {
        if ($note >= $this->noteMin && $note <= $this->noteMax){
            $this->note = $note;
        }else
        {
            echo 'la note doit être supérieure à '.$this->noteMin.' et inférieure à '.$this->noteMax;
        }

        return $this;
    }



    /**
     * Getter de note max
     *
     * @return  float
     */ 
    public function getNoteMax()
    {
        return $this->noteMax;
    }

    /**
     * Setter de note max
     *
     * @param  float  $noteMax  Note max
     *
     * @return  self
     */ 
    public function setNoteMax(float $noteMax)
    {
        $this->noteMax = $noteMax;

        return $this;
    }


    /**
     * Getter note min
     *
     * @return  float
     */ 
    public function getNoteMin()
    {
        return $this->noteMin;
    }

    /**
     * Setter note min
     *
     * @param  float  $noteMin  Note min
     *
     * @return  self
     */ 
    public function setNoteMin(float $noteMin)
    {
        $this->noteMin = $noteMin;

        return $this;
    }
}