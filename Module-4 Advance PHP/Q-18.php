
<?php
/*
CREATE DATABASE hotel_booking;

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    room_type ENUM('full_day', 'half_day', 'custom') NOT NULL,
    check_in_date DATE NOT NULL,
    check_out_date DATE NULL,
    slot ENUM('morning', 'evening') NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

*/
// Database connection
$conn = mysqli_connect("localhost", "root", "", "hotel_booking");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $room_type = $_POST['room_type'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = isset($_POST['check_out_date']) ? $_POST['check_out_date'] : null;
    $slot = isset($_POST['slot']) ? $_POST['slot'] : null;

    // Insert booking into the database
    $sql = "INSERT INTO bookings (room_type, check_in_date, check_out_date, slot) 
            VALUES ('$room_type', '$check_in_date', '$check_out_date', '$slot')";
    mysqli_query($conn, $sql);

    echo json_encode(["status" => "success"]);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel Booking System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #0056b3;
        }
        .booking-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
        }
        .booking-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .booking-form select, .booking-form input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .booking-form button {
            background-color: #0056b3;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .booking-form button:hover {
            background-color: #004499;
        }
        #result {
            text-align: center;
            margin-top: 20px;
        }
        footer {
            text-align: center;
            margin-top: 40px;
            color: #aaa;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hotel Room Booking</h2>
        <div class="booking-form">
            <form id="booking-form">
                <label for="room_type">Select Booking Type:</label>
                <select name="room_type" id="room_type">
                    <option value="full_day">Full Day</option>
                    <option value="half_day">Half Day</option>
                    <option value="custom">Custom</option>
                </select>

                <label for="check_in_date">Check-In Date:</label>
                <input type="date" name="check_in_date" id="check_in_date" required>

                <div id="check_out_date_group">
                    <label for="check_out_date">Check-Out Date:</label>
                    <input type="date" name="check_out_date" id="check_out_date">
                </div>

                <div id="slot_options" class="slot-options">
                    <label for="slot">Select Slot:</label>
                    <select name="slot" id="slot">
                        <option value="morning">Morning (8AM - 6PM)</option>
                        <option value="evening">Evening (7PM - 7AM)</option>
                    </select>
                </div>

                <button type="submit">Book Now</button>
            </form>
            <div id="result"></div>
        </div>
    </div>

    <footer>
        &copy; 2024 Hotel Booking System
    </footer>

    <script>
        document.getElementById('room_type').addEventListener('change', function() {
            const roomType = this.value;
            const checkOutDateGroup = document.getElementById('check_out_date_group');
            const slotOptions = document.getElementById('slot_options');

            if (roomType === 'full_day') {
                checkOutDateGroup.style.display = 'block';
                slotOptions.style.display = 'none';
            } else if (roomType === 'half_day') {
                checkOutDateGroup.style.display = 'none';
                slotOptions.style.display = 'block';
            } else {
                checkOutDateGroup.style.display = 'block';
                slotOptions.style.display = 'none';
            }
        });

        document.getElementById('booking-form').addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(this);

            fetch('', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    document.getElementById('result').innerText = 'Booking successful!';
                    this.reset();
                } else {
                    document.getElementById('result').innerText = 'Booking failed!';
                }
            })
            .catch(error => {
                document.getElementById('result').innerText = 'Booking failed!';
            });
        });
    </script>
</body>
</html>
