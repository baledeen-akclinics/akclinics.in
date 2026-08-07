document.addEventListener("DOMContentLoaded", function () {
  // Current page URL → source_url
  var sourceUrlInput = document.getElementById("source_url");
  if (sourceUrlInput) {
    sourceUrlInput.value =
      window.location.origin + window.location.pathname;
  }

  // Current page name → form_name (document title without site suffix)
  var formNameInput = document.getElementById("form_name");
  if (formNameInput) {
    var pageTitle = (document.title || "").trim();
    formNameInput.value =
      pageTitle.split(" - ")[0].trim() || pageTitle || "Contact Us";
  }

  // =====================================
  // Validation Functions
  // =====================================
  // =====================================
  // Validation Functions
  // =====================================

  function validateFullName() {
    const value = document.getElementById("full_name").value.trim();
    const pattern = /^[A-Za-z ]+$/;

    if (value === "") {
      document.getElementById("errmsgfullname").innerHTML =
        "Full Name is required";
      return false;
    }

    if (value.length < 3) {
      document.getElementById("errmsgfullname").innerHTML =
        "Minimum 3 characters required";
      return false;
    }

    if (!pattern.test(value)) {
      document.getElementById("errmsgfullname").innerHTML =
        "Only letters and spaces allowed";
      return false;
    }

    document.getElementById("errmsgfullname").innerHTML = "";
    return true;
  }

  function validateMobile() {
    const mobile = document.getElementById("mobile").value.trim();

    if (mobile === "") {
      document.getElementById("errmsgmobile").innerHTML =
        "Mobile Number is required";
      return false;
    }

    if (!/^[6-9]\d{9}$/.test(mobile)) {
      document.getElementById("errmsgmobile").innerHTML =
        "Enter valid 10 digit mobile number";
      return false;
    }

    document.getElementById("errmsgmobile").innerHTML = "";
    return true;
  }

  function validateEmail() {
    const email = document.getElementById("email").value.trim();
    const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === "") {
      document.getElementById("errmsgemail").innerHTML = "Email is required";
      return false;
    }

    if (!pattern.test(email)) {
      document.getElementById("errmsgemail").innerHTML =
        "Enter valid email address";
      return false;
    }

    document.getElementById("errmsgemail").innerHTML = "";
    return true;
  }

  function validateCity() {
    const city = document.getElementById("city").value.trim();
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

  function validateMessage() {
    const message = document.getElementById("message").value.trim();

    if (message.length < 5) {
      document.getElementById("errmsgmessage").innerHTML =
        "Minimum 5 characters ";
      return false;
    }

    document.getElementById("errmsgmessage").innerHTML = "";
    return true;
  }

  document
    .getElementById("full_name")
    .addEventListener("blur", validateFullName);
  document.getElementById("mobile").addEventListener("blur", validateMobile);
  document.getElementById("email").addEventListener("blur", validateEmail);
  document.getElementById("city").addEventListener("blur", validateCity);
  document.getElementById("message").addEventListener("blur", validateMessage);

  // =====================================
  // Submit Form
  // =====================================

  const hidden = document.getElementById("procedure_id");
  const hiddenName = document.getElementById("procedure_name");

  document
    .getElementById("enquiryForm")
    .addEventListener("submit", function (e) {
      e.preventDefault();

      let valid = true;

      if (!validateFullName()) valid = false;
      if (!validateMobile()) valid = false;
      if (!validateEmail()) valid = false;
      if (!validateCity()) valid = false;

      if (!hidden || hidden.value === "") {
        document.getElementById("errmsgprocedure").innerHTML =
          "Please select Procedure";
        valid = false;
      } else {
        document.getElementById("errmsgprocedure").innerHTML = "";
      }

      if (!valid) {
        const firstError = document.querySelector(
          "#enquiryForm .error-message:not(:empty)",
        );
        if (firstError) {
          firstError.scrollIntoView({ behavior: "smooth", block: "center" });
        }
        return;
      }

      const formData = new FormData(this);
      fetch(CONTACT_SUBMIT_URL, {
        method: "POST",
        body: formData,
      })
        .then((res) => {
          if (!res.ok) {
            return res.json().catch(function () {
              throw new Error("HTTP " + res.status);
            });
          }
          return res.json();
        })
        .then((response) => {
          if (response.response && response.response.status) {
            Swal.fire({
              icon: "success",
              title: "Success",
              text: response.response.message || "Submitted successfully.",
              confirmButtonText: "OK",
              confirmButtonColor: "#22c55e",
            });

            document.getElementById("enquiryForm").reset();

            if (hidden) hidden.value = "";
            if (hiddenName) hiddenName.value = "";

            if (typeof jQuery !== "undefined" && jQuery("#procedure").length) {
              jQuery("#procedure").val(null).trigger("change");
            }
          } else {
            var errorText = "Something went wrong.";
            if (response.response && response.response.message) {
              errorText = response.response.message;
            } else if (response.message) {
              errorText = response.message;
            } else if (response.errors) {
              errorText = Object.keys(response.errors)
                .map(function (k) {
                  return response.errors[k];
                })
                .join("\n");
            }

            Swal.fire({
              icon: "error",
              title: "Failed",
              text: errorText,
              confirmButtonText: "OK",
            });
          }
        })
        .catch((err) => {
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "Unable to submit the form.",
            confirmButtonText: "OK",
          });
        });
    });
});
