<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สำนักเราจะเป็นที่หนึ่งในใต้หล้า</title>
    <!-- import css -->
    <link rel="stylesheet" href="{{ asset('source/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('source/custom.css') }}">
</head>
<body>
<!-- NAV BAR ------------------------->
  <nav id="NavBar" class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a href="" class="navbar-brand">สำนักเราจะเป็นที่หนึ่งในใต้หล้า</a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#hamberger" aria-controls="hamberger" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="hamberger">
        <ul class="navbar-nav ms-auto my-2 my-lg-1">
          <li class="nav-item">
            <a href="index.html" class="nav-link active" aria-current="page">หน้าแรก</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">เกี่ยวกับเรา</a>
          </li>
          <li class="nav-item">
            <a href="#horo" class="nav-link">ทำนายดวง</a>
          </li>
          <li class="nav-item">
            <a href="#blogs" class="nav-link">Blogs</a>
          </li>
          <li class="nav-item">
            <a href="#FQAs" class="nav-link">FQAs</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- CAROUSEL -------------------------------->
  <div id="carouselImg" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselImg" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselImg" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselImg" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('source/images/img1.png') }}" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('source/images/img1.png') }}" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('source/images/img1.png') }}" class="d-block w-100">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselImg" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselImg" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



<!-- Content 1 ------------------->

<section id="about">
  <div class="TextContent container pt-5">
    <h1 class="brand text-center">วันนี้คุณพร้อมจะยิ่งใหญ่ไปกับพวกเราหรือยัง ? </h1>
  </div>

  <div class="container pt-5 px-4">
    <h2 class="pb-2 border-bottom">เราคือใคร ?</h2>
    <p class="text-center">
        เราคือนักศึกษาสาขาเทคโนโลยีสารสนเทศ วิทยาลัยเทคโนโลยีพงษ์สวัสดิ์ ที่สนใจในการทำนายดวงชะตา และอยากพัฒนาเว็บไซต์เพื่อเพิ่มความสะดวกสบายให้กับคนที่สนใจในด้านนี้เช่นเดียวกัน
    </p>
    <h3 class="text-center">สมาชิก</h3>
    <div class="row row-cols-1 row-cols-md-3 text-center py-5 align-items-center d-flex justify-content-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/Avatar.jpg') }}" alt="" class="card-img-top">
          <h4 class="card-title pt-3">Front-End</h4>
          <p class="card-text pb-3">นางสาว นตา พันธุ์ไชย เลขที่ 11</p>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/Avatar.jpg') }}" alt="" class="card-img-top">
          <h4 class="card-title pt-3">Back-End</h4>
          <p class="card-text pb-3">นางสาว ศศินา บูรณ์เจริญ เลขที่ 13</p>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/Avatar.jpg') }}" alt="" class="card-img-top">
          <h4 class="card-title pt-3">Support</h4>
          <p class="card-text pb-3">นาย อภิปราย ค้ำคูณ เลขที่ 24</p>
        </div>
      </div>
    </div>

  </div>

  <!-- <div class="container px-4">
    <h2 class="pb-2 border-bottom">ดูดวงกับเราดียังไง ?</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="text-dark flex-shrink-0 me-3">
          <i class="bi bi-text-paragraph fs-2"></i>
        </div>
        <div>
          <h2>ความแม่นยำของเนื้อหา</h2>
          <p>เรามีการปรับปรุงการตีความหมายไพ่อย่างต่อเนื่อง เพื่อเพิ่มความแม่นยำและความถูกต้องของเนื้อหา</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="text-dark flex-shrink-0 me-3">
          <i class="bi bi-ui-checks-grid fs-2"></i>
        </div>
        <div>
          <h2>มีหลายแพ็คเกจให้เลือกดู</h2>
          <p>เราทำหลายแพ็คเกจเพื่อตอบสนองความต้องการและเพิ่มความแม่นยำของเนื้อหาในการตอบคำถามของผู้ใช้งาน</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="text-dark flex-shrink-0 me-3">
          <i class="bi bi-credit-card fs-2"></i>
        </div>
        <div>
          <h2>ช่องทางการชำระเงิน</h2>
          <p>เรามีการรองรับชำระเงินหลายช่องทาง เพื่อเพิ่มความสะดวกสบายแก่ผู้ใช้งาน</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="text-dark flex-shrink-0 me-3">
          <i class="bi bi bi-clock-history fs-2"></i>
        </div>
        <div>
          <h2>สะดวกสบาย</h2>
          <p>เนื่องจากเว็บเราเป็นการดูดวงแบบออนไลน์จึงช่วยประหยัดเวลาและเพิ่มความสะดวกสบายให้กับผู้ใช้งาน </p>
        </div>
      </div>

    </div>
  </div> -->


</section>

