<?php
class UserRepository extends Repository
{
    function login($login,$pass)
    {
        $sql = 'SELECT id FROM user 
                WHERE login=:login
                AND pass=:pass';

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':login',$login);
        $stmt->bindValue(':pass',$pass);
        $stmt->execute();
        
        $id_user = 0;
        if($stmt->rowCount()){
            $id_user = $stmt->fetch();
            $id_user = $id_user["id"];
        }
        return $id_user;
    }

    //CREATE
    public function create(User $user)
    {
        $sql = "INSERT INTO user 
                SET login = :login,
                    pass=:pass";
        
        $params = [
            "login"=>$user->getLogin(),
            "pass"=>$user->getPass()
        ];

        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($params);
        
        $id = false;
        if($result){
            $id = $this->pdo->lastInsertId();
            $event->setId($id);
        }
        return (bool) $id;
    }

    //READ
    public function getById($id)
    {
        
    }

    //UPDATE
    public function update($id)
    {
        
    }
    
    //DELETE
    public function delete($id)
    {
        
    }

    //READ ALL
    public function getAll()
    {
        
    }
}