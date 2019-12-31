<?php


namespace Test;


class TestDTO
{
    private $data;

    public function __construct(\SplFixedArray $fixarr, array $data = [])
    {
        $this->data = $data;
    }

    public function set($key, $value)
    {
        $this->data[$key] = $value;

        return $this;
    }

    public function get($key)
    {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }
}
