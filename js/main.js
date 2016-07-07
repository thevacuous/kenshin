$(document).ready(function() {
    $('#fullpage').fullpage({
        afterLoad: function(anchorLink, index){
            $(this).find('.hideme').animate({'opacity':'1'},500);
        }
    });
});
