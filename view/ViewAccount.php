<?php

namespace View;

class ViewAccount extends View
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

            <nav aria-label="breadcrumb">
                <ul>
                    <li aria-label="Accueil"><a href="<?= $_ENV['home'] ?>">Accueil</a></li>
                    <li aria-current="page"><a><?= $this->getTitre() ?></a></li>
                </ul>
            </nav>

            <h1>Compte</h1>

        </main>
<?php
        ob_end_flush();
    }
}