<section id="horo">

  <!-- <div class="container px-4 Recommand-list">
    <h2 class="pb-2 border-bottom">โปรโมชั่นและแพ็คเกจแนะนำ</h2>
    <div class="row row-cols-1 row-cols-md-3 text-center py-5 align-items-center d-flex justify-content-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">ดูดวงฟรี</h4>
          </div>
          <div class="card-body">
            <h3 class="card-title">0฿<small class="text-mute fw-light">/1 ครั้ง</small></h3>
            <ul class="list-unstyled mt-3 mb-4">
              <li>ดูดวงฟรี 1 คำถาม</li>
              <li>ไม่จำกัดหมวดหมู่คำถาม</li>
              <li>ปรึกษาเพิ่มเติมฟรี 5นาที</li>
              <li>** สำหรับสมาชิกใหม่เท่านั้น **</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">ดูดวงรายสัปดาห์</h4>
          </div>
          <div class="card-body">
            <h3 class="card-title">49฿<small class="text-mute fw-light">/ครั้ง</small></h3>
            <ul class="list-unstyled mt-3 mb-4">
              <li>ดูดวงรายสัปดาห์ 1ครั้ง</li>
              <li>ไม่จำกัดหมวดหมู่คำถาม</li>
              <li>ปรึกษาเพิ่มเติมฟรี 10นาที</li>
              <li>เว้นไว้ก่อนยังไม่รู้</li>
            </ul>
            <button class="w-100 btn btn-primary btn-lg">เลือก</button>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">ดูดวงรายเดือน</h4>
          </div>
          <div class="card-body">
            <h3 class="card-title">89฿<small class="text-mute fw-light">/ครั้ง</small></h3>
            <ul class="list-unstyled mt-3 mb-4">
              <li>เว้นไว้ก่อนยังไม่รู้</li>
              <li>เว้นไว้ก่อนยังไม่รู้</li>
              <li>เว้นไว้ก่อนยังไม่รู้</li>
              <li>เว้นไว้ก่อนยังไม่รู้</li>
            </ul>
            <button class="w-100 btn btn-lg btn-primary">เลือก</button>
          </div>
        </div>
      </div>
    </div>
  </div> -->


  <!-- รบกวนแก้ให้หน่อยค้าบบบบบ เนื้อหาไพ่กับรูป รูปใส่ไว้ใน public > source > images // วิธีเรียกรูป {{ asset('source/images/ไฟล์รูป')}} -->

    <div class="container px4">
        <h2 class="pb-2 border-bottom">ความหมายไพ่</h2>

      <div class="row row-cols-1 row-cols-md-3 text-center pt-5 align-items-center d-flex justify-content-center">

      <div class="col" style="width: 18rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
            <!-- ใส่รูป -->
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <!-- ชื่อไพ่ -->
          <div class="card-text">The Magician</div>
        </div>

        <!--

                    ใส่ความหมายไพ่(เนื้อหาหลังการ์ด) ไว้ในคอมเม้นนี้

         -->
      </div>
      <div class="col" style="width: 18rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">The high Priestess</div>
        </div>
      </div>

      <div class="col" style="width: 18rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">The Empress</div>
        </div>
      </div>
      <div class="col" style="width: 18rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">The Emperor</div>
        </div>
      </div>
      <div class="col" style="width: 18rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">The Hierophant</div>
        </div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 text-center pt-5 align-items-center d-flex justify-content-center">
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">The Lovers</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">The Chariot</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">Strength</div>
        </div>
      </div>

      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">The Hermit</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">The Wheel of Fortune</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">Justice</div>
        </div>
      </div>
    </div><div class="row row-cols-1 row-cols-md-3 text-center pt-5 align-items-center d-flex justify-content-center">
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">The Hanged Man</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">Death</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">Temperance</div>
        </div>
      </div>

      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">The Devil</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">The Tower</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">The Star</div>
        </div>
      </div>
    </div><div class="row row-cols-1 row-cols-md-3 text-center pt-5 align-items-center d-flex justify-content-center">
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">The Moon</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">The Sun</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">Judgement</div>
        </div>
      </div>

      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">The Wolrd</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">1 of cups</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">2 of cups</div>
        </div>
      </div>
    </div><div class="row row-cols-1 row-cols-md-3 text-center pt-5 align-items-center d-flex justify-content-center">
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">3 of cups</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">5 of cups</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">6 of cups</div>
        </div>
      </div>

      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">7 of cups</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">8 of cups</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">9 of cups</div>
        </div>
      </div>
    </div><div class="row row-cols-1 row-cols-md-3 text-center pt-5 align-items-center d-flex justify-content-center">
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">10 of cups</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">Page of cups</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">Knight of cups</div>
        </div>
      </div>

      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">Queen of cups</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">King of cups</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แฟนเก่า</div>
        </div>
      </div>
    </div><div class="row row-cols-1 row-cols-md-3 text-center pt-5 align-items-center d-flex justify-content-center">
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">โสด</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">มีแฟน</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">มีแฟน</div>
        </div>
      </div>

      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แอบชอบ</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แอบชอบ</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แฟนเก่า</div>
        </div>
      </div>
    </div><div class="row row-cols-1 row-cols-md-3 text-center pt-5 align-items-center d-flex justify-content-center">
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">โสด</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">มีแฟน</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">มีแฟน</div>
        </div>
      </div>

      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แอบชอบ</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แอบชอบ</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แฟนเก่า</div>
        </div>
      </div>
    </div><div class="row row-cols-1 row-cols-md-3 text-center pt-5 align-items-center d-flex justify-content-center">
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">โสด</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">มีแฟน</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">มีแฟน</div>
        </div>
      </div>

      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แอบชอบ</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แอบชอบ</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แฟนเก่า</div>
        </div>
      </div>
    </div><div class="row row-cols-1 row-cols-md-3 text-center pt-5 align-items-center d-flex justify-content-center">
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">โสด</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">มีแฟน</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">มีแฟน</div>
        </div>
      </div>

      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แอบชอบ</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แอบชอบ</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แฟนเก่า</div>
        </div>
      </div>
    </div><div class="row row-cols-1 row-cols-md-3 text-center pt-5 align-items-center d-flex justify-content-center">
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">โสด</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">มีแฟน</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">มีแฟน</div>
        </div>
      </div>

      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แอบชอบ</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แอบชอบ</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แฟนเก่า</div>
        </div>
      </div>
    </div><div class="row row-cols-1 row-cols-md-3 text-center pt-5 align-items-center d-flex justify-content-center">
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">โสด</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">มีแฟน</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">มีแฟน</div>
        </div>
      </div>

      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แอบชอบ</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แอบชอบ</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แฟนเก่า</div>
        </div>
      </div>
    </div><div class="row row-cols-1 row-cols-md-3 text-center pt-5 align-items-center d-flex justify-content-center">
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">โสด</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">มีแฟน</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">มีแฟน</div>
        </div>
      </div>

      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แอบชอบ</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แอบชอบ</div>
        </div>
      </div>
      <div class="col" style="width: 12rem;">
        <div class="card mb-4 rounded-3 shadow-sm">
          <img src="{{ asset('source/images/2.png') }}" alt="" class="card-img-top">
          <div class="card-text">แฟนเก่า</div>
        </div>
      </div>
    </div>
    </div>

