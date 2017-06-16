jQuery(document).ready(function(){
    // Delete row in a table
    jQuery('.delete-row').click(function(){
        var c = confirm("¿Continuar con el borrado?");
        if(c)
            jQuery(this).closest('tr').fadeOut(function(){
            jQuery(this).remove();
            //Agregar peticion AJAX para borrado
        });
        return false;
    });

    // Show aciton upon row hover
    jQuery('.table tbody tr').hover(function(){
        jQuery(this).find('.table-action-hide a').animate({opacity: 1},100);
    },function(){
        jQuery(this).find('.table-action-hide a').animate({opacity: 0},100);
    });

});
