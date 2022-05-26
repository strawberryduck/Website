<!DOCTYPE html>    
<html>    
<head>    
    <title>Registration</title>    
    <link rel="stylesheet" type="text/css" href="registration.css">    
</head>    
<body>  
    <?php
        require("../../php/database_connect.php");
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $first_name=($_POST['FName']);
            $last_name=($_POST['LName']);
            $email=($_POST['email']);
            $password=($_POST['password']);
            $hash= password_hash($password,PASSWORD_BCRYPT);
            $gender=($_POST['gender']);
            $C_no=($_POST['C_no']);
            $street=($_POST['street']);
            $pin=($_POST['pin']);
            $u_type=($_POST['A_type']);
            $create_datetime = date("Y-m-d H:i:s");

            $query="INSERT into `users` (FName, LName , password, email, gender, C_no, street, pin, u_type, date_time)
                VALUES ('$first_name', '$last_name', '$hash', '$email', '$gender', '$C_no', '$street', '$pin', '$u_type', '$create_datetime')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click<a href='../login/login.php'> here</a> to login again</p>
                  </div>";
                } 
            else {
                echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click<a href='registration.php'> here</a> to register again.</p>
                  </div>";
                }
            }  
        ?> 
          
    <h2>REGISTRATION</h2><br>    
    <div class="Registration">    
    <form id="Registration" method="post">    
        <label>
            <b>First Name</b>    
        </label>
        <br>   
        <input type="text" name="FName" id="FName" placeholder="First Name" maxlength="20" required autofocus>    
        <br><br>

        <label>
            <b>Last Name </b>    
        </label>
        <br>
        <input type="text" name="LName" id="LName" placeholder="Last Name" maxlength="20" required>    
        <br><br>  

        <label>
            <b>Email</b>    
        </label>
        <br>  
        <input type="email" name="email" id="email" placeholder="Email" maxlength="50" required>    
        <br><br> 

        <label>
            <b>Password</b>    
        </label> 
        <br>
        <input type="Password" name="password" id="password" placeholder="Password" maxlength="32" required>    
        <br><br>

        <label>
            <b>Gender</b>    
        </label>
        <br>
        <input type="radio" name="gender" id="male" value="Male" required>
        <label for="male">Male</label> 
        <input type="radio" name="gender" id="female" value="Female" required>
        <label for="female">Female</label>
        <input type="radio" name="gender" id="other" value="Other" required> 
        <label for="other">Other</label>    
        <br><br>

        <label>
            <b>Contact Number</b>    
        </label>
        <br>
        <input type="number" name="C_no" id="C_no" placeholder="919876543210" maxlength="12" required>    
        <br><br><br>    

        <label><b>Address:
        </b>    
        </label>
        <br>
        <br>
        <label><b>
            Street
        </b>
        </label>
        <textarea name="street" id="street" placeholder="Street" maxlength="256" required></textarea>
        <br><br>
        
        <label><b>PIN Code</b></label>
        <input type="number" name="pin" id="pin" placeholder="793001" pattern="[0-9]{6}" maxlength="6" required>    
        <br><br>  

        <label>
            <b>Account Type</b>    
        </label>
        <br>
        <input type="radio" name="A_type" id="Buyer" value="Buyer" required>
        <label for="Buyer">Buyer</label> 
        <input type="radio" name="A_type" id="Seller" value="Seller" required>
        <label for="Seller">Buyer + Seller</label>    
        <br><br>

        <div id="createbuttondiv">   
            <input type="submit" name="create" id="create" value="Create">       
        </div>      
        <br><br>      
    </form>     
</div>    
</body>    
</html>  