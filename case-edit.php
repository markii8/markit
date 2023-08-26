<?php
session_start();
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styleforfront.css">

    <title>Bootstrap demo</title>
  </head>
  <body>
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
        <a href="#" class="brand-left">Central Bureau of Investigation - Case Update</a>
        <ul class="menu-right">
          <li><a href="#">Insights</a></li>
          <li><a href="#">Cases/Evidence</a></li>
          <li><a href="index.php">Reports</a></li>
          <!--<li><a href="login.php">Internal Cases</a></li>-->
          <li><a href="#">Contact</a></li>
          <li><a href="#"><i class="fas fa-user me" id="user-btn"></i></a></li>
          <li><a href="frontend.php"><i class="fas fa-sign-out" id="user-btn"></i></a></li>
        </ul>
    </div>
    <div class="container">
        <?php include('message.php');?>

        <div class="row" style = "font-family:'Courier New', Courier, monospace">
            <div class="col-md-12">
                <div class="table">
                    <div class="card-header">
                        <h4>Case Update</h4>
                        <div class="card-body">

                            <?php
                            if(isset($_GET['id']))

                            {
                                $case_id = mysqli_real_escape_string($con,$_GET['id']);
                                
                                $query ="SELECT * FROM ci_forms WHERE id='$case_id'";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    $ci_forms = mysqli_fetch_array($query_run);
                                    ?>

                                    <form action="code.php" method="POST">
                                        <input type="hidden" name="case_id" value="<?= $ci_forms['id'];?>">
                                        <div class="mb-3">
                                            <label>Evidence</label>
                                            <input type="text" name="evidence" value="<?=$ci_forms['evidence'];?>" class="form-control" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label>Appendix</label>
                                            <input type="text" name="appendix" value="<?=$ci_forms['appendix'];?>" class="form-control" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label>Item Name</label>
                                            <input type="text" name="item" value="<?=$ci_forms['appendix'];?>" class="form-control" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label>Date Custody</label>
                                            <input class="form-control" name="dcustody" value="<?=$ci_forms['dcustody'];?>" placeholder="MM/DD/YYYY" class="form-control" required/> 
                                        </div> 
                                        <div class="mb-3">
                                            <label>State Conditions</label>
                                            <input type="text" name="scustody" value="<?=$ci_forms['scustody'];?>" class="form-control" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label>Forensic Officer</label>
                                            <input type="text" name="fofficer" value="<?=$ci_forms['fofficer'];?>" class="form-control" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label>Arresting Officer</label>
                                            <input type="text" name="aofficer" value="<?=$ci_forms['aofficer'];?>" class="form-control" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label>Custodian</label>
                                            <input type="text" name="custodian" value="<?=$ci_forms['custodian'];?>" class="form-control" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label>Branch Number</label>
                                            <input type="text" name="branch" value="<?=$ci_forms['branch'];?>" class="form-control" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label>Additional Description: [kindly be discreet and certain]</label>
                                            <input type="text" name="description" value="<?=$ci_forms['description'];?>" class="form-control"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Forensic DNA Analysis Result</label>
                                            <input class="form-control" name="dnaanalysis" value="<?=$ci_forms['dnaanalysis'];?>" type="file" id="formFile"/>
                                        </div>
                                        <div class="mb-3">                                        
                                        <button type="submit" name="update_case" class="btn btn-primary">Save </button>
                                        <a href="index.php" class="btn btn-danger">Back</a>                           
                                        </div>
                                    </form>
                                    <?php
                                
                            }
                            else
                            {
                                echo "<h4>norecords</h4";
                            }
                            
                            
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

            <script>
                $(document).ready(function(){
                    var date_input=$('input[name="dcustody"]');
                    date_input.datepicker({
                        format: 'mm/dd/yyyy',
                        todayHighlight: true,
                        autoclose: true,
                    })
                })
            </script>
  </body>
</html>
