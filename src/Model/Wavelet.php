<?php
namespace echolibre\google_wave\Model;

class Wavelet
{
    private $data;
    public function __construct(\echolibre\google_wave\Model\WaveletData $data)
    {
        $this->data = $data;
    }
    
    public function __get($key)
    {
        if ($this->data->{$key} !== false) {
            return $this->data->{$key};
        }
        
        return false;
    }
}