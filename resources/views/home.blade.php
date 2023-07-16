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
      <a href="#carouselImg" class="navbar-brand">สำนักเราจะเป็นที่หนึ่งในใต้หล้า</a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#hamberger" aria-controls="hamberger" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="hamberger">
        <ul class="navbar-nav ms-auto my-2 my-lg-1">
          <li class="nav-item">
            <a href="#carouselImg" class="nav-link active" aria-current="page">หน้าแรก</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">ประวัติความเป็นมา</a>
          </li>
          <li class="nav-item">
            <a href="#horo" class="nav-link">วิธีการดูดวง</a>
          </li>
          <li class="nav-item">
            <a href="#horo-card" class="nav-link">ความหมายไพ่</a>
          </li>
          <li class="nav-item">
            <a href="#blogs" class="nav-link">Blogs</a>
          </li>
          <li class="nav-item">
            <a href="#FQAs" class="nav-link">FQAs</a>
          </li>
        </ul>
         <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="{{route('login')}}" class="nav-link">ออกจากระบบ</a>
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
        <img src="{{ asset('source/images/1.png') }}" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('source/images/2.png') }}" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('source/images/3.png') }}" class="d-block w-100">
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

  <div class="container pt-5 px-4">
     <h2 class="text-center pt-5 pb-3">ประวัติความเป็นมา</h2>
                    <p class="card-text text-center">
                    “ไพ่ยิปซี” หรือ “ไพ่ทาโรต์” คือไพ่ชนิดเดียวกัน โดยคำว่า “ไพ่ทาโรต์” (The Tarot) จะเป็นที่รู้จักในสากล ประเทศที่เคยได้ยินที่มาของศาสตร์การทำนายของชาวยิปซีนี้ก็จะเรียกว่า “ไพ่ทาโรต์” เป็นส่วนใหญ่ แต่ที่บ้านเรามักเรียกว่า “ไพ่ยิปซี” ตามประวัติความเป็นมาของไพ่

                    ไพ่ทาโรต์มีความเชื่อมโยงกับดวงดาว มักนำมาทำนายดวงบุคคลเกี่ยวกับความรัก ความสำเร็จ และภาพรวมของชีวิตอนาคต ความหมายของไพ่ยิปซีนั้นเชื่อมโยงกับดวงดาวต่างๆ
                    ไพ่ยิปซี เป็นศาสตร์การทำนายที่ใช้วิธีอ่านความหมายบนไพ่ มีทั้งหมด 78 ใบ แต่การดูไพ่ แบ่งออกเป็น ชุดหลัก 22 ใบ และชุดย่อย 56 ใบ <br>
                    สิ่งแรกที่ต้องรู้ก่อนที่จะไปดู วิธีดูดวงไพ่ยิปซี นั้น ก็คือต้องทำความรู้จักไพ่ยิปซีกันสักเล็กน้อย เริ่มจากไพ่ยิปซี 1 สำรับ จะมีไพ่ทั้งหมด 78 ใบ โดยจะแบ่งเป็นไพ่ 2 กลุ่ม ได้แก่ ไพ่ชุดใหญ่ (Major Arcana) มีจำนวน 22 ใบ และอีกหนึ่งสำรับก็คือ ไพ่ชุดเล็ก (Minor Arcana) มีจำนวน 56 ใบ ซึ่งไพ่ในแต่ละสำรับก็จะแบ่งออกเป็นหมวดอีก 4 หมวด ได้แก่ ถ้วย เหรียญ ดาบ และไม้เท้า ใครที่สนใจอยากจะลองหันดูดวงเองบ้างก็สามารถไปหาซื้อไพ่ยิปซีได้ตามร้านหนังสือต่าง ๆ หรือจะเลือกซื้อผ่านออนไลน์ก็ง่ายและสะดวก ซึ่งจะมีขายหลากหลายรูปแบบให้เลือก แต่ยังไงเสียความหมายหรือสัญลักษณ์ต่าง ๆ ก็จะยังคงเหมือนกัน และไพ่ยิปซีที่ได้รับความนิยมมากที่สุดนั่นก็คือ ชุดไรเดอร์เวต (Raider-Waite)
                    </p>
  </div>
</section>

