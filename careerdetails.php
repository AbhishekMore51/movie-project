<?php include './header.php' ?>

<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    .main-title {
      font-size: 48px;
      font-weight: 600;
    }

    .contant-block-1 {
      margin-bottom: 20px;
    }

    .color-des {
      color: #000 !important;
    }

    .contant-block-2,
    .contant-block-3 {
      color: #696871;
      font-size: 16px;
    }

    .contant-block-2 ul {
      list-style: disc;
      color: #696871;
      font-size: 16px;
      margin-left: 20px;
    }

    .contant-block-2 ul li {
      color: #696871;
      font-size: 16px;
      font-weight: 300;
      line-height: 20px;
      padding-top: 12.5px;
      padding-bottom: 12.5px;
    }

    .contant-block-2 ul li::marker {
      color: #19191b;
      font-size: 20px;
    }

    .contant-block-3 ul {
      list-style: disc;
      color: #696871;
      font-size: 16px;
      margin-left: 20px;
    }

    .contant-block-3 ul li {
      color: #696871;
      font-size: 16px;
      font-weight: 300;
      line-height: 20px;
      padding-top: 12.5px;
      padding-bottom: 12.5px;
    }

    .contant-block-3 ul li::marker {
      color: #19191b;
      font-size: 20px;
    }

    #card_title div h1 {
      font-size: 80px;
    }

    .modal-dialog {
      width: auto;
    }

    .modal-content {
      border-radius: 22px;
    }


    @media (max-width: 575px) {
      .modal-dialog {
        max-width: 700px;
      }
    }
  </style>
