<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Dropdowns within a Navbar</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
	.bs-example{
    	margin: 0px;
    }
</style>
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light container-fluid">
        <div id="navbarCollapse" class="row collapse navbar-collapse" style="background-color:rgb(156, 122, 189);">
            <div class="col-sm-2 nav navbar-nav" >
                <li class="nav-item" >
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                </div>


                <div class="col-sm-2 nav navbar-nav" >
                <li class="nav-item" >
                <a href="add.php" class="dropdown-item">Land Registry</a>
                </li>
                </div>
  

                <div class="col-sm-2 nav navbar-nav" >
                <li class="nav-item" >
                <?php
                        $fhandle = fopen("number.txt","r");
                        $serial = fread($fhandle,filesize("number.txt"));
                        strval($serial);
                        $p=$serial-1;
                        echo "<a href='seedata.php?pid=$p' class='dropdown-item'>See Data</a>";
                        ?>
                </li>
                </div>
                  
               
    </div>
        </div>
    </nav>
</div>
</body>
</html>                            