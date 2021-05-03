 <footer class="footer">
     <div class="w-100 clearfix">
         <span class="text-center text-sm-left d-md-inline-block">Đồ án đặt và hẹn lịch khám bác sĩ</span>
         <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Mai Công Chuyên <i
                 class="fa fa-heart text-danger"> </i><a href="http://lavalite.org/" class="text-dark" target="_blank">
                 UTT</a></span>
     </div>
 </footer>

 </div>
 </div>

 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script>
     window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')

 </script>
 <script src="{{ asset('template/plugins/popper.js/dist/umd/popper.min.js') }}"></script>
 <script src="{{ asset('template/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('template/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
 <script src="{{ asset('template/plugins/screenfull/dist/screenfull.js') }}"></script>
 <script src="{{ asset('template/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('template/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('template/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('template/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('template/plugins/moment/moment.js') }}"></script>
 <script src="{{ asset('template/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js') }}">
 </script>
 <script type="text/javascript">
     $(document).ready(function() {
         $("#datepicker").datetimepicker({
             format: 'DD-MM-YYYY'
         });
        //  var d = new Date();

        //  var month = d.getMonth() + 1;
        //  var day = d.getDate();

        //  var output = (day < 10 ? '0' : '') + day + '-' +
        //      (month < 10 ? '0' : '') + month + '-' +
        //      d.getFullYear();

        //  $("#datepicker").val(output);
     })

 </script>
 <script src="{{ asset('template/plugins/d3/dist/d3.min.js') }}"></script>
 <script src="{{ asset('template/plugins/c3/c3.min.js') }}"></script>
 <script src="{{ asset('template/js/tables.js') }}"></script>
 <script src="{{ asset('template/dist/js/theme.min.js') }}"></script>
 </body>

 </html>
