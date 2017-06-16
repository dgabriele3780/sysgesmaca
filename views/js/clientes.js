
    jQuery(document).ready(function(){

        jQuery('#basicTable').DataTable({
          	language:  {
              "sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ningún dato disponible en esta tabla",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":     "Último",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
              }
          },
            responsive: true
        });

        var shTable = jQuery('#shTable').DataTable({
            "fnDrawCallback": function(oSettings) {
                jQuery('#shTable_paginate ul').addClass('pagination-active-dark');
            },
            responsive: true
        });

        // Show/Hide Columns Dropdown
        jQuery('#shCol').click(function(event){
            event.stopPropagation();
        });

        jQuery('#shCol input').on('click', function() {

            // Get the column API object
            var column = shTable.column($(this).val());

            // Toggle the visibility
            if ($(this).is(':checked'))
                column.visible(true);
            else
                column.visible(false);
        });

        var exRowTable = jQuery('#exRowTable').DataTable({
            responsive: true,
            "fnDrawCallback": function(oSettings) {
                jQuery('#exRowTable_paginate ul').addClass('pagination-active-success');
            },
            "ajax": "ajax/objects.txt",
            "columns": [
                {
                    "class":          'details-control',
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ''
                },
                { "data": "name" },
                { "data": "position" },
                { "data": "office" },
                { "data": "salary" }
            ],
            "order": [[1, 'asc']]
        });

        // Add event listener for opening and closing details
        jQuery('#exRowTable tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = exRowTable.row( tr );

            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                row.child( format(row.data()) ).show();
                tr.addClass('shown');
            }
        });


        // DataTables Length to Select2
        jQuery('div.dataTables_length select').removeClass('form-control input-sm');
        jQuery('div.dataTables_length select').css({width: '60px'});
        jQuery('div.dataTables_length select').select2({
            minimumResultsForSearch: -1
        });

    });

    function format (d) {
        // `d` is the original data object for the row
        return '<table class="table table-bordered nomargin">'+
            '<tr>'+
                '<td>Full name:</td>'+
                '<td>'+d.name+'</td>'+
            '</tr>'+
            '<tr>'+
                '<td>Extension number:</td>'+
                '<td>'+d.extn+'</td>'+
            '</tr>'+
            '<tr>'+
                '<td>Extra info:</td>'+
                '<td>And any further details here (images etc)...</td>'+
            '</tr>'+
        '</table>';
    }
