jQuery(function ($) {
    
    var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Antigua and Barbuda","Argentina","Armenia","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Brazil","Brunei","Bulgaria","Burkina Faso","Burundi","Cabo Verde","Cambodia","Cameroon","Canada","Central African Republic","Chad","Chile","China","Colombia","Comoros","Congo, Republic of the","Congo, Democratic Republic of the","Costa Rica","Cote d'Ivoire","Croatia","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Fiji","Finland","France","Gabon","Gambia","Georgia","Germany","Ghana","Greece","Grenada","Guatemala","Guinea","Guinea-Bissau","Guyana","Haiti","Honduras","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Israel","Italy","Jamaica","Japan","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Morocco","Mozambique","Myanmar (Burma)","Namibia","Nauru","Nepal","Netherlands","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Qatar","Romania","Russia","Rwanda","St. Kitts and Nevis","St. Lucia","valueSt. Vincent and The Grenadines","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor-Leste","Togo","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom (UK)","United States of America (USA)","Uruguay","Uzbekistan","Vanuatu","Vatican City (Holy See)","Venezuela","Vietnam","Yemen","Zambia","Zimbabwe"];
    var country = $('#country');
    if(country.length > 0){
        $.each(countries, function(i) {
            country.append($('<option data-tokens="'+countries[i]+'" />').val(countries[i]).text(countries[i]));
        });
        country.selectpicker();
    }
    
    $('.feature-carousel').carousel({
        pause: false,
        interval: 30000,
    })
    $('.feature-carousel').bsTouchSlider();
    baguetteBox.run('.tz-gallery');
    
    // SECTION: Resource page
    $('.main-content').delegate('.tool-header', 'click', function(){
        var tool_category = $(this).siblings('.tool-category');
        if($(tool_category).css('display') === "block"){
            $(tool_category).slideUp(300)
            if($(tool_category).hasClass('last-child')){
                $(this).addClass('last-child');
                $(tool_category).removeClass('last-child');
            }
        }
        else {
            if($(this).hasClass('last-child')){
                $(this).removeClass('last-child');
                $(tool_category).addClass('last-child');
            }
            $('.tool-header').removeClass('fa-minus').addClass('fa-plus');
            $('.tool-category').slideUp(300)
            $(tool_category).slideDown(300);
        }
        $(this).toggleClass('fa-minus fa-plus');
    });
   
    $('#modal').on('click', function () {
        $('#modal-bg').fadeOut(100);
        $('#modal').addClass('bounceOutRight');
    });
    feature_width()
    // Controlling Feature Height by the Width of the document
    $(window).on('resize', function () {
        feature_width();
    });
    function feature_width() {
        var offset_width = document.body.offsetWidth;
        $('.feature > .container > .row').removeClass('no-img no-margin');
        if (offset_width > 750) $('.feature').css('height', '510px');
        else if (offset_width > 670) $('.feature').css('height', '400px');
        // else if(offset_width > 400) $('.feature').css('height', '200px');
        else {
            $('.feature').css('height', '350px');
            if (!$('.feature .row.me').length && offset_width < 500)
            $('.feature > .container > .row').addClass('no-img');
            else $('.feature > .container > .row').addClass('no-margin');
        }
        if (offset_width < 670) $('#sl-container-languages').css('display', 'none');
    }
    
    $(document).keydown(function(e) {
        if (e.keyCode === 37) {
            // Previous
            jQuery(".carousel-control.left a").trigger('click');
            return false;
        }
        if (e.keyCode === 39) {
            // Next
            jQuery(".carousel-control.right a").trigger('click');
            return false;
        }
    });
    
    $('#sl-container').on('mouseenter', function (){
        $(this).find('.animated').removeClass('bounceOutDown').addClass('bounceInUp');
    })
    $('#sl-container').on('mouseleave', function (){
        $(this).find('.animated').addClass('bounceOutDown').removeClass('bounceInUp');
    })
    var progress_bar_top = $('.navbar').offset().top;
    scrolling();
    $(window).on('scroll', function () {
        scrolling(true);
    });
    function scrolling(browser_scroll = false) {        
        var scroll_top = $(document).scrollTop();
        //#region SECTION: Show / Hide the addOns - Contrlling the top bar width
        var total_height = document.body.offsetHeight - window.innerHeight; //document.body.clientHeight;
        var progress_bar = $('.navbar + .progress .progress-bar');
        var width = Math.round(parseFloat((scroll_top * 100) / total_height));
        progress_bar.css('width', width + '%');
        
        //#region SECTION: Fixing / Unfixing the top nav bar of the page
        if (scroll_top <= progress_bar_top){ //(document.body.offsetWidth >= 750 ? 170 : 50)) {
            _ToggleClasses(false, 'navbar-fixed-top', ['header .progress', '.navbar'])
            _ToggleClasses(true, 'bounceOutDown', ['.up-container'])
            _ToggleClasses(false, 'bounceInUp', ['.up-container'])
        }
        else {
            _ToggleClasses(true, 'navbar-fixed-top', ['header .progress', '.navbar'])
            _ToggleClasses(false, 'bounceOutDown', ['.up-container'])
            _ToggleClasses(true, 'bounceInUp', ['.up-container'])
        }
        //#endregion
        function _ToggleClasses(toggle_state, classes, elements) {
            if (toggle_state == 'toggle') {
                for (j = 0; j < elements.length; j++) {
                    $(elements[j]).toggleClass(classes)
                }
            }
            
            else if (toggle_state) {
                for (j = 0; j < elements.length; j++) {
                    $(elements[j]).addClass(classes)
                }
            }
            else {
                for (j = 0; j < elements.length; j++) {
                    $(elements[j]).removeClass(classes)
                }
            }
        }
    }
})