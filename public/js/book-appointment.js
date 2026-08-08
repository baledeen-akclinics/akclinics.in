document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("formRequestCallback");

  if (!form) {
    return;
  }

  const pageUrlField = document.getElementById("page_url");
  if (pageUrlField) {
    pageUrlField.value = window.location.href;
  }

  // Current page name → form_name (document title without site suffix)
  var formNameInput = document.getElementById("form_name");
  if (formNameInput) {
    var pageTitle = (document.title || "").trim();
    formNameInput.value =
      pageTitle.split(" - ")[0].trim() || pageTitle || "Book Appointment";
  }

  const nameInput = document.getElementById("name");
  const mobileInput = form.querySelector('input[name="Mobile"]');
  const emailInput = document.getElementById("email");
  const cityInput = form.querySelector('input[name="City"]');
  const timeInput = document.getElementById("Preferred_Time");
  const hidden = document.getElementById("procedure_id");
  const hiddenName = document.getElementById("procedure_name");

  function validateName() {
    const name = nameInput.value.trim();
    const pattern = /^[A-Za-z ]+$/;

    if (name === "") {
      document.getElementById("errmsgname").innerHTML = "Full Name is required";
      return false;
    }

    if (name.length < 3) {
      document.getElementById("errmsgname").innerHTML =
        "Minimum 3 characters required";
      return false;
    }

    if (!pattern.test(name)) {
      document.getElementById("errmsgname").innerHTML =
        "Only letters and spaces allowed";
      return false;
    }

    document.getElementById("errmsgname").innerHTML = "";
    return true;
  }

  function validateMobile() {
    const mobile = mobileInput.value.trim();

    if (mobile === "") {
      document.getElementById("errmsg").innerHTML = "Mobile Number is required";
      return false;
    }

    if (!/^[6-9]\d{9}$/.test(mobile)) {
      document.getElementById("errmsg").innerHTML =
        "Enter valid 10 digit mobile number";
      return false;
    }

    document.getElementById("errmsg").innerHTML = "";
    return true;
  }

  function validateEmail() {
    const email = emailInput.value.trim();
    const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === "") {
      document.getElementById("errmsgEmail").innerHTML = "Email is required";
      return false;
    }

    if (!pattern.test(email)) {
      document.getElementById("errmsgEmail").innerHTML =
        "Enter valid email address";
      return false;
    }

    document.getElementById("errmsgEmail").innerHTML = "";
    return true;
  }

  function validateCity() {
    const city = cityInput.value.trim();
    const pattern = /^[A-Za-z ]+$/;

    if (city === "") {
      document.getElementById("errmsgcity").innerHTML = "City is required";
      return false;
    }

    if (city.length < 2) {
      document.getElementById("errmsgcity").innerHTML =
        "Minimum 2 characters required";
      return false;
    }

    if (!pattern.test(city)) {
      document.getElementById("errmsgcity").innerHTML =
        "Only letters and spaces allowed";
      return false;
    }

    document.getElementById("errmsgcity").innerHTML = "";
    return true;
  }

  function validateProcedure() {
    if (!hidden || hidden.value === "") {
      document.getElementById("errmsgprocedure").innerHTML =
        "Please select Procedure";
      return false;
    }

    document.getElementById("errmsgprocedure").innerHTML = "";
    return true;
  }

  function validatePreferredTime() {
    if (!timeInput || timeInput.value === "") {
      document.getElementById("errmsgtime").innerHTML =
        "Preferred Time is required";
      return false;
    }

    document.getElementById("errmsgtime").innerHTML = "";
    return true;
  }

  nameInput.addEventListener("blur", validateName);
  mobileInput.addEventListener("blur", validateMobile);
  emailInput.addEventListener("blur", validateEmail);
  cityInput.addEventListener("blur", validateCity);
  timeInput.addEventListener("change", validatePreferredTime);
  timeInput.addEventListener("blur", validatePreferredTime);

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    let valid = true;

    if (!validateName()) valid = false;
    if (!validateMobile()) valid = false;
    if (!validateEmail()) valid = false;
    if (!validateCity()) valid = false;
    if (!validateProcedure()) valid = false;
    if (!validatePreferredTime()) valid = false;

    if (!valid) {
      const firstError = form.querySelector(".error-message:not(:empty)");
      if (firstError) {
        firstError.scrollIntoView({ behavior: "smooth", block: "center" });
      }
      return;
    }

    const submitBtn = document.getElementById("sbtForm");

    submitBtn.disabled = true;
    submitBtn.innerHTML = "Submitting...";

    const formData = new FormData(form);

    fetch(form.action, {
      method: "POST",
      body: formData,
      headers: {
        "X-Requested-With": "XMLHttpRequest",
      },
    })
      .then((response) => response.json())
      .then((response) => {
        Swal.fire({
          icon: response.status ? "success" : "error",
          title: response.status ? "Success" : "Failed",
          text: response.message,
          confirmButtonText: "OK",
          confirmButtonColor: "#22c55e",
        });

        if (response.status) {
          form.reset();

          if (hidden) hidden.value = "";
          if (hiddenName) hiddenName.value = "";

          if (typeof jQuery !== "undefined" && jQuery("#procedure").length) {
            jQuery("#procedure").val(null).trigger("change");
          }
        }

        submitBtn.disabled = false;
        submitBtn.innerHTML = "Request Call Back";
      })
      .catch((err) => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = "Request Call Back";

        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Unable to submit the form.",
          confirmButtonText: "OK",
        });
      });
  });
});
