    //pada saat window di scrool mengubah warna backgournd navbar
    $(document).scroll(function () {
        var $nav = $(".navbar");
        var $brand = $(".brand img");
        var $title = $(".brand .title-blue");

        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());

        if( $(this).scrollTop() > $nav.height()){
            $brand.attr('src', '../Assets/img/logo.png');
            $title.css({
            "color" : "#ffffff"
            })
        }else if($(this).scrollTop() == 0){
            $brand.attr('src', '../Assets/img/logo-blue.png');
            $title.css({
            "color" : "#28285c"
            })
        }
    });
    
    // event saat link di klik
    $('.page-scroll').on('click', function(e) {
        
        // take the href
        var href = $(this).attr('href');

        // catch emlement in section
        var elemenHref = $(href);
        
        $("html, body").scrollTop(elemenHref.offset().top - 100);

        e.preventDefault();

    });


    