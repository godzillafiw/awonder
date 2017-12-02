/**
* Theme: Uplon Admin Template
* Author: Coderthemes
* Module/App: Main Js
*/


!function($) {
  "use strict";

  var Sidemenu = function() {
    this.$body = $("body"),
    this.$openLeftBtn = $(".open-left"),
    this.$menuItem = $("#sidebar-menu a")
  };
  Sidemenu.prototype.openLeftBar = function() {
    $("#wrapper").toggleClass("enlarged");
    $("#wrapper").addClass("forced");

    if($("#wrapper").hasClass("enlarged") && $("body").hasClass("fixed-left")) {
      $("body").removeClass("fixed-left").addClass("fixed-left-void");
    } else if(!$("#wrapper").hasClass("enlarged") && $("body").hasClass("fixed-left-void")) {
      $("body").removeClass("fixed-left-void").addClass("fixed-left");
    }

    if($("#wrapper").hasClass("enlarged")) {
      $(".left ul").removeAttr("style");
    } else {
      $(".subdrop").siblings("ul:first").show();
    }

    toggle_slimscroll(".slimscrollleft");
    $("body").trigger("resize");
  },
    //menu item click
    Sidemenu.prototype.menuItemClick = function(e) {
     if(!$("#wrapper").hasClass("enlarged")){
      if($(this).parent().hasClass("has_sub")) {

      }
      if(!$(this).hasClass("subdrop")) {
          // hide any open menus and remove all other classes
          $("ul",$(this).parents("ul:first")).slideUp(350);
          $("a",$(this).parents("ul:first")).removeClass("subdrop");
          $("#sidebar-menu .pull-right i").removeClass("md-remove").addClass("md-add");

          // open our new menu and add the open class
          $(this).next("ul").slideDown(350);
          $(this).addClass("subdrop");
          $(".pull-right i",$(this).parents(".has_sub:last")).removeClass("md-add").addClass("md-remove");
          $(".pull-right i",$(this).siblings("ul")).removeClass("md-remove").addClass("md-add");
        }else if($(this).hasClass("subdrop")) {
          $(this).removeClass("subdrop");
          $(this).next("ul").slideUp(350);
          $(".pull-right i",$(this).parent()).removeClass("md-remove").addClass("md-add");
        }
      }
    },

    //init sidemenu
    Sidemenu.prototype.init = function() {
      var $this  = this;

      var ua = navigator.userAgent,
      event = (ua.match(/iP/i)) ? "touchstart" : "click";

      //bind on click
      this.$openLeftBtn.on(event, function(e) {
        e.stopPropagation();
        $this.openLeftBar();
      });

      // LEFT SIDE MAIN NAVIGATION
      $this.$menuItem.on(event, $this.menuItemClick);

      // NAVIGATION HIGHLIGHT & OPEN PARENT
      $("#sidebar-menu ul li.has_sub a.active").parents("li:last").children("a:first").addClass("active").trigger("click");
    },

    //init Sidemenu
    $.Sidemenu = new Sidemenu, $.Sidemenu.Constructor = Sidemenu

  }(window.jQuery),


  function($) {
    "use strict";

    var FullScreen = function() {
      this.$body = $("body"),
      this.$fullscreenBtn = $("#btn-fullscreen")
    };

    //turn on full screen
    // Thanks to http://davidwalsh.name/fullscreen
    FullScreen.prototype.launchFullscreen  = function(element) {
      if(element.requestFullscreen) {
        element.requestFullscreen();
      } else if(element.mozRequestFullScreen) {
        element.mozRequestFullScreen();
      } else if(element.webkitRequestFullscreen) {
        element.webkitRequestFullscreen();
      } else if(element.msRequestFullscreen) {
        element.msRequestFullscreen();
      }
    },
    FullScreen.prototype.exitFullscreen = function() {
      if(document.exitFullscreen) {
        document.exitFullscreen();
      } else if(document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else if(document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
      }
    },
    //toggle screen
    FullScreen.prototype.toggle_fullscreen  = function() {
      var $this = this;
      var fullscreenEnabled = document.fullscreenEnabled || document.mozFullScreenEnabled || document.webkitFullscreenEnabled;
      if(fullscreenEnabled) {
        if(!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) {
          $this.launchFullscreen(document.documentElement);
        } else{
          $this.exitFullscreen();
        }
      }
    },
    //init sidemenu
    FullScreen.prototype.init = function() {
      var $this  = this;
      //bind
      $this.$fullscreenBtn.on('click', function() {
        $this.toggle_fullscreen();
      });
    },
     //init FullScreen
     $.FullScreen = new FullScreen, $.FullScreen.Constructor = FullScreen

   }(window.jQuery),



//main app module
function($) {
  "use strict";

  var App = function() {
    this.VERSION = "1.4.0",
    this.AUTHOR = "Coderthemes",
    this.SUPPORT = "coderthemes@gmail.com",
    this.pageScrollElement = "html, body",
    this.$body = $("body")
  };

     //on doc load
     App.prototype.onDocReady = function(e) {
      FastClick.attach(document.body);
      resizefunc.push("initscrolls");
      resizefunc.push("changeptype");

      $('.animate-number').each(function(){
        $(this).animateNumbers($(this).attr("data-value"), true, parseInt($(this).attr("data-duration")));
      });

      //RUN RESIZE ITEMS
      $(window).resize(debounce(resizeitems,100));
      $("body").trigger("resize");

      // right side-bar toggle
      $('.right-bar-toggle').on('click', function(e){

        $('#wrapper').toggleClass('right-bar-enabled');
      });


    },
    //initilizing
    App.prototype.init = function() {
      var $this = this;
        //document load initialization
        $(document).ready($this.onDocReady);
        //init side bar - left
        $.Sidemenu.init();
        //init fullscreen
        $.FullScreen.init();
      },

      $.App = new App, $.App.Constructor = App

    }(window.jQuery),

//initializing main application module
function($) {
  "use strict";
  $.App.init();
}(window.jQuery);



//this full screen
var toggle_fullscreen = function () {

}

function executeFunctionByName(functionName, context /*, args */) {
  var args = [].slice.call(arguments).splice(2);
  var namespaces = functionName.split(".");
  var func = namespaces.pop();
  for(var i = 0; i < namespaces.length; i++) {
    context = context[namespaces[i]];
  }
  return context[func].apply(this, args);
}
var w,h,dw,dh;
var changeptype = function(){
  w = $(window).width();
  h = $(window).height();
  dw = $(document).width();
  dh = $(document).height();

  if(jQuery.browser.mobile === true){
    $("body").addClass("mobile").removeClass("fixed-left");
  }

  if(!$("#wrapper").hasClass("forced")){
    if(w > 1024){
      $("body").removeClass("smallscreen").addClass("widescreen");
      $("#wrapper").removeClass("enlarged");
    }else{
      $("body").removeClass("widescreen").addClass("smallscreen");
      $("#wrapper").addClass("enlarged");
      $(".left ul").removeAttr("style");
    }
    if($("#wrapper").hasClass("enlarged") && $("body").hasClass("fixed-left")){
      $("body").removeClass("fixed-left").addClass("fixed-left-void");
    }else if(!$("#wrapper").hasClass("enlarged") && $("body").hasClass("fixed-left-void")){
      $("body").removeClass("fixed-left-void").addClass("fixed-left");
    }

  }
  toggle_slimscroll(".slimscrollleft");
}


var debounce = function(func, wait, immediate) {
  var timeout, result;
  return function() {
    var context = this, args = arguments;
    var later = function() {
      timeout = null;
      if (!immediate) result = func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) result = func.apply(context, args);
    return result;
  };
}

function resizeitems(){
  if($.isArray(resizefunc)){
    for (i = 0; i < resizefunc.length; i++) {
      window[resizefunc[i]]();
    }
  }
}

function initscrolls(){
  if(jQuery.browser.mobile !== true){
      //SLIM SCROLL
      $('.slimscroller').slimscroll({
        height: 'auto',
        size: "5px"
      });

      $('.slimscrollleft').slimScroll({
        height: 'auto',
        position: 'right',
        size: "5px",
        color: '#dcdcdc',
        wheelStep: 5
      });
    }
  }
  function toggle_slimscroll(item){
    if($("#wrapper").hasClass("enlarged")){
      $(item).css("overflow","inherit").parent().css("overflow","inherit");
      $(item). siblings(".slimScrollBar").css("visibility","hidden");
    }else{
      $(item).css("overflow","hidden").parent().css("overflow","hidden");
      $(item). siblings(".slimScrollBar").css("visibility","visible");
    }
  }


// === following js will activate the menu in left side bar based on url ====
$(document).ready(function() {
  $("#sidebar-menu a").each(function() {
    if (this.href == window.location.href) {
      $(this).addClass("active");
            $(this).parent().addClass("active"); // add active to li of the current link
            $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
            $(this).parent().parent().prev().click(); // click the item to make it drop
          }
        });

});

/**************************************************/
function alertSuccess(text) {
  swal('Well done!!!', text, 'success');
}

function alertError(text) {
  swal('Oh snap!!!', text, 'error');
}

function sweetAlertToggleLoaing() {
  var sweet = $('.sweet-alert');
  sweet.find('.button').toggle(0);
  sweet.find('.loading').toggle(0);
}

$.extend(true, $.fn.dataTable.defaults, {
        "language": {
                  "searchPlaceholder": "",
                  "sProcessing": "กำลังดำเนินการ...",
                  "sLengthMenu": "_MENU_",
                  "sZeroRecords": "ไม่พบข้อมูล",
                  "sInfo": "<span class='label label-info'>แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว</span>",
                  "sInfoEmpty": "<span class='label label-info'>แสดง 0 ถึง 0 จาก 0 แถว</span>",
                  "sInfoFiltered": "<span class='label label-info'>กรอง _MAX_ แถว</span>",
                  "sInfoPostFix": "",
                  "sSearch": "ค้นหา:",
                  "sUrl": "",
                  "oPaginate": {
                                "sFirst": "เริ่มต้น",
                                "sPrevious": "ก่อนหน้า",
                                "sNext": "ถัดไป",
                                "sLast": "สุดท้าย"
                  }
         }
    });

function appendFooterAction(table, urlDelete) {
  $('.dt-buttons').parent().find('.dt-buttons').parent().append('<i class="ti-upload"></i><a href="javascript:void(0)" title="เลือกททั้งหมด" onclick="datatableSelectAll($(this), true)"> Select All</a> / <a href="javascript:void(0)" title="ยกเลิกทั้งหมด" onclick="datatableSelectAll($(this), false)">Unselect all</a><i> With selected:</i> <a class="text-danger" href="javascript:void(0)" title="ลบ" onclick="deleteDatatableRow($(this), table, \''+urlDelete+'\')"><i class="fa fa-minus-circle"></i> Delete</a>');
}

function datatableSelectAll(button, state) {
  button.parents('.table-responsive').find('input[type="checkbox"]').prop('checked', state);
}

function checkedCheckbox(button) {
  var json = [];
  button.parents('.table-responsive').find('input[type="checkbox"]:checked').each(function() {
    json.push($(this).data('id'));
  })
  return json;
}

function deleteDatatableRow(button, table, url) {
  var obj = checkedCheckbox(button);
  if(obj.length>0) {
    swal({
      title: 'คุณแน่ใจไหม?',
      text: 'คุณต้องการลบรายการนี้ใช่ไหม',
      type: 'warning',
      cancelButtonClass: 'btn-secondary waves-effect',
      confirmButtonClass: 'btn-warning',
      confirmButtonText: 'Yes, delete it!',
      showCancelButton: true,
      closeOnConfirm: false,
      showLoaderOnConfirm: true
    }, function() {
      sweetAlertToggleLoaing();
      $.post(url, { id: obj }, function(response) {
        console.log(response);
        response = $.parseJSON(response);
        sweetAlertToggleLoaing();
        if (response.status == 1) {
          swal('Deleted!', 'Your data has been deleted.', 'success');
          table.ajax.reload();
        } else {
          swal('Error!', 'Have some error, Please try again.', 'error');
        }
      });
    });
  } else {
     swal('Error!', 'กรุณาเลือกรายการที่ต้องการลบ.', 'error');
  }
}

function status($val,$id){
      var val = $val; 
      var id = $id;
      var url =  window.location.href+'/status'
      swal({
      title: 'คุณแน่ใจไหม?',
      text: 'คุณต้องการเปลี่ยนสถานะใช่ไหม',
      type: 'warning',
      cancelButtonClass: 'btn-secondary waves-effect',
      confirmButtonClass: 'btn-warning',
      confirmButtonText: 'Yes, Changed it!',
      showCancelButton: true,
      closeOnConfirm: false,
      showLoaderOnConfirm: true
    }, function() {
      $.post(url, { id: id,status: val }, function(response) {
        console.log(response);
        response = $.parseJSON(response);
        if (response.status == 1) {
          swal('Success!', 'เปลี่ยนสถานะเรียบร้อย.', 'success');
          table.ajax.reload();
        } else {
          swal('Error!', 'Have some error, Please try again.', 'error');
        }
      });
    });
    }

    function deleteItem(id) {
    var id = id;
    var url =  window.location.href+'/delete'
    swal({
      title: 'คุณแน่ใจไหม?',
      text: 'คุณต้องการลบรายการนี้ใช่ไหม',
      type: 'warning',
      cancelButtonClass: 'btn-secondary waves-effect',
      confirmButtonClass: 'btn-warning',
      confirmButtonText: 'Yes, delete it!',
      showCancelButton: true,
      closeOnConfirm: false,
      showLoaderOnConfirm: true
    }, function() {
      $.post(url, { id: id }, function(response) {
        console.log(response);
        response = $.parseJSON(response);
        if (response.status == 1) {
          swal('Deleted!', 'Your data has been deleted.', 'success');
          table.ajax.reload();
        } else {
          swal('Error!', 'Have some error, Please try again.', 'error');
        }
      });
    });
}

function statusPayment($status,$id) {
      var id = $id;
      var status = $status;
      var url =  window.location.href+'/status'
      $.post(url, { id: id, status: status}, function(response) {
        console.log(response);
        response = $.parseJSON(response);
        if (response.status == 1) {
          table.ajax.reload();
        }
      });
    }

function statusQuotation($status,$id) {
      var id = $id;
      var status = $status;
      var url =  window.location.href+'/status';
      $.post(url, { id: id, status: status}, function(response) {
        console.log(response);
        response = $.parseJSON(response);
        if (response.status == 1) {
          table.ajax.reload();
        }
      });
    }    

    $(document).ready(function() {
     table = $('#datatable').DataTable({
      dom: 'Bfrtip',
      buttons: [
      {
        extend:    'copyHtml5',
        text:      '<i class="fa fa-files-o"></i>',
        titleAttr: 'Copy',
    },
    {
        extend:    'excelHtml5',
        text:      '<i class="fa fa-file-excel-o"></i>',
        titleAttr: 'Excel'
    },
    {
        extend:    'pdfHtml5',
        text:      '<i class="fa fa-file-pdf-o"></i>',
        titleAttr: 'PDF'
    },
    {
        extend:    'colvis',
        text:      '<i class="fa fa-hand-pointer-o"></i>',
        titleAttr: 'colvis'
    }
    ],
    aaSorting: [[ 0, 'desc' ]],
    lengthChange: false,
    info: true,
    sAjaxSource: window.location.href+'/getJSON4Datatable',
    aoColumns: [
    { mData: 't1' },
    { mData: 't2' },
    { mData: 't3' },
    { mData: 't4' },
    { mData: 't5' },
    { mData: 't6' }
    ]
});

     appendFooterAction(table, window.location.href+'/delete')
});

$(document).ready(function() {
                $('form').parsley();
});





/**************************************************/
