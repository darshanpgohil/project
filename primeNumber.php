
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
            font-size: 3rem;
            font-size:2.5rem;
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
        }
        #btn{
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <?php
        include "project1.php";
    ?>
    <div class="operations">
    <form action="" method="post">
        <h1>Prime Number Operation</h1>
        <table>
            <tr>
            <td id="in">ENTER NUMBER : </td>
            <td><input type="text" placeholder="Enter The First Number" name='number'></td>
            </tr>
            <tr>
            <td id="btn">
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
        $flag = true; 
        if(isset($_POST['submits']))
        {
          for($i=2;$i<$number;$i++)
          {
            if($number % $i == 0)
            {
                $flag = false;
            }
          }
        }

        if($flag == true)
        {
            echo $number . ' Is Prime Number'; 
        }
        else{
            echo $number . ' Is Not A Prime Number';
        }
    }
?>