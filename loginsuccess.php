<html>
<script type="text/javascript">
	function matchcheck(){
		var first = document.getElementById("first").value;
		var second = document.getElementById("second").value;
		if (first!=second) {
	alert("The passwords do not match!"); //will set it
		
		}
		else{
		alert("The passwords have matched");
		document.passform.action = "setpassword.php";
		}
		return ok;
	}
</script>
</html>