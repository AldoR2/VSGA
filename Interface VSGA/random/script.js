document.addEventListener('DOMContentLoaded', function() {
    // Update current date and time
    const updateDateTime = () => {
        const now = new Date();
        const options = { 
            year: 'numeric', 
            month: 'short', 
            day: 'numeric', 
            hour: '2-digit', 
            minute: '2-digit', 
            second: '2-digit', // Include seconds
            hour12: true 
        };
        document.getElementById('current-date').innerText = now.toLocaleDateString('en-US', options);
    };

    setInterval(updateDateTime, 1000); // Update every second
    updateDateTime();  // Initial call
});

