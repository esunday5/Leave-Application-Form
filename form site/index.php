<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Portal</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"],
    input[type="number"],
    textarea,
    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 10px;
    }

    select {
      height: 36px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
  <script>
    function calculateBalance() {
      var entitlement = parseInt(document.getElementById("entitlement").value);
      var taken = parseInt(document.getElementById("taken").value);
      var balance = entitlement - taken;
      document.getElementById("balance").innerHTML = balance;
    }
  </script>
</head>
<body>
    <?php
        include("nav.php");
    ?>
  <h1>Leave Application</h1>
  <form method="post" action="submit_leave_application.php">
    <label for="applicantName">Applicant Name:</label>
    <input type="text" id="applicantName" name="applicantName" required><br><br>
    
    <label for="branch">Branch:</label>
    <select id="branch" name="branch" required>
      <option value="">Select Branch</option>
      <option value="Head Office">Head Office</option>
      <option value="Corporate">Corporate</option>
      <option value="Effio-Ette">Effio-Ette</option>
      <option value="Chamley">Chamley</option>
      <option value="Ikang">Ikang</option>
      <option value="Watt">Watt</option>
      <option value="Ekpo-Abasi">Ekpo-Abasi</option>
      <option value="Etim-Ekpo">Etim-Ekpo</option>
      <option value="Mile-8">Mile-8</option>
      <option value="Oban">Oban</option>
      <option value="Uyanga">Uyanga</option>
      <option value="Ugep">Ugep</option>
      <option value="Obubra">Obubra</option>
      <option value="Ikom">Ikom</option>
      <option value="Odukpani">Odukpani</option>
      <option value="Ogoja">Ogoja</option>
      <option value="Ika-Ika">Ika-Ika</option>
    </select><br><br>
    <label for="designation">Designation:</label>
    <input type="text" id="designation" name="designation" required><br><br>
    
    <label for="department">Department:</label>
    <input type="text" id="department" name="department" required><br><br>
    
    <label for="leaveType">Leave Type:</label>
    <select id="leaveType" name="leaveType" required>
      <option value="">Select Leave Type</option>
      <option value="Annual Leave">Annual Leave</option>
      <option value="Sick Leave">Sick Leave</option>
      <option value="Maternity Leave">Maternity Leave</option>
      <!-- Add more leave types as needed -->
    </select><br><br>
    
    <label for="startDate">Start Date:</label>
    <input type="date" id="startDate" name="startDate" required><br><br>
    
    <label for="endDate">End Date:</label>
    <input type="date" id="endDate" name="endDate" required><br><br>
    
    <label for="reason">Reason for Request:</label>
    <textarea id="reason" name="reason" rows="4" required></textarea><br><br>
    
    <label for="entitlement">Entitlement:</label>
    <input type="number" id="entitlement" name="entitlement" required><br><br>
    
    <label for="taken">Taken:</label>
    <input type="number" id="taken" name="taken" required><br><br>
    
    <label for="balance">Balance:</label>
    <input type="number" id="balance" name="balance" required><br><br>
    
    <input type="submit" value="Request Leave">
  </form>
</body>
</html>
