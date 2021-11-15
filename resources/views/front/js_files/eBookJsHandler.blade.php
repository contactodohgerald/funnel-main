<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script>
    var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();
        $helper.children().each(function(index) {
            $(this).width($originals.eq(index).width())
        });
        return $helper;
    },
    updateIndex = function(e, ui) {
        $('td.index', ui.item.parent()).each(function (i) {
            $(this).html(i+1);
        });
        $('input[type=text]', ui.item.parent()).each(function (i) {
            $(this).val(i + 1);
        });
    };

    $("#myTable tbody").sortable({
        helper: fixHelperModified,
        stop: updateIndex
    }).disableSelection();

    $("tbody").sortable({
        distance: 5,
        delay: 100,
        opacity: 0.6,
        cursor: 'move',
        update: function() {}
    });

    $(document).on('change', '#page_numbering', function(){
        $value = $(this).val();
             
        if($value == 'in_header'){
            $('#header_font_text').attr({'disabled':true});
            $('#header_font_link').attr({'disabled':true});
            $('#header_font_align').attr({'disabled':true});
            $('#header_font_color').attr({'disabled':true});
            $('#header_font_size').attr({'disabled':true});
            $('#header_font_family').attr({'disabled':true});

            $('#footer_font_text').attr({'disabled':false});
            $('#footer_font_link').attr({'disabled':false});
            $('#footer_font_align').attr({'disabled':false});
            $('#footer_font_color').attr({'disabled':false});
            $('#footer_font_size').attr({'disabled':false});
            $('#footer_font_family').attr({'disabled':false});
        }else if($value == 'in_footer'){
            $('#header_font_text').attr({'disabled':false});
            $('#header_font_link').attr({'disabled':false});
            $('#header_font_align').attr({'disabled':false});
            $('#header_font_color').attr({'disabled':false});
            $('#header_font_size').attr({'disabled':false});
            $('#header_font_family').attr({'disabled':false});
            
            $('#footer_font_text').attr({'disabled':true});
            $('#footer_font_link').attr({'disabled':true});
            $('#footer_font_align').attr({'disabled':true});
            $('#footer_font_color').attr({'disabled':true});
            $('#footer_font_size').attr({'disabled':true});
            $('#footer_font_family').attr({'disabled':true});
        }else{
            $('#header_font_text').attr({'disabled':false});
            $('#header_font_link').attr({'disabled':false});
            $('#header_font_align').attr({'disabled':false});
            $('#header_font_color').attr({'disabled':false});
            $('#header_font_size').attr({'disabled':false});
            $('#header_font_family').attr({'disabled':false});
            
            $('#footer_font_text').attr({'disabled':false});
            $('#footer_font_link').attr({'disabled':false});
            $('#footer_font_align').attr({'disabled':false});
            $('#footer_font_color').attr({'disabled':false});
            $('#footer_font_size').attr({'disabled':false});
            $('#footer_font_family').attr({'disabled':false});
        }

    });

    $(document).on('click', '.browse_modal', function(){
    $("#ajaxCall").modal('toggle');
})
</script>