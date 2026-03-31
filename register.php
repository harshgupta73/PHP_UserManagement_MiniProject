<?php
    include 'db.php';

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
        $cpassword=$_POST['cpassword'];

        $sql=$conn->prepare('insert into user(username,email,password) values(?,?,?)');
        $sql->bind_param('sss',$username,$email,$password);
        if($sql->execute()){
            header('Location:login.php');
        }
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <form action="" method="POST">
                <div
                    class="container col-4 mt-5 rounded border box-shadow p-5"
                >
                    <h2>Register Page</h2>
                    <div class="mb-3 mt-5">
                        <input
                            type="text"
                            class="form-control"
                            name="username"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Username"
                        />
                    </div>

                    <div class="mb-3">
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id=""
                            aria-describedby="helpId"
                            placeholder="email"
                        />
                    </div>

                    <div class="mb-3">
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            id=""
                            aria-describedby="helpId"
                            placeholder="password"
                        />
                    </div>

                    <div class="mb-3">
                        <input
                            type="password"
                            class="form-control"
                            name="cpassword"
                            id=""
                            aria-describedby="helpId"
                            placeholder="confirm password"
                        />
                    </div>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Submit
                    </button>
                    
                    
                </div>
                
                
            </form>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>


