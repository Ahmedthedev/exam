<?php

namespace Model;

class StringFormatter
{
    /** @var string */
    private $str;

    /**
     * User constructor.
     *
     * @param $str
     */
    public function __construct($str)
    {
        $this->str = $str; 
    }

    /**
     * @return string
     */
    public function concat($str2)
    {
        return $this->str.$str2;
    }

    /**
     * @return string
     */
    public function camelCase($str2)
    {
        $str2 = ucfirst($str2);
        return $this->str.$str2;
    }

    /**
     * @return string
     */
    public function prefix($str2,$param=False)
    {
        if($param)
            return $str2.ucfirst($this->str);
        return $str2.$this->str;
    }   

    /**
     * @return string
     */
    public function suffix($str2,$param=False)
    {
        if($param)
            return $this->concat(ucfirst($str2));
        return $this->concat($str2);
    } 


}