<?php

namespace Nea;

class ChromeLogger
{
    /**
     *
     * @var ChromeLogger
     */
    private static $instance;

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function _init()
    {
        require_once PKGPATH . 'chromelogger' . DS . 'vendor' . DS . 'chromephp' . DS . 'ChromePhp.php';
    }

    private function __construct()
    {
    }

    public static function Warn($var)
    {
        \ChromePhp::Warn($var);
    }

    public static function Log($var)
    {
        \ChromePhp::Log($var);
    }
}
