<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fitness Expert Gym</title>
</head>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Poppins',sans-serif;
	}
	.container{
		width: 100%;
		height: 100vh;
		background: black;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.btn{
		padding: 10px 60px;
		background: #fff;
		border: 0;
		outline: none;
		cursor: pointer;
		font-size: 22px;
		font-weight: 500;
		border-radius: 30px;
	}
	.popup{
		width: 400px;
		height: 250px;
		background: #fff;
		border-radius: 6px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		text-align: center;
		padding: 0,30px 30px;
		color: #333;
	}
	.popup img{
		width: 100px;
		margin-top: -50px;
		border-radius: 50%;
		box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
	}
	.popup h2{
		font-size: 38px;
		font-weight: 500;
		margin: 30px 0 10px;
	}
	.popup button{
		width: 100%;
		margin-top: 50px;
		padding: 10px 0;
		background: #6fd649;
		color: #fff;
		border: 0;
		outline: none;
		font-size: 18px;
		border-radius: 4px;
		cursor: pointer;
		box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2 );
	}
	
</style>
<body>
  <div class="container">
  	
  	<div class="popup">
      <img src="images/tick.png">
      <h2> Thank You</h2>
      <p>Your Details has been successfully submittes.Thank You</p>
      <form action="login.php">
      <button type="button" >OK</button>
      </form>
    </div>  
  </div>
</body>
</html>