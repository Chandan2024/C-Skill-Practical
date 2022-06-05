<DOCTYPE html>
<head>
    <title>Calculator</title>
    <style>
        body{
            background-image:linear-gradient(to right,white ,pink);
        }
        h1{
            text-align:center;
        }
      .button:hover{
          color:white;
          background-color:pink;
      }
        input{

      border:2px solid pink;
      border-radius:10px 10px 10px 10px;
        }
        </style>
</head>

    <?php
     $first=$_POST['first'];
     $second=$_POST['second'];
     $operator=$_POST['operator'];
     $result='';

     if(is_numeric($first) && is_numeric($second))
     {
         switch($operator)
         {
             case "sum":
                $result=$first+$second;
                break;
             case "sub":
                $result=$first-$second;
                break;
             case "mul":
                $result=$first*$second;
                break;
             case "div":
                $result=$first/$second;
                break;
       }
     }
    ?>
<body>
    <h1>Calculator</h1>
    <div id="page-wrap">
       <form action="" method="post" id="quiz-form">
           <p>
               <input type="number" name="first" id="first" required="required" value="<?php echo $first; ?>" /> 
           <b>First Number</b><br>
           </p>
           <p>
               <input type="number"  name="second" id="second" required="required" value="<?php echo $second; ?>" /> 
           <b>Second Number</b><br>
           </p>
           <p>
               <input readonly="readonly" name="result" value="<?php echo $result; ?>" />
           <b>Result</b><br>
           </p>

       <input type="submit" class="button" name="operator" value="sum" />
       <input type="submit" class="button" name="operator" value="sub" />
       <input type="submit" class="button" name="operator" value="mul" />
       <input type="submit" class="button" name="operator" value="div" />
    </form>
    </div>
</body>
</html>



