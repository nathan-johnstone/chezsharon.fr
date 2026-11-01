<?php

namespace View;

class ViewSignin extends View
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
            <h1>Signin</h1>

            <form action="" method="post">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required>

                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" required>

                <input type="submit" name="signin" value="Se connecter">
            </form>
            <p>Pas encore de compte ? <a href="<?= $_ENV["signup"] ?>">Créer un compte</a></p>

            <p><?= $this->message ?></p>
        </main>
<?php
        ob_end_flush();
    }
}