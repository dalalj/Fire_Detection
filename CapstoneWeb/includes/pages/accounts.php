  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <section class="content-header">
      <h1>
       Accounts
      </h1>
    </section>    <!-- Main content -->


    <section class="content">

<!-- Default box -->
<div class="box">
  <div class="box-header with-border">

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">


                            <div class="table-responsive mb-4 mt-4">
                                <table id="html5-extension" class="table table-bordered table-striped mb-4" style="width:100%">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Username</th>
                                            <th>Name</th>
                                            <th>Surname</th>
                                            <th>e-mail</th>
                                            <th>Authorization Level</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                       
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--  END CONTENT AREA  -->

    <script>
    window.onload = function () {
         var filterBtnNum=0;

        $('#html5-extension').DataTable( {
            //dom: 'Bfrtip',
            dom: '<"text-right aligned eight wide column"l>frtip',
            columnDefs: [
                    {"className": " text-left","width": "15%","targets": 0},
                    {"className": " text-left","width": "15%","targets": 1},
                    {"className": " text-center","width": "15%","targets": 2},
                    {"className": " text-center","width": "20%", "targets": 3,"orderable": false},
                    {"className": " text-center","width": "150px", "targets": 4,"orderable": false},
                    {"className": " text-right","width": "100px", "targets": 5,"orderable": false},
              ],
            "oLanguage": {
                "sEmptyTable": "Tabloda veri yok",   
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": " _PAGE_ / _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Ara...",
                "sInfoFiltered":   "(Toplam: _MAX_)",
               "sLengthMenu": "Liste :  _MENU_",
               "sProcessing": '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="60px" height="60px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"><circle cx="84" cy="50" r="10" fill="#343a40"><animate attributeName="r" repeatCount="indefinite" dur="0.25s" calcMode="spline" keyTimes="0;1" values="12;0" keySplines="0 0.5 0.5 1" begin="0s"></animate><animate attributeName="fill" repeatCount="indefinite" dur="1s" calcMode="discrete" keyTimes="0;0.25;0.5;0.75;1" values="#343a40;#efb906;#343a40;#efb906;#343a40" begin="0s"></animate></circle><circle cx="16" cy="50" r="10" fill="#343a40">  <animate attributeName="r" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="0;0;12;12;12" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="0s"></animate>  <animate attributeName="cx" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="16;16;16;50;84" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="0s"></animate></circle><circle cx="50" cy="50" r="10" fill="#efb906">  <animate attributeName="r" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="0;0;12;12;12" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.25s"></animate>  <animate attributeName="cx" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="16;16;16;50;84" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.25s"></animate></circle><circle cx="84" cy="50" r="10" fill="#343a40">  <animate attributeName="r" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="0;0;12;12;12" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.5s"></animate>  <animate attributeName="cx" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="16;16;16;50;84" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.5s"></animate></circle><circle cx="16" cy="50" r="10" fill="#efb906">  <animate attributeName="r" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="0;0;12;12;12" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.75s"></animate>  <animate attributeName="cx" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="16;16;16;50;84" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.75s"></animate></circle></svg>',
            },
            "stripeClasses": [],
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "pageLength": 10,
            "processing": true,
            "serverSide": true,
            "ajax": "getData.php?db=accounts",
            "order": [[ 2, "desc" ]],
            "searching": true,


        } );

    };

  function deleteAccount(id) {
              swal.fire({
                  title: 'Delete Account?',
                  text: "This action is irreversible and the accuont info will be deleted permanently!",
                  showCancelButton: true,
                  confirmButtonText: 'Accept!',
                  cancelButtonText: 'Cancel',
                  padding: '2em'
                }).then(function(result) {
                    if(result.value){
                        $.ajax({url: "admin.php?db=accounts&act=delete&id="+id, success: function(result2){ 
                            
                            $('#html5-extension').DataTable().ajax.reload();

                        }});
                        }
                });
            }
    </script>


  </div>

  <!-- /.box-footer-->
</div>
<!-- /.box -->

</section>    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->