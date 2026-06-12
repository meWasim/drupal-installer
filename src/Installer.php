<?php
namespace Alfwasim\DrupalInstaller;
use Symfony\Component\Process\Process;
class Installer
{
    public static function run(array $argv): void
    {
        $command = $argv[1] ?? null;
        if ($command !== 'new') {
            echo "Usage:\n";
            echo "drupal new project-name [version]\n";
            exit(1);
        }
        $project = $argv[2] ?? null;
        $version = $argv[3] ?? null;
        if (!$project) {
            echo "Project name is required.\n";
            exit(1);
        }
        $package = 'drupal/recommended-project';
        if ($version) {
            $package .= ':' . $version;
        }
        $process = new Process(['composer', 'create-project', $package, $project,]);
        $process->setTty(Process::isTtySupported());
        $process->run(function ($type, $output) {
            echo $output; });
    }
}