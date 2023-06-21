<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $applicantName = $_POST['applicantName'];
  $designation = $_POST['designation'];
  $department = $_POST['department'];
  $leaveType = $_POST['leaveType'];
  $startDate = $_POST['startDate'];
  $endDate = $_POST['endDate'];
  $reason = $_POST['reason'];
  $entitlement = $_POST['entitlement'];
  $taken = $_POST['taken'];
  $balance = $entitlement - $taken;
  $branch = $_POST['branch'];

  // Process the data further (e.g., save to a database)

  // Display success message or redirect to a confirmation page
}
?>
