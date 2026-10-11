<?php

namespace View;

class ViewHeader
{
    //ATTRIBUTS
    private ?string $title;
    private ?string $css;
    private ?string $js;
    private ?string $links;

    //CONSTRUCTOR
    public function __construct(string $title, string $css, string $js, string $links)
    {
        $this->title = $title;
        $this->css = $css;
        $this->js = $js;
        $this->links = $links;
    }

    //GETTER ET SETTER

    //METHOD
    public function display()
    {
        ob_start();
?>
        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?= $this->title ?> - Chez Sharon</title>
            <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
            <link rel="icon" href="/favicon.ico">
            <?php if ($this->links) {
                echo $this->links;
            } ?>
            <link rel="stylesheet" href="/css/main.css">
            <?php if ($this->css) { ?>
                <link rel="stylesheet" href="<?= $this->css ?>">
            <?php } ?>
            <script src="/js/main.js" defer></script>
            <?php if ($this->js) { ?>
                <script src="<?= $this->js ?>" defer></script>
            <?php } ?>
        </head>

        <body>
            <header>

                <a href="<?= $_ENV['home'] ?>">
                    <img src="/img/logo-transparant.svg" alt="Logo Chez Sharon" height="100">
                </a>

                <a href="<?= $_ENV['user'] ?> ">user</a>

                <a href="<?= $_ENV['logout'] ?>">logout</a>

                <hr/>

                <a href="<?= $_ENV['shop'] . "?c=new" ?> ">Nouveautés</a>

                <a href="<?= $_ENV['shop'] . "?c=clothes" ?>">Vêtements</a>

                <a href="<?= $_ENV['shop'] . "?c=gifts" ?>">Cadeaux</a>

            </header>
    <?php
        ob_end_flush();
    }
}
