<?php

namespace Terranet\Presentable;

abstract class Presenter
{
    /**
     * @var mixed
     */
    protected $presentable;

    /**
     * @param $entity
     */
    function __construct(PresentableInterface $entity)
    {
        $this->presentable = $entity;
    }

    /**
     * Allow for property-style retrieval
     *
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        if (method_exists($this, $property)) {
            return $this->{$property}();
        }

        return $this->presentable->{$property};
    }
}