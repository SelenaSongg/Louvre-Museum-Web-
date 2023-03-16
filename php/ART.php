<?php
 $dbConn = mysqli_connect("localhost","Informatics","IS41090","project");

 if(!$dbConn)
        {
            die("connection failed!" . $con->conncect_error());
        }


              
if(isset($_POST['submit'])){
              
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone=$_POST['phone'];
                $date =$_POST['date'];
                $ticket=$_POST['ticket'];
                $exhibition=$_POST['exhibition'];

                $sql = "SELECT * FROM bookform where name='$name'";
                $result = mysqli_query($connection,$sql);
                $rows = mysqli_num_rows($result);   

                if ($rows==0){
                    $request = " INSERT INTO bookform( 'name', 'email', 'phone', 'date', 'ticket', 'exhibition') VALUES 
                    ('$name', '$email', '$phone','$date','$ticket','$exhibition' )";
                    mysqli_query($connection, $request);
                header('location:bookform.html');  
                }
                else{
                    $query="UPDATE bookform SET 'email'='$email','phone'='$phone','date'='$date','ticket'='$ticket','exhibition'='$exhibition' where 'name'='$name'";
                }
                mysqli_query($connection,$query);
                header('location:bookform.html'); 

}
?>


   

    