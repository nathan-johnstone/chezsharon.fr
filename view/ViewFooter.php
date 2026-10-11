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

            <hr/>

            <menu area-label="secondaire">
                <li area-label="Mentions légales"><a href="<?= $_ENV['mentionsLegales'] ?>">Mentions légales</a></li>
                <li area-label="Politique de confidentialité"><a href="<?= $_ENV['confidentialite'] ?>">Politique de confidentialité</a></li>
                <li area-label="Conditions d'utilisation"><a href="<?= $_ENV['utilisation'] ?>">Conditions d'utilisation</a></li>
                <li area-label="Politique d'accèssibilité"><a href="<?= $_ENV['accessibilite'] ?>">Déclaration d'accessibilité</a></li>
            </menu>

            <hr/>

            <p>© 2026 Chez Sharon - Made with ♡ by <a href="https://bricarosa.fr" target="_blank">Nathan</a></p>

        </footer>
        </body>
        </html>
<?php
        ob_end_flush();
    }
}
