$("#donationForm").submit(function (event) {
    event.preventDefault();

    // Validate form data
    if (!validateForm()) {
        return;
    }

    // Collect form data
    var formData = {
        name: $("#name").val(),
        email: $("#email").val(),
        amount: $("#amount").val(),
        contactNo: $("#contactNo").val(),
    };

    // Display thank you card with user details
    $("#userName").text(formData.name);
    $("#userEmail").text(formData.email);
    $("#donationAmount").text(formData.amount);
    $("#userContactNo").text(formData.contactNo);

    // Show thank you card
    $("#thankYouCard").show();

    // You can trigger the Razorpay payment code here if needed
    $(".buynow").click(function () {
        var donationDetails = {
            name: formData.name,
            email: formData.email,
            amount: formData.amount,
            contactNo: formData.contactNo,
            productid: "",
            productname: ""
        };

        var options = {
            "key": "rzp_test_zHhNFsppG7bIjH",
            "amount": donationDetails.amount * 100,
            "name": "Mahi Lakra Foundation",
            "description": "donation",
            "image": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQroo1jD3m3CuUsMa5wqKdVZqYezg9Clr5sCw&usqp=CAU",
            "handler": function (response) {
                var paymentid = response.razorpay_payment_id;

                $.ajax({
                    url: "process_donation.php",
                    type: "POST",
                    data: {
                        name: donationDetails.name,
                        email: donationDetails.email,
                        amount: donationDetails.amount,
                        contactNo: donationDetails.contactNo,
                        payment_id: paymentid
                    },
                    success: function(finalresponse) {
                        window.location.href = "http://localhost/supportuswithpayment/success.php";
                        // rest of the code
                    
                
                        // if (finalresponse == 'done') {
                        //     window.location.href = "http://localhost/payy/demo/success.php";
                        // } else {
                        //     alert('Please check console.log to find error');
                        //     console.log(finalresponse);
                        // }
                    }
                });
            },
            "theme": {
                "color": "#3399cc"
            }
        };

        var rzp1 = new Razorpay(options);
        rzp1.open();
    });
});

function validateForm() {
    // Your validation logic here
    // You can use this function to validate each input field
    // Display error messages in the corresponding error spans
    // Return true if the form is valid, false otherwise
    return true; // For demonstration purposes, returning true without validation
}

function clearForm() {
    // Your code to clear the form fields
    $("#name").val("");
    $("#email").val("");
    $("#contactNo").val("");
    $("#amount").val("");

    // Clear error messages
    $(".error-message").text("");

    // Hide the thank you card
    $("#thankYouCard").hide();
}
