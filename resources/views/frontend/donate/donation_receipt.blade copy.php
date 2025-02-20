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
            <img src="assets/img/ngo-ricipt.jpg" class="form-image" id="form-image" crossorigin="anonymous">
            <div class="overlay" id="overlay">
                <p><span id="display_name"></span></p>
                <p><span id="display_email"></span></p>
                <p><span id="display_phone"></span></p>
                <p><span id="display_gender"></span></p>
                <p><span id="display_aadhar"></span></p>
                <p><span id="display_category"></span></p>
                <p><span id="display_dob"></span></p>
                <p><span id="display_address"></span></p>
                <p><span id="display_district"></span></p>
                <p><span id="display_state"></span></p>
                <p><span id="display_pincode"></span></p>
                <p><span id="display_project"></span></p>
                <p><span id="display_registration"></span></p>
                <p><span id="display_message"></span></p>
            </div>
        </div>
        
        <div class="form-container">
            <h2>Volunteer Registration</h2>
            <form id="volunteerForm" onsubmit="return generatePDF(event)">
                <div class="form-group">
                    <input type="text" id="full_name" placeholder="Full Name" >
                    <input type="email" id="email" placeholder="Email" >
                </div>
                <div class="form-group">
                    <input type="text" id="phone" placeholder="Phone" >
                    <input type="text" id="gender" placeholder="Gender" >
                </div>
                <div class="form-group">
                    <input type="text" id="aadhar" placeholder="Aadhar Number" >
                    <input type="text" id="category" placeholder="Category" >
                </div>
                <div class="form-group">
                    <input type="date" id="dob" >
                    <input type="text" id="district" placeholder="District" >
                </div>
                <div class="form-group">
                    <input type="text" id="state" placeholder="State" >
                    <input type="text" id="pincode" placeholder="Pin Code" >
                </div>
                <div class="form-group">
                    <input type="text" id="project_name" placeholder="Project Name" >
                    <input type="date" id="registration_date" >
                </div>
             
                <div class="form-group-msj">
                    <textarea id="address" placeholder="Full Address" ></textarea>
                    <textarea id="message" placeholder="Message" ></textarea>
                </div>
             
           
             
                
                <button class="btn" type="submit">Submit</button>
            </form>
        </div>
    </div>
    
    <script>
      
// script.js
function generatePDF(event) {
    event.preventDefault();

    document.getElementById("display_name").textContent = document.getElementById("full_name").value;
    document.getElementById("display_email").textContent = document.getElementById("email").value;
    document.getElementById("display_phone").textContent = document.getElementById("phone").value;
    document.getElementById("display_gender").textContent = document.getElementById("gender").value;
    document.getElementById("display_aadhar").textContent = document.getElementById("aadhar").value;
    document.getElementById("display_category").textContent = document.getElementById("category").value;
    document.getElementById("display_dob").textContent = document.getElementById("dob").value;
    document.getElementById("display_address").textContent = document.getElementById("address").value;
    document.getElementById("display_district").textContent = document.getElementById("district").value;
    document.getElementById("display_state").textContent = document.getElementById("state").value;
    document.getElementById("display_pincode").textContent = document.getElementById("pincode").value;
    document.getElementById("display_project").textContent = document.getElementById("project_name").value;
    document.getElementById("display_registration").textContent = document.getElementById("registration_date").value;
    document.getElementById("display_message").textContent = document.getElementById("message").value;
    
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
