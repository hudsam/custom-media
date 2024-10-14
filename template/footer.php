<div class="pre-loader">
    <img class="loading-gif" src="https://media0.giphy.com/media/11FuEnXyGsXFba/source.gif"/>
</div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({

        });

        $('.button-ChangeUploadOn').on('click',function(){
            var Tautan = $(this).data('href');
            $('.modal-content').load(Tautan,function(){
                $('#modal-ChangeUploadOn').modal({show:true});
            });
        });
    });

    window.addEventListener('load', function () {
        document.querySelector('.pre-loader').className += ' hidden';
    });
</script>
</html>
