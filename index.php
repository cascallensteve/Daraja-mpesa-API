<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ticket Booking</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .booking-section {
      margin-top: 50px;
    }
    .card {
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

  <div class="container booking-section">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-primary text-white text-center">
            <h3>Ticket Booking Form</h3>
          </div>
          <div class="card-body">
            <form>
              <!-- Name -->
              <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
              </div>

              <!-- Email -->
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
              </div>

              <!-- Ticket Type -->
              <div class="form-group">
                <label for="ticketType">Ticket Type</label>
                <select class="form-control" id="ticketType">
                  <option>Standard</option>
                  <option>VIP</option>
                  <option>Student</option>
                </select>
              </div>

              <!-- Date -->
              <div class="form-group">
                <label for="date">Event Date</label>
                <input type="date" class="form-control" id="date" required>
              </div>

              <!-- Number of Tickets -->
              <div class="form-group">
                <label for="numberOfTickets">Number of Tickets</label>
                <input type="number" class="form-control" id="numberOfTickets" placeholder="Enter number of tickets" min="1" required>
              </div>

              <!-- Payment -->
              <div class="form-group">
                <label for="paymentMethod">Payment Method</label>
                <select class="form-control" id="paymentMethod">
                  <option>Credit Card</option>
                  <option>PayPal</option>
                  <option>Bank Transfer</option>
                </select>
              </div>

              <!-- Submit Button -->
              <button type="submit" class="btn btn-primary btn-block">Book Ticket</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
