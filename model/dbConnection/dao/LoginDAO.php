<?php
require_once 'DAO.php';

interface LoginDAO extends DataAccessObject {
    function findId($IdUs);
}