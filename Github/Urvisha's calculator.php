<?php 
if(isset($_POST['submit'])){

    $drop=$_POST['drop'];
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    

    switch($drop){

        case "add":
            $n3=$n1+$n2;
            break;
        case "sub":
            $n3=$n1-$n2;
            break;  

        case "mul":
            $n3=$n1*$n2;
            break;
        case "div":
            $n3=$n1/$n2;
            break;
        default:
           $n3="Please select operation ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Calculatpr</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@1,300&display=swap" rel="stylesheet">
    <style>
        
        body{
            background-color:#05445E;
        }
        
        *{
    margin: 0%;
    padding: 0%;
    font-family: 'Zilla Slab', serif;
}

.cal{
    width:700px;
    height:600px;
    background: linear-gradient(#2E8BC0,#B1D4E0);
    border-radius: 50% 80% 90% 20% / 40% 90% 60% 30% ;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
    box-shadow: 20px 6px 0px 0px rgb(128 128 128 / 26%);

}
form{
   position: absolute;
   left: 50%;
   top: 45%;
   transform: translate(-50%,-50%);

}

input{
    width:300px;
    height:40px;
    margin-top: 20px;
    border-radius: 40px;
    padding: 0px 30px;
    font-size: 18px;
    color: black;
    border: 2px solid rgba(0, 0, 0, 0.656);
    outline: none;
    transition: 0.3s;

}
input:hover{
    width:260px;
    transition: 0.3s;

}
input[type="submit"]{
    background-color:#4839B0;
    width:200px;
    height:40px;
    color: white;
    font-size: 20px;
    border: none;

}
input[type="submit"]:active{
    background-color:#4839B0;
    width:180px;
    height:40px;
    color: white;
    font-size: 20px;
    border: none;

}
select{
    width:280px;
    height:40px;
    margin-top: 20px;
    border-radius: 40px;
    padding: 0px 30px;
    font-size: 18px;
    color: black;
    border: none;
}
        
    </style>
    
</head>
<body>


<div class="cal">
    <h3 style="text-align:center;margin-top:50px;color:white"><ul>MY_PHP_CALCULATOR</ul></h3>
    <form  method="POST">

        <input type="text" name="n1" placeholder="Enter first number" value="<?php echo @$n1?>" required>
        <input type="text" name="n2" placeholder="Enter Second number"  value="<?php echo @$n2?>" required>
        <select name="drop">
            <option > select the operation</option>
            <option value="add">ADDITION</option>
            <option value="sub">SUBTRACTION</option>
            <option value="mul">MULTIPLICATION</option>
            <option value="div">DIVISON</option>
        </select> <br>
        
        <input type="submit" name="submit" >

        <h5 style="margin-top:30px;font-size:18px;">YOUR ANSWER IS: <br> <br><span style="color:red;font: size 30px;"><?php echo @$n3?></span></h5>
    </form>
    
</div>
</body>
</html>