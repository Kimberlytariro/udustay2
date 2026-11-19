
<?php
$conn = mysqli_connect("localhost", "root", "", "udustay_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $unit = $_POST['unit'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    $sql = "INSERT INTO bookings (guest_name, email, phone, unit_type, check_in, check_out) 
            VALUES ('$name', '$email', '$phone', '$unit', '$checkin', '$checkout')";
            
    if (mysqli_query($conn, $sql)) {
        echo "<h1>Thank you, $name!</h1>";
        echo "<p>Your request for the $unit from $checkin to $checkout has been saved.</p>";
        echo "<a href='index.html'>Return to Home</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>