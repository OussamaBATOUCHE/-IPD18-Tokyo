
        <!-- /.box -->
        <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  //document.getElementById("m").innerHTML = "th";
  readPosts(document.getElementById("m"));
</script>

<div class="box" id="m">

</div>
