 // Wait for the document to be fully loaded
  document.addEventListener('DOMContentLoaded', function() {
    // Get the reset button and the form
    const resetButton = document.getElementById('reset-button');
    const form = document.getElementById('schedule-form');

    // Add a click event listener to the reset button
    resetButton.addEventListener('click', function() {
      // Check if the form exists, then reset it
      if (form) {
        form.reset();
      }
    });
  });