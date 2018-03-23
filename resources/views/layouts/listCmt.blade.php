<div class="box">
          <div class="box-header">
            <h3 class="box-title">Liste des Commentaires</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>#</th>
                <th>Date</th>
                <th>User</th>
                <th>Supprimer</th>
              </tr>
              </thead>
              <tbody>
              <tr class="trOuss" >
                <td onclick="window.open('welcome')">1</td>
                <td onclick="window.open('welcome')">Internet Explorer 4.0 </td>
                <td onclick="window.open('welcome')">Win 95+</td>
                <td onclick=""> <div class="btn btn-danger" >S</div> </td>
              </tr>
              <tr class="trOuss" >
                <td>2</td>
                <td>Internet Explorer 4.0 </td>
                <td>Win 95+</td>
                <td> <div class="btn btn-danger">S</div> </td>
              </tr>
              <tr class="trOuss" >
                <td>3</td>
                <td>Internet Explorer 4.0 </td>
                <td>Win 95+</td>
                <td> <div class="btn btn-danger">S</div> </td>
              </tr>
              <tr class="trOuss" >
                <td>4</td>
                <td>Internet Explorer 4.0 </td>
                <td>Win 95+</td>
                <td> <div class="btn btn-danger">S</div> </td>
              </tr>
              <tr class="trOuss" >
                <td>5</td>
                <td>Internet Explorer 4.0 </td>
                <td>Win 95+</td>
                <td> <div class="btn btn-danger">S</div> </td>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
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
</script>
