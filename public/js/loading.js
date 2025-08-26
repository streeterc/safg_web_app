// public/js/loading.js
document.addEventListener('DOMContentLoaded', function() {
    // Set a minimum display time (e.g., 1 second) for the loader
    const minDisplayTime = 500; // 500ms = 0.5 second
    const startTime = Date.now();

    window.addEventListener('load', function() {
        const elapsedTime = Date.now() - startTime;
        const remainingTime = minDisplayTime - elapsedTime;

        // Ensure the loader shows for at least minDisplayTime
        setTimeout(function() {
            const loader = document.getElementById('loading');
            loader.style.opacity = '0'; // Start fading out

            // Wait for the transition to complete before hiding
            setTimeout(function() {
                loader.style.display = 'none';
            }, 500); // Matches the 0.5s transition duration in CSS
        }, remainingTime > 0 ? remainingTime : 0);
    });
});