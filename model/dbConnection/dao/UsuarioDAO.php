<?php

require_once 'LoginDAO.php';
require_once 'model/Usuario.php';

class UsuarioDAO implements DataAccessObject
{
    public function create($usser)
    {
        $connection = DataBase::getConnection();

        $sql  = "INSERT INTO usuario(nomUs,passUs) ";
        $sql .= "VALUES (:nomUs,:passUs)";

        $statement = $connection->prepare($sql);
        $statement->execute([
            "nomUs"  => $usser->getName(),
            "passUs" => $usser->getPassword()
        ]);
    }

    public function find($idUs)
    {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM usuario WHERE idUs=:idUs");
        $statement->execute(["idUs" => $idUs]);

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);

        if(!$result_set)
            return null;
        
        $usser = new Usuario(
            $result_set[0]['nomUs'],
            $result_set[0]['passUs']
        );
        $usser->setID($result_set[0]['idUs']);
        return $usser;
    }

    public function findNomUs($nomUs) {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM usuario WHERE nomUs=:nomUs");
        $statement->execute(["nomUs" => $nomUs]);

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);

        if(!$result_set)
            return null;
        
        $usser = new Usuario(
            $result_set[0]['nomUs'],
            $result_set[0]['passUs']
        );
        $usser->setID($result_set[0]['idUs']);

        return $usser;
    }
}