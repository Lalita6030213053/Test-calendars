<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Calendar</title>
  <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
  <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="jqueryui/style.css">

  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>

</head>
<body>
 
<p>เลือก วัน/เดือน/ปี：<input type="text" id="datepicker"></p>
 
 
</body>
</html>