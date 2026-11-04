<?php

namespace View;

class ViewHome extends View
{
    //ATTRIBUTS
    public array $opening_hours = [];

    //CONSTRUCTEUR

    //GETTER ET SETTER
    public function setOpeningHours(array $opening_hours): self
    {
        $this->opening_hours = $opening_hours;
        return $this;
    }

    //METHODS
    public function display(): void
    {
        ob_start();
?>

        <main>

            <h1>Accueil</h1>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos accusantium autem fuga modi. Rem explicabo vel nam mollitia distinctio accusantium voluptatem officiis deserunt cumque molestias. Ab consectetur ipsa quos omnis quae dolores facilis quia neque, placeat iste cum reiciendis. Libero eaque nulla provident mollitia doloremque, veniam pariatur earum iste accusamus.</p>

            <h2>La boutique</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, dolorem.</p>

            <a href="<?= $_ENV['shop'] . "?c=new" ?>"><h3>Nouveautés</h3></a>
            <a href="<?= $_ENV['shop'] . "?c=clothes" ?>"><h3>Vetements</h3></a>
            <a href="<?= $_ENV['shop'] . "?c=gifts" ?>"><h3>Cadeaux</h3></a>

            <h2>Nos horaires d'ouverture</h2>

            <table>
                <?php foreach ($this->opening_hours as $hours) : ?>
                <tr>
                    <th><?= $hours["day"] ?></th>
                    <td><?php if ($hours["am_is_closed"]) { ?>Fermé<?php } else { echo $hours["am_start"] . " - " . $hours["am_end"]; } ?></td>
                    <td><?php if ($hours["pm_is_closed"]) { ?>Fermé<?php } else { echo $hours["pm_start"] . " - " . $hours["pm_end"]; } ?></td>
                </tr>
                <?php endforeach; ?>
            </table>


        </main>

<?php
        ob_end_flush();
    }
}
