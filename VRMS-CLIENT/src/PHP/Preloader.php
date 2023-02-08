<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<style>
    body{
        background-color: #eee;
        animation: fadeInAnimation ease 3s;
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
    }

    .whole{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        height: 100vh;
    }
    .logo{
        border: 0 soild transparent;
        border-radius: 50%;
        text-align:center;
    }
    .wrapper{
        width: 100%;
    }
    h2{
        font-family: "arial";
        color: #cb2424;
        text-align: center;
    }
    .loading-bars{
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .bar{
        width: 20px;
        height: 90px;
        background: linear-gradient(45deg, #cb2424, white);
        margin: 20px;
        animation: wave 1.2s linear infinite;
        border-radius: 20px;
    }
    .bar:nth-child(2){
        animation-delay: 0.2s;
    }

    .bar:nth-child(3){
        animation-delay: 0.4s;
    }

    .bar:nth-child(4){
        animation-delay: 0.6s;
    }

    .bar:nth-child(5){
        animation-delay: 0.8s;
    }

    .bar:nth-child(6){
        animation-delay: 1s;
    }

    @keyframes wave {
        0%{
            transform: scale(0);
        }

        50%{
            transform: scale(1);
        }

        100%{
            transform: scale(0);
        }
    }

    @keyframes fadeInAnimation {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
</style>
<body>
    <div class="whole">
        <div class="logo">
            <img src="../../files/imgs/logo.png" alt="Logo">
            <h2>"Stay protected, stay organized with VAXpress"</h2>
        </div>
        <div class="wrapper">
            <div class="loading-bars">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </div>
</body>
<script>
    setTimeout(function () {
        $(".loader_bg").fadeToggle();
        window.location.href = "./Home.php";
    }, 5500);
</script>
</html>