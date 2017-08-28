$('#DataTables_Table_0_paginate').addClass('pull-right');

$('#calendar').datepicker({
		});

!function ($) {
    $(document).on("click","ul.nav li.parent > a ", function(){          
        $(this).find('em').toggleClass("fa-minus");      
    }); 
    $(".sidebar span.icon").find('em:first').addClass("fa-plus");
}

(window.jQuery);
	$(window).on('resize', function () {
  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
})
$(window).on('resize', function () {
  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
})

$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('em').removeClass('fa-toggle-up').addClass('fa-toggle-down');
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('em').removeClass('fa-toggle-down').addClass('fa-toggle-up');
	}
})


$.fn.clearForm = function() {
  return this.each(function() {
    var type = this.type, tag = this.tagName.toLowerCase();
    if (tag == 'form')
      return $(':input',this).clearForm();
    if (type == 'text' || type == 'password' || tag == 'textarea')
      this.value = '';
    else if (type == 'checkbox' || type == 'radio')
      this.checked = false;
    else if (tag == 'select')
      this.selectedIndex = -1;
  });
};


$(function () {
	 $.extend(true, $.fn.dataTable.defaults, {
        "language": {
                  "sProcessing": "กำลังโหลด...",
                  "sLengthMenu": "_MENU_",
                  "sZeroRecords": "<span class='badge bg-pink'>No Results</span>",
                  "sInfo": " <span class='badge bg-cyan'>แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว</span>",
                  "sInfoEmpty": " <span class='badge bg-cyan'>Show 0 To 0 From 0 Row</span>",
                  "sInfoFiltered": " <span class='badge bg-cyan'>Filter _MAX_ Row</span>",
                  "sInfoPostFix": "",
                  "sSearch": "",
                  "sUrl": "",
                  searchPlaceholder: "ค้นหา",
                  "oPaginate": {
                                "sFirst": "ก่อน",
                                "sPrevious": "ก่อนหน้า",
                                "sNext": "ถัดไป",
                                "sLast": "หลัง"
                  }
         }
    });
	
    $('.table').DataTable({
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


function alertSuccess(){
    $.alert({
      title: 'Successfully',
      content: 'บันทึกข้อมูลเรียบร้อย',
      icon: 'fa fa-check',
      animation: 'scale',
      closeAnimation: 'scale',
      buttons: {
      okay: {
      text: 'Okay',
      btnClass: 'btn-green'
      }
      }
    });
}

 function alertFailed(){
    $.alert({
      title: 'Failed',
      content: 'มีข้อผิดพลาด กรุณาลองใหม่อีกครั้ง',
      icon: 'fa fa-times-circle',
      animation: 'scale',
      closeAnimation: 'scale',
        buttons: {
            okay: {
                text: 'Okay',
                btnClass: 'btn-red'
                 }
            }
    });
}


// Add Job // 
    $("#form").on("submit",function(event){
        event.preventDefault();
        var action = $("#form").attr("data-action");
        var data = $("#form").serialize();
        var url = window.location.href;
        var url = url.replace("job/add", "actions");
        console.log(url+'/'+action);
         $.ajax({
                  type: 'POST',
                  data: data,
                  dataType: 'json',
                  url: url+'/'+action,
                  success: function(data) {
                      if(data.status){
                        console.log(data.status);
                          alertSuccess();
                          $('.error').removeClass('has-error').removeClass('has-success');
                          $('.text-danger').remove();
                          $('form').clearForm();
                      } else{
                          alertFailed();
                          $.each(data.messages, function(key, value) {
                                var element = $('#' + key);
                                element.closest('div.error')
                                .removeClass('has-error')
                                .addClass(value.length > 0 ? 'has-error' : 'has-success')
                                .find('.text-danger')
                                .remove();
                                element.after(value);
                              });
                        }
                  }
                });               
         });

    
  // Add Blog // 
    $("#form-blog").on("submit",function(event){
        event.preventDefault();
        var action = $("#form-blog").attr("data-action");
        var data = $("#form-blog").serialize();
        var url = window.location.href;
        var url = url.replace("seo", "actions");
          $.confirm({
                  title: 'Confirm!',
                  content: 'คุณต้องการแก้ไข ข้อมูลนี้ใช่ไหม',
                  icon: 'glyphicon glyphicon-ok',
                  draggable: true,
                  buttons: {
                      confirm: function () {
                          $.ajax({
                              type: 'POST',
                              data: data,
                              dataType: 'json',
                              url: url+'/'+action,
                              success: function(data) {
                                  if(data.status){
                                   alertSuccess();
                                  } else{
                                   alertFailed();
                                  }
                              }
                        });
                      },
                      cancel: function () {
                          $.alert('คุณได้ยกเลิกการทำรายการนี้');
                      }
                  }
              });
         });



   // Update SEO // 
    $("#form-seo").on("submit",function(event){
        event.preventDefault();
        var action = $("#form-seo").attr("data-action");
        var data = $("#form-seo").serialize();
        var url = window.location.href;
        var url = url.replace("seo", "actions");
          $.confirm({
                  title: 'Confirm!',
                  content: 'คุณต้องการแก้ไข ข้อมูลนี้ใช่ไหม',
                   icon: 'glyphicon glyphicon-ok',
                  draggable: true,
                  buttons: {
                      confirm: function () {
                          $.ajax({
                              type: 'POST',
                              data: data,
                              dataType: 'json',
                              url: url+'/'+action,
                              success: function(data) {
                                  if(data.status){
                                   alertSuccess();
                                  } else{
                                   alertFailed();
                                  }
                              }
                        });
                      },
                      cancel: function () {
                          $.alert('คุณได้ยกเลิกการทำรายการนี้');
                      }
                  }
              });
         });

    // Delete blog // 
    $(".del").click(function() {
                  var action = $(".del").attr("data-action");
                  var data = $(this).parent().find(".del").data("id");
                  var url = window.location.href;
                  var url = url.replace("blog", "actions");
                  console.log(url+'/'+action+'/'+data);
                  $.confirm({
                  title: 'Confirm!',
                  content: 'คุณต้องการลบ ข้อมูลนี้ใช้ไหม',
                  icon: 'glyphicon glyphicon-ok',
                  draggable: true,
                  buttons: {
                      confirm: function () {
                          $.ajax({
                                  type: 'POST',
                                  dataType: 'json',
                                  url: url+'/'+action+'/'+data,
                                  success: function(data) {
                                      if(data.status){
                                       alertSuccess();
                                      } else{
                                       alertFailed();
                                      }
                                  }
                              });
                      },
                      cancel: function () {
                          $.alert('คุณได้ยกเลิกการทำรายการนี้');
                      }
                  }
              });

        });


    // Delete job // 
    $(".del-job").click(function() {
                  var action = $(".del-job").attr("data-action");
                  var table = $(".del-job").attr("data-table");
                  var data = $(this).parent().find(".del-job").data("id");
                  var url = window.location.href;
                  var url = url.replace("job", "actions");
                  console.log(url+'/'+action+'/'+data);
                  $.confirm({
                  title: 'Confirm!',
                  content: 'คุณต้องการลบ ข้อมูลนี้ใช้ไหม',
                  icon: 'glyphicon glyphicon-ok',
                  draggable: true,
                  buttons: {
                      confirm: function () {
                          $.ajax({
                                  type: 'POST',
                                  dataType: 'json',
                                  url: url+'/'+action+'/'+data,
                                  success: function(data) {
                                      if(data.status){
                                       alertSuccess();
                                      } else{
                                       alertFailed();
                                      }
                                  }
                              });
                      },
                      cancel: function () {
                          $.alert('คุณได้ยกเลิกการทำรายการนี้');
                      }
                  }
              });

        });


    // Set width images in blog detail. //
    $('p img').width({'width' : '100%'});


