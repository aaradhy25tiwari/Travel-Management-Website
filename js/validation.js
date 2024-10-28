const form = document.getElementById('form')
const phone_input = document.getElementById('phone')
const email_input = document.getElementById('email')
const password_input = document.getElementById('pass')
const cpassword_input = document.getElementById('cpass')
const error_message = document.getElementById('error-message')

form.addEventListener('submit', (e) => {
    let errors = []
    
    if(phone_input){
        // If we have blood type input then we are in signup form
        errors = getSignupFormErrors(phone_input.value, email_input.value, password_input.value, cpassword_input.value, blood_input.value)
    }
    else{
        // If we don't have blood type input then we are in login form
        errors = getLoginFormErrors(email_input.value, password_input.value)
    }
    if(errors.length > 0){
        // If there are any errors
        e.preventDefault()
        error_message.innerText  = errors.join(" ")
    }
})

function getSignupFormErrors(phone, email, password, repeatPassword, blood){
    let errors = []
  
    if(phone === '' || phone == null){
        errors.push('Phone Number is required\n')
        phone_input.parentElement.classList.add('incorrect')
    }
    else if(phone.length < 10){
        errors.push('Phone Number must have 10 digits\n')
        phone_input.parentElement.classList.add('incorrect')
    }
    // else if(phone.pattern != '[6, 7, 8, 9][0-9]{9}'){
    //     errors.push('Please enter a valid number\n')
    //     phone_input.parentElement.classList.add('incorrect')
    // }
    if(email === '' || email == null){
        errors.push('Email is required\n')
        email_input.parentElement.classList.add('incorrect')
    }
    if(password === '' || password == null){
        errors.push('Password is required\n')
        password_input.parentElement.classList.add('incorrect')
    }
    else if(password.length < 8){
        errors.push('Password must have at least 8 characters\n')
        password_input.parentElement.classList.add('incorrect')
    }
    else if(password !== repeatPassword){
        errors.push('Password does not match\n')
        password_input.parentElement.classList.add('incorrect')
        cpassword_input.parentElement.classList.add('incorrect')
    }
    if(blood == '' || blood == null){
        errors.push('Blood Type is required\n')
        blood_input.parentElement.classList.add('incorrect')
    }
    return errors;
}

function getLoginFormErrors(email, password){
    let errors = []
  
    if(email === '' || email == null){
      errors.push('Email is required')
      email_input.parentElement.classList.add('incorrect')
    }
    if(password === '' || password == null){
      errors.push('Password is required')
      password_input.parentElement.classList.add('incorrect')
    }
  
    return errors;
}
  
const allInputs = [phone_input, email_input, password_input, cpassword_input, blood_input].filter(input => input != null)

allInputs.forEach(input => {
  input.addEventListener('input', () => {
    if(input.parentElement.classList.contains('incorrect')){
      input.parentElement.classList.remove('incorrect')
      error_message.innerText = ''
    }
  })
})

function fetchLocation() {
    const pincode = document.getElementById("pincode").value;
    if (!pincode) {
        alert("Please enter a pincode.");
        return;
    }

    fetch(`https://api.postalpincode.in/pincode/${pincode}`)
        .then(response => response.json())
        .then(data => {
            if (data[0].Status === "Success") {
                const postOffice = data[0].PostOffice[0];
                document.getElementById("district").value = postOffice.District;
                document.getElementById("state").value = postOffice.State;
            } else {
                alert("Invalid pincode or no data found.");
            }
        })
        .catch(error => {
            console.error("Error fetching data:", error);
            alert("An error occurred while fetching location data.");
        });
}
