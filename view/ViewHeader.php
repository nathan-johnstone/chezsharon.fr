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
                <nav aria-label="en-tête">
                    <div></div>
                    <a aria-label="Accueil" href="<?= $_ENV['home'] ?>">
                        <img src="/img/logo-transparant.svg" alt="Logo Chez Sharon" height="100">
                    </a>
                    <div>
                        <a aria-label="Compte utilisateur" href="<?= $_ENV['account'] ?> " title="<?php if (isset($_SESSION['id_user'])) { ?>Mon compte<?php } else { ?>Se connecter / S'inscrire <?php } ?>">
                            <svg xmlns="http://www.w3.org/2000/svg"><path d="M5.85,17.1q1.27-0.98 2.85-1.54T12,15t3.3,0.56t2.85,1.54q0.88-1.03 1.36-2.33T20,12q0-3.33-2.34-5.66T12,4Q8.68,4 6.34,6.34T4,12q0,1.47 0.49,2.78q0.49,1.3 1.36,2.33Zm3.66-5.11Q8.5,10.98 8.5,9.5q0-1.48 1.01-2.49T12,6t2.49,1.01T15.5,9.5t-1.01,2.49T12,13q-1.47,0-2.49-1.01ZM12,22q-2.07,0-3.9-0.79q-1.82-0.79-3.17-2.14Q3.58,17.73 2.79,15.9T2,12Q2,9.92 2.79,8.1Q3.58,6.27 4.93,4.93Q6.28,3.57 8.1,2.79Q9.93,2 12,2t3.9,0.79t3.17,2.14q1.35,1.35 2.14,3.17Q22,9.92 22,12t-0.79,3.9t-2.14,3.17q-1.35,1.35-3.17,2.14T12,22Zm2.5-2.39q1.18-0.39 2.15-1.11q-0.98-0.73-2.15-1.11T12,17T9.5,17.39Q8.33,17.77 7.35,18.5q0.98,0.73 2.15,1.11T12,20t2.5-0.39Zm-1.42-9.04Q13.5,10.15 13.5,9.5T13.08,8.42T12,8T10.93,8.42T10.5,9.5t0.43,1.07T12,11t1.08-0.43ZM12,9.5Zm0,9Z"/></svg>
                        </a>

                        <?php if (isset($_SESSION['id_user'])) { ?>
                        <a aria-label="Se déconnecter" href="<?= $_ENV['logout'] ?>" title="Se déconnecter">
                            <svg xmlns="http://www.w3.org/2000/svg""><path d="M5,21q-0.83,0-1.41-0.59T3,19V5Q3,4.17 3.59,3.59T5,3h7V5H5V19h7v2H5Zm11-4l-1.38-1.45L17.18,13H9V11h8.18L14.63,8.45L16,7l5,5l-5,5Z"/></svg>
                        </a>
                        <?php } ?>
                        
                    </div>
                </nav>
                <menu role="navigation" aria-label="principale">
                    <li><a href="<?= $_ENV['shop']?> ">Boutique</a></li>
                    <li><a href="<?= $_ENV['shop'] . "?c=new" ?> ">Nouveautés</a></li>
                    <li><a href="<?= $_ENV['shop'] . "?c=clothes" ?>">Vêtements</a></li>
                    <li><a href="<?= $_ENV['shop'] . "?c=gifts" ?>">Cadeaux</a></li>
                </menu>
            </header>
    <?php
        ob_end_flush();
    }
}
