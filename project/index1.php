<html>
    <head>
        <title>Food Landing page</title>
       
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>
@import url('https://fonts.googleapis.com/css2?family=Corinthia:wght@700&family=Open+Sans:ital,wght@0,300;1,700&family=Source+Code+Pro:ital,wght@1,506&display=swap');
*{
    padding:0;
    margin:0;
}
body{
    width: 100%;
    height: 100%;
    background-image:url('background.png');
    background-size:cover;
    background-attachment: fixed;
}
.logo{
    width: 120px;
    height: 70px;
    background-image: url('logo.png');
    background-size:cover;
}
.top{
    width:100%;
    display: flex;
    flex-wrap: wrap;
}
.nav{
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
}
li{
    margin:0px 35px;
    font-size: 18px;
    font-weight: 500;
}
li:hover{
    color:green;
    text-decoration: underline;
    text-decoration-style:dotted ;
    text-underline-position: under;
}
.addcart_loginbutton{
    background-color:white;
    width: 170px;
    height: 40px;
    position: relative;
    right: -320px;
    margin-top:10px ;
    border-radius: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.login{
    background-color:rgb(39, 5, 174);
    color:white;
    padding:4px 2px;
    border-radius: 10px;
    margin-left: 10px;
}
.login:hover{
    background-color:red;
}
i:hover{
    color:green;
}


.heading{
    height: 80%;
    display: flex;
    align-items: center;
}
/************social media*************/
.SocialMedia{
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-left: 20px;
}
.line1,.line2{
    height: 100px;
    width: 2px;
    border-radius: 10px;
}
.line1{
    background-image: linear-gradient(white,black);
}
.line2{
    background-image: linear-gradient(black,white);
}
.SocialMedia i{
    margin:20px;
}

.content{
    margin-left: 100px;
}
p:nth-child(1){
    background-color:#1a1917;
    color:white;
    display: inline;
    padding:5px 10px;
    font-size: 18px;
    letter-spacing: 1px;
}
h2{
    font-family: 'Source Code Pro', monospace;
    font-size: 70px;
    color:green;
}
.foodplace{
    font-family: 'Source Code Pro', monospace;
    font-size: 30px;
    font-weight: 900;
}
p:nth-child(4){
    width: 400px;
    font-size: 16px;
    margin:20px 0px;
}
button{
    width: 170px;
    height: 50px;
    background-color:green;
    border:none;
    border-radius: 50px;
    color:white;
    font-size: 18px;
    letter-spacing: 1px;
}
button:hover{
    box-shadow: -5px -5px 15px rgba(0,255,0,0.5),
    5px 5px 15px rgba(0,255,0,0.5);
}


.nav {
    list-style: none;
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-color: #333;
    padding: 10px 0;
    margin: 0;
}

.nav li {
    margin: 0;
    padding: 0;
}

.nav a {
    text-decoration: none;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background-color 0.3s ease-in-out;
}

.nav a:hover {
    background-color: #555;
}

.nav li.active a {
    background-color: #555;
}

.addcart_loginbutton {
    display: flex;
    align-items: center;
}

.addcart_loginbutton i {
    margin-right: 10px;
    font-size: 24px;
}

.addcart_loginbutton .login {
    background-color: #555;
    color: #fff;
    padding: 10px 15px;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
    margin-left: 10px;
}

.addcart_loginbutton .login:hover {
    background-color: #777;
}


.addcart_loginbutton a:hover {
    color: green;
    text-decoration: underline;
    text-decoration-style: dotted;
    text-underline-position: under;
}

   </style>
   
   
    </head>
    <body>
        <div class="top">
            <div class="logo"></div>
            <div class="nav">
                <li></li>
                <li><a href="categories.php">Categories</a></li>
                <li><a href="signup.php">SignUp</a></li>
                <li><a href="login.php">Login</a></li>
   
            </div>
            <div class="addcart_loginbutton">
                <i class="fa-solid fa-cart-plus"></i>
          <a href="food-search.php">
                    <div class="login">
                        Search
                    </div>
                </a>
            </div>
            
            </div>
        </div>
        <div class="heading">
            <div class="SocialMedia">
                <div class="line1"></div>
                <a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                <div class="line2"></div>
            </div>
            <div class="content">
                <p>ONE STOP</p>
                <h2>Delicious</h2>
                <p class="foodplace">
                    Food Place+
                </p>
                <p>"Delight Your Palate, Order Your Plate: Savory Selections, Seamless Satisfaction!"
                </p>
                
                <a href="admin.php">
                    <button>Order Now</button>
                </a> 
            </div>
        </div>
        
    </body>
</html>