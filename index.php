<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignerJS</title>

    <link rel="stylesheet" href="src/SignerJS.css">
    <script src="src/fabric.min.js" type="text/javascript"></script>
    <script src="src/SignerJS.js" type="text/javascript"></script>
</head>
<body>
    
</body>
</html>

<form action="examples/response.php" method="POST" id="drawingForm">
    <p><u>Signature :</u></p>
    <canvas id="drawingCanvas"></canvas>
    <button type="button" id="clearBtn">Reset</button>
    <input type="text" id="b64img" name="b64img">
    <!-- Error alert -->
    <button type="submit" id="submitBtn">Send</button>
    <p class="error-message" id="signatureError" style="display: none; color: red;"><b>Please sign before submit</b></p>
</form>