<?php

namespace Controller;

class ControllerHome extends Controller
{
    //ATTRIBUTS

    //CONSTRUCTEUR

    //GETTER ET SETTER

    //METHODS
    public function render()
    {
        $this
            ->getView()
            ->setOpeningHours($this->getModel()->findOpeningHours())
            ->displayAll();
    }
}
