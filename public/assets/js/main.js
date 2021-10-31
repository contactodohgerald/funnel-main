(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('.btn-drop').each(function () {
        $(this).on('click', function () {
            $($(this).attr('data-target')).toggle('show');
        });

    });

    //$(btn.attr('data-toggle'))
    $('.btn-close').each(function () {
        $(this).on('click', function () {
            if ($(this).attr('data-dismiss')) {
                $(this).closest($(this).attr('data-dismiss')).removeClass('show');
            }
            console.log($(this).attr('data-dismiss'));
        });
    });

    $('[data-toggle=slide-in-wrap]').each(function () {
        $(this).on('click', function () {
            $($(this).attr('data-target')).addClass('show');

        });
    });

    $("#is-sale-active").on('change', function () {
        if ($(this).is(":checked")) {
            $('.sales-page .btn-sales-page').addClass('show');
            //removeActive('.sales-page .btn-page-type', 'active');
            //$('.btn-sales-page').addClass('active')

        } else {
            if ($('.btn-sales-page').hasClass('show')) {
                $('.btn-sales-page').removeClass('show');
            }

            if ($('#sales-page').hasClass('active')) {
                $('#sales-page').removeClass('active');
            }

            if ($('#sales-page').hasClass('show')) {
                $('#sales-page').removeClass('show');
            }

            if ($('.btn-sales-page').hasClass('active')) {
                // $('.btn-squeeze').addClass('active');
                $('#squeeze-page').addClass('active');
            } 
            //$('.sales-page .btn-page-type')[1].classList.add('active');

            //$('.sales-page .btn-page-type').addClass('active')
        }
    });

    $("#is-exit-active").on('change', function () {
        if ($(this).is(":checked")) {
            $('.pop-up-page-edit').addClass('show');
           

        } else {
            $('.pop-up-page-edit').removeClass('show');
        }
    })


    $('.btn-toggle').each(function () {
        $(this).on('click', function () {
            // removeActive('.toggle-item', 'show');
            // removeActive('.btn-toggle', 'active');
            // console.log($(this));
            // console.log($(this).hasClass('active'));
            $($(this).attr('data-target')).toggleClass('show');
            if ($(this).attr('data-text')) {

                console.log($($(this).attr('data-target')).hasClass('show'));
                $(this).text($($(this).attr('data-target')).hasClass('show') ? $(this).attr('data-text') : 'Click to Show')
            }


            // if ($(this).hasClass('active')) {
            //     alert('Yes');
            //     // $(this).removeClass('active');
            //     $($(this).attr('data-target')).removeClass('show');
            //     return;
            // }
            // //removeActive('.btn-toggle', 'active');
            // // $(this).addClass('active');
            // $($(this).attr('data-target')).addClass('show');
        });
    });

    // $('.btn-page-type').each(function () {
    //     $(this).on('click', function () {
    //         removeActive('.btn-page-type', 'active');


    //         //removeActive('.btn-toggle', 'active');
    //         $(this).addClass('active');
    //     });
    // });

    function removeActive(elem, keyword) {
        $(elem).each(function () {
            $(this).removeClass(keyword);
        });
    }
})();