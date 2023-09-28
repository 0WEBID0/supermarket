<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en-SA"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>accept work</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.css" media="screen">
<link rel="stylesheet" href="../css/accept-work.css" media="screen">
    <script class="u-script" type="text/javascript" src="../jquery/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../bootstrap/bootstrap.js" defer=""></script>
    <link rel="icon" href="../images/Screenshot2023-09-24155118.png">
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "supermarket",
		"logo": "../images/Screenshot2023-09-24155118.png?rand=0705"
}</script>
    <meta name="theme-color" content="#00833e">
    <meta property="og:title" content="accept work">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" class="u-body u-xl-mode" data-lang="en"><header class=" u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-clearfix u-header u-section-row-container" id="sec-2884" style="background-image: none;"><div class="u-section-rows" >
        <div class="u-clearfix u-section-row" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-ddf0">
          <div class="u-clearfix u-sheet u-valign-middle-md u-sheet-1">
            <a href="../index.php" class="u-image u-logo u-image-1" data-image-width="843" data-image-height="780" title="Home">
              <img src="../images/Screenshot2023-09-24155118.png?rand=0705" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
              <div class="menu-collapse" style="font-size: 1.125rem; letter-spacing: 0px; font-weight: 700;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 8px 0px; font-size: calc(1em + 18px);">
                  <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                  <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
                </a>
              </div>
              <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-1 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-5-base u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-palette-4-base" href="#" style="padding: 10px;">English</a>
</li><li class="u-nav-item"><a class="u-border-1 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-5-base u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-palette-4-base" href="login.php" style="padding: 10px;">تسجيل الدخول</a>
</li><li class="u-nav-item"><a class="u-border-1 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-5-base u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-palette-4-base" href="Contact.html" style="padding: 10px;">تواصل معنا</a>
</li><li class="u-nav-item"><a class="u-border-1 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-5-base u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-palette-4-base" href="search-to-work.html" style="padding: 10px;">البحث عن وظيفة</a>
</li><li class="u-nav-item"><a class="u-border-1 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-5-base u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-palette-4-base" href="Speech-of-the-General-Manager.html" style="padding: 10px;">كلمة المدير العام</a>
</li><li class="u-nav-item"><a class="u-border-1 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-5-base u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-palette-4-base" href="About-the-company.html" style="padding: 10px;">نبذة عن الشركة</a>
</li><li class="u-nav-item"><a class="u-border-1 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-5-base u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-palette-4-base" href="products.php" style="padding: 10px;">المنتجات</a>
</li><li class="u-nav-item"><a class="u-border-1 u-border-no-bottom u-border-no-right u-border-no-top u-border-palette-5-base u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-palette-4-base" href="../index.php" style="padding: 10px;">الرئيسية</a>
</li></ul>
              </div>
              <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-75 u-sidenav">
                  <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-text-active-palette-1-base u-text-hover-palette-2-base u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">English</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="login.php">تسجيل الدخول</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">تواصل معنا</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="search-to-work.html">البحث عن وظيفة</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Speech-of-the-General-Manager.html">كلمة المدير العام</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About-the-company.html">نبذة عن الشركة</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="products.php">المنتجات</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../index.php">الرئيسية</a>
