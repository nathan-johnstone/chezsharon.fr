<?php

namespace View;

class ViewFooter
{
    //ATTRIBUTS

    //CONSTRUCTEUR

    //GETTER ET SETTER

    //METHODS
    public function display(): void
    {
        ob_start();
?>
        <footer>

        </footer>
        </body>

        </html>
<?php
        ob_end_flush();
    }
}
