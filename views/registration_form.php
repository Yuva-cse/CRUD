<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        h3{
            font-size:1.5em;
        }
        input{
            outline:none;
            border-radius:5px;
            padding:5px;
            text-align:center;
            font-size:20px;
            margin:auto;
            width:100%;
        }
        form{
            margin:auto;
            width:300px;
            border-radius:5px;
            box-sizing:border-box;
            color:black;
            font-size:1.2em;
            background-color:rgba(0,0,0,.3);
            box-shadow:10px 10px 20px black;
        }
        button{
            margin-bottom:10px;
        }
    </style>
</head>
<body>
    <div class="form">
    <center>
    <?php
    if(isset($msg)){
        echo '<h3>'.$msg.'</h3>';
    }
    ?>
    <form action="<?=base_url('register/insertData/')?>" method="post">
        <table cellspacing="20">
            <tr>
                <td for="name">Name</td>
                <td><input type="text" name="name" autocomplete="off" required></td>
            </tr>
            <tr>
                <td for="domain">Domain</td>
                <td><input type="text" name="domain" autocomplete="off" required></td>
            </tr>
            <tr>
                <td for="volunteer_name">Volunteer Name</td>
                <td><input type="text" name="volunteer_name" autocomplete="off" required></td>
            </tr>
            <tr>
                <td for="email">Email ID</td>
                <td><input type="email" name="email" autocomplete="off" required></td>
            </tr>
            <tr>
                <td for="phone">Phone Number</td>
                <td><input type="tel" minlength="10"  maxlength="10" name="phone" autocomplete="off" required></td>
            </tr>
        </table>
        <button type="submit">Insert
        </button>
    </form>
    </div>
    </center>
</body>
</html>