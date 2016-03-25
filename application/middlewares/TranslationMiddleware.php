<?php

class TranslationMiddelware {

    /**
     *
     */
    protected $controller;

    /**
     *
     */
    protected $ci;

    /**
     * TranslationMiddelware constructor.
     *
     * @param $controller
     * @param $id
     */
    public function __construct($controller, $ci)
    {
        $this->controller = $controller;
        $this->ci = $ci;
    }

    public function run()
    {

    }

}