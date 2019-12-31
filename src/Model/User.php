<?php


namespace Model;

/**
 * Class User
 * @package Model
 */
class User extends \Model\AbstractModel
{
    /**
     * @var array
     */
    protected $data;

    /**
     * User constructor.
     * @param array $data
     */
    public function __construct( array $data = [])
    {
        $this->data = $data;
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function set($key, $value)
    {
        $this->data[$key] = $value;

        return $this;
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function get($key)
    {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }
}