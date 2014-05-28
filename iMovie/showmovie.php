<script type="text/javascript">
	function checkbox(){
		var Age = document.getElementsByNames("age");
		var cheage="";
		for(i=0;i=Age.length;i++)
		{
			if(Age[i].checked == true)
			{
				cheage += Age[i].value+".";
				break;
			}
		}
	if(cheage == "")
	{
		alert("请先选择")；
	}
	else
	{

	}
</script>