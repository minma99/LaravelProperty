let captchaText2 = document.querySelector('#captchasignup');
  var ctx2 = captchaText2.getContext("2d");
  ctx2.font = "30px Roboto";
  ctx2.fillStyle = "#08e5ff";

  let userText2 = document.querySelector('#textBoxsignup');
  let submitButton2 = document.querySelector('#submitButtonsignup');
  let output2 = document.querySelector('#outputsignup');
  let refreshButton2 = document.querySelector('#refreshButtonsignup');
  let logInBtn2 = document.querySelector('#loginBtnsignup');
  let otpField2 = document.querySelector('#otpFieldsignup');
  let smsLabel2=document.querySelector('#smsLabelsignup')

  // alphaNums contains the characters with which you want to create the CAPTCHA
  let alphaNums2 = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
  let emptyArr2 = [];




  // This loop generates a random string of 7 characters using alphaNums
  // Further this string is displayed as a CAPTCHA
  for (let i = 1; i <= 7; i++) {
    emptyArr2.push(alphaNums2[Math.floor(Math.random() * alphaNums2.length)]);
  }
  var c2 = emptyArr2.join('');
  ctx2.fillText(emptyArr2.join(''), captchaText2.width / 4, captchaText2.height / 2);

  // This event listener is stimulated whenever the user press the "Enter" button
  // "Correct!" or "Incorrect, please try again" message is
  // displayed after validating the input text with CAPTCHA
  userText2.addEventListener('keyup', function (e) {
    // Key Code Value of "Enter" Button is 13
    if (e.keyCode === 13) {
      if (userText2.value === c) {
        output2.classList.add("correctCaptcha");
        output2.innerHTML = "Correct!";
      } else {
        output2.classList.add("incorrectCaptcha");
        output2.innerHTML = "Incorrect, please try again";
      }
    }
  });
  // This event listener is stimulated whenever the user clicks the "Submit" button
  // "Correct!" or "Incorrect, please try again" message is
  // displayed after validating the input text with 
  // this code is change display of the selected btn
  submitButton2.addEventListener('click', function (event) {
    event.preventDefault()
    if (userText2.value === c) {
      output2.classList.add("correctCaptcha");
      output2.innerHTML = "Correct!";

    } else {
      output2.classList.add("incorrectCaptcha");
      output2.innerHTML = "Incorrect, please try again";
    }
    logInBtn2.classList.remove("d-none")
    submitButton2.classList.remove("d-block")
    submitButton2.classList.add("d-none")
    otpField2.classList.remove("d-none")

  });
  // This event listener is stimulated whenever the user press the "Refresh" button
  // A new random CAPTCHA is generated and displayed after the user clicks the "Refresh" button
  refreshButton2.addEventListener('click', function (event) {
    event.preventDefault()
    userText2.value = "";
    let refreshArr2 = [];
    for (let j = 1; j <= 7; j++) {
      refreshArr2.push(alphaNums2[Math.floor(Math.random() * alphaNums2.length)]);
    }
    ctx2.clearRect(0, 0, captchaText2.width, captchaText2.height);
    c2 = refreshArr2.join('');
    ctx2.fillText(refreshArr2.join(''), captchaText2.width / 4, captchaText2.height / 2);
    output2.innerHTML = "";
  });
