<?php
/**
 * Created by PhpStorm.
 * User: ivo
 * Date: 18.02.16
 * Time: 16:37
 */

namespace VersionMatrix\Loader;

class GitLoader implements LoaderInterface
{
    private $repo;
    private $file;

    /**
     * @param $repo
     * @param string $file
     */
    public function __construct($repo, $file = 'composer.lock')
    {
        $this->repo = $repo;
        $this->file = $file;
    }

    public function load()
    {
        echo 'git archive --remote='.escapeshellcmd($this->repo).' HEAD '.escapeshellcmd($this->file).' | tar -xO';
        exec('git archive --remote='.escapeshellcmd($this->repo).' HEAD '.escapeshellcmd($this->file).' | tar -xO', $output);
var_dump($output);exit;
        return implode("\n", $output);
    }

}