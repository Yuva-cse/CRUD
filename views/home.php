<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style>
        body{
            background-color:black;
            color:white;
        }
        .homepage h3{
            font-size:2em;
            width:100px;
            margin:auto;
        }
        .nav{
            width:200px;
            margin:auto;
            padding:50px;
            height:200px;
            
            
            
        }
        a{
            text-decoration:none;
            font-size:1.2em;
            background-color:lightblue;
            border-radius:5px;
            width:100%;
            margin:50px;
            padding:5px;
        }
        .homepage{
            margin-top:100px;
        }
    </style>
</head>
<body>
    <div class="homepage">    
        <h3>Home</h3>
        <div class="nav">
            <a href="<?=base_url('register/intern')?>">Insert Data</a><br><br>
            <a href="<?=base_url('register/read')?>" id="read">Read</a></div>
        </div>
</body>
</html>