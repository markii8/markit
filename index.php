<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="styleforfront.css">

      <div class="showcase">
      <!---Navbar Top Section-->
      <div class="navbar-top">
        <!--<ul class="left">
          <li><a href="#">Firm(LOGO)</a></li>
          <li><a href="#">Number</a></li>
          <li><a href="#">Address</a></li>
        </ul>-->
        <!--<ul class="right">
          <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-google"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
        </ul>-->
      </div>

    <!---Navbar Bottom Section-->
      <div class="navbar-bottom">
        <a href="#" class="brand-left">Central Bureau of Investigation - Reports</a>
        <ul class="menu-right">
          <li><a href="#">Insights</a></li>
          <li><a href="indeximage.php">Cases/Evidence</a></li>
          <li><a href="index.php">Reports</a></li>
          <!--<li><a href="login.php">Internal Cases</a></li>-->
          <li><a href="#">Contact</a></li>
          <li><a href="#"><i class="fas fa-user me" id="user-btn"></i></a></li>
          <li><a href="frontend.php"><i class="fas fa-sign-out" id="user-btn"></i></a></li>
        </ul>
    </div>
  </head>
  <body>
  <?php
session_start();
require 'dbcon.php';

?>
  <div class="showcase">
      <!---Navbar Top Section-->
      <div class="navbar-top">
        <!--<ul class="left">
          <li><a href="#">Firm(LOGO)</a></li>
          <li><a href="#">Number</a></li>
          <li><a href="#">Address</a></li>
        </ul>-->
        <!--<ul class="right">
          <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-google"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
        </ul>-->
      </div>

    <!---Navbar Bottom Section-->
      <div class="navbar-bottom">
        <a href="#" class="brand-left">Central Bureau of Investigation - Reports</a>
        <ul class="menu-right">
          <li><a href="#">Insights</a></li>
          <li><a href="indeximage.php">Cases/Evidence</a></li>
          <li><a href="index.php">Reports</a></li>
          <!--<li><a href="login.php">Internal Cases</a></li>-->
          <li><a href="#">Contact</a></li>
          <li><a href="#"><i class="fas fa-user me" id="user-btn"></i></a></li>
          <li><a href="frontend.php"><i class="fas fa-sign-out" id="user-btn"></i></a></li>
        </ul>
    </div>
    
          <div class="container mt-4">

            <?php include('message.php');?>
            
            <div class="row">
              <div class="col-md-16">
                <div class="card">
                  <div class="card-header" >
                    <h4>Case Details
                      <a href="case-create.php"><button href="case-create.php" button type="button" id="button-add" class="btn btn-info btn-sm">New Case</button></a>   
                      <a href="export.php"><button button type="button" id="button-export" class="btn btn-success btn-sm">Export <i class = "fa-solid fa-file-export"></i></button></a>                    
                    </h4>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered table-striped">  
                      <thead>
                        <tr>
                          <th>Case</th>
                          <th>Evidence</th>
                          <th>Appendix</th>
                          <th>Item Name</th>
                          <th>Date Custody</th>
                          <th>State Conditions</th>
                          <th>Forensic Officer</th>
                          <th>Arresting Officer</th>
                          <th>Custodian</th>
                          <th>Branch Number</th>
                          <th>Additional Description</th>
                          <th>Forensic DNA Analysis Result</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $query = "SELECT * FROM ci_forms";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                              foreach($query_run as $ci_forms)
                              {
                                
                                ?>
                                <tr>
                                  <td><?= $ci_forms['id'];?></td>
                                  <td><?= $ci_forms['evidence'];?></td>
                                  <td><?= $ci_forms['appendix'];?></td>
                                  <td><?= $ci_forms['item'];?></td>
                                  <td><?= $ci_forms['dcustody'];?></td>
                                  <td><?= $ci_forms['scustody'];?></td>
                                  <td><?= $ci_forms['fofficer'];?></td>
                                  <td><?= $ci_forms['aofficer'];?></td>
                                  <td><?= $ci_forms['custodian'];?></td>
                                  <td><?= $ci_forms['branch'];?></td>
                                  <td><?= $ci_forms['description'];?></td>
                                  <td><?= $ci_forms['dnaanalysis'];?></td>     
                                  <td>
                                    <!--<a href="case-view.php.?id=<?= $ci_forms['id'] ?>" class="btn btn-info btn-sm">View</a>-->
                                    <a href="case-edit.php?id=<?= $ci_forms['id'] ?>" class="btn btn-success btn-sm">Edit </a>                            
                                    <form action="code.php" method="POST" class="d-inline">
                                      <button type = "submit" name="delete_case" value="<?=$ci_forms['id'];?>" class="btn btn-danger btn-sm" onclick="myFunction()">Delete</button>
                                      <p id="demo"></p>
                                    </form>
                                  </td>                       
                                </tr>
                                <?php

                              }

                            }
                            else
                            {
                              echo "<h5> No Record Found </h5>";                       
                            }
                        ?>
                        
                        </tbody>
                      </div>
                    </table>
                  </div>

                </div>
              </div>
          </div>
          
    <script>
  function myFunction() {
  var txt;
  if (confirm("Are you sure you want to Delete?")) {

  } 
  document.getElementById("demo").innerHTML = txt;
}
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>