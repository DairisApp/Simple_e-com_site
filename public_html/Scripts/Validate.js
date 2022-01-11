form = document.getElementById("product_form");

form.addEventListener('submit', (e) => {

    //Form Validations
    validate("SKU");
    validate("Name");
    validate("Price");
    validateNumber("Price");
    validate("Size");
    validateNumber("Size");
    validate("Height");
    validateNumber("Height");
    validate("Width");
    validateNumber("Width");
    validate("Length");
    validateNumber("Length");
    validate("Weight");
    validateNumber("Weight");

    //Checks for error messages
    const classArray = document.getElementsByClassName("text-danger ms-1");
    array = Array.from(classArray);

    //If there are error messages stops the form from submiting
    if (array.length > 0) {
        e.preventDefault();
    }
});

function validate(id) {

    //Gets id of the input
    var input = document.getElementById(id.toLowerCase());
    var errorValue = document.getElementById(`${id.toLowerCase()}-value`);

    //checks if it exists and if it has value
    if (input === null) {
        input = 5;
    } else if (input.value === '' || input === null) {
        errorValue.className = "text-danger ms-1";
    } else {
        errorValue.className = "d-none";
    }
}

function validateNumber(id) {


    var input = document.getElementById(id.toLowerCase());
    var errorValue = document.getElementById(`${id.toLowerCase()}-data`);

    //checks if it exists and if it is a number
    if (input === null) {
        input = 5;
    } else if (isNaN(input.value) === true) {
        errorValue.className = "text-danger ms-1";
    } else {
        errorValue.className = "d-none";
    }
}