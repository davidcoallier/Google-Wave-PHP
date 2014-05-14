<?php
namespace echolibre\google_wave\Model;

use echolibre\google_wave\Model\BlipData as BlipData;
use echolibre\google_wave\Model\Document as Document;

/**
 * Blip class
 *
 *
 * See the link lower for more reference.
 *
 * @see     http://code.google.com/p/wave-robot-python-client/source/browse/trunk/src/waveapi/model.py
 * @author  David Coallier <david@echolibre.com>
 * @package echolibre\google_wave
 * @version 0.1.0
 * @license LGPL
 * @uses    \echolibre\google_wave\Model\BlipData
 * @uses    \echolibre\google_wave\Model\Document
 */
class Blip
{
    /**
     * The BlipData object
     *
     * @var \echolibre\google_wave\Model\BlipData $data
     */
    protected $data;

    /**
     * The Document object
     *
     * @var \echolibre\google_wave\Model\Document $document
     */
    protected $document;

    /**
     * Blip Constructor
     *
     * This creates the Blip object.
     *
     * @param \echolibre\google_wave\Model\BlipData $data The blipdata object
     * @param \echolibre\google_wave\Model\Document $document The document object.
     */
    public function __construct(BlipData $data, Document $document)
    {
        $this->data     = $data;
        $this->document = $document;
    }

    /**
     * Magic Getter
     */
    public function __get($key)
    {
        // There's one instance where we need the actual document data...
        if (strtolower($key) == 'document') {
            if ($this->document->{$key} !== false) {
                return $this->document->{$key};
            }
        }

        if ($this->data->{$key} !== false) {
            return $this->data->{$key};
        }

        return false;
    }

    /**
     * Is root?
     *
     * Is this the same as it's parent thus the root?
     *
     * @return bool if parentBlipId is null.
     */
    public function isRoot()
    {
        return is_null($this->data->parentBlipId);
    }
}