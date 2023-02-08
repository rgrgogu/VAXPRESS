<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ErrorPage.css">
    <title>Error Page</title>
</head>
<style>
    body{
        margin: 0px;
        padding: 0px;
        font-family: 'Poppins', sans-serif;
    }
    .ErrorPage img{
        height: 300px;
    }
    .ErrorPage{
        position: absolute;
        left: 50%;
        top: 60%;
        transform: translate(-50%, -60%);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .ErrorPage p{
        color: black;
        font-size: 14px;
        width: 60%;
        text-align: center;
        margin: 5px;
        font-weight: 300;
    }
    .ErrorPage p a{
        color: #cb2424;
        font-weight: 600;
        text-decoration: underline;
    }
    .ErrorPage button{
        width: 140px;
        height: 40px;
        margin: 10px;
        background-color: transparent;
        color: #cb2424;
        text-transform: uppercase;
        outline: none;
        border: none;
        letter-spacing: 1px;
        text-decoration: underline;
    }
    button:hover{
        color: black;
        transition: all ease;
    }
</style>
<body>
    <section class="ErrorPage">
        <img src="../../files/imgs/background.png">
        <p>Sorry can't find the page you're looking for. Click here
        to come back to home page.</p>
        <a href="#">Back to Home</a>
    </section>
</body>
</html>