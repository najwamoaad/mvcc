<?php

class UserController{
    private $model;

public function __construct($model)
{
    

    $this->model=$model;


}

public function index()
{
    $users = $this->model->select();
    include 'app\views\user_view.php';
     
}
public function addUser() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $data = [
            'email' =>$email ,
            'password' => $password ,
        ];

        if ($this->model->addUser($data)) {
            echo "User added successfully!";
        } else {
            echo "Failed to add user.";
        }
    }
}

public function editUser($id)
{
    $users = $this->model->selectById($id);
    include __DIR__ .'/../views/edit.php';
     
}
/* public function updateUser($id) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $data = [
            'email' =>$email ,
            'password' => $password ,
        ];

        if ($this->model->updateUser($id, $data)) {
            echo "User edit successfully!";
        } else {
            echo "Failed to add user.";
        }
    }
} */

public function updateUser($id) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rule = $_POST['rule'];
        $data = [
            'email' => $email,
            'password' => $password,
            'rule' => $rule,
        ];

        if ($this->model->updateUser($id, $data)) {
            echo "User updated successfully!";
            header('Location:' . BASE_PATH);
        } else {
            echo "Failed to update user.";
        }
    } else {
        $users = $this->model->getUserById($id);
        include __DIR__.'/../views/edit.php';
    }
}
 
    public function deleteUser($id) {
        if ($this->model->deleteUser($id)) {
            echo "User deleted successfully!";
            header('Location:' . BASE_PATH);
        } else {
            echo "Failed to delete user.";
        }
    }
}

?>