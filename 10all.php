<!DOCTYPE html> 
 
    <head> 
       <title>Date</title> 
       <style> 
        h1{ 
            text-align: center; 
        } 
        date{ 
            color: green; 
        } 
       </style> 
    </head> 
    <body> 
    <h1>Today's date is 
    <date> 
    <?php 
    $today= date("d-m-Y"); 
    echo $today; 
    ?> 
    </date> 
    </h1> 
    
    </body> 
   </html> 

prime

  <html>
    <head>
        <title>prime or not </title>
</head>
    <body>
        <h1>PRIME CHECKER </h1>
        <form method="post">
            <lable>ENTER A NUMBER</label>
            <input name="num" required>
        <button type="submit">Check</button>
</form>
<p>
    <?php
      if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $num=$_POST["num"];
            if($num == 1 || $num == 0)
                {
                    echo "$num is either prime nor not prime  ";
                    return;
                }
            $flag=0;
            for($i=2;$i<=sqrt($num);$i++)
                {
                    if($num % $i==0)
                        {
                            $flag=1;
                            break;
                        }

                }
            if($flag==0)
                {
                    echo "$num is a prime number";
                }
            else
                {
                    echo "$num is not prime number";
                }
        }

    ?>

</p>



    
</body>
</html>
//post (_post)
