// index.html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Form</title>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <style>
   .container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px;
}
.image-container {
    flex: 1;
    max-width: 700px;
    position: relative;
}
.form-image {
    width: 100%;
    border-radius: 10px;
}
.overlay {
    position: absolute;
    top: 320px;
    left: 35%;
    color: black;
    font-size: 18px;
    font-weight: bold;
    text-align: left;
    line-height: 1.3rem;
}
.form-container {
    flex: 1;
    max-width: 700px;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}
.form-container .btn{
    background-color: green;
    color: #fff;
    padding: 1rem 3rem;
    border: none;
    border-radius: .5rem;
}
.form-container .btn:hover{
    background-color: rgb(40, 211, 40);
    color: #fff;
    padding: 1rem 3rem;
    border: none;
    border-radius: .5rem;
    cursor: pointer;
}
.form-group {
    display: flex;
    gap: 40px;
    margin-bottom: 30px;
}
.form-group-msj {
    display: block;
    
    margin-bottom: 30px;
}
.form-group input {
    flex: 1;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}
.form-group-msj textarea {
    
    padding: 20px;
    width: 100%;
    margin-bottom: 30px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}



    </style>
</head>
<body>
    <div class="container">
        <div class="image-container" id="image-container">
            <!-- <img src="assets/img/ngo-ricipt.jpg" class="form-image" id="form-image"> -->
            <img src="{{ asset('frontend/donation_receipt.jpeg') }}" class="form-image" id="form-image" crossorigin="anonymous">
            <div class="overlay" id="overlay">
                <p>Firoz</span></p>
            </div>
        </div>
        
        <div class="form-container">
            <button class="btn-primary btn" onclick="return generatePDF(event)">Download Donation Receipt</button>          
        </div>
    </div>
    
    <script>
      
// script.js
function generatePDF(event) {
    event.preventDefault();
    setTimeout(() => {
        html2canvas(document.getElementById("image-container"),{
    useCORS: true
}).then(canvas => {
            const imgData = canvas.toDataURL("image/png");
            const { jsPDF } = window.jspdf;
            const pdf = new jsPDF('p', 'mm', 'a4');
            
            const imgWidth = 210;
            const imgHeight = (canvas.height * imgWidth) / canvas.width;
            pdf.addImage(imgData, 'PNG', 0, 0, imgWidth, imgHeight);
            pdf.save("volunteer_form.pdf");
            document.getElementById("volunteerForm").reset();
        });
    }, 500);
}

    </script>
</body>
</html>
