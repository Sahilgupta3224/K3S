<?php
require 'config.php';
  $result = mysqli_query($conn, "SELECT * FROM user");
  $datarr = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $datarr[] = $row;
    }
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Filter And Search</title>
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <!-- Stylesheet -->

    <style>
      html{
    height:100%;
    width:100%;
    scroll-behavior: smooth;
    

}
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    border: none;
    outline: none;
    font-family: "Poppins", sans-serif;
  }
  body {
    background-image:radial-gradient(circle farthest-corner at 14.2% 24%,rgba(239,61,78,1)
    0%,rgba(239,61,78,0.63) 84.6% );
  }
  .topnav {
    
    background-image:linear-gradient(rgba(45, 7, 72, 0.724),rgb(47, 8, 63));
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
 

  #ho{
    
    width:100%;
    margin-top:0px;
    height:550px;
    position:relative;
    display:table-cell;
    justify-content:center;
    align-items:center;
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(1,1,1,0.5)),url(homepg2.jpg);
    background-size:cover ;
    background-repeat: no-repeat;
    background-attachment:fixed;
  }

  .mat{
    justify-content: center;
    text-align: center;
    padding: 10px;
    margin-top:150px;
    font-size:90px;
    font-weight: 5000px;
    color:#ffffff;
    display:flex;
    

  }
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  

  .wrapper {
    width: 100%;
    margin: 0 auto;
  }
  #search-container {
    
    margin-left:200px;
    background-color: rgba(256,256,256,0.5);
    
    backdrop-filter: blur(5px);
    justify-content: center;
    align-items: center;
    
    display:flex;
    position:absolute;
    width:70%;
    transform: translateY(-90px);
    padding:10px;
    border-radius:8px;
  }
  #search-container input {
    background-color: transparent;
    width:40%;
    margin:10px;
    border-bottom: 2px solid #110f29;
    padding: 5px;
  }
  #search-container input:focus {
    border-bottom-color: #6759ff;
  }
  #search-container button {
    padding: 1em 2em;
    margin-left: 1em;
    background-color: #6759ff;
    color: #ffffff;
    border-radius: 5px;
    margin-top: 0.5em;
    
    /*display: flex;
    justify-content: center;
    margin-top:20px;*/
  }
  #buttons{
    
    display: flex;
    justify-content: center;
    margin-top:20px;
  }
  .button-value {
    border: 2px solid #6759ff;
    padding: 1em 2.2em;
    border-radius: 3em;
    background-color: transparent;
    color: white;
    cursor: pointer;
  }
  .active {
    background-color: #6759ff;
    color: #ffffff;
  }
  #persons {
    display: grid;
    grid-template-columns: auto auto auto;
    grid-column-gap: 1.5em;
    padding: 2em 0;
    height:600px;
    /*height:600px;
    width:100%;
    background-image:radial-gradient(circle farthest-corner at 14.2% 24%,rgba(239,61,78,1)
    0%,rgba(239,61,78,0.63) 84.6% );
    display:inline-block;*/
  }
  .card {
    /*background-color: #ffffff;
    max-width: 18em;
    margin-top: 1em;
    padding: 1em;
    border-radius: 5px;
    box-shadow: 1em 2em 2.5em rgba(1, 2, 68, 0.08);*/
    background-color: #ffffff;
    width:300px;
    margin-top: 1em;
    padding: 1em;
    border-radius: 5px;
    box-shadow: 2px 2px 5px gray;
    font-size: 15px;
    font-weight: 500;
    transition:0.5s;
  }
  .card:hover{
    transform: scale(1.1);
  }
  .image-container {
    text-align: center;
  }
  img {
    max-width: 100%;
    object-fit: contain;
    height: 15em;
  }
  .container {
    padding-top: 1em;
    color: #110f29;
  }
  .container h5 {
    font-weight: 500;
  }
  .hide {
    display: none;
  }
  @media screen and (max-width: 720px) {
    img {
      max-width: 100%;
      object-fit: contain;
      height: 10em;
    }
    .card {
      max-width: 10em;
      margin-top: 1em;
      display: inline-block;
    }
    #persons {
      grid-template-columns: auto auto;
      grid-column-gap: 1em;
      
    }
  }
  #search{
    box-shadow:2px 2px 5px gray;
  }
  button:hover{
    background-color: blue;
  }
  search-input{
    padding:5px;
    margin:10px;
  }
  nav{
    margin-top:0px;
    width:100%;
    display: flex;
      background-image: radial-gradient( circle farthest-corner at 14.2% 24%,  rgba(239,61,78,1) 0%, rgba(239,61,78,0.81) 51.8%, rgba(239,61,78,0.63) 84.6% );
  }
  .item{
    display:inline;
  }
  #ppl{
    justify-content: center;
    
    display: flex;
  }
  .logo{
    position:absolute;
    color:white;
    transform: translateX(-1150px);
    margin-top:15px;
    font-family: 'Kaushan Script', cursive;
  }
  
    </style>
  </head>
  <body>
    <div class="wrapper">
      
