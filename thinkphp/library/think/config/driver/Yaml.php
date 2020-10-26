<?php


namespace think\config\driver;


class Yaml
{
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function parse()
    {
        if (is_file($this->config)) {
            return yaml_parse_file($this->config);
        } else {
            return yaml_parse_file($this->config);
        }
    }
}