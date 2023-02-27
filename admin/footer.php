<footer class=" py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-center small">
            <div class="text-muted">Copyright &copy; <i class="fa fa-heartbeat" style="color: orange"></i>
                KU-ST KHADIJAH</div>
        </div>
    </div>
</footer>

</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#prev').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script>
    $(document).ready(function() {
        $('#gambar').change(function() {
            readURL(this);
        });

    });
</script>
<script>
    CKEDITOR.replace('ckedtor', {
        filebrowserUploadUrl: "upload.php",
        height: 300,
        filebrowserUploadMethod: "form"
    });
</script>
</body>

</html>

</body>

</html>