// save-button.js
document.addEventListener("DOMContentLoaded", function() {
    const saveButton = document.getElementById("saveAsPngButton");
    const captureContent = document.getElementById("captureContent");

    saveButton.addEventListener("click", function() {
        // Use html2canvas to capture the specific content
        html2canvas(captureContent).then(function(canvas) {
            // Convert the canvas to a data URL
            const imgData = canvas.toDataURL("image/png");

            // Create a temporary anchor element to trigger the download
            const a = document.createElement("a");
            a.href = imgData;
            a.download = "page.png";

            // Trigger a click event on the anchor element to initiate the download
            a.click();
        });
    });
});
