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
	<style type="text/css">
	th,td{width:50%;}
	</style>
	
 
  </head>
  <body>
 
            <div class="containerfluid bg">
               <div class="row">
                               <div class="col-md-4 col-sm-4 col-xs-12"></div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                          <!-- form start -->
                                             <form class="formcontainer2">
                                                   <table class="table table-bordered">
                                                          <tr><th>Id</th><th>Garbage_of_details</th></tr>
   
                                                             <?php
	
	                                                         $db = mysqli_connect('localhost','root','','productDetail')
                                                             or die('Error connecting to MySQL server.');
                                                             $query = "SELECT * FROM table_pd";
                                                             mysqli_query($db, $query) or die('Error querying1 database.');
                                                             $result = mysqli_query($db, $query);
                                                              while ($row = mysqli_fetch_array($result)) {
                                                              echo "<tr><td>".$row['Id']."</td>";
	                                                         echo "<td>maintenance#submaintenance1=".$row['Maintain1']."-submaintenance2=".$row['Maintain2']."-submaintenance3=".$row['Maintain3'].
	                                                            ",purchase#purchase1=".$row['Purchase1']."-purchase2=".$row['Purchase2']."</td></tr>";
	 
		}
	
                                                              ?>
                                                    </table>
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
