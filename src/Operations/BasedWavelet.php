<?php

namespace echolibre\google_wave\Operations;

use \echolibre\google_wave\Model\Wavelet as Wavelet;
use \echolibre\google_wave\Model\WaveletData as WaveletData;
use \echolibre\google_wave\Operations\Context as Context;

/**
 * BasedWavelet class
 *
 *
 * See the link lower for more reference.
 *
 * @see     http://code.google.com/p/wave-robot-python-client/source/browse/trunk/src/waveapi/operations.py
 * @author  David Coallier <david@echolibre.com>
 * @package echolibre\google_wave
 * @version 0.1.0
 * @license LGPL
 * @uses    \echolibre\google_wave\Model\WaveletData
 * @uses    \echolibre\google_wave\Model\Wavelet
 * @uses    \echolibre\google_wave\Operations\Context
 */
class BasedWavelet extends Wavelet
{
    private $_context;

    /**
     * Constructor
     *
     * Create a new BasedWavelet object. This object generates operations.
     *
     * @param WaveletData $data  The wave data
     * @param Context     $context The context instance.
     */
    public function __construct(WaveletData $data, Context $context)
    {
        parent::__construct($data);
        $this->_context = $context;
    }

    /**
     * Create a new blip
     *
     * This method will create a new wavelet blip.
     *
     * @return The newly created blip
     */
    public function createBlip()
    {
        $blipData = $this->_context->builder->appendWaveletBlip(
            $this->waveId, $this->waveletId
        );

        return $this->_context->addBlip($blipData);
    }

    /**
     * Add a participant
     *
     * Add a participant to a wavelet
     *
     * @param  int $participantId  The participant ID.
     * @return void
     */
    public function addParticipant($participantId)
    {
        $this->_context->builder->addWaveletParticipant(
            $this->waveId, $this->waveletId, $participantId
        );

        $this->participants->append($participantId);
    }

    /**
     * Remove a wavelet
     *
     * This method removes a wavelet
     *
     * @return void
     */
    public function remove()
    {
        $this->_context->builder->waveletRemove($this->waveId, $this->waveletId);
    }

    /**
     * Set the data document
     *
     * This method is used to set the wavelet data document
     *
     * @param  string $name The name of the document.
     * @param  mixed  $data The data belonging to the document.
     * @return void
     */
    public function setDataDocument($name, $data)
    {
        $this->_context->builder->setWaveletDataDoc(
            $this->waveId, $this->waveletId, $name, $data
        );

        $this->_data->dataDocuments[$name] = $data;
    }

    /**
     * Set the title
     *
     * This method is used to set the title of a wavelet.
     *
     * @param  string $title  The title of the wavelet.
     * @return void
     */
    public function setTitle($title)
    {
        $this->_context->builder->setWaveletTitle(
            $this->waveId, $this->waveletId, $title
        );

        $this->_data->title = $title;
    }
}