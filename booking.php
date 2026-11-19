
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UduSTAY - Book Your Stay</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav>
        <h1>WELCOME TO UDUSTAY</h1>
        <div class="nav-links">
            <a href="index.html">Home</a>
            <a href="accommodations.html">Accommodations</a>
            <a href="about.html">About Us</a>
            <a href="gallery.html">Gallery</a>
        </div>
    </nav>

    <section class="form-section">
        <h2>Make a Booking Request</h2>
        <p>Fill in your details below to enquire about your stay at Udu Lodge.</p>

        <form action="process_booking.php" method="POST" class="booking-form">
            
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="unit">Select Accommodation:</label>
                <select id="unit" name="unit" required>
                    <option value="Standard Chalet">Standard Chalet</option>
                    <option value="Family Cottage">Family Cottage</option>
                    <option value="Camping Site">Camping Site</option>
                </select>
            </div>

            <div class="form-group">
                <label for="checkin">Check-in Date:</label>
                <input type="date" id="checkin" name="checkin" required>
            </div>

            <div class="form-group">
                <label for="checkout">Check-out Date:</label>
                <input type="date" id="checkout" name="checkout" required>
                <small id="dateError" style="color: red; display: none;">Check-out date must be after check-in.</small>
            </div>

            <button type="submit" class="btn">Submit Request</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2026 UduStay. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const checkinInput = document.getElementById("checkin");
            const checkoutInput = document.getElementById("checkout");
            const dateError = document.getElementById("dateError");
            const form = document.querySelector(".booking-form");

            const today = new Date().toISOString().split("T")[0];
            checkinInput.setAttribute("min", today);

            checkinInput.addEventListener("change", function() {
                checkoutInput.setAttribute("min", this.value);
                
                if (checkoutInput.value && checkoutInput.value <= this.value) {
                    checkoutInput.value = "";
                }
            });

            form.addEventListener("submit", function(event) {
                if (checkoutInput.value <= checkinInput.value) {
                    event.preventDefault(); 
                    dateError.style.display = "block"; 
                } else {
                    dateError.style.display = "none"; 
                }
            });
        });
    </script>

</body>
</html>