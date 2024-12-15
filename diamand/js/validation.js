//validation script here
const inputs = document.querySelectorAll("input");


const patterns = {
   phoneNumber:/^\d{10}$/,
    userName:/^[A-Z0-9]$/i,
    enterOtp:/^\d{4}$/,
    firstName:/^[a-z]{5,12}$/,
    lastName:/^[a-z]{5,12}$/,
    emailAddress:/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/,
    companyPhone:/^\d{10}$/,
    companyName:/^[a-z\d]{5,12}$/i,
    companyId:/^[a-z\d]{5,12}$/i,
    
};


//validation function

function validate(field,regex) {
if(regex.test(field.value)){
   field.id = 'valid';
   }else {
       field.id = 'invalid';
   }
}

inputs.forEach((input)=> {
   input.addEventListener('keyup',(e) => {
//       console.log(e.target.attributes.name.value);
       validate(e.target, patterns[e.target.attributes.name.value])
   }); 
});

  /*code: 48-57 Numbers*/
//         function restrictAlphabets(e) {
//             var x = e.which || e.keycode;
//             if ((x >= 48 && x <= 57))
//                 return true;
//             else
//                 return false;
//         }