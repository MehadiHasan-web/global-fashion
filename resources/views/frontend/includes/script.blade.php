<script src="{{ asset('frontend/js/vendor/modernizr-3.11.7.min.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/jquery-v3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/jquery-migrate-v3.3.2.min.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugins.js') }}"></script>
<!-- Ajax Mail -->
<script src="{{ asset('frontend/js/ajax-mail.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('frontend/js/main.js') }}"></script>
{{-- color selector --}}
<script>
    $('.radio-group .colors').click(function() {
        $(this).parent().find('.colors').removeClass('selected');
        $(this).addClass('selected');
        var val = $(this).attr('data-value');
        //alert(val);
        $(this).parent().find('input').val(val);
    });
</script>
@livewireScripts
