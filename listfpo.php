<?php
 session_start();
//  if(isset($_SESSION['user']))
//  {

//  }
//  else{
//   echo"<script>location.href='index.html'</script>";
//  }
?> 
    
    

<!DOCTYPE html>
<html>
<head>
        <title>list FPO</title>
        <style>
@import url("css/header.css");
@import url("css/footer.css");
@import url("css/reg.css");
          
  body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background:#f7f3f2;
}


.form-title{
  color:#3b3a3a;
  transform:translateX(40px);
}

.form-container{
  height:110vh;
  width:100vw;
  display:flex;
  align-items:center;
  justify-content:center;
  flex-direction:column;
}

.list-fpo-form{
  width:60%;
  height:100%;
  display:flex;
  align-items:flex-start;
  justify-content:space-between;
  flex-direction:column;
  transform:translateX(-80px);
}
.form-internal-container{
  height:90%;
  width:100%;
  display:flex;
  justify-content:space-evenly;
}
.fpo-labels-container{
  width:30%;
  height:97%;
  align-items:flex-end !important;
  line-height:40px;
}
.fpo-input-container{
  width:70%;
  height:100%;
}
.fpo-labels-container,.fpo-input-container{
  display:flex;
  align-items:center;
  justify-content:space-evenly;
  flex-direction:column;
}

.fpo-inputs{
  width:85%;
  height:5%;
  border-radius:4px;
  /* box-sizing:border-box; */
  padding:0px 5px;
  font-size:14px;
  border:1px solid gray;
  outline:none;
}

.submit-btn-container{
  width:100%;
  height:15%;
  display:flex;
  justify-content:center;
}
.list-fpo-submit-btn{
  height:34%;
  width:20%;
  transform:translateX(120px);
  background: #f56140;
  border-radius:5px;
  border:none;
  cursor:pointer;
  color:white;
  transition:all .2s ease;
}
.list-fpo-submit-btn:hover{
  background: #eb370e;
}
.fpo-input-container textarea{
  border-radius:4px;
  /* box-sizing:border-box; */
  padding:5px 5px;
  border:1px solid gray;
  outline:none;
}

.fpo-inputs:focus,
.fpo-input-container textarea:focus{
  border:1px solid #f56140;
  outline:1px solid #f56140;
  background: #e8e6e6;
}
</style>    
</head>
<body>
            <div class="topnav">
            
            <a href="index.html">WefoundingFarmers</a>
            
          </div>
   <form >
       <button type="submit" formaction="index.html" style="margin:15px;height: 40px;width: 100px;
       border-radius:15px;
border: 3px solid  yellow;background-color: green;color:yellow;font-size:15px;cursor:pointer;">back</button>
</form> 
  <div class="form-container">
    <h3 class="form-title"> List Your FPO</h3>
    <form action="listfpo.php" method="post" class="list-fpo-form">
    <div class="form-internal-container">
          <div class="fpo-labels-container">
                <label for="FPO_Name"><b>FPO name *</b></label>
                <label for="owner_Name"><b>Owner name *</b></label>
                <label for="Phone"><b>Phone *</b></label>
                <label for="CompanyEmail_Address"><b>Company Mail *</b></label>
                <label for="City"><b>City</b></label>
                <label for="Pin Code"><b>Pin Code *</b></label>
                <label for="State"><b>State</b></label>
                <label for="Address"><b>Company Address *</b></label>
                <label for="Reference"><b>Description About Your FPO</b></label>
          </div>
          <div class="fpo-input-container">
            <input name="fname" type="text" maxlength="50"  class="fpo-inputs"/>
            <input name="oname" type="text" maxlength="50"  class="fpo-inputs"/>
            <input name="phone" type="text" maxlength="50"  class="fpo-inputs"/>
            <input name="mail" type="text" maxlength="100" class="fpo-inputs"/>
            <input name="city" type="text" maxlength="50"  class="fpo-inputs"/>
            <input name="pin" type="text" maxlength="50" class="fpo-inputs"/>
            <input name="state" type="text" maxlength="50"  class="fpo-inputs"/>
            <input name="add" type="text" maxlength="100" class="fpo-inputs"/>
            <textarea name="description" rows="1" cols="71"  class="input"></textarea>
          </div>
   </div>
   <div class="submit-btn-container">
      <input name="submit" type="submit" value="List FPO" class="list-fpo-submit-btn"/>
   </div>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
// define variables and set to empty values
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fpo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "  CONNECTION ESTABLISHED \r\n";
//echo "  INSERTION IN PROCESS";
  $fname = $_POST["fname"];
  $oname= $_POST["oname"];
  $mail = $_POST["mail"];
  $add = $_POST["add"];
 $city = $_POST["city"];
 $state = $_POST["state"];
 $phone = $_POST["phone"];
  $pin = $_POST["pin"];
 $description = $_POST["description"];




$sql = "INSERT INTO fpos(c_fname,c_oname,c_mail,c_add,c_city,c_state,c_phone,c_pin,c_description)
VALUES ('$fname','$oname','$mail','$add','$city','$state','$phone','$pin','$description')";
if ($conn->query($sql) == TRUE) {
  echo'<div>
  <h1 style="color:green;font-size:20px; font-family: "Roboto", sans-serif;margin:auto;">new fpo name
'.$fname. ' inserted successfully</h1>
     </div>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

    
 <div class="footer">
<div class="footer-text-left">
    <a href="index.html" class="menu">home</a>
    <a href="https://css.sammy-codes.com/about.html" class="menu">about</a> 
    <a href="https://css.sammy-codes.com/credits.html" class="menu">credits</a>
  

<div class="footer-content-right">
<a href="#"><img src="images/linked_in.webp" class="icon-style" alt="limkedin icon"></a>
<a href="#"><img src="images/whatsapp.webp" class="icon-style" alt="whatsapp icon"></a>
  <a href="#"><img src="images/instagram.webp" class="icon-style" alt="instagram"></a>
  <a href="#"><img src="images/github.webp" class="icon-style" alt="Github icon"></a>
  <a href="#"><img src="images/twitter.webp" class="icon-style" alt="Twitter icon"></a>
  <a href="#" class="icon-style" alt="Emailicon"></a>
  </div>
</div>   
    
    
</body>
<script type="text/javascript"> // this script is for list fpo form validation
function ValidateForm(frm) {
if (frm.FPO_Name.value == "") { alert('FPO name is required.'); frm.FPO_Name.focus(); return false; }
if (frm.Owner_Name.value == "") { alert('Owner name is required.'); frm.Owner_Name.focus(); return false; }
if (frm.ComapnyEmail_Address.value == "") { alert('CompanyEmail address is required.'); frm.CompanyEmail_Address.focus(); return false; }
if (frm.Email_Address.value.indexOf("@") < 1 || frm.Email_Address.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.CompanyEmail_Address.focus(); return false; }
if (frm.Position.value == "") { alert('Position is required.'); frm.Position.focus(); return false; }
if (frm.Phone.value == "") { alert('Phone is required.'); frm.Phone.focus(); return false; }
return true; }
console.log("hi");
</script>
</html>