</li></ul>
                  </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-0"></div>
              </div>
            </nav>
            <form action="#" method="get" class="u-border-1 u-border-grey-30 u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xs u-search u-search-left u-white u-search-1">
              <button class="u-search-button" type="submit">
                <span class="u-search-icon u-spacing-10">
                  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9d24"></use></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-9d24" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
                </span>
              </button>
              <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
            </form>
          </div>
          
          
          
          
          
        </div>
        <div class="u-hidden-sm u-hidden-xs u-palette-1-base u-section-row u-sticky u-sticky-ceae u-section-row-2" id="sec-7264">
          <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-2">
            <form action="#" method="get" class="u-border-1 u-border-grey-30 u-radius-37 u-search u-search-left u-white u-search-2">
              <button class="u-search-button" type="submit">
                <span class="u-search-icon u-spacing-10">
                  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3c3e"></use></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-3c3e" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
                </span>
              </button>
              <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
            </form>
            <div class="u-align-right u-hidden-sm u-hidden-xs u-list u-list-1">
              <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-custom-item u-list-item u-repeater-item u-list-item-1">
                  <div class="u-container-layout u-similar-container u-container-layout-1">
                    <p class="u-align-center u-custom-item u-hover-feature u-text u-text-1">
                      <a class="u-active-none u-border-none u-btn u-button-style u-hover-black u-hover-feature u-none u-text-hover-white u-btn-1" data-href="products.php">غذائية</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-custom-item u-list-item u-repeater-item u-list-item-2">
                  <div class="u-container-layout u-similar-container u-container-layout-2">
                    <p class="u-align-center u-custom-item u-hover-feature u-text u-text-palette-1-base u-text-2">
                      <a class="u-active-none u-border-none u-btn u-button-style u-custom-item u-hover-black u-hover-feature u-none u-text-body-alt-color u-text-hover-white u-btn-2" data-href="products.php">مشروبات</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-list-item-3">
                  <div class="u-container-layout u-similar-container u-container-layout-3">
                    <p class="u-align-center u-custom-item u-hover-feature u-text u-text-3">
                      <a class="u-btn u-button-style u-hover-black u-hover-feature u-none u-text-hover-white u-btn-3" data-href="products.php">حلويات</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-right u-hidden-sm u-hidden-xs u-list u-list-2">
              <div class="u-repeater u-repeater-2">
                <div class="u-container-style u-custom-item u-list-item u-repeater-item u-list-item-4">
                  <div class="u-container-layout u-similar-container u-container-layout-4">
                    <p class="u-align-center u-custom-item u-hover-feature u-text u-text-4">
                      <a class="u-active-none u-border-none u-btn u-button-style u-hover-black u-hover-feature u-none u-text-hover-white u-btn-4" data-href="products.php">الكترونيات</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-custom-item u-list-item u-repeater-item u-list-item-5">
                  <div class="u-container-layout u-similar-container u-container-layout-5">
                    <p class="u-align-center u-custom-item u-hover-feature u-text u-text-palette-1-base u-text-5">
                      <a class="u-active-none u-border-none u-btn u-button-style u-custom-item u-hover-black u-hover-feature u-none u-text-body-alt-color u-text-hover-white u-btn-5" data-href="products.php">صحة</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-list-item-6">
                  <div class="u-container-layout u-similar-container u-container-layout-6">
                    <p class="u-align-center u-custom-item u-hover-feature u-text u-text-6">
                      <a class="u-btn u-button-style u-hover-black u-hover-feature u-none u-text-hover-white u-btn-6" data-href="products.php">مجمدات</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
          
          
          
          <style class="u-sticky-style" data-style-id="ceae">.u-sticky-fixed.u-sticky-ceae, .u-body.u-sticky-fixed .u-sticky-ceae {
box-shadow: 5px 5px 20px 0 rgba(0,0,0,0.4) !important
}</style>
        </div>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-c6de">
      <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <h5 class="u-align-center u-custom-font u-font-courier-new u-hover-feature u-text u-text-default u-text-1">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-1" data-href="#" href="search-to-work.html">عمليات البحث المخزنة</a>
                </h5>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <h5 class="u-align-center u-custom-font u-font-courier-new u-hover-feature u-text u-text-default u-text-2">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-2" data-href="#" href="search-to-work.html">البحث المتقدم</a>
                </h5>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <h5 class="u-align-center u-custom-font u-font-courier-new u-hover-feature u-text u-text-default u-text-3">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-3" data-href="#" href="search-to-work.html">البحث عن وظيفة</a>
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div class="custom-expanded u-border-1 u-border-grey-dark-1 u-expanded-width-md u-line u-line-horizontal u-line-1"></div>
      </div>
      
      
      
    </section>
    <section class="u-clearfix u-section-2" id="sec-e366">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-20">
                <div class="u-layout-col">
                  <div class="u-container-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <div class="u-border-1 u-border-grey-40 u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
                        <div class="u-container-layout u-container-layout-2">
                          <p class="u-align-right u-text u-text-default u-text-1">
                            <span style="font-weight: 700;"> تفاصيل الوظيفة</span>
                            <br>
                            <br>مكان الوظيفة<br>نجران, السعودية<br>
                            <br>الدور الوظيفي<br>الأسواق<br>
                            <br>الحالة الوظيفية<br>دوام كامل<br>
                            <br>نوع التوظيف<br>موظف<br>عدد الوظائف الشاغرة<br>12
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-container-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-3">
                      <div class="u-border-1 u-border-grey-40 u-container-style u-expanded-width u-group u-shape-rectangle u-group-2">
                        <div class="u-container-layout u-container-layout-4">
                          <p class="u-align-right u-text u-text-default u-text-2">
                            <span style="font-weight: 700;"> المرشح المفضل</span>
                            <br>
                            <br>المستوى المهني<br>مبتدئ الخبرة<br>
                            <br>منطقة الإقامة<br>نجران, المملكة العربية السعودية<br>
                            <br>الجنسية<br>المملكة العربية السعودية
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-40">
                <div class="u-layout-col">
                  <div class="u-container-align-center u-container-style u-layout-cell u-size-60 u-layout-cell-3">
                    <div class="u-container-layout u-container-layout-5">
                      <div class="u-border-1 u-border-grey-40 u-container-style u-expanded-width u-group u-shape-rectangle u-group-3">
                        <div class="u-container-layout u-container-layout-6">
                          <p class="u-align-right u-text u-text-default u-text-3">
                            <span style="font-weight: 700;"> وصف الوظيفة</span>
                            <br>
                            <br>نؤمن أن العمل ليس مجرّد مكان تذهب إليه كل صباح، بل ينبغي أن يكون مكانًا ملائمًا للاكتشاف والابداع وتطوير المهارات، فلابد لمن يعمل في بنده أن يترك بصمته في العمل ويكون عضوًا فعالاً فيها. إذا كنت تتسم بالحماس والمسؤولية والدافع الذاتي للتعلم والتطور بالإضافة إلى الانضباط والقدرة على التكيف والعمل ضمن فريقٍ واحد، فانضم لفريق بنده اليوم لتخطو أولى خطواتك على مسارك المهني الناجح.<br>
                            <br>
                            <span style="font-weight: 700;">الهدف من الوظيفة</span>
                            <br>
                            <br>تقديم خدمة فعالة ومميزة من خلال القيام بعمليات المحاسبة للعملاء الذين يقومون بشراء البضائع والخدمات من اسواقنا. وإستلام النقود من العملاء وإعادة الباقي بحرص ودقة بإستخدام أجهزة المسح الضوئي وآلات المحاسبة الإلكترونية. ومعالجة عمليات الدفع التي تتم بواسطة البطاقات البنكية أو بطاقات الإئتمان أو نقاط قطاف.<br>
                            <br>
                            <span style="font-weight: 700;">المسؤوليات الوظيفية</span>
                            <br>
                            <br>• الترحيب بالعملاء والحرص على إرضائهم والتعامل معهم بلطف واظهار الابتسامة عند التعامل معهم والإستجابة لطلباتهم واحتياجاتهم.<br>• الاهتمام والالتزام بالنظافة الشخصية، المظهر اللائق والزي الموحد.<br>• إستلام العهدة يوميآ والتأكد من مطابقتها للمبلغ المسجل ومن ثم بدء العمل على جهاز المحاسبة.<br>• تمرير ومسح المنتجات المشتراة من قبل العملاء من خلال تطبيق الإجراءات المعتمدة والتأكد من التعامل مع المنتجات بالشكل الصحيح.<br>• مراعاة الدقة والتأكد من أن المنتج الصحيح هو الذي تم حسابه للعميل وأن المبلغ المستلم من العميل مطابق لمبلغ العملية.<br>• إصدار فاتورة العميل وإرجاع المبلغ المتبقي للعميل بشكل دقيق وذلك للحفاظ على دقة المبالغ في درج صندوق المحاسبة.<br>• تطبيق الإجراءات والخطوات المعتمدة عند معالجة عمليات المحاسبة النقدية أو من خلال البطاقات البنكية والإئتمانية.<br>• تطبيق السياسات والإجراءات المعتمدة عند القيام بعمليات إلغاء منتج أو جميع المنتجات من فاتورة العميل.<br>• إبلاغ العميل بسياسة الإسترجاع و الإستبدال في حال إستدعى الأمر أو في حال طلب العميل ذلك.<br>• التأكد من توفر أكياس التسوق بأحجامها وأي مواد إستهلاكية أخرى في نقطة المحاسبة.<br>• فرز وعد وتصنيف الأوراق النقدية والعملات المعدنية والإيصالات الخاصة بالبطاقات البنكية والإئتمانية عند نهاية الوردية.<br>• الفهم الجيد ومن ثم تطبيق السياسات الخاصة في قسم المحاسبة.<br>• إبلاغ العميل عند القيام بمسح المنتجات للمحاسبة في حال ملاحظة أي منتج قد يكون تالفآ أو عليه علامات تلف.<br>• تسجيل المنتجات والمتعلقات التي قد ينساها العميل حسب سياسة الشركة.<br>• عرض بطاقات الشراء الالكتروني متل (سلتي وأيتيونز ... الخ) على العملاء.<br>• عرض التسجيل في برامج المكافئات الخاص بالأسواق على العملاء وترغيبهم في ذلك.<br>• توجيه السؤال للعميل بلطف اذا كان يرغب بالمشاركة في برنامج التبرع.<br>• تقديم التوضيحات للعملاء بخصوص العروض والتخفيضات.<br>• عرض خدمة المساعدة في إيصال الأغراض الى المركبة بعد إنهاء عملية المحاسبة (هل تريد مساعدة: عامل تكييس الأغراض بإمكانه مساعدتك).<br>• التعامل مع شكاوى العملاء وحل مشاكلهم, وفي حال عدم القدرة على حل المشكلة توجيه العميل الى مسؤول خدمة العملاء أو رئيس وردية المحاسبين.<br>• التأكد من نظافة نقطة المحاسبة, والتأكد من توفر الأكياس, والتأكد من ترتيب البضائع في المنصة الملحقة بنقطة المحاسبة.<br>• توجيه عامل التكييس لإرجاع البضائع المبردة والمجمدة الى الثلاجة فورآ في حال عدم رغبة العميل بشرائها.<br>• استخراج تقرير جرد مفصل لجهاز المحاسبة عند إنتهاء الوردية.<br>• المساعدة في تدريب الموظفين الجدد والتعاون مع الموظفين في الاقسام الاخرى.<br>• الحرص على التعلم والتطور.<br>• المساعدة في إعادة تعبئة منصات عرض البضائع الفارغة, إعادة تعبئة الأكياس، وتعبئة طابعة الفواتير بالورق في وقت الفراغ.<br>• الصدق والاهتمام بممتلكات الشركة, معاملة الاخرين بإحترام وتقبل الثقافات/الجنسيات الاخرى.المهارات<br>
                            <br>
                            <span style="font-weight: 700;">التعليم</span>
                            <br>
                            <br>الشهادة الثانوية كحد أدنى<br>
                            <br>اللغة الأنجليزية<br>
                            <br>معرفة أساسية ببناء ومحتوى اللغة الإنجليزية, بما في ذلك معاني وتهجئة الكلمات, وقواعد الإنشاء.. الخ<br>
                            <br>
                            <span style="font-weight: 700;">الخبرات, والمهارات الوظيفية والفنية</span>
                            <br>
                            <br>• مهارات تواصل فعالة<br>• خبرة جيدة بالأرقام والحساب<br>• القدرة على التعامل مع المعاملات النقدية<br>• القدرة على إستخدام بطاقات الإئتمان, والبطاقات البنكية, والمفاتيح الخاصة بعمليات المحاسبة في أجهزة المحاسبة<br>• المعرفة بالمنتجات والأصناف, ومواقعها في السوق<br>• إدراك وحس مجتمعي<br>• النزاهة<br>• التركيز على خدمة العملاء<br>• القدرة على ضبط النفس<br>• تحمل ضغط العمل<br>• الابتسامة<br>• حسن المظهر والنضافة<br>• روح التعاون
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center-sm u-align-center-xs u-black u-clearfix u-footer" id="sec-69ef"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="../index.php" class="u-image u-logo u-image-1" data-image-width="519" data-image-height="480" title="Home">
          <img src="../images/Screenshot_2023-09-24_155118-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-30 u-layout-custom-sm u-layout-custom-xs u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-align-right-lg u-container-align-right-xl u-container-style u-layout-cell u-left-cell u-size-15-lg u-size-15-xl u-size-30-md u-size-60-sm u-size-60-xs u-layout-cell-1">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-container-layout-1"><!--position-->
                  <div data-position="" class="u-align-right u-position u-position-1"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text"><!--block_header_content--> اتصل بنا<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text u-text-palette-1-base u-text-2"><!--block_content_content-->
                          <br>
                          <a href="Contact.html" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1">تواصل معنا</a>
                          <br>
                          <br>
                          <a href="tel:01556991517" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2">خدمة العملاء</a>
                          <br>
                          <br>
                          <a href="#" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-3">السجل التجاري</a><!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
              <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-align-right u-container-style u-layout-cell u-size-15-lg u-size-15-xl u-size-30-md u-size-60-sm u-size-60-xs u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2"><!--position-->
                  <div data-position="" class="u-align-right u-position u-position-2"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text"><!--block_header_content--> روابط اخري<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text u-text-palette-1-base u-text-4"><!--block_content_content-->
                          <br>
                          <a href="search-to-work.html" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-4">طلب توظيف</a>
                          <br>
                          <br>
                          <a href="login.php" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-5">تسجيل الدخول</a>
                          <br>
                          <br>
                          <a href="#" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-6">الشكاوي والاقتراحات</a><!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
              <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-align-right-lg u-container-align-right-xl u-container-style u-layout-cell u-size-15-lg u-size-15-xl u-size-30-md u-size-60-sm u-size-60-xs u-layout-cell-3">
                <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-xl u-container-layout-3"><!--position-->
                  <div data-position="" class="u-align-right u-position u-position-3"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text"><!--block_header_content--> العروض الترويجية<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text u-text-palette-1-base u-text-6"><!--block_content_content-->
                          <br>
                          <a href="products.php" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-7">العروض الاسبوعية</a>
                          <br>
                          <br>
                          <a href="products.php" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-8">العروض الخاصة</a>
                          <br>
                          <br>
                          <a href="products.php" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-9">عروض الجملة</a><!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
              <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-right-cell u-size-15-lg u-size-15-xl u-size-30-md u-size-60-sm u-size-60-xs u-layout-cell-4">
                <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-xl u-container-layout-4"><!--position-->
                  <div data-position="" class="u-align-right u-position u-position-4"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text"><!--block_header_content--> عن الشركة<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text u-text-palette-1-base u-text-8"><!--block_content_content-->
                          <br>
                          <a href="Speech-of-the-General-Manager.html" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-10">كلمة المدير التنفيذي</a>
                          <br>
                          <br>
                          <a href="About-the-company.html" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-11">عن الشركة<br>
                          </a>
                          <br>
                          <a href="About-the-company.html" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-12">فروعنا</a><!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="u-text u-text-default u-text-9"> حقوق الاستخدام محفوظة لشركة&nbsp; ​بيكودين © 2019</p>
      </div>
      <a href="https://wa.me/00966505501397">
        <img src="../images/pngwing.png" class="whatsapp-image" alt="WhatsApp" />
      </a>
    </footer>
  
</body></html>