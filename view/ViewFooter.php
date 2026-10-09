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

            <menu area-label="secondaire">
                <li area-label="Mentions légales"><a href="#">Mentions légales</a></li>
                <li area-label="Politique de confidentialité"><a href="#">Politique de confidentialité</a></li>
                <li area-label="Conditions d'utilisation"><a href="#">Conditions d'utilisation</a></li>
                <li area-label="Politique d'accèssibilité"><a href="#">Politique d'accèssibilité</a></li>
            </menu>

            <hr/>

            <p>Copyright - Made by</p>

        </footer>
        </body>
        </html>
<?php
        ob_end_flush();
    }
}
