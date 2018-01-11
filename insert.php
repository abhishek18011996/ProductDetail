<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>transparent login form</title>
 
    <!-- Bootstrap -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="global.css" rel="stylesheet" type="text/css"/>
	
 
  </head>
  <body>
       <?php
            $submiterror="";
            $x=0;
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $id=$_POST["Id"];
	            $m1=$_POST["maintain1"];
	            $m2=$_POST["maintain2"];
	            $m3=$_POST["maintain3"];
	            $p1=$_POST["purchase1"];
	            $p2=$_POST["purchase2"];
	            $db = mysqli_connect('localhost','root','','productDetail')
                or die('Error connecting to MySQL server.');
                $query = "SELECT * FROM table_pd";
                mysqli_query($db, $query) or die('Error querying1 database.');
                $result = mysqli_query($db, $query);
                while ($row = mysqli_fetch_array($result)) {
	                   if( $id==$row['Id'])
		               $x++;
                       }
	        if($x==1)
		        $registererr="registration failed!id already exists";
	        else{
                $query2 ="INSERT INTO table_pd (Id,Maintain1,Maintain2,Maintain3,Purchase1,Purchase2) VALUES ('$id', '$m1', '$m2', '$m3','$p1','$p2')";
                 mysqli_query($db, $query2) or die('Error querying2 database.');
                 $result = mysqli_query($db, $query2);
                $submiterror=" Successful Entry!<a href='show.php'>Click over here!</a>";
	            }
            }
?>
 <div class="containerfluid bg">
   <div class="row">
   <div class="col-md-4 col-sm-4 col-xs-12"></div>
   <div class="col-md-4 col-sm-4 col-xs-12">
   <!-- form start -->
           <form class="formcontainer2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <h1> Product Details</h1>
                    <div class="form-group">
                       <label for="inputId">ID </label>
                       <input type="text" class="form-control" id="inputId" placeholder="Enter Your Id" name="Id"  min="1" required>
                    </div>
                    <div class="form-group">
                       <label for="maintain1">Maintenance</label>
                       <input type="number" class="form-control" id="maintain1" placeholder="Enter Maintenance1" name="maintain1"  min="1" required>
	                   <br/>
	                   <input type="number" class="form-control" id="maintain2" placeholder="Enter Maintenance2" name="maintain2"  min="1" required>
	                   <br/>
	                   <input type="number" class="form-control" id="maintain3" placeholder="Enter Maintenance3" name="maintain3"  min="1" required>
                    </div>
                    <div class="form-group">
                        <label for="purchase1">Purchase</label>
                        <input type="number" class="form-control" id="purchase1" placeholder="Enter Purchase1" name="purchase1"  min="1" required>
	                    <br/>
	                    <input type="number" class="form-control" id="purchase2" placeholder="Enter Purchase2" name="purchase2"  min="1" required>
	
                     </div>
                      </br>
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                      <br/>
                     <?php
                     echo $submiterror;
                    ?>
 
             </form>
   <!-- form  end -->
   </div>
   <div class="col-md-4 col-sm-4 col-xs-12"></div>
   </div>
   </div>
    <script src="jquery.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
