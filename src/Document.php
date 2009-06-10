<?php
namespace echolibre\google_wave\Document;


abstract class Common 
{
    public static $ELEMENTS;
}

Common::$ELEMENTS = new StringEnum(
    array(
        'INLINE_BLIP', 'INPUT', 'CHECK', 'LABEL', 'BUTTON',
        'RADIO_BUTTON', 'RADIO_BUTTON_GROUP','PASSWORD', 'GADGET', 'IMAGE'
    )
);

class Range
{
    const JAVA_CLASS = 'com.google.wave.api.Range';
    
    protected $start;
    protected $end;
    
    public function __construct($start = 0, $end = 1) 
    {
        $this->start = (int)$start;
        $this->end   = (int)$end;
        
        if ($this->end - $this->start < 0) {
            throw new \echolibre\google_wave\RangeException('Range cannot be less than 0');
        }
    }
    
    public function isCollapsed()
    {
        return $this->end === $this->start;
    }
    
    public function __toString()
    {
        return 'Range(' . $this->start . ', ' . $this->end . ')';
    }
}

class Annotation 
{
    const JAVA_CLASS = 'com.google.wave.api.Annotation';
    
    protected $name;
    protected $value;
    protected $range;
    
    public function __construct(string $name, $value, \echolibre\google_wave\Document\Range $range)
    {
        $this->name = $name;
        $this->value = $value;
        $this->range = $range;
    }
}

class StringEnum
{
    private $values;
    
    public function __construct(array $values)
    {
        foreach ($values as $value) {
            $this->values[$value] = $value;
        }
    }
    
    public function __get($key)
    {
        if (isset($this->values[$key])) {
            return $this->values[$key];
        }
        
        return false;
    }
}


class Element 
{
    const JAVA_CLASS = 'com.google.wave.api.Element';
    
    protected $type;
    private $variables = array();
    
    public function __construct($elementType, $properties)
    {
        $this->type = $elementType;
        foreach ($properties as $key => $value) {
            $this->$key = $value;
        }
    }
    
    public function __set($key, $value)
    {
        $this->variables[$key] = $value;
    }
    
    public function __get($key)
    {
        if (isset($this->variables[$key])) {
            return $this->variables[$key];
        }
        
        return false;
    }
}

class FormElement extends \echolibre\google_wave\Document\Element
{
    const JAVA_CLASS = 'com.google.wave.api.FormElement';
    
    public function __construct($elementType, $name, 
                                $value = '', $defaultValue = '', $label = '')
    {
        parent::__construct($elementType, array(
            'value'        => $value,
            'defaultValue' => $defaultValue,
            'label'        => $label,
        ));
    }
}

class Gadget extends \echolibre\google_wave\Document\Element
{
    const JAVA_CLASS = 'com.google.wave.api.Gadget';
    
    public function __construct($url = '')
    {
        parent::__construct(Common::$ELEMENTS->GADGET, array('url' => $url));
    }
}

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