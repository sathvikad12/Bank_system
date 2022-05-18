<?php
    
    include 'config.php';
   
    $id = $receiver_name = $sender_name = $email = $amount = '';
    $errors =array('id'=>'', 'receiver_name'=>'', 'sender_name'=>'', 'email'=>'', 'amount'=>'');

    if(isset($_POST['submit'])){
        
        //check ID
        if(empty($_POST['id']))
        {
            $errors['id'] = 'ID is required <br />';
        } else 
        {
           $id = $_POST['id'];
           if(!preg_match('/^[a-zA-Z0-9]/', $id))
           {
               $errors['id'] = 'ID should be valid';
           }
        }    
        
        //check name
        if(empty($_POST['receiver_name']))
        {
            $errors['receiver_name'] = 'receiver name is required <br />';
        } else 
        {
           $receiver_name = $_POST['receiver_name'];
           if(!preg_match('/^[a-zA-Z\s]+$/', $receiver_name))
           {
               $errors['receiver_name'] = 'fill correctly';
           }
        }  

        //check name
        if(empty($_POST['sender_name']))
        {
            $errors['sender_name'] = 'sender name is required <br />';
        } else 
        {
           $sender_name = $_POST['sender_name'];
           if(!preg_match('/^[a-zA-Z\s]+$/', $sender_name))
           {
               $errors['sender_name'] = 'fill correctly';
           }
        }  

    //check email
        if(empty($_POST['email']))
        {
            $errors['email'] = 'email is required <br />';
        } else 
        {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $errors['email'] = 'mail should be valid';
            }
        }    
        
        //check amount
        if(empty($_POST['amount']))
        {
            $errors['amount'] = 'amount is required (in ₹) <br />';
        } else 
        {
            $amount = $_POST['amount'];
            if(!preg_match('/^[a-zA-Z0-9]/', $amount))
            {
                $errors['amount'] = 'number are accepted' ;
            }
        }    
        

    
    if(array_filter($errors))
    {
        echo 'errors in the form';

    }
   $sql = "INSERT INTO transfer (id,receiver_name, sender_name,email,amount) VALUES ('$id','$receiver_name', '$sender_name','$email','$amount')";

    if (mysqli_query($conn, $sql)) {
      header("location: home.php");
    } else {
       echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    mysqli_close($conn);
   
}



   
?>

<html>

   
    <head>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        body {
  background-image: url('pic_1.jpg');
  background-size:cover;
}
    </style>
        
              
    </head>
    <body>
 <?php include 'home.php' ; ?>

    <section class="container black-text">
        <h4 class="center">TRANSFER DETAILS</h4>
	<h3>Bank Balance: ₹<span id="myAccountBalance">100000</span></h3>
   
        <form id="myform" class="white" action="transfermoney.php" method="POST">
            <label>ID</label>
            <input type="text" name="id" value="<?php echo htmlspecialchars($id) ?>">
            <div class="red-text"><?php echo $errors['id']; ?></div>
            <label>RECEIVER NAME</label>
            <input type="text" name="receiver_name"  value="<?php echo htmlspecialchars($receiver_name) ?>">
            <div class="red-text"><?php echo $errors['receiver_name']; ?></div>
            <label>SENDER NAME</label>
            <input type="text" name="sender_name" value="<?php echo htmlspecialchars($sender_name) ?>">
            <div class="red-text"><?php echo $errors['sender_name']; ?></div>
            <label>EMAIL</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>
            <label>AMOUNT</label>
            <input type="text" name="amount" value="<?php echo htmlspecialchars($amount) ?>">
            <div class="red-text"><?php echo $errors['amount']; ?></div>
            <div class="center">
               
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0" >

  
              </form>


    </section> 
<?php
function function_alert($message) {
echo "<script>alert('$message');</script>";
}
function_alert("Transaction Sucessfull");
?>    

    
          
            
   

</body>
</html>
