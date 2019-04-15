<!DOCTYPE html>
<html>
<head>
  <title>server-side</title>
  <link rel="stylesheet" type="text/css" href="./css/jquery.dataTables.min.css">
  <script src="./js/jquery.min.js"></script>
  <script src="./js/jquery.dataTables.min.js"></script>
</head>
<body>

  <table id="example" class="display" style="width:100%"> 
    <thead> 
      <tr> 
        <th>First name</th> 
        <th>Last name</th> 
        <th>Username</th> 
      </tr> 
    </thead> 
  </table>

</body>

<script type="text/javascript">

  let table = $('#example').DataTable({
    processing: true,
    serverSide: true,
    bDeferRender: true,
    ajax: {
      url: 'list_of_users',
      type: 'post',
      error: function(res){
        console.log(res)
      }
    },
    columns: [
      { data: 'first_name' },
      { data: 'last_name' },
      { data: 'user_name' },
    ]
  });

</script>

</html>