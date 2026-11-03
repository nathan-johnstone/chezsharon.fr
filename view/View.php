<?php

namespace View;

class View
{
    //ATTRIBUTS
    private ViewHeader $viewHeader;
    private ViewFooter $viewFooter;
    private string $titre = "";

    //CONSTRUCTEUR
    public function __construct(string $titre, string $css = "", string $js = "", string $links = "")
    {
        $this->viewHeader = new ViewHeader($titre, $css, $js, $links);
        $this->viewFooter = new ViewFooter();
        $this->titre = $titre;
    }

    //GETTER ET SETTER
    public function getHeader(): ViewHeader
    {
        return $this->viewHeader;
    }

    public function getFooter(): ViewFooter
    {
        return $this->viewFooter;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    //METHODS
    public function display(): void
    {
        ob_start();
?>
        <main>

        </main>
<?php
        ob_end_flush();
    }

    public function displayAll(): void
    {
        $this->viewHeader->display();
        $this->display();
        $this->viewFooter->display();
    }
}
