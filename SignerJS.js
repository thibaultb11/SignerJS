document.addEventListener("DOMContentLoaded", function () {
    var canvas = new fabric.Canvas('drawingCanvas', {
        isDrawingMode: true
    });

    document.getElementById('clearBtn').addEventListener('click', function () {
        canvas.clear(); // Clear canvas
    });

    document.getElementById('drawingForm').addEventListener('submit', function (event) {
        if (canvas.isEmpty()) {
            event.preventDefault(); // Cancel submit if not signed
            document.getElementById('signatureError').style.display = 'block'; // Display error message
        } else {
            document.getElementById('b64img').value = canvas.toDataURL();
        }
    });
});