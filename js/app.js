(function($) {
    $('.addPanier').click(function (event){
        event.preventDefault();
        $.get($(this).attr('href'),{},function(data){
            $('#count').empty().append(data.count);
        },'json');
        $('.ajoute_panier').css('display', 'block');
        return false;
    })
})(jQuery);