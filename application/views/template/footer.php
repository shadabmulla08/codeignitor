<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"</script>
<script> $(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
<script>
    $(document).ready(function () {
        $('.confirm-delete').click(function (e) { 
            e.preventDefault();
            confirmdia=confirm("Are your sure to delete this data?");
            if(confirmdia)
            {
                var id=$(this).val();
            }
            $.ajax({
                type: "DELETE",
                url: "confirmDelete/"+id, 
                success: function (response) {
                    alert("data deleted successfully")
                    window.location.reload();
                }
            });
        });
    });
</script>
</body>
</html>