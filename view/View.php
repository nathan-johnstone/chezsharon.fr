<?php

namespace View;

class View
{
    //ATTRIBUTS
    private ViewHeader $viewHeader;
    private ViewBreadcrumb $viewBreadcrumb;
    private ViewFooter $viewFooter;
    private string $title;

    //CONSTRUCTEUR
    public function __construct(string $title, string $links = "")
    {
        $this->viewHeader = new ViewHeader($title, $links);
        $this->viewBreadcrumb = new ViewBreadcrumb($title);
        $this->viewFooter = new ViewFooter();
        $this->title = $title;
    }

    //GETTER ET SETTER
    public function getHeader(): ViewHeader
    {
        return $this->viewHeader;
    }

    public function getBreadcrumb(): ViewBreadcrumb
    {
        return $this->viewBreadcrumb;
    }

    public function getFooter(): ViewFooter
    {
        return $this->viewFooter;
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
        if($this->title !== "Accueil") {
            $this->viewBreadcrumb->display();
        }
        $this->display();
        $this->viewFooter->display();
    }
}
