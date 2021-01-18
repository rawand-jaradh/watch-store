var length = $(" .invalid-feedback").length;
		if(length > 0){$("#showform").click();}
    $(document).ready(function() {
		
      $('#datatable').DataTable({
        "pagingType": "full_numbers",
		 "order": [[ 3, "desc" ]],
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        "paging": false,//Dont want paging                
        "bPaginate": false,//Dont want paging   
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "بحث سريع",
          lengthMenu: "عرض_MENU_ ",
          zeroRecords: "لا يوجد نتيجة",
          info: "صفحة  _PAGE_ من  _PAGES_",
          infoEmpty: "لا يوجد بيانات لعرضها",
          infoFiltered: "(من  عدد  _MAX_  )"
        }
       
      });

      $("a.edit_settings").click(function(e){
        var key = $(this).attr("data-key");
        var url = $(this).attr("data-url");
        Swal.fire({
          title: 'تعديل اعدادات "'+key+'"',
          html: '<div class="form-group">' +
            '<select class="form-control" name="value" id="value"><option value="yse">yes</option><option value="yse">no</option></select>' +
            '</div>',
          showCancelButton: true,
          confirmButtonClass: 'btn btn-success',
          cancelButtonClass: 'btn btn-danger',
          buttonsStyling: false
        }).then((result) => {
          var val = $("#value").val();
          $.ajax({
              type: "GET",
              url: url ,
              data: { value: value},
              success: function(data){
                Swal.fire({
                  title: "تم تعديل الاعدادات",
                  text: "",
                  buttonsStyling: false,
                  confirmButtonClass: "btn btn-success",
                  type: "success"
                });
              }
          });
        });
      });
	  
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

      demo.initVectorMap();

    });
  