document.addEventListener("DOMContentLoaded", function () {
  //==========================================
  // Validation Functions
  //==========================================
const pageUrlField = document.getElementById("page_url");

if (pageUrlField) {
    pageUrlField.value = window.location.href;
}
  function validateName() {
    const name = document.getElementById("name").value.trim();
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
    const mobile = document.querySelector('input[name="Mobile"]').value.trim();

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
    const email = document.getElementById("email").value.trim();
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
    const city = document.querySelector('input[name="City"]').value.trim();

    if (city === "") {
      document.getElementById("errmsgcity").innerHTML = "City is required";
      return false;
    }

    if (city.length < 2) {
      document.getElementById("errmsgcity").innerHTML = "Enter valid city";
      return false;
    }

    document.getElementById("errmsgcity").innerHTML = "";
    return true;
  }

  //==========================================
  // Blur Events
  //==========================================

  document.getElementById("name").addEventListener("blur", validateName);
  document
    .querySelector('input[name="Mobile"]')
    .addEventListener("blur", validateMobile);
  document.getElementById("email").addEventListener("blur", validateEmail);
  document
    .querySelector('input[name="City"]')
    .addEventListener("blur", validateCity);

  //==========================================
  // Procedure Search
  //==========================================

  const input = document.getElementById("procedure");
  const hidden = document.getElementById("procedure_id");
  const list = document.getElementById("procedureList");

  if (!input || !hidden || !list) {
    return;
  }

  let timer = null;

  function loadProcedures(keyword = "") {
    fetch(
      API_BASE_URL + "/procedure-categories?q=" + encodeURIComponent(keyword),
    )
      .then((res) => res.json())
      .then((response) => {
        list.innerHTML = "";

        if (!response.status || !response.data.procedure_categories.length) {
          list.style.display = "none";
          return;
        }

        response.data.procedure_categories.forEach(function (item) {
          const div = document.createElement("div");

          div.className = "procedure-item";
          div.innerText = item.name;

          div.onclick = function () {
            input.value = item.name;
            hidden.value = item.id;

            document.getElementById("errmsgprocedure").innerHTML = "";

            list.style.display = "none";
          };

          list.appendChild(div);
        });

        list.style.display = "block";
      })
      .catch(function (err) {});
  }

  input.addEventListener("focus", function () {
    if (list.children.length > 0) {
      list.style.display = "block";
    } else {
      loadProcedures("");
    }
  });

  input.addEventListener("input", function () {
    hidden.value = "";

    clearTimeout(timer);

    timer = setTimeout(function () {
      loadProcedures(input.value.trim());
    }, 500);
  });

  document.addEventListener("click", function (e) {
    if (!e.target.closest(".procedure-wrapper")) {
      list.style.display = "none";
    }
  });

  //==========================================
  // Submit Validation
  //==========================================

  //==========================================
  // Submit Form
  //==========================================

  const form = document.getElementById("formRequestCallback");

  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();

      let valid = true;

      if (!validateName()) valid = false;
      if (!validateMobile()) valid = false;
      if (!validateEmail()) valid = false;
      if (!validateCity()) valid = false;

      if (hidden.value === "") {
        document.getElementById("errmsgprocedure").innerHTML =
          "Please select Procedure";

        valid = false;
      } else {
        document.getElementById("errmsgprocedure").innerHTML = "";
      }

      if (!valid) {
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

            hidden.value = "";
            list.innerHTML = "";
          }

          submitBtn.disabled = false;
          submitBtn.innerHTML = "Submit Now";
        })
        .catch((err) => {
          submitBtn.disabled = false;
          submitBtn.innerHTML = "Submit Now";

          Swal.fire({
            icon: "error",
            title: "Error",
            text: "Unable to submit the form.",
            confirmButtonText: "OK",
          });
        });
    });
  }
});
