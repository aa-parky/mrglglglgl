function showPopup(message) {
    // Create a div element for the popup
    var popup = document.createElement('div');
    popup.setAttribute('id', 'screenshotPopup');
    popup.style.position = 'fixed';
    popup.style.left = '50%';
    popup.style.top = '50%';
    popup.style.transform = 'translate(-50%, -50%)';
    popup.style.padding = '20px';
    popup.style.backgroundColor = '#333';
    popup.style.color = '#fff';
    popup.style.zIndex = '10000';

    // Create an image element for the popup
    var img = document.createElement('img');
    img.src = '../img/zGobPhoto-01.png';
    img.style.width = '100px';  // Adjust width as needed
    img.style.marginBottom = '10px';  // Space between image and text

    // Style the message text
    var messageDiv = document.createElement('div');
    messageDiv.innerHTML = message;
    messageDiv.style.color = 'orange';  // Making the text neon-orange

    // Fetching random line from random_line.php
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'scripts/goblin-pic-say.php', false);  // Synchronous request
    xhr.send();

    if (xhr.status === 200) {
        var random_line = xhr.responseText;  // The random line received from the server
        messageDiv.innerHTML += '<p>' + random_line;  // Appending the random line to the message
    }

    // Append message (with the random line) and image to the popup
    popup.appendChild(messageDiv);
    popup.appendChild(img);


    // Add the popup to the body
    document.body.appendChild(popup);
}

function removePopup() {
    var popup = document.getElementById('screenshotPopup');
    if (popup) {
        document.body.removeChild(popup);
    }
}

function takeScreenshot() {
    // Show the "Generating..." popup
    showPopup('Generating...');

    html2canvas(document.getElementById("cap-comic")).then(function (canvas) {
        // Remove the popup
        removePopup();

        // Convert the canvas to a data URL
        var imgData = canvas.toDataURL("image/png");

        // Create a link element to download the image
        var link = document.createElement("a");
        link.href = imgData;
        link.download = 'screenshot.png';
        link.click();
    });
}
