<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
      <h1>Support Us</h1>
    </header>
    <div class="container my-4 form-container">
      <p class="description">
        At <u>Mahi Lakra Foundation</u>, we are dedicated to making a positive
        impact on the world. Your support enables us to continue our mission and
        make a difference in the lives of those in need. Whether it's providing
        education, healthcare, or humanitarian aid, every donation brings us one
        step closer to creating a better future.
      </p>
      <section>
       <form id="donationForm" action="process_donation.php" method="post">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required />
        <span id="nameError" class="error-message"></span><br>
        
        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required />
        <span id="emailError" class="error-message"></span><br>
        
        <label for="contactNo">Contact Number:</label>
        <input type="tel" id="contactNo" name="contactNo" placeholder="E.g., 1234567890" required />
        <span id="contactNoError" class="error-message"></span><br>
        
        <label for="amount">Donation Amount (INR):</label>
        <input type="number" id="amount" name="amount" required />
        <span id="amountError" class="error-message"></span><br>

        <button type="submit" id="submitBtn">
            <i class="fas fa-heart"></i> Support Us
            <span id="loadingSpinner" style="display: none">&nbsp;<i class="fas fa-spinner fa-spin"></i></span>
        </button>

        <button type="button" onclick="clearForm()">Clear Form</button>
        </form>
    </section>
    <div id="thankYouCard" class="thank-you-card">
        <h2>Thank You!</h2>
        <h3>Please confirm your details</h3>
        <br>
        <p>Name: <span id="userName"></span></p>
        <p>Email: <span id="userEmail"></span></p>
        <p>Amount: <span id="donationAmount"></span></p>
        <p>Contact Number: <span id="userContactNo"></span></p>
        <a href="javascript:void(0)" 
           data-productid=""
           data-productname=""
           data-amount=""
           class="btn btn-primary buynow">Pay Now</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="script.js"></script>
</body>
</html>


