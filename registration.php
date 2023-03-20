<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $dob = $_POST["dob"];
  $gen = $_POST["gen"];
  $occ = $_POST["occ"];
  $state = $_POST["state"];
  $rel = $_POST["rel"];
  $des = $_POST["des"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Is Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO user VALUES('','$name','$username','$email','$password','$dob','$gen','$occ','$state','$rel','$des')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>

 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

<style>
html {
    height: 100%;
    width: 100%;
    
  }
  
  
  *{
      margin: 0px;
      padding: 0px;
      font-family: 'Poppins', sans-serif;
  }
  
  #home{
    width:100%;
    height:100vh;
    background-image: url(lqbtq2.png);
    
  }
  .sign{
    text-align: center;
    justify-content: center;
    font-weight: 500;
    font-size: 25px;

  }

  .profile{
    padding:10px;
    position: absolute;
    margin-top:40px;
    margin-left:100px;
    width:350px;
    border-radius: 8px;
    background-color: rgba(255, 255, 255, 0.5);
    backdrop-filter: blur(5px);
    color:rgb(0, 0, 0);
    box-shadow: 2px 2px 5px gray;
    font-size:14px;
    
  }
.input{
    margin:5px;
    margin-left:0px;
    width:300px;
    background:transparent;
    border-bottom:2px solid white;
    color:rgb(0, 0, 0);
    outline:none;
    border-top:0;
    border-right:0;
    border-left:0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.452);
}
 label{
    
    transform:translateY(100px)
    transition:0.5s;
 }
.submit{
    width:100%;
    border-radius: 8px;
    height:40px;
    border:none;
    box-shadow: 2px 2px 5px gray;

}

.submit:hover{
    background-color: rgba(109, 106, 106, 0.258);
}
.alr{
    text-align: center;
}
.stats{
    
    
    /*rgb(63, 4, 126)*/
    height:500px;
    text-align: center;
    justify-content: center;
    font-size: 30px;
    font-weight: 700;
    padding:30px;
    color:white;
    
    background-image: radial-gradient( circle farthest-corner at 14.2% 24%,  rgba(239,61,78,1) 0%, rgba(239,61,78,0.81) 51.8%, rgba(239,61,78,0.63) 84.6% );
}

.boxes{
    justify-content: center;
    align-items: center;
    text-align: center;

}
.icon{
    display:inline-block;
    margin-left:30px;
    margin-right:30px;
    margin-top:50px;
    height:300px;
    width:300px;
}

i{
    margin-bottom:50px;
    color:white;
}
.testimonials{
    height:400px;
    justify-content: center;
    font-size: 30px;
    font-weight: 700;
    padding:30px;
    color:black;
    background-color: aliceblue;
    align-items: center;
    text-align: center;
    

}
#steps{
  background-color:aliceblue;
  height:500px;
  width:100%;
  text-align: center;
    justify-content: center;
    font-size: 25px;
    font-weight: 50;
    padding:30px;
    color:black;
}
.fa-heart{
  color:cyan;
  opacity:0.5;
}
.fa-address-card{
  color:cyan;
  opacity:0.5;
}
.fa-comments{
  color:cyan;
  opacity:0.5;
  
}
.com{
  margin-top:30px;
  transform:translateY(30px);
}

