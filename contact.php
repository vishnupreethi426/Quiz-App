<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Us Page Design using Html CSS</title>
    
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body,
input,
textarea {
  font-family: "Poppins", sans-serif;
}

.container {
  position: relative;
  width: 100%;
  min-height: 100vh;
  padding: 2rem;
  background-color: #fafafa;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.form {
  width: 100%;
  max-width: 820px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
  z-index: 1000;
  overflow: hidden;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}

.contact-form {
  background-color:rgb(169, 28, 212);
  position: relative;
}

.circle {
  border-radius: 50%;
  background: linear-gradient(135deg, transparent 20%, rgb(61, 21, 155));
  position: absolute;
}

.circle.one {
  width: 130px;
  height: 130px;
  top: 130px;
  right: -40px;
}

.circle.two {
  width: 80px;
  height: 80px;
  top: 10px;
  right: 30px;
}

.contact-form:before {
  content: "";
  position: absolute;
  width: 26px;
  height: 26px;
  background-color:rgb(61, 21, 155) ;
  transform: rotate(45deg);
  top: 50px;
  left: -13px;
}

form {
  padding: 2.3rem 2.2rem;
  z-index: 10;
  overflow: hidden;
  position: relative;
}

.title {
  color: #fff;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
  margin-bottom: 0.7rem;
}

.input-container {
  position: relative;
  margin: 1rem 0;
}

.input {
  width: 100%;
  outline: none;
  border: 2px solid #fafafa;
  background: none;
  padding: 0.6rem 1.2rem;
  color: #fff;
  font-weight: 500;
  font-size: 0.95rem;
  letter-spacing: 0.5px;
  border-radius: 25px;
  transition: 0.3s;
}

textarea.input {
  padding: 0.8rem 1.2rem;
  min-height: 150px;
  border-radius: 22px;
  resize: none;
  overflow-y: auto;
}

.input-container label {
  position: absolute;
  top: 50%;
  left: 15px;
  transform: translateY(-50%);
  padding: 0 0.4rem;
  color: #fafafa;
  font-size: 0.9rem;
  font-weight: 400;
  pointer-events: none;
  z-index: 1000;
  transition: 0.5s;
}

.input-container.textarea label {
  top: 1rem;
  transform: translateY(0);
}

.btn {
  padding: 0.6rem 1.3rem;
  background-color: #fff;
  border: 2px solid #fafafa;
  font-size: 0.95rem;
  color:rgb(169, 28, 212) ;
  line-height: 1;
  border-radius: 25px;
  outline: none;
  cursor: pointer;
  transition: 0.3s;
  margin: 0;
}

.btn:hover {
  background-color: transparent;
  color: #fff;
}

.input-container span {
  position: absolute;
  top: 0;
  left: 25px;
  transform: translateY(-50%);
  font-size: 0.8rem;
  padding: 0 0.4rem;
  color: transparent;
  pointer-events: none;
  z-index: 500;
}

.input-container span:before,
.input-container span:after {
  content: "";
  position: absolute;
  width: 10%;
  opacity: 0;
  transition: 0.3s;
  height: 5px;
  background-color:rgb(61, 21, 155) ;
  top: 50%;
  transform: translateY(-50%);
}

.input-container span:before {
  left: 50%;
}

.input-container span:after {
  right: 50%;
}

.input-container.focus label {
  top: 0;
  transform: translateY(-50%);
  left: 25px;
  font-size: 0.8rem;
}

.input-container.focus span:before,
.input-container.focus span:after {
  width: 50%;
  opacity: 1;
}

.contact-info {
  padding: 2.3rem 2.2rem;
  position: relative;
}

.contact-info .title {
  color:rgb(61, 21, 155) ;
}

.text {
  color: #333;
  margin: 1.5rem 0 2rem 0;
}

.information {

  color: #555;
  margin: 0.7rem 0;
  align-items: center;
  font-size: 0.95rem;
}
.information li {
    list-style: none;  
    margin-bottom: 15px;
    font-size: 12px;
}

.information i {
    color: rgb(169, 28, 212); 
    margin-right: 8px; 
}

.information a {
    text-decoration: none;
    color: #333; 
    font-weight: bold;
}

.information a:hover {
    color:rgb(61, 21, 155); 
}

.icon {
    color:rgb(169, 28, 212);
  width: 28px;
  margin-right: 0.7rem;
}

.social-media {
  padding: 2rem 0 0 0;
}

.social-media p {
  color: #333;
}

.social-icons {
  display: flex;
  margin-top: 0.5rem;
}

.social-icons a {
  width: 35px;
  height: 35px;
  border-radius: 5px;
  background: linear-gradient(45deg,rgb(169, 28, 212),rgb(61, 21, 155));
  color: #fff;
  text-align: center;
  line-height: 35px;
  margin-right: 0.5rem;
  transition: 0.3s;
}

.social-icons a:hover {
  transform: scale(1.05);
}

.contact-info:before {
  content: "";
  position: absolute;
  width: 110px;
  height: 100px;
  border: 22px solid rgb(169, 28, 212);
  border-radius: 50%;
  bottom: -77px;
  right: 50px;
  opacity: 0.3;
}

