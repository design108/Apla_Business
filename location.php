<?php
if(isset($_POST['submit'])){
    if(isset($_POST['location'])){
        $user_location = $_POST['location'];
        echo "User location: " . $user_location;
        // Here you can further process or store the user location data
    }
}
?>
