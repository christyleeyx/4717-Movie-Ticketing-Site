const errorPhone = document.getElementById("error-phone");

const validPhoneBlurHandler = (e) => {
  const phoneV = document.getElementById("phone");
  !/^[89]\d{7}$/.test(phoneV.value)
    ? alert("Singaporean numbers have 8 numbers starting with 8 or 9")
    : (errorPhone.innerText = "");
};