</section>


<section id="blogs">

  <div class="container px-4 pt-5">
    <h2 class="pb-2 border-bottom">Blogs Today</h2>
    <h1 class="text-center pt-5">COMING SOON</h1>
  </div>

</section>

<section id="FQAs">

  <div class="container px-4 pt-5">
    <h2 class="pb-2 border-bottom">FQAs</h2>

    <div class="accordion accordion-flush py-5" id="FQAsAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="Hfqas1">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fqas1" aria-expanded="true" aria-controls="fqas1">

          </button>
        </h2>
        <div id="fqas1" class="accordion-collapse collapse" aria-labelledby="Hfqas1" data-bs-parent="#FQAsAccordion">
          <div class="accordion-body">ต้องสมัครสมาชิกของเว็บไซต์ nสำนักเราจะเป็นหนึ่งในใต้หล้าก่อนถึงจะสามารถเข้าดูดวงกับเราได้</div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="Hfqas2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fqas2" aria-expanded="false" aria-controls="fqas2">
            Question 2
          </button>
        </h2>
        <div id="fqas2" class="accordion-collapse collapse" aria-labelledby="Hfqas2" data-bs-parent="#FQAsAccordion">
          <div class="accordion-body">Answer 2</div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="Hfqas3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fqas3" aria-expanded="false" aria-controls="fqas3">
            Question 3
          </button>
        </h2>
        <div id="fqas3" class="accordion-collapse collapse" aria-labelledby="Hfqas3" data-bs-parent="#FQAsAccordion">
          <div class="accordion-body">Answer 3</div>
        </div>
      </div>

    </div>
  </div>

</section>



<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-mute">&copy; 2022 by Pongsawadi</p>
      <a href="" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none navbar-brand">
          สำนักเราจะเป็นที่หนึ่งในใต้หล้า
      </a>
      <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="index.html" class="nav-link px-2 text-muted">หน้าแรก</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link px-2 text-muted">เกี่ยวกับเรา</a></li>
          <li class="nav-item"><a href="้horo.html" class="nav-link px-2 text-muted">ทำนายดวง</a></li>
          <li class="nav-item"><a href="blogs.html" class="nav-link px-2 text-muted">Blogs</a></li>
          <li class="nav-item"><a href="fqas.html" class="nav-link px-2 text-muted">FQAs</a></li>
      </ul>
  </footer>
</div>






    <script src="{{ asset('source/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
