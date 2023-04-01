<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>jQuery UI Signature Basics</title>
    <link
      href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
      rel="stylesheet"
    />
    <link href="css/jquery.signature.css" rel="stylesheet" />
    <style>
      .kbw-signature {
        width: 400px;
        height: 200px;
      }
    </style>
    <!--[if IE]>
      <script src="excanvas.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/jquery.signature.js"></script>
    <script>
      $(function () {
        var sig = $("#sig").signature();
        $("#disable").click(function () {
          var disable = $(this).text() === "Disable";
          $(this).text(disable ? "Enable" : "Disable");
          sig.signature(disable ? "disable" : "enable");
        });
        $("#clear").click(function () {
          sig.signature("clear");
        });
        $("#json").click(function () {
          alert(sig.signature("toJSON"));
        });
        $("#svg").click(function () {
          alert(sig.signature("toSVG"));
        });
      });
    </script>

    <!-- bootstrap css -->
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
  </head>
  <body>

  <div class="container">
    <form action="upload.php" method="post">

    <div class="col-md-12">
      <label for="signature">Signature</label>
      <br>
      <div id="sig"></div>
      <br>
      <button id="clear">Clear</button>
      <textarea name="signed" id="signature64" style="display: none;"></textarea>
    </div>
    <br>
    <button class="btn btn-success" type="submit">Submit</button>

    </form>
  </div>

  <script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').click(function (e){
      e.preventDefault();
      sig.signature('clear');
      $("#signature64").val('');
    });
  </script>

    <!-- bootstrap -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script> -->
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