<section id="horo">
    <div class="container pt-5 px-4">
     <h2 class="text-center pt-5 pb-3">วิธีการดูดวง</h2>
                    <p class="card-text text-center">
                    ใครที่อยากจะดูดวงด้วยตัวเองนั้นบอกเลยว่าง่าย ๆ เพียงแค่มีไพ่ยิปซี 1 สำรับ ก็สามารถดูดวงไพ่ยิปซีได้เลย ซึ่งวิธีการดูดวงที่เราจะมาแนะนำนั้นจะเป็นการดูดวงไพ่ยิปซีตามมาตรฐานทั่วไป คือ เป็นการทำนายไพ่ยิปซีจำนวน 10 ใบ หรือที่เรียกกันว่า “Celtic Cross” มาดูขั้นตอนกันเลย

                    Step 1 >>> ตรวจสอบความพร้อมของไพ่ยิปซีว่าอยู่ในสภาพที่พร้อมใช้งานหรือไม่ ถ้าไม่มีอะไรที่เสียหายก็เริ่มทำการล้างไพ่ทั้งหมดที่มีอยู่
                    Step 2 >>> จากนั้นคุณก็ทำการสับไพ่ยิปซีด้วยมือซ้ายตามอายุของคุณ ใครที่อายุเยอะหน่อยก็ต้องสับกันนานหน่อย
                    Step 3 >>> จากนั้นก็ให้ตัดแบ่งออกเป็น 3 กอง แล้วก็นำมารวมกันให้เป็นกองเดียวกัน และทำการกระจายไพ่ออกจากกัน
                    Step 4 >>> ให้เลือกไพ่ด้วยมือซ้ายมาทีละ 1 ใบ จนครบทั้ง 10 ใบ ซึ่งจะต้องนำไพ่ไปวางให้ถูกต้องตามหมายเลขที่กำหนด เนื่องจากแต่ละตำแหน่งก็จะมีความหมายที่ไม่เหมือนกัน ตามรูปนี้เลย
                    Step 5 >>> อ่านคำทำนายตามไปตามไพ่ยิปซีที่อยู่ในแต่ละตำแหน่งได้เลย
                    </p>
  </div>
</section>

