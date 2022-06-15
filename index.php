<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body 
{
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center; 
    align-items: center;
    min-height: 100vh;
    background: #060c21;
    font-family: 'Poppins', sans-serif;
}

.box{
    border-radius: 10px;
    position: relative;
    width: 300px;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #060c32;
    transition: 0.3s all;
}
.box:hover {
    transform: scale(1.1);
    cursor: pointer;
    /* transition: 0s; */
}

.box:before
{
    content: '';
    position: absolute;
    top: -4px;
    left: -4px;
    right: -4px;
    bottom: -4px;
    background: #fff;
    z-index: -1;
    border-radius: 13px;
}

.box:after
{
    content: '';
    position: absolute;
    top: -4px;
    left: -4px;
    right: -4px;
    bottom: -4px;
    background: #fff;
    z-index: -2;
    filter: blur(40px);
    border-radius: 13px;
}

.box:before,
.box:after{
    background: linear-gradient(35deg, #89ff00, #e400ff,#00bcd4);
    animation-name: animate;
    animation-timing-function: linear;
    animation-duration: 2s;
    animation-delay: 0;
    animation-iteration-count: infinite;
}

.content {
    font-size: 50px;
    width: 100%;
    height: 100%;
    border-radius: 10px;
    background-image: linear-gradient(45deg, #01020a, #060c30);
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}
@keyframes animate {
    0% {  background: linear-gradient(0deg, #89ff00, #e400ff,#00bcd4); }
    50% {  background: linear-gradient(49deg, #89ff00, #e400ff,#00bcd4); }
    100% {  background: linear-gradient(90deg, #89ff00, #e400ff,#00bcd4); }
}
input[type]{
    height: 20px;
    font-weight: bold;
    
}
select{
    width: 175px;
    height: 28px;
    font-weight: bold:
}
    </style>
</head>
<body>
    <div class="box">
        <div class="content">
            <div>
                <form action="insert.php" method="post">
                    <input type="text" name="name" placeholder="Name">
                    <br>
                    <select name="nationality" id="">
                        <option disabled selected value value="">Choose your country</option>
                        <option value="Ugandan">Ugandan</option>
                        <option value="Kenyan">Kenyan</option>
                        <option value="Rwandese">Rwandese</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Congo">Congo</option>
                        <option value="Ethiopia">Ethiopia</option>
                    </select>
                    <br>
                    <input type="email" name="email" placeholder="Email">
                    <br>
                    <input type="dial" name="phone" placeholder="Phone">
                    <br>
                    <button name="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>