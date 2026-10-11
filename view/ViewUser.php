<?php

namespace View;

class ViewUser extends View
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
            <h1>User</h1>
        </main>
<?php
        ob_end_flush();
    }
}