</head>
<div class="job-details-main" style="margin-top: 150px;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-11">
        <div class="job-details-content pb--0" id="location-section">

        </div>
      </div>
      <div class="col-lg-12">
        <span id="card_title" style="width: 100%;"></span>
      </div>
      <div class="col-lg-8">
        <div id="careerDetails"></div>
        <div class="job-details-content" style="padding-top: 65px;padding-bottom: 100px;">
          <div class="contant-block-4">
            <!-- Modal content start -->
            <div class="w3-container">
              <button onclick="document.getElementById('id01').style.display='block'" class="apply_btn_detail">
                Apply for this job
              </button>

              <div id="id01" class="w3-modal">
                <div class="w3-modal-content">
                  <div class="sign_up_content">
                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <!-- content start -->
                    <div class="main-block">
                      <div class="omega-form">
                        <form method="POST" id="career-form">
                          <div class="form-title text-center pb--25">
                            <h2 class="title form_res">Grow With Us</h2>
                          </div>
                          <div class="form-group" id="">
                            <!-- Designation -->
                            <input disabled class="form-control color-des" type="text" id="designation" placeholder="Designation">
                            <!-- Name -->
                            <input class="form-control" type="text" id="name" placeholder="Name" onblur="validname()">
                            <div id="name-invalid" class="invalid-feedback">
                              Please provide a valid name.
                            </div>
                            <div id="name-valid" class="valid-feedback">
                              Looks good!
                            </div>
                            <!-- Number -->
                            <input class="form-control" type="number" id="contactNumber" placeholder="Phone Number" onblur="validnumber()">
                            <div id="number-invalid" class="invalid-feedback">
                              Please provide a valid number.
                            </div>
                            <div id="number-valid" class="valid-feedback">
                              Looks good!
                            </div>
                            <!-- Email -->
                            <input class="form-control" type="email" id="email" placeholder="Email" onblur="validemail()">
                            <div id="email-invalid" class="invalid-feedback">
                              Please provide a valid email.
                            </div>
                            <div id="email-valid" class="valid-feedback">
                              Looks good!
                            </div>
                            <!-- File Upload -->
                            <input class="form-control" type="file" id="upload" name="upload" style="padding: 18px;">
                            (Upload JPG, pdf & png)
                            <span>
                            </span>
                          </div>
                          <div class="form-group form-check-label">
                            <label for="tarms-check">
                              <input class="d-none" type="checkbox" id="tarms-check" checked=""><span class="checkbox"></span>
                              <p>I agree to the <a href=""> Terms &amp; Condition </a></p>
                            </label>
                          </div>
                          <div class="form-group button-block text-center">
                            <button class="form-btn" onclick="validateForm()">Apply</button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- content end -->
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal content End -->

            <!-- Sucess Modal -->
            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="top: 30%;">
                <div class="modal-content">
                  <div class="modal-body">
                    <!-- <button type="button" class="close bg-white d-flex mfs30" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button> -->
                    <div>
                      <img style="width: 100px;" src="./image/gif/success.gif" class="d-flex m-auto" alt="Success">
                    </div>
                    <div class="text-center mt-4">
                      <h3>
                        <strong>
                          Thank you for applying!
                        </strong>
                      </h3>
                      <p style="padding: 15px 15px 0px 15px">
                        We are always looking for fresh new ideas and talent, So you may add your
                        strengths to our growing team. We'll review your application and contact
                        you for an interview shortly.
                      </p>
                      <a href="index.php">
                        <button class="apply_btn_detail">
                          Take me Home
                        </button>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <!-- Sucess Modal -->
          </div>
        </div>
      </div>
    </div>
  </div>



  <?php include './footer.php' ?>
  <script>
    $(document).ready(() => {
      getLocation();
    })

    function getLocation() {
      var url_string = window.location.search;
      var url = new URLSearchParams(url_string);
      var id = url.get("id");

      $.ajax({
        type: "GET",
        url: `https://api.fyndsigns.com/career/${id}`,
        headers: {
          Authorization: "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MjksInV1aWQiOiJmMWNjNWRiYS0zYTZjLTQ3MTYtOWZiMC03YzU3MmQ1NDUwMWUiLCJ0aW1lc3RhbXAiOiIxNjY3NjQ1MTEwNTExIiwiaWF0IjoxNjY3NjQ1MTEwLCJleHAiOjE2NzYxMTIzMTB9.Jwj2OYBuenKapwg_rNp4n5B5UgDbIKS0SVIgYsuoRCY"
        },
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function(data) {
          console.log(data, "data data");

          // for (let i = 0; i < data.length; i++) {
          let location_card = document.createElement("div");
          location_card.classList += "job-top-header";
          location_card.innerHTML = `
              <span class="location">
                <i class="icon icon-pin-3 mr--5"></i>
                  ${data.location}
                </span>
                <span class="badge purple">${data.descrpition}</span>
            `
          let card_title = document.createElement("div");
          card_title.classList += "contant-block-1 text-center";
          card_title.innerHTML = `
            <h1 class="main-title" style="margin-bottom: 50px">${data.title}</h1> 
            `

          let card_content = document.createElement("div");
          card_content.classList += "job-details-content";
          card_content.innerHTML = `
              <div class="contant-block-1 mb--40 mb-lg--65">
                  ${data.content}
              </div>
              <div class="contant-block-2 mb--40 mb-lg--65">
                <h2 class="block-title mb--20">What you’ll be doing</h2>
                  ${data.content2}
              </div>
              <div class="contant-block-3 mb--40 mb-lg--65">
                <h2 class="block-title mb--20">Skills &amp; Qualifications</h2>
                  ${data.skill}
              </div>
            `

          document.getElementById('location-section').append(location_card);
          document.getElementById('card_title').append(card_title);
          document.getElementById('careerDetails').append(card_content);
          // }
        }
      })
    }
  </script>

  <!-- Form -->
  <script>
    // defining terms for the form
    let vname, vnumber, vemail, vdesignation = false;
    let fileUrl = '';
    let designationList = [];

    function clrinput() {
      const inputs = document.querySelectorAll(
        '#designation,#name,#contactNumber,#email,#upload'
      );
      const invalids = document.querySelectorAll(
        '#name-invalid,#number-invalid,#email-invalid'
      );
      const valids = document.querySelectorAll(
        '#name-valid,#number-valid,#email-valid'
      );
      inputs.forEach(input => {
        input.value = '';
        input.style.borderColor = "";
      });
      valids.forEach(valid => {
        valid.style.display = "none";
      });
      invalids.forEach(invalid => {
        invalid.style.display = "none";
      });
    }

    // Form Section
    // Setting Designation
    $(document).ready(() => {
      getDetails();
    })

    async function getDetails() {
      var url_string = window.location.search;
      var url = new URLSearchParams(url_string);
      var id = url.get("id");

      await $.ajax({
        type: "GET",
        url: `https://api.fyndsigns.com/career/${id}`,
        headers: {
          Authorization: "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MjksInV1aWQiOiJmMWNjNWRiYS0zYTZjLTQ3MTYtOWZiMC03YzU3MmQ1NDUwMWUiLCJ0aW1lc3RhbXAiOiIxNjY3NjQ1MTEwNTExIiwiaWF0IjoxNjY3NjQ1MTEwLCJleHAiOjE2NzYxMTIzMTB9.Jwj2OYBuenKapwg_rNp4n5B5UgDbIKS0SVIgYsuoRCY"
        },
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function(data) {
          console.log(data, "data form");

          let designation = document.getElementById('designation');
          designation.value = data.title;
        }
      })
    }
    // Form Section
    // To validate the blur Events Start

    // Name
    function validname() {
      let name = document.getElementById('name').value;
      console.log(name, "name");
      if (name == "" || /^[a-zA-Z ]{2,30}$/.test(name) === false) {
        vname = false;
        document.getElementById("name").style.borderColor = "red";
        document.getElementById("name-invalid").style.display = "block";
        document.getElementById("name-valid").style.display = "none";
      } else {
        vname = true;
        document.getElementById("name").style.borderColor = "";
        document.getElementById("name-invalid").style.display = "none";
        document.getElementById("name-valid").style.display = "block";
      }
    }

    // Number
    function validnumber() {
      let number = document.getElementById("contactNumber").value;
      console.log(number, "number");
      if (/^[6-9]\d{9}$/i.test(number) === false || number.length <= 9 || number.length >= 11 || number == "") {
        vnumber = false;
        document.getElementById("contactNumber").style.borderColor = "red";
        document.getElementById("number-invalid").style.display = "block";
        document.getElementById("number-valid").style.display = "none";
      } else {
        vnumber = true;
        document.getElementById("contactNumber").style.borderColor = "";
        document.getElementById("number-invalid").style.display = "none";
        document.getElementById("number-valid").style.display = "block";
      }
    }

    // Email
    function validemail() {
      let email = document.getElementById("email").value;
      console.log(email, "email");
      if (email == "" || /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email) === false) {
        vemail = false;
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("email-invalid").style.display = "block";
        document.getElementById("email-valid").style.display = "none";
      } else {
        vemail = true;
        document.getElementById("email").style.borderColor = "";
        document.getElementById("email-invalid").style.display = "none";
        document.getElementById("email-valid").style.display = "block";
      }
    }

    // Uploading
    async function validateUpload() {
      let File = new FormData();
      File.append('file', upload.files[0]);
      await $.ajax({
        type: "POST",
        url: `https://api.varniindia.com/common/upload`,
        headers: {
          Authorization: "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MjksInV1aWQiOiJmMWNjNWRiYS0zYTZjLTQ3MTYtOWZiMC03YzU3MmQ1NDUwMWUiLCJ0aW1lc3RhbXAiOiIxNjY3NjQ1MTEwNTExIiwiaWF0IjoxNjY3NjQ1MTEwLCJleHAiOjE2NzYxMTIzMTB9.Jwj2OYBuenKapwg_rNp4n5B5UgDbIKS0SVIgYsuoRCY"
        },
        contentType: false, // tell jQuery not to set contentType
        processData: false, // tell jQuery not to process the data
        data: File,
        success: function(data) {
          fileUrl = data;
          console.log(data, "upload");
        }
      })
    }
    // To validate the blur Events End  

    // Form validation
    async function validateForm($event) {

      var url_string = window.location.search;
      var url = new URLSearchParams(url_string);
      var id = url.get("id");

      event.preventDefault();
      await validateUpload();
      let name = document.getElementById("name").value;
      let number = document.getElementById("contactNumber").value;
      let email = document.getElementById("email").value;

      let contactObj = {
        name: name.trim(),
        contactNumber: number,
        email: email,
        file: fileUrl,
        careerId: id,
      }
      // Converting data to JSON format
      var data = JSON.stringify(contactObj);

      // When all inputs will be true then the form will be submitted
      if (
        vname === true && vnumber === true && vemail === true
      ) {
        $.ajax({
          type: "POST",
          url: `https://api.fyndsigns.com/career-enqueries`,
          headers: {
            Authorization: "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MjksInV1aWQiOiJmMWNjNWRiYS0zYTZjLTQ3MTYtOWZiMC03YzU3MmQ1NDUwMWUiLCJ0aW1lc3RhbXAiOiIxNjY3NjQ1MTEwNTExIiwiaWF0IjoxNjY3NjQ1MTEwLCJleHAiOjE2NzYxMTIzMTB9.Jwj2OYBuenKapwg_rNp4n5B5UgDbIKS0SVIgYsuoRCY"
          },
          contentType: "application/json; charset=utf-8",
          dataType: "json",
          data: data,
          encode: true,
          success: function(data) {
            // document.getElementById("career-form").reset();
            clrinput();
            jQuery(`#${"successModal"}`).modal("show");
            $(".close").click(function() {
              jQuery(`#${"successModal"}`).modal("hide");
            });
            document.getElementById("career-form").reset();
          }
        })
      }
    }
  </script>