
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Add other form fields as needed
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$larea = $_POST["larea"];
$grade = $_POST["grade"];
$time = $_POST["time"];
$date = $_POST["date"];
$roll = $_POST["roll"];
$strand = $_POST["strand"];
$subStrand = $_POST["subStrand"];
$knowledgeText = $_POST["knowledge_text"];
$skillText = $_POST["skill_text"];
$attitudeText = $_POST["attitude_text"];
$questionI = $_POST["question_i"];
$questionII = $_POST["question_ii"];
$learningResources = $_POST["learning_resources"];
$competencies = $_POST["competencies"];
$values = $_POST["values"];
$linksToOtherAreas = $_POST["links_to_other_areas"];
$pciLinks = $_POST["pci_links"];
$organizationComment = $_POST["organization_comment"];
$introductionComment = $_POST["introduction_comment"];
$step1Learning = $_POST["step1_learning"];
$step1Competencies = $_POST["step1_competencies"];
$extendedActivitiesComment = $_POST["extended_activities_comment"];
$conclusionComment = $_POST["conclusion_comment"];
$reflectionComment = $_POST["reflection_comment"];
    // Compose the email message
    $to = "danielkiarie042@gmail.com";
    $subject = "Lesson plan";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
     $message .= "First Name: $firstname\n";

    // Add other form field values to the message

    // Send the email
    mail($to, $subject, $message);

    // Redirect after submission (optional)
    header("Location: thank-you.html");
    exit();
}
?>

    });
  </script>
  <script src="script.js"></script>
</body>
</html>
