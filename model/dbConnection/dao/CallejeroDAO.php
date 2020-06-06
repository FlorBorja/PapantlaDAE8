<?php

require_once 'DAO.php';
require_once 'model/Callejero.php';

class CallejeroDAO implements DataAccessObject {
    
    public function create($canino) {
        $connection = DataBase::getConnection();

        $sql  = "INSERT INTO canino(calleCan,colCan,rasCan,condCan) ";
        $sql .= "VALUES (:calleCan,:colCan,:rasCan,:condCan)";

        $statement = $connection->prepare($sql);
        $statement->execute([
            "calleCan"  => $canino->getCalle(),
            "colCan" => $canino->getColonia(),
            "rasCan" => $canino->getRasgo(),
            "condCan" => $canino->getCondicion()]);
    }

    /*public function getCaninos(){
        $caninos = array();
        $connection = DataBase::getConnection();
        $sql = "CALL readAllCaninos ()";
        $statement = $connection->prepare($sql);   
        /*$resultado->bindParam(1,$id, PDO::PARAM_STR);
        
        try{
            $statement->execute();
            foreach($statement as $row ){
                $caninos[] = $this->addCanino($row);
            }
            return $caninos;
        }  catch(PDOException $e){
            print "¡Error!: " . $e->getMessage() . "<br/>";

        }finally{
            $statement=null;
            $connection=null;
        }
        
    }

    public function addCanino($row){
        $id=$row["id"];
        $calleCan=$row["calleCan"];
        $colCan=$row["colCan"];
        $rasCan=$row["rasCan"];
        $condCan=$row["condCan"];
        
        return new Callejero($id, $calleCan, $colCan, $rasCan, $condCan);
    }*/


    public function all() {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM canino");
        $statement->execute();

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);

        $caninos = [];
        foreach ($result_set as $canino) {
            $new_callejero = new Callejero(
                $canino['calleCan'],
                $canino['colCan'],
                $canino['rasCan'],
                $canino['condCan']
            );
            $new_callejero->setID($canino['id']);
            array_push($caninos, $new_callejero);
        }

        return $caninos;
    }

    public function find($id) {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM canino WHERE id=:id");
        $statement->execute(["id" => $id]);

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);

        $caninos = [];
        foreach ($result_set as $canino) {
            $new_callejero = new Callejero(
                $canino['id'],
                $canino['calleCan'],
                $canino['colCan'],
                $canino['rasCan'],
                $canino['condCan']
            );
            $new_callejero->setID($canino['id']);
            array_push($caninos, $new_callejero);
        }

        return $caninos;
    }

    /*public function update($canino) {
        $connection = DataBase::getConnection();

        $sql  = "UPDATE canino ";
        $sql .= "SET calleCan=:calleCan, colCan=:colCan, rasCan=:rasCan, condCan=:condCan";
        $sql .= "WHERE id=:id";

        $statement = $connection->prepare($sql);
        $statement->execute([
            "id" => $canino->getID(),
            "calleCan" => $canino->getCalle(),
            "colCan" => $canino->getColonia(),
            "rasCan" => $canino->getRasgo(),
            "condCan" => $canino->getCondicion()
        ]);
    }
*/
    public function delete($canino) {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("DELETE FROM canino WHERE id=:id");
        $statement->execute([
            "id" => $canino->getID()
        ]);
    }
}