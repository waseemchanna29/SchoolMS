/**
 * Calculate and display an adjustable time that runs like a clock
 * 
 * @param {string} currentUtcTime - Current UTC time from database (format: 'Y-m-d H:i:s')
 * @param {string} adjustableTime - Adjustable time from database (format: 'Y-m-d H:i:s')
 * @param {string} elementId - ID of the element to display the time
 */
function runAdjustableClock(currentUtcTime, adjustableTime, elementId) {
    // Parse the times
    const currentUtc = new Date(currentUtcTime.replace(' ', 'T') + 'Z');
    const adjustable = new Date(adjustableTime.replace(' ', 'T') + 'Z');

    // Calculate the offset in milliseconds
    const offsetMs = adjustable - currentUtc;

    // Get the element
    const element = document.getElementById(elementId);

    if (!element) {
        console.error(`Element with ID "${elementId}" not found`);
        return null;
    }

    // Function to update the time
    function updateClock() {
        // Get current time and apply offset
        const now = new Date();
        const adjustedTime = new Date(now.getTime() + offsetMs);

        // Format the time (you can customize this)
        const formatted = adjustedTime.toLocaleString('en-US', {
            year: 'numeric',
            month: '2-digit',
            day: '2-digit',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: false
        });

        element.textContent = formatted;
    }

    // Update immediately
    updateClock();

    // Update every second
    const intervalId = setInterval(updateClock, 1000);

    // Return the interval ID so it can be cleared if needed
    return intervalId;
}

/**
 * Stop a running clock
 * 
 * @param {number} intervalId - The interval ID returned by runAdjustableClock
 */
function stopClock(intervalId) {
    if (intervalId) {
        clearInterval(intervalId);
    }
}

// Example usage in Laravel Blade:
/*
<div id="adjustable-clock"></div>

<script>
    // Pass your database values here
    const currentUtc = "{{ $currentUtcTime }}"; // e.g., "2024-01-20 10:30:00"
    const adjustableTime = "{{ $adjustableTime }}"; // e.g., "2024-01-20 15:45:30"
    
    // Start the clock
    const clockInterval = runAdjustableClock(currentUtc, adjustableTime, 'adjustable-clock');
    
    // To stop the clock later (optional):
    // stopClock(clockInterval);
</script>
*/