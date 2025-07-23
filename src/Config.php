<?php

namespace ManuFuhrmann\Upload;

class Config
{
    protected $config;

    public function __construct()
    {
        $this->config = array(
            'db_host' => 'localhost',
            'db_username' => 'root',
            'db_password' => 'password',
            'db_name' => 'my_database'
        );
    }

    public function get($key)
    {
        return isset($this->config[$key]) ? $this->config[$key] : null;
    }

    public function set($key, $value)
    {
        $this->config[$key] = $value;
    }
}
