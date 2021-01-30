  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src=" {{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src=" {{asset('/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src=" {{asset('/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src=" {{asset('/dist/js/demo.js')}}"></script>
<script src=" {{asset('/js/datatables.min.js')}}"></script>
<script src=" {{asset('/js/jquery.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>




<!-- jQuery UI 1.11.4 -->
<script src="{{asset('/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script src="{{asset('/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src=" {{asset('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}  "></script>
<!-- AdminLTE App -->
<script src="{{asset('/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes












  
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });
</script>



<script >
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>








@stack('scripts')
