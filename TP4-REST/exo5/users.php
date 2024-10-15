<?php
    require_once("init_pdo.php");

    function get_users($db){
        $sql = "SELECT * FROM USERS";
        $exe = $db->query($sql);
        $res = $exe->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }

    function create_users($db, $name, $email){
        $sql = "INSERT INTO `users` (`name`, `email`) VALUES (:name, :mail)";

        $requete = $db->prepare($sql);
        $requete->execute([
            ':name' => $name,
            ':mail' => $email
        ]);

        $user_id = $db->lastInsertId();
        return ['id' => $user_id, 'name' => $name, 'email' => $email];

    }

    function delete_users($db, $id){
        $sql = "DELETE FROM users WHERE id = :id";

        $requete = $db->prepare($sql);
        $requete->execute([
            ':id' => $id
        ]);

        return true;
    }

    function update_users($db, $id, $name, $email){
        $sql = "UPDATE `users` SET `name` = :name, `email` = :mail WHERE `id` = :id";

        $requete = $db->prepare($sql);
        $requete->execute([
            ':id' => $id,
            ':name' => $name,
            ':mail' => $email
        ]);

        return['id' => $id, 'name' => $name, 'email' => $email];
    }

    function setHeaders() {
        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Origin
        header("Access-Control-Allow-Origin: *");
        header('Content-type: application/json; charset=utf-8');
    }

    // ==============
    // Responses
    // ==============

    switch($_SERVER["REQUEST_METHOD"]) {
        case 'GET':
            $result = get_users($pdo);
            setHeaders();
            exit(json_encode($result));

        case 'POST':
            $data = json_decode(file_get_contents("php://input"));
            if(isset($data->name) && isset($data->email)){
                $name = $data->name;
                $email = $data->email;

                $new_users = create_users($pdo, $name, $email);

                if($new_users){
                    setHeaders();
                    http_response_code(201); 
                    exit(json_encode($new_users));
                } else {
                    http_response_code(500); 
                    exit(json_encode(['error' => 'Failed to create user']));
                }

            } else {
                http_response_code(400); 
                exit(json_encode(['error' => 'Invalid input']));
            }

        case 'DELETE':
            $data = json_decode(file_get_contents("php://input"));
            if(isset($data->id)){
                $id = $data->id;

                if(delete_users($pdo, $id)){
                    $result = get_users($pdo);
                    setHeaders();
                    http_response_code(201);
                    exit(json_encode($result));
                }
                else{
                    http_response_code(500); 
                    exit(json_encode(['error' => 'Failed to delete user']));
                }
            } else {
            http_response_code(400); 
            exit(json_encode(['error' => 'Invalid input']));
            }

        case 'PUT':
            $data = json_decode(file_get_contents("php://input"));
            if(isset($data->id) && isset($data->name) && isset($data->email)){
                $id = $data->id;
                $name = $data->name;
                $email = $data->email;

                $new_users = update_users($pdo, $id, $name, $email);
                if($new_users){
                    setHeaders();
                    http_response_code(201); 
                    exit(json_encode($new_users));
                } else {
                    http_response_code(500); 
                    exit(json_encode(['error' => 'Failed to update user']));
                }
            }
            else{
                http_response_code(400); 
                exit(json_encode(['error' => 'Invalid input']));
            }


    }
