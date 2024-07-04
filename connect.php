<?php
  $fullname =$_POST['firstName'];
  $emailaddress =$_POST['emailaddress'];
  $PhoneNumber =$_POST['PhoneNumber'];
  $gender =$_POST['gender'];
  $bloodgroup =$_POST['bloodgroup'];
  $HospitalName =$_POST['HospitalName'];
  
  //database connection//
  $conn =new mysql('localhost','root','''test2');
  if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into Patient Registration(fullname,emailaddress,phonenumber,gender,bloodgroup,hospitalname)
    values(?,?,?,?,?,?,)");
    $stmt->bind_param("sssssi",$fullname,$emailaddress,$phonenumber,$gender,$bloodgroup,$hospitalname);
    $stmt->execute();
    echo "Patient Registration SUccessfully...";
    $stmt->close();
    $conn->close();
        
  }

?> 