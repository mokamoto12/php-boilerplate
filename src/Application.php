<?php
namespace Mokamoto12\Vanilla;

/**
 * Class Application
 * @package Mokamoto12\Vanilla
 */
class Application
{
    /**
     * @param string[] $argv
     */
    public static function main(array $argv): void
    {
        echo "Hello $argv[1]\n";
    }
}
