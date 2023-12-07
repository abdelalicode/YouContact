const form = document.getElementById('sform');
const emailField = document.getElementById('emailfield');
const emailError = document.getElementById('errormail');
const nameField = document.getElementById('namefield');
const nameError = document.getElementById('errorname');


form.addEventListener('submit', (e) => {
    if (nameField.value === '' || !nameField.value.match(/(^[A-Za-z]{3,16})([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})/)) {
        e.preventDefault();
        nameError.innerHTML = "Please enter a valid username";
    }
  
    if(!emailField.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
        e.preventDefault();
        emailError.innerHTML = "Please enter a valid email";
    }
  })
