// const loginForm = document.querySelector('#login');

// loginForm.addEventListener('submit', (e) =>  {
//     const usernameField = document.querySelector('#gebruikersnaam');
//     const passwordField = document.querySelector('#wachtwoord');

//     const usernameArray = usernameField.value.split(''); 

//     if (usernameField.value = '' || passwordField.value == '') {
//         alert('vul alle velden in');
//         e.preventdefautl();
//     } else {
//         usernameArray.filter(() => {
//             if(karakter == '@', '!', ',', '#', '$','%', '&', '*', '^', '(', ')', '<', '>', '?', '/', '.', '`', '~', ';', ':', "'", '"', '-', '+', '=', '_', '{', '[', ']', '}', '|'  ) {
//             alert('Gebruikersnaam mag geen tekens bevatten');
//             e.preventdefautl();
//         }
//             else {
//                 alert('Gebruikersnaam is correct');
//             }
//         })
//     }
// });

const FormElement = document.querySelector('#FormLogin');
    console.log(FormElement);
  FormElement.addEventListener('submit', (e) => {
    console.log("log");
      const username = document.querySelector('#gebruikersnaam').value;
      const password = document.querySelector('#wachtwoord').value;
      if (password == '' || username == '') {
          e.preventDefault();
          alert('Please enter a username and password');
      }
      else{
      }
  });