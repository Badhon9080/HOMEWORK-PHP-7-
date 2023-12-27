<?php
  // print_r($_REQUEST);
   /*print_r($_REQUEST["title"]);*/
  /*  //get data
    $title=$_REQUEST["title"];
    $details=$_REQUEST["details"];
    $author=$_REQUEST["author"];

    if( empty($title) ){
        echo "where is title?<br>";
    }
    elseif(strlen($title)>5){
        echo "how much!<br>";
    }

    //details validation

    if( empty($details) ){
        echo "where is details?<br>";
    }
    */
   ?>
   <?php
    /*   //get data(ERRORS[])
        $title=$_REQUEST["title"];
       $details=$_REQUEST["details"];
       $author=$_REQUEST["author"];
       $error = [];
        
       if(empty($title)){
        $error["title_error"]="where is title";
       }
       elseif(strlen($title)>5){
        $error["title_error"]="how much!";
       }

       if(empty($details)){
        $error["details_error"]="where is details?";
       }
       print_r($error);*/
   ?>
  <?php
  //get data(session_staRt());
  /*session_start();
  $title=$_REQUEST["title"];
  $details=$_REQUEST["details"];
  $author=$_REQUEST["author"];
  $error=[];

  if( empty($title) ){
    $error["title_error"]="where is title?";
  }
  elseif(strlen($title)>5){
    $error["title_error"]="how much!";
  }


  if( empty($details) ){
    $error["details_error"]="where is details?";
  }
  print_r(count($error));
*/
  ?>
  <?php
   session_start();
   $title=$_REQUEST['title'];
   $details=$_REQUEST['details'];
   $author=$_REQUEST['author'];
   $errors=[];
   
   //title validation

   if( empty($title) ){
    $errors['title_error']="where is title?";
   }elseif(strlen($title)>5){
    $errors['title_error']="how much!";
   }

   //details validation

   if( empty($details)){
    $errors['details_error']="where is details?";
   }

  if(count($errors)>0){
    $_SESSION['data']=$_REQUEST;
    $_SESSION['errors']=$errors;
    //REDIRECTION
    header("location: ../index.php");
  }

?>
