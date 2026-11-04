<?php

namespace View;

class ViewAdmin extends View
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

            <h1>Espace admin</h1>

        </main>
<?php
        ob_end_flush();
    }
}
