const body = document.body;
const darkModeButton = document.getElementById("dark-mode-toggle"),
  darkModeCheck = document.getElementById("dark-mode-check"),
  message = document.querySelector(".message-board"),
  progress = document.querySelector(".progress"),
  closeMessage = document.querySelector(".message-close"),
  phoneNumberOption = document.getElementById("phone-radio"),
  emailOption = document.getElementById("email-radio"),
  phoneField = document.getElementById("phone"),
  emailField = document.getElementById("email");

let checkSSState = 0;

//auto set theme based on value stored in localStorage
if (localStorage.getItem("dark-mode") == 1) {
  body.classList.toggle("dark-mode");
  darkModeCheck.checked = true;
} else {
  localStorage.setItem("dark-mode", 0);
}

//dark mode button
darkModeCheck.addEventListener("change", () => {
  body.classList.toggle("dark-mode");
  let modeValue = localStorage.getItem("dark-mode");
  modeValue == 1
    ? localStorage.setItem("dark-mode", 0)
    : localStorage.setItem("dark-mode", 1);
});

//alert message
if (message != null) {
  message.classList.add("message-board-active");
  progress.classList.add("progress-active");
  const hideMessage = () => {
    message.classList.remove("message-board-active");
    progress.classList.remove("progress-active");
  };
  setTimeout(hideMessage, 4000);
  closeMessage.addEventListener("click", hideMessage);
}

//remove autofill email and phone number fields
if (phoneNumberOption != null) {
  document.addEventListener("change", () => {
    clearField(phoneNumberOption, emailField);
    clearField(emailOption, phoneField);
  });
}

const clearField = (Object, secondObject) => {
  if (Object.checked) {
    secondObject.value = "";
  }
};
const checkSS = async () => {
  addSavedBtn = document.querySelectorAll(".ad-save");
  fetch("inc/checkss.php")
    .then((res) => res.json())
    .then((data) => {
      checkSSState = data.state;
    });

  if (checkSSState == 1 && addSavedBtn != null) {
    addSavedBtn.forEach((save) => {
      save.addEventListener("click", () => {
        window.location.href = "sign_in.php";
      });
    });
  }
};

checkSS();
