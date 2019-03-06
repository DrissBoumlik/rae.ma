<?php $lang = $GLOBALS['lang']; ?>

</div> <!-- <div class="col-sm-8 col-md-8">' : '<div class="col-sm-12 col-md-12">' -->
<div class="col-sm-4 col-md-4 sidebar">
    <!--// col-sm-offset-1 col-md-offset-1 -->
    <div class="sidebar-module apply">
        <div class="apply-widget">
            <div class="title-widget italic">
                <h3 class="uppercase"><strong><?php echo (($lang == 'ar') ? 'تسجيل' : (($lang == 'en') ? 'Admission' : 'Admission')); ?></strong></h3>
            </div>
            <div class="body-widget">
                <a href="/pages/apply?lang=<?php echo $lang;?>">
                    <div class="row apply-img">
                        <img src="/images/headline/apply-now<?php echo (($lang == 'ar') ? '-ar' : (($lang == 'en') ? '-en' : '-fr')); ?>.png" alt="">
                    </div>
                    <div class="row apply-txt">
                        <p><?php echo (($lang == 'ar') ? 'أماكن للطلاب الدوليين محدودة.<br>لا تؤجل تسجيلك !!!' : (($lang == 'en') ? 'Places for international students are limited.<br>Do not delay your registration !!!' : 'Les places pour les étudiants internationaux sont limitées.<br>Ne retardez pas votre inscription !!!')); ?></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-module quick-links">
        <div class="quick-links-widget">
            <div class="title-widget italic">
                <h3 class="uppercase"><?php echo (($lang == 'ar') ? 'روابط <strong>مهمة</strong>' : (($lang == 'en') ? '<strong>Important </strong> links' : 'Liens  <strong>importants</strong>')); ?></h3>
            </div>
            <div class="body-widget">
                <a href="/pages/ukraine/sup-ukraine?lang=<?php echo $lang; ?>">
                    <div class="summary-item">
                        <span class="summary-txt fas fa-info-circle capitalize"><?php echo (($lang == 'ar') ? 'التعليم في أوكرانيا' : (($lang == 'en') ? 'Education in Ukraine' : 'Education en Ukraine')); ?></span>
                    </div>
                </a>
                <a href="/pages/russia/sup-russia?lang=<?php echo $lang; ?>">
                    <div class="summary-item">
                        <span class="summary-txt fas fa-info-circle capitalize"><?php echo (($lang == 'ar') ? 'التعليم في روسيا' : (($lang == 'en') ? 'Education in Russia' : 'Education en Russie')); ?></span>
                    </div>
                </a>
                <a href="/pages/courses?lang=<?php echo $lang; ?>">
                    <div class="summary-item">
                        <span class="summary-txt fas fa-info-circle capitalize"><?php echo (($lang == 'ar') ? 'الدورات' : (($lang == 'en') ? 'Courses' : 'Cours')); ?></span>
                    </div>
                </a>
                <a href="/pages/ukraine/ukrainian-universities?lang=<?php echo $lang; ?>">
                    <div class="summary-item">
                        <span class="summary-txt fas fa-info-circle capitalize"><?php echo (($lang == 'ar') ? 'الجامعات الأوكرانية' : (($lang == 'en') ? 'Ukrainian Universities' : 'Universités Ukrainiennes')); ?></span>
                    </div>
                </a>
                <a href="/pages/russia/russian-universities?lang=<?php echo $lang; ?>">
                    <div class="summary-item">
                        <span class="summary-txt fas fa-info-circle capitalize"><?php echo (($lang == 'ar') ? 'الجامعات الروسية' : (($lang == 'en') ? 'Russian Universities' : 'Universités Russes')); ?></span>
                    </div>
                </a>
                <a href="/pages/visa?lang=<?php echo $lang; ?>">
                    <div class="summary-item">
                        <span class="summary-txt fas fa-info-circle capitalize"><?php echo (($lang == 'ar') ? 'كيف احصل على التأشيرة' : (($lang == 'en') ? 'How to get my Visa' : 'Comment obtenir mon Visa')); ?></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

</div> <!-- row -->