<div class="topnav">
<div class="logo">PRIDEMΛTCH</div>

  <a class="active" href="#home">Home</a>
  <a href="http://localhost:3000/">Community Discussion</a>
  <a href="profile.php#contact">Contact Us</a>
  <a href="profile.php">Profile</a>
  <a href="logout.php">Logout</a>
</div>
<section id="ho">
  <div class="mat">Find Your Match With One Click.</div>
 
</section>
  <div class="container-fluid">
      <div id="search-container">
        <input
          type="search"
          id="search-input"
          placeholder="Preffered location.."
        />
        <button id="search">Search</button>
      </div>
      <div id="buttons">
        <button class="button-value" onclick="filterPerson('all')">All</button>
        <button class="button-value" onclick="filterPerson('gay')">
          gay
        </button>
        <button class="button-value" onclick="filterPerson('lesbian')">
          lesbian
        </button>
        <button class="button-value" onclick="filterPerson('bisexual(woman)')">
          bisexual(woman)
        </button>
        <button class="button-value" onclick="filterPerson('bisexual(man)')">
        bisexual(man)
        <button class="button-value" onclick="filterPerson('transman')">
          transman
        </button>
        <button class="button-value" onclick="filterPerson('transwoman')">
        transwoman
        </button>
        <button class="button-value" onclick="filterPerson('asexual')">
            asexual
          </button>
      </div>
      <div id="ppl">
      <div id="persons"></div>
      
      
      </div>
    </div>
 

  
   
   
   <script type="text/javascript">
    
  let parsedJson = <?php echo json_encode($datarr);?>;
  console.log(typeof(parsedJson));

  
  for (let i of Object.entries(parsedJson)){
    console.log(i[1]);
    /*if (i[1].id === <?php $id;?>) 
    continue;*/
    //Create Card
    let card = document.createElement("div");
    //Card should have category and should stay hidden initially
    card.classList.add("card",i[1].gender,"hide");
    //image div
    /*let imgContainer = document.createElement("div");
    imgContainer.classList.add("image-container");
    //img tag
    let image = document.createElement("img");
    image.setAttribute("src", i.image);
    imgContainer.appendChild(image);
    card.appendChild(imgContainer);*/
    let container = document.createElement("div");
    container.classList.add("container");
    let user = document.createElement("h5");
    user.innerText = "NAME: "+i[1].name;
    container.appendChild(user);

    let location = document.createElement("h5");
    location.classList.add("state-name");
    location.innerText = "STATE: "+i[1].state.toUpperCase() ;
    container.appendChild(location);
    //age
    let text = i[1].dob;
    let year = Number(text.substring(0, 4));
    let age = 2023-year;
    let agetext = age.toString();


    let agethb = document.createElement("h5");
    agethb.innerText ="AGE: "+ agetext;
    container.appendChild(agethb);
        //personName
    
    //gender
    let gender = document.createElement("h5");
    gender.innerText = "GENDER: "+i[1].gender;
    container.appendChild(gender);

    let occ = document.createElement("h5");
    occ.innerText = "OCCUPATION: "+i[1].occ;
    container.appendChild(occ);

    let rel = document.createElement("h5");
    rel.innerText = "RELIGION: "+i[1].rel;
    container.appendChild(rel);

    let des = document.createElement("h5");
    des.innerText = "ABOUT ME: "+i[1].des;
    container.appendChild(des);
  
    card.appendChild(container);
    document.getElementById("persons").appendChild(card);
  }
  
  //parameter passed from button (Parameter same as category)
  function filterPerson(value) {
    //Button class code
    let buttons = document.querySelectorAll(".button-value");
    buttons.forEach((button) => {
      //check if value equals innerText
      if (value.toUpperCase() == button.innerText.toUpperCase()) {
        button.classList.add("active");
      } else {
        button.classList.remove("active");
      }
    });
  
    //select all cards
    let elements = document.querySelectorAll(".card");
    //loop through all cards
    elements.forEach((element) => {
      //display all cards on all button click
      if (value == "all") {
        element.classList.remove("hide");
      } else {
        //Check if element contains category class
        if (element.classList.contains(value)) {
          //display element based on category
          element.classList.remove("hide");
        } else {
          //hide other elements
          element.classList.add("hide");
        }
      }
    });
  }
  
  //Search button click
  document.getElementById("search").addEventListener("click", () => {
    //initializations
    let searchInput = document.getElementById("search-input").value;
    let elements = document.querySelectorAll(".state-name");
    let cards = document.querySelectorAll(".card");
  
    //loop through all elements
    elements.forEach((element, index) => {
      //check if text includes the search value
      if (element.innerText.includes(searchInput.toUpperCase())) {
        //display matching card
        cards[index].classList.remove("hide");
      } else {
        //hide others
        cards[index].classList.add("hide");
      }
    });
  });
  
  //Initially display all products
  window.onload = () => {
    filterPerson("all");
  }; 

  
  </script>
</body>
</html>
 

   