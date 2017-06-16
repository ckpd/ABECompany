<?php require 'functions.php'; ?>
<?php require_once 'initData.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>ABE Company</title>
        <link href="public/style.css" type="text/css" rel="stylesheet"/>
        <!--        initialize sample data-->
        <?php initData(); ?>
    </head>
    <body>
       <div class="container">
          <h1>ABE COMPANY Database</h1>
           <?php
            print "<table>".
                    "<tr>
                    <th>No.</th>
                    <th>Company Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Email Address</th>
                    <th>City</th>
                    <th>Parish</th>
                    </tr>";
            
            $rows = db_select("SELECT * FROM comp");
            if($rows === false){
                    print "<tr>";
                    print "<td> No data in database</td>";
            }else{
                $rowCount = 1;
                foreach($rows as $x){
                    print "<tr>";
                    print "<td>". $rowCount . "</td>";
                    print "<td>". $x['company_name'] . "</td>";
                    print "<td>". $x['address'] . "</td>";
                    print "<td>". $x['phone_number'] . "</td>";
                    print "<td>". $x['email_address'] . "</td>";
                    print "<td>". $x['city'] . "</td>";
                    print "<td>". $x['parish'] . "</td>";
                    print "</tr>";

                    $rowCount++;
                }
            }
           
            print "</table>";
           
           
?>   
         </div>
         <p>@ 2017 All rights reserved charlie@stu.ucc.edu.jm</p>
    </body>
</html>