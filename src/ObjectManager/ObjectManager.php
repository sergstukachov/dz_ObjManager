<?php

namespace ObjectManager;

use Factory\FactoryInterface;

class ObjectManager implements ObjectManagerInterface
{
    /**
     * @var array
     */
    private $sharedInstances;

    /**
     * @var FactoryInterface
     */
    private $factory;

    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;

        $this->sharedInstances = [];
        $this->sharedInstances[ObjectManager::class] = $this;
    }

    public function get(string $type, array $data = [])
    {
        if (empty($this->sharedInstances[$type])) {
            $this->sharedInstances[$type] = $this->factory->create($type, $data);
        }

        return $this->sharedInstances[$type];
    }

    public function create(string $type, array $data = [])
    {
        return $this->factory->create($type, $data);
    }

    public static function getInstance()
    {
        $factory = new \Factory\Factory();
        return new self($factory);
    }
}