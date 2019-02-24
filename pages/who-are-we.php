<?php $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.'/layouts/header.php'  ;
    $title = get_lang_text("من نحن ؟", "Who Are We ?","QUI NOUS SOMMES");
    title_page($title, 2)
?>

    
<?php include $path.'/layouts/feature.php';
    $txt = "QUI NOUS SOMMES ?";
    if(isset($_GET['lang'])){
        $txt = translate_feature_txt("QUI NOUS SOMMES ?","من نحن ؟", "Who Are We ?");
    }
    feature_txt($txt, "");
?>
    

    <div class="section who-are-we">
        <div class="">
            <div class="row">
                <hr class="section-title-line">
                <h2 class="section-title"><?php echo (($lang == 'ar') ? 'من نحن ؟' : (($lang == 'en') ? 'WHO WE ARE ?' : 'QUI NOUS SOMMES ?')); ?></h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo (($lang == 'ar') ? 'أليانس التعليمية (RAE) نشطة في مجال المشورة التعليمية. مهمة RAE هي دعم الطلاب المغاربة ، ولا سيما خريجي البكالوريوس ، في مشاريعهم الدراسية في الخارج (أوكرانيا / روسيا). نحن نقدم المساعدة والتوجيهات التعليمية اللازمة لمساعدتهم على إجراء عملية الانتقال بأقل قدر من المتاعب. نحن نحرص على اتخاذ جميع الخطوات الإدارية لتعزيز قبولك مع المؤسسة المنشودة.' : (($lang == 'en') ? 'Alliance Educative (RAE) is active in the field of educational advice. RAE\'s mission is to support Moroccan students, in particular bachelor\'s graduates, in their study projects abroad (Ukraine / Russia). We provide the necessary educational help and guidance to help them make the transition with the least amount of hassle. We take care of all administrative steps to promote your acceptance with the desired establishment.' : 'Alliance Educative (RAE) est active dans le domaine du conseil pédagogique. RAE a pour vocation d’accompagner les étudiants marocains, en particulier les bacheliers, dans leurs projets d’études à l’étranger(Ukraine/Russie). Nous apportons l’aide et les conseils pédagogiques nécessaires et adaptés pour leur permettre de faire la transition avec le moins de tracas possible. Nous nous occupons attentivement de toutes les démarches administratives en vue de promouvoir votre acceptation auprès de l’établissement souhaité.')); ?></p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section our-mission">
        <div class="">
            <div class="row">
                <hr class="section-title-line">
                <h2 class="section-title"><?php echo (($lang == 'ar') ? 'مهمتنا' : (($lang == 'en') ? 'Our mission' : 'Notre Mission')); ?></h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo (($lang == 'ar') ? 'مهمتنا هي <strong>توجيه ومساعدة الطلاب</strong> على العثور على أفضل الجامعات على أساس احتياجاتهم المالية والأكاديمية. نعمل كجسر بين الباحثين رفيعي المستوى والجامعات التعليمية ، وتعزيز التفاهم والتعليم والتبادل الثقافي.' 
                    : (($lang == 'en') ? 'Our mission is to <strong>guide and help students</strong> find the best universities based on their financial and academic needs. We act as a bridge between high level researchers and teaching universities, promoting understanding, education and cultural exchange.' 
                    : 'Notre mission est de <strong>guider et d\'aider les étudiants</strong> à trouver les meilleures universités en fonction de leurs besoins financiers et académiques. Nous agissons comme un pont entre les chercheurs de haut niveau et les universités d’enseignement, en favorisant la compréhension, l’éducation et les échanges culturels.')); ?></p>
                </div>
            </div>
        </div>
    </div>
    

<?php include $path.'/layouts/sidebar.php'; ?>
<?php include $path.'/layouts/footer.php' ?>