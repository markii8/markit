<?php require 'functionimage.php'; ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<a href="index.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Home</a>
<body>

    <form class="btn btn-secondary btn-lg active" action="" method="post" enctype="multipart/form-data">
        Name
        <input type ="text" name = "name" required>
        Image
        <input type="file" name = "file" required>
        <button type ="submit" name="submit" value="add">Add</button>
    </form><br>
    
    <div class="container">
        <div class="card">
            <table class="table">
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Image</td>
                </tr>
                <?php
                $users = mysqli_query($conn, "SELECT * FROM users");
                $i = 1;


                foreach($users as $user) :
                ?>
                <tr>
                    <td> <?php echo $i++; ?> </td>
                    <td> <?php echo $user["name"]; ?> </td>
                    <td style = "display: flex; align-items:center; gap:10px;"> <img src="uploads/<?php echo $user["image"] ?>" width="900"> </td>
                    <td>

                </tr>
                <?php endforeach; ?>
                
            </table>
        </div>
        </div>
    </div>
</body>
</html>