@import url(https://fonts.googleapis.com/css?family=Roboto:300,400);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
.snip1533 {
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  color: #9e9e9e;
  display: inline-block;
  font-family: 'Roboto', Arial, sans-serif;
  font-size: 16px;
  margin: 35px 10px 10px;
  max-width: 310px;
  min-width: 250px;
  position: relative;
  text-align: center;
  width: 100%;
  background-color: #ffffff;
  border-radius: 5px;
  border-top: 5px solid #d22d5f;
}

.snip1533 *,
.snip1533 *:before {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.1s ease-out;
  transition: all 0.1s ease-out;
}

.snip1533 figcaption {
  padding: 13% 10% 12%;
}

.snip1533 figcaption:before {
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
  background-color: #fff;
  border-radius: 50%;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
  color: #d22d5f;
  content: "\f10e";
  font-family: 'FontAwesome';
  font-size: 32px;
  font-style: normal;
  left: 50%;
  line-height: 60px;
  position: absolute;
  top: -30px;
  width: 60px;
}

.snip1533 h3 {
  color: #3c3c3c;
  font-size: 20px;
  font-weight: 300;
  line-height: 24px;
  margin: 10px 0 5px;
}

.snip1533 h4 {
  font-weight: 400;
  margin: 0;
  opacity: 0.5;
}

.snip1533 blockquote {
  font-style: italic;
  font-weight: 300;
  margin: 0 0 20px;
}


/* Demo purposes only */

body {
  background-color: #212121;
  text-align: center;
}

.contact{
    background-image: radial-gradient( circle farthest-corner at 14.2% 24%,  rgba(239,61,78,1) 0%, rgba(239,61,78,0.81) 51.8%, rgba(239,61,78,0.63) 84.6% );
    color:white;
    padding:20px;
    justify-content: center;
    align-items: center;
    text-align: center;
   

}
.cont{
    display:inline-block;
    
    margin-right: 100px;
    margin-left:100px;


}
i.fa-solid.fa-1{
  color:cyan;
  opacity:0.5;
  height:10px;
  width:10px;

}
i.fa-solid.fa-2{
  color:cyan;
  opacity:0.5;
  height:10px;
  width:10px;

}
i.fa-solid.fa-3{
  color:cyan;
  opacity:0.5;
  height:10px;
  width:10px;

}
.logo{
  position:absolute;
  margin-top:20px;
  margin-right:20px;
  display:flex;
  
  
  text-align:right;
  align-items:right;
  transform:translateX(1150px);
  font-family: 'Kaushan Script', cursive;
}

</style>
</head>
<body>

      
    <section id="home">
      <div class="logo">PRIDEMΛTCH</div>
        <form class="profile form" action="" method="post" autocomplete="off">
            <div class="sign">SIGN UP</div><br>
            <input type="text" id="name" name="name" class="input" placeholder="Enter Name" required value=""><br>
            <input type="text" id="username" name="username" class="input" placeholder="Enter username" required value=""><br>
            <input type="email" id="email" class="input" name="email" placeholder="Enter Email" required value=""><br>
            <input type="password" id="pass" class="input" name="password" placeholder="Enter Password" required value=""><br>
            <input type="password" id="confirmpassword" name="confirmpassword" class="input" placeholder="Confirm Password" required value=""><br>
            
            <input type="date" id="dob" name="dob" class="input" placeholder="Date of Birth" required value=""><br>
            <input list="gender" class="input" name="gen" placeholder="Select your gender" required value="">
            <datalist id="gender">
                <option value="gay">
                <option value="lesbian">
                <option value="bisexual(man)">
                <option value="bisexual(woman)">
                <option value="transman">
                <option value="transwoman">
                <option value="asexual">
            </datalist><br>
            <input type="text" id="occupation" name="occ" class="input" placeholder="Enter your Occupation" required value=""><br>
            
            <input list="State" class="input" name="state" placeholder="Enter your state" required value="">
            <datalist id="State">
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option></datalist><br>
            <input type="text" id="religion" name="rel" class="input" placeholder="Enter Religion" required value=""><br>
            <textarea rows="3" cols="50" id="desc" name="des" class="input" placeholder="Briefly describe yourself" required value=""></textarea><br>
            <button type="submit" name="submit" class="submit">Register</a></button>
            <br>
            Already a user?<a href="login.php">Login</a></form>

          </section>
          <section id="steps" class="tag">

    <div class="icon"><i class="fa-regular fa-address-card fa-5x"></i><br><i class="fa-solid fa-1"></i><br>Register and create your profile</div>
      <div class="icon"><i class="fa-regular fa-heart fa-5x"></i><br><i class="fa-solid fa-2"></i><br>Find your match as per your preferences</div>
      <div class="icon com"><i class="fa-regular fa-comments fa-5x"></i><br><i class="fa-solid fa-3"></i><br>Send connection requests and start conversations</div>
    </section>
    
    <section class="stats tag">
        <div class="mem">
            One stop destination to find your special someone
        </div>
        <div class="boxes">
            <div class="icon">
                <i class="fa-solid fa-users fa-5x"></i><br>
                <div class="counter" target="3556">0</div><br>
                
                Total members
            </div>
            <div class="icon">
                <i class="fa-solid fa-transgender fa-5x"></i><br>
                <div class="counter" target="2872">0</div><br>

                Active users


            </div>
            <div class="icon">
                <i class="fa-solid fa-ring fa-5x"></i><br>
                <div class="counter" target="986">0</div><br>
                Matches made

            </div>
        
        </div>

    </section>
    <section class="testimonials tag">
        <figure class="snip1533 jo">
            <figcaption>
              <blockquote>
                <p>We will be grateful to PrideMatch for helping us find our soulmates! What are you waiting for? Find yours too!</p>
              </blockquote>
              <h3>Ramesh and Aniket</h3>
              
            </figcaption>
          </figure>
          <figure class="snip1533">
            <figcaption>
              <blockquote>
                <p>We couldn't have been happier!!! I would recommend PrideMatch to all LGBTQ+ mates out there!</p>
              </blockquote>
              <h3>Kriti and Sahiba</h3>
              
            </figcaption>
          </figure>
        </section>
        
<section class="contact">

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
  // Selector
const counters = document.querySelectorAll('.counter');
// Main function
for(let n of counters) {
  const updateCount = () => {
    const target = + n.getAttribute('target');
    const count = + n.innerText;
    const speed = 600000; // change animation speed here
    const inc = target / speed; 
    if(count < target) {
      n.innerText = Math.ceil(count + inc);
      setTimeout(updateCount, 1);
    } else {
      n.innerText = target;
    }
  }
  updateCount();
}

</script>

</body>
</html>