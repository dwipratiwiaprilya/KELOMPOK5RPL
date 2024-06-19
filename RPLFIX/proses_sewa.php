<?php
include 'config.php'; // Include your database configuration file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $item_id = 6; // Assuming item_id is known (e.g., 6 for Playstation 5)
    $jumlah = intval($_POST['jumlah']);
    $rental_start_date = $_POST['rental_start_date'];
    $rental_end_date = $_POST['rental_end_date'];
    $payment_method = $_POST['payment_method'];
    
    // Calculate duration and total cost
    $diff = strtotime($rental_end_date) - strtotime($rental_start_date);
    $durasi = round($diff / (60 * 60 * 24));
    $rental_rate = 175000; // Daily rental rate
    $total_cost = $rental_rate * $durasi * $jumlah;
    
    // Insert data into tb_rentals table
    $query = "INSERT INTO tb_rentals (item_id, jumlah, bayar, rental_start_date, rental_end_date, durasi, status, payment_method)
              VALUES ('$item_id', '$jumlah', '$total_cost', '$rental_start_date', '$rental_end_date', '$durasi', 'Pending', '$payment_method')";
              
    if (mysqli_query($connect, $query)) {
        echo "Booking successful!";
        // Redirect or perform other actions upon success
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }

    // Close the database connection
    mysqli_close($connect);
}
?>
