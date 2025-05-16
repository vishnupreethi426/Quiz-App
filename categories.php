<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
body {
    background: linear-gradient(to right, #c2dbf0, #eaf2f8); 
    background-attachment: fixed;
    text-align: center;
    margin: 0;
    padding: 20px;
    color: #2b2b2b; 
    font-family: 'Poppins', sans-serif;  
    text-align: center;
    padding: 20px;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
}

h1, h2 {
    color: #003366;
    font-size: 32px;
    margin-bottom: 10px;
}
p{
    font-size: 18px;
    color: black;
    margin-bottom: 30px;
}
a {
    color: #003366;
    text-decoration: none;
    align-items: center;
    .image-caption {
    font-size: 14px;
    font-weight: bold;
    color: #333;
    margin-top: 5px;
}
}
a:hover {
    text-decoration: underline;
}

.highlight {
    color: #a58d22;
}
.image-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center; 
    align-items: center; 
    gap: 20px;
    padding: 20px;
    text-align: center; 
    display: inline-block;
    margin: 15px;
    /*check*/
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    justify-content: center; 
    align-items: center;
    gap: 20px; 
    padding: 20px;
}

.image-container img {
    max-width: 150px;
    height: auto;
    display: block;
    width: 100px; 
    display: block;
    margin: 0 auto;
    max-width: 150px;
    height: auto;
    display: block;
    margin: auto;
    border-radius: 10px;
    width: 100px; /* Adjust as needed */
    height: auto;
    display: block;
    margin: 0 auto;
    transition: transform 0.3s;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.image-container img:hover{
transform: scale(1.1); 
    box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.3); 
    cursor: pointer;
}
.image-container a {
    display: block;
    text-decoration: underline;
    font-size: 16px;
    font-weight: bold;
    color: #007BFF;
    transition: color 0.3s;
}

.image-container a:hover {
    color: #0056b3;
}

.image-container a:hover img {
    transform: scale(1.1); 
}

