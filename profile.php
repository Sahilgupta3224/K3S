<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <title>Profile</title>
    <style>
        body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
.logout{
    text-align:center;
}
.topnav {

    background-image:linear-gradient(to bottom, rgb(95,25,76),rgb(47, 8, 63));
    /*background-image:linear-gradient(rgba(45, 7, 72, 0.724),rgb(47, 8, 63));*/
    position:relative;
    display:flex;
    margin-left:0;
    margin-top:0;
    width:100%;
    justify-content:right;
  }
  
  .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  
  .topnav a:hover {
    background-color: #ffffff;
    color: black;
  }
  
  .topnav a.active {
    background-color: #5404aa86;
    color: white;
  }
  .logo{
    position:absolute;
    color:white;
    transform: translateX(-1150px);
    margin-top:15px;
    font-family: 'Kaushan Script', cursive;
  }
  #contact{
    background-image: radial-gradient( circle farthest-corner at 14.2% 24%,  rgba(239,61,78,1) 0%, rgba(239,61,78,0.81) 51.8%, rgba(239,61,78,0.63) 84.6% );
    color:white;
    padding:20px;
    justify-content: center;
    align-items: center;
    text-align: center;
}
    </style>
  </head>
  <body>
  <div class="topnav">
  <div class="logo">PRIDEMΛTCH</div>
  <a href="index.php">Home</a>
  <a href="http://localhost:3000/">Community Discussion</a>
  <a href="#contact">Contact Us</a>
  <a href="profile.php">Profile</a>
  <a href="logout.php">Logout</a>
</div>
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" id="circle" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold"><?php echo $row["name"];?></span>
                <span class="text-black-50"><?php echo $row["email"];?></span><span></span></div>
                <div class="logout">
                <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                <p><button><label for="file" style="cursor: pointer;">Upload Image</label></button></p>
                <p><img id="output" width="200" /></p>

                </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">My Profile</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Username: </label><br><span><?php echo $row["username"];?></span></div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Date of Birth: </label><br><span><?php echo $row["dob"];?></span></div>
                    <div class="col-md-12"><label class="labels">Gender: </label><br><span><?php echo $row["gender"];?></span></div>
                    <div class="col-md-12"><label class="labels">Occupation: </label><br><span><?php echo $row["occ"];?></span></div>
                    <div class="col-md-12"><label class="labels">State:</label><br><span><?php echo $row["state"];?></span></div>
                    <div class="col-md-12"><label class="labels">Religion:</label><br><span><?php echo $row["rel"];?></span></div>
                    <div class="col-md-12"><label class="labels">About Me:</label><br><span><?php echo $row["des"];?></span></div>
                </div>
            </div>
        </div>
        
    </div>
</div>
</div>

</div><br>
<section id="contact">

<div class="cont">
<i class="fa-solid fa-mobile-screen-button"></i>
+91 8293746279
</div>
<div class="cont">
    <i class="fa-regular fa-envelope"></i>
    pridematch@gmail.com
</div>


</section>




<script>
var loadFile = function(event) {
	var image = document.getElementById('circle');
	image.src = URL.createObjectURL(event.target.files[0]);
    
};
</script>
  </body>
</html>
   

