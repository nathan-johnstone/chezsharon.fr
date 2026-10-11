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
            <h1>Compte</h1>
        </main>
<?php
        ob_end_flush();
    }
}
