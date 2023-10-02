<?php 
    include "connection.php";
    include "./them/header.php"; 
    include "./them/header.php"; 

    if(isset($_GET['update_user'])){
        $single_user_id = $_GET['update_user'];
        session_start();
        $_SESSION['id'] = $single_user_id;
        // echo $single_user_id;
        $query = "SELECT * FROM users WHERE id=$single_user_id";
        $result = mysqli_query($connect,$query);
        if(!$result){
            echo "Error: user does not exist...";
        }
        $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['update'])){
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $type = $_POST['type'];
        session_start();
        $id = $_SESSION['id'];
        $query = "UPDATE users SET name='$name' , email='$email' , password='$password' , type='$type' WHERE id=$id";
        $result = mysqli_query($connect,$query);
        if($result){
            header("Location: /crud/index.php");
        }else{
            die("ERROR: ".mysqli_error($result));
        }
    }
    if(isset($_POST['cancel'])){
        header("Location: /crud/index.php");
    }

?>


<!-- Update User -->
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-3 col-12"></div>
        <div class="col-lg-4 col-md-6 col-12">
            <form action="update.php" method='POST' class='py-4'>
                <h1>Update User <span class="text-success"><?php print_r($row['name']); ?></span></h1>
                <lable for="username">Username:</lable>
                <input type="text" class="form-control" name='username' value=<?php print_r($row['name']); ?> >
                <lable for="email">Email:</lable>
                <input type="email" class="form-control" name='email' value=<?php print_r($row['email']); ?>>
                <lable for="password">Password:</lable>
                <input type="password" class="form-control" name='password' value=<?php print_r($row['password']); ?>>
                <lable for="type">Type:</lable>
                <select class="form-control mb-4" name='type'>
                    <option value="user">Select Type</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
                <div class="btn-group form-control border-0 p-0">
                    <button class="btn btn-dark" type='submit' name='update'>update</button>
                    <button class="btn btn-outline-dark" type='submit' name='cancel'>Cancel</button>
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-md-3 col-12"></div>
    </div>
</div>



<?php include "./them/footer.php"; ?>
