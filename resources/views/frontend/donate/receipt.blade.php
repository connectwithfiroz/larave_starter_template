<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Receipt</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <style>
        /* General Body Styling */
        /* Apply a custom Google font (e.g., Poppins) */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        .custom-font {
            font-family: 'Poppins', sans-serif;
        }

        body {
            font-family: Arial, sans-serif;
            margin-top: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Main Container */
        .receipt-container {
            background-image: url('https://img.freepik.com/premium-vector/abstract-decorative-modern-banner-design_921039-27609.jpg');
            background-repeat: no-repeat;
            /* Prevents repetition */
            background-size: cover;
            /* Ensures the image covers the entire container */
            background-position: center;
            /* Centers the background image */
            border-radius: 15px;
            width: 100%;
            max-width: 900px;

            text-align: center;
        }


        /* Banner */
        .banner {
            background: linear-gradient(to right, #4CAF50, #45a049);
            padding: 15px 20px;
            color: white;
            border-radius: 18px 18px 0 0;
        }

        .banner img {
            width: 50px;
            vertical-align: middle;
            margin-right: 10px;
            margin-top: 0px;
        }

        .banner h1 {
            display: inline;
            font-size: 24px;
            vertical-align: middle;
        }

        /* Logo */
        .logo {
            width: 60%;
            height: 30%;
            margin: 20px auto;
        }

        /* Receipt Header */
        .receipt-container h2 {
            color: #4CAF50;
            margin-bottom: 10px;
        }

        /* Details Section */
        .details {
            text-align: left;
            margin-top: 20px;
            font-size: 18px;
            line-height: 1.8;
        }

        .details p {
            margin: 10px;
        }



        /* Call-to-Action Button */
        .cta {
            margin-top: 20px;
            padding: 20px 25px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }


        .row {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        /* stamp styling */


        /* Responsive Design */
        @media (max-width: 600px) {
            .receipt-container {
                padding: 20px;
            }

            .details {
                font-size: 16px;
            }

            .banner h1 {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="receipt-container">
        <!-- Banner Section -->
        <div class="banner">
            <h1>Helping Al Khair Educational & Charitable Trust</h1>
        </div>
        <div class="max-w-4xl w-full  p-1 rounded-lg ">
            <!-- Title -->
            <h2 class="text-2xl font-bold text-center mb-2 text-gray-800">Donation Receipts</h2>
            <!-- Details Section -->
            <div
                class="flex flex-wrap sm:flex-row sm:justify-between gap-4 text-gray-800 text-sm sm:text-base font-medium">
                <p class="flex-1 sm:text-left"><strong>Reg. No:</strong> 658</p>
                <p class="flex-1 sm:text-left"><strong>CSR:</strong> 00033787</p>
                <p class="flex-1 sm:text-left"><strong>NGO ID:</strong> HR/00027341</p>
                <p class="flex-1 sm:text-left"><strong>PAN No:</strong> AAITA9669H</p>
                <p class="flex-1 sm:text-left"><strong>Unique ID:</strong> HR/2022/0317829</p>
                <p class="flex-1 sm:text-left"><strong>80G:</strong> AAITA9669HF2022101</p>
            </div>
        </div>

        <!-- Receipt Content -->
        <img src="{{ asset('frontend/img/logo.jpg') }}" alt="Logo" class="logo"> <!-- Replace with another logo if needed -->
        <div class="details">
            <p>Alkhair Educational and Charitable Trust is a dedicated non-profit organization committed to uplifting
                underprivileged communities through education, healthcare, and social welfare initiatives. With a
                mission to provide quality education to children from economically weaker sections, the trust also
                actively engages in humanitarian efforts, including food distribution, medical aid, and vocational
                training programs.</p>
            <p>Thank you for your generous donation towards this noble cause. Your kindness
                and compassion will go a long way in creating a better tomorrow for countless individuals.</p>
                <p><strong>NGO Name:</strong> Al-Khair</p>
                <p><strong>Donor's Name:</strong> {{ $donation->name }}</p>
                <p><strong>Donor's Address:</strong> {{ $donation->address }}</p>
                <p><strong>Donation Amount:</strong> ₹{{ number_format($donation->amount, 2) }}</p>
                <p><strong>Donations For:</strong> {{ $donation->donation_for }}</p>
                <p><strong>Date:</strong> {{ $donation->created_at->format('d-m-Y') }}</p>
                
            <div class="flex justify-center mt-6">
                <button id="download-btn"
                    class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition-all transform hover:scale-105 active:scale-95">
                    Download PDF
                </button>
            </div>
        </div>


    </div>

</body>
<!-- Include html2pdf.js via CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
<!-- JavaScript to handle PDF generation -->
<script>
    document.getElementById('download-btn').addEventListener('click', () => {
        // Select the container
        const receipt = document.querySelector('.receipt-container');
        
        // Options for the PDF
        const options = {
            margin: 1,
            filename: 'receipt.pdf',
            html2canvas: { scale: 2 }, // For better quality
            jsPDF: { format: 'a4', orientation: 'portrait' },
        };
        
        // Generate and download the PDF
        html2pdf().set(options).from(receipt).save();
    });
</script>

</html>