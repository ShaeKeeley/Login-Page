<?php 
    $email = $_POST['email'];
    $password = $_POST['password'];

     // connection to database
     $conn = mysqli_connect('localhost', 'Shae', '0000', 'assignment');

     //checking connection
    if(!$conn){
        // echo 'connection unsuccesful:' . mysqli_connect_error();
    }else{
        // echo 'connection successful'. "<br>";

        $sql = "SELECT * FROM fitworks_gym WHERE email = '".$email."';";
        $result = mysqli_query($conn, $sql);
    }
    //Retrieved info from database
    $sql = "SELECT * FROM fitworks_gym WHERE email = '".$email."';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "Welcome " .$row["first_name"]. " " . $row["last_name"] . "<br>";

            echo  "memberID:". $row["member_id"]. "<br>".
                  "First Name:". $row["first_name"]. "<br>".
                  "Last Name:". $row["last_name"]. "<br>" .
                  "Phone Number:". $row["phone_number"]. "<br>".
                  "Email:". $row["email"]. "<br>". 
                  "Password:". $row["password"]. "<br>". 
                  "Fitness Goals:". $row["fitness_goals"]. "<br>". 
                  "Workout Shedule:". $row["workout_schedule"]. "<br>".
                  "Fitness Level:". $row["fitness_level"]. "<br>";
          }}
    else { echo "No records has been found";}
    //close connection
    mysqli_close($conn);
?>  