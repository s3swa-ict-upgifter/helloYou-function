<!DOCTYPE html>
<html>
<script>
function helloYou(name){
  return "Welcome <?php echo $_GET["name"]; ?><br>";
}
</script>
<body>



<script>
 +document.write(helloYou("Pekka"));
 +</script>
</body>
</html>
