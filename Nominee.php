<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nominee</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Nomination Form</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        
    


       


            <!-- Title -->
            <div class="form-group">
    <label for="title">Title:</label>
    <select class="form-control" id="title" name="Title" required>
        <option value="mr">Mr.</option>
        <option value="ms">Ms.</option>
    </select>
</div>


            <!-- Name -->
            <div class="form-group">
                
                <label for="accountholder">Name:</label>
                <input type="text" class="form-control" id="accountholder"  name="Name" required>
               
          </div>




          <div class="form-group">
                <label for="Relationship with Nominee">Relationship with Nominee:</label>
                <input type="text" class="form-control" id="RelationshipwithNominee" name="RelationshipwithNominee" required>
            </div>



            <!-- Father's Name -->
            <div class="form-group">
                <label for="father_name">Father's Name:</label>
                <input type="text" class="form-control" id="father_name" name="FatherName" required>
            </div>

            <!-- Mother's Name -->
            <div class="form-group">
                <label for="mother_name">Mother's Name:</label>
                <input type="text" class="form-control" id="Mothername" name="MotherName" required>
            </div>

            <!-- Present Address -->
            <div class="form-group">
                <label for="presentAddress">Present Address:</label>
                <input type="text" class="form-control" id="Presentaddress" name="Presentaddress" required>
            </div>

            <!-- Mobile -->
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="text" class="form-control" id="mobile" name="Mobile" required>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="Email" required>
            </div>

           
            <div class="form-group">
                <label for="postcode">Post Code:</label>
                <input type="text" class="form-control" id="postcode" name="Postcode" required>
            </div>

            <!-- NID -->
            <div class="form-group">
                <label for="nid">NID:</label>
                <input type="text" class="form-control" id="nid" name="NID" required>
            </div>

            <!-- Date of Birth -->
            <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" class="form-control" id="date_of_birth" name="DateofBirth" required>
            </div>

            <!-- Occupation -->
            <div class="form-group">
                <label for="occupation">Occupation:</label>
                <input type="text" class="form-control" id="occupation" name="Occupation" required>
            </div>

            <!-- Gender -->
            <div class="form-group">
    <label for="gender">Gender:</label>
    <select class="form-control" id="gender" name="Gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
</div>




 <div class="form-group">
                <label for="Division">Division:</label>
                <input type="text" class="form-control" id="division" name="Division" required>
            </div>




           





            <!-- Nationality -->
            <div class="form-group">
    <label for="nationality">Nationality:</label>
    <select class="form-control" id="nationality" name="Nationality" required>
        <option value="bangladeshi">Bangladeshi</option>
        <option value="others">Others</option>
    </select>
</div>


            <!-- Residency -->
            <div class="form-group">
    <label for="residency">Residency:</label>
    <select class="form-control" id="residency" name="Residency" required>
        <option value="resident">Resident</option>
        <option value="non_resident">Non-Resident</option>
    </select>
</div>






<div>

        <label for="declaration">Declaration:</label>
        <input type="checkbox" id="declaration" name="Declaration" required>
        <label for="declaration">It is hereby declared that all the above mentioned information in nominees account information form are true and valid</label>



</div>

<div>

 
  <label for="customerSignature">Signature of Nominee(s):</label>
  <input type="text" id="customerSignature" name="customerSignature" required>
<button type="submit" class="btn btn-primary">Submit</button>


</div>

</br>
</br>


        </form>


<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data and perform database insert here
           
    $title = $_POST["Title"];
    $name = $_POST["Name"];
    $relationshipwithNominee = $_POST["RelationshipwithNominee"];
    $fatherName = $_POST["FatherName"];
    $motherName = $_POST["MotherName"];
    $presentAddress = $_POST["Presentaddress"];
    $mobile = $_POST["Mobile"];
    $email = $_POST["Email"];
    $postcode = $_POST["Postcode"];
    $nid = $_POST["NID"];
    $dateOfBirth = $_POST["DateofBirth"];
    $occupation = $_POST["Occupation"];
    $gender = $_POST["Gender"];
    $division = $_POST["Division"];
    $nationality = $_POST["Nationality"];
    $residency = $_POST["Residency"];
    $declaration = $_POST["Declaration"];


          // Connect to the database
    $servername = "localhost";
    $username = "root"; // Replace with your MySQL username
    $password = ""; // Replace with your MySQL password
    $dbname = "lankabangla"; // Replace with your database name
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    



    // Prepare and execute the SQL statement to insert data into the table
    $sql = "INSERT INTO nominee (Title, Name, RelationshipwithNominee,  FatherName, MotherName, Presentaddress, Mobile, Email, Postcode, NID, DateofBirth, Occupation, Gender, Division, Nationality, Residency, Declaration)
    VALUES ('$title', '$name', '$relationshipwithNominee'  , '$fatherName', '$motherName', '$presentAddress', '$mobile', '$email', '$postcode', '$nid', '$dateOfBirth', '$occupation', '$gender', '$division', '$nationality', '$residency', '$declaration')";
    


 if ($conn->query($sql) === TRUE) {
        $successMessage = "New record inserted successfully.";

        echo "<div class='mt-3 alert alert-success'> 
        $successMessage
        </div>";
    } 
     else {
        $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
        echo "$errorMessage";
    }



    // Close the database connection
    $conn->close();


}




?>
           
       
</div>

   


</body>
</html>








  
