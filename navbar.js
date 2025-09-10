
document.addEventListener("DOMContentLoaded", function() {
    // Get the current page path
    let currentPath = window.location.pathname;
    let currentFile = currentPath.split("/").pop();

    // Handle empty path (root directory)
    if (currentFile === "" || currentFile === "/") {
        currentFile = "index.html";
    }

    // Get all navigation links
    let links = document.querySelectorAll(".navbar-nav .nav-link");

    // Remove active class from all links first
    links.forEach(link => {
        link.classList.remove("active");
    });

    // Add active class based on current page
    links.forEach(link => {
        let href = link.getAttribute("href");
        let linkFile = href.split("/").pop();

        // Check if this link matches the current page
        if (linkFile === currentFile) {
            link.classList.add("active");
        }

        // Special case: if we're on index.html and this is the home link
        if (currentFile === "index.html" && (href.includes("index.html") || href === "../index.html")) {
            link.classList.add("active");
        }

        // Special case: if we're on forgot_pass.html, highlight the login link
        if (currentFile === "forgot_pass.html" && linkFile === "login.html") {
            link.classList.add("active");
        }
    });

    // Debug information (remove this in production)
    console.log("Current file:", currentFile);
    console.log("Current path:", currentPath);
});

