<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_case']))
{
    $case_id = mysqli_real_escape_string($con,$_POST['delete_case']);

    $query = "DELETE FROM ci_forms WHERE id='$case_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Case Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Case not Deleted Updated";
        header("Location: index.php");
        exit(0);

    }


}

if(isset($_POST['update_case']))
{
    $case_id = mysqli_real_escape_string($con, $_POST['case_id']);
    $evidence = mysqli_real_escape_string($con, $_POST['evidence']);
    $appendix = mysqli_real_escape_string($con, $_POST['appendix']);
    $itemname = mysqli_real_escape_string($con, $_POST['item']);
    $dcustody = mysqli_real_escape_string($con, $_POST['dcustody']);
    $scustody = mysqli_real_escape_string($con, $_POST['scustody']);
    $fofficer = mysqli_real_escape_string($con, $_POST['fofficer']);
    $aofficer = mysqli_real_escape_string($con, $_POST['aofficer']);
    $custodian = mysqli_real_escape_string($con, $_POST['custodian']);
    $branch = mysqli_real_escape_string($con, $_POST['branch']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $dnaanalysis = mysqli_real_escape_string($con, $_POST['dnaanalysis']);

    $query = "UPDATE ci_forms SET evidence= '$evidence', appendix = '$appendix', dcustody = '$dcustody', scustody = '$scustody', 
                fofficer = '$fofficer', aofficer = '$aofficer', custodian = '$custodian', branch = '$branch', 
                description = '$description', dnaanalysis = '$dnaanalysis' WHERE id='$case_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Case Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Case not Updated";
        header("Location: index.php");
        exit(0);
    }


}


if(isset($_POST['save_case']))
{
    $evidence = mysqli_real_escape_string($con, $_POST['evidence']);
    $appendix = mysqli_real_escape_string($con, $_POST['appendix']);
    $itemname = mysqli_real_escape_string($con, $_POST['item']);
    $dcustody = mysqli_real_escape_string($con, $_POST['dcustody']);
    $scustody = mysqli_real_escape_string($con, $_POST['scustody']);
    $fofficer = mysqli_real_escape_string($con, $_POST['fofficer']);
    $aofficer = mysqli_real_escape_string($con, $_POST['aofficer']);
    $custodian = mysqli_real_escape_string($con, $_POST['custodian']);
    $branch = mysqli_real_escape_string($con, $_POST['branch']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $dnaanalysis = mysqli_real_escape_string($con, $_POST['dnaanalysis']);

    $query = "INSERT INTO ci_forms (evidence,appendix,item,dcustody,scustody,fofficer,aofficer,custodian,branch,description,dnaanalysis) VALUES 
        ('$evidence','$appendix','$itemname','$dcustody','$scustody','$fofficer','$aofficer','$custodian','$branch','$description','$dnaanalysis')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Case Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Case not Updated";
        header("Location: index.php");
        exit(0);
    }

}


?>