<script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

<script src="{{asset('plugins/sweetalerts/sweetalert2.min.js')}}"></script>
<script src="{{asset('plugins/notification/snackbar/snackbar.min.js')}}"></script>
<script src="{{asset('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('assets/js/default-dashboard/default-custom.js')}}"></script>
<script src="{{asset('assets/js/support-chat.js')}}"></script>

<script>
    function noty(msg, option = 1) {
        snackbar.show({
            text: msg.toUpperCase(),
            actionText: 'Cerrar',
            actionTextColor: '#fff',
            backgroundColor: option == 1 ? '#3b3f5c' : '#e7515a',
            pos: 'top-right'
        });

    }
</script>

@livewireScripts