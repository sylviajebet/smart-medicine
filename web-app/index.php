<?php
	require ('connection.php');
?>

	<html>

		<head>
            <title>SmartMed</title>
		    <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        </head>
		
		<body>
            <div class="container">
            <h2>Patient Records/h2>
            <p>Mock table here</p>            
            <table class="table table-striped">

            <?php
                 //Check database
                while count is in dosages(dose_id){
                    $id=count;
                    $sql="SELECT * FROM dosages WHERE id='$id'";
                    $result=mysqli_query($db,$sql);
                    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                    
                    if(mysqli_num_rows($result) == 1)
                    {
            ?>

                <thead>
                    <tr>
                    <th>Patient Name</th>
                    <th>Medicine</th>
                    <th>Dose Date</th>
                    <th>Dose Time</th>
                    <th>Dosage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>$row["patient_name"]</td>
                    <td>$row["med_name"]</td>
                    <td>$row["dose_date"]</td>
                    <td>$row["dose_time"]</td>
                    <td>$row["dosage"]</td>
                    </tr>
                </tbody>

            <?php
                    }

                    count ++;
            }
            ?>

            </table>
            </div>

        </body>

	</html>	