
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Quiz Webpage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(45deg,rgb(169, 28, 212),rgb(61, 21, 155));
            box-sizing: border-box;
            color: white;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
        }
        h1 {
            font-size: 36px;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
        }
        .video-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        .video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .about-item hr {
    width: 50%; 
    border: 2px solid #ffffff;
    transition: width 0.4s ease-in-out, border-color 0.4s ease-in-out; 
}
.about-item:hover hr {
    width: 80%;
    border-color: #ffcc00;
}
.quiz-category {
    background: #bdb6b6;
    padding: 15px;
    border: 2px solid purple;
    border-radius: 10px;
    display: inline-block;
    width: 70%; 
    margin: 20px auto; 
    padding: 20px; 
    font-size: 16px;
}

.quiz-category .categories a {
    font-weight: bold;
    color: purple;
    text-decoration: underline;
}
.quiz-category .categories a:hover {
color:#4d4f55;

}
.text-danger {
    color: yellow;
}
.text-danger1{
    color:red;
}
footer{
    width:100%;
    display:flex;
    flex-wrap:wrap;
    margin-top: 150px;
    padding: 60px 10%;
    background: #2d2e33;
    display: flex;
    justify-content: space-around;
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
    background:rgb(93, 39, 192);
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
        <h1>About Us</h1>
        <p>We offer a variety of quizzes across multiple categories to challenge your knowledge and enhance your skills.<br>We are dedicated to providing an engaging and competitive platform for quiz enthusiasts.<br> Our moto is to make learning fun, interactive, and rewarding through exciting quiz contests across various topics.<br>We are providing more puzzles in maths,words puzzle,Logic quizzes,sudoko games,logic puzzles,number puzzles,etc...<br>
        Join us today and test your expertise in different topics while having fun!<br>
    </div>
    <div id="about-2">
        <div class="content-box-lg">
            <div class="container1">
                <div class="row">
                    <div class="col-md-4">
                        <div class="about-item text-center">
                            <i class="fa fa-book"></i>
                            <h3>MISSION</h3>
                            <hr>
                            <p> Our mission is to make learning fun and engaging through interactive quizzes.<br>We offer a variety of quizzes across multiple categories to challenge your knowledge and enhance your skills.<br>We are dedicated to providing an engaging and competitive platform for quiz enthusiasts.<br> Our moto is to make learning fun, interactive, and rewarding through exciting quiz contests across various topics. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-item text-center">
                            <i class="fa fa-video"></i>
                            <h3>LEARN MORE ABOUT US</h3>
                            <hr>
                            <div class="video">
                                 <video controls>
                                    <source src="quizvideo.mp4" type="video/mp4">
    </video>
</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-item text-center">
                            <i class="fa fa-globe"></i>
                            <h3>VISSION</h3>
                            <hr>
                            <p>To become the world's leading platform for interactive learning through quizzes, making education fun, engaging, and accessible for everyone. We strive to inspire curiosity, promote knowledge sharing, and empower learners of all ages to expand their horizons through gamified experiences.Provides an engaging experience for students, professionals, and trivia enthusiasts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="quiz-category">
    <h3><span class="text-danger">Win</span> <span class="text-danger1">Prizes</span> & <span class="text-danger">Certificates</span></h3>
        <p class="categories">
            <a href="pop-culture.html">General Quiz</a> | <a href="pop-culture1.html">Triva Quiz</a> | <a href= "pop-culture2.html">FunnyQuiz</a> | <a href="pop-culture3.html">English Riddles</a> | <a href="pop-culture4.html">Spot difference</a> |
            <a href="pop-culture5.html">Math Riddles</a> | <a href="pop-culture6.html">Tricky math</a> | <a href="pop-culture7.html">Sudoko</a> | <a href="pop-culture8.html">Logic Puzzles</a> | <a href="pop-culture9.html">Number Puzzles</a> |
            <a href="pop-culture10.html">Science Quiz</a> | <a href="pop-culture11.html">Jigsaw Puzzle</a> | <a href="pop-culture12.html">Science Riddles</a> | <a href="pop-culture13.html">Science and technology</a> | <a href="pop-culture14.html">Women's Day Quiz</a>  | <a href="pop-culture15.html">Quiz in Pop</a> | <a href="pop-culture16.html">Entertainment</a>  | <a href="pop-culture17.html">Riddles in Pop& Entertainment</a> | <a href="pop-culture19.html">Words Filling in Pop</a> | <a href="pop-culture18.html">Halloween Triva</a>
        </p>
    </div>

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
            <h4>Follow Us</h4>
            <div class="links">
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
        
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


