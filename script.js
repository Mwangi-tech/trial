// Save form data to local storage
function saveFormData() {
    const formData = {
      // Collect form data here
      // Example:
      input1: document.getElementById('input1').value,
      input2: document.getElementById('input2').value,
      // ...
    };
  
    localStorage.setItem('formData', JSON.stringify(formData));
  }
  
  // Load form data from local storage
  function loadFormData() {
    const storedData = localStorage.getItem('formData');
    if (storedData) {
      const formData = JSON.parse(storedData);
  
      // Populate form fields with stored data
      document.getElementById('input1').value = formData.input1;
      document.getElementById('input2').value = formData.input2;
      // ...
    }
  }
  