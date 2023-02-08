<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js' integrity='sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>

<?php
require('./DBConnection.php');
require('../PHP CLASSES/AdminAcc.php');
session_start();

if (isset($_POST['save_s_btn'])) {
    $admin = $_SESSION['object'];
    $admin_id = $admin->getAdminID();

    $website = $_POST['website'];
    $github = $_POST['github'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
    $facebook = $_POST['facebook'];

    // echo $website;
    // echo $github;
    // echo $twitter;
    // echo $instagram;
    // echo $facebook;

    $admin->setWebsite($website);
    $admin->setGithub($github);
    $admin->setTwitter($twitter);
    $admin->setInstagram($instagram);
    $admin->setFacebook($facebook);

    mysqli_select_db($conn, 'vrms_admin');

    $query =
    "SELECT CASE WHEN EXISTS (
        SELECT * FROM user_socmed WHERE admin_id = '$admin_id'
    )
    THEN 1
    ELSE 0 END AS 'bool_value'";

    try {

        $query_run = mysqli_query($conn, $query);
        $id = $query_run->fetch_assoc()['bool_value'];
        
        if (!$id) {
            $query1 = "INSERT INTO user_socmed VALUES('$admin_id','$website','$github','$twitter','$instagram','$facebook');";
        } else {
            $query1 = "UPDATE user_socmed SET admin_id='$admin_id', website='$website', github='$github', twitter='$twitter', instagram='$instagram', fb='$facebook' WHERE admin_id='$admin_id';";
        }

        try{
            $query_run1 = mysqli_query($conn, $query1);

            $_SESSION['object'] = $admin;

            echo "
            <script>
                $('#edit_socmed input').prop('disabled', true);
                $('#save_socmed_btn').show();
                $('#edit_socmed_btn').hide();
                $('#edit input').css({
                    'border-color': 'none',
                    'border-width': '0px',
                    'border-style': 'transparent'
                });

                window.location.href = '../PHP/Profile.php';
            </script>
            ";
            exit(0);
        } catch (Exception $e) {
            header('Location: ../PHP/Profile.php');
            exit(0);
        }
    } catch (Exception $e) {
        header('Location: ../PHP/Profile.php');
        exit(0);
    }
}
