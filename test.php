 <?php

	function fun()
	{
			
		$output = shell_exec('NETSH WLAN SHOW INTERFACES');
		
		$var1 = strpos($output,"Profile                : ");
		if($var1>0)
		{
			$var = substr($output,$var1+25);
			$var2=strpos($var,"Hosted network status");
			$var3 = substr($var,0,$var2-7);
			return $var3;
		}
				return "No wifi connected";
	}

?>
<html>
<!--<script type="text/javascript">
	window.speechSynthesis.speak(msg);
			setTimeout(function(){
   			window.location.reload(1);
			},60000);
</script>
-->
<head>
<style>
	.button {
    background-color: #42A5F5;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>

</head>

 	<script>
 		var wifi = "<?php echo fun(); ?>";
 		document.write(wifi);
		if(wifi=='Rajasthan-Wifi')
		{
			
			var msg = new SpeechSynthesisUtterance("You are connected with Rajasthan-Wifi. We are considering that Rajasthan-Wifi is the first wifi which is located at the entry gate of Jantar-Mantar. Now I am going to tell you the history of Hawa Mahal.");
			window.speechSynthesis.speak(msg);
			setTimeout(function(){
   			window.location.reload(1);
			},20000);
		}
		else if(wifi==='AndroidAP')
		{	
			var msg = new SpeechSynthesisUtterance("Now, The first thing infront of you is the Samrat-Yantra. The Samrat Yantra, sometimes called “Supreme Instrument” is an equinoctial sundial of enormous proportion. Although one of the simpler instruments, and not too different from sundials which had been developed hundreds of years earlier, the Samrat Yantra is important because it measures time to a precision that had never before been achieved.");
			window.speechSynthesis.speak(msg);
			setTimeout(function(){
   			window.location.reload(1);
			}, 20000);
		}
		else
		{
			var msg = new SpeechSynthesisUtterance("No wifi connected... Please Move somewhere else!");
			window.speechSynthesis.speak(msg); 
			setTimeout(function(){
   			window.location.reload(1);
			}, 10000);
		}
 	</script>
 	<div>
      <img src="562059.jpg" width="100%" height="600px" style="margin-top:5px; opacity: 0.8;">
      <center><img src="Interwind-1.5s-200px.gif" width="250px" style="margin-top:100px; position:absolute;left: 500px; top: 50px; z-index: 1"></center>
    </div>
<center><button onclick="fun();" class="button">Home</button></center>
<script type="text/javascript">
	function fun()
	{
		window.location="pato/index.php";
	}
</script>
</html>