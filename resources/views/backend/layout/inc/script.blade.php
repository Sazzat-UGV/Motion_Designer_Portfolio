<!-- Required vendors -->
<script src="{{ asset('assets/backend') }}/vendor/global/global.min.js"></script>
<script src="{{ asset('assets/backend') }}/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="{{ asset('assets/backend') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="{{ asset('assets/backend') }}/vendor/apexchart/apexchart.js"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('assets/backend') }}/js/dashboard/dashboard-1.js"></script>
<script src="{{ asset('assets/backend') }}/vendor/draggable/draggable.js"></script>

<!-- tagify -->
<script src="{{ asset('assets/backend') }}/vendor/tagify/dist/tagify.js"></script>
<script src="{{ asset('assets/backend') }}/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets/backend') }}/vendor/datatables/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('assets/backend') }}/vendor/datatables/js/buttons.html5.min.js"></script>
<script src="{{ asset('assets/backend') }}/vendor/datatables/js/jszip.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/plugins-init/datatables.init.js"></script>

<!-- Apex Chart -->
<script src="{{ asset('assets/backend') }}/vendor/bootstrap-datetimepicker/js/moment.js"></script>
<script src="{{ asset('assets/backend') }}/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

<!-- Vectormap -->
<script src="{{ asset('assets/backend') }}/vendor/jqvmap/js/jquery.vmap.min.js"></script>
<script src="{{ asset('assets/backend') }}/vendor/jqvmap/js/jquery.vmap.world.js"></script>
<script src="{{ asset('assets/backend') }}/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
 <script src="{{ asset('assets/backend') }}/js/custom.js"></script>
<script src="{{ asset('assets/backend') }}/js/deznav-init.js"></script>
<script src="{{ asset('assets/backend') }}/js/demo.js"></script>
<script src="{{ asset('assets/backend') }}/js/styleSwitcher.js"></script>

{{-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script> --}}
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

@stack('admin_script')
