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

            <h1>Espace personnel</h1>

            <h2>Mes informations personnelles</h2>

            <table>
                <tr>
                    <th>Prénom</th>
                    <td><?= $_SESSION['first_name'] ?></td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td><?= $_SESSION['last_name'] ?></td>
                </tr>
                <tr>
                    <th>Adresse</th>
                    <td><?= $_SESSION['address'] ?></td>
                </tr>
                <tr>
                    <th>Code postal</th>
                    <td><?= $_SESSION['post_code'] ?></td>
                </tr>
                <tr>
                    <th>Ville</th>
                    <td><?= $_SESSION['city'] ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?= $_SESSION['email'] ?></td>
                </tr>
            </table>

            <h2>Mes produits favoris</h2>

            <p>A construire</p>

        </main>
<?php
        ob_end_flush();
    }
}
