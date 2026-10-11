<?php

namespace View;

class ViewHome extends View
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

            <h1>Acceuil</h1>

            <h2>Second title</h2>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae porro nobis tempore accusamus labore blanditiis. Delectus, cupiditate eligendi. Eius tempora consequuntur eveniet numquam eum consequatur facilis quis incidunt, quibusdam porro quia amet odio adipisci id officia provident eligendi reprehenderit enim fuga deserunt blanditiis corrupti autem iste sequi! Qui laborum dolor esse ipsa dignissimos perferendis est consequuntur rem impedit, dolorem laboriosam similique provident nisi eaque corporis ex! Ea adipisci error veritatis possimus odit alias iure consequuntur, non aliquam reiciendis ullam quas pariatur culpa repellat voluptatem quia voluptatum, eligendi amet? Error numquam inventore rerum impedit obcaecati. Sed nostrum eos saepe iure placeat.</p>

        </main>

<?php
        ob_end_flush();
    }
}
