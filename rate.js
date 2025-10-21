// Since the form will POST to receipt.php, 
// this JS will only handle minor form validations (optional).

const calculateBtn = document.querySelector('.button-calculate');
const resetBtn = document.querySelector('.button-reset');

// Optional: Prevent submission if required fields are empty
calculateBtn.addEventListener('click', (e) => {
  const fromCountry = document.getElementById('fromCountry').value;
  const fromCity = document.getElementById('fromCity').value;
  const toCountry = document.getElementById('toCountry').value;
  const toCity = document.getElementById('toCity').value;
  
  if (!fromCountry || !fromCity || !toCountry || !toCity) {
    e.preventDefault();
    alert('Please select all FROM and TO fields.');
    return false;
  }
});

// Reset button resets the form fields
resetBtn.addEventListener('click', () => {
  document.querySelector('form').reset();
});