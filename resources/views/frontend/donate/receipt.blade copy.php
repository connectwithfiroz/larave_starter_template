<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Receipt</title>
</head>
<body>
    <h1>Thank You for Your Donation!</h1>
    <p>Here are the details of your donation:</p>

    <table border="1" id="donationDetails">
        <tr>
            <th>Donation For</th>
            <td id="donation_for">General Fund</td>
        </tr>
        <tr>
            <th>Name</th>
            <td id="name">John Doe</td>
        </tr>
        <tr>
            <th>Email</th>
            <td id="email">john.doe@example.com</td>
        </tr>
        <tr>
            <th>Mobile Number</th>
            <td id="mobile_number">1234567890</td>
        </tr>
        <tr>
            <th>Amount</th>
            <td id="amount">₹500.00</td>
        </tr>
        <tr>
            <th>Payment Status</th>
            <td id="status">Completed</td>
        </tr>
    </table>

    <button id="downloadReceipt">Download Receipt</button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script>
        document.getElementById('downloadReceipt').addEventListener('click', function () {
            // Import jsPDF
            const { jsPDF } = window.jspdf;

            // Create a new PDF instance
            const doc = new jsPDF();

            // Add text or data to the PDF
            doc.setFontSize(18);
            doc.text("Donation Receipt", 10, 10);

            // Add donation details
            let y = 20; // Y-coordinate
            const donationDetails = [
                { label: "Donation For", value: document.getElementById("donation_for").innerText },
                { label: "Name", value: document.getElementById("name").innerText },
                { label: "Email", value: document.getElementById("email").innerText },
                { label: "Mobile Number", value: document.getElementById("mobile_number").innerText },
                { label: "Amount", value: document.getElementById("amount").innerText },
                { label: "Payment Status", value: document.getElementById("status").innerText },
            ];

            donationDetails.forEach((detail) => {
                doc.setFontSize(12);
                doc.text(`${detail.label}: ${detail.value}`, 10, y);
                y += 10; // Move to the next line
            });

            // Save the PDF
            doc.save('Donation_Receipt.pdf');
        });
    </script>
</body>
</html>
