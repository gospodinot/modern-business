<?php 
    $pageName = "Privacy Policy";
    session_start();
    require_once("config.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'elements/head.php'; ?>
        <style>
            {-webkit-box-sizing:border-box;box-sizing:border-box}::before,::after{-webkit-box-sizing:inherit;box-sizing:inherit}html{line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}body{margin:0}main{display:block}p,table,blockquote,address,pre,iframe,form,figure,dl{margin:0}h1,h2,h3,h4,h5,h6{font-size:inherit;line-height:inherit;font-weight:inherit;margin:0}ul,ol{margin:0;padding:0;list-style:none}dt{font-weight:700}dd{margin-left:0}hr{-webkit-box-sizing:content-box;box-sizing:content-box;height:0;overflow:visible;border:0;border-top:1px solid;margin:0;clear:both}pre{font-family:monospace,monospace;font-size:inherit}address{font-style:inherit}a{background-color:transparent;text-decoration:none;color:inherit}abbr[title]{border-bottom:none;text-decoration:underline;-webkit-text-decoration:underline dotted;text-decoration:underline dotted}b,strong{font-weight:bolder}code,kbd,samp{font-family:monospace,monospace;font-size:inherit}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}img{border-style:none;vertical-align:bottom}embed,object,iframe{border:0;vertical-align:bottom}button,input,optgroup,select,textarea{-webkit-appearance:none;-moz-appearance:none;appearance:none;vertical-align:middle;color:inherit;font:inherit;border:inherit;background:0 0;padding:0;margin:0;outline:0;border-radius:0;text-align:inherit}[type=checkbox]{-webkit-appearance:checkbox;-moz-appearance:checkbox;appearance:checkbox}[type=radio]{-webkit-appearance:radio;-moz-appearance:radio;appearance:radio}button,input{overflow:visible}button,select{text-transform:none}button,[type=button],[type=reset],[type=submit]{cursor:pointer;-webkit-appearance:none;-moz-appearance:none;appearance:none}button[disabled],[type=button][disabled],[type=reset][disabled],[type=submit][disabled]{cursor:default}button::-moz-focus-inner,[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner{border-style:none;padding:0}button:-moz-focusring,[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring{outline:1px dotted ButtonText}fieldset{margin:0;padding:0;border:0;min-width:0}legend{color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{vertical-align:baseline}textarea{overflow:auto}[type=checkbox],[type=radio]{padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{outline-offset:-2px}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}::-webkit-input-placeholder{font:inherit}:-ms-input-placeholder{font:inherit}::-ms-input-placeholder{font:inherit}::placeholder{font:inherit}label[for]{cursor:pointer}details{display:block}summary{display:list-item}table{border-collapse:collapse;border-spacing:0}caption{text-align:left}td,th{vertical-align:top}th{text-align:left;font-weight:700}template{display:none}[hidden]{display:none}body{background:#fff;font-family:helvetica neue,Helvetica,Arial,sans-serif;font-size:1.125rem;color:#6a6f82;margin:0}.header{background-color:#464855;display:inline-block;width:100%}.header .logo{display:block;font-weight:700;font-size:1rem;color:#fff;padding:1rem 0}.menu-btn:hover{background-color:#464855}.subnav{background:#fff;padding:1rem 0;top:0;position:-webkit-sticky;position:sticky;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,.2);box-shadow:0 2px 5px 0 rgba(0,0,0,.2)}.subnav ul{margin:0;padding:0;list-style:none;overflow:hidden}.subnav li{margin-right:.25rem;margin-top:.5rem;margin-bottom:.5rem}.subnav li label{display:inline-block;width:100%;font-weight:700;color:#6a6f82;text-align:center;vertical-align:middle;border:2px solid #e5e5ed;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;padding:.625rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out}.subnav li label:hover{border-color:#008461;color:#008461}.subnav .menu{clear:both;max-height:0;-webkit-transition:max-height .3s ease-out;transition:max-height .3s ease-out}.subnav .menu-icon{cursor:pointer;display:inline-block;position:relative;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;top:-5px}.subnav .menu-icon .navicon{background:#008461;display:inline-block;height:2px;position:relative;-webkit-transition:background .2s ease-out;transition:background .2s ease-out;width:18px}.subnav .menu-icon .navicon:before,.subnav .menu-icon .navicon:after{background:#008461;content:"";display:block;height:100%;position:absolute;-webkit-transition:all .2s ease-out;transition:all .2s ease-out;width:100%}.subnav .menu-icon .navicon:before{top:5px}.subnav .menu-icon .navicon:after{top:-5px}.subnav .menu-btn{display:none}.subnav .menu-btn:checked~.menu{max-height:inherit}.subnav .menu-btn:checked~.menu-icon .navicon{background:0 0}.subnav .menu-btn:checked~.menu-icon .navicon:before{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);opacity:.7}.subnav .menu-btn:checked~.menu-icon .navicon:after{-webkit-transform:rotate(45deg);transform:rotate(45deg);opacity:.7}.subnav .menu-btn:checked~.menu-icon .label-name{opacity:.7}.subnav .menu-btn:checked~.menu-icon:not(.steps) .navicon:before,.subnav .menu-btn:checked~.menu-icon:not(.steps) .navicon:after{top:0}.subnav .label-name{position:absolute;top:8px;left:25px;display:inline-block;color:#008461;font-size:.85rem;text-transform:uppercase;font-weight:700}.subnav .by-privacypolicies{position:absolute;font-size:1rem;top:1px;right:20px}.subnav .by-privacypolicies a{display:inline-block;color:#008461;font-weight:600;text-decoration:none;-webkit-transition:all .3s;transition:all .3s}.subnav .by-privacypolicies a:hover{opacity:.7}.subnav .by-privacypolicies a img{width:1.25rem;margin-right:7px;-webkit-transition:all .3s;transition:all .3s}.container{position:relative;max-width:980px;margin-left:auto;margin-right:auto;padding-left:20px;padding-right:20px}.page{margin:0;padding:0}.page input,.page section>div{opacity:0;display:none;-webkit-animation:fade 1s;animation:fade 1s}.page #en:checked~section .en,.page #es:checked~section .es,.page #fr:checked~section .fr,.page #de:checked~section .de,.page #it:checked~section .it,.page #nl:checked~section .nl{display:block;opacity:1}.page #en:checked~.subnav .container .en label,.page #es:checked~.subnav .container .es label,.page #fr:checked~.subnav .container .fr label,.page #de:checked~.subnav .container .de label,.page #it:checked~.subnav .container .it label,.page #nl:checked~.subnav .container .nl label{color:#008461;border-color:#008461}@-webkit-keyframes fade{0%{opacity:0}100%{opacity:1}}@keyframes fade{0%{opacity:0}100%{opacity:1}}.page footer{font-size:1rem;color:#fff;background:#464855;padding:1rem 0}section{max-width:980px;margin-left:auto;margin-right:auto;line-height:1.7;overflow-wrap:break-word;word-wrap:break-word;padding:10px 20px 40px}section h1,section h2,section h3,section h4,section h5,section h6{font-weight:700;margin-bottom:0;padding-bottom:0}section h1,section h2,section h3{color:#464855}section h4,section h5,section h6{color:#6a6f82}section h1{font-size:1.625rem;margin-top:25px;margin-bottom:15px;line-height:1.4}section h2{font-size:1.375rem;margin-top:20px;margin-bottom:10px}section h3{font-size:1.25rem;margin-top:20px;margin-bottom:10px}section h4{font-size:1.125rem;margin-top:20px;margin-bottom:10px}section h5{font-size:1.125rem;margin-top:20px;margin-bottom:10px}section h6{font-size:1.125rem;margin-top:20px;margin-bottom:10px}section p{font-size:1rem;margin-bottom:10px}section ul{font-size:1rem;list-style-type:disc;line-height:2;margin-left:30px;margin-top:15px;margin-bottom:15px}section a{color:#6a6f82;text-decoration:none;-webkit-transition:color .3s;transition:color .3s}section a:hover{color:#464855}section pre{-webkit-box-sizing:border-box;box-sizing:border-box;width:100%;overflow:auto;overflow-y:hidden;font-size:14px;line-height:20px;background:#fff6d0;border:1px solid #e6dcae;white-space:pre-line;white-space:-moz-pre-line;white-space:-pre-line;white-space:-o-pre-line;word-wrap:break-word;border-radius:4px;margin:20px 0;padding:15px}@media all and (max-width:479px){.menu li:first-of-type{margin-top:20px}}@media all and (min-width:480px) and (max-width:767px){.menu li:first-of-type{margin-top:20px}}@media all and (min-width:768px) and (max-width:979px){.menu li:first-of-type{margin-top:20px}}@media all and (min-width:980px){.subnav{background:#fff}.subnav li{float:left}.subnav li:hover{border-radius:0}.subnav .label-name{display:none}.subnav .menu{clear:none;max-height:none}.subnav .menu li:last-of-type{margin-bottom:0}.subnav .menu-icon{display:none}.subnav .by-privacypolicies{top:1.3rem}section{padding:10px 20px 40px}section h1{font-size:2.125rem}section h2{font-size:1.65rem}section h3{font-size:1.35rem}section h4{font-size:1.25rem}section h5{font-size:1.125rem}section h6{font-size:1rem}section ul li p{margin-top:0;margin-bottom:10px}footer{font-size:1rem!important;padding:1rem 0;background-color:#464855;color:#fff}}
        </style>
    </head>
    <body>

    <div class="page">
        <input id="en" checked="checked" type="radio" name="languages" />
        <header class="header">
            <div class="container">
                <span class="logo">Privacy Policy for <?php echo $serverInfo["Title"]; ?></span>
            </div>
        </header>
    </div>

    <section>
        <div class="en section_container" section-language="en">
        <div id="md_en" data-target="out_en" class="agreement_md"><h1>Privacy Policy</h1>
        <p>Last updated: August 26, 2021</p>
        <p>This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p>
        <p>We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy.</p>
        <h1>Interpretation and Definitions</h1>
        <h2>Interpretation</h2>
        <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
        <h2>Definitions</h2>
        <p>For the purposes of this Privacy Policy:</p>
        <ul>
        <li>
        <p><strong>Account</strong> means a unique account created for You to access our Service or parts of our Service.</p>
        </li>
        <li>
        <p><strong>Company</strong> (referred to as either &quot;the Company&quot;, &quot;We&quot;, &quot;Us&quot; or &quot;Our&quot; in this Agreement) refers to <?php echo $serverInfo["Title"]; ?>.</p>
        </li>
        <li>
        <p><strong>Cookies</strong> are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.</p>
        </li>
        <li>
        <p><strong>Country</strong> refers to: Florida, United States</p>
        </li>
        <li>
        <p><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</p>
        </li>
        <li>
        <p><strong>Personal Data</strong> is any information that relates to an identified or identifiable individual.</p>
        </li>
        <li>
        <p><strong>Service</strong> refers to the Website.</p>
        </li>
        <li>
        <p><strong>Service Provider</strong> means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.</p>
        </li>
        <li>
        <p><strong>Usage Data</strong> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</p>
        </li>
        <li>
        <p><strong>Website</strong> refers to <?php echo $serverInfo["Title"]; ?>, accessible from <a href="www.example.com" rel="external nofollow noopener" target="_blank">www.example.com</a></p>
        </li>
        <li>
        <p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
        </li>
        </ul>
        <h1>Collecting and Using Your Personal Data</h1>
        <h2>Types of Data Collected</h2>
        <h3>Personal Data</h3>
        <p>While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:</p>
        <ul>
        <li>
        <p>Email address</p>
        </li>
        <li>
        <p>First name and last name</p>
        </li>
        <li>
        <p>Phone number</p>
        </li>
        <li>
        <p>Address, State, Province, ZIP/Postal code, City</p>
        </li>
        <li>
        <p>Usage Data</p>
        </li>
        </ul>
        <h3>Usage Data</h3>
        <p>Usage Data is collected automatically when using the Service.</p>
        <p>Usage Data may include information such as Your Device's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>
        <p>When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.</p>
        <p>We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.</p>
        <h3>Tracking Technologies and Cookies</h3>
        <p>We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service. The technologies We use may include:</p>
        <ul>
        <li><strong>Cookies or Browser Cookies.</strong> A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.</li>
        <li><strong>Flash Cookies.</strong> Certain features of our Service may use local stored objects (or Flash Cookies) to collect and store information about Your preferences or Your activity on our Service. Flash Cookies are not managed by the same browser settings as those used for Browser Cookies. For more information on how You can delete Flash Cookies, please read &quot;Where can I change the settings for disabling, or deleting local shared objects?&quot; available at <a href="https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_" rel="external nofollow noopener" target="_blank">https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_</a></li>
        <li><strong>Web Beacons.</strong> Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have visited those pages or opened an email and for other related website statistics (for example, recording the popularity of a certain section and verifying system and server integrity).</li>
        </ul>
        <p>Cookies can be &quot;Persistent&quot; or &quot;Session&quot; Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser. Learn more about cookies: <a href="https://www.privacypolicies.com/blog/cookies/" target="_blank">What Are Cookies?</a>.</p>
        <p>We use both Session and Persistent Cookies for the purposes set out below:</p>
        <ul>
        <li>
        <p><strong>Necessary / Essential Cookies</strong></p>
        <p>Type: Session Cookies</p>
        <p>Administered by: Us</p>
        <p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>
        </li>
        <li>
        <p><strong>Cookies Policy / Notice Acceptance Cookies</strong></p>
        <p>Type: Persistent Cookies</p>
        <p>Administered by: Us</p>
        <p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
        </li>
        <li>
        <p><strong>Functionality Cookies</strong></p>
        <p>Type: Persistent Cookies</p>
        <p>Administered by: Us</p>
        <p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
        </li>
        </ul>
        <p>For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy or the Cookies section of our Privacy Policy.</p>
        <h2>Use of Your Personal Data</h2>
        <p>The Company may use Personal Data for the following purposes:</p>
        <ul>
        <li>
        <p><strong>To provide and maintain our Service</strong>, including to monitor the usage of our Service.</p>
        </li>
        <li>
        <p><strong>To manage Your Account:</strong> to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</p>
        </li>
        <li>
        <p><strong>For the performance of a contract:</strong> the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</p>
        </li>
        <li>
        <p><strong>To contact You:</strong> To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</p>
        </li>
        <li>
        <p><strong>To provide You</strong> with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</p>
        </li>
        <li>
        <p><strong>To manage Your requests:</strong> To attend and manage Your requests to Us.</p>
        </li>
        <li>
        <p><strong>For business transfers:</strong> We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.</p>
        </li>
        <li>
        <p><strong>For other purposes</strong>: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.</p>
        </li>
        </ul>
        <p>We may share Your personal information in the following situations:</p>
        <ul>
        <li><strong>With Service Providers:</strong> We may share Your personal information with Service Providers to monitor and analyze the use of our Service, to contact You.</li>
        <li><strong>For business transfers:</strong> We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of Our business to another company.</li>
        <li><strong>With Affiliates:</strong> We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.</li>
        <li><strong>With business partners:</strong> We may share Your information with Our business partners to offer You certain products, services or promotions.</li>
        <li><strong>With other users:</strong> when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside.</li>
        <li><strong>With Your consent</strong>: We may disclose Your personal information for any other purpose with Your consent.</li>
        </ul>
        <h2>Retention of Your Personal Data</h2>
        <p>The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>
        <p>The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.</p>
        <h2>Transfer of Your Personal Data</h2>
        <p>Your information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.</p>
        <p>Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p>
        <p>The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.</p>
        <h2>Disclosure of Your Personal Data</h2>
        <h3>Business Transactions</h3>
        <p>If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</p>
        <h3>Law enforcement</h3>
        <p>Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p>
        <h3>Other legal requirements</h3>
        <p>The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:</p>
        <ul>
        <li>Comply with a legal obligation</li>
        <li>Protect and defend the rights or property of the Company</li>
        <li>Prevent or investigate possible wrongdoing in connection with the Service</li>
        <li>Protect the personal safety of Users of the Service or the public</li>
        <li>Protect against legal liability</li>
        </ul>
        <h2>Security of Your Personal Data</h2>
        <p>The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p>
        <h1>Children's Privacy</h1>
        <p>Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p>
        <p>If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent's consent before We collect and use that information.</p>
        <h1>Links to Other Websites</h1>
        <p>Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of every site You visit.</p>
        <p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>
        <h1>Changes to this Privacy Policy</h1>
        <p>We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p>
        <p>We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the &quot;Last updated&quot; date at the top of this Privacy Policy.</p>
        <p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>
        <h1>Contact Us</h1>
        <p>If you have any questions about this Privacy Policy, You can contact us:</p>
        <ul>
        <li>By email: <a href="mailto:contact@example.com">contact@example.com</a></li>
        </ul>
        </div>
        <div id="out_en" class="agreement_output"></div>
        </div>
    </section>


    <footer>
        <div class="container">
            Privacy Policy for <?php echo $serverInfo["Title"]; ?>
        </div>
    </footer>

</div>
</body>
</html>