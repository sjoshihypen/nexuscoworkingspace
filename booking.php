<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "booking.css">
    <link rel = "stylesheet" href = "stylee.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src = "booking.js" crossorigin = "anonymous"></script>
    
    <title>Booking Workspace</title>
    <style>
        h3{
          margin-top: 10px;
          margin-bottom: 30px;
          margin-left: 10px;
          margin-right: 10px;
        }

        .btn {
         background-color: #4CAF50;
         color: white;
         padding: 12px;
         margin: 10px 0;
         border: none;
         width: 100%;
         border-radius: 3px;
         cursor: pointer;
         font-size: 17px;
}

       .btn:hover {
        background-color: #45a049;
}
      </style>
</head>
<body>
  <div class = "map">
    <iframe class = "mapframe" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d112061.23165192748!2d77.34049539202718!3d28.63235480184559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1670140250219!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class = "row">
  <form action="payscript.php" method="post">

    <header>
      <nav class="navbar">
        <div class="container">
          <a href="#" class="navbar-logo">
            <img src = "./deshpics/nexus.jpeg"  alt="company logo" width="400" height="300">
          </a>
  
          <div class="navbar-links">
            <ul class="flex">
              <li><a href="index.html" class="hover-link">HOME</a></li>
              <li><a href="workspace.html" class="hover-link">WORKSPACES</a></li>
              <li><a href="booking.html" class="hover-link">LOCATION</a></li>
              <li><a href="more.html" class="hover-link">MORE</a></li>
              <li><a href="signin.html" class="hover-link secondary-button">Log in</a></li>
              <li><a href="Signup.html" class="hover-link primary-button">Sign up</a></li>
              <li><a href="feedback.html" class="hover-link secondary-button">FEEDBACK</a></li>
            </ul>
          </div>
        </div>
      </nav>

    <h3>Book Your Workspace</h3>
    <div class="elem-group">
      <input type="text" id="name" name="visitor_name" placeholder="Name" pattern=[A-Z\sa-z]{3,20} required>
    </div>
    <div class="elem-group">
      <input type="email" id="email" name="visitor_email" placeholder="Email Id" required>
    </div>
    <input type="hidden" value="<?php echo 1;?>" name="amount">
    <div class="elem-group">
      <input type="tel" id="phone" name="visitor_phone" placeholder="Phone Number" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
    </div>
    <div class="elem-group">
      <label for="child">No. Of Members</label>
      <input type="number" id="adult" name="total_adult" placeholder="2" min = "1" required>
    </div>
    <div class="elem-group inlined">
      <label for="checkin-date">Check-In Date</label>
      <input type="date" id="checkin-date" name="checkin" required>
    </div>
    <div class="elem-group inlined">
      <label for="checkout-date">Check-Out Date</label>
      <input type="date" id="checkout-date" name="checkout" required>
    </div>
    <div class="elem-group">
      <label for="room-selection">Select Room Preference</label>
      <select id="room-selection" name="room_preference" required>
          <option value="">   </option>
          <option value="Private Cubicals">Private Cubicals &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.999.00</option>
          <option value="Office Space">Office Space &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs.2999.00</option>
          <option value="Conference Rooms">Conference Rooms &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.6999.00</option>
          <option value="Full Floor Office">Full Floor Office &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs.9999.00</option>
      </select>
    </div>
    <input type="submit" value="Confirm Your Workspace" class="btn">
    
  </form>
</div>
</body>
</html>