.big-circle {
  position: absolute;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: linear-gradient(to bottom,rgb(169, 28, 212),rgb(61, 21, 155));
  bottom: 50%;
  right: 50%;
  transform: translate(-40%, 38%);
}

.big-circle:after {
  content: "";
  position: absolute;
  width: 360px;
  height: 360px;
  background-color: #fafafa;
  border-radius: 50%;
  top: calc(50% - 180px);
  left: calc(50% - 180px);
}

.square {
  position: absolute;
  height: 400px;
  top: 50%;
  left: 50%;
  transform: translate(181%, 11%);
  opacity: 0.2;
}

@media (max-width: 850px) {
  .form {
    grid-template-columns: 1fr;
  }

  .contact-info:before {
    bottom: initial;
    top: -75px;
    right: 65px;
    transform: scale(0.95);
  }

  .contact-form:before {
    top: -13px;
    left: initial;
    right: 70px;
  }

  .square {
    transform: translate(140%, 43%);
    height: 350px;
  }

  .big-circle {
    bottom: 75%;
    transform: scale(0.9) translate(-40%, 30%);
    right: 50%;
  }

  .text {
    margin: 1rem 0 1.5rem 0;
  }

  .social-media {
    padding: 1.5rem 0 0 0;
  }
}

@media (max-width: 480px) {
  .container {
    padding: 1.5rem;
  }

  .contact-info:before {
    display: none;
  }

  .square,
  .big-circle {
    display: none;
  }

  form,
  .contact-info {
    padding: 1.7rem 1.6rem;
  }

  .text,
  .information,
  .social-media p {
    font-size: 0.8rem;
  }

  .title {
    font-size: 1.15rem;
  }

  .social-icons a {
    width: 30px;
    height: 30px;
    line-height: 30px;
  }

  .icon {
    width: 23px;
  }

  .input {
    padding: 0.45rem 1.2rem;
  }

  .btn {
    padding: 0.45rem 1.2rem;
  }
}
footer{
    width:100%;
    display:flex;
    flex-wrap:wrap;
    margin-top: 150px;
    padding: 60px 10%;
    background: #2d2e33;
    display: flex;
    justify-content: space-around; /* Adjusts spacing between sections */
    padding: 20px;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}
ul{
    list-style:none;
}
.footer-col{
    width:20%;

}
.footer-col h4{
    position: relative;
    margin-bottom: 30px;
    font-size: 22px;
    font-weight: 400;
    color:#f1bc0d;
    text-transform: uppercase;
}
.footer-col h4::after{
    content:'';
    position:absolute;
    left: 0;;
    background: #27c0ac;
    bottom: -6px;
    height: 2px;
    width:120px;
}

.footer-col p{
    text-align: center;
    margin-top: 8px;
    line-height: 21px;
    color:#bdb6b6;
    
}
.footer-col p::after{
    content:'';
    position:absolute;
    left: 0;
    background: #27c0ac;
    bottom: -6px;
    height: 2px;
    width:120px;
}
ul li:not(:last-child){
    margin-bottom: 8px;
}
ul li a{
    display: block;
    font-size: 16px;
    color:#bdb6b6;
    transition: 0.3s;
    text-decoration: none;
}
ul li a:hover{
    color:white;
    padding-left: 5px;
}
.links a{
    display:inline-block;
    height:50px;
    width:50px;
    color:white;
    background: rgba(40,130,214,0.8);
    text-align: center;
    line-height: 44px;
    border-radius: 50%;
    transition: 0.3s;
    
}
.links a:hover{
    color:#4d4f55;
    background: white;
}
    </style>
</head>
<body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
          We'd love to hear from you! Whether you have questions, feedback, or
           need assistance, feel free to reach out to us!
          </p>

          <div class="info">
            <div class="information">
            <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> Address: 123, Quiz Street, Quiz Land.</a></li>
            <li><a href=""><i class="fa fa-envelope" aria-hidden="true"></i> Email: support@QuizWorld.com</a></li>
            <li><a href=""><i class="fa fa-phone" aria-hidden="true"></i> Phone: (123) 456-7890</a></li>

            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="index.html" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>
    <script src="app.js"></script>
    <footer>
        <div class="footer-col">
            <h4>Quick link</h4>
            <ul>
            <li><a href="index.php">Home</a></li>
    <li><a href="about.php" target="_blank">About us</a></li>
    <li><a href="categories.php" target="_blank">Quiz categories</a></li>
    <li><a href="contact.php" target="_blank">Contact Us</a></li>
    <li><a href="login.php" target="_blank">Login</a></li>   
            </ul>
        </div>
        <div class="footer-col">
            <h4>Contact US</h4>
            <ul>
                <li><a href="">Have any questions or need support? Feel free to contact to us!</a></li>
                <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> Address: 123, Quiz Street, Quiz Land.</a></li>
                <li><a href=""><i class="fa fa-phone" aria-hidden="true"></i>Phone: (123) 456-7890</a></li>
                <li><a href=""><i class="fa fa-envelope" aria-hidden="true"></i>Email: support@QuizWorld.com</a></li>
            </ul>
        </div>
    
        <div class="footer-col">
            <h4>Follow US</h4>
            <div class="links">
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
        
    </footer>
</body>
</html>