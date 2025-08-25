<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>College Project</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing:border-box;
    }
    body{
        display: flex;
        flex-direction:column;
    }
    .main{
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        width: 100%;
    }
    #heading{
        margin: 1.2rem;
        font-size:2rem;
        font-weight:600;
    }
    #sub-heading{
        font-size:1rem;
    }
    .menu{
        display:flex;
        align-items:center;
        justify-content:space-around;
        width: 100%;
        margin: 1.5rem 0;
        background-color:black;
        height:2rem;
    }
    select {
        height: 2rem;
        width: 8rem;
        outline: none;
        border: none;
        color: #fff;
        background: black;
    }
    .menu h4 a{
        text-decoration: none;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 2rem;
        width: 8rem;
    }

    .menu h4 a:hover{
        background-color:red;
    }
</style>
<body >
    <div class="main">
        <h2 id="heading">Smt.K.B.Parekh College Of Computer Science Mahuva</h2>
        <h5 id="sub-heading">BCA Sem-5</h5>
        <div class="menu">
            <h4><a href="#">HOME</a></h4>
            <h4><a href="#">ABOUT US</a></h4>
            <h4>
                <select name="ASSIGNMENT" id="ASSIGNMENT" onChange="if(this.value !== 'null') window.location.href = this.value; else {window.location.href = 'http://localhost/php/index.php'}">
                   <option value="null" selected >-- SELECT --</option>
                   <option value="primeNumber.php">PRIME NUMBER</option>
                   <option value="Armstrong_Number.php">Armstrong_Number</option>
                </select>   
            </h4> 
            <h4><a href="#">CONTECT US</a></h4>
            <h4><a href="login_page.php">LOGIN</a></h4>
            <h4><a href="#">SIGN UP</a></h4>
            <h4><a href="#">LOG OUT</a></h4>
        </div>
    </div>
</body>
</html>