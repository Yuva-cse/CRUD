<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <style>
        /* *{
            margin:0px;
            padding:0px;
        } */
        table,tr,th,td{
            margin:auto;
            padding:10px;
            border:1px solid black;
            border-collapse:collapse;
        }
        .table{
            border:1px solid black;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        th{
            background-color:lightblue;
            color:black;
        }
        td{
            background-color:orange;
            color:black;
        }
        #edit{
            background-color:lightgreen;
            color:black;
            padding:5px;
            margin:5px;
            border-radius:5px;
            text-decoration:none;
        }
        #delete{
            background-color:red;
            color:white;
            padding:5px;
            margin:5px;
            border-radius:5px;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <?php
    if(isset($data)){
    
        ?>
        <form action="<?=base_url('register/update/')?>" method="post">
            <table cellspacing="20">
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id" value=<?=$data[0]->id?> readonly=""></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value=<?=$data[0]->name?>></td>
                </tr>
                <tr>
                    <td>Domain</td>
                    <td><input type="text" name="domain" value=<?=$data[0]->domain?>></td>
                </tr>
                <tr>
                    <td>Volunteer Name</td>
                    <td><input type="text" name="volunteer_name" value=<?=$data[0]->volunteer_name?>></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value=<?=$data[0]->email?>></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="tel" name="phone" value=<?=$data[0]->phone?> minvalue="10" maxvalue="10"></td>
                </tr>
            </table>
            <br>
                <center><button type='submit'>Update</button></center>
        </form>
    <?php
    }
    else{
        ?>
        <div class='table'>
        <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Domain</th>
            <th>volunteer Name</th>
            <th>E-mail</th>
            <th>Phone No</th>
            <th>Action</th>
        </tr>
    <?php
    if('table'){
        foreach($table as $row){
            ?>
            <tr>
                <td><?=$row->id?></td>
                <td><?=$row->name?></td>
                <td><?=$row->domain?></td>
                <td><?=$row->volunteer_name?></td>
                <td><?=$row->email?></td>
                <td><?=$row->phone?></td>
                <td><div><a href="<?=base_url('register/edit/'.$row->id)?>" id="edit">Edit</a>
                </div><br>
                <div>
                    <a href="<?=base_url('register/delete/'.$row->id)?>" id="delete">Delete</a>
                    </div>
                </td>
            </tr>
            <?php
        }
    }
    ?>
    </table>
        </div>
         
        <?php
    }
    ?>
   
</body>
</html>