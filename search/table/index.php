<html>
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
function showResult(str) {
  if (str.length==0) { 
     $('#livesearch').css("display", "none");
    return;
  }
  $.ajax({

                    url : "ajax.php?q=" + str, 
                    type : 'get', 
                    dateType:'xml',
                    

                    success : function (ch){
                        $('#livesearch').html(ch);
                        $('#livesearch').css("display", "block");
                        $('#livesearch').css({"background-color": "yellow","margin-top":"20px"});
                    }
                });
  
}
</script>
</head>
<body>

<form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form>

</body>
</html>