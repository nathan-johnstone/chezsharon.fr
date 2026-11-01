<?php

namespace Controller;

class ControllerUser extends Controller
{
    //ATTRIBUTS

    //CONSTRUCTEUR

    //GETTER ET SETTER

    //METHODS
    public function signin(): void
    {
        if (isset($_POST['signin'])) {

            if (empty($_POST['email']) || empty($_POST['password'])) {
                $this->getView()->setMessage('Veuillez remplir tous les champs');
                return;
            }

            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $this->getView()->setMessage('Email pas au bon format');
                return;
            }

            $email = \Tools::sanitize($_POST['email']);
            $password = \Tools::sanitize($_POST['password']);

            $data = $this->getModel()->setEmail($email)->findByEmail();

            if (!$data) {
                $this->getView()->setMessage('Email et/ou Mot de Passe incorrect');
                return;
            }

            if (!password_verify($password, $data['password'])) {
                $this->getView()->setMessage('Email et/ou Mot de Passe incorrect');
                return;
            }

            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['first_name'] = $data['first_name'];
            $_SESSION['last_name'] = $data['last_name'];
            $_SESSION['address'] = $data['address'];
            $_SESSION['post_code'] = $data['post_code'];
            $_SESSION['city'] = $data['city'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['role'] = $data['role'];
            $_SESSION['createdAt'] = $data['created_at'];

            $this->getView()->setMessage('Vous êtes bien connecté.');
        }
    }

    public function signup(): void
    {
        if (isset($_POST['signup'])) {

            if (
                empty($_POST['first_name']) ||
                empty($_POST['last_name']) ||
                empty($_POST['address']) ||
                empty($_POST['post_code']) ||
                empty($_POST['city']) ||
                empty($_POST['email']) || 
                empty($_POST['password']) || 
                empty($_POST['confirm_password'])) {
                $this->getView()->setMessage('Veuillez remplir tous les champs.');
                return;
            }

            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $this->getView()->setMessage("L'Email n'est pas au bon format.");
                return;
            }

            if ($_POST['password'] !== $_POST['confirm_password']) {
                $this->getView()->setMessage("Vos mots de passe ne correspondent pas.");
                return;
            }

            $this->getModel()
                ->setFirstName(\Tools::sanitize($_POST['first_name']))
                ->setLastName(\Tools::sanitize($_POST['last_name']))
                ->setAddress(\Tools::sanitize($_POST['address']))
                ->setPostCode(\Tools::sanitize($_POST['post_code']))
                ->setCity(\Tools::sanitize($_POST['city']))
                ->setEmail(\Tools::sanitize($_POST['email']))
                ->setPassword(\Tools::sanitize(password_hash($_POST['password'], PASSWORD_DEFAULT)));

            $data = $this->getModel()->findByEmail();
            if ($data) {
                $this->getView()->setMessage("Cet email est déjà pris.");
                return;
            }

            $this->getModel()->addUser();

            $this->getView()->setMessage("Vous avez bien été enregistré.");
        }
    }

    public function render()
    {
        if (isset($_SESSION) && !empty($_SESSION['id_user'])) {
            header('location:' . $_ENV['account']);
            exit;
        }
        $this->getView()->displayAll();
    }
}
