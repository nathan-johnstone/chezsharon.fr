<?php

namespace Model;

use PDO, EXCEPTION;

class ModelHome extends Model
{
    //ATTRIBUTS

    //CONSTRUCTEUR

    //GETTER ET SETTER

    //METHODS

    public function findOpeningHours(): ?array
    {
        try {
            $req = $this->getBDD()->prepare('SELECT `day`, am_start, am_end, am_is_closed, pm_start, pm_end, pm_is_closed FROM opening_hours');

            $req->execute();

            return $req->fetchAll(PDO::FETCH_ASSOC);
        } catch (EXCEPTION $error) {
            die($error->getMessage());
        }
    }
}
