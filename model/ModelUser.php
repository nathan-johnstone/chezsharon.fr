<?php

namespace Model;

use PDO, EXCEPTION;

class ModelUser extends Model
{
    //ATTRIBUTS
    private ?int $id_user;
    private ?string $first_name;
    private ?string $last_name;
    private ?string $address;
    private ?string $post_code;
    private ?string $city;
    private ?string $email;
    private ?string $password;
    private ?string $confirm_password;
    private ?string $createdAt;
    private ?string $id_role;
    private ?string $role;

    //CONSTRUCTEUR

    //GETTER ET SETTER

    public function setFirstName(string $newFirstName): self
    {
        $this->first_name = $newFirstName;
        return $this;
    }

    public function setLastName(string $newLastName): self
    {
        $this->last_name = $newLastName;
        return $this;
    }

    public function setAddress(string $newAddress): self
    {
        $this->address = $newAddress;
        return $this;
    }

    public function setPostCode(string $newPostCode): self
    {
        $this->post_code = $newPostCode;
        return $this;
    }

    public function setCity(string $newCity): self
    {
        $this->city = $newCity;
        return $this;
    }

    public function setEmail(string $newEmail): self
    {
        $this->email = $newEmail;
        return $this;
    }

    public function setPassword(string $newPassword): self
    {
        $this->password = $newPassword;
        return $this;
    }

    //METHODS
    public function findAllUsers(): ?array
    {
        try {
            $req = $this->getBDD()->prepare('SELECT u.id_user, u.first_name, u.last_name, u.address, u.post_code, u.city, u.email, u.password, u.created_at, r.role FROM user u INNER JOIN `role` r ON r.id_role = u.id_role');

            $req->execute();

            return $req->fetchAll(PDO::FETCH_ASSOC);
        } catch (EXCEPTION $error) {
            die($error->getMessage());
        }
    }

    public function findByEmail(): array | bool | null
    {
        try {
            $req = $this->getBDD()->prepare('SELECT u.id_user, u.first_name, u.last_name, u.address, u.post_code, u.city, u.email, u.password, u.created_at, r.role FROM user u INNER JOIN role r ON r.id_role = u.id_role WHERE u.email = ?');

            $req->bindParam(1, $this->email, PDO::PARAM_STR);

            $req->execute();

            return $req->fetch(PDO::FETCH_ASSOC);

        } catch (EXCEPTION $error) {
            die($error->getMessage());
        }
    }

    public function addUser()
    {
        try {
            $req = $this->getBDD()->prepare('INSERT INTO user (first_name, last_name, address, post_code, city, email, password) VALUES (?,?,?,?,?,?,?)');

            $req->bindParam(1, $this->first_name, PDO::PARAM_STR);
            $req->bindParam(2, $this->last_name, PDO::PARAM_STR);
            $req->bindParam(3, $this->address, PDO::PARAM_STR);
            $req->bindParam(4, $this->post_code, PDO::PARAM_STR);
            $req->bindParam(5, $this->city, PDO::PARAM_STR);
            $req->bindParam(6, $this->email, PDO::PARAM_STR);
            $req->bindParam(7, $this->password, PDO::PARAM_STR);

            $req->execute();
        } catch (EXCEPTION $error) {
            die($error->getMessage());
        }
    }
}
