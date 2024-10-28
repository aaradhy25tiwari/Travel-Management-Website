// Set the minimum date for travel (today's date)
const today = new Date().toISOString().split('T')[0];
document.getElementById('travelDate').setAttribute('min', today);
