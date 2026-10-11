<?php

namespace View;

class ViewSignup extends View
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
            <h1>Signup</h1>

            <form action="" method="post">
                <label for="last_name">Nom :</label>
                <input type="text" name="last_name" id="last_name" required>

                <label for="first_name">Prénom :</label>
                <input type="text" name="first_name" id="first_name" required>

                <label for="address">Address :</label>
                <input type="text" name="address" id="address" required>

                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required>

                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" required>

                <label for="confirm_password">Confirmer le mot de passe :</label>
                <input type="password" name="confirm_password" id="confirm_password" required>

                <input type="submit" name="signup" value="S'inscrire">
                <p>Déja un compte ? <a href="<?= $_ENV["signin"] ?>">Se connecter</a></p>

            </form>
        </main>
<?php
        ob_end_flush();
    }
}