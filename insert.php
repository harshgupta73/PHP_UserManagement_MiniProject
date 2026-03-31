<?php
    session_start();
    include 'db.php';

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $pname=$_POST['pname'];
        $pquantity=$_POST['pquantity'];
        $pcategory=$_POST['pcategory'];

        $sql=$conn->prepare('insert into product(pname,pquantity,category) values(?,?,?)');
        $sql->bind_param('sis',$pname,$pquantity,$pcategory);
        if($sql->execute()){
            echo "<script> alert('data inserted');</script>";
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
             <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
             >
                <div class="container">
                    <a class="navbar-brand" href="#">Hello, <?php 
                        echo $_SESSION['username'];
                    ?> 
                    </a>
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="insert.php" aria-current="page"
                                    >Insert
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="update.php">Update</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="delete.php">Delete</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="show.php">Show</a>
                            </li>
                            
                        </ul>
                        <form class="d-flex my-2 my-lg-0" action="logout.php">
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                            >
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
             </nav>
             
        </header>
        <main>
            <form action="" method="POST">
                <div
                    class="container col-4 mt-5 rounded border box-shadow p-5"
                >
                    <div class="mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="pname"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Product name"
                        />
                    </div>

                    <div class="mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="pquantity"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Product Quantity"
                        />
                    </div>

                    <div class="mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="pcategory"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Product Category"
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
