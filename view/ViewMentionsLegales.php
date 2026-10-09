<?php

namespace View;

class ViewMentionsLegales extends View
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

            <h1>Mentions légales</h1>

            <section class="justify">

                <h2>Identité de l’entreprise</h2>

                <h3>Dénomination sociale</h3>

                <p>TABAC PRESSE SENTIER CATHARE</p>

                <h3>Forme juridique</h3>

                <p>Entreprise Individuelle</p>

                <h3>Adresse du siège social</h3>

                <p>12 Grand Rue<br/>
                11340 Espezel<br/>
                France</p>

                <h3>Montant du capital social</h3>

                <p>Montant</p>

                <h3>Numéro Siren</h3>

                <p>Siren</p>

                <h3>Contact</h3>

                <p>+33 (0) 4 68 69 03 04<br/>
                tabacsentiercathare[at]orange.fr</p>

                <h3>Numéro d’identification à la TVA</h3>

                <p>numéro</p>

                <h2>Identité de l’éditeur</h2>

                <h3>Dénomination sociale</h3>

                <p>BricaRòsa – Web Design<br />
                    Nathan JOHNSTONE</p>

                <h3>Adresse</h3>

                <p>3 rue de Fonsorbes<br />
                    31700 Blagnac<br />
                    France</p>

                <h3>Contact</h3>

                <p>nathan[at]bricarosa.fr</p>

                <h2>Identité de l’hébergeur</h2>

                <h3>Dénomination sociale</h3>

                <p>HOSTINGER operations, UAB</p>

                <h3>Adresse</h3>

                <p>Švitrigailos str. 34,<br />
                    Vilnius 03230<br />
                    Lithuania</p>

                <h3>Contact</h3>

                <p>+37 064 503 378<br />
                    domains[at]hostinger.com</p>

            </section>

        </main>

<?php
        ob_end_flush();
    }
}
