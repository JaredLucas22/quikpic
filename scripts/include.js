document.addEventListener("DOMContentLoaded", function () {
    // Specify the path to your external footer HTML file
    const footerPath = "footer.html";

    // Fetch the external HTML file
    fetch(footerPath)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Failed to fetch ${footerPath}`);
            }
            return response.text();
        })
        .then(htmlContent => {
            // Inject the HTML content into the footer container
            const footerContainer = document.getElementById("footerContainer");
            footerContainer.innerHTML = htmlContent;
        })
        .catch(error => console.error(error));
});
