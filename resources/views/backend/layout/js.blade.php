<script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.min.js"></script>

<script src="{{ asset('js/backend/plugins/notyv2/jquery.noty.packaged.js') }}"></script>
<script src="{{ asset('js/backend/plugins/buttonloader/jquery.buttonLoader.min.js') }}"></script>
<script src="{{ asset('js/backend/plugins/preloader/jquery.preloader.min.js') }}"></script>
<script src="{{ asset('js/backend/plugins/waitme/waitMe.min.js') }}"></script>
<script src="{{ asset('js/backend/plugins/nestable/jquery.nestable.js') }}"></script>
<script src="{{ asset('js/backend/plugins/selectize/selectize.js') }}"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/moment.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js"></script>
 <!-- CoreUI and necessary plugins-->
 <script src="{{ asset('dist/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
 <script src="{{ asset('dist/vendors/simplebar/js/simplebar.min.js') }}"></script>
 <!-- We use those scripts to show code examples, you should remove them in your application.-->
 
 <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/prism.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/autoloader/prism-autoloader.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>
 <!-- Plugins and scripts required by this view-->
 <script src="{{ asset('dist/vendors/chart.js/js/chart.min.js') }}"></script>
 <script src="{{ asset('dist/vendors/@coreui/chartjs/js/coreui-chartjs.js') }}"></script>
 <script src="{{ asset('dist/vendors/@coreui/utils/js/coreui-utils.js') }}"></script>
 <script src="{{ asset('dist/js/main.js') }}"></script>

 @yield('lib_js')
 <script src="{{ asset('js/backend/js/init.js') }}"></script>
 @yield('custom_js')