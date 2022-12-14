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
            <h2>Patient Records</h2>
            <p>Mock table here</p>            
            <table class="table table-striped">

                <!-- Table to display the records -->
                <thead>
                    <tr>
                    <th>Patient Name</th>
                    <th>Medicine</th>
                    <th>Dose Date</th>
                    <th>Dose Time</th>
                    <th>Dosage</th>
                    </tr>
                </thead>

                <?php
                    // Check database
                    // Display content from phpMyAdmin database
                    
                    $result=mysqli_query($db,"select * from dosages");

                    while($row=mysqli_fetch_array($result))
                    {
                ?>

                <tbody>
                    <tr>
                    <td><?php print $row["patient_name"];?></td>
                    <td><?php print $row["med_name"];?></td>
                    <td><?php print $row["dose_date"];?></td>
                    <td><?php print $row["dose_time"];?></td>
                    <td><?php print $row["dosage"];?></td>
                    </tr>
                </tbody>

            <?php
                    }
            ?>

            </table>
            </div>

        </body>

	</html>	