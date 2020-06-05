<?php

require_once 'DAO.php';
require_once 'model/Institucion.php';

class institucionDAO implements DataAccessObject {
    
    public function create($institucion) {
        $connection = DataBase::getConnection();

        $sql  = "INSERT INTO institucion(nomInst,dirInst,telInst,cp,nomRep,cargo,tipoInst,ideTrib) ";
        $sql .= "VALUES (:nomInst,:dirInst,:telInst,:cp,:nomRep,:cargo,:tipoInst,:ideTrib)";

        $statement = $connection->prepare($sql);
        $statement->execute([
            "nomInst"  => $institucion->getNomInst(),
            "dirInst" => $institucion->getDirInst(),
            "telInst" => $institucion->getTelInst(),
            "cp" => $institucion->getCP(),
            "nomRep" => $institucion->getNomRep(),
            "cargo" => $institucion->getCargo(),
            "tipoInst" => $institucion->getTipoInst(),
            "ideTrib" => $institucion->getIdeTrib()
        ]);
    }

    /*public function all() {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM canino");
        $statement->execute();

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);

        $institucions = [];
        foreach ($result_set as $institucion) {
            $new_callejero = new Callejero(
                $institucion['nomInst'],
                $institucion['dirInst'],
                $institucion['telInst'],
                $institucion['cp']
            );
            $new_callejero->setID($institucion['id']);
            array_push($institucions, $new_callejero);
        }

        return $institucions;
    }*/

    public function find($id) {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM canino WHERE id=:id");
        $statement->execute(["id" => $id]);

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);

        $institucions = [];
        foreach ($result_set as $institucion) {
            $new_callejero = new Callejero(
                $institucion['nomInst'],
                $institucion['dirInst'],
                $institucion['telInst'],
                $institucion['cp']
            );
            $new_callejero->setID($institucion['id']);
            array_push($institucions, $new_callejero);
        }

        return $institucions;
    }
    /*
    public function update($institucion) {
        $connection = DataBase::getConnection();

        $sql  = "UPDATE canino ";
        $sql .= "SET nomInst=:nomInst, dirInst=:dirInst, telInst=:telInst, cp=:cp";
        $sql .= "WHERE id=:id";

        $statement = $connection->prepare($sql);
        $statement->execute([
            "id" => $institucion->getID(),
            "nomInst" => $institucion->getnomInst(),
            "dirInst" => $institucion->getdirInst(),
            "telInst" => $institucion->gettelInst(),
            "cp" => $institucion->getcp()
        ]);
    }

    public function delete($institucion) {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("DELETE FROM canino WHERE id=:id");
        $statement->execute([
            "id" => $institucion->getID()
        ]);
    }
    */
}