<?php
    require('./DBConnection.php');
    session_start();

    if(isset($_GET['id'])){
        $client_id = $_GET['id'];
        
        echo $client_id;

        mysqli_select_db($conn, 'vrms_info');

        $query1 = "DELETE FROM health_details WHERE health_id='$client_id'";
        $query2 = "DELETE FROM first_dose WHERE first_dose_id='$client_id'";
        $query3 = "DELETE FROM second_dose WHERE second_dose_id='$client_id'";
        $query4 = "DELETE FROM first_booster WHERE first_booster_id='$client_id'";
        $query5 = "DELETE FROM second_booster WHERE second_booster_id='$client_id'";
        $query6 = "DELETE FROM client_info WHERE client_id='$client_id'";
        $query7 = "DELETE FROM client_location WHERE location_id='$client_id'";

        $checkQuery1 = mysqli_query($conn, $query1);
        $checkQuery2 = mysqli_query($conn, $query2);
        $checkQuery3 = mysqli_query($conn, $query3);
        $checkQuery4 = mysqli_query($conn, $query4);
        $checkQuery5 = mysqli_query($conn, $query5);
        $checkQuery6 = mysqli_query($conn, $query6);
        $checkQuery7 = mysqli_query($conn, $query7);

        echo "
        <script>
            window.location.href = '../PHP/ClientCRUD.php';
        </script>
        ";
    }
?>