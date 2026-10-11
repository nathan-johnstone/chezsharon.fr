<?php

namespace View;

class ViewShop extends View
{
    //ATTRIBUTS

    //CONSTRUCTEUR

    //GETTER ET SETTER

    //METHODS
    public function display(): void
    {
        ob_start();
?>
        <main>
            <h1>Boutique</h1>

            <h2><?= $_GET["c"] ?></h2>
        </main>
<?php
        ob_end_flush();
    }
}
