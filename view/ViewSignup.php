<?php

namespace View;

class ViewSignup extends View
{
    //ATTRIBUTS
    private string $message = '';

    //CONSTRUCTEUR

    //GETTER ET SETTER
    public function setMessage(string $newMessage): self
    {
        $this->message = $newMessage;
        return $this;
    }

    //METHODS
    public function display(): void
    {
        ob_start();
?>
        <main>
            <h1>Signup</h1>

            <form action="" method="post">

                <label for="first_name">Prénom :</label>
                <input type="text" name="first_name" id="first_name" required>

                <label for="last_name">Nom :</label>
                <input type="text" name="last_name" id="last_name" required>

                <label for="address">Adresse :</label>
                <input type="text" name="address" id="address" required>

                <label for="post_code">Code postal :</label>
                <input type="text" name="post_code" id="post_code" required>

                <label for="city">Ville :</label>
                <input type="text" name="city" id="city" required>

                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required>

                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" required>

                <label for="confirm_password">Confirmer le mot de passe :</label>
                <input type="password" name="confirm_password" id="confirm_password" required>

                <input type="submit" name="signup" value="S'inscrire">
                <p>Déja un compte ? <a href="<?= $_ENV["signin"] ?>">Se connecter</a></p>

                <p><?= $this->message ?></p>

            </form>
        </main>
<?php
        ob_end_flush();
    }
}