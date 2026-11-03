<?php

namespace View;

class ViewBreadcrumb
{
    //ATTRIBUTS
    private string $title;

    //CONSTRUCTOR
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    //GETTER ET SETTER

    //METHOD
    public function display()
    {
        ob_start();
?>
        <nav aria-label="breadcrumb">
            <ul>
                <li aria-label="Accueil"><a href="<?= $_ENV['home'] ?>">Accueil</a></li>
                <li aria-current="page"><a><?= $this->title ?></a></li>
            </ul>
        </nav>
<?php
        ob_end_flush();
    }
}
