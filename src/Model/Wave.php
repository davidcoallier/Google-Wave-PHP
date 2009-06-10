<?php
namespace echolibre\google_wave\Model;

class Wave
{
    private $data;
    
    public function __construct(\echolibre\google_wave\WaveData $data)
    {
        $this->data = $data;
    }
    
    public function getId()
    {
        return $this->data->id;
    }
    
    public function getWaveletIds()
    {
        return $this->data->waveletIds;
    }
}