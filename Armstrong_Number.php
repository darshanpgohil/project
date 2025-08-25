<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operation</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing:border-box;
        }
        body
		{
			display:flex;
            flex-direction:column;
			align-items:center;
			justify-content:center;
		}

        .operations{
            background: linear-gradient(to right,yellow,red);
        }

        .operations table{
            margin:1rem;
        }
        .operations h1{
            text-align: center;
            font-size: 2.5rem;
             margin: 2rem;
        }

        td{
            padding: 1rem;
        }

        #in{
            font-size: 1.5rem;
        }

        input{
            padding: 0.8rem;
            border: none;
            border-radius: 0.2rem;
        }

        button{
            padding: 0.8rem;
            border-radius: 0.2rem;
            margin: 0.8rem;
            margin-left: 2rem;
        }
        #btn{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #arm{
            margin: 3rem;
        }
    </style>
</head>
<body>
    <div class="operations">
    <form action="" method="post">
        <h1>Armstrong Number</h1>
        <table>
            <tr>
            <td id="in">Number : </td>
            <td><input type="text" placeholder="Enter The Number" name='number'></td>
            </tr>
             <tr>
            <td id="btn" colspan='2'>
                <button type="submit" name='submits'>Submit</button>
            </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>

<?php
    if($_POST)
    {
        $number = $_POST['number'];
         
        if(isset($_POST['submits']))
        {
          $rem = 0;
          $num = $number;
          for(;$number>0;$number/=10)
          {
            $digit = $number % 10;
            $rem +=($digit*$digit*$digit);
          }
          
          if($num == $rem)
          {
            echo "<h1 id='arm'>This Number Is Armstrong Number : {$rem}</h1>";
          }
          else{
            echo "<h1>This Number Is Not Armstrong Number : {$rem}</h1>";
          }
        }
    }
?>