<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("رسوم الدراسة", "Study Fees","FRAIS D'ÉTUDES");
    title_page($title)
?>

<?php include $path.'/layouts/feature.php';
    $txt = "FRAIS D'ÉTUDES";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("FRAIS D'ÉTUDES", "رسوم الدراسة", "study fees");
    }
    feature_txt($txt, "study-fees");
?>

<div class="section study-fees">
    <div class="ukraine">
        <?php echo (($lang == 'ar') ? "
        <div class='sector'>
            <hr class='section-title-line'>
            <h2 class='section-title uppercase'>دورات في جامعات الدولة الأوكرانية</h2>
            <h2 class='section-title uppercase'>رسوم الدراسة في 2019/2020</h2>
            <div class='row'>
                <hr class='section-title-line'>
                <h2 class='section-title uppercase bold'>القطاعات الطبية</h2>
            </div>
            <ul class='list-group'>
                <li class='list-group-item'>الطب العام - 6 سنوات</li>
                <li class='list-group-item'>طب الأسنان - 5 سنوات</li>
                <li class='list-group-item'>صيدلية - 5 سنوات</li>
                <li class='list-group-item'>الإقامة - 2-5 سنوات</li>
                <li class='list-group-item'>دكتوراه - 3 سنوات</li>
            </ul>
            <p>مدة الدراسة (سنوات الجامعة) *</p>
            <p>الإقامة في غرفة 2-3 أشخاص.</p>
            <div class='row'>
                <div class='_container'>
                    <div class='tool-container'>
                        <div class='tool-header fa-minus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        الجامعة الوطنية للطب في أوديسا (مدينة أوديسا)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: block;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 2500 دولار</div>
                                                <div class='col-md-8'>تشمل الحزمة الكاملة: الدراسة والإقامة والتأمين الطبي ...
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>طب عام: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>3410 دولارًا - 4320 دولارًا</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>4370 دولار - 5800 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>طب الأسنان :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>3980 دولارًا - 5120 دولارًا</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>5120 دولارًا - 6030 دولارًا</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الصيدلية:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>3410 دولارًا - 3980 دولارًا</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>3980 دولار - 4550 دولارًا</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Residanate باللغة الروسية: 4000 دولار</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>الدكتوراه باللغة الروسية: 4000 دولار</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>رسوم الإقامة: 1200 دولار (في السنة) ؛</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>نفقات أخرى: 300 دولار في السنة (تأمين صحي 150 دولار ،
                                                    تمديد التأشيرة 100 دولار ، زيارة طبية 50 دولار)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        جامعة Ouchinsky الوطنية التربوية في جنوب أوكرانيا (مدينة أوديسا)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 2500 دولار</div>
                                                <div class='col-md-8'>تشمل الحزمة الكاملة: الدراسة والإقامة والتأمين الطبي ...
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الطب العام / طب الأسنان: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>3000 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>4000 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>رسوم الإقامة: 1200 دولار (في السنة) ؛</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>نفقات أخرى: 300 دولار في السنة (تأمين صحي 150 دولار ،
                                                    تمديد التأشيرة 100 دولار ، زيارة طبية 50 دولار)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        الجامعة الوطنية للطب Bogomolets of Kiev (مدينة كييف)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 2500 دولار</div>
                                                <div class='col-md-8'>تشمل الحزمة الكاملة: الدراسة والإقامة والتأمين الطبي ...
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>طب عام: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>4500 دولارًا</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>5500 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>طب الأسنان :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>5000 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>5700 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الصيدلية:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>4200 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>5000 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الإقامة / الدكتوراه:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>4500 دولارًا</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>5500 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>رسوم الإقامة: 1200 دولار (في السنة) ؛</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>نفقات أخرى: 300 دولار في السنة (تأمين صحي 150 دولار ،
                                                    تمديد التأشيرة 100 دولار ، زيارة طبية 50 دولار)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        جامعة دونيتسك الطبية الوطنية (كيروفوهراد-كروبنفنيتسكي)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 2500 دولار</div>
                                                <div class='col-md-8'>تشمل الحزمة الكاملة: الدراسة والإقامة والتأمين الطبي ...
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>طب عام: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>3800 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>4200 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>طب الأسنان :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>4000 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>4400 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الصيدلية:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>3300 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>3500 دولارًا</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الإقامة:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>3800 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>-</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row wrapper'>
                                            <div class='row'>
                                                <div class='col-md-4'>الدكتوراه:</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-4 col-45'>بالروسية :</div>
                                                <div class='col-md-8 col-55'>3800 دولار</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                <div class='col-md-8 col-55'>4200 دولار</div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>رسوم الإقامة: 1000 دولار (كل عام)</div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>نفقات أخرى: 300 دولار في السنة (تأمين صحي 150 دولار ، تمديد
                                                التأشيرة 100 دولار ، زيارة طبية 50 دولار)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header last-child fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        الجامعة الإنسانية الدولية (مدينة أوديسا)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 2500 دولار</div>
                                                <div class='col-md-8'>تشمل الحزمة الكاملة: الدراسة والإقامة والتأمين الطبي ...
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>طب عام: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>4500 دولارًا</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4 col-55'>طب الأسنان :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>3850 دولارًا</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>تشخيص الصيدلة / Lab.de:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>3500 دولارًا</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>رسوم الإقامة: 1200 دولار (في السنة) ؛</div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>نفقات أخرى: 300 دولار في السنة (تأمين صحي 150 دولار ، تمديد
                                                التأشيرة 100 دولار ، زيارة طبية 50 دولار)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class='sector'>
            <hr class='section-title-line'>
            <h2 class='section-title uppercase'>دورات في جامعات الدولة الأوكرانية</h2>
            <h2 class='section-title uppercase'>رسوم الدراسة في 2019/2020</h2>
            <div class='row'>
                <hr class='section-title-line'>
                <h2 class='section-title uppercase bold'>الأقسام الهندسية والفنية والاقتصادية والعلمية والإنسانية</h2>
            </div>
            <ul class='list-group'>
                <li class='list-group-item'>بكالوريوس - 4 سنوات</li>
                <li class='list-group-item'>ماجستير (بعد الترخيص) -2 سنوات</li>
                <li class='list-group-item'>دكتوراه - 3 سنوات</li>
            </ul>
            <br>
            <div class='row'>
                <div class='_container'>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        الجامعة الوطنية التقنية الأوكرانية المركزية (مدينة كروبيفنيتسكي - كيروفوهراد)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 2500 دولار</div>
                                                <div class='col-md-8'>تشمل الحزمة الكاملة: الدراسة والإقامة والتأمين الطبي ...
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الترخيص: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>1900 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>2500 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>ماجستير / دكتوراه</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>2400 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>2800 دولارًا</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>رسوم الإقامة: 1000 دولار (كل عام)</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>نفقات أخرى: 300 دولار في السنة (تأمين صحي 150 دولار ،
                                                    تمديد التأشيرة 100 دولار ، زيارة طبية 50 دولار)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        جامعة Ouchinsky الوطنية التربوية في جنوب أوكرانيا (مدينة أوديسا)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 2500 دولار</div>
                                                <div class='col-md-8'>تشمل الحزمة الكاملة: الدراسة والإقامة والتأمين الطبي ...
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الترخيص: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>2000 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>2500 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الماجستير: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>-</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الدكتوراه: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>-</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>رسوم الإقامة: 1200 دولار (في السنة) ؛</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>نفقات أخرى: 300 دولار في السنة (تأمين صحي 150 دولار ،
                                                    تمديد التأشيرة 100 دولار ، زيارة طبية 50 دولار)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        أكاديمية الدولة للهندسة المدنية والهندسة المعمارية في أوديسا
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 2500 دولار</div>
                                                <div class='col-md-8'>تشمل الحزمة الكاملة: الدراسة والإقامة والتأمين الطبي ...
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الترخيص: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>2000 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>2500 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>ماجستير / دكتوراه:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>2400 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>2800 دولارًا</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>رسوم الإقامة: 1200 دولار (في السنة) ؛</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>نفقات أخرى: 300 دولار في السنة (تأمين صحي 150 دولار ،
                                                    تمديد التأشيرة 100 دولار ، زيارة طبية 50 دولار)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        الأكاديمية الوطنية للاتصالات السلكية واللاسلكية OS Popov من أوديسا
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 2500 دولار</div>
                                                <div class='col-md-8'>تشمل الحزمة الكاملة: الدراسة والإقامة والتأمين الطبي ...
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الترخيص: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>2000 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>2500 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>ماجستير / دكتوراه:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>2400 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                    <div class='col-md-8 col-55'>2800 دولارًا</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>رسوم الإقامة: 1200 دولار (في السنة) ؛</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>نفقات أخرى: 300 دولار في السنة (تأمين صحي 150 دولار ،
                                                    تمديد التأشيرة 100 دولار ، زيارة طبية 50 دولار)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-container'>
                            <div class='tool-header fa-plus'>
                                <div class='row'>
                                    <div class='col-sm-12'>
                                        <h3 class='capitalize'>
                                            الأكاديمية الوطنية لتكنولوجيات الأغذية في أوديسا
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class='tool-category' style='display: none;'>
                                <div class='row'>
                                    <div class='col-md-12 col-sm-12'>
                                        <div class='tool-txt'>
                                            <div class='tool-descr'>
                                                <div class='row flex'>
                                                    <div class='col-md-4'>السنة التحضيرية: 2500 دولار</div>
                                                    <div class='col-md-8'>
                                                    تتضمن الحزمة الكاملة: الدراسة والإقامة والتأمين الطبي ...</div>
                                                    </div>
                                                <div class='row wrapper'>
                                                    <div class='row'>
                                                        <div class='col-md-4'>الترخيص: </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-4 col-45'>بالروسية :</div>
                                                        <div class='col-md-8 col-55'>1900 دولار</div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                        <div class='col-md-8 col-55'>2500 دولار</div>
                                                    </div>
                                                </div>
                                                <div class='row wrapper'>
                                                    <div class='row'>
                                                        <div class='col-md-4'>ماجستير / دكتوراه:</div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-4 col-45'>بالروسية :</div>
                                                        <div class='col-md-8 col-55'>2400 دولار</div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-4 col-45'>بالإنجليزية :</div>
                                                        <div class='col-md-8 col-55'>2800 دولارًا</div>
                                                    </div>
                                                </div>
                                                <div class='row wrapper'>
                                                    <div class='row'>
                                                        <div class='col-md-4'>الدكتوراه:</div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-4 col-45'>بالروسية :</div>
                                                        <div class='col-md-8 col-55'>2300 دولار</div>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-12'>رسوم الإقامة: 1200 دولار (في السنة) ؛</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-12'>نفقات أخرى: 300 دولار في السنة (تأمين صحي 150 دولار ،
                                                        تمديد التأشيرة 100 دولار ، زيارة طبية 50 دولار)</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='tool-container'>
                            <div class='tool-header fa-plus'>
                                <div class='row'>
                                    <div class='col-sm-12'>
                                        <h3 class='capitalize'>
                                            جامعة الفضاء الوطنية NE Zhukovsky \ 'خاركوف معهد الطيران التخصصات الهندسية
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class='tool-category' style='display: none;'>
                                <div class='row'>
                                    <div class='col-md-12 col-sm-12'>
                                        <div class='tool-txt'>
                                            <div class='tool-descr'>
                                                <div class='row flex'>
                                                    <div class='col-md-4'>السنة التحضيرية: 3300 دولار</div>
                                                    <div class='col-md-8'>تتضمن الحزمة الكاملة: الدراسة والإقامة والإقامة
                                                        والتأمين الطبي ...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='tool-container'>
                            <div class='tool-header last-child fa-plus'>
                                <div class='row'>
                                    <div class='col-sm-12'>
                                        <h3 class='capitalize'>
                                            أكاديمية خيرسون البحرية (مدينة خيرسون)
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class='tool-category' style='display: none;'>
                                <div class='row'>
                                    <div class='col-md-12 col-sm-12'>
                                        <div class='tool-txt'>
                                            <div class='tool-descr'>
                                                <div class='row flex'>
                                                    <div class='col-md-4'>السنة التحضيرية: 2500 دولار</div>
                                                    <div class='col-md-8'>تتضمن الحزمة الكاملة: الدراسة والإقامة والإقامة
                                                        والتأمين الطبي ...</div>
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
        </div>" : (($lang == 'en') ? "
        <div class='sector'>
            <hr class='section-title-line'>
            <h2 class='section-title uppercase'>COURSES IN UKRAINE STATE UNIVERSITIES</h2>
            <h2 class='section-title uppercase'>STUDY FEES IN 2019/2020</h2>
            <div class='row'>
                <hr class='section-title-line'>
                <h2 class='section-title uppercase bold'>Medical sectors</h2>
            </div>
            <ul class='list-group'>
                <li class='list-group-item'>General Medicine - 6 years</li>
                <li class='list-group-item'>Dental Medicine - 5 years</li>
                <li class='list-group-item'>Pharmacy - 5 years</li>
                <li class='list-group-item'>Residency - 2-5 years</li>
                <li class='list-group-item'>Doctorate - 3 years</li>
            </ul>
            <p>Duration of studies (university years) *</p>
            <p>Accommodation in a room 2-3 pers.</p>
            <div class='row'>
                <div class='_container'>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        National University of Medicine of Odessa (Odessa City)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>Preparatory year: $ 2500</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay
                                                    medical insurance ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>General medicine: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 3410 - $ 4320</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 4370 - $ 5800</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Dental Medicine :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 3980 - $ 5120</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 5120 - $ 6030</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Pharmacy:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 3410 - $ 3980</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 3980 - $ 4550</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Residanate in Russian: $ 4000</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Doctorate in Russian: $ 4000</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Accommodation fee: $ 1200 (per year);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Other expenses: $ 300 per year (Health insurance $ 150,
                                                    visa extension $ 100, medical visit $ 50)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        KD Ouchinsky National Pedagogical University of Southern Ukraine (Odessa City)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>Preparatory year: $ 2500</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay
                                                    medical insurance ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>General / Dental Medicine: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 3000</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 4000</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Accommodation fee: $ 1200 (per year);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Other expenses: $ 300 per year (Health insurance $ 150,
                                                    visa extension $ 100, medical visit $ 50)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        National University of Medicine Bogomolets of Kiev (Kyiv City)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>Preparatory year: $ 2500</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay
                                                    medical insurance ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>General medicine: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 4500</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 5500</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Dental Medicine :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 5000</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 5700</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Pharmacy:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 4200</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 5000</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Residency / Doctorate:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 4500</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 5500</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Accommodation fee: $ 1200 (per year);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Other expenses: $ 300 per year (Health insurance $ 150,
                                                    visa extension $ 100, medical visit $ 50)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Donetsk National Medical University (Kirovohrad-Kropyvnytskyi City)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>Preparatory year: $ 2500</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay
                                                    medical insurance ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>General medicine: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 3800</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 4200</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Dental Medicine :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 4000</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 4400</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Pharmacy:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 3300</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 3500</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Residency:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 3800</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>-</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row wrapper'>
                                            <div class='row'>
                                                <div class='col-md-4'>Doctorate:</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-4 col-45'>In Russian :</div>
                                                <div class='col-md-8 col-55'>$ 3800</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-4 col-45'>In English :</div>
                                                <div class='col-md-8 col-55'>$ 4200</div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>Accommodation fee: $ 1,000 (per year);</div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>Other expenses: $ 300 per year (Health insurance $ 150, visa
                                                extension $ 100, medical visit $ 50)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header last-child fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        International Humanitarian University (Odessa City)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>Preparatory year: $ 2500</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay
                                                    medical insurance ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>General medicine: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 4500</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4 col-55'>Dental Medicine :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 3850</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Pharmacy / Lab.de diagn:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 3500</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>Accommodation fee: $ 1200 (per year);</div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>Other expenses: $ 300 per year (Health insurance $ 150, visa
                                                extension $ 100, medical visit $ 50)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class='sector'>
            <hr class='section-title-line'>
            <h2 class='section-title uppercase'>COURSES IN UKRAINE STATE UNIVERSITIES</h2>
            <h2 class='section-title uppercase'>STUDY FEES IN 2019/2020</h2>
            <div class='row'>
                <hr class='section-title-line'>
                <h2 class='section-title uppercase bold'>Engineering and Technical, Economic, Scientific and Human Sciences Divisions
                </h2>
            </div>
            <ul class='list-group'>
                <li class='list-group-item'>Bachelor- 4 years</li>
                <li class='list-group-item'>Master (after License) -2 years</li>
                <li class='list-group-item'>Doctorate-3 years</li>
            </ul>
            <br>
            <div class='row'>
                <div class='_container'>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Ukrainian National Technical Central University (Kropyvnytskyi City - Kirovohrad)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>Preparatory year: $ 2500</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay
                                                    medical insurance ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 1900</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 2500</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master / Doctorate</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 2400</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 2800</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Accommodation fee: $ 1,000 (per year);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Other expenses: $ 300 per year (Health insurance $ 150,
                                                    visa extension $ 100, medical visit $ 50)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        KD Ouchinsky National Pedagogical University of Southern Ukraine (Odessa City)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>Preparatory year: $ 2500</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay
                                                    medical insurance ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 2000</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 2500</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>-</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>doctorate: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>-</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Accommodation fee: $ 1200 (per year);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Other expenses: $ 300 per year (Health insurance $ 150,
                                                    visa extension $ 100, medical visit $ 50)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        State Academy of Civil Engineering and Architecture of Odessa
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>Preparatory year: $ 2500</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay
                                                    medical insurance ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 2000</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 2500</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master / Doctorate:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 2400</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 2800</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Accommodation fee: $ 1200 (per year);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Other expenses: $ 300 per year (Health insurance $ 150,
                                                    visa extension $ 100, medical visit $ 50)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        National Academy of Telecommunications OS Popov of Odessa
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>Preparatory year: $ 2500</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay
                                                    medical insurance ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 2000</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 2500</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master / Doctorate:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 2400</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English :</div>
                                                    <div class='col-md-8 col-55'>$ 2800</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Accommodation fee: $ 1200 (per year);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Other expenses: $ 300 per year (Health insurance $ 150,
                                                    visa extension $ 100, medical visit $ 50)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-container'>
                            <div class='tool-header fa-plus'>
                                <div class='row'>
                                    <div class='col-sm-12'>
                                        <h3 class='capitalize'>
                                            National Academy of Food Technologies of Odessa
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class='tool-category' style='display: none;'>
                                <div class='row'>
                                    <div class='col-md-12 col-sm-12'>
                                        <div class='tool-txt'>
                                            <div class='tool-descr'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Preparatory year: $ 2500</div>
                                                    <div class='col-md-8'>The complete pack includes: study, accommodation,
                                                        stay, medical insurance ...</div>
                                                </div>
                                                <div class='row wrapper'>
                                                    <div class='row'>
                                                        <div class='col-md-4'>Licence: </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-4 col-45'>In Russian :</div>
                                                        <div class='col-md-8 col-55'>$ 1900</div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-4 col-45'>In English :</div>
                                                        <div class='col-md-8 col-55'>$ 2500</div>
                                                    </div>
                                                </div>
                                                <div class='row wrapper'>
                                                    <div class='row'>
                                                        <div class='col-md-4'>Master / Doctorate:</div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-4 col-45'>In Russian :</div>
                                                        <div class='col-md-8 col-55'>$ 2400</div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-4 col-45'>In English :</div>
                                                        <div class='col-md-8 col-55'>$ 2800</div>
                                                    </div>
                                                </div>
                                                <div class='row wrapper'>
                                                    <div class='row'>
                                                        <div class='col-md-4'>Doctorate:</div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-4 col-45'>In Russian :</div>
                                                        <div class='col-md-8 col-55'>$ 2300</div>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-12'>Accommodation fee: $ 1200 (per year);</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-12'>Other expenses: $ 300 per year (Health insurance $
                                                        150, visa extension $ 100, medical visit $ 50)</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='tool-container'>
                            <div class='tool-header fa-plus'>
                                <div class='row'>
                                    <div class='col-sm-12'>
                                        <h3 class='capitalize'>
                                            National Aerospace University NE Zhukovsky \ 'Kharkiv Aviation Institute \'
                                            Engineering Specialties
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class='tool-category' style='display: none;'>
                                <div class='row'>
                                    <div class='col-md-12 col-sm-12'>
                                        <div class='tool-txt'>
                                            <div class='tool-descr'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Preparatory year: $ 3300</div>
                                                    <div class='col-md-8'>The complete pack includes: study, accommodation,
                                                        stay, medical insurance ...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='tool-container'>
                            <div class='tool-header last-child fa-plus'>
                                <div class='row'>
                                    <div class='col-sm-12'>
                                        <h3 class='capitalize'>
                                            Kherson State Maritime Academy (Kherson City)
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class='tool-category' style='display: none;'>
                                <div class='row'>
                                    <div class='col-md-12 col-sm-12'>
                                        <div class='tool-txt'>
                                            <div class='tool-descr'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Preparatory year: $ 2500</div>
                                                    <div class='col-md-8'>The complete pack includes: study, accommodation,
                                                        stay, medical insurance ...</div>
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
        </div>" : "
        <div class='sector'>
            <hr class='section-title-line'>
            <h2 class='section-title uppercase'>LES COURS DANS LES UNIVERSITÉS D'ÉTAT D’UKRAINE</h2>
            <h2 class='section-title uppercase'>FRAIS D’ETUDE EN 2019/2020</h2>
            <div class='row'>
                <hr class='section-title-line'>
                <h2 class='section-title uppercase bold'>Filières Médicales</h2>
            </div>
            <ul class='list-group'>
                <li class='list-group-item'>Médecine Générale - 6 ans</li>
                <li class='list-group-item'>Médecine Dentaire - 5 ans</li>
                <li class='list-group-item'>Pharmacie - 5 ans</li>
                <li class='list-group-item'>Résidanat – 2-5 ans</li>
                <li class='list-group-item'>Doctorat - 3 ans</li>
            </ul>
            <p>La durée d'études (années universitaires)*</p>
            <p>Hébergement dans une chambre á 2-3 pers.</p>
            <div class='row'>
                <div class='_container'>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Université Nationale de Médecine d’Odessa (ville d’Odessa)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>L’année préparatoire: 2500 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement, séjour
                                                    assurance médicale…</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Médecine générale: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>3410 $ - 4320 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>4370 $ - 5800 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Médecine dentaire :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>3980$ - 5120 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>5120 $ - 6030 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Pharmacie:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>3410 $ - 3980 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>3980 $ - .4550 $</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Résidanat en russe: 4000 $</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Doctorat en russe: 4000 $</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Frais d’hébergement: 1200 $ (par ans);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Autres dépenses: 300 $ par ans (Assurance maladie
                                                    150 $; Extension de visa 100 $; Visite médicale 50 $)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Université Nationale Pédagogique K.D. Ouchinsky du Sud de l’Ukraine (ville d’Odessa)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>L’année préparatoire: 2500 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement, séjour
                                                    assurance médicale…</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Médecine générale/ Dentaire: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>3000 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>4000 $</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Frais d’hébergement: 1200 $ (par ans);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Autres dépenses: 300 $ par ans (Assurance maladie
                                                    150 $; Extension de visa 100 $; Visite médicale 50 $)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Université Nationale de Médecine Bogomolets  de Kiev (ville de Kiev)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>L’année préparatoire: 2500 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement, séjour
                                                    assurance médicale…</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Médecine générale: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>4500 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>5500 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Médecine dentaire :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>5000 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>5700 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Pharmacie:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>4200 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>5000 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Résidanat/Doctorat :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>4500 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>5500 $</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Frais d’hébergement: 1200 $ (par ans);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Autres dépenses: 300 $ par ans (Assurance maladie
                                                    150 $; Extension de visa 100 $; Visite médicale 50 $)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Université Nationale de Médecine de Donetsk (ville de Kirovohrad-Kropyvnytskyi)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>L’année préparatoire: 2500 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement, séjour
                                                    assurance médicale…</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Médecine générale: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>3800 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>4200 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Médecine dentaire :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>4000 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>4400 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Pharmacie:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>3300 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>3500 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Résidanat :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>3800 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>-</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row wrapper'>
                                            <div class='row'>
                                                <div class='col-md-4'>Doctorat :</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-4 col-45'>En russe :</div>
                                                <div class='col-md-8 col-55'>3800 $</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-4 col-45'>En anglais :</div>
                                                <div class='col-md-8 col-55'>4200 $</div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>Frais d’hébergement: 1000 $ (par ans);</div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>Autres dépenses: 300 $ par ans (Assurance maladie 150
                                                $; Extension de visa 100 $; Visite médicale 50 $)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header last-child fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Université Internationale Humanitaire (ville d’Odessa)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>L’année préparatoire: 2500 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement, séjour
                                                    assurance médicale…</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Médecine générale: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>4500 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4 col-55'>Médecine dentaire :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>3850 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Pharmacie/Lab.de diagn :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>3500 $</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>Frais d’hébergement: 1200 $ (par ans);</div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>Autres dépenses: 300 $ par ans (Assurance maladie 150
                                                $; Extension de visa 100 $; Visite médicale 50 $)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class='sector'>
            <hr class='section-title-line'>
            <h2 class='section-title uppercase'>LES COURS DANS LES UNIVERSITÉS D'ÉTAT D’UKRAINE</h2>
            <h2 class='section-title uppercase'>FRAIS D’ETUDE EN 2019/2020</h2>
            <div class='row'>
                <hr class='section-title-line'>
                <h2 class='section-title uppercase bold'>Filières d’Ingénierie et Techniques, Economiques, Scientifiques et Sciences Humaines</h2>
            </div>
            <ul class='list-group'>
                <li class='list-group-item'>Licence- 4 ans</li>
                <li class='list-group-item'>Master (après Licence)-2 ans</li>
                <li class='list-group-item'>Doctorat-3 ans</li>
            </ul>
            <br>
            <div class='row'>
                <div class='_container'>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Université Nationale Centrale Technique Ukrainienne (ville de Kropyvnytskyi – Kirovohrad)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>L’année préparatoire: 2500 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement, séjour
                                                    assurance médicale…</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>1900 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>2500 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master/Doctorat</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>2400 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>2800 $</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Frais d’hébergement: 1000 $ (par ans);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Autres dépenses: 300 $ par ans (Assurance maladie
                                                    150 $; Extension de visa 100 $; Visite médicale 50 $)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Université Nationale Pédagogique K.D. Ouchinsky du Sud de l’Ukraine (ville d’Odessa)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>L’année préparatoire: 2500 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement, séjour
                                                    assurance médicale…</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>2000 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>2500 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>-</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Doctorat: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>-</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Frais d’hébergement: 1200 $ (par ans);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Autres dépenses: 300 $ par ans (Assurance maladie
                                                    150 $; Extension de visa 100 $; Visite médicale 50 $)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Académie d'État de Génie Civil et d’Architecture d’Odessa
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>L’année préparatoire: 2500 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement, séjour
                                                    assurance médicale…</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>2000 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>2500 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master/Doctorat :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>2400 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>2800 $</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Frais d’hébergement: 1200 $ (par ans);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Autres dépenses: 300 $ par ans (Assurance maladie
                                                    150
                                                    $;
                                                    Extension de visa 100 $; Visite médicale 50 $)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Académie Nationale des Télécommunication O.S. Popov d’Odessa
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>L’année préparatoire: 2500 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement, séjour
                                                    assurance médicale…</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>2000 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>2500 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master/Doctorat :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>2400 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais :</div>
                                                    <div class='col-md-8 col-55'>2800 $</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Frais d’hébergement: 1200 $ (par ans);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Autres dépenses: 300 $ par ans (Assurance maladie
                                                    150 $; Extension de visa 100 $; Visite médicale 50 $)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-container'>
                            <div class='tool-header fa-plus'>
                                <div class='row'>
                                    <div class='col-sm-12'>
                                        <h3 class='capitalize'>
                                            Académie Nationale des Technologies Alimentaires d’Odessa
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class='tool-category'>
                                <div class='row'>
                                    <div class='col-md-12 col-sm-12'>
                                        <div class='tool-txt'>
                                            <div class='tool-descr'>
                                                <div class='row'>
                                                    <div class='col-md-4'>L’année préparatoire: 2500 $</div>
                                                    <div class='col-md-8'>Le pack complet inclut: étude, hébergement,
                                                        séjour, assurance médicale…</div>
                                                </div>
                                                <div class='row wrapper'>
                                                    <div class='row'>
                                                        <div class='col-md-4'>Licence: </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-4 col-45'>En russe :</div>
                                                        <div class='col-md-8 col-55'>1900 $</div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-4 col-45'>En anglais :</div>
                                                        <div class='col-md-8 col-55'>2500 $</div>
                                                    </div>
                                                </div>
                                                <div class='row wrapper'>
                                                    <div class='row'>
                                                        <div class='col-md-4'>Master/Doctorat :</div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-4 col-45'>En russe :</div>
                                                        <div class='col-md-8 col-55'>2400 $</div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-4 col-45'>En anglais :</div>
                                                        <div class='col-md-8 col-55'>2800 $</div>
                                                    </div>
                                                </div>
                                                <div class='row wrapper'>
                                                    <div class='row'>
                                                        <div class='col-md-4'>Doctorat :</div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-4 col-45'>En russe :</div>
                                                        <div class='col-md-8 col-55'>2300 $</div>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-12'>Frais d’hébergement: 1200 $ (par ans);</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-12'>Autres dépenses: 300 $ par ans (Assurance
                                                        maladie
                                                        150 $;
                                                        Extension de visa 100 $; Visite médicale 50 $)</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='tool-container'>
                            <div class='tool-header fa-plus'>
                                <div class='row'>
                                    <div class='col-sm-12'>
                                        <h3 class='capitalize'>
                                            Université Nationale Aérospatiale N.E. Joukovski \"Institut d'aviation de Kharkiv\" Spécialités d'ingénierie
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class='tool-category'>
                                <div class='row'>
                                    <div class='col-md-12 col-sm-12'>
                                        <div class='tool-txt'>
                                            <div class='tool-descr'>
                                                <div class='row'>
                                                    <div class='col-md-4'>L’année préparatoire: 3300 $</div>
                                                    <div class='col-md-8'>Le pack complet inclut: étude, hébergement,
                                                        séjour, assurance médicale…</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='tool-container'>
                            <div class='tool-header last-child fa-plus'>
                                <div class='row'>
                                    <div class='col-sm-12'>
                                        <h3 class='capitalize'>
                                            Académie Maritime d'État de Kherson (ville de Kherson)
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class='tool-category'>
                                <div class='row'>
                                    <div class='col-md-12 col-sm-12'>
                                        <div class='tool-txt'>
                                            <div class='tool-descr'>
                                                <div class='row'>
                                                    <div class='col-md-4'>L’année préparatoire: 2500 $</div>
                                                    <div class='col-md-8'>Le pack complet inclut: étude, hébergement, séjour, assurance médicale…</div>
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
        </div>")); ?>
    </div>
    <hr>
    <div class="russia">
        <?php echo (($lang == 'ar') ? "
        <div class='sector'>
            <hr class='section-title-line'>
            <h2 class='section-title uppercase'>دورات في جامعة ولاية روسيا</h2>
            <h2 class='section-title uppercase'>رسوم الدراسة في 2019/2020</h2>
            <div class='row'>
                <hr class='section-title-line'>
                <h2 class='section-title uppercase  bold'>القطاعات الطبية</h2>
            </div>
            <ul class='list-group'>
                <li class='list-group-item'>الطب العام - 6 سنوات</li>
                <li class='list-group-item'>طب الأسنان - 5 سنوات</li>
                <li class='list-group-item'>صيدلية - 5 سنوات</li>
                <li class='list-group-item'>الإقامة - 2-5 سنوات</li>
                <li class='list-group-item'>دكتوراه - 3 سنوات</li>
            </ul>
            <p>مدة الدراسة (سنوات الجامعة) *</p>
            <div class='row'>
                <div class='_container'>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        جامعة البحوث الوطنية في روسيا سميت بعد NIPirogov (مدينة موسكو)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 4800 دولار</div>
                                                <div class='col-md-8'>تشمل الحزمة الكاملة: الدراسة والإقامة والتأمين الطبي ...
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الطب العام / طب الأسنان:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية: 1-5 / الصف السادس:</div>
                                                    <div class='col-md-8 col-55'>7700 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الأولى من السنة الإنجليزية:</div>
                                                    <div class='col-md-8 col-55'>8700 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في اللغة الإنجليزية 2-6:</div>
                                                    <div class='col-md-8 col-55'>7700 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الصيدلية:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الروسية 1-5:</div>
                                                    <div class='col-md-8 col-55'>5600 دولارًا</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>الإقامة / الدكتوراه: 7700 دولار</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>رسوم الإقامة: 1200 دولار (في السنة) ؛</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>مصاريف أخرى: 1st year 500 $ ؛ 2-5 / السنة السادسة 300
                                                    دولار في السنة (التأمين الصحي 150 دولارًا ، تمديد التأشيرة 100 دولار ، زيارة
                                                    طبية 50 دولارًا)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        جامعة ولاية الشيشان (مدينة غروزني)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 2800 دولار</div>
                                                <div class='col-md-8'>تتضمن الحزمة الكاملة: الدراسة والإقامة والإقامة والتأمين
                                                    الطبي ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الطب العام / طب الأسنان:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية: من سنة إلى 6 سنوات:</div>
                                                    <div class='col-md-8 col-55'>3000 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الأولى من السنة الإنجليزية:</div>
                                                    <div class='col-md-8 col-55'>5000 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في اللغة الإنجليزية 2-6:</div>
                                                    <div class='col-md-8 col-55'>4000 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>الإقامة / الدكتوراه 1-3 سنوات: 4000 دولار</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>تكاليف الإقامة: 800 دولار (في السنة) ؛</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>مصاريف أخرى: 1st year 500 $ ؛ 2-5 / السنة السادسة 300
                                                    دولار في السنة (التأمين الصحي 150 دولارًا ، تمديد التأشيرة 100 دولار ، زيارة
                                                    طبية 50 دولارًا)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header last-child fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        جامعة داغستان الطبية الحكومية (مدينة ماخاتشكالا)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 3900 دولار</div>
                                                <div class='col-md-8'>تتضمن الحزمة الكاملة: الدراسة والإقامة والإقامة والتأمين
                                                    الطبي ...</div>
                                            </div>                                            
                                            <div class='row'>
                                                <div class='col-md-12'>السنة التحضيرية: 3000 دولار</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الطب العام / طب الأسنان / صيدلة / ممرضة:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية: من سنة إلى 6 سنوات:</div>
                                                    <div class='col-md-8 col-55'>3000 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الأولى من السنة الإنجليزية:</div>
                                                    <div class='col-md-8 col-55'>5000 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في اللغة الإنجليزية 2-5 / 6:</div>
                                                    <div class='col-md-8 col-55'>4000 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>الإقامة / الدكتوراه 1-3 سنوات: 4000 دولار</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>رسوم الإقامة: 400 دولار (في السنة) ؛</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>مصاريف أخرى: 1st year 500 $ ؛ 2-5 / السنة السادسة 300
                                                    دولار في السنة (التأمين الصحي 150 دولارًا ، تمديد التأشيرة 100 دولار ، زيارة
                                                    طبية 50 دولارًا)</div>
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
        <hr>
        <div class='sector'>
            <hr class='section-title-line'>
            <h2 class='section-title uppercase'>دورات في جامعة ولاية روسيا</h2>
            <h2 class='section-title uppercase'>رسوم الدراسة في 2019/2020</h2>
            <div class='row'>
                <hr class='section-title-line'>
                <h2 class='section-title uppercase bold'>الأقسام الهندسية والفنية والاقتصادية والعلمية والإنسانية</h2>
            </div>
            <ul class='list-group'>
                <li class='list-group-item'>بكالوريوس - 4 سنوات</li>
                <li class='list-group-item'>ماجستير (بعد الترخيص) -2 سنوات</li>
                <li class='list-group-item'>مهندس دولة -5 سنوات</li>
                <li class='list-group-item'>دكتوراه - 3 سنوات</li>
            </ul>
            <br>
            <div class='row'>
                <div class='_container'>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        معهد الفيزياء والتكنولوجيا في موسكو (موسكو)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 4400 دولار</div>
                                                <div class='col-md-8'>تشمل الحزمة الكاملة: الدراسة والإقامة والتأمين الطبي ...
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الترخيص: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الروسية 1-4:</div>
                                                    <div class='col-md-8 col-55'>4500 دولارًا</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في اللغة الإنجليزية 1-4 سنة:</div>
                                                    <div class='col-md-8 col-55'>8000 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>سيد</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الروسية 1-2:</div>
                                                    <div class='col-md-8 col-55'>4500 دولارًا</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في اللغة الإنجليزية من سنة إلى سنتين:</div>
                                                    <div class='col-md-8 col-55'>8000 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>درجة الدكتوراه في السنة الأولى: 5000 دولار</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>رسوم الإقامة: 1000 دولار (كل عام)</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>مصاريف أخرى: 1st year 500 $ ؛ 2-4 سنة 300 دولار في السنة
                                                    (التأمين الصحي 150 دولارًا ، تمديد التأشيرة 100 دولار ، زيارة طبية 50
                                                    دولارًا)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        جامعة إيزهيفسك التقنية الحكومية في MT Kalashnikov (Izhevsk)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 4800 دولار</div>
                                                <div class='col-md-8'>تشمل الحزمة الكاملة: الدراسة والإقامة والتأمين الطبي ...
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الترخيص: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية :</div>
                                                    <div class='col-md-8 col-55'>3500 دولارًا</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الأولى من السنة الإنجليزية:</div>
                                                    <div class='col-md-8 col-55'>5200 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في اللغة الإنجليزية 2-4 سنة:</div>
                                                    <div class='col-md-8 col-55'>4200 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الماجستير: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الروسية 1-2:</div>
                                                    <div class='col-md-8 col-55'>3700 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الأولى من السنة الإنجليزية:</div>
                                                    <div class='col-md-8 col-55'>5200 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة 2 الروسية:</div>
                                                    <div class='col-md-8 col-55'>4200 دولار</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-4'>الدكتوراه: السنة الأولى: 3700 دولار</div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>رسوم الإقامة: 1000 دولار (كل عام)</div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>مصاريف أخرى: 1st year 500 $ ؛ 2-4 سنة 300 دولار في السنة
                                                (التأمين الصحي 150 دولارًا ، تمديد التأشيرة 100 دولار ، زيارة طبية 50 دولارًا)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        جامعة البوليتكنيك في تومسك (تومسك)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 4500 دولار</div>
                                                <div class='col-md-8'>تتضمن الحزمة الكاملة: الدراسة والإقامة والإقامة والتأمين
                                                    الطبي ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الترخيص: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الروسية 1-4:</div>
                                                    <div class='col-md-8 col-55'>4000 دولار - 4500 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>سيد</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الروسية 1-2:</div>
                                                    <div class='col-md-8 col-55'>4500 دولارًا</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الأولى من السنة الإنجليزية:</div>
                                                    <div class='col-md-8 col-55'>5500 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الثانية للغة الإنجليزية:</div>
                                                    <div class='col-md-8 col-55'>4500 دولارًا</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>درجة الدكتوراه في السنة الأولى: 4500 دولار</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>رسوم الإقامة: 500 دولار (في السنة) ؛</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>مصاريف أخرى: 1st year 500 $ ؛ 2-4 سنة 300 دولار في السنة
                                                    (التأمين الصحي 150 دولارًا ، تمديد التأشيرة 100 دولار ، زيارة طبية 50
                                                    دولارًا)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        جامعة ولاية الشيشان (مدينة غروزني)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 2800 دولار</div>
                                                <div class='col-md-8'>تتضمن الحزمة الكاملة: الدراسة والإقامة والإقامة والتأمين
                                                    الطبي ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الترخيص: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الروسية 1-4:</div>
                                                    <div class='col-md-8 col-55'>3500 دولارًا</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الأولى من السنة الإنجليزية:</div>
                                                    <div class='col-md-8 col-55'>4300 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في اللغة الإنجليزية 2-4 سنة:</div>
                                                    <div class='col-md-8 col-55'>3300 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>سيد</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الروسية 1-2:</div>
                                                    <div class='col-md-8 col-55'>3500 دولارًا</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الأولى من السنة الإنجليزية:</div>
                                                    <div class='col-md-8 col-55'>4300 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الثانية للغة الإنجليزية:</div>
                                                    <div class='col-md-8 col-55'>3300 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>درجة الدكتوراه في السنة الأولى: 3500 دولار</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>تكاليف الإقامة: 800 دولار (في السنة) ؛</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>مصاريف أخرى: 1st year 500 $ ؛ 2-4 سنة 300 دولار في السنة
                                                    (التأمين الصحي 150 دولارًا ، تمديد التأشيرة 100 دولار ، زيارة طبية 50
                                                    دولارًا)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        جامعة التقنية التقنية في Rybinsk Aviation (مدينة Rybinsk)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 4300 دولار</div>
                                                <div class='col-md-8'>تتضمن الحزمة الكاملة: الدراسة والإقامة والإقامة والتأمين
                                                    الطبي ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>الترخيص: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>بالروسية</div>
                                                    <div class='col-md-8 col-55'>3500 دولارًا</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الأولى من السنة الإنجليزية:</div>
                                                    <div class='col-md-8 col-55'>5000 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في اللغة الإنجليزية 2-4 سنة:</div>
                                                    <div class='col-md-8 col-55'>4000 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>سيد</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الروسية 1-2:</div>
                                                    <div class='col-md-8 col-55'>4000 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الأولى من السنة الإنجليزية:</div>
                                                    <div class='col-md-8 col-55'>5000 دولار</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>في السنة الثانية للغة الإنجليزية:</div>
                                                    <div class='col-md-8 col-55'>4000 دولار</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>درجة الدكتوراه في السنة الأولى: 4000 دولار</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>رسوم الإقامة: 1000 دولار (كل عام)</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>مصاريف أخرى: 1st year 500 $ ؛ 2-4 سنة 300 دولار في السنة
                                                    (التأمين الصحي 150 دولارًا ، تمديد التأشيرة 100 دولار ، زيارة طبية 50
                                                    دولارًا)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header last-child fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        جامعة Mordovia NP Ogariov State (مدينة سارانسك)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row flex'>
                                                <div class='col-md-4'>السنة التحضيرية: 3500 دولار</div>
                                                <div class='col-md-8'>تتضمن الحزمة الكاملة: الدراسة والإقامة والإقامة والتأمين الطبي ...</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>السنة التحضيرية: 2500 دولار</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>رسوم الإقامة: 500 دولار (في السنة) ؛</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>مصاريف أخرى: 1st year 500 $ ؛ 2-4 سنة 300 دولار في السنة
                                                    (التأمين الصحي 150 دولارًا ، تمديد التأشيرة 100 دولار ، زيارة طبية 50
                                                    دولارًا)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>" : (($lang == 'en') ? "
        <div class='sector'>
            <hr class='section-title-line'>
            <h2 class='section-title uppercase'>COURSES IN STATE UNIVERSITY OF RUSSIA</h2>
            <h2 class='section-title uppercase'>STUDY FEES IN 2019/2020</h2>
            <div class='row'>
                <hr class='section-title-line'>
                <h2 class='section-title uppercase bold'>Medical sectors</h2>
            </div>
            <ul class='list-group'>
                <li class='list-group-item'>General Medicine - 6 years</li>
                <li class='list-group-item'>Dental Medicine - 5 years</li>
                <li class='list-group-item'>Pharmacy - 5 years</li>
                <li class='list-group-item'>Residency - 2-5 years</li>
                <li class='list-group-item'>Doctorate - 3 years</li>
            </ul>
            <p>Duration of studies (university years) *</p>
            <div class='row'>
                <div class='_container'>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Medical Research National University of Russia named after NIPirogov (Moscow City)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-12'>Preparatory year: $ 4800</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay
                                                    medical insurance ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>General / Dental Medicine:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian: 1-5 / 6th grade:</div>
                                                    <div class='col-md-8 col-55'>$ 7700</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 1st year:</div>
                                                    <div class='col-md-8 col-55'>$ 8700</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 2-6th:</div>
                                                    <div class='col-md-8 col-55'>$ 7700</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Pharmacy:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian 1-5th year:</div>
                                                    <div class='col-md-8 col-55'>$ 5600</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Residency / Doctorate: $ 7700</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Accommodation fee: $ 1200 (per year);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Other expenses: 1st year $ 500; 2-5 / 6th year $ 300 per
                                                    year (Health insurance $ 150, visa extension $ 100, medical visit $ 50)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Chechen State University (city of Grozny)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-12'>Preparatory year: $ 2800</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay,
                                                    medical insurance ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>General / Dental Medicine:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian: 1-6th year:</div>
                                                    <div class='col-md-8 col-55'>$ 3000</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 1st year:</div>
                                                    <div class='col-md-8 col-55'>$ 5000</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 2-6th:</div>
                                                    <div class='col-md-8 col-55'>$ 4000</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Residency / Ph.D. 1-3 year: $ 4000</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Accommodation costs: $ 800 (per year);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Other expenses: 1st year $ 500; 2-5 / 6th year $ 300 per
                                                    year (Health insurance $ 150, visa extension $ 100, medical visit $ 50)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header last-child fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Dagestan State Medical University (Makhachkala City)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>Preparatory year: $ 3900</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay, medical insurance ...</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Preparatory year: $ 3000</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>General Medicine / Dental / Pharmacy / Nurse:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian: 1-6th year:</div>
                                                    <div class='col-md-8 col-55'>$ 3000</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 1st year:</div>
                                                    <div class='col-md-8 col-55'>$ 5000</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 2-5 / 6th:</div>
                                                    <div class='col-md-8 col-55'>$ 4000</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Residency / Ph.D. 1-3 year: $ 4000</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Accommodation fee: $ 400 (per year);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Other expenses: 1st year $ 500; 2-5 / 6th year $ 300 per
                                                    year (Health insurance $ 150, visa extension $ 100, medical visit $ 50)
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
        <hr>
        <div class='sector'>
            <hr class='section-title-line'>
            <h2 class='section-title uppercase'>COURSES IN STATE UNIVERSITY OF RUSSIA</h2>
            <h2 class='section-title uppercase'>STUDY FEES IN 2019/2020</h2>
            <div class='row'>
                <hr class='section-title-line'>
                <h2 class='section-title uppercase bold'>Engineering and Technical, Economic, Scientific and Human Sciences Divisions
                </h2>
            </div>
            <ul class='list-group'>
                <li class='list-group-item'>Bachelor- 4 years</li>
                <li class='list-group-item'>Master (after License) -2 years</li>
                <li class='list-group-item'>State Engineer-5 years</li>
                <li class='list-group-item'>Doctorate-3 years</li>
            </ul>
            <br>
            <div class='row'>
                <div class='_container'>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Institute of Physics and Technology of Moscow (Moscow)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>Preparatory year: $ 4400</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay
                                                    medical insurance ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian 1-4th year:</div>
                                                    <div class='col-md-8 col-55'>$ 4500</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 1-4th year:</div>
                                                    <div class='col-md-8 col-55'>$ 8000</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian 1-2th year:</div>
                                                    <div class='col-md-8 col-55'>$ 4500</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 1-2th year:</div>
                                                    <div class='col-md-8 col-55'>$ 8000</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>1st year doctorate: $ 5000</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Accommodation fee: $ 1,000 (per year);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Other expenses: 1st year $ 500; 2-4th year $ 300 per year
                                                    (Health insurance $ 150, Visa extension $ 100, Medical visit $ 50)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Izhevsk Technical State University of MT Kalashnikov (Izhevsk)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>Preparatory year: $ 4800</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay
                                                    medical insurance ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian :</div>
                                                    <div class='col-md-8 col-55'>$ 3500</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 1st year:</div>
                                                    <div class='col-md-8 col-55'>$ 5200</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 2-4th year:</div>
                                                    <div class='col-md-8 col-55'>$ 4200</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian 1-2th year:</div>
                                                    <div class='col-md-8 col-55'>$ 3700</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 1st year:</div>
                                                    <div class='col-md-8 col-55'>$ 5200</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian 2nd year:</div>
                                                    <div class='col-md-8 col-55'>$ 4200</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-4'>Doctorate: 1st year: $ 3700</div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>Accommodation fee: $ 1,000 (per year);</div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>Other expenses: 1st year $ 500; 2-4th year $ 300 per year
                                                (Health insurance $ 150, Visa extension $ 100, Medical visit $ 50)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-minus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Polytechnic University of Tomsk (Tomsk)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: block;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>Preparatory year: $ 4500</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay,
                                                    medical insurance ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian 1-4th year:</div>
                                                    <div class='col-md-8 col-55'>$ 4000-4500</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian 1-2th year:</div>
                                                    <div class='col-md-8 col-55'>$ 4500</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 1st year:</div>
                                                    <div class='col-md-8 col-55'>$ 5500</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 2nd year:</div>
                                                    <div class='col-md-8 col-55'>$ 4500</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>1st year doctorate: $ 4500</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Accommodation fee: $ 500 (per year);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Other expenses: 1st year $ 500; 2-4th year $ 300 per year
                                                    (Health insurance $ 150, Visa extension $ 100, Medical visit $ 50)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Chechen State University (city of Grozny)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>Preparatory year: $ 2800</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay,
                                                    medical insurance ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian 1-4th year:</div>
                                                    <div class='col-md-8 col-55'>$ 3500</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 1st year:</div>
                                                    <div class='col-md-8 col-55'>$ 4300</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 2-4th year:</div>
                                                    <div class='col-md-8 col-55'>$ 3300</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian 1-2th year:</div>
                                                    <div class='col-md-8 col-55'>$ 3500</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 1st year:</div>
                                                    <div class='col-md-8 col-55'>$ 4300</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 2nd year:</div>
                                                    <div class='col-md-8 col-55'>$ 3300</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>1st year doctorate: $ 3500</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Accommodation costs: $ 800 (per year);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Other expenses: 1st year $ 500; 2-4th year $ 300 per year
                                                    (Health insurance $ 150, Visa extension $ 100, Medical visit $ 50)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        State Technical University of Rybinsk Aviation (Rybinsk City)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>Preparatory year: $ 4300</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay,
                                                    medical insurance ...</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian</div>
                                                    <div class='col-md-8 col-55'>$ 3500</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 1st year:</div>
                                                    <div class='col-md-8 col-55'>$ 5000</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 2-4th year:</div>
                                                    <div class='col-md-8 col-55'>$ 4000</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In Russian 1-2th year:</div>
                                                    <div class='col-md-8 col-55'>$ 4000</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 1st year:</div>
                                                    <div class='col-md-8 col-55'>$ 5000</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>In English 2nd year:</div>
                                                    <div class='col-md-8 col-55'>$ 4000</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>1st year doctorate: $ 4000</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Accommodation fee: $ 1,000 (per year);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Other expenses: 1st year $ 500; 2-4th year $ 300 per year
                                                    (Health insurance $ 150, Visa extension $ 100, Medical visit $ 50)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header last-child fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Mordovia NP Ogariov State University (Saransk City)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category' style='display: none;'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>The preparatory year: $ 3500</div>
                                                <div class='col-md-8'>The complete pack includes: study, accommodation, stay, medical insurance ...</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>The preparatory year: 2500 $</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Accommodation fee: $ 500 (per year);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Other expenses: 1st year $ 500; 2-4th year $ 300 per year
                                                    (Health insurance $ 150, Visa extension $ 100, Medical visit $ 50)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>" : "
        <div class='sector'>
            <hr class='section-title-line'>
            <h2 class='section-title uppercase'>LES COURS DANS LES UNIVERSITÉS D'ÉTAT DE RUSSIE</h2>
            <h2 class='section-title uppercase'>FRAIS D’ETUDE EN 2019/2020</h2>
            <div class='row'>
                <hr class='section-title-line'>
                <h2 class='section-title uppercase bold'>Filières Médicales</h2>
            </div>
            <ul class='list-group'>
                <li class='list-group-item'>Médecine Générale - 6 ans</li>
                <li class='list-group-item'>Médecine Dentaire - 5 ans</li>
                <li class='list-group-item'>Pharmacie - 5 ans</li>
                <li class='list-group-item'>Résidanat – 2-5 ans</li>
                <li class='list-group-item'>Doctorat - 3 ans</li>
            </ul>
            <p>La durée d'études (années universitaires)*</p>
            <div class='row'>
                <div class='_container'>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Université Médicale de Recherche Nationale de Russie nommée d'après N.I.Pirogov (ville de Moscou)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-12'>L’année préparatoire: 4800 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement, séjour
                                                    assurance médicale…</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Médecine générale/Dentaire :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe: 1-5/6ème année:</div>
                                                    <div class='col-md-8 col-55'>7700 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 1ère année:</div>
                                                    <div class='col-md-8 col-55'>8700 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 2-6ème:</div>
                                                    <div class='col-md-8 col-55'>7700 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Pharmacie:</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe 1-5ème année :</div>
                                                    <div class='col-md-8 col-55'>5600 $</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Résidanat/Doctorat: 7700 $</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Frais d’hébergement: 1200 $ (par ans);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Autres dépenses: 1ère année 500 $; 2-5/6éme année
                                                    300 $ par ans (Assurance maladie 150 $; Extension de visa 100 $;
                                                    Visite médicale 50 $)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Université d’État Tchétchène (ville de Grozny)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-12'>L’année préparatoire: 2800 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement,
                                                    séjour, assurance médicale…</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Médecine générale/Dentaire :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe: 1-6ème année:</div>
                                                    <div class='col-md-8 col-55'>3000 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 1ère année:</div>
                                                    <div class='col-md-8 col-55'>5000 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 2-6ème:</div>
                                                    <div class='col-md-8 col-55'>4000 $</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Résidanat/Doctorat 1-3éme année: 4000 $</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Frais d’hébergement: 800 $ (par ans);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Autres dépenses: 1ère année 500 $; 2-5/6éme année
                                                    300 $ par ans (Assurance maladie 150 $; Extension de visa 100 $;
                                                    Visite médicale 50 $)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header last-child fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Université d’État de Médecine du Daghestan (ville de Makhatchkala)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>L’année préparatoire: 3900 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement, séjour, assurance médicale…</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>L’année préparatoire: 3000 $</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Médecine générale / Dentaire/Pharmacie/Infirmier :</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe: 1-6ème année:</div>
                                                    <div class='col-md-8 col-55'>3000 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 1ère année:</div>
                                                    <div class='col-md-8 col-55'>5000 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 2-5/6ème:</div>
                                                    <div class='col-md-8 col-55'>4000 $</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Résidanat/Doctorat 1-3éme année: 4000 $</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Frais d’hébergement: 400 $ (par ans);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Autres dépenses: 1ère année 500 $; 2-5/6éme année
                                                    300 $ par ans (Assurance maladie 150 $; Extension de visa 100 $;
                                                    Visite médicale 50 $)</div>
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
        <hr>
        <div class='sector'>
            <hr class='section-title-line'>
            <h2 class='section-title uppercase'>LES COURS DANS LES UNIVERSITÉS D'ÉTAT DE RUSSIE</h2>
            <h2 class='section-title uppercase'>FRAIS D’ETUDE EN 2019/2020</h2>
            <div class='row'>
                <hr class='section-title-line'>
                <h2 class='section-title uppercase bold'>Filières d’Ingénierie et Techniques, Economiques, Scientifiques et Sciences Humaines</h2>
            </div>
            <ul class='list-group'>
                <li class='list-group-item'>Licence- 4 ans</li>
                <li class='list-group-item'>Master (après Licence)-2 ans</li>
                <li class='list-group-item'>Ingénieur d’État-5 ans</li>
                <li class='list-group-item'>Doctorat-3 ans</li>
            </ul>
            <br>
            <div class='row'>
                <div class='_container'>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Institut de Physique et de Technologie de Moscou (Moscou)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>L’année préparatoire: 4400 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement, séjour
                                                    assurance médicale…</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe 1-4ème année:</div>
                                                    <div class='col-md-8 col-55'>4500 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 1-4ème année:</div>
                                                    <div class='col-md-8 col-55'>8000 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe 1-2ème année:</div>
                                                    <div class='col-md-8 col-55'>4500 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 1-2ème année :</div>
                                                    <div class='col-md-8 col-55'>8000 $</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Doctorat 1-3éme année: 5000 $</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Frais d’hébergement: 1000 $ (par ans);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Autres dépenses: 1ère année 500 $ ; 2-4ème année
                                                    300 $ par ans (Assurance maladie 150 $; Extension de visa 100 $;
                                                    Visite médicale 50 $)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Université  d’Etat Technique d’Izhevsk de M.T. Kalachnikov (Izhevsk)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>L’année préparatoire: 4800 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement, séjour
                                                    assurance médicale…</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe :</div>
                                                    <div class='col-md-8 col-55'>3500 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 1ère année:</div>
                                                    <div class='col-md-8 col-55'>5200 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 2-4ème année:</div>
                                                    <div class='col-md-8 col-55'>4200 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe 1-2ème année:</div>
                                                    <div class='col-md-8 col-55'>3700 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 1ère année:</div>
                                                    <div class='col-md-8 col-55'>5200 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe 2ème année:</div>
                                                    <div class='col-md-8 col-55'>4200 $</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-4'>Doctorat: 1-3ème année: 3700 $</div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>Frais d’hébergement: 1000 $ (par ans);</div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>Autres dépenses: 1ère année 500 $ ; 2-4ème année 300
                                                $ par ans (Assurance maladie 150 $; Extension de visa 100 $; Visite
                                                médicale 50 $)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Université Polytechnique de Tomsk (Tomsk)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>L’année préparatoire: 4500 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement,
                                                    séjour,
                                                    assurance médicale…</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe 1-4ème année:</div>
                                                    <div class='col-md-8 col-55'>4000-4500 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe 1-2ème année:</div>
                                                    <div class='col-md-8 col-55'>4500 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 1ère année :</div>
                                                    <div class='col-md-8 col-55'>5500 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 2ème année :</div>
                                                    <div class='col-md-8 col-55'>4500 $</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Doctorat 1-3éme année: 4500 $</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Frais d’hébergement: 500 $ (par ans);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Autres dépenses: 1ère année 500 $ ; 2-4ème année
                                                    300
                                                    $ par ans (Assurance maladie 150 $; Extension de visa 100 $; Visite
                                                    médicale 50 $)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Université d'Etat Tchétchène (ville de Grozny)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>L’année préparatoire: 2800 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement,
                                                    séjour,
                                                    assurance médicale…</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe 1-4ème année:</div>
                                                    <div class='col-md-8 col-55'>3500 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 1ère année:</div>
                                                    <div class='col-md-8 col-55'>4300 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 2-4ème année:</div>
                                                    <div class='col-md-8 col-55'>3300 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe 1-2ème année:</div>
                                                    <div class='col-md-8 col-55'>3500 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 1ère année :</div>
                                                    <div class='col-md-8 col-55'>4300 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 2ème année :</div>
                                                    <div class='col-md-8 col-55'>3300 $</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Doctorat 1-3éme année: 3500 $</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Frais d’hébergement: 800 $ (par ans);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Autres dépenses: 1ère année 500 $ ; 2-4ème année
                                                    300
                                                    $ par ans (Assurance maladie 150 $; Extension de visa 100 $; Visite
                                                    médicale 50 $)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Université d'État Technique de l'Aviation de Rybinsk (ville de Rybinsk)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>L’année préparatoire: 4300 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement,
                                                    séjour,
                                                    assurance médicale…</div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Licence: </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe</div>
                                                    <div class='col-md-8 col-55'>3500 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 1ère année:</div>
                                                    <div class='col-md-8 col-55'>5000 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 2-4ème année:</div>
                                                    <div class='col-md-8 col-55'>4000 $</div>
                                                </div>
                                            </div>
                                            <div class='row wrapper'>
                                                <div class='row'>
                                                    <div class='col-md-4'>Master</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En russe 1-2ème année:</div>
                                                    <div class='col-md-8 col-55'>4000 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 1ère année :</div>
                                                    <div class='col-md-8 col-55'>5000 $</div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-4 col-45'>En anglais 2ème année :</div>
                                                    <div class='col-md-8 col-55'>4000 $</div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Doctorat 1-3éme année: 4000 $</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Frais d’hébergement: 1000 $ (par ans);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Autres dépenses: 1ère année 500 $ ; 2-4ème année
                                                    300
                                                    $ par ans (Assurance maladie 150 $; Extension de visa 100 $; Visite
                                                    médicale 50 $)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='tool-container'>
                        <div class='tool-header last-child fa-plus'>
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <h3 class='capitalize'>
                                        Université d'État de Mordovie N. P. Ogariov (ville de Saransk)
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class='tool-category'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='tool-txt'>
                                        <div class='tool-descr'>
                                            <div class='row'>
                                                <div class='col-md-4'>L’année préparatoire: 3500 $</div>
                                                <div class='col-md-8'>Le pack complet inclut: étude, hébergement, séjour, assurance médicale…</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>L'année préparatoire: 2500 $</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Frais d’hébergement: 500 $ (par ans);</div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12'>Autres dépenses: 1ère année 500 $ ; 2-4ème année
                                                    300
                                                    $ par ans (Assurance maladie 150 $; Extension de visa 100 $; Visite
                                                    médicale 50 $)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>")); ?>
    </div>
</div>
<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php';
footer(); ?>