<section id="horo-card">



    <div class="container">

        <h2 class="text-center pt-5">ความหมายไพ่</h2>

        <div class="row">
            <div class="col-lg-6 mx-auto d-flex justify-content-around my-2 flex-wrap">
                <a href="#" class="btn btn-outline-secondary btn-black m-2" data-filter="all">
                    ทั้งหมด
                </a>
                <a href="#" class="btn btn-outline-secondary btn-black m-2" data-filter="major">
                    ไพ่ชุดใหญ่
                </a>
                <a href="#" class="btn btn-outline-secondary btn-black m-2" data-filter="swords">
                    ไพ่ดาบ
                </a>
                <a href="#" class="btn btn-outline-secondary btn-black m-2" data-filter="wands">
                    ไพ่ไม้เท้า
                </a>
                <a href="#" class="btn btn-outline-secondary btn-black m-2" data-filter="coins">
                    ไพ่เหรียญ
                </a>
                <a href="#" class="btn btn-outline-secondary btn-black m-2" data-filter="cups">
                    ไพ่ถ้วย
                </a>
            </div>
        </div>

        <div class="pb-5">
            <h2 class="border-bottom"></h2>
        </div>



            <div class="row row-cols-1 row-cols-md-2">
                <!-- ไพ่ชุดใหญ่ -------------------->
                <div class="col-md-4 deckOfCard major" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_0.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">The Fool</h5>
                                    <p class="card-text">
                                    ไพ่หมายเลข 0 ไพ่แห่งการเริ่มต้นของ ไพ่ทาโร่ต์ หรือ ไพ่ยิปซี ในไพ่ชุดใหญ่ หรือ Major Arcana เป็นไพ่แห่งการผจญภัย อิสระ และพร้อมที่จะเดินหน้าแม้ข้างหน้าจะเป็นอันตราย
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4 deckOfCard major" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_1.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">The Magician</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้บ่งบอกลักษณะของคนที่มีความรู้ ความสามารถ ฉลาด เข้าใจโลก เป็นนักวิชาการ นักวิจัย แต่อีกมุมนึงก็อาจจะดูเป็นคนที่พูดเก่ง มีความรู้ มากเกินกว่าที่จะเป็นปฏิบัติจริง
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_2.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">THE HIGH PRIESTESS</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้บ่งบอกถึงพลังลึกลับซ่อนเร้น จิตวิญญาณ สัญชาตญาณ ความคิดที่ซ่อนเร้น ความซับซ้อน ไม่ชัดเจน ราชินีพระจันทร์ ผู้มีความไร้เดียงสาบริสุทธิ์ในตัว ดูภายนอกก็ดูตรงๆ แต่ภายในกลับลึกลับ ซับซ้อน น่าค้นหา
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_3.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">THE EMPRESS</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึงความอุดมสมบูรณ์ ธรรมชาติ ความสวยงาม ความเป็นแม่ และการให้กำเนิด บุคคลที่มีลักษณะตามไพ่ใบนี้นั้น จะเป็นคนที่ดูแลทุกคนเป็นอย่างดี มอบความรักให้อย่างทั่วถึง มีเสน่ห์อำนาจที่อีกฝ่ายยอมให้หมดทั้งใจ
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_4.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">THE EMPEROR</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง ความมั่นคง ความควบคุม ความนิ่ง ความเป็นพ่อ ที่เข้มแข็ง การดูแลปกป้อง บ่งบอกถึงคนที่มีลักษณะของความเป็นพ่อ เป็นผู้ชายสูง เป็นคนที่นิ่ง มั่นคง พร้อมดูแลปกป้องทุกคนด้วยกำลัง และความสามารถที่มี
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_5.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">THE HIEROPHANT</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง จารีต ประเพณี ศาสนา พิธีกรรม การสั่งสอนเผยแพร่ ไพ่ใบนี้เป็นลักษณะของไพ่ที่บ่งบอกถึงอะไรที่เป็นข้อตกลงร่วม ถ้าพูดถึงลักษณะคน ก็จะเป็นได้ทั้งพระ บาทหลวง ไปยันถึง ครูอาจารย์
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_6.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">THE LOVERS</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง ความรัก พรหมลิขิต การพบเจอ ความเข้ากันได้ โอกาสที่เข้ามา ทางเลือก ไพ่ใบนี้ชื่ออาจเหมือนความรัก ความสมหวัง แต่อันที่จริงแล้ว ไพ่ใบนี้คือทางเลือก
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_7.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">THE CHARIOT</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง ความมุ่งมั่น แน่วแน่ ความมุทะลุ และความสามารถในการควบคุม การเดินทาง ไพ่ใบนี้จะเป็นไพ่แห่งการเคลื่อนที่ เพื่อไปให้ถึงชัยชนะ แม้ยังไม่รู้ว่าตัวเองจะชนะหรือไม่ แต่ก็พร้อมลุย
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_8.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">STRENGTH</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง ความเข้มแข็ง ความอดทน การควบคุมจิตใจไพ่ใบนี้ความหมายเปรียบเหมือนความเข้มแข็งที่เราสามารถควบคุมภายในจิตใจ สามารถต้านทานความดุดัน ความโกรธ ในตัวเองได้
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_9.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">THE HERMIT</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง การปลีกวิเวก การแยกตัว การค้นหาตัวเอง ดูจิตใจตัวเอง การแยกตัวเพื่อมองสถานการณ์ในมุมกว้าง ไพ่ใบนี้เปรียบเสมือน นักพรต ที่ออกค้นหาตัวเอง ค้นหาคำตอบที่เราตามหา
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_10.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">WHEEL OF FORTUNE</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง โชคชะตาที่เปลี่ยนแปลง การเปลี่ยนแปลงที่ไม่สามารถควบคุมได้ ความโชคดี ไพ่ใบนี้เป็นไพ่ที่มีความหมายง่ายๆตรงๆ คือการเปลี่ยนแปลง
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_11.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">JUSTICE</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง ความยุติธรรม ความเท่าเทียม การปรับสมดุลให้เท่าเทียม การตัดสินใจอย่างยุติธรรม กฏหมาย
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_12.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">THE HANGED MAN</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง การเสียสละ การพัก ชั่วคราวเพื่อมองมุมใหม่ การตระหนักรู้
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_13.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">DEATH</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง การจบสิ้นเพื่อเริ่มต้นใหม่ การเปลี่ยนแปลงสภาพ ไพ่ใบนี้เป็นไพ่ที่ปกติคนมักจะตกใจ และกลัวเพราะมันหมายถึงเกี่ยวกับความตาย แต่อันที่จะจริงแล้ว ความหมายของมันคือการเปลี่ยนแปลง การจบบางสิ่งเพื่อเริ่มใหม่
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_14.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">TEMPERANCE</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง การหาสมดุล การปรับตัว การทดลอง และความอดทน ไพ่ใบนี้ถ้าดูจากรูป เทวดาไม่ก้าวลงน้ำซะทีเดียว ขาข้างนึงยังอยู่บนบก นั่นหมายความว่าเป็นการที่ยัง ไม่ตัดสินใจ การที่ยังดูสถานการณ์อยู่
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_15.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">THE DEVIL</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง การผูกมัด ความหลงใหล การเสพติด เซ็กส์ หรือกรรมที่ทำให้มีการผูกมัด ความหลงใหล การยึดติด ความงมงาย อาจเป็นได้ทั้งน้อย และมากอาจหมายถึงว่าเราจดจ่อกับสิ่งใดสิ่งนึงมากๆ
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_16.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">THE TOWER</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง การเปลี่ยนแปลงกระทันหัน เปลี่ยนแปลงอย่างรุนแรง การพังทลายการเปลี่ยนแปลง สิ่งที่เราสร้างขึ้นมาได้พังลง
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_17.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">THE STAR</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง ความหวัง การฟื้นฟูรักษา การเริ่มต้นใหม่ ไพ่ใบนี้เป็นไพ่เป็นไพ่แห่งดวงดาวที่ส่องสว่างเป็น ความหวัง การเริ่มต้นใหม่
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_18.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">THE MOON</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง ความกังวล ความกลัว สิ่งที่กลัวเก็บซ่อนไว้จะถูกเปิดเผย อารมณ์อ่อนไหว ความรู้สึกไม่ปลอดภัย
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_19.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">THE SUN</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง ความสดใส ความสุข ความสำเร็จ สิ่งดีๆ ที่กำลังเข้ามา สิ่งที่กำลังเปิดเผยชัดเจน ความขุ่นมัวที่หายไป
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_20.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">JUDGEMENT</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง การตัดสิน ผลของกรรม ผลของการกระทำ สิ่งที่ถูกปิดไว้จะถูกเปิดเผย ไพ่ใบนี้ความหมายของมันคือก็จะคล้ายๆ ทำดีได้ดี ทำชั่วได้ชั่ว
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="col-md-4" data-item="major">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/0/M_21.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">THE WORLD</h5>
                                    <p class="card-text">
                                    ไพ่ใบนี้มีความหมายถึง ความสมบูรณ์ การจบสิ้น ความสุข ความมีอิสระ ไพ่ใบนี้เป็นไพ่ใบสุดท้ายในชุด Major Arcana ซึ่งก็หมายความว่าเป็นไพ่ที่จบสิ้น สมบูรณ์ ในทุกๆ อย่าง มีอิสระและหลุดพ้นจากพันธนาการต่างๆ แล้ว
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- ไพ่ดาบ -------------------->
                <div class="col-md-4" data-item="swords">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/swords/1_s.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">ACE OF SWORDS</h5>
                                    <p class="card-text">
                                    หมายถึงการเริ่มต้นใหม่ การได้รับโอกาสใหม่ มีสิ่งใหม่ๆเข้ามา จุดเริ่มต้นใหม่ๆทางความคิด ความชัดเจน ชัดแจ้ง การตัดสินใจที่เด็ดขาด ตัดสิ่งที่มัวหมองออกไป ถึงเวลาแล้วที่คุณจะเริ่มต้นทำอะไรที่ถูกต้องตามหลักเหตุผล
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- ไพ่ไม้ -------------------->
                <div class="col-md-4 deckOfCard wands" data-item="wands">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/wand/1_w.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">ACE OF SWORDS</h5>
                                    <p class="card-text">
                                    หมายถึงการเริ่มต้นใหม่ การได้รับโอกาสใหม่ มีสิ่งใหม่ๆเข้ามา จุดเริ่มต้นใหม่ๆทางความคิด ความชัดเจน ชัดแจ้ง การตัดสินใจที่เด็ดขาด ตัดสิ่งที่มัวหมองออกไป ถึงเวลาแล้วที่คุณจะเริ่มต้นทำอะไรที่ถูกต้องตามหลักเหตุผล
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- ไพ่เหรียญ -------------------->
                <div class="col-md-4 deckOfCard coins" data-item="coins">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/coin/1_p.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">ACE OF SWORDS</h5>
                                    <p class="card-text">
                                    หมายถึงการเริ่มต้นใหม่ การได้รับโอกาสใหม่ มีสิ่งใหม่ๆเข้ามา จุดเริ่มต้นใหม่ๆทางความคิด ความชัดเจน ชัดแจ้ง การตัดสินใจที่เด็ดขาด ตัดสิ่งที่มัวหมองออกไป ถึงเวลาแล้วที่คุณจะเริ่มต้นทำอะไรที่ถูกต้องตามหลักเหตุผล
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ไพ่ถ้วย -------------------->
                <div class="col-md-4 deckOfCard" data-item="cups">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/images/card/cups/1_c.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">ACE OF SWORDS</h5>
                                    <p class="card-text">
                                    หมายถึงการเริ่มต้นใหม่ การได้รับโอกาสใหม่ มีสิ่งใหม่ๆเข้ามา จุดเริ่มต้นใหม่ๆทางความคิด ความชัดเจน ชัดแจ้ง การตัดสินใจที่เด็ดขาด ตัดสิ่งที่มัวหมองออกไป ถึงเวลาแล้วที่คุณจะเริ่มต้นทำอะไรที่ถูกต้องตามหลักเหตุผล
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>








    <!-- </div> -->



    <!-- </div> -->

