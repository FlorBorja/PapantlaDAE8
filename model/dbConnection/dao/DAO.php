<?php

require_once 'model/dbConnection/connection.php';

interface DataAccessObject
{
    function all();
    function find($id);
    function delete($id);
    function update($entity);
    function create($entity);
}