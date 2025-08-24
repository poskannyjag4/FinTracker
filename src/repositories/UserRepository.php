<?php

namespace App\repositories;

use App\AlreadyExistExecption;
use App\User;
use Exception;
use PDO;
use PDOException;

class UserRepository{
    public function __construct(private \PDO $conn) {}

    public function getByEmail(string $email): ?User  {
        $stmtUser = $this->conn->prepare('select * from User where email = :email');
        $stmtUser->setFetchMode(PDO::FETCH_CLASS, User::class);
        $stmtUser->bindValue(':email', $email);
        $stmtUser->execute();
        
        $user = $stmtUser->fetch();
        if($user){
            return $user;
        }
        else{
            return null;
        }
    }


    public function newUser(string $name, string $email, string $password) : int {
        try{

            $stmt = $this->conn->prepare('insert into User (name, email, password) values (?, ?, ?)');
            $stmt->execute(array($name, $email, $password));
            return $this->conn->lastInsertId();

        }
        catch(PDOException $e){

            if($e->getCode() == '23000'){
                throw new AlreadyExistExecption('Пользователь с таким email уже существует');
            }
            
            $log = "[" . date("Y-m-d H:i:s") . "] " . 
                  "Unhandled Exception: " . $e->getMessage() .
                  " in " . $e->getFile() . " on line " . $e->getLine() . "\n";
            error_log($log, 3, ROOT . '/logs/error.log');

            throw new Exception('Произошла ошибка при создании пользователя');
              
        }
    }

}