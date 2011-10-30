<?php

namespace echolibre\google_wave\Operations;

use \echolibre\google_wave\Model\Blip as Blip;
use \echolibre\google_wave\Model\BlipData as BlipData;
use \echolibre\google_wave\Operations\Context as Context;
use \echolibre\google_wave\Operations\BasedDocument as BasedDocument;

/**
 * BasedBlip class
 *
 *
 * See the link lower for more reference.
 *
 * @see     http://code.google.com/p/wave-robot-python-client/source/browse/trunk/src/waveapi/operations.py
 * @author  David Coallier <david@echolibre.com>
 * @package echolibre\google_wave
 * @version 0.1.0
 * @license LGPL
 * @uses    \echolibre\google_wave\Model\Blip
 * @uses    \echolibre\google_wave\Model\BlipData
 * @uses    \echolibre\google_wave\Operations\Context
 * @uses    \echolibre\google_wave\Operations\BasedDocument
 */
class BasedBlip extends Blip
{
    private $_context;

    /**
     * Constructor
     *
     * Create a new BasedBlip object. This object generates operations.
     *
     * @param WaveData $data  The wave data
     * @param Context  $context The context instance.
     */
    public function __construct(Blip $data, Context $context)
    {
        parent::__construct($data, new BasedDocument($data, $context));
        $this->_context = $context;
    }

    /**
     * Create a child blip
     *
     * This method is used to create a childBlip.
     *
     * @return The created Child blip.
     */
    public function createChild()
    {
        $blipData = $this->_context->builder->createBlipChild(
            $this->waveId, $this->waveletId, $this->blipId
        );

        return $this->_context->addBlip($blipData);
    }

    /**
     * Delete a blip
     *
     * This is used to delete a blip.
     *
     * @return The result of the deletion.
     */
    public function delete()
    {
        $this->_context->builder->deleteBlip(
            $this->waveId, $this->waveletId, $this->blipId
        );

        return $this->_context->deleteBlip($this->blipId);
    }
}