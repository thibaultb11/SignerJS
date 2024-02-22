//SignerJS ©
//Made by Thibault BEE

// How to use SignerJS

// First link your page to SignerJS
<link rel="stylesheet" href="src/SignerJS.css">
<script src="src/fabric.min.js" type="text/javascript"></script>
<script src="src/SignerJS.js" type="text/javascript"></script>

// Then add SignerJS to your form
<form action="examples/response.php" method="POST" id="drawingForm">
    <p><u>Signature :</u></p>
    <canvas id="drawingCanvas"></canvas>
    <button type="button" id="clearBtn">Réinitialiser</button>
    <input type="text" id="b64img" name="b64img">
    <!-- Message d'erreur -->
    <button type="submit" id="submitBtn">Send</button>
    <p class="error-message" id="signatureError" style="display: none; color: red;"><b>Veuillez signer avant de soumettre le formulaire</b></p>
</form>

// Finally you can change the area's dimensions in SignerJS.css file