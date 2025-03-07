<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text'];  // Get input text
    file_put_contents("data.txt", $text);  // Save text to file
    echo "Text saved successfully! <a href='index.html'>Go Back</a>";
}
?>
