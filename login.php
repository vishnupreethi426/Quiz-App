<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="crossorigin="anonymous"referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Login Page</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #b3c6ff, #99b3ff);
        }
        h1{
            text-align: center;
            padding: 20px;
            color:gray;
        }
.container {
            position: relative;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
          
        }
 .wrapper {
            position: relative;
            width: 100%;
            height: 450px;
            overflow: hidden;
        }
.form-container {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            background: white;
            border-radius: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.6s ease-in-out;
            border: 2px solid rgba(255, 255, 255, 0.4);
        }
 #signin {
            transform: translateX(0%);
        }

#signup {
            transform: translateX(100%);
        }
        #signup:target {
            transform: translateX(0%);
        }
        
        #signup:target ~ #signin {
            transform: translateX(-100%);
        }
.left-box {
            flex: 1;
            background: linear-gradient(45deg, #7a30db, brown);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 30px;
            border-radius: 30px 0 0 30px;
        }
.right-box {
            flex: 1;
            background: white;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        
        }
input {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #f4f4f4;
        }       
.btn {
            margin-top: 10px;
        }
.forgot {
            font-size: 12px;
            color: gray;
        }
.social-icons {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-bottom: 15px;
        }
        @media (max-width: 768px) {
    .container {
        width: 100%;
        height: 100%;
    }
 .wrapper {
                height: auto;
            }       
.form-container {
                flex-direction: column;
            }
 .left-box {
                border-radius: 30px 30px 0 0;
            }
        }

        </style>
    </head>
    <body>
      
    <div class="container">
        <div class="wrapper">
            <div id="signin" class="form-container">
                <div class="left-box">
                    <h2>Hello, User!</h2>
                    <p>If you don't have an account</p>
                    <a href="#signup" class="btn btn-outline-light">SIGN UP</a>
                </div>
                <div class="right-box">
                    <h2>Sign In</h2>
                    <div class="social-icons">
                        <button class="btn btn-light"><i class="fab fa-facebook"></i></button>
                        <button class="btn btn-light"><i class="fab fa-github"></i></button>
                        <button class="btn btn-light"><i class="fab fa-google"></i></button>
                    </div>
                    <p>or use your email</p>
                    <form method="POST" action="signin.php">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <a href="#" class="forgot">Forgot password?</a>
                        <button type="submit" class="btn btn-primary w-100">SIGN IN</button>
                    </form>
                </div>
            </div>
            <div id="signup" class="form-container">
                <div class="left-box">
                    <h2>Welcome, User!</h2>
                    <p>If you already have an account</p>
                    <a href="#signin" class="btn btn-outline-light">SIGN IN</a>
                </div>
                <div class="right-box">
                    <h2>Create Account</h2>
                    <div class="social-icons">
                        <button class="btn btn-light"><i class="fab fa-facebook"></i></button>
                        <button class="btn btn-light"><i class="fab fa-github"></i></button>
                        <button class="btn btn-light"><i class="fab fa-google"></i></button>
                    </div>
                    <p>or use your email.</p>
                    <form method="POST" action="signup.php">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <button type="submit" class="btn btn-primary w-100">SIGN UP</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
    </body>
    </html>



