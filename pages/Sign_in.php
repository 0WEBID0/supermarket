<!DOCTYPE html>
<html style="font-size: 16px;" lang="en-SA">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Sign_in</title>
  <link rel="stylesheet" href="../bootstrap/bootstrap.css" media="screen">
  <link rel="stylesheet" href="../css/Sign_in.css" media="screen">
  <script class="u-script" type="text/javascript" src="../jquery/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../bootstrap/bootstrap.js" defer=""></script>
  <meta name="referrer" content="origin">
  <link rel="icon" href="../images/Screenshot2023-09-24155118.png">




  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "supermarket"
}</script>
  <meta name="theme-color" content="#00833e">
  <meta property="og:title" content="Sign_in">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body data-path-to-root="./" class="u-body u-xl-mode" data-lang="en">
  <section
    class="u-clearfix u-container-align-center-sm u-container-align-center-xs u-container-align-right-lg u-container-align-right-md u-container-align-right-xl u-image lazyload u-section-1"
    id="carousel_e2a5" data-image-width="2000" data-image-height="1125"
    data-bg="url(&quot;../images/13808841.jpg&quot;)">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-form u-white u-form-1">
        <form action="../inc/register_post.php" method="post"
          class="u-clearfix u-form-spacing-19 u-form-vertical u-inner-form" source="email" name="form"
          style="padding: 19px;" redirect="true" redirect-address="../index.html">

          <?php
          if (isset($email_error)) {
            echo $email_error;
          }
          ?>

          <div class="u-form-email u-form-group">
            <label for="email-db6f" class="u-label">البريد الالكترونى</label>
            <input type="email" placeholder="ادخل عنوان بريد الكتروني صحيح" id="email-db6f" name="email"
              class="u-border-none u-grey-15 u-input u-input-rectangle u-radius-10" required="">
          </div>

          <?php
          if (isset($user_error)) {
            echo $user_error;
          }
          ?>

          <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-2">
            <label for="name-961f" class="u-label">الاسم الاول</label>
            <input type="text" placeholder="ادخل الاسم الاول" id="name-961f" name="name-1"
              class="u-border-none u-grey-15 u-input u-input-rectangle u-radius-10" required="">
          </div>

          <?php
          if (isset($userl_error)) {
            echo $userl_error;
          }
          ?>

          <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-3">
            <label for="name-961f" class="u-label">الاسم الاخر</label>
            <input type="text" placeholder="ادخل الاسم الاخر" id="name-961f" name="name-2"
              class="u-border-none u-grey-15 u-input u-input-rectangle u-radius-10" required="">
          </div>

          <?php
          if (isset($phone_error)) {
            echo $phone_error;
          }
          ?>

          <div class="u-form-group u-form-phone u-form-group-4">
            <label for="phone-01ec" class="u-label u-label-4">الهاتف</label>
            <input type="tel"
              pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})"
              placeholder="Enter your phone (e.g. +14155552675)" id="phone-01ec" name="phone"
              class="u-border-none u-grey-15 u-input u-input-rectangle u-radius-10" required="">
          </div>

          <?php
          if (isset($password_error)) {
            echo $password_error;
          }
          ?>

          <div class="u-form-group u-form-phone u-form-group-4">
            <label for="password" class="u-label u-label-4">كلمة المرور</label>
            <input type="password" placeholder="أدخل كلمة مرور" id="password" name="password"
              class="u-border-none u-grey-15 u-input u-input-rectangle u-radius-10" required="">
          </div>

          <?php
          if (isset($gender_error)) {
            echo $gender_error;
          }
          ?>

          <div class="u-form-group u-form-input-layout-horizontal u-form-radiobutton u-form-group-5">
            <label class="u-label">Radios</label>
            <div class="u-form-radio-button-wrapper">
              <div class="u-input-row">
                <input id="field-9c16" type="radio" name="radiobutton" value="male" class="u-field-input"
                  checked="checked" data-calc="" required="required">
                <label class="u-field-label" for="field-9c16">ذكر</label>
              </div>
              <div class="u-input-row">
                <input id="field-44ff" type="radio" name="radiobutton" value="female" class="u-field-input" data-calc=""
                  required="required">
                <label class="u-field-label" for="field-44ff">انثي</label>
              </div>
              <div class="u-input-row">
                <input id="field-2fd3" type="radio" name="radiobutton" value="known" class="u-field-input" data-calc=""
                  required="required">
                <label class="u-field-label" for="field-2fd3">لا اريد ان اذكر</label>
              </div>
            </div>
          </div>
          <div class="u-form-country u-form-group u-form-group-6">
            <label for="country-40aa" class="u-label">الدولة</label>
            <div class="u-form-select-wrapper">
              <select id="country-40aa" name="Country"
                class="u-border-none u-grey-15 u-input u-input-rectangle u-radius-10" required="required"></select>
              <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px"
                viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve">
                <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
              </svg>
            </div>
          </div>
          <div class="u-form-checkbox u-form-group u-form-group-7">
            <input type="checkbox" id="checkbox-898d" name="checkbox" value="On" class="u-field-input"
              required="required">
            <label for="checkbox-898d" class="u-field-label">اوافق على شروط الاستخدام</label>
          </div>
          <div class="u-form-checkbox u-form-group u-form-group-8">
            <input type="checkbox" id="checkbox-bb73" name="checkbox-1" value="On" class="u-field-input">
            <label for="checkbox-bb73" class="u-field-label">تذكرني</label>
          </div>
          <p class="u-form-group u-form-text u-text u-text-1">
            <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
              data-href="Login.html"> لدى حساب بالفعل</a>
          </p>
          <div class="u-align-right u-form-group u-form-submit">
            <a href="#"
              class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-custom-color-1 u-radius-20 u-btn-2">انشاء
              حساب</a>
            <input name="submit" type="submit" value="submit" class="u-form-control-hidden">
          </div>
          <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
          <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try
            again. </div>
          <input type="hidden" value="" name="recaptchaResponse">
        </form>
      </div>
    </div>
  </section>





</body>

</html>