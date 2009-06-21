<?php
namespace echolibre\google_wave\Operations;

class Operation
{
    const JAVA_CLASS = 'com.google.wave.api.impl.OperationImpl';

    public $opType;
    public $waveId;
    public $waveletId;
    public $blipId;
    public $index;
    public $property;

    /**
     * Constructor
     *
     * This is the constructor for the operation object constructor
     *
     * @param string $opType    The type of operation to perform.
     * @param int    $waveId    The wave on which the operation has to be applied.
     * @param int    $waveletId The wavelet on which the operation is applied.
     * @param int    $blipId    The blip id on which the operation is applied.
     * @param int    $index     An optional index for content based operations.
     * @param array  $property  The property of the object.
     */
    public function __construct($opType, $waveId, $waveletId, $blipId = '', $index = 0, $property)
    {
        $this->opType    = $opType;
        $this->waveId    = $waveId;
        $this->waveletId = $waveletId;
        $this->blipId    = $blipId;
        $this->index     = $index;
        $this->property  = $property;
    }
}