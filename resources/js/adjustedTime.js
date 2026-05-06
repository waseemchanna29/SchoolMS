/**
 * Calculate and display an adjustable time that runs like a clock
 * 
 * @param {string} currentUtcTime - Current UTC time from database (format: 'Y-m-d H:i:s')
 * @param {string} adjustableTime - Adjustable time from database (format: 'Y-m-d H:i:s')
 * @param {string} elementId - ID of the element to display the time
 */


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