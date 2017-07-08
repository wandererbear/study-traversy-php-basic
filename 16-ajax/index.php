<?php
  // https://www.w3schools.com/xml/ajax_intro.asp
  // https://www.w3schools.com/xml/ajax_xmlhttprequest_response.asp
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AJAX</title>
  <link rel="stylesheet" href="https://bootswatch.com/cerulean/bootstrap.min.css">
  <script>
    function showResult(str){
      if(str.length == 0) {
        document.getElementById('output').innerHTML = '...';
      } else {
        // AJAX REQUEST
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          // readystate 4: request finished and response is ready
          // status 200: "OK"
          if(this.readyState == 4 && this.status == 200) {
            document.getElementById('output').innerHTML = this.responseText;
          }
        }
        xmlhttp.open("GET", "search.php?q="+str, true);
        xmlhttp.send();
      }
    }
  </script>
</head>
<body>
  <div class="container">
    <h1>Search Memory</h1>
    <form>
      Search: <input type="text" placeholder="Search A-Z" onkeyup="showResult(this.value)">
    </form>
    <p>Result: <span id="output"></span></p>
  </div>
</body>
</html>
