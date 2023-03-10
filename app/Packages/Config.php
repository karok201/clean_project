<?php

namespace App\Packages;

final class Config extends Singleton
{
    /**
     * @var array
     */
    private $config;

    protected function __construct()
    {
        parent::__construct();
        $this->config = require(dirname(__DIR__) . '/../config/config.php');
    }

    /**
     * @param string $path
     * @return array|mixed
     */
    public function get(string $path): mixed
    {
        $keys = explode('.', $path);
        $config = $this->config;

        foreach ($keys as $key) {
            if (isset($config[$key])) {
                return $config[$key];
            }
        }

        return $config;
    }
}
