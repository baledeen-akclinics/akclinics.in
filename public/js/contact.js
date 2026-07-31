document.addEventListener("DOMContentLoaded", function () {
  // Current URL
  document.getElementById("source_url").value =
    window.location.origin + window.location.pathname;

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
  // Procedure Search
  // =====================================

  const input = document.getElementById("procedure");
  const list = document.getElementById("procedureList");
  const hidden = document.getElementById("procedure_id");

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
          let div = document.createElement("div");

          div.className = "procedure-item";
          div.innerText = item.name;

          div.onclick = function () {
            input.value = item.name;
            hidden.value = item.id;

            list.style.display = "none";
          };

          list.appendChild(div);
        });

        if (document.activeElement === input) {
          list.style.display = "block";
        }
      })
      .catch(function (err) {
        console.log(err);
      });
  }

  // Input Focus
  input.addEventListener("focus", function () {
    if (list.children.length > 0) {
      list.style.display = "block";
    } else {
      loadProcedures("");
    }
  });

  // Search
  input.addEventListener("input", function () {
    hidden.value = "";

    clearTimeout(timer);

    timer = setTimeout(function () {
      if (input.value.trim() === "") {
        loadProcedures("");
      } else {
        loadProcedures(input.value);
      }
    }, 800);
  });

  // Outside Click
  document.addEventListener("click", function (e) {
    if (!e.target.closest(".procedure-wrapper")) {
      list.style.display = "none";
    }
  });

  // =====================================
  // Submit Form
  // =====================================

  document
    .getElementById("enquiryForm")
    .addEventListener("submit", function (e) {
      e.preventDefault();

      let valid = true;

      if (!validateFullName()) valid = false;
      if (!validateMobile()) valid = false;
      if (!validateEmail()) valid = false;
      // if (!validateMessage()) valid = false;

      if (hidden.value === "") {
        // alert("Please select Procedure");
        valid = false;
      }

      if (!valid) {
        return;
      }

      const formData = new FormData(this);

      fetch("<?= site_url('contact/submit') ?>", {
        method: "POST",
        body: formData,
      })
        .then((res) => res.json())
        .then((response) => {
          console.log(response);

          // this.reset();
        })
        .catch(function (err) {
          console.log(err);
        });
    });
});
