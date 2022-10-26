const errorPhone = document.getElementById("error-phone");

const validPhoneBlurHandler = (e) => {
  const phoneV = document.getElementById("phone");
  !/^[89]\d{7}$/.test(phoneV.value)
    ? (errorPhone.innerText =
        "Singaporean phone number should only contain numbers and start with 6, 8 or 9")
    : (errorPhone.innerText = "");
};