</section>


<section id="blogs">

  <div class="container px-4 pt-5">
    <h2 class="pb-2 border-bottom">Blogs Today</h2>
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('source/images/Hadid.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">ดวงความรักวันนี้โดยแม่หมอโลมา</p>
            <p class="card-text text-muted text-end">อัพเดตเมื่อ: 7/9/2023</p>
        </div>
    </div>
  </div>

</section>

<section id="FQAs">

  <div class="container px-4 pt-5">
    <h2 class="pb-2 border-bottom">FQAs - คำถามที่พบบ่อย</h2>

    <div class="accordion accordion-flush py-5" id="FQAsAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="Hfqas1">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fqas1" aria-expanded="true" aria-controls="fqas1">
            สำนักเราจะเป็นที่หนึ่งในใต้หล้าเป็นเว็บไซต์เกี่ยวกับอะไร
          </button>
        </h2>
        <div id="fqas1" class="accordion-collapse collapse" aria-labelledby="Hfqas1" data-bs-parent="#FQAsAccordion">
          <div class="accordion-body">เป็นเว็บไซต์เกี่ยวกับการดูดวงด้วยไพ่ทาโรต์ ให้ความรู้ในด้านความหมายไพ่และการดูดวง และจัดทำสื่อนำเสนอเกี่ยวกับการดูดวง</div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="Hfqas2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fqas2" aria-expanded="false" aria-controls="fqas2">
            ทำอย่างไรจึงจะดูดวงกับสำนักเราจะเป็นที่หนึ่งในใต้หล้าได้
          </button>
        </h2>
        <div id="fqas2" class="accordion-collapse collapse" aria-labelledby="Hfqas2" data-bs-parent="#FQAsAccordion">
          <div class="accordion-body">ในการดูดวงกับสำนักเราจะเป็นที่หนึ่งในใต้หล้านั้น ท่านจะต้องทำการสมัครสมาชิกเพื่อเป็นสมาชิกกับทางเว็บไซต์ของเราก่อน จึงจะสามารถทำการดูดวงได้</div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="Hfqas3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fqas3" aria-expanded="false" aria-controls="fqas3">
            ดูดวงที่นี่เสียเงินไหม
          </button>
        </h2>
        <div id="fqas3" class="accordion-collapse collapse" aria-labelledby="Hfqas3" data-bs-parent="#FQAsAccordion">
          <div class="accordion-body">เสียเงินค่าดูดวงในแต่ละครั้ง แต่สำหรับสมาชิกใหม่จะสามารถทำการดูดวงได้ฟรี 1 ครั้ง</div>
        </div>
      </div>

    </div>
  </div>

</section>



<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-mute">&copy; 2022 by Pongsawadi</p>
      <a href="#carouseImg" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none navbar-brand">
          สำนักเราจะเป็นที่หนึ่งในใต้หล้า
      </a>
      <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="#carouseImg" class="nav-link px-2 text-muted">หน้าแรก</a></li>
          <li class="nav-item"><a href="#about" class="nav-link px-2 text-muted">ประวัติความเป็นมา</a></li>
          <li class="nav-item"><a href="้#horo" class="nav-link px-2 text-muted">วิธีการดูดวง</a></li>
          <li class="nav-item"><a href="้#horo-card" class="nav-link px-2 text-muted">ความหมายไพ่</a></li>
          <li class="nav-item"><a href="#blogs" class="nav-link px-2 text-muted">Blogs</a></li>
          <li class="nav-item"><a href="#FQAs" class="nav-link px-2 text-muted">FQAs</a></li>
      </ul>
  </footer>
</div>






    <script src="{{ asset('source/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('soure/custom.js') }}"></script>
    <!-- <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
