<?php
include 'db.php';

// Projects insert

if (isset($_POST['add_project'])) {
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
  $project_name = $_POST['project_name'];
  $customer_name = $_POST['customer_name'];
  $customer_phone = $_POST['customer_phone'];
  $customer_address = $_POST['customer_address'];
  $project_amount = $_POST['project_amount'];
  $total_pay = $_POST['total_pay'];
  $status = 0;


  $sql = "INSERT INTO add_project (start_date,end_date,project_name,customer_name,customer_phone,customer_address,project_amount,total_pay,status) VALUES ('$start_date','$end_date','$project_name','$customer_name','$customer_phone','$customer_address','$project_amount','$total_pay','$status')";

  if ( mysqli_query($conn,$sql)) {
  	$mess= "<p class='bg-success p-2'>Your Information Saved!</p>"; 

  }else{
  	$mess= "<p class='bg-danger p-2'>Sorry, There is a problem</p>"; 
  }
}

// Income insert

if (isset($_POST['income_submit'])) {
  $income_date     = $_POST['income_date'];
  $income_amount   = $_POST['income_amount'];
  $customer_nam   = $_POST['customer_nam'];
  $customer_number = $_POST['customer_number'];
  

  $sql = "INSERT INTO  add_income(income_date,income_amount,customer_nam,customer_number) VALUES('$income_date','$income_amount','$customer_nam','$customer_number')";

  if ( mysqli_query($conn,$sql)) {
  	$mess= "<p class='bg-success p-2'>Your Information is Saved!</p>";  
  }else{
  	$mess= "<p class='bg-danger p-2'>Sorry! Information not Saved!</p>"; 
  }
}

// Expense insert

if (isset($_POST['expense_submit'])) {
  
  $expense_date     = $_POST['expense_date'];
  $expense_cat      = $_POST['expense_cat'];
  $reciever_name    = $_POST['reciever_name'];
  $reciever_number  = $_POST['reciever_number'];
  $expense_amount   = $_POST['expense_amount'];
  

  $sql = "INSERT INTO add_expense(expense_date,expense_cat,reciever_name,reciever_number,expense_amount) VALUES('$expense_date','$expense_cat','$reciever_name','$reciever_number','$expense_amount')";

  if ( mysqli_query($conn,$sql)) {
    $mess= "<p class='bg-success p-2'>Your Information is Saved!</p>";  
  }else{
    $mess= "<p class='bg-danger p-2'>Sorry! Information not Saved!</p>"; 
  }
}


// Expense categorie insert

if (isset($_POST['cat_submit'])) {
  $cat_name     = $_POST['cat_name'];
  

  $sql = "INSERT INTO expense_cat(cat_name) VALUES('$cat_name')";

  if ( mysqli_query($conn,$sql)) {
    $mess= "<p class='bg-success p-2'>Your Information is Saved!</p>";  
  }else{
    $mess= "<p class='bg-danger p-2'>Sorry! Information not Saved!</p>"; 
  }
}




?>