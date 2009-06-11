<?php

namespace echolibre\google_wave\Model;

/** 
 * The root wavelet id suffix. Taken from the python library.
 */
const ROOT_WAVELET_ID_SUFFIX = '!conv+root';

/**
 * Abstract Model class
 *
 * Abstract Model
 *
 * See the link lower for more reference.
 *
 * @see     http://code.google.com/p/wave-robot-python-client/source/browse/trunk/src/waveapi/document.py
 * @author  David Coallier <david@echolibre.com>
 * @package echolibre\google_wave
 * @version 0.1.0
 * @license LGPL 
 * @uses    \echolibre\google_wave\Model\Event
 * @uses    \echolibre\google_wave\Model\WaveletData
 */
abstract class AbstractModel
{
    /**
     * Create an event
     *
     * This method is used to create a new model event.
     * By passing the data required, the method will return
     * an object of type Model\Event with the values set.
     *
     * @param array $data  The data to set the new object with.
     * @return \echolibre\google_wave\model\Event $event  The Model\Event object.
     */
    public static function createEvent(array $data)
    {
        $event = new \echolibre\google_wave\Model\Event;
        
        $event->type       = $data['type'];
        $event->timestamp  = $data['timestamp'];
        $event->modifiedBy = $data['modifiedBy'];
        $event->properties = new \stdClass();
        
        if (isset($data['properties'])) {
            $event->properties = $data['properties'];
        }
        
        return $event;
    }
    
    /**
     * Create a wavelet data
     *
     * This method is used to create a new wavelet data object.
     * By passing the data required, the method will return
     * an object of type Model\WaveletData with the values set.
     *
     * @param array $data  The data to set the new object with.
     *
     * @return \echolibre\google_wave\model\WaveletData $waveletData  
     *         The Model\WaveletData object.
     */
    public static function createWaveletData(array $data)
    {
        $waveletData = new \echolibre\google_wave\Model\WaveletData;
        
        $waveletData->creator          = $data['creator'];
        $waveletData->creationTime     = $data['creationTime'];
        $waveletData->dataDocuments    = $data['dataDocuments'];
        $waveletData->lastModifiedTime = $data['lastModifiedTime'];
        $waveletData->participants     = new ArrayIterator($data['participants']);
        $waveletData->rootBlipId       = $data['rootBlipId'];
        $waveletData->title            = $data['title'];
        $waveletData->version          = $data['version'];
        $waveletData->waveId           = $data['waveId'];
        $waveletData->waveleyId        = $data['waveletId'];

        return $waveletData;
    }
}