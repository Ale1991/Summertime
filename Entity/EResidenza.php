<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EResidenza
 *
 * @author Stefano
 */
class EResidenza 
{
    private $città; //string
    private $nazione; //string
    private $provincia; //string
    private $indirizzo; //string
    
    public function getCittà()
    {
        return $this->città;
    }
    
    public function getNazione()
    {
        return $this->nazione;
    }
    
    public function getProvincia()
    {
        return $this->nazione;
    }
    
    public function getIndirizzo()
    {
        return $this->indirizzo;
    
    }
    
    public function setCittà($cit)
    {
        $this->città=$cit;
    }
    
    public function setNazione($naz)
    {
        $this->nazione=$naz;
    }
    
    public function setProvincia($pro)
    {
        $this->provincia=$pro;
    }
    
    public function setIndirizzo ($ind)
    {
        $this->indirizzo=$ind;
    }
    
    }
