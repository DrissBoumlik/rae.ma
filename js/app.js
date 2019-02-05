jQuery(function ($) {
    $('#sl-container').on('mouseenter', function (){
        $(this).find('li._hide').removeClass('hidden')
    })
    $('#sl-container').on('mouseleave', function (){
        $(this).find('li._hide').addClass('hidden')
    })
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
        if (scroll_top <= (document.body.offsetWidth >= 750 ? 170 : 50)) {
            _ToggleClasses(false, 'navbar-fixed-top', ['header .progress'])
        }
        else {
            _ToggleClasses(true, 'navbar-fixed-top', ['header .progress'])
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