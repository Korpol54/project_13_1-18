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
        </ul>
         <!-- <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="{{route('login')}}" class="nav-link">เข้าสู่ระบบ</a>
            </li>
            <li class="nav-item">
                <a href="{{route('register')}}" class="nav-link">สมัครสมาชิก</a>
            </li>
         </ul> -->
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

    <div class="container text-center pt-5">
        <div class="">
            <p class="h3">
                คำแนะนำ
            </p>
            <p class="h5 pt-3">
                เว็บไซต์นี้เป็นเพียงเว็บให้ข้อมูลและความหมายของไพ่ทาโรต์หรือไพ่ยิปซีเท่านั้น เรียนผู้ใช้งานทุกท่านโปรดใช้วิจารณญาณในการอ่าน ผู้สร้างหวังว่าทุกท่านจะได้รับประโยชน์จากเว็บไซต์นี้และเพลิดเพลินไปกับเนื้อหาของเรา หากผิดพลาดประการใดขออภัย ณ ที่นี้ ขอบคุณค่ะ
            </p>
        </div>
    </div>



<!-- Content 1 ------------------->

<section id="about">

  <div class="container pt-5 px-4">
     <h2 class="text-start pt-5 pb-3 border-bottom">ประวัติความเป็นมา</h2>

        <div class="clearfix pt-3">
            <img src="{{ asset('source/images/Hadid.png') }}" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">

            <p>
            “ไพ่ยิปซี” หรือ “ไพ่ทาโรต์” คือไพ่ชนิดเดียวกัน โดยคำว่า “ไพ่ทาโรต์” (The Tarot) จะเป็นที่รู้จักในสากล ประเทศที่เคยได้ยินที่มาของศาสตร์การทำนายของชาวยิปซีนี้ก็จะเรียกว่า “ไพ่ทาโรต์” เป็นส่วนใหญ่ แต่ที่บ้านเรามักเรียกว่า “ไพ่ยิปซี” ตามประวัติความเป็นมาของไพ่

            ไพ่ทาโรต์มีความเชื่อมโยงกับดวงดาว มักนำมาทำนายดวงบุคคลเกี่ยวกับความรัก ความสำเร็จ และภาพรวมของชีวิตอนาคต ความหมายของไพ่ยิปซีนั้นเชื่อมโยงกับดวงดาวต่างๆ (ที่มา: https://www.thairath.co.th/horoscope/belief/2179348) <br>
            ไพ่ทาโรต์หรือไพ่ยิปซี ปรากฏครั้งแรกในช่วงปลายยุคกลางในยุโรป ไพ่ถูกตกแต่งโดยต้นแบบของยุคสมัย ทัศนคติและตัวละครได้รับอิทธิพลอย่างมากจากความเชื่อและการปฏิบัติของชาวบ้านซึ่งส่วนใหญ่มาจากรากเหง้าโบราณ ไพ่ถูกใช้ในการปฏิบัติทางไสยศาสตร์ซึ่งเป็นเรื่องธรรมดามากในเวลานั้นและเป็นเกมด้วย

            ไพ่ทาโรต์หรือไพ่ยิปซีสมัยใหม่เป็นหนี้จํานวนมากกับ Order of the Golden Dawn ซึ่งเป็นกลุ่มลึกลับในลอนดอนที่ใช้งานในช่วงปลายศตวรรษที่สิบเก้าและต้นศตวรรษที่ยี่สิบ

            Arthur Edward Waite มอบหมายให้วาดภาพสําหรับไพ่ตามข้อกําหนดของเขาจาก Pamela Colman Smith สมาชิก Golden Dawn ซึ่งเป็นศิลปินที่มีพรสวรรค์ ในความอยุติธรรมที่ยอดเยี่ยม Pamela Smith ไม่ได้รับการเฉลิมฉลองและสํารับเป็นที่รู้จักเป็นเวลาหลายปีในชื่อ Rider-Waite (หลังจาก Rider ผู้จัดพิมพ์และ A.. Waite) ทุกวันนี้เราอาจมีแนวโน้มที่จะยอมรับบทบาทที่เป็นเครื่องมือของ Smith ในการสร้างสํารับและเรียกมันว่า Smith Waite หรือ Rider Waite Smith

            สํารับ Smith Waite ได้กลายเป็นคลาสสิกในยุคของเราและสํารับสมัยใหม่ส่วนใหญ่มีพื้นฐานมาจากภาพประกอบที่สวยงามและเป็นสัญลักษณ์มากมายเหล่านี้ สํารับคลาสสิกอื่น ๆ ได้แก่ ไพ่ทาโรต์แห่งมาร์เซย์และไพ่ทาโรต์ของ Aleister Crowley (ที่มา: https://insighttimer.com/blog/what-is-tarot/)
            </p>
        </div>

  </div>
</section>

<section id="horo">
    <div class="container pt-5 px-4">
     <h2 class="text-start pt-5 pb-3 border-bottom">วิธีการดูดวง</h2>

        <div class="clearfix pt-3">
            <img src="{{ asset('source/images/img2.png') }}" class="col-md-6 float-md-start mb-3 me-md-3" alt="...">

            <p>
            <b>การดูดวงไพ่ยิปซีตามมาตรฐานทั่วไป คือ เป็นการทำนายไพ่ยิปซีจำนวน 10 ใบ หรือที่เรียกกันว่า “Celtic Cross” มาดูขั้นตอนกันเลย</b> <br>
            1. ตรวจสอบความพร้อมของไพ่ยิปซีว่าอยู่ในสภาพที่พร้อมใช้งานหรือไม่ ถ้าไม่มีอะไรที่เสียหายก็เริ่มทำการล้างไพ่ทั้งหมดที่มีอยู่ <br>
            2. จากนั้นคุณก็ทำการสับไพ่ยิปซีด้วยมือซ้ายตามอายุของคุณ ใครที่อายุเยอะหน่อยก็ต้องสับกันนานหน่อย <br>
            3. จากนั้นก็ให้ตัดแบ่งออกเป็น 3 กอง แล้วก็นำมารวมกันให้เป็นกองเดียวกัน และทำการกระจายไพ่ออกจากกัน <br>
            4. ให้เลือกไพ่ด้วยมือซ้ายมาทีละ 1 ใบ จนครบทั้ง 10 ใบ ซึ่งจะต้องนำไพ่ไปวางให้ถูกต้องตามหมายเลขที่กำหนด เนื่องจากแต่ละตำแหน่งก็จะมีความหมายที่ไม่เหมือนกัน ตามรูปนี้เลย <br>
            5. อ่านคำทำนายตามไปตามไพ่ยิปซีที่อยู่ในแต่ละตำแหน่งได้เลย <br>
            (ที่มา: https://shopee.co.th/blog/tarot-card-reading/)
            </p>
        </div>

    </div>
</section>

<section id="horo-card">



    <div class="container">

        <h2 class="text-center pt-5">ความหมายไพ่</h2>

        <div class="row filter-controller">
            <div class="col-lg-6 mx-auto d-flex justify-content-around my-2 flex-wrap">
                <button class="btn btn-outline-secondary btn-black m-2" id="all">
                    ทั้งหมด
                </button>
                <button class="btn btn-outline-secondary btn-black m-2 filter-type" data-category="major">
                    ไพ่ชุดใหญ่
                </button>
                <button class="btn btn-outline-secondary btn-black m-2 filter-type" data-category="swords">
                    ไพ่ดาบ
                </button>
                <button class="btn btn-outline-secondary btn-black m-2 filter-type" data-category="wands">
                    ไพ่ไม้เท้า
                </button>
                <button class="btn btn-outline-secondary btn-black m-2 filter-type" data-category="coins">
                    ไพ่เหรียญ
                </button>
                <button class="btn btn-outline-secondary btn-black m-2 filter-type" data-category="cups">
                    ไพ่ถ้วย
                </button>
            </div>
        </div>

        <div class="pb-5">
            <h2 class="border-bottom"></h2>
        </div>

        <div class="row row-cols-1 row-cols-md-2 Deck0fCard">
<!-- 0 THE FOOL -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems0">
                    <img src="{{ asset('source/images/card/0/M_0.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems0" class="modal fade" tabindex="-1" aria-labelledby="cardItems0" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THE FOOL</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_0.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 0 ไพ่แห่งการเริ่มต้น เป็นไพ่แห่งการผจญภัย อิสระ และพร้อมที่จะเดินหน้าแม้ข้างหน้าจะเป็นอันตราย เด็กหนุ่มในไพ่เป็นคนที่เหมือนจะโง่ ในสายตาคนอื่น แต่เค้าอาจจะพอใจที่จะลุยเดินหน้าแม้ข้างหน้าจะมีหน้าผา การเตรียมใจ เตรียมพร้อมเผชิญหน้ากับอันตราย เพื่อสิ่งที่ตัวเองต้องการ เป็นเหมือนอิสระที่แท้จริงที่เด็กคนนี้ต้องการ ไพ่ใบนี้ถ้าเป็นไพ่ที่บ่งบอกลักษณะของคน ก็จะเป็นคนที่มีลักษณะมีความคิดอิสระ ความรักอิสระ ดูไร้เดียงสา ซึ่งจริงๆก็อาจจะไม่ได้ไร้เดียงสา แต่เราเลือกว่าเราชอบแล้ว รักแล้ว ที่จะตามสิ่งที่ฝันตามสิ่งที่ชอบ แม้จะประสบความสำเร็จหรือไม่ก็ตาม
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 1 THE MEGICIAN -->
            <div class="col-md-2 pb-3 Thecard" data-category="major" >
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems1">
                    <img src="{{ asset('source/images/card/0/M_1.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems1" class="modal fade" tabindex="-1" aria-labelledby="cardItems1" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THE MAGICIAN</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_1.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 1 ไพ่ใบนี้บ่งบอกถึงพลัง ความรู้ ความสามารถ ที่สามารถสร้างสิ่งต่าง ๆ ขึ้นมาใหม่ได้ ตัวจอมเวทย์ในไพ่ มือขวาถือคทาที่ชี้ขึ้นฟ้า มืซ้าย ชี้ลงพื้น เป็นการเชื่อมพลังจักรวาลและพื้นโลก ความเป็นจริงและจิตวิญญาณ บนโต๊ะมี เหรียญ ดาบ ไม้ และถ้วย ซึ่งเป็นวัตถุสัญลักษณ์ในไพ่ชุดเล็ก ที่เปรียบเสมือ ดิน น้ำ ลม ไฟ หรือ วัตถุ อารมณ์ ความปรารถนา และความรู้ บ่งบอกให้เห็นว่าชายผู้นี้เข้าใจ มีความรู้ มีความสามารถที่จะจัดการอย่างบนโลกได้ ไพ่ใบนี้บ่งบอกลักษณะของคนที่มีความรู้ ความสามารถ ฉลาด เข้าใจโลก เป็นนักวิชาการ นักวิจัย  แต่ในอีกมุมนึงก็อาจจะดูเป็นคนที่พูดดี พูดเก่ง มีความรู้ มากเกินกว่าที่จะเป็นปฏิบัติจริง
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 2 THE HIGH PRIESTESS -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems2">
                    <img src="{{ asset('source/images/card/0/M_2.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems2" class="modal fade" tabindex="-1" aria-labelledby="cardItems2" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THE HIGH PRIESTESS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_2.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 2 ไพ่ใบนี้บ่งบอกถึงพลังลึกลับซ่อนเร้น จิตวิญญาณ สัญชาตญาณ ความคิดที่ซ่อนเร้น ความซับซ้อน ไม่ชัดเจน เหมือนพระจันทร์ที่ส่องแสงสลัวตอนกลางคืน ราชินีพระจันทร์ ผู้มีความไร้เดียงสาบริสุทธิ์ในตัว ดูภายนอกก็ดูตรง ๆ แต่ภายในกลับลึกลับ ซับซ้อน ดูน่าค้นหา ไพ่ใบนี้บ่งบอกถึงคนที่มีสัญชาตญาณ มีเซนส์ มีความลึกลับ ซับซ้อนในความคิดและการกระทำ แม้อาจจะไม่ใช่เรื่องดี ที่มีความขัดแย้งและปกปิด แต่จริง ๆ แล้วสิ่งที่ปกปิดไว้นั้นกลับมีความไร้เดียงสาบริสุทธิ์อยู่
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 3 THE EMPRESS -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems3">
                    <img src="{{ asset('source/images/card/0/M_3.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems3" class="modal fade" tabindex="-1" aria-labelledby="cardItems3" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THE EMPRESS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_3.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 3 ไพ่ใบนี้มีความหมายถึงความอุดมสมบูรณ์ ธรรมชาติ ความสวยงาม ความเป็นแม่ และ การให้กำเนิด การมีลูก บุคคลที่มีลักษณะตามไพ่ใบนี้นั้น จะเป็นคนที่ดูแลทุกคนเป็นอย่างดี มอบความรักให้อย่างทั่วถึง มีเสน่ห์อำนาจที่อีกฝ่ายยอมให้หมดทั้งใจ อาจหมายถึงคนที่มีความเป็นแม่ หรือเป็นแม่จริง ๆ เลี้ยงและดูแลลูกอย่างดีก็เป็นได้ ไพ่ใบนี้ส่วนใหญ่ถ้าคนเป็นคู่กันแล้ว ก็อาจจะหมายความถึงการให้กำเนิดลูก ถ้าใครรอมีลูกหรือถามเรื่องมีลูก แล้วออกไพ่ใบนี้ขึ้นมา ก็มีแววจะตั้งครรภ์
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 4 THE EMPEROR -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems4">
                    <img src="{{ asset('source/images/card/0/M_4.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems4" class="modal fade" tabindex="-1" aria-labelledby="cardItems4" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THE EMPEROR</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_4.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 4 พ่ใบนี้มีความหมายถึง ความมั่นคง ความควบคุม ความนิ่ง ความเป็นพ่อ ที่เข้มแข็ง การดูแลปกป้อง ไพ่จักรพรรดิใบนี้เป็นไพ่ที่บ่งบอกถึงคนที่มีลักษณะของความเป็นพ่อ เป็นผู้ชายสูง เป็นคนที่นิ่ง มั่นคง พร้อมดูแลปกป้องทุกคนด้วยกำลังและความสามารถที่มี อาจดูเป็นคนแข็ง ๆ เป็นคนตรง  ๆ ไม่อ่อนโยน อ่อนหวาน แต่ก็มีความมั่นคง และจริงใจ ไพ่ใบนี้อาจหมายถึงบุคคลที่มีอายุมาก เป็นหัวหน้า เป็นผู้นำคนอื่น หรือคนที่มีประสบการณ์ในด้านต่างๆสูง
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 5 THE HIEROPHANT -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems5">
                    <img src="{{ asset('source/images/card/0/M_5.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems5" class="modal fade" tabindex="-1" aria-labelledby="cardItems5" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THE HIEROPHANT</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_5.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 5 ไพ่ใบนี้มีความหมายถึง จารีต ประเพณี ศาสนา พิธีกรรม การสั่งสอนเผยแพร่ ไพ่ใบนี้เป็นลักษณะของไพ่ที่บ่งบอกถึงอะไรที่เป็นข้อตกลงร่วม เป็นกฏ เป็นประเพณี จารีต ที่ประพฤติตาม รวมถึงความเชื่อและศาสนา ถ้าพูดถึงลักษณะคน ก็จะเป็นได้ทั้งพระ บาทหลวง ไปยันถึง ครูอาจารย์ ผู้สั่งสอน ผู้อบรมให้ความรู้ต่างๆ หรืออาจเป็นคนที่ประพฤติตนตามจารีต เป็นคนอนุรักษ์นิยม ทำตามสิ่งที่เรียนรู้มา ไม่นอกกรอบ พิธีกรรมต่างๆทางศาสนา และรวมถึงงานแต่งงานที่มีพิธีกรรมต่าง ๆ ไพ่ใบนี้ก็สามารถให้ความหมายเช่นนั้นได้
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 6 -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems6">
                    <img src="{{ asset('source/images/card/0/M_6.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems6" class="modal fade" tabindex="-1" aria-labelledby="cardItems6" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THE LOVERS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_6.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 6 ไพ่ใบนี้มีความหมายถึง ความรัก พรหมลิขิต การพบเจอ ความเข้ากันได้ โอกาสที่เข้ามา ทางเลือก ไพ่ใบนี้ชื่ออาจเหมือนความรัก ความสมหวัง แต่อันที่จริงแล้ว ไพ่ใบนี้คือทางเลือก ถ้าดูจากรูปบนไพ่ จะเห็นว่า เทวดาได้ทำให้คนสองคนมาเจอกัน เปรียบเหมือนพรหมลิขิต แต่ก็ยังไม่ได้ตัดสินใจอะไรชัดเจนขึ้นมา เพราะถ้าดูจะเห็นว่า ฝ่ายหญิง หรือ อีฟ มองหน้าเทวดราเหมือนสงสัยว่า "ผู้ชายคนนี้ใช่จริง ๆ รึเปล่า" ดังนั้นไพ่ใบนี้จึงเปรียบเสมือนโอกาสที่เข้ามา ซึ่งเราต้องเลือกและตัดสินใจ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 7 -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems7">
                    <img src="{{ asset('source/images/card/0/M_7.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems7" class="modal fade" tabindex="-1" aria-labelledby="cardItems7" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THE CHARIOT</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_7.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 7 ไพ่ใบนี้มีความหมายถึง ความมุ่งมั่น แน่วแน่ ความมุทะลุ และความสามารถในการควบคุม การเดินทาง ความหมายของไพ่ใบนี้จะเป็นไพ่แห่งการเคลื่อนที่ การมุทะลุ เพื่อไปให้ถึงชัยชนะ ดังนั้นไพ่นี้จึงเปรียบเสมือนไพ่ที่พร้อมออกศึกเพื่อชัยชนะ แม้ยังไม่รู้ว่าตัวเองจะชนะหรือไม่ แต่ก็พร้อมลุยไปข้างหน้าด้วยความสามารถทั้งหมดที่มี ถ้าให้เปรียบเหมือนการเจอสิ่งกีดขวาง คนอื่นคงหักหลบ แต่อัศวินรถไม้เขาจะพุ่งชนไปตรง ๆ ให้สิ่งกีดขวางหรือ กำแพงพังไป ลักษณะของคนที่เป็นอัศวินรถม้านั้น จะเป็นคนที่ค่อนข้าง มุทะลุ ดุดัน และดื้อในความคิดของตัวเองและแนวทางของตัวเอง แต่ก็เป็นคนที่เชื่อฟังคำสั่งของคนที่ตัวเองเคารพยอมรับได้ดีอีกด้วย
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 8 -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems8">
                    <img src="{{ asset('source/images/card/0/M_8.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems8" class="modal fade" tabindex="-1" aria-labelledby="cardItems8" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ STRENGTH</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_8.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 8 ไพ่ใบนี้มีความหมายถึง ความเข้มแข็ง ความอดทน  การควบคุมจิตใจ ไพ่ใบนี้ความหมายเปรียบเหมือนความเข้มแข็งที่เราสามารถควบคุมภายในจิตใจ สามารถต้านทานความดุดัน ความโกรธ ความดิบเถื่อนซึ่งเปรียบเสมือนสิงโตในตัวเองลงได้ เพราะนั้นคือความแข็งแกร่งที่แท้จริง ไพ่ใบนี้ถ้าเป็นตำแหน่งแทนตัวบุคคลจะหมายถึง คนที่มีความเข้มแข็งแบบ อ่อนนอก แข็งใน ข้างในจิตใจเข้มแข็ง อ่อนโยนแต่ไม่อ่อนแอ อาจหมายถึงการที่เรามีความเข้มแข็ง สามารถเอาชนะอุปสรรคปัญหาต่างๆได้อย่างดีอีกด้วย
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 9 -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems9">
                    <img src="{{ asset('source/images/card/0/M_9.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems9" class="modal fade" tabindex="-1" aria-labelledby="cardItems9" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THE HERMIT</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_9.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 9 ไพ่ใบนี้มีความหมายถึง การปลีกวิเวก การแยกตัว การค้นหาตัวเอง ดูจิตใจตัวเอง การแยกตัวเพื่อมองสถานการณ์ในมุมกว้าง ไพ่ใบนี้เปรียบเสมือน นักพรต ที่ออกค้นหาตัวเอง ค้นหาคำตอบที่เราตามหา หรืออาจไปถึงเรื่องการเข้าถึงเรื่องจิตวิญญาณของตัวเอง ถ้าคนที่มีไพ่ใบนี้เป็นตัวแทน ก็หมายถึงคนที่ค่อนข้างจะแยกตัวออกจากสังคม เป็นคนที่แยกตัวออกไป เพื่อจะค้นหาตัวเอง หาคำตอบบางอย่าง หรือมองปัญหาในมุมกว้าง อาจหมายถึง พระ นักบวช ฤาษี ที่ปลีกวิเวก ธุดงค์ ก็เป็นได้ครับ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 10 -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems10">
                    <img src="{{ asset('source/images/card/0/M_10.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems10" class="modal fade" tabindex="-1" aria-labelledby="cardItems10" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ WHEEL OF FORTUNE</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_10.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 10 ไพ่ใบนี้มีความหมายถึง โชคชะตาที่เปลี่ยนแปลง การเปลี่ยนแปลงที่ไม่สามารถควบคุมได้ ความโชคดี ไพ่ใบนี้เป็นไพ่ที่มีความหมายง่ายๆตรงๆ คือการเปลี่ยนแปลง แต่เวลาตีความจะตีได้ยาก เพราะเราไม่รู้เลยว่ามันหมุนไปทางไหน ดวงจะดีหรือร้าย ก็ไม่ทราบแน่ชัดครับ อาจต้องดูไพ่ประกอบ คือ ไพ่ทางซ้ายของไพ่วงล้อโชคชะตานี้ จะหมายถึงจุดเริ่มต้น อดีต หรือปัจจุบัน กำลังหมุนไปไพ่ทางขวาคือ สิ่งที่กำลังจะเปลี่ยนไปถึง หรืออนาคตนั่นเอง เนื่องจากไพ่ใบนี้เป็นไพ่ชุดใหญ่ การเปลี่ยนแปลงจึงเป็นสิ่งที่เราควบคุมได้ยาก เหมือนเป็นโชคชะตาจากฟ้าที่เรากำหนดไม่ได้
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 11 -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems11">
                    <img src="{{ asset('source/images/card/0/M_11.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems11" class="modal fade" tabindex="-1" aria-labelledby="cardItems11" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ JUSTICE</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_11.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 11 ไพ่ใบนี้มีความหมายถึง ความยุติธรรม ความเท่าเทียม การปรับสมดุลให้เท่าเทียม การตัดสินใจอย่างยุติธรรม กฏหมาย ไพ่ใบนี้จะมีความหมายในลักษณะความยุติธรรม อะไรถูกก็คือถูก อะไรผิดก็คือผิด ตัดสินใจด้วยหลักเหตุผล ไม่ใช้อารมณ์ตัดสิน ไม่ลำเอียง เป็นการปรับสมดุลอย่างเท่าเทียมกัน คือการทำแล้วต้องได้ผลที่ทำอย่างเท่าเทียม ทำดีได้ดี ทำชั่วได้ชั่ว ไพ่ใบนี้ถ้าเป็นลักษณะคน จะหมายถึงคนที่ตัดสินใจอย่างยุติธรรม ได้รับอะไรก็จะตอบแทนอย่างเท่าเทียม มีเหตุผล อาจหมายถึง ข้าราชการ ตำรวจ อัยการ ผู้พิพากษา หรือรวมๆคือผู้ที่มีอำนาจบังคับใช้กฏหมาย
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 12 -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems12">
                    <img src="{{ asset('source/images/card/0/M_12.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems12" class="modal fade" tabindex="-1" aria-labelledby="cardItems12" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THE HANGED MAN</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_12.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 12 ไพ่ใบนี้มีความหมายถึง การเสียสละ การพัก ชั่วคราวเพื่อมองมุมใหม่ การตระหนักรู้  ไพ่ใบนี้โดยปกติคนมักจะแปลกันไม่ค่อยดีเท่าไหร่นัก เพราะเป็นไพ่ของชายที่ถูกทรมานโดยการห้อยหัว แต่จริงๆแล้ว ไพ่ใบนี้ค่อนข้างจะมีความหมายที่ดีในระดับนึง เพราะตัวชายคนนี้โอเคที่จะถูกห้อยหัว และการห้อยหัวทำให้เค้าสามารถมองมุมใหม่ๆ จนตระหนักรู้อะไรบางอย่างได้ ดังนั้นไพ่ใบนี้โดยปกติจะหมายถึง การที่เราพัก หรือทนทรมานกับเรื่องบางอย่าง แต่เราก็รับได้ แล้วก็ทำให้เราได้เรียนรู้ ได้ตระหนักรู้อะไรบางอย่างขึ้นมาด้วย
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 13 -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems13">
                    <img src="{{ asset('source/images/card/0/M_13.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems13" class="modal fade" tabindex="-1" aria-labelledby="cardItems13" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ DEATH</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_13.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 13 ไพ่ใบนี้มีความหมายถึง การจบสิ้นเพื่อเริ่มต้นใหม่ การเปลี่ยนแปลงสภาพ ไพ่ใบนี้เป็นไพ่ที่ปกติคนมักจะตกใจและกลัวเพราะมันหมายถึงเกี่ยวกับความตาย แต่อันที่จะจริงแล้ว ความหมายของมันคือการเปลี่ยนแปลง การจบบางสิ่งเพื่อเริ่มใหม่ โดยความหมายจะดีหรือไม่ดี ก็แล้วแต่สถานการณ์และไพ่อื่น ๆ ประกอบ แต่ถ้าดูตามเนื้อความของไพ่แล้วจะพบว่า พระสังฆราชได้มาหยุดยั้งการนำพาความตายของยมทูตไว้ นั่นก็หมายความว่าสิ่งที่ไม่ดีที่ผ่านมามันกำลังจะจบลง ไพ่ใบนี้อาจหมายถึง การเดินทางไปต่างประเทศ การไปโรงพยาบาล หรือสถานที่ที่คนตายได้
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 14 -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems14">
                    <img src="{{ asset('source/images/card/0/M_14.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems14" class="modal fade" tabindex="-1" aria-labelledby="cardItems14" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ TEMPERANCE</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_14.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 14 ไพ่ใบนี้มีความหมายถึง การหาสมดุล การปรับตัว การทดลอง และความอดทน ไพ่ใบนี้ถ้าดูจากรูป เทวดาไม่ก้าวลงน้ำซะทีเดียว ขาข้างนึงยังอยู่บนบกอยู่ นั่นหมายความว่าเป็นการที่ยัง ไม่ตัดสินใจ การที่ยังดูสถานการณ์อยู่ หรือกำลังปรับตัว ทดลอง อยู่ ดังภาพที่เทวดาผสมถ้วยสองถ้วยที่แตกต่างเข้าด้วยกัน เป็นการหา สมดุล ระหว่างสิ่งต่าง ๆ ที่ตรงข้ามกันในสถานการณ์นั้น ๆ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 15 -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems15">
                    <img src="{{ asset('source/images/card/0/M_15.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems15" class="modal fade" tabindex="-1" aria-labelledby="cardItems15" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THE DEVIL </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_15.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 15 ไพ่ใบนี้มีความหมายถึง การผูกมัด ความหลงใหล การเสพติด เซ็กส์ หรือกรรมที่ทำให้มีการผูกมัด ไพ่ใบนี้เป็นไพ่ที่ใคร ๆ เห็นก็จะแปลไม่ค่อยดีนัก อาจเพราะตัวไพ่เป็นปีศาจที่ใคร ๆ ค่อนข้างเกรงกลัว  แต่จริง ๆ แล้วไพ่ใบนี้หมายถึง ความหลงใหล การยึดติด ความงมงาย อาจเป็นได้ทั้งน้อยและมาก อาจหมายถึงว่าเราจดจ่อกับสิ่งใดสิ่งนึงมาก ๆ เช่น ติดซีรีย์ละคร ติดแฟน ติดเพื่อน ติดการเล่นกีฬา ก็เป็นได้ ซึ่งแน่นอนว่าการที่เราติดอะไรเยอะๆ ย่อมส่งผลเสียต่อเราในบางมุม เช่น เสียสุขภาพกาย สุขภาพจิต ไพ่ใบนี้อาจหมายถึงกรรมที่เราได้ก่อไว้ ที่มันได้ผูกไว้ ทำให้เรายังติดอยู่กับสิ่งๆนั้นไม่หลุดไปเสียที หรืออาจแปลว่าการทำอะไรที่ผิดศีลธรรม ก็ได้ เนื่องจากมันมีความหลงมัวเมาอยู่
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 16 -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems16">
                    <img src="{{ asset('source/images/card/0/M_16.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems16" class="modal fade" tabindex="-1" aria-labelledby="cardItems16" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THE TOWER</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_16.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 16 ไพ่ใบนี้มีความหมายถึง การเปลี่ยนแปลงกระทันหัน เปลี่ยนแปลงอย่างรุนแรง การพังทลาย ไพ่หอคอยใบนี้ โดยปกติก็มักจะแปลในทางที่ไม่ดีนัก เพราะไพ่มันเกี่ยวกับการพัง การเกิดภัยพิบัติ การเกิดอุบัติเหตุ แต่ไพ่ใบนี้จริง ๆโดยหลักรวมๆแล้วแปลว่า การเปลี่ยนแปลง สิ่งที่เราสร้างขึ้นมาได้พังลง ถ้าดูจากตัวไพ่หอคอย หอคอยนี้ได้ถูกสร้างขึ้นมาบนพื้นที่ที่ไม่ควรสร้างเท่าไหร่นัก มันไม่มันคง สิ่งที่เราสร้างขึ้นมาอย่างไม่มั่นคง มันกำลังพังลงอย่างรวดเร็ว ไม่ว่าจะความสัมพันธ์ ความรัก หรือรวมไปถึงพวกความกังวล ความคิดต่างๆที่เราสร้างขึ้นมา (แม้แต่กรรม หรือ โซ่จาก The Devil ก็ด้วย) กำลังพังลงอย่างฉับพลัน แล้วเราต้องออกมาจากสิ่งนั้นแล้ว ดังนั้นไพ่ใบนี้จะมองว่าดีหรือไม่ดีก็ได้ อยู่ที่ไพ่ประกอบใบอื่น ๆ หรือสถานการณ์ตอนนั้น

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 17 -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems17">
                    <img src="{{ asset('source/images/card/0/M_17.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems17" class="modal fade" tabindex="-1" aria-labelledby="cardItems17" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THE STAR</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_17.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 17 ไพ่ใบนี้มีความหมายถึง ความหวัง การฟื้นฟูรักษา การเริ่มต้นใหม่ พ่ใบนี้เป็นไพ่เป็นไพ่แห่งดวงดาวที่ส่องสว่างเป็น ความหวัง การเริ่มต้นใหม่ ผู้หญิงในไพ่ที่เปลื้องผ้าที่แสดงถึงความบริสุทธิ์ เท้าข้างนึงอยู่ในน้ำ ซึ่งน้ำแสดงถึงอารมณ์ความรู้สึก แสดงถึงการที่เป็นคนที่สามารถรับรู้ถึงอารมณ์ตัวเองได้ดี เธอคนนี้กำลังฟื้นฟูแหล่งน้ำ และพื้นดิน ให้กลับมาอุดมสมบูรณ์ เกิดใหม่ ถ้าหากดูไพ่ใบนี้เป็นเหมือนแสงที่ส่องทาง ให้ความหวัง ไพ่ใบนี้ยังหมายถึงการฟื้นฟูสภาพจิตใจ อารมณ์ ไปในทางที่ดีขึ้นได้อีกด้วย จากการที่เธอในรูปเทน้ำเพื่อฟื้นฟูพื้นดิน (สภาพภายนอก) และน้ำ (สภาพจิตใจ)

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 18 -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems18">
                    <img src="{{ asset('source/images/card/0/M_18.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems18" class="modal fade" tabindex="-1" aria-labelledby="cardItems18" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THE MOON</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_18.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 18 ไพ่ใบนี้มีความหมายถึง ความกังวล ความกลัว สิ่งที่กลัวเก็บซ่อนไว้จะถูกเปิดเผย อารมณ์อ่อนไหว ความรู้สึกไม่ปลอดภัย ไพ่ใบนี้เป็นไพ่ที่เกี่ยวกับอารมณ์โดยตรง ความรู้สึกที่ซ่อนเร้นไว้ในความมืด ซ่อนไว้ใต้อารมณ์คล้ายกุ้งแม่น้ำที่คลานขึ้นมาจากในน้ำ ก็จะเปิดเผยขึ้นมา เช่น ความกลัว ความกังวล และความรู้สึกไม่ปลอดภัย เหมือนหมาป่าในรูปที่ปกติจะหลบซ่อนในความมืด แต่ถูกแสงจันทร์สว่างทำให้ ศัตรูอาจเห็นได้ง่าย
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 19 -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems19">
                    <img src="{{ asset('source/images/card/0/M_19.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems19" class="modal fade" tabindex="-1" aria-labelledby="cardItems19" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THE SUN</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_19.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 19 ไพ่ใบนี้มีความหมายถึง ความสดใส ความสุข ความสำเร็จ สิ่งดีๆที่กำลังเข้ามา สิ่งที่กำลังเปิดเผยชัดเจน ความขุ่นมัวที่หายไป ไพ่ใบนี้ถ้าจะให้ดูถือว่าเป็นไพ่ที่ผมคิดว่าดีที่สุดในไพ่ 22 ใบ เลยก็ว่าได้ โดยเฉพาะในด้านความคิด อารมณ์ ไพ่ใบนี้เปรียบเสมือนแสงอาทิตย์ที่ส่องสว่าง ให้ความสดใสแก่ทุกชีวิต ไพ่จึงหมายถึง ความสุข ความร่าเริง ความแจ่มใส ทุกๆอย่างกำลังเป็นไปในทางที่ดี และตัวดอกทานตะวันที่หมายถึงความหวัง ทำให้ไพ่ใบนี้ดูสดใสขึ้นไปอีก ไพ่ใบนี้ยังเหมือนแสงสว่างที่ส่องไปยังพื้นที่ที่มืดมิด ทำให้เรามองเห็นอะไรที่ชัดเจนขึ้น จึงมีความหมายถึง การเปิดเผย การสะสาง สิ่งที่ปิดบัง ขุ่นมัว ได้ เช่น ความลับที่ถูกเปิดเผย เรื่องที่กังวลใจจะได้รับการคลี่คลาย
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 20 -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems20">
                    <img src="{{ asset('source/images/card/0/M_20.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems20" class="modal fade" tabindex="-1" aria-labelledby="cardItems20" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ JUDGEMENT</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_20.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 20 ไพ่ใบนี้มีความหมายถึง การตัดสิน ผลของกรรม ผลของการกระทำ สิ่งที่ถูกปิดไว้จะถูกเปิดเผย ไพ่ใบนี้ความหมายของมันคือก็จะคล้ายๆ ทำดีได้ดี ทำชั่วได้ชั่ว ครับ มันถึงเวลาที่ดวงชะตาจะเปลี่ยนแปลงแล้ว คล้ายไพ่หมายเลข 10 Wheel of Fortune  เพียงแต่ไพ่ใบนี้คือสิ่งที่รอคอย สิ่งที่คั่งค้าง มันจะถึงเวลาสะสางแล้วครับ กรรมในอดีต กรรมในปัจจุบัน จะได้รับการตัดสินแล้ว บางสิ่งบางอย่างกำลังจะจบลง และเริ่มต้นใหม่ไปในทางที่ผลกรรมที่เราได้ทำไว้ ตัวไพ่ยังหมายถึงการเปิดเผย สิ่งที่ถูกเก็บไว้ สิ่งที่ค้างคาใจ ก็จะได้รับการเปิดเผยสะสาง
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 21 -->
            <div class="col-md-2 pb-3 Thecard" data-category="major">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems21">
                    <img src="{{ asset('source/images/card/0/M_21.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems21" class="modal fade" tabindex="-1" aria-labelledby="cardItems21" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THE WORLD</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/0/M_21.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 21 ไพ่ใบนี้มีความหมายถึง ความสมบูรณ์ การจบสิ้น ความสุข ความมีอิสระ ไพ่ใบนี้เป็นไพ่ใบสุดท้ายในชุด Major Arcana ซึ่งก็หมายความว่าเป็นไพ่ที่จบสิ้น สมบูรณ์ ในทุกๆอย่าง มีอิสระและหลุดพ้นจากพันธนาการต่างๆแล้ว ซึ่งดูจากสีหน้าของหญิงสาวบนไพ่ก็พบว่าเธอเต้นรำอย่างมีความสุขและมีอิสระจากพันธนาการทั้งปวง นอกจากนี้ไพ่ใบนี้ยังหมายถึง อารมณ์ที่เราพอใจ สภาพจริงๆมันอาจไม่ได้ดีมาก แต่เราพอใจ พอเพียง ไม่มีอะไรต้องกังวลในสถานการณ์ที่เกิดขึ้น และไพ่ใบนี้อาจหมายถึงการเดินทางไปต่างประเทศ ไปดูโลกกว้างได้อีกด้วย
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 22 -->
            <div class="col-md-2 pb-3 Thecard" data-category="coins">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems22">
                    <img src="{{ asset('source/images/card/coin/k_p.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems22" class="modal fade" tabindex="-1" aria-labelledby="cardItems22" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ KING OF PENTACLES</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/coin/k_p.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ใบนี้มักหมายถึงคน โดยเฉพาะผู้ชายที่มีลักษณะดังกล่าว คือเป็นคนที่นิ่ง มั่นคง ทำทุกอย่างที่สามารถจับต้องได้และมองโลกในความเป็นจริง ค่อนไปทางวัตถุนิยม รวมไปถึงความดื้อ ไพ่ใบนี้เนื่องจากเป็นไพ่เหรียญที่เป็น ธาตุดินที่มั่นคง ซึ่งก็หมายถึงความมั่นคงต่อความคิด ความรู้สึกตัวเอง ไม่ไปไหน จนเป็นคนที่ดูเหมือนดื้อไปได้เช่นกัน เนื่องจากเหรียญเป็นไพ่เรื่องเงินโดยตรง ก็อาจหมายถึงคนที่มีความสมบูรณืพร้อมในทรัพย์สมบัติก็ได้ครับ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 23 -->
            <div class="col-md-2 pb-3 Thecard" data-category="coins">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems23">
                    <img src="{{ asset('source/images/card/coin/q_p.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems23" class="modal fade" tabindex="-1" aria-labelledby="cardItems23" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ QUEEN OF PENTACLES</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/coin/q_P.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ตัวไพ่มีความหมายถึงผู้หญิงที่มั่นคง สมบูรณ์ ดูแลผู้อื่นดี มีความเป็นแม่สูง เป็นคนที่มองโลกในความเป็นจริง ไม่ใช่คนที่ประเภทเพ้อฝัน ถ้าพูดถึงเรื่องการเงินการงานก็ถือได้ว่าเป็นไพ่ที่มีลักษณะที่มีการเงินการงานที่มั่นคง และอาจได้รับความช่วยเหลือจากผู้หญิงที่มีลักษณะดังราชินีเหรียญ หรือผู้หญิงรวยได้อีกด้วย
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 24 -->
            <div class="col-md-2 pb-3 Thecard" data-category="coins">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems24">
                    <img src="{{ asset('source/images/card/coin/kn_p.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems24" class="modal fade" tabindex="-1" aria-labelledby="cardItems24" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ KNIGHT OF PENTACLES</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/coin/kn_p.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ใบนี้มีความหมายหลัก ๆ ถึง ทำสิ่งที่ ช้า ซ้ำ ๆ น่าเบื่อ แต่มั่นคง คนที่มีลักษณะแบบไพ่ใบนี้คือ คนที่มั่นคง ทำงานเก่ง ขยัน มองผลลัพธ์อย่างรอบคอบ และวางแผนสิ่งต่างๆในอนาคตอย่างใจเย็น ถ้ามองเป็นงานหรือเงิน ก็พูดได้ว่าเป็นงานที่มีคุณค่า ได้ผลตอบแทนที่จับต้องได้ ได้เงินทองกลับมาอย่างดี
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 25 -->
            <div class="col-md-2 pb-3 Thecard" data-category="coins">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems25">
                    <img src="{{ asset('source/images/card/coin/p_p.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems25" class="modal fade" tabindex="-1" aria-labelledby="cardItems25" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ PAGE OF PENTACLES</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/coin/p_p.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่เด็กมักจะหมายถึงการ เปลี่ยนแปลงไปสู่สิ่งใหม่ๆ ที่ได้รับโอกาสเข้ามา แต่โดยส่วนตัวผมมักมองว่าตัวไพ่เด็กนั้นเป็นไพ่ที่เน้นไปที่การรอคอย การพิจารณา อะไรบางอย่าง ดังจะเห็นในภาพว่า เด็กคนนี้กำลังรอคอย พิจารณาดูโอกาสที่ได้รับเข้ามา เหรียญที่หมายถึงความมั่นคง มั่งคั่ง เป็นสิ่งที่เป็นรูปธรรม หรือเรื่องเงิน ไพ่ใบนี้จึงหมายถึง การได้รับโอกาสที่มั่นคง อาจเป็นในเรื่องการเงิน การลงทุน ที่มีโอกาสที่ดี รวมไปถึงความสัมพันธ์ที่ดีด้วย ที่เราจะรับไว้และพิจารณาโอกาสนั้น
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 26 -->
            <div class="col-md-2 pb-3 Thecard" data-category="coins">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems26">
                    <img src="{{ asset('source/images/card/coin/1_p.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems26" class="modal fade" tabindex="-1" aria-labelledby="cardItems26" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ Ace of Pentacles</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/coin/1_p.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่แห่งโชคลาภ ความสำเร็จ ทรัพสินเงินทอง, ลาภลอยใครได้ไพ่ใบนี้ มีเงินใช้ไม่ขาดมือ ด้านงานเหมาะสมสำหรับทำจิวเวลรี่ ขายเพรช ขายทองดีมาก เครื่องประดับทั้งจริงทั้งปลอม ทำแล้วรุ่ง มีลาภลอยมาให้บ่อย ๆ คนขยันทำงานมาหากินมักจะได้ใบนี้ เรียกว่าดวงต้องรวย ทายเหตุการณ์ปัจจุบันว่าจะได้ของมีค่า ของประดับมาชดเชย
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 27 -->
            <div class="col-md-2 pb-3 Thecard" data-category="coins">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems27">
                    <img src="{{ asset('source/images/card/coin/2_p.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems27" class="modal fade" tabindex="-1" aria-labelledby="cardItems27" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ Two of Pentacles</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/coin/2_p.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่รูปเหรียญ ส่วนมากเกี่ยวข้องกับการเงิน หมายถึงสภาวะการเงินกำลังตึงมือ การเงินติดขัด ต้องหมุนกับชนิดจับแพะจับแกะอุตลุด ด้านหนึ่งหมายถึงการกู้ยืมเป็นหนี้ ถ้าไม่ไปยืมเขาก็ถูกเขายืม (ส่วนมากจะเป็นฝ่ายยืมมากกว่า) พวกที่หยิบได้เบอร์สองมักไม่ค่อยมีโชคลาภ ประเภทถูกหวยมีโชครางวัลอะไรแบบนี้ไม่ค่อยมี เงินทองต้องหามาด้วยน้ำพักน้ำแรงของตัวเอง
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 28 -->
            <div class="col-md-2 pb-3 Thecard" data-category="coins">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems28">
                    <img src="{{ asset('source/images/card/coin/3_p.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems28" class="modal fade" tabindex="-1" aria-labelledby="cardItems28" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ Three of Pentacles</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/coin/3_p.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                โชคทางด้านการเงินส่วนมากจะมาจากเรื่องงาน เช่น ได้งานพิเศษเข้ามา ไม่ต้องเหนื่อยมากก็ได้งินมาสบาย ๆ เป็นงานฟลุ้ค ๆ ทำน้อยแต่ได้มาก คนที่ได้ไพ่ใบนี้เป็นคนทำงานมีฝีมือ ไม่ว่าจับงานด้านใดก็ทำให้เจริญรุ่นเรืองได้
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 29 -->
            <div class="col-md-2 pb-3 Thecard" data-category="coins">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems29">
                    <img src="{{ asset('source/images/card/coin/4_p.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems29" class="modal fade" tabindex="-1" aria-labelledby="cardItems29" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ Four of Pentacles</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/coin/4_p.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ลักษณะของคนประยัดมัธยัถ์ จะเรียกว่าขี้เหนียวก็ว่าได้ มองในแง่ดีถือว่าเป็คนกระเหม็ดกระแหม่ รู้จักค่าของเงิน แต่จะให้รวยก็คงยากเพราะไม่กล้าลงทุนทำของดี ๆ ออกมาขายเขา
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 30 -->
            <div class="col-md-2 pb-3 Thecard" data-category="coins">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems30">
                    <img src="{{ asset('source/images/card/coin/5_p.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems30" class="modal fade" tabindex="-1" aria-labelledby="cardItems30" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ Five of Pentacles</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/coin/5_p.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                หมายถึงการเงินของคุณกำลังย่ำแย่มาก มีแต่เรื่องเสียเงิน ทำกิจการก็มีสิทธิ์เจ๊งเอาง่าย ๆ ให้ระวังเรื่องการใช้จ่ายเอาไว้ให้มาก โดยรวมหมายถึงเสียเงินแบบไม่ได้อะไรคืนมาเลย
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 31 -->
            <div class="col-md-2 pb-3 Thecard" data-category="coins">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems31">
                    <img src="{{ asset('source/images/card/coin/6_p.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems31" class="modal fade" tabindex="-1" aria-labelledby="cardItems31" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ Six of Pentacles</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/coin/6_p.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                หมายถึงคนใจบุญ ใจดี ใช้เงินเก่ง ชอบซื้อของเรื่อยเปื่อย เป็นลักษณะของการหมุนเงิน ด้านหนึ่งหมายถึงการกู้ยืม ถ้าใครติดหนี้เราอยู่ก็จะเอามาใช้คืนให้ หรือถ้ากำลังมีปัญหาด้านเงินก็จะมีคนคอยช่วยเหลือ คนที่ได้ไพ่ใบนี้ส่วนมากไม่ใช่คนงกเงิน เป็นคนแฟร์ ๆ มีความยุตนิธรรม ไม่ค่อยเอาเปรียบหรือคดโกงใคร เป็นคนหาเงินง่ายใช้เงินคล่อง
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 32 -->
            <div class="col-md-2 pb-3 Thecard" data-category="coins">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems32">
                    <img src="{{ asset('source/images/card/coin/7_p.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems32" class="modal fade" tabindex="-1" aria-labelledby="cardItems32" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ Seven of Pentacles</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/coin/7_p.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                แสดงถึงสภาพการเงินที่เริ่มมั่นคง เริ่มมีฐานะ ตั้งตัวได้ เกรฑ์ทั่วไปหมายถึงจะได้รถหรือบ้านขนาดกลาง เป็นคนเอาการเอางาน ทำงานเก็บเงินสะสมจนมีฐานะในระดับหนึ่ง กำลังคิดขยับขยายเพื่อความมั่นคงในระดับต่อไป เป็นช่วงพัก เสพสุขจากผลที่ได้มาแต่ยังคงต้องทำงานต่อไปเพื่อความเป้ฯอยู่ที่ดีกว่านี้
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 33 -->
            <div class="col-md-2 pb-3 Thecard" data-category="coins">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems33">
                    <img src="{{ asset('source/images/card/coin/8_p.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems33" class="modal fade" tabindex="-1" aria-labelledby="cardItems33" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ Eight of Pentacles </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/coin/8_p.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                คนที่ได้ไพ่ใบนี้ส่วนมากหาเงินเก่ง จับอะไรเป็นเงินเป็นทองไปหมด เรียกว่าสร้างเนื้อสร้างตัวมาจากความสามารถองตัวเองล้วน ๆ ไม่ถึงระดับเป็นเจ้าของกิจการ แต่เรียกว่าเป็นอนาคตเสี่ย นายห้างก็ว่าได้
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 34 -->
            <div class="col-md-2 pb-3 Thecard" data-category="coins">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems34">
                    <img src="{{ asset('source/images/card/coin/9_p.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems34" class="modal fade" tabindex="-1" aria-labelledby="cardItems34" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ NINE OF PENTACLES</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/coin/9_p.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                แสดงถึงความสมบูรณ์พร้อมในด้านวัตถุ ทรัพย์สิน และนกที่เกาะอยู่บนมือ อันเป็นตัวแทนของธาตุลม ที่หมายถึง ความคิด ความฉลาด และบ้านด้านหลังที่น่าจะเป็นของหญิงสาวก็เรียกได้ถึง ความมั่นคงปลอดภัย ไพ่ใบนี้จึงหมายถึง คนที่มีความมั่นคง ปลอดภัย รู้สึกมีความสุขโดยเฉพาะในด้านทรัพย์สิน วัตถุ มี ความพอใจในสิ่งที่ตัวเองมี
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 35 -->
            <div class="col-md-2 pb-3 Thecard" data-category="coins">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems35">
                    <img src="{{ asset('source/images/card/coin/10_p.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems35" class="modal fade" tabindex="-1" aria-labelledby="cardItems35" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ TEN OF PENTACLES</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/coin/10_p.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ใบนี้เป็นไพ่เหรียญความหมายโดยตรงคงเป็นเรื่อง เงิน ๆ ทอง ๆ วัตถุต่าง ๆ ซึ่งเรียกได้ว่า เมื่อครบ 10 จึงหมายถึงความสมบูรณ์ในด้านทรัพย์สินที่เพียงพอและถูกเติมเต็ม แต่ความหมายที่สำคัญของไพ่ใบนี้คือครอบครัว จะเห็นว่าจากไพ่ 9 เหรียญ ที่มีพร้อมทุกอย่างแล้ว แต่ก็ยังขาดอยู่สิ่งนึง ... สิ่งนั้นเมื่อถูกเติมเต็ม ก็คือครอบครัวที่อบอุ่นสมบูรณ์ เราอาจจะไม่มีความสุขเท่าไหร่หากไม่มีความมั่นคง คนสนับสนุน ต่างๆที่เป็นครอบครัวที่อบอุ่น ไพ่ใบนี้จึงหมายถึงความมั่นคง ปลอดภัยในทรัพย์สิน ความสัมพันธ์ เป็นหลักอีกด้วย

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 36 -->
            <div class="col-md-2 pb-3 Thecard" data-category="cups">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems36">
                    <img src="{{ asset('source/images/card/cups/k_c.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems36" class="modal fade" tabindex="-1" aria-labelledby="cardItems36" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ KING OF CUPS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/cups/k_c.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ความเป็นราชาเป็นธาตุลม ถ้วยเป็นธาตุน้ำ จึงเหมือนคนที่มีทั้งเหตุผลและอารมณ์ควบคู่กันไป เรียกได้ว่า ไม่ใช่คนที่ใช้ความรู้เหตุผลเพียงอย่างเดียว แต่ยังสามารถเข้าอกเข้าใจผู้อื่น เข้าใจความรู้สึกผู้อื่น มีความใจดี โรแมนติกอีกด้วย ความหมายของไพ่ใบนี้ ไม่ว่าจะเรื่องงานเรื่องเงินจะหมายถึงความสมดุลทางความรู้สึกและความคิด ทุกอย่างเลยดูราบรื่น ไม่มีปัญหาอะไรเข้ามาให้หม่นหมองใจและเครียด ไพ่ใบนี้ยังหมายถึง การได้พบชายที่มีความเป็นผู้ใหญ่ที่ใจดี เข้าอกเข้าใจผู้อื่นและมีเหตุผล
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 37 -->
            <div class="col-md-2 pb-3 Thecard" data-category="cups">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems37">
                    <img src="{{ asset('source/images/card/cups/q_c.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems37" class="modal fade" tabindex="-1" aria-labelledby="cardItems37" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ QUEEN OF CUPS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/cups/q_c.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ปกติไพ่ราชินีจะมีลักษณะเหมือนแม่ มีความอ่อนโยน เข้าถึงอารมณ์ความรู้สึกผู้อื่นได้ง่าย กำลังพิจารณามองถ้วยที่ปิดอยู่ ถ้วยที่ปิดอยู่ ปลา หอย และทะเลที่อยู่รอบๆ เปรียบเสมือนสิ่งที่อยู่ภายในจิตใจลึกๆ ใต้จิตสำนึกลงไป ซึ่งก็หมายความว่า ราชินีคนนี้ สามารถเข้าอกเข้าใจความรู้สึกของตัวเอง และยังเข้าใจความรู้ของคนอื่นได้อย่างดี มีความอ่อนโยน อ่อนหวาน โรแมนติก อีกทั้งยังมีเซนส์ที่ดีอีกด้วย ความหมายของไพ่ใบนี้ก็หมายถึงผู้หญิงที่มีสเน่ห์ มีความเป็นแม่ที่เด่นในเรื่องความรู้สึก เข้าอกเข้าใจความรู้สึก และอารมณ์ทั้งของตัวเองและผู้อื่นได้ดี เป็นคนอ่อนโยน และอ่อนไหวได้ง่าย เป็นคนที่มีเซนส์ดี คาดเดาสิ่งๆต่างๆได้ถูกต้อง ถ้าดูจากท่าทางของราชินีคนนี้ ค่อนข้างจะกังวลอยู่ไม่น้อย การจ้องถ้วยที่เปรียบเสมือนความรู้สึกหรือความรัก ด้วยท่าทางกังวลแบบนี้ แสดงให้เห็นว่า เป็นคนที่มีอารมณ์ที่อ่อนไหวจนทำให้กังวลไปจนเกินเหตุ บางทีก็ออกแนวน้อยใจได้ง่าย นอกจากนี้ยังแปลได้ถึงผู้หญิงที่อยู่ในช่วงนั้นของเดือนได้อีกด้วย เนื่องจากอารมณ์ช่วงนั้นจะอ่อนไหวเป็นพิเศษ

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 38 -->
            <div class="col-md-2 pb-3 Thecard" data-category="cups">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems38">
                    <img src="{{ asset('source/images/card/cups/kn_c.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems38" class="modal fade" tabindex="-1" aria-labelledby="cardItems38" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ KNIGHT OF CUPS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/cups/kn_c.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                อัศวินมีความหมายถึง การกระทำ การพัฒนา เดินหน้า ไพ่ใบนี้จึงแปลได้ถึงคนที่มีการเดินทาง เดินหน้าตามเส้นทางที่หัวใจ ความรู้สึกตัวเองต้องการ จะต่างจากเด็กถ้วยที่ยังยืนรออยู่ ความหมายของไพ่ใบนี้จึงหมายถึง คนที่เลือกเดินหน้าไปตามเส้นทางที่หัวใจและตัวเองต้องการ โดยเป้าหมายการเดินทาง หรือการกระทำในครั้งนี้ จะนำพามาซึ่งความรู้สึกที่ดี ที่เราต้องการ ถ้าถามถึงการเงิน การเงิน อาจเป็นไพ่ที่ไม่ได้บอกว่าการงาน การเงินจะดีนัก แต่เป็นไพ่ที่บอกว่า เรารู้สึกดีกับสิ่งที่จะเกิด ต่อให้งานไม่ดี เงินไม่ดี แต่ก็สามารถรู้สึกดีมีความสุขได้ ไพ่ใบนี้อาจหมายถึงการเดินทางใกล้แหล่งน้ำ ทะเล แม่น้ำ ได้ด้วย

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 39 -->
            <div class="col-md-2 pb-3 Thecard" data-category="cups">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems39">
                    <img src="{{ asset('source/images/card/cups/p_c.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems39" class="modal fade" tabindex="-1" aria-labelledby="cardItems39" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ PAGE OF CUPS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/cups/p_c.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ตัวเด็กที่มีความหมายถึง ความเด็ก การเริ่มหรือเปลี่ยนแปลง และข้อความ ด้วยชุดที่ทันสมัยที่แสดงให้เห็นว่า เด็กคนนี้มีความคิดสร้างสรรค์ รวมถึงถ้วยที่สื่อถึง อารมณ์ จึงหมายถึง ความคิดสร้างสรรค์ การเริ่มต้นหรือการเปลี่ยนแปลงไปยังสิ่งใหม่ที่มีความคิดสร้างสรรค์ แต่เนื่องจากไพ่ยังเป็นเด็กที่เหมือนรออะไรบางอย่างอยู่ จึงเปรียบเสมือน คนที่รอความรู้สึก และปลาก็คือตัวแทนของสิ่งที่อยู่ลึกๆข้างในจิตใจของเรา ความรู้สึกลึกๆ มันได้โผล่ขึ้นมาครับ ไพ่ใบนี้จึงเหมือนกับกำลังอยู่ในช่วงที่ความรู้สึกจริงๆในใจ หรือมีสิ่งที่ทำให้ความรู้สึกของเราเปลี่ยนไปมันผุดขึ้นมา เป็นช่วงที่กำลังจะเกิดการเปลี่ยนแปลง ไพ่ใบนี้ความหมายจึงเน้นไปที่เรื่อง อารมณ์ การเปลี่ยนแปลงไปสู่สิ่งใหม่ ความคิดสร้างสรรค์ ถือเป็นไพ่ที่ดี ที่ทำให้เราอารมณ์ดีได้ครับ รวมถึงการได้พบเจอคนที่มีความคิดที่เด็กกว่า มีความคิดสร้างสรรค์ เปนแฟชั่นนิสต้า อาจหมายถึงการได้รับข่าวสารที่ดีที่ทำให้อารมณ์เราดีขึ้นได้ครับ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 40 -->
            <div class="col-md-2 pb-3 Thecard" data-category="cups">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems40">
                    <img src="{{ asset('source/images/card/cups/1_c.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems40" class="modal fade" tabindex="-1" aria-labelledby="cardItems40" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ ACE OF CUPS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/cups/1_c.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ถ้วยหมายถึงอารมณ์ ความรู้สึก ไพ่หมายเลข 1 หมายถึงการเริ่มต้น ไพ่ใบนี้จึงหมายถึงการเริ่มต้น อารมณ์ ความรู้สึกใหม่ๆ ซึ่งเราไม่สามารถทราบได้ว่า เป็นความรู้สึกที่ดีหรือไม่ดี แต่โดยส่วนใหญ่ไพ่ใบนี้จะหมายถึงสิ่งที่ดี อาจต้องดูไพ่ประกอบอื่นๆ ดังนั้นถ้าแปลในเรื่องต่างๆจึงเรียกได้ว่า มีโอกาสที่จะได้ประสบพบเจอ คน หรือเหตุการณ์ที่ทำให้เราได้รับความรู้สึกใหม่ๆ เช่น ความรัก ความตื่นเต้น รวมไปถึงความเศร้าและเสียใจ ไพ่ใบนี้ยังหมายถึงความคิดที่สร้างสรรค์ใหม่ๆในเชิง ศิลปะ ที่ใช้อารมณ์ เช่น บทเพลง บทกวี ได้อีกด้วย
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 41 -->
            <div class="col-md-2 pb-3 Thecard" data-category="cups">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems41">
                    <img src="{{ asset('source/images/card/cups/2_c.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems41" class="modal fade" tabindex="-1" aria-labelledby="cardItems41" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ TWO OF CUPS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/cups/2_c.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ใบนี้เหมือนความเข้ากันได้ของคนสองคน การแลกเปลี่ยนอารมณ์ความรู้สึกกันได้อย่างลงตัว มีความเข้าใจ ความรู้สึกดี ไปจนถึงรักกันอย่างหวานชื่น ไพ่ใบนี้ถ้าให้มองถึงเรื่อง การงาน การเงิน ก็เรียกได้ว่าเป็นช่วงเวลาที่อารมณ์คุณโอเคกับเรื่องต่างๆ ไม่ว่าจะเรื่องการทำงาน หรือความสัมพันธ์กับเพื่อนร่วมงาน ทุกอย่างลงตัว ทำให้คุณมีความสุขในสถานการณ์นี้ หากเป็นการประสานงาน ติดต่อไพ่ใบนี้ก็มีความหมายที่ดีว่าจะคุยกันถูกคอ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 42 -->
            <div class="col-md-2 pb-3 Thecard" data-category="cups">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems42">
                    <img src="{{ asset('source/images/card/cups/3_c.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems42" class="modal fade" tabindex="-1" aria-labelledby="cardItems42" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THREE OF CUPS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/cups/3_c.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ความหมายของไพ่ใบนี้หมายถึงเรื่อง เพื่อน เป็นส่วนใหญ่ การได้พบปะ สังสรรค์ กับเพื่อนฝูง ถ้ามองเป็นเรื่องอื่นๆ ก็จะมีคีย์เวิร์ด ที่เรื่อง เพื่อน ความเข้าใจกัน ความสุขหลังจากได้ร่วมงานกัน ซึ่งไพ่หมายเลข 3 ที่หมายถึงการสังเคราะห์ การรวมสิ่งต่างๆเข้าด้วยกันเพื่อเป็นสิ่งใหม่ ก็เหมือนไพ่ใบนี้ที่รวมอารมณ์ของเพื่อน เพื่อนร่วมงาน เข้ามาเป็นอันหนึ่งอันเดียวกัน
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 43 -->
            <div class="col-md-2 pb-3 Thecard" data-category="cups">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems43">
                    <img src="{{ asset('source/images/card/cups/4_c.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems43" class="modal fade" tabindex="-1" aria-labelledby="cardItems43" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ FOUR OF CUPS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/cups/4_c.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ถ้วยที่ยื่นเข้ามาเปรียบเสมือนไพ่ 1 ถ้วย โอกาสใหม่ๆที่เข้ามา โอกาสที่ทำให้ได้พบกับความรู้สึกใหม่ๆ ได้พบกับความรัก ความตื่นเต้นใหม่ๆ แต่ชายคนนี้ก็ไม่รับถ้วยที่ยื่นให้มา และก็ไม่เลือก ถ้วยที่วางไว้ มองในความหมายโดยรวมไพ่ใบนี้เหมือน มีสิ่งที่ลังเล สิ่งที่ทำให้รู้สึกยังไม่พร้อม ยังไม่โอเค ที่จะรับโอกาสใหม่ๆได้ อาจเป็นได้จากประสบการณ์ความรู้ที่ผ่านมา ที่ทำให้คนที่ได้ไพ่ใบนี้ไม่พร้อมรับโอกาสใหม่ ๆ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 44 -->
            <div class="col-md-2 pb-3 Thecard" data-category="cups">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems44">
                    <img src="{{ asset('source/images/card/cups/5_c.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems44" class="modal fade" tabindex="-1" aria-labelledby="cardItems44" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ FIVE OF CUPS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/cups/5_c.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ใบนี้มีความหมายถึงความโศกเศร้า เสียใจ เสียดาย สิ่งเก่า ๆ ที่พังไป ถ้วยที่หกไป จนทำให้ลืมสนใจมองสิ่งที่ยังเหลืออยู่ สิ่งที่ดี ๆ ใกล้ตัว ดั่งถ้วย 2 ถ้วยที่ตั้งอยู่ และตัดขาดจากสิ่งที่มั่นคง สิ่งที่ยึดถือ ซึ่งหมายถึงบ้าน ครอบครัว เพื่อนฝูง โดยมีสายน้ำที่เปรียบเหมือนอารมณ์กั้นขวางไว้ ต้องเดินไปข้ามสะพานซึ่งอยู่ไกลออกไปเท่านั้น ความหมายของไพ่ใบนี้ เน้นไปในทางอารมณ์จากการสูญเสียซะมากกว่า เพราะเป็นไพ่ถ้วยจึงหมายถึงอารมณ์ คนที่ได้ไพ่ใบนี้อาจจะพบการสูญเสียที่ทำให้รู้สึกเสียใจ ไม่ว่าจะเรื่องเงิน เรื่องงาน ความรัก หรืออะไรก็ตาม และไม่เปิดใจที่จะเดินหน้าต่อไป แม้โอกาสจะมีเข้ามาก็ตาม
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 45 -->
            <div class="col-md-2 pb-3 Thecard" data-category="cups">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems45">
                    <img src="{{ asset('source/images/card/cups/6_c.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems45" class="modal fade" tabindex="-1" aria-labelledby="cardItems45" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ SIX OF CUPS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/cups/6_c.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ใบนี้หมายถึง ความรู้สึกในอดีต ที่กำลังกลับมา จากภาพเป็นตัวแทนของอดีตในวัยเยาว์ มีเพื่อนข้างบ้าน อยู่ในหมู่บ้านที่มั่นคงอบอุ่น ไพ่ใบนี้ตีความได้หลายหลาย ด้วยคีย์เวิร์ด ความรู้สึกเก่าๆ มันเป็นความรู้สึกดีๆ เช่น การได้นึกถึงวันเก่าๆ กลับบ้านเกิด การได้เจอพบปะเพื่อนเก่า และไพ่ใบนี้ยังหมายถึงการได้รับของขวัญจากคนที่รู้จักกันมาก่อนอีกด้วย
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 46 -->
            <div class="col-md-2 pb-3 Thecard" data-category="cups">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems46">
                    <img src="{{ asset('source/images/card/cups/7_c.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems46" class="modal fade" tabindex="-1" aria-labelledby="cardItems46" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ SEVEN OF CUPS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/cups/7_c.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ใบนี้หากดูกันที่ความหมายเหมือนเป็นความเพ้อฝัน ภาพจินตนาการที่เกิดขึ้น เหมือนฝันหวานว่าถ้าทำนู่นนี่แล้วจะได้ผลลัพธ์ที่ดี ฝันคิดไปมากมาย แต่ก็ไม่เลือกให้ชัดเจนซักที หากได้ไพ่ใบนี้ก็จะหมายความว่า คุณคิด คุณฝัน ทางเลือกมากมายเอาไว้ แต่คุณก็ยังไม่เลือก ยังไม่ลงมือทำ มันถึงเวลาที่คุณจะต้องเลือก ต้องลงมือทำเปลี่ยนความคิดความคิดให้เป็นความจริง หากเป็นเรื่องการงาน เงิน ก็ดูเป็นการตัดสินใจเรื่องงาน เงินที่ตัดสินใจไม่ได้ ยังเป็นการเพ้อฝันคิดไปก่อน ความหมายของไพ่ใบนี้อาจจะหมายถึงสิ่งที่เป็นนามธรรมจับต้องไม่ได้ เช่น งานเกี่ยวกับศิลปะ การคิดสร้างสรรค์ หรือแม้แต่โปรแกรมเมอร์ งานด้านไอที การติดต่อผ่านทางออนไลน์
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 47 -->
            <div class="col-md-2 pb-3 Thecard" data-category="cups">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems47">
                    <img src="{{ asset('source/images/card/cups/8_c.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems47" class="modal fade" tabindex="-1" aria-labelledby="cardItems47" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ EIGHT OF CUPS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/cups/8_c.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ใบนี้มีความหมาย หมายถึงการเดินออกจากปัญหา จากสิ่งและอารมณ์ที่รบกวนจิตใจเราให้ขุ่นมัว ถ้วยก็คืออารมณ์ ถ้าหากสิ่งไหนที่ไม่โอเค ทำให้อารมณ์เราไม่โอเค ทำให้คุณรู้สึกเศร้าหมอง คุณก็พร้อมที่จะทิ้งมันไว้ แล้วเดินจากไปอย่างสงบ หรืออาจหมายความได้ว่า คุณทิ้งอารมณ์ที่ไม่โอเค ได้และพร้อมที่จะเดินหน้าต่อไปมองหาถ้วยใหม่ ทั้งนี้จากรูปอาจหมายถึงการออกเดินทางได้อีกด้วย
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 48 -->
            <div class="col-md-2 pb-3 Thecard" data-category="cups">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems48">
                    <img src="{{ asset('source/images/card/cups/9_c.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems48" class="modal fade" tabindex="-1" aria-labelledby="cardItems48" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ NINE OF CUPS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/cups/9_c.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ความหมายของไพ่ทั่วไปหมายความว่า การพอใจ การได้รับการเติมเต็มในสิ่งที่ต้องการ เพียงแต่ว่า ปกติการครบสมบูรณ์ของถ้วย คือ 10 ถ้วย แต่ชายคนนี้มีแค่ 9 ถ้วยก็พอใจแล้ว ความหมายอีกอย่างจึงเหมือนกับว่า มีความสุข มีความพอใจ มั่นใจเกินเหตุ เกินความเป็นจริง เหมือนมีแค่ 9 ถ้วยก็อวดแล้ว ซึ่งมันก็รวมไปถึงการหลงตัวเองได้อีกด้วย
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 49 -->
            <div class="col-md-2 pb-3 Thecard" data-category="cups">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems49">
                    <img src="{{ asset('source/images/card/cups/10_c.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems49" class="modal fade" tabindex="-1" aria-labelledby="cardItems49" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ TEN OF CUPS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/cups/10_c.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ใบนี้เป็นไพ่หมายเลข 10 ซึ่งเป็นไพ่ที่เรียกได้ว่า มีความสมบูรณ์พร้อมไปด้วยถ้วย ซึ่งถ้วยก็คืออารมณ์ จึงตีความหมายและคีย์เวิร์ดได้ว่า เป็นไพ่ที่สมบูรณ์พร้อมทางด้านอารมณ์ หรือก็คือมีความสุขสมหวัง หากได้ไพ่ใบนี้ไม่ว่าเรื่องไหนก็ดูจะสุขสมหวังไปหมด ทุกอย่างดูราบรื่น มีความสุข อะไรๆก็เข้ากันได้ไปหมด ซึ่งไพ่ใบนี้เนื่องจากเป็นทางด้านอารมณ์ แม้ภายนอกทางกายภาพเช่น เรื่องเงิน หรือเรื่องงานอาจจะมีปัญหาบ้าง แต่ถ้าคุณมีความสุขอย่างมาก ไพ่ใบนี้ก็เป็นคำตอบได้เช่นกัน แต่ส่วนใหญ่ ต้องเรื่องงานและเงินดี จึงส่งผลให้อารมณ์ ซะส่วนใหญ่ครับ จึงพูดได้ว่าไพ่ใบนี้เป็นผลที่เกิดจากสิ่งดีๆที่เข้ามาให้เราสมหวังได้ครับ นอกจากนี้ไพ่ใบนี้ยังหมายถึง การมีครอบครัวที่มีความสุข ได้อีกด้วย ไพ่ใบนี้มีเรื่องต้องระวังคือ มันมีความเกี่ยวข้องกับอารมณ์ ก็เหมือนอาจจะมีความฝันหวาน การคิดเพ้อฝันถึงความสุขจนเกินไปได้ บางทีก็เหมือนคิดไปเองหรือมีความสุขเกินความเป็นจริง
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 50 -->
            <div class="col-md-2 pb-3 Thecard" data-category="swords">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems50">
                    <img src="{{ asset('source/images/card/swords/k_s.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems50" class="modal fade" tabindex="-1" aria-labelledby="cardItems50" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ KING OF SWORDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/swords/k_s.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ราชาเป็นไพ่ธาตุลม ซึ่งหมายถึงความคิด มีตรรกะ มีความเป็นผู้ใหญ่ มีเหตุผลชัดเจน เมื่อเป็นไพ่ดาบด้วยแล้ว ยิ่งเป็นคนที่มีความคิดที่ชัดเจนมากยิ่งขึ้น จนอาจเรียกได้ว่า เป็นคนคิดมากคิดเยอะ มีเหตุผลสุดๆ เป็นราชาแห่งการคิด เลยก็ว่าได้ คนที่ได้ไพ่ขึ้นมาก็หมายถึงคนที่มีเหตุผล ตรรกะสูง ไม่ค่อยมีอารมณ์ขันหรือความโรแมนติก เป็นคนที่ค่อนข้างจะรอบคอบ มองข้อดีข้อเสีย ใช้สมองมากกว่าหัวใจ ในสถานการณ์ต่างๆ ก็ดูจะเป็นเรื่องดี ที่เหตุผลเป็นใหญ่ เพราะไม่ว่าจะทำอะไรก็จะคิดอย่างรอบคอบ มีเหตุผล มองข้อดีข้อเสีย วิเคราะห์อย่างถี่ถ้วน แม้อาจจะดูเยอะไปบ้างก็ตาม แต่ผลลัพธ์ที่ได้ย่อมออกมาสมเหตุสมผลที่สุด

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 51 -->
            <div class="col-md-2 pb-3 Thecard" data-category="swords">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems51">
                    <img src="{{ asset('source/images/card/swords/q_s.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems51" class="modal fade" tabindex="-1" aria-labelledby="cardItems51" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ QUEEN OF SWORDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/swords/q_s.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ราชินีที่มีสัญลักษณ์ของ ธาตุน้ำ คือเป็นผู้ที่ขับเคลื่อนด้วยอารมณ์ภายใน มีความละเอียดอ่อน นึกถึงจิตใจผู้อื่น ถือดาบซึ่งเป็นสัญลักษณ์ของ ธาตุลม แสดงถึงความคิด ตรรกะ เหตุผล และความรวดเร็ว สองสิ่งนี้ผสมกัน ทำให้เธอเป็นคนที่ค่อนข้างจะเป็นคนที่ ใช้เหตุผลควบคุมความอ่อนไหว ความอ่อนโยน รวมถึงความอ่อนแอภายใน เหมือนภายนอกดูแข็งกร้าว แต่ภายในอ่อนโยน แน่นอนว่าเธอเป็นคนเก่ง เป็นหัวหน้าคนได้อย่างดีทีเดียว เธอเป็นคนที่ใช้เหตุผลนำเหนือกว่าอารมณ์ทั้งมวล อะไรดีไม่ดี ก็สามารถตัดสินใจได้ชัดเจน
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 52 -->
            <div class="col-md-2 pb-3 Thecard" data-category="swords">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems52">
                    <img src="{{ asset('source/images/card/swords/kn_s.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems52" class="modal fade" tabindex="-1" aria-labelledby="cardItems52" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ KNIGHT OF SWORDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/swords/kn_s.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ของอัศวินถือดาบ ที่หากดูด้วยภาพคงเห็นได้ชัดจากภาพว่า เป็นอัศวินที่พร้อมบุกตะลุย ออกศึกอย่างเต็มที่ โดยเฉพาะไพ่ดาบที่เป็นเรื่องของความคิด เหตุผล การติดต่อสื่อสาร ความหมายของไพ่ใบนี้จึงเหมือนการฝ่าฟัน การดื้อดึง ที่เชื่อมั่นในความคิดของตัวเอง การที่ติดสินใจได้แล้วว่าจะทำยังไง ในความคิดหัวจะค่อนข้างชัดเจน แล้วก็พร้อมลุยไปข้างหน้าอย่างเต็มที่ เพื่อให้ถึงเป้าหมายตามความคิดนั้น ไพ่ใบนี้อาจแปลได้ว่า การที่เราพร้อมตะลุย ฝ่าฟันอุปสรรค เพื่อให้ไปถึงเป้าหมายที่เราคิด และตั้งใจไว้ หรืออาจหมายถึงการฝ่าฟันปัญหา เรื่องที่ไม่เข้าใจกัน จะมีการพูดคุย ถกเถียง ทะเลาะกันได้ เพื่อให้ทุกอย่างกระจ่างขึ้น อาจหมายถึงการได้พบเจอคนที่มีลักษณะนิสัยเป็นอัศวินดาบดังที่กล่าวมา
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 53 -->
            <div class="col-md-2 pb-3 Thecard" data-category="swords">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems53">
                    <img src="{{ asset('source/images/card/swords/p_s.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems53" class="modal fade" tabindex="-1" aria-labelledby="cardItems53" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ PAGE OF SWORDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/swords/p_S.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ดาบ ที่เป็นสัญลักษณ์ ของความคิด สติปัญญา การติดต่อสื่อสาร และไพ่เด็กที่เปรียบเหมือนการเริ่มต้น จุดเปลี่ยนสถานะต่างๆ และการส่งข้อความ ไพ่ใบนี้จึงมีความหมายถึง การความคิดอยู่ในช่วงที่มีการเปลี่ยนแปลง ที่อาจรวมไปถึง การคิดให้รอบคอบ การสงสัย การเริ่มต้นการติดต่อสื่อสาร รวมถึงการเริ่มต้นคิดวิเคราะห์สิ่งใหม่ ๆ จากภาพจะเห็นว่า เด็กดาบคนนี้กำลังเงื้อดาบรออะไรบางอย่างอยู่ ท่ามกลางลมที่เปรียบเสมือนความคิดที่มีการเคลื่อนไหว เด็กคนนี้รอคำตอบ รอความชัดเจน ก่อนที่จะตัดสินใจต่อไป และไม่ใช่แค่รอแต่จะเริ่มดำเนินการถามพูดคุยติดต่อเพื่อให้ได้คำตอบที่ต้องการ รอที่จะฟันดาบลงมาตัดสินใจให้ชัดเจน
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 54 -->
            <div class="col-md-2 pb-3 Thecard" data-category="swords">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems54">
                    <img src="{{ asset('source/images/card/swords/1_s.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems54" class="modal fade" tabindex="-1" aria-labelledby="cardItems54" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ ACE OF SWORDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/swords/1_s.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ Ace หรือไพ่หมายเลข 1 หมายถึงการเริ่มต้นใหม่ การได้รับโอกาสใหม่ มีสิ่งใหม่ๆเข้ามา และตัวไพ่ ดาบ ที่หมายถึง ความคิด ความรู้ ตรรกะเหตุผล การติดต่อสื่อสาร ทำให้ไพ่ใบนี้หมายถึงจุดเริ่มต้นใหม่ๆทางความคิด ความหมายจึงหมายถึงความชัดเจน ชัดแจ้ง การตัดสินใจที่เด็ดขาด ตัดสิ่งที่มัวหมองออกไป เหมือนถึงเวลาแล้วที่คุณจะเริ่มต้นทำอะไรที่ถูกต้องตามหลักเหตุผล ไพ่ใบนี้ความหมายดีไม่ดี ก็แล้วแต่มุมมอง บางทีก็อาจทำให้คุณรู้สึกแย่ทางอารมณ์ แต่การตัดสินใจเลือกทางที่ถูกตามหลักเหตุผลย่อมดีกว่าอยู่แล้วครับ ไพ่ใบนี้ยังพูดถึงการเริ่มติดต่อพูดคุยเพื่อเคลียร์สิ่งที่คับข้องใจให้ชัดเจนขึ้น
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 55 -->
            <div class="col-md-2 pb-3 Thecard" data-category="swords">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems55">
                    <img src="{{ asset('source/images/card/swords/2_S.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems55" class="modal fade" tabindex="-1" aria-labelledby="cardItems55" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ TWO OF SWORDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/swords/2_S.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ใบนี้เป็นไพ่หมายเลขสอง จึงเหมือนมีตัวเลือก ที่มีความสมดุล มีทางเลือกสองทางให้เลือก แต่เราก็ยังไม่เลือก เรายังถือไว้เท่าๆกันแบบนั้น แม้เราจะปิดตาตัวเองเพื่อป้องกันสิ่งต่างๆที่ทำให้เราเกิดความลำเอียงในการตัดสินใจ แต่ก็ยังเลือกตัดสินใจไม่ได้อยู่ดี คุณอยู่ในสภาพที่คิดว่าการปล่อยปัญหาไว้แบบนี้เรื่อยๆ คงทำให้สถานการณ์มันผ่านไปได้เอง ปัญหาจบลงไปเองซักวัน ซึ่งมันก็จะทำให้คุณต้องคอยปิดกั้นอารมณ์ ปิดกั้นการตัดสินใจตัวเองอยู่เรื่อยๆ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 56 -->
            <div class="col-md-2 pb-3 Thecard" data-category="swords">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems56">
                    <img src="{{ asset('source/images/card/swords/3_s.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems56" class="modal fade" tabindex="-1" aria-labelledby="cardItems56" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THREE OF SWORDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/swords/3_S.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ความหมายของไพ่ใบนี้จึงเป็นเป็นเรื่องเศร้า ด้วยภาพด้านหลังที่เป็น พายุเมฆฝน กระหน่ำ เหมือนจะเกิดเรื่องบางเรื่องที่ทำให้คุณได้รับรู้ความจริง ได้รับรู้เหตุผล ต่างๆ แล้วมันก็ทำร้ายจิตใจคุณได้ ทำให้คุณรู้สึกเศร้า จิตตก ความรุนแรงของพายุความเศร้าแล้วแต่สถานการณ์ และไพ่ประกอบและจากไพ่ที่เป็นรูปหัวใจ ซึ่งอาจดูไปทางแนวความรัก แต่ไพ่ใบนี้อาจจะพูดได้ถึงในหลายๆด้านได้ เช่น เรื่องการงาน การเงิน บางทีคุณอาจจะรักงานที่ทำ แต่มีเหตุผลที่ทำให้ต้องย้ายหรือลาออก ก็เป็นไปได้ นอกจากนี้ความเป็นเลขสาม อาจหมายถึง เรื่องการเลือก การรักสามเส้าได้อีกด้วย
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 57 -->
            <div class="col-md-2 pb-3 Thecard" data-category="swords">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems57">
                    <img src="{{ asset('source/images/card/swords/4_s.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems57" class="modal fade" tabindex="-1" aria-labelledby="cardItems57" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ FOUR OF SWORDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/swords/4_s.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ใบนี้มีความหมายถึงการหยุดพัก ทั้งทางใจและกาย เป็นไพ่ที่ปัญหาอาจจะยังไม่จบก็ได้ แต่คุณก็ขอพักไว้ก่อนนะตอนนี้
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 58 -->
            <div class="col-md-2 pb-3 Thecard" data-category="swords">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems58">
                    <img src="{{ asset('source/images/card/swords/5_s.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems58" class="modal fade" tabindex="-1" aria-labelledby="cardItems58" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ FIVE OF SWORDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/swords/5_s.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                หากมองในมุมผู้ชนะ ก็เหมือนผู้ชนะการประลอง เป็นเจ้ายุทธจักรที่ชนะก็จริง แต่ก็ไม่ได้มีอะไรกลับมา ไม่ว่าจะเรื่องเพื่อน ความสัมพันธ์กับคนรอบข้าง หรือสิ่งที่ต้องสูญเสียไประหว่างการต่อสู้ ถึงแม้ชนะแต่ก็ไม่มีอะไรดีเลย หากมองในมุมผู้แพ้ ก็คือผู้ที่ต้องพ่ายแพ้ไป สูญเสียความมั่นใจ และต้องเดินจากไปจากสถานการณ์นี้ ไพ่ใบนี้จึงมองไปในแง่ลบ มีการขัดแย้งกัน ทะเลาะกัน และมีการสูญเสีย

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 59 -->
            <div class="col-md-2 pb-3 Thecard" data-category="swords">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems59">
                    <img src="{{ asset('source/images/card/swords/6_s.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems59" class="modal fade" tabindex="-1" aria-labelledby="cardItems59" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ SIX OF SWORDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/swords/6_s.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ในมุมมองกว้างๆ ใบนี้อาจมองได้หลายแบบ ว่าเราจะเลือกเดินหน้าเปลี่ยนแปลงไปทางไหน แต่หลักสำคัญของมันก็คือ เราทิ้ง เราปล่อยสิ่งที่ไม่ดีต่อเรา สิ่งที่ไม่ดีกับใจเราไว้ด้านหลัง จะมุ่งหน้าไปทางไหนก็ต้องดูอีกทีว่าไพ่ประกอบและสถานการณ์เป็นยังไง

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 60 -->
            <div class="col-md-2 pb-3 Thecard" data-category="swords">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems60">
                    <img src="{{ asset('source/images/card/swords/7_s.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems60" class="modal fade" tabindex="-1" aria-labelledby="cardItems60" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ SEVEN OF SWORDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/swords/7_s.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ ดาบ ที่เป็นสัญลักษณ์ของการคิด เหตุผล การติดต่อสื่อสาร ไพ่ใบนี้เป็นการขโมยสิ่งเหล่านี้ออกมาโดยที่อีกฝ่ายที่โดนขโมยไม่รู้ตัว ก็เปรียบเสมือน การแอบทำลับหลัง อาจหมายถึงการ ปิดบัง การแอบลักลอบ ไพ่ใบนี้ความหมายอาจแปลได้ตรงๆว่า โดนขโมยเงิน สิ่งของก็ได้ หรือโดนขโมยความคิดก็ได้ เช่น โดนขโมยผลงาน ขโมยแนวคิด อาจหมายถึงการแอบทำลับหลังเป็นได้ทั้งร้าย เช่น การโกง การแอบนินทา ใส่ร้ายป้ายสี ขโมย และทั้งดี เช่น การวางแผนที่ไม่ให้ใครรู้เพื่อผลลัพธ์ที่ดีกว่า การวางแผนทำเซอไพรซ์ เป็นต้น
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 61 -->
            <div class="col-md-2 pb-3 Thecard" data-category="swords">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems61">
                    <img src="{{ asset('source/images/card/swords/8_s.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems61" class="modal fade" tabindex="-1" aria-labelledby="cardItems61" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ EIGHT OF SWORDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/swords/8_s.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ความหมายของไพ่ใบนี้คือ การที่เราไม่สามารถเลือกทำอะไรได้เลย ไม่สามารถตัดสินใจ ไม่สามารถดำเนินการได้ เหมือนคุณโดนกรอบความคิดของตัวเองล้อมเอาไว้ แม้อยากจะไปก็ไปไม่ได้ และไพ่ใบนี้ก็ยังหมายถึงการถูกกักขัง ไม่ว่าจะกักขังจองจำจริงๆ หรือโดนกักขังทางความคิด หรือก็ตาม เช่น คุณอาจจะโดนบังคับ ขู่เข็ญ จนไม่สามารถทำงาน หรือเลือกในทางที่คุณต้องการและคิดว่าถูกได้
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 62 -->
            <div class="col-md-2 pb-3 Thecard" data-category="swords">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems62">
                    <img src="{{ asset('source/images/card/swords/9_s.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems62" class="modal fade" tabindex="-1" aria-labelledby="cardItems62" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ NINE OF SWORDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/swords/9_s.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ใบนี้เหมือนไพ่แนะนำที่ออกมาเตือนว่า คุณคิดมากไปรึเปล่า เครียดหรือกดดันมากไปรึเปล่า ลองดึงดาบทั้ง 9 ออกแล้วคิดตัดสินใจสิ่งต่างๆให้ดีด้วยเหตุผล และมองหาทางแก้ปัญหาจะดีกว่า
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 63 -->
            <div class="col-md-2 pb-3 Thecard" data-category="swords">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems63">
                    <img src="{{ asset('source/images/card/swords/10_s.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems63" class="modal fade" tabindex="-1" aria-labelledby="cardItems63" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ TEN OF SWORDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/swords/10_s.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่หมายเลข 10 ที่หมายถึงการสมบูรณ์จบสิ้น และไพ่ดาบ ที่หมายถึงความคิด ความรู้ การติดต่อ ไพ่ใบนี้จึงมีความหมายในเชิงการคิดที่จบลง คิดมาก ความกังวล ต่างๆนานาๆมันจะจบลง เพราะรู้สึกว่าเครียดไปมากกว่านี้ไม่ไหวแล้ว ไพ่ใบนี้นอกจากจะคิดมากจนคิดต่อไปไม่ไหว หรือหยุดคิดเรื่องนี้แล้ว ยังมีมุมดีของมันคือ การที่จะมีอนาคตข้างหน้าที่สดใสกำลังรออยู่ เหมือนแสงที่ส่องมาจากปลายฟ้า เหมือนหากเราหยุดคิด หยุดเครียด เราจะได้พบหนทางที่สดใสขึ้น พบวิธีแก้ปัญหาที่เข้ามารุมเร้าได้
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 64 -->
            <div class="col-md-2 pb-3 Thecard" data-category="wands">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems64">
                    <img src="{{ asset('source/images/card/wand/k_w.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems64" class="modal fade" tabindex="-1" aria-labelledby="cardItems64" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ KING OF WANDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/wand/k_w.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ราชาผู้ถือไม้ และมองไปด้วยวิสัยทัศน์ที่ไกลออกไป นั่งอยู่บนบัลลังก์ที่มีรูปราชสีห์และกิ้งก่าที่แสดงถึงความเป็นผู้นำและการปรับตัว ซึ่งเป็นลักษณะของธาตุไฟ ความหมายของไพ่ใบนี้คือ
                                <br>
                                - การเป็นผู้นำ มีวิสัยทัศน์สูง <br>
                                - แรงปรารถนา ความต้องการ ความฝันที่รุนแรง และสามารถนำพามันไปได้
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 65 -->
            <div class="col-md-2 pb-3 Thecard" data-category="wands">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems65">
                    <img src="{{ asset('source/images/card/wand/q_w.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems65" class="modal fade" tabindex="-1" aria-labelledby="cardItems65" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ QUEEN OF WANDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/wand/q_w.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ราชินีผู้มีความมุ่งมั่นมั่นใจ นั่งอยู่บนบัลลังค์ที่มีลายแกะสลักของสิงโต มือซ้ายถือดอกทานตะวัน ที่หมายถึงความสดใส ชีวิต มือขวาถือไม้ ด้านล่างมีแมวดำที่หมายถึง การมีอิสระ พึ่งพาตัวเองได้
                                <br>
                                - ผู้หญิงที่มีความมุ่งมั่น มั่นใจ มี Passion ความฝัน แรงบันดาลใจ <br>
                                - ผู้หญิงที่เก่งเรื่องงาน เป็นผู้นำคนได้
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 66 -->
            <div class="col-md-2 pb-3 Thecard" data-category="wands">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems66">
                    <img src="{{ asset('source/images/card/wand/kn_w.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems66" class="modal fade" tabindex="-1" aria-labelledby="cardItems66" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ KNIGHT OF WANDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/wand/kn_w.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                อัศวินถือไม้ ขี่ม้าพร้อมลุยผจญภัยโจมตี อยู่ในทะเลทราย ทั้งเสื้อคลุมลายกิ้งก่า พู่บนหมวก ทะเลทราย เป็นสัญลักษณ์ของธาตุไฟ ที่มีพลังงานพร้อมจะลุยศึกได้ทุกเมื่อ
                                <br>
                                - การเดินหน้า การพัฒนาในสิ่งที่ปรารถนา ต้องการในจิตใจ <br>
                                - การผจญภัย การมีพลังในการต่อสู้ลุยทำตามความปรารถนา
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 67 -->
            <div class="col-md-2 pb-3 Thecard" data-category="wands">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems67">
                    <img src="{{ asset('source/images/card/wand/p_w.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems67" class="modal fade" tabindex="-1" aria-labelledby="cardItems67" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ PAGE OF WANDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/wand/p_w.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                เด็กหนุ่มผู้แต่งตัวพร้อมออกผจญภัย ยืนถือและจ้องมองไม้ต้องความมุ่งมั่นและมั่นใจ และพร้อมที่จะเดินหน้าลุยไม่ว่าอุปสรรคจะเป็นอย่างไร
                                <br>
                                - การเตรียมพร้อมผจญภัย ออกเดินทางค้นหาสิ่งใหม่ๆ ด้วยความมุ่งมั่นและตั้งใจ <br>
                                - การเปลี่ยนแปลงสถานะการทำงาน
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 68 -->
            <div class="col-md-2 pb-3 Thecard" data-category="wands">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems68">
                    <img src="{{ asset('source/images/card/wand/1_w.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems68" class="modal fade" tabindex="-1" aria-labelledby="cardItems68" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ ACE OF WANDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/wand/1_w.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                มือที่ยื่นออกมาจากก้อนเมฆถือไม้ที่ยังมีการเติบโต มีหน่อใบที่ยังงอกออกจากกิ่ง และใบที่ร่วงลงมาจากกิ่งช้าๆ ด้วยแรงลมที่เปรียบเสมือนตรรกะและเหตุผล ที่พัดให้ไม้ที่เป็นดั่งธาตุไฟลุกโชนอย่างต่อเนื่อง
                                <br>
                                - การเริ่มต้นงานใหม่ แรงบันดาลใจใหม่ๆ <br>
                                - ความรู้สึกที่เริ่มลุกโชน เหมือนไฟที่จุดติด
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 69 -->
            <div class="col-md-2 pb-3 Thecard" data-category="wands">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems69">
                    <img src="{{ asset('source/images/card/wand/2_w.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems69" class="modal fade" tabindex="-1" aria-labelledby="cardItems69" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ TWO OF WANDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/wand/2_w.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ชายหนุ่มยืนอยู่บนกำแพงเมือง ถือลูกโลกที่เปรียบเหมือน โอกาส อนาคต ที่กว้างไกล มองไปยังอีกฟากฝั่งของทะเล โดยมือจับไม้ 1 ไม้ที่ปักไว้ โดยมีอีกไม้อยู่ข้างๆ
                                <br>
                                - การวางแผนอนาคต การมองถึงอนาคต <br>
                                - ถึงจุดที่ต้องตัดสินใจเลือกเดิน <br>
                                - การประเมินว่าจะทำยังไงต่อไปในอนาคต
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 70 -->
            <div class="col-md-2 pb-3 Thecard" data-category="wands">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems70">
                    <img src="{{ asset('source/images/card/wand/3_w.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems70" class="modal fade" tabindex="-1" aria-labelledby="cardItems70" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ THREE OF WANDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/wand/3_w.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ 3 ไม้เป็นไพ่ของชายหนุ่มที่มีลักษณะเช่นพ่อค้า ยืนอย่างมั่นคง มองไปยังทะเลอันกว้างใหญ่ รอเรือสินค้าที่ส่งออกไปค้าขายยังต่างประเทศ ว่าเมื่อไหร่จะกลับมา
                                <br>
                                - การส่งสิ่งที่เราสร้างขึ้นมาออกไป เช่น การส่งงาน ส่งของ ส่งความรัก <br>
                                - การรอผลลัพธ์ที่ส่งออกไปกลับมา โดยที่ก็ไม่รู้ว่าผลลัพธ์จะดีหรือไม่ <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 71 -->
            <div class="col-md-2 pb-3 Thecard" data-category="wands">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems71">
                    <img src="{{ asset('source/images/card/wand/4_w.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems71" class="modal fade" tabindex="-1" aria-labelledby="cardItems71" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ FOUR OF WANDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/wand/4_w.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ภาพของไม้สี่ไม้ที่ปักทำเป็นซุ้มประตูทางเข้างานแต่งงาน ของชายหญิงด้านหลังที่กำลังจัดพิธีเฉลิมฉลองแต่งงานเป็นครอบครัวเดียวกัน
                                <br>
                                - การเฉลิมฉลอง งานแต่งงาน <br>
                                - ความรัก เพื่อน ครอบครัว
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 72 -->
            <div class="col-md-2 pb-3 Thecard" data-category="wands">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems72">
                    <img src="{{ asset('source/images/card/wand/5_w.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems72" class="modal fade" tabindex="-1" aria-labelledby="cardItems72" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ FIVE OF WANDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/wand/5_w.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                เด็ก 5 คน กำลังทำการต่อเติมไม้ที่ถือไว้ ทุกคนพยายามที่จะปักไม้ของตัวเองลงและประกอบเข้าด้วยกันให้ลงตัว แต่ก็ยังยุ่งเหยิงเพราะแต่ละคนไม่เข้าใจกัน
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 73 -->
            <div class="col-md-2 pb-3 Thecard" data-category="wands">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems73">
                    <img src="{{ asset('source/images/card/wand/6_w.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems73" class="modal fade" tabindex="-1" aria-labelledby="cardItems73" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ SIX OF WANDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/wand/6_w.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ชายนายทหารผู้ได้รับชัยชนะ เดินทางกลับมายังเมือง โดยมีผู้คนมาร่วมสรรเสริญและแสดงความยินดีอยู่รอบข้าง
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 74 -->
            <div class="col-md-2 pb-3 Thecard" data-category="wands">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems74">
                    <img src="{{ asset('source/images/card/wand/7_w.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems74" class="modal fade" tabindex="-1" aria-labelledby="cardItems74" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ SEVEN OF WANDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/wand/7_w.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ชายหนุ่มยืนอยู่บนเนินที่สูง เค้ากำลังถือไม้ต่อสู้ฟาดฟันกับไม้อีกหกไม้ ที่ยื่นขึ้นมา เพื่อรักษาตำแหน่งที่ยืนของตัวเองไว้
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 75 -->
            <div class="col-md-2 pb-3 Thecard" data-category="wands">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems75">
                    <img src="{{ asset('source/images/card/wand/8_w.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems75" class="modal fade" tabindex="-1" aria-labelledby="cardItems75" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ EIGHT OF WANDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/wand/8_w.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไม้ทั้ง 8 พุ่งลงมาจากฟากฟ้า อย่างรวดเร็ว โดยที่ท้องฟ้าและฉากทิวทัศน์เบื้องหลังมีความสดใส และชัดเจน
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 76 -->
            <div class="col-md-2 pb-3 Thecard" data-category="wands">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems76">
                    <img src="{{ asset('source/images/card/wand/9_w.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems76" class="modal fade" tabindex="-1" aria-labelledby="cardItems76" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ NINE OF WANDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/wand/9_w.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ของชายคนหนึ่งที่ยืนถือไม้ ที่ตัวและหัวมีแผลบาดเจ็บ จากการที่ต่อสู้ฝ่าฟัน ทำงานตั้งไม้ มาถึง 8 ไม้ และเค้าก็ยังจะทำงานนี้ต่อไป
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 77 -->
            <div class="col-md-2 pb-3 Thecard" data-category="wands">
                <div role="button" class="card" style="width: 12rem" data-bs-toggle="modal" data-bs-target="#cardItems77">
                    <img src="{{ asset('source/images/card/wand/10_w.png') }}" alt="" class="card-img-top" style="height: 20rem;">
                </div>

                <div id="cardItems77" class="modal fade" tabindex="-1" aria-labelledby="cardItems77" aria-hidden=true>
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ความหมายไพ่ TEN OF WANDS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body clearfix">
                                <img src="{{ asset('source/images/card/wand/10_w.png') }}" alt="" class="col-md-6 float-md-start mb-3 me-md-3" style="height: 20rem; width: 12rem;">
                                <p>
                                ไพ่ใบนี้ เป็นไพ่ของชายคนนึงที่แบกไม้ทั้ง 10 อันหนักอึ้งไว้ ซึ่งงานก็ใกล้ถึงจุดหมายปลายทางแล้ว
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- END DECK OF CARD -->
        </div>

        <script>

        const showAll = document.getElementById('all');
        const categoryType = document.querySelectorAll('.filter-type');

        const DeckofCard = document.querySelector('.Deck0fCard');
        const Cards = DeckofCard.getElementsByClassName('Thecard');

        showAll.addEventListener('click', function () {
            showAllCard();
        });

        categoryType.forEach(function (button) {
            button.addEventListener('click', function () {
                filterCardsCategory(button.dataset.category);
            });
        });

        function showAllCard() {
            for (let i = 0; i < Cards.length; i++) {
                Cards[i].style.display = 'block';
            }
        }

        function filterCardsCategory(category) {
            for (let i = 0; i < Cards.length; i++) {
            const Card = Cards[i];
            const CardCategory = Card.dataset.category;

            if (CardCategory === category) {
                Card.style.display = 'block';
                } else {
                Card.style.display = 'none';
                }
            }
        }

    </script>
</section>

<!-- <section id="FQAs">

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

</section> -->



<div class="container">
  <footer class=" py-3 my-4 border-top">
      <p class="text-center text-mute">&copy; 2022 by Pongsawadi</p>
  </footer>
</div>






    <script src="{{ asset('source/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('soure/custom.js') }}"></script>
    <!-- <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
