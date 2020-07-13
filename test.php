<html>  
  
<head>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
</head>  
  
<body> <button onclick="myFunction()">Try it</button>  
<div id="myDIV">
<input type="text" >
</div>
    <script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
</body>  
  
</html> 