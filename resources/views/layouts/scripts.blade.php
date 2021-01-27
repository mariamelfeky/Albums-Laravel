
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/lazysizes.min.js') }}"></script>
<script src="{{ asset('js/fontawesome.min.js') }}"></script>
<script src="{{ asset('js/all.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/usingAjax.js') }}"></script>

<script>
        $('#addphoto').change(function(e){
            var fileName = e.target.files[0].name;
            $(e.target).next().text(fileName);
            console.log(fileName);
        });
</script>

</body>

</html>