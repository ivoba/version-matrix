<?php

namespace VersionMatrix\Loader;

class FileLoader implements LoaderInterface
{
    private $dir;
    private $file;

    /**
     * FromFileLoader constructor.
     * @param $dir
     */
    public function __construct($dir, $file = 'composer.lock')
    {
        $this->dir = $dir;
        $this->file = $file;
    }


    public function load()
    {
        $file = $this->dir.$this->file;

        if (!file_exists($file)) {
            throw new FileNotFoundException($file.' was not found.');
        }

        $json = file_get_contents($file);

        return json_decode($json);
    }
}
