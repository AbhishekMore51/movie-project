<?php include './header.php' ?>

<head>
  <style>
    .title_res {
      font-size: 70px !important;
    }

    @media (max-width: 575px) {
      .title_res {
        font-size: 40px !important;
      }
    }
    @media (min-width: 576px) and (max-width: 1024px) {
      .title_res {
        font-size: 55px !important;
      }
    }
  </style>
</head>
<div class="inner-hero-area bg-gradient">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="inner-hero-text">
          <h1 class="title">Career</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="omga__video-area-2">
  <div class="container">
    <div class="section-title pb--40">
      <h2 class="title title_res">Start doing work that matters</h2>
      <div class="right-side">
        <p>Our philosophy is simple - hire a team of diverse, passionate people and foster a culture that empowers you to do your best work.</p>
      </div>
    </div>
    <!-- <div class="video-image mb-lg--80 mb--45">
      <img src="./image/jpeg/video-image-2.jpg" alt="">
      <a href="" data-fancybox=""><i class="icon icon-triangle-right-17-2"></i></a>
    </div> -->
  </div>
</div>
<!-- Feature section -->
<!-- <div class="career-feature-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-xl-4 col-md-6 mb--40">
        <div class="feature-widget--7">
          <div class="widget__icon">
            <span class="inner-circle circle-bg-blue"></span>
            <span class="outer-circle circle-bg-blue"></span>
          </div>
          <div class="widget__body">
            <h3 class="widget__heading h6">Work from anywhere</h3>
            <p>Many of us are able to work from home, a café, or a park whenever we want. Yay freedom!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4 col-md-6 mb--40">
        <div class="feature-widget--7">
          <div class="widget__icon">
            <span class="inner-circle circle-bg-red"></span>
            <span class="outer-circle circle-bg-red"></span>
          </div>
          <div class="widget__body">
            <h3 class="widget__heading h6">Flexible hours</h3>
            <p>Many of us are able to work from home, a café, or a park whenever we want. Yay freedom!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4 col-md-6 mb--40">
        <div class="feature-widget--7">
          <div class="widget__icon">
            <span class="inner-circle circle-bg-yellow"></span>
            <span class="outer-circle circle-bg-yellow"></span>
          </div>
          <div class="widget__body">
            <h3 class="widget__heading h6">Work and travel</h3>
            <p>Many of us are able to work from home, a café, or a park whenever we want. Yay freedom!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4 col-md-6 mb--40">
        <div class="feature-widget--7">
          <div class="widget__icon">
            <span class="inner-circle circle-bg-green"></span>
            <span class="outer-circle circle-bg-green"></span>
          </div>
          <div class="widget__body">
            <h3 class="widget__heading h6">Paid parental leave</h3>
            <p>Many of us are able to work from home, a café, or a park whenever we want. Yay freedom!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4 col-md-6 mb--40">
        <div class="feature-widget--7">
          <div class="widget__icon">
            <span class="inner-circle circle-bg-ash"></span>
            <span class="outer-circle circle-bg-ash"></span>
          </div>
          <div class="widget__body">
            <h3 class="widget__heading h6">Yearly bonuses</h3>
            <p>Many of us are able to work from home, a café, or a park whenever we want. Yay freedom!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4 col-md-6 mb--40">
        <div class="feature-widget--7">
          <div class="widget__icon">
            <span class="inner-circle circle-bg-blue"></span>
            <span class="outer-circle circle-bg-blue"></span>
          </div>
          <div class="widget__body">
            <h3 class="widget__heading h6">Smart salary</h3>
            <p>Many of us are able to work from home, a café, or a park whenever we want. Yay freedom!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- Job section -->
<div class="job-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-center">
        <div class="section-title">
          <h2 class="title">Open roles</h2>
          <p>These companies release their own versions of the operating systems with minor changes, and yet always.</p>
        </div>
      </div>
    </div>
    <div class="row mt-lg--30" id="card-roles">
    </div>
  </div>
</div>

<?php include './footer.php' ?>

<script>
  $(document).ready(() => {
    getRoles();
  })

  function getRoles() {
    $.ajax({
      type: "GET",
      url: `https://api.fyndsigns.com/career?filter=enabled||eq||true`,
      headers: {
        Authorization: "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MjksInV1aWQiOiJmMWNjNWRiYS0zYTZjLTQ3MTYtOWZiMC03YzU3MmQ1NDUwMWUiLCJ0aW1lc3RhbXAiOiIxNjY3NjQ1MTEwNTExIiwiaWF0IjoxNjY3NjQ1MTEwLCJleHAiOjE2NzYxMTIzMTB9.Jwj2OYBuenKapwg_rNp4n5B5UgDbIKS0SVIgYsuoRCY"
      },
      contentType: "application/json; charset=utf-8",
      dataType: "json",
      success: function(data) {
        console.log(data, "data_data");
        for (let i = 0; i < data.length; i++) {
          let card_roles = document.createElement("div");
          card_roles.classList += "col-lg-4 col-md-6 pt--30";
          card_roles.innerHTML = `
            <a class="card-job top-only" href="careerdetails.php?id=${data[i].id}">
              <div class="d-flex justify-content-between align-items-center mb--25">
                <span class="location">
                  <i class="icon icon-pin-3 mr--5"></i>
                    ${data[i].location}
                </span>
                <span class="badge blue">
                  ${data[i].descrpition}
                </span>
              </div>
              <h5 class="h5" id="title">${data[i].title}</h5>
            </a>
          `
          document.getElementById("card-roles").append(card_roles);
        }
      }
    })
  }
</script>