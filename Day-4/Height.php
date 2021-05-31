<script>

function adjustHeightOfPage(pageNo) {
   
    
    var totalPageHeight = 15 + $('.cd-slider-nav').height()
                            + $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 160
                            + $('.tm-footer').height();

  
    if(totalPageHeight > $(window).height()) 
    {
        $('.cd-hero-slider').addClass('small-screen');
        $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
    }
    else 
    {
        $('.cd-hero-slider').removeClass('small-screen');
        $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
    }

}


$(window).load(function(){

    adjustHeightOfPage(1);
    $('.tm-img-gallery').magnificPopup({
        delegate: 'a', 
        type: 'image',
        gallery:{enabled:true}                
    });

    
    $('#tmNavbar a').click(function(){
        $('#tmNavbar').collapse('hide');

        adjustHeightOfPage($(this).data("no")); // Adjust page height       
    });

    
    $( window ).resize(function() {
        var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
        adjustHeightOfPage( currentPageNo );
    });

    $('body').addClass('loaded');
               
});

</script>             
