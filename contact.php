<?php include 'header.php'; ?>

<head>
  <style>
    @media (max-width: 575px) {
      .title-res {
        letter-spacing: -0.5px !important;
        margin-bottom: 30px !important;
      }
      .btn-res{
        margin: 0px 40px;
      }
    }
  </style>
</head>

<div class="inner-hero-area bg-gradient">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="inner-hero-text">
          <h1 class="title">Get in touch</h1>
          <p>
            If you have any questions. Just fill in the contact form, and we will answer you shortly.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="omga-01__contact-section pt--40 pb--40 pt-md--120 pb-md--120">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-title">
          <h2 class="title-res">We are always open 24/7 for you.</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-xl-5 offset-xl-1 order-lg-2">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4 col-lg-12">
            <div class="contact-widget-block mb--55">
              <h3 class="title">Call us</h3>
              <a class="contact-details" href="tel:+919022824757">+91 90228 24757</a><br>
              <a class="contact-details" href="tel:+918010335201">+91 80103 35201</a>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-12">
            <div class="contact-widget-block mb--55">
              <h3 class="title">Email us</h3>
              <a class="contact-details" href="mailto:fyndsigns@gmail.com">fyndsigns@gmail.com</a>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-12">
            <div class="contact-widget-block mb--55">
              <h3 class="title">Reach Out</h3>
              <p>Thane,</p>
              <p>Maharashtra, India</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 order-lg-1">
        <div class="omega-contact-form" id="#form-messages">
          <!-- <form action="./plugins/php/mailer.php">
                  <input type="text" class="form-control" placeholder="Your name" id="name" />
                  <input type="text" class="form-control" placeholder="Email address" id="email" />
                  <input type="text" class="form-control" placeholder="Phone Number" id="number" />
                  <textarea placeholder="Write your message" name="message" class="form-control" id="message"></textarea>
                  <button class="btn btn--primary hvr-bounce-to-left">
                    Send Message
                  </button>
                </form> -->
          <form id="contact-form-submit" name="contactusform" method="POST">
            <div class="row row--10">
              <div class="col-lg-12">
                <div class="form-group">
                  <input type="text" class="form-control" id="fullName" placeholder="Enter Your Full Name" onblur="validname()">
                  <div id="name-invalid" class="invalid-feedback">
                    Please provide a valid name.
                  </div>
                  <div id="name-valid" class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <input type="text" class="form-control" id="contactNumber" placeholder="Enter Your Phone Number " onblur="validnumber()">
                  <div id="number-invalid" class="invalid-feedback">
                    Please provide a valid contact number
                  </div>
                  <div id="number-valid" class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Enter Your Email " onblur="validemail()">
                  <div id="email-invalid" class="invalid-feedback">
                    Please provide a valid email.
                  </div>
                  <div id="email-valid" class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <textarea id="message" class="form-control" placeholder="Enter Your Message" onblur="validmessage()" cols="1" rows="2"></textarea>
                  <div id="message-invalid" class="invalid-feedback">
                    Message should be less than 400 characters
                  </div>
                  <div id="message-valid" class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
              <button class="btn btn--primary hvr-bounce-to-left btn-res">
                <a type="button" onclick="validateForm()">
                  Send Message
                </a>
              </button>
            </div>
          </form>

          <!-- Modal after Submitting Start -->
          <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close bg-white d-flex mfs30" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <div>
                    <img style="width: 50px;" src="./image/png/modal/check.png" class="d-flex m-auto" alt="Success">
                  </div>
                  <div class="text-center mt-4">
                    <h3>
                      <strong>
                        Thank You
                      </strong>
                    </h3>
                    <p>
                      Your enquiry for career has been submitted successfully.
                    </p>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- Modal after Submitting End -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer section -->
<?php include 'footer.php'; ?>

<script>
  let vname, vnumber, vemail, vmessage = false;

  function clrinput() {
    const inputs = document.querySelectorAll('#fullName,#contactNumber,#email,#message');
    const invalids = document.querySelectorAll(
      '#name-invalid,#email-invalid,#number-invalid,#message-invalid');
    const valids = document.querySelectorAll('#name-valid,#email-valid,#number-valid,#message-valid');
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

  //To validate name on blur event
  function validname() {
    let name = document.getElementById("fullName").value;
    console.log(name, "name-aaja")
    if (name == "" || /^[a-zA-Z][a-zA-Z ]+[a-zA-Z]{3,30}$/.test(name) === false) {
      vname = false;
      document.getElementById("fullName").style.borderColor = "red";
      document.getElementById("name-invalid").style.display = "block";
      document.getElementById("name-valid").style.display = "none";
    } else {
      vname = true;
      document.getElementById("fullName").style.borderColor = "";
      document.getElementById("name-invalid").style.display = "none";
      document.getElementById("name-valid").style.display = "block";
    }
  }

  //to validate email on blur event
  function validemail() {
    let email = document.getElementById("email").value;
    console.log(email, "emailid");
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

  // To validate Number
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

  async function validmessage() {
    let message = document.getElementById("message").value;
    if (message.length >= 400 || message === "") {
      vmessage = false;
      document.getElementById("message").style.borderColor = "red";
      document.getElementById("message-invalid").style.display = "block";
      document.getElementById("message-valid").style.display = "none";
    } else {
      vmessage = true;
      document.getElementById("message").style.borderColor = "";
      document.getElementById("message-invalid").style.display = "none";
      document.getElementById("message-valid").style.display = "block";
    }
  }

  async function validateForm() {
    let name = document.getElementById("fullName").value;
    let number = document.getElementById("contactNumber").value;
    let email = document.getElementById("email").value;
    let description = document.getElementById("message").value;

    let contactObj = {
      fullName: name.trim(),
      contactNumber: number,
      email: email,
      message: description.trim(),
    }
    console.log(contactObj, 'payload')
    //converting data to json format
    var data = JSON.stringify(contactObj);
    //when all the inputs are true then input will be submitted
    if (vname === true && vnumber === true && vemail === true && vmessage === true) {
      $.ajax({
        type: "POST",
        url: `https://api.fyndsigns.com/contacts`,
        headers: {
          Authorization: "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MjksInV1aWQiOiJmMWNjNWRiYS0zYTZjLTQ3MTYtOWZiMC03YzU3MmQ1NDUwMWUiLCJ0aW1lc3RhbXAiOiIxNjY3NjQ1MTEwNTExIiwiaWF0IjoxNjY3NjQ1MTEwLCJleHAiOjE2NzYxMTIzMTB9.Jwj2OYBuenKapwg_rNp4n5B5UgDbIKS0SVIgYsuoRCY"
        },
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        data: data,
        encode: true,
      }).done(function(data) {
        //modal called after succesful submission;
        clrinput();
        jQuery(`#${"successModal"}`).modal("show");
        $(".close").click(function() {
          jQuery(`#${"successModal"}`).modal("hide");
        });
        document.getElementById("contact-form-submit").reset();
      });
    } else {
      alert("Please enter your details first !");
    }
  }
</script>