<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pridematch : Blogging</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;1,100&display=swap" rel="stylesheet">    <link rel="stylesheet" href="home.css">
   <!-- <link rel="stylesheet" href="home (1).css">-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Roboto+Mono:ital,wght@0,100;0,200;1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<style>
    *{
    margin: auto;
    padding: 0;
    box-sizing: border-box;
}
body{
    background-color: #dcb1b1;
    position: relative;;
}

::selection{
    background: #13b2af;

}


.head{
    margin-top: 50px;
    width: 100%;
    height: calc(100vh - 60px);
    background: url(wallpaperflare.com_wallpaper.jpg);
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0px;
    margin-bottom: 0px;
    /* -ms-transform-origin-y: 5%; */
}
.content{
    margin-bottom: 50px;
    text-align: baseline;
}
.heading{
    color: #000;
    font-size: 50px;
    text-transform: uppercase;
    line-height: 60px;
    margin-bottom: 80px;
    
}
.small{
    font-family: 'Dancing Script', cursive;
    font-family: 'Roboto Mono', monospace;

}
.btn{
    padding: 10px 20px;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0.7);
    color: #000;
    text-decoration: wavy;
    text-transform: capitalize;
}
.blog-section{
    width: 100%;
    padding: 50px 5vw;
    display: block;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 80px;
}
blog-section2{
    width: 100%;
    padding: 50px 5vw;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 80px;
}

.blog-image{
    width: 100%;
    height: 100%;
    background-size: cover;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 10px;
}
.overview{
    text-align: justify;
    justify-content: center;
    width: 100%;
    margin:10px 0 20px;
    line-height: 30px;
}
.blog-title{
    text-align: justify;
    justify-content: center;
}
.blog-card{
    margin-top: 0px;
}
.image{
    border-radius: 10px;
    margin:auto;
    transform:scale(1.5);
    margin:100px;
    display:block;
    
}
.logo{
    position:absolute;
    color:white;
    transform: translateX(-1150px);
    margin-top:15px;
    font-family: 'Kaushan Script', cursive;}

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
    <header class="head">
        <div class="content">
            <h1 class="heading">
                <span class="small">
                    Welcome to Pridematch Blogs
                </span>
                <span class="no-fill"> 
                    <!-- <a href="https://github.com/Pridematch" target="_blank">
                        <img src="https://img.shields.io/github/stars/Pridematch.svg?style=social" alt="GitHub stars"> -->
                    </a> 
                </span>
            </h1>
        </div>
    </header>
    <section class="blog-section">
        <div class="blog-card">
            <img src="wedding.jpeg" alt="First_Image" class="image" float="center">
            <h1 class="blog-title">
                On Indian govt's refusal to legalize same Sex Marriage</h1>
            <p class="overview">India is known for its rich culture and diversity, but unfortunately, it still lags behind in terms of LGBT rights. The Indian government's refusal to legalize same-sex marriage has been a topic of controversy and discussion for years.
                 <br>
                 <br>
                In 2018, the Supreme Court of India decriminalized homosexuality, declaring that consensual same-sex relations between adults were no longer considered a crime. The landmark judgment was a significant step forward for the LGBT community in India, but it did not address the issue of same-sex marriage.
                <br>
                <br>
                The government's stance on same-sex marriage is rooted in cultural and religious beliefs. In India, marriage is considered a sacred union between a man and a woman, and any other form of marriage is not recognized. Many conservative religious groups in India also view same-sex relationships as immoral and against traditional values.
                <br>
                <br>
                Despite growing public support for same-sex marriage, the Indian government has refused to legalize it. In 2019, the government stated that "the institution of marriage is a sacred union between a man and a woman," and that it had no plans to legalize same-sex marriage.
                <br>
                <br>
                The government's refusal to legalize same-sex marriage has significant implications for the LGBT community in India. Without legal recognition, same-sex couples are not entitled to the same legal rights and protections as heterosexual couples. For example, they cannot legally adopt children, inherit property, or access spousal benefits.
                <br>
                <br>
                Moreover, the lack of legal recognition also exposes same-sex couples to discrimination and harassment. Without legal protection, they are vulnerable to violence and abuse from family members, employers, and others who oppose their relationship.
                <br>
                <br>
                The Indian government's refusal to legalize same-sex marriage is a clear violation of human rights. It is time for the government to recognize the equal rights of all citizens, regardless of their sexual orientation or gender identity. Same-sex marriage is not a threat to society, but rather an expression of love and commitment that should be celebrated and protected.
                <br>
                <br>
                In conclusion, the Indian government's refusal to legalize same-sex marriage is a significant obstacle to the rights and well-being of the LGBT community in India. It is time for the government to recognize the importance of legal recognition and protection for all citizens, regardless of their sexual orientation or gender identity.</p>
            <!-- <a href="/" class="btn">Click to Read</a> -->
        </div>
        <div class="blog-card">
            <img src="supremecourt.jpeg" class="image">
            <h1 class="blog-title">On Removal of Section 377 in India
                In September 2018</h1>
            <p class="overview">the Supreme Court of India made history by decriminalizing homosexuality and striking down Section 377 of the Indian Penal Code. This was a landmark decision that marked a significant step forward for LGBT rights in India.
                <br>
                <br>
                Section 377 was a colonial-era law that criminalized consensual sexual acts between adults of the same sex. The law was first introduced in 1861 during British rule in India and remained in place for over 150 years, making India one of the few countries in the world to criminalize homosexuality.
                <br>
                <br>
                
                The law had far-reaching implications for the LGBT community in India. It not only made homosexuality illegal but also exposed individuals to harassment, discrimination, and violence. The fear of arrest and imprisonment kept many members of the community in the shadows, unable to live their lives openly and freely.
                <br>
                <br>
                
                The Supreme Court's decision to strike down Section 377 was a game-changer for the LGBT community in India. It recognized the fundamental right to privacy and personal liberty and affirmed that consensual sexual acts between adults, regardless of their gender or sexual orientation, should not be criminalized.
                <br>
                <br>
                
                The decision was met with widespread celebration and relief from the LGBT community and its allies. It was a long-overdue recognition of the dignity and humanity of all individuals, regardless of their sexual orientation or gender identity.
                <br>
                <br>
                
                Since the removal of Section 377, there have been some positive developments for the LGBT community in India. Many companies have implemented policies to promote diversity and inclusion, and some states have established LGBT-friendly policies, such as transgender healthcare and housing programs.
                <br>
                <br>
                
                However, there is still a long way to go in terms of full acceptance and equality for the LGBT community in India. Same-sex marriage is still not legal, and discrimination and harassment based on sexual orientation and gender identity continue to occur.
                <br>
                <br>
                
                The removal of Section 377 was a significant victory, but it is just the beginning of the fight for full LGBT rights in India. It is crucial for the government and society to work towards creating a safe and inclusive environment for all individuals, regardless of their sexual orientation or gender identity.
                <br>
                <br>
                
                In conclusion, the removal of Section 377 was a critical step towards achieving equality and justice for the LGBT community in India. It was a recognition of the fundamental human rights of all individuals, regardless of their sexual orientation or gender identity. While there is still a long way to go, the removal of Section 377 gives hope and encouragement to the LGBT community and its allies to continue the fight for full equality and acceptance.</p>
                <br>
            <!-- <a href="/" class="btn">Click to Read</a> -->
        </div>
    </section>
</body>
</html>