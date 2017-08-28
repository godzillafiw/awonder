$(function () {
	 $.extend(true, $.fn.dataTable.defaults, {
        "language": {
                  "sProcessing": "Loading...",
                  "sLengthMenu": "_MENU_",
                  "sZeroRecords": "<span class='badge bg-pink'>No Results</span>",
                  "sInfo": " <span class='badge bg-cyan'>Show _START_ To _END_ From _TOTAL_ Row</span>",
                  "sInfoEmpty": " <span class='badge bg-cyan'>Show 0 To 0 From 0 Row</span>",
                  "sInfoFiltered": " <span class='badge bg-cyan'>Filter _MAX_ Row</span>",
                  "sInfoPostFix": "",
                  "sSearch": "Search:",
                  "sUrl": "",
                  "oPaginate": {
                                "sFirst": "First",
                                "sPrevious": "Previous",
                                "sNext": "Next",
                                "sLast": "Last"
                  }
         }
    });
	
    $('.js-basic-example').DataTable({
        responsive: true,
		order: [[ 0, "desc" ]],
		fixedHeader: true
    });
	
    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});