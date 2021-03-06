<?php

namespace Frosh\DevelopmentHelper\Component\Generator\Definition;

class LoaderResult
{
    /**
     * @var Field[]
     */
    public $fields;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $folder;

    public function getEntityClassName(): string
    {
        return $this->name . 'Entity';
    }

    public function getCollectionClassName(): string
    {
        return $this->name . 'Collection';
    }

    public function getDefinitionClassName(): string
    {
        return $this->name . 'Definition';
    }

    public function getEntityFilePath(): string
    {
        return $this->folder . $this->getEntityClassName() . '.php';
    }

    public function getCollectionFilePath(): string
    {
        return $this->folder . $this->getCollectionClassName() . '.php';
    }

    public function getDefinitionFilePath(): string
    {
        return $this->folder . $this->getDefinitionClassName() . '.php';
    }
}
