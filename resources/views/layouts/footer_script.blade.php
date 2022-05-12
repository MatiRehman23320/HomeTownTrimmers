
<!-- Popper JS -->
<script src="{{ asset('assets') }}/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
<!-- Wow JS -->
<script src="{{ asset('assets') }}/js/wow.min.js"></script>
<!-- Way Points JS -->
<script src="{{ asset('assets') }}/js/jquery.waypoints.min.js"></script>
<!-- Counter Up JS -->
<script src="{{ asset('assets') }}/js/jquery.counterup.min.js"></script>
<!-- CountDown JS -->
<script src="{{ asset('assets') }}/js/jquery.countdown.js"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
<!-- Sticky JS -->
<script src="{{ asset('assets') }}/js/jquery.sticky.js"></script>
<!-- Main JS -->
<script src="{{ asset('assets') }}/js/main.js"></script>

<script>
    $(document).ready(function () {
            $('#datepicker').fdatepicker({format: 'dd-mm-yyyy'});
            $("#image").change(function(){
                    readURL(this);
                });
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    console.log(e);
                    $('img.profile-logo.img.img-thumbnail').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
    @section('footer_script')


	@show