.quiz-carousel {
    max-width: 900px;
    margin: auto;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
}
.carousel-item img {
    height: 500px;
    object-fit: cover;
    filter: brightness(80%); 
    transition: transform 0.5s ease-in-out;
}
.carousel-item:hover img {
    transform: scale(1.05);
    filter: brightness(100%);
}
.carousel-caption {
    position: absolute;
    bottom: 30px;
    background: rgba(0, 0, 0, 0.5);
    padding: 15px;
    border-radius: 10px;
    animation: fadeIn 1s ease-in-out;
}
.carousel-caption h3 {
    font-size: 26px;
    font-weight: bold;
    color: #ffeb3b;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
}
.carousel-caption p {
    font-size: 18px;
    color: #ffffff;
    font-weight: 300;
}
.carousel-control-prev,
.carousel-control-next {
    width: 5%;
}
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 50%;
    padding: 15px;
    transition: 0.3s;
}
.carousel-control-prev:hover .carousel-control-prev-icon,
.carousel-control-next:hover .carousel-control-next-icon {
    background-color: #ffeb3b;
    transform: scale(1.2);
}
.carousel-indicators button {
    background-color: #ffeb3b;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    margin: 5px;
    transition: 0.3s;
}
.carousel-indicators .active {
    width: 15px;
    height: 15px;
    background-color: #ff9800;
}
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
@media (max-width: 768px) {
    .carousel-item img {
        height: 350px;
    }
    .carousel-caption {
        bottom: 10px;
        padding: 10px;
    }
    .carousel-caption h3 {
        font-size: 20px;
    }
    .carousel-caption p {
        font-size: 14px;
    }
}
.carousel-inner {
    width: 100%;
    max-height: 500px; 
    overflow: hidden;
}
.carousel-item img {
    width: 100%; 
    height: 500px; 
    object-fit: cover; 
    border-radius: 10px; 
}
.carousel-control-prev,
.carousel-control-next {
    width: 5%;
}
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.5); 
    border-radius: 50%;
    padding: 10px;
}
@media (max-width: 768px) {
    .carousel-item img {
        height: 300px; 
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
    <section id="categories-section">
        <h2>Quiz Categories</h2>
        <p>Explore a wide range of quiz categories tailored to challenge and entertain you. From general knowledge to niche topics, we have something for everyone!<br>We offer a variety of quizzes across multiple categories to challenge your knowledge and enhance your skills.<br>We are dedicated to providing an engaging and competitive platform for quiz enthusiasts.<br> Our moto is to make learning fun, interactive, and rewarding through exciting quiz contests across various topics.<br>We are providing more puzzles in maths,words puzzle,Logic quizzes,sudoko games,logic puzzles,number puzzles,etc...</p>
        <h2>General Knowledge</h2> 
        <div class="image-container">
            <a href="pop-culture.html"><img src="quiz kid.jpg" alt="Starter Puzzles">General Quiz</a>
            <a href="pop-culture1.html"><img src="trivageneral.jpeg" alt="Measuring Puzzles">Triva Quiz</a>
            <a href="pop-culture2.html"><img src="generalfunny.jpeg" alt="Symmetry Jigsaw">Funny Quiz</a>
            <a href="pop-culture3.html"><img src="eng riddles.jpeg" alt="Logic Puzzles">English Riddles</a>
            <a href="pop-culture4.html"><img src="differ.jpeg" alt="Einstein Puzzles">Spot difference</a>
        </div>
        <h1>Mathematics</h2>
        <div class="image-container">
            <a href="pop-culture5.html"><img src="maths riddle.jpeg" alt="Starter Puzzles">Math Riddles</a>
            <a href="pop-culture6.html"><img src="solve.jpeg" alt="Puzzle Games">Tricky math</a>
            <a href="pop-culture7.html"><img src="sudoko.jpg" alt="Measuring Puzzles">Sudoko</a>
            <a href="pop-culture8.html"><img src="https://www.mathsisfun.com/puzzles/images/thinking.svg" alt="Logic Puzzles">Logic Puzzles</a>
            <a href="pop-culture9.html"><img src="https://www.mathsisfun.com/puzzles/images/numbers.svg" alt="Einstein Puzzles">Number Puzzles</a>
        </div>
        <h1>Science and technology</h1>
        <div class="image-container">
            <a href="pop-culture10.html"><img src="science.jpg" alt="">Science Quiz</a>
            <a href="pop-culture11.html"><img src="science puzzle.jpeg" alt="Puzzle Games">Jigsaw Puzzle</a>
            <a href="pop-culture12.html"> <img src="cross.jpeg" alt="Measuring Puzzles">Science Riddles</a>
            <a href="pop-culture13.html"><img src="st.jpeg" alt="Symmetry Jigsaw">Science and Technology</a>
            <a href="pop-culture14.html"><img src="international-day-women-girls-science.jpg" alt="Einstein Puzzles">Women's Day Quiz</a> 
        </div>



        <h1>Entertainment and Pop culture</h1>
        <div class="image-container">
            <a href="pop-culture15.html"><img src="pop.jpeg" alt="Starter Puzzles">Quiz in Pop</a>
                <a href="pop-culture16.html"><img src="entertainment.jpeg" alt="Puzzle Games">Entertainment </a>
                    <a href="pop-culture17.html"><img src="pop riddle.jpg" alt="Measuring Puzzles">Riddles in Pop &Entertainment</a>
                        <a href="pop-culture19.html"><img src="jigsaw pop.jpg" alt="Symmetry Jigsaw">Words Filling  in Pop</a>
                                <a href="pop-culture18.html"><img src="hollowen.jpeg" alt="Einstein Puzzles">Halloween Triva</a>
        </div>
        <section class="quiz-carousel">
            <div id="quizCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#quizCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#quizCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#quizCarousel" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="contest.jpeg" class="d-block w-100" alt="Quiz Contest">
                        <div class="carousel-caption">
                            <h3>Test Your Knowledge</h3>
                            <p>Join the ultimate quiz competition now!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="contest1.jpeg" class="d-block w-100" alt="Trivia Night">
                        <div class="carousel-caption">
                            <h3>Exciting Trivia Night</h3>
                            <p>Challenge yourself with fun and tricky questions.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="contest2.jpeg" class="d-block w-100" alt="Game Show">
                        <div class="carousel-caption">
                            <h3>Be the Champion</h3>
                            <p>Win prizes and showcase your skills!</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#quizCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#quizCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
          </div>    
    </section>
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
