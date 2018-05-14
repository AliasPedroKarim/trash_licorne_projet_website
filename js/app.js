(function($) {
    $('.addPanier').click(function (event){
        event.preventDefault();
        $get.($(this).attr('href'),{},function(data){},'json');
        return false;
    })
})(jQuery);