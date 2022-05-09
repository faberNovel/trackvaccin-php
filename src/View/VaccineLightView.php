<?php

namespace App\View;

class VaccineLightView
{
    private $id;

    private $dateTime;

    private $type;

    private $finalInjection;

    /**
     * @param $id
     * @param $dateTime
     * @param $type
     * @param $finalInjection
     */
    public function __construct($id, $dateTime, $type, $finalInjection)
    {
        $this->id = $id;
        $this->dateTime = $dateTime;
        $this->type = $type;
        $this->finalInjection = $finalInjection;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return boolean
     */
    public function getFinalInjection()
    {
        return $this->finalInjection;
    }

}