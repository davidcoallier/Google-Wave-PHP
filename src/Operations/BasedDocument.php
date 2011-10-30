<?php

namespace echolibre\google_wave\Operations;

use \echolibre\google_wave\Model\Blip as Blip;
use \echolibre\google_wave\Model\Document as Document;
use \echolibre\google_wave\Operations\Context as Context;
use \echolibre\google_wave\Document\Range as Range;

/**
 * BasedWave class
 *
 *
 * See the link lower for more reference.
 *
 * @see     http://code.google.com/p/wave-robot-python-client/source/browse/trunk/src/waveapi/operations.py
 * @author  David Coallier <david@echolibre.com>
 * @package echolibre\google_wave
 * @version 0.1.0
 * @license LGPL
 * @uses    \echolibre\google_wave\Model\WaveData
 * @uses    \echolibre\google_wave\Model\Wave
 * @uses    \echolibre\google_wave\Operations\Context
 */
class BasedDocument extends Document
{
    private $_context;

    /**
     * Constructor
     *
     * Create a new BasedDocument object. This object generates operations.
     *
     * @param Blip $data  The Blip object
     * @param Context  $context The context instance.
     */
    public function __construct(Blip $data, Context $context)
    {
        parent::__construct($data);
        $this->_context = $context;
    }

    /**
     * Has Annotation
     *
     * This method will find if an annotation of a certain name exists
     *
     * @param string $name  The name of the annotation to find
     * @return boolean True or False whether it finds out the annotation or not
     */
    public function hasAnnotation($name)
    {
        $annotationIterator = $this->annotations->getIterator();

        foreach ($annotationIterator->rewind(); $annotationIterator->valid(); $annotationIterator->next()) {
            // I want $it->current()['name']; .. patch accepted? yeah yeah...
            $current = $it->current();
            if ($current['name'] == $name) {
                return true;
            }
        }

        return false;
    }

    /**
     * Ranges for Annotation
     *
     * This does like "hasAnnotation" but returns the range of the found
     * annotation.
     *
     * @param string $name  The name of the annotation to find.
     * @return mixed Either a Range ArrayObject or false if nothing is found.
     */
    public function rangesForAnnotation($name)
    {
        $annotationIterator = $this->annotations->getIterator();

        foreach ($annotationIterator->rewind(); $annotationIterator->valid(); $annotationIterator->next()) {
            $current = $it->current();
            if ($current['name'] == $name) {
                return $current['range'];
            }
        }

        return false;
    }

    /**
     * Set the text in document
     *
     * Set the text in a document and sets the content of the blip
     *
     * @param string $text  The text to set
     * @return void
     */
    public function setText($text)
    {
        $this->clear();

        $this->_context->builder->insertDocument(
            $this->waveId, $this->waveletId, $this->blipId, $text
        );

        $this->blip->content = $text;
    }

    /**
     * Set the text in range
     *
     * This sets the text in a range
     *
     * @param Range $range  The range object
     * @param string $text  The string to set the text with
     * @return void
     */
    public function setTextInRange(Range $range, $text)
    {
        $this->deleteRange($range);
        $this->insertText($range->start, $text);
    }

    /**
     * Insert text
     *
     * This method will insert some text starting at some range.
     *
     * @param  int    $start  Where to start in the range
     * @param  string $text The text to insert
     * @return void
     */
    public function insertText($start, $text)
    {
        $this->_context->builder->insertDocument(
            $this->waveId, $this->waveletId, $this->blipId, $text
        );

        $left  = substr($this->blip->content, 0, $start);
        $right = substr($this->blip->content, $start, sizeof($this->blip->content) - 1);

        $this->blip->content = $left . $text . $right;
    }

    /**
     * Append text
     *
     * Append some text to the content of a blip.
     *
     * @param string $text  The new text to insert
     * @return void
     */
    public function appendText($text)
    {
        $this->_content->builder->appendDocument(
            $this->waveId, $this->waveletId, $this->blipId, $text
        );

        $this->blip->content += $text;
    }

    /**
     * Clear a document
     *
     * This method clears a document's content
     *
     * @return void
     */
    public function clear()
    {
        $this->_context->builder->documentDelete(
            $this->waveId, $this->waveletId,
            $this->blipId, 0, count($this->blip->content)
        );

        $this->blip->content = '';
    }

    /**
     * Delete Range
     *
     * This method is used to delete a range of values
     *
     * @param Range $range  The range
     * @return void
     */
    public function deleteRange(Range $range)
    {
        $this->_context->builder->deleteDocument(
            $this->waveId, $this->waveletId,
            $this->blipId, $range->start, $range->end
        );

        $left = substr($this->blip->content, 0, $range->start);
        $right = substr($this->blip->content, $range->start, $range->end);

        $this->blip->content = $left . $right;
    }
}