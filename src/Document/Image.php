<?php
namespace echolibre\google_wave\Document;

class Image extends \echolibre\google_wave\Document\Element
{
    const JAVA_CLASS = 'com.google.wave.api.Image';
    
    public function __construct($url = '', $width = null, $height = null, 
                                $attachment_id = null, $caption = null)
    {
        parent::__construct(Common::$ELEMENTS->IMAGE, array(
            'url'           => $url,
            'width'         => $width,
            'height'        => $height,
            'attachment_id' => $attachment_id,
            'caption'       => $caption,
        ));
    }
}