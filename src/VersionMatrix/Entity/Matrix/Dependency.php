<?php

namespace VersionMatrix\Entity\Matrix;

/**
 * Class Dependency
 * @package VersionMatrix\Entity\Matrix
 */
class Dependency
{
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $version;
    /**
     * @var string
     */
    private $url;
    /**
     * @var string
     */
    private $reference;

    /**
     * Dependency constructor.
     * @param string $title
     * @param string $version
     * @param string $url
     * @param string $reference
     */
    public function __construct($title, $version, $url, $reference)
    {
        $this->title = $title;
        $this->version = $version;
        $this->url = $url;
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

}