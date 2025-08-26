// Get the button
const toTopBtn = document.getElementById('to-top-btn');

// Show/hide button based on scroll position
window.addEventListener('scroll', () => {
    if (window.scrollY > 300) { // Show button after scrolling 300px
        toTopBtn.classList.add('show');
    } else {
        toTopBtn.classList.remove('show');
    }
});

// Smooth scroll to top when button is clicked
toTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});