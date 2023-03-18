<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
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
  #products {
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
    #products {
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
  
    </style>
  </head>
  <body>
    <div class="wrapper">
      
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
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
        <button class="button-value" onclick="filterProduct('all')">All</button>
        <button class="button-value" onclick="filterProduct('gay')">
          gay
        </button>
        <button class="button-value" onclick="filterProduct('lesbian')">
          lesbian
        </button>
        <button class="button-value" onclick="filterProduct('bisexual')">
          bisexual
        </button>
        <button class="button-value" onclick="filterProduct('transman')">
          transman
        </button>
        <button class="button-value" onclick="filterProduct('transwoman')">
        transwoman
        </button>
        <button class="button-value" onclick="filterProduct('asexual')">
            asexual
          </button>
      </div>
      <div id="ppl">
      <div id="products"></div>
      
      
      </div>
    </div>
    <!-- Script -->
    <script>
      let products = {
    data: [
      {
        productName: "Rajasthan",
        category: "gay",
        price: "20",
        image: "image1.jpg",
        personName: "Sahaj shrivastav",
        gender:"gay"
      },
      {
        productName: "Uttar Pradesh",
        category: "lesbian",
        price: "25",
        image: "lesbian25.jpeg",
        personName: "Richa Singh",
        gender:"lesbian"
      },
      {
        productName: "odisha",
        category: "bisexual",
        price: "24",
        image: "trans.jpg",
        personName: "Anuroop trivedi",
        gender:"bisexual"
      },
      {
        productName: "karnataka",
        category: "transman",
        price: "31",
        image: "gay.jpg",
        personName: "Raman ",
        gender:"transman"
      },
      {
        productName: "gujarat",
        category: "bisexual",
        price: "22",
        image: "girl.jpeg",
        personName: "Preeti Goyal",
        gender:"bisexual"
      },
      {
        productName: "Bihar",
        category: "transwoman",
        price: "23",
        image: "transwoman23.webp",
        personName: "Priya",
        gender:"transwoman"
      },
      {
        productName: "Maharashtra",
        category: "asexual",
        price: "27",
        image: "transman.jpeg",
        personName: "Kirti Bansal",
        gender:"asexual"
      },
      {
        productName: "Odisha",
        category: "lesbian",
        price: "29",
        image: "trans2.jpeg",
        personName: "Iti Mohan",
        gender:"lesbian"

      },
    ],
  };
  
  for (let i of products.data) {
    //Create Card
    let card = document.createElement("div");
    //Card should have category and should stay hidden initially
    card.classList.add("card", i.category, "hide");
    //image div
    let imgContainer = document.createElement("div");
    imgContainer.classList.add("image-container");
    //img tag
    let image = document.createElement("img");
    image.setAttribute("src", i.image);
    imgContainer.appendChild(image);
    card.appendChild(imgContainer);
    //container
    let container = document.createElement("div");
    container.classList.add("container");
    //product name
    let user = document.createElement("h5");
    user.innerText = "NAME: "+i.personName;
    container.appendChild(user);

    let name = document.createElement("h5");
    name.classList.add("product-name");
    name.innerText = "STATE: "+i.productName.toUpperCase();
    container.appendChild(name);
    //age
    let price = document.createElement("h5");
    price.innerText ="AGE: "+ i.price;
    container.appendChild(price);
    //personName
    
    //gender
    let gender = document.createElement("h5");
    gender.innerText = "GENDER: "+i.gender;
    container.appendChild(gender);
  
    card.appendChild(container);
    document.getElementById("products").appendChild(card);
  }
  
  //parameter passed from button (Parameter same as category)
  function filterProduct(value) {
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
      //display all cards on 'all' button click
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
    let elements = document.querySelectorAll(".product-name");
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
    filterProduct("all");
  };
  
  </script>
  </body>
</html>