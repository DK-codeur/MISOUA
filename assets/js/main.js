$(document).ready(function () {

    //initialize
    $('.toast').toast(Option);
    
       
    $('.fa-search').click(function() {

        $(this).hide();
        $('.block-search').slideDown(600);
        $('#btn-chercher').fadeIn(2000);
    });

    $('#exploration-avance').click(function() {

        $('.recherche-avance').slideDown(1400);
        $(this).fadeTo(1000, 0.2);
        $('#close').fadeIn(2000);
        
    });

    $('#close').click(function() {

        $('.recherche-avance').slideUp(1400);
        $('#exploration-avance').fadeTo(1000, 1);
        $('#close').fadeOut(1000);
    });

    //login & register
    $('.inscrivez-vous').click(function() {

        document.location.href= 'register';
    });

    $('.connectez-vous').click(function() {

        document.location.href= 'login';
    });


    $('#publish').on('click', function() {

        if( $('#offre option:selected').text() == 'vente' )
            {
                $('#statut-maison').css('backgroundColor', 'red !important');
            }
    });

 



});