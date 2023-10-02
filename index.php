<?php 
    include "./connection.php";
    // ============Show Users=============
        $query = "SELECT id,name,password,email,type FROM users ORDER BY id ASC";
        $result = mysqli_query($connect,$query);
        if(!$result){
            die("Error :");
        }
    // ============Create User=============

        if(isset($_POST['create_user'])){
            $name = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password = sha1($password);
            // echo $password;
            $type = $_POST['type'];
            if($name && $email && $password && $type){
                $query = "INSERT INTO users (name,email,password,type) VALUES ('$name','$email','$password','$type')";
                $result = mysqli_query($connect,$query);
                if(!$result){
                    echo "Error you can not create user ...";
                }else{
                    $name = null;
                    $email = null;
                    $password = null;
                    $type = null;
                    header("Location: /crud/index.php");
                }
            }else{
                echo "<center><h4 class='text-danger mt-3'>Please fill all field</h4></center>";
            }
        }

    // ============Delete User=============
        if(isset($_POST['delete'])){
            // echo $_POST['delete'];
            $id = $_POST['delete'];
            $query = "DELETE FROM users WHERE id=$id ";
            $result = mysqli_query($connect,$query);
            if($result){
                // echo "<script>alert('User Deleted Succesfuly...');</script>";
                header("Location: /crud/");
            }
        }

?>

<?php include "them/header.php"; ?>
    

<!-- Start Main Container -->
<div class="main">
<!-- Show Users With Buttons -->
<div class='container pt-5'>
    <caption>
        <button class="btn btn-outline-dark my-3" onclick="create.showModal()">Create User</button>
    </caption>
    <div class="table-responsive">
        <table cellspacing='0px' class='table table-striped table-hover table-bordered table-secondary'>
            <thead class='table-dark'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($rows = mysqli_fetch_assoc($result) ){
                        print_r('<tr>');
                        print_r('<td>'.$rows['id'].'</td>');
                        print_r('<td>'.$rows['name'].'</td>');
                        print_r('<td>'.$rows['email'].'</td>');
                        print_r('<td>'.$rows['password'].'</td>');
                        print_r('<td>'.$rows['type'].'</td>');
                        print_r('<td class="d-flex">');
                        print_r('<form action="update.php" method="GET">');
                            print_r("<button class='btn btn-sm btn-warning' onclick='update.showModal()' type='submit' value=".$rows['id']." name='update_user'>".'Edite'.'</button>');
                        print_r('</form>');
                        print_r('<form action="index.php" method="POST">');
                            print_r('<button id="user" class="btn btn-sm btn-danger" name="delete" value='.$rows['id'].'>'.'Delete'.'</button>');
                        print_r('</form>');
                        print_r('</td>');
                        print_r('</tr>');
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Create New User -->
<div class="container">
    <dialog id="create" class='dialog' style='width:500px;'>
        <form action="index.php" method='POST' class='py-4'>
            <h1>Create User</h1>
            <lable for="username">Username:</lable>
            <input type="text" class="form-control" name='username'>
            <lable for="email">Email:</lable>
            <input type="email" class="form-control" name='email'>
            <lable for="password">Password:</lable>
            <input type="password" class="form-control" name='password'>
            <lable for="type">Type:</lable>
            <select class="form-control mb-3" name='type'>
                <option value="user">Select Type</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <div class="btn-group form-control border-0 p-0">
                <button class="btn btn-dark" type='submit' name='create_user'>Create</button>
                <button class="btn btn-outline-dark  " type='reset' onclick='create.close()'>Close</button>
            </div>
        </form>
    </dialog>
</div>


<!-- End Main Container -->
</div>


<?php include "them/footer.php"; ?>