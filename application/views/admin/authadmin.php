<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>
<style>
	html,
	body {
		background: rgb(54, 55, 60);
	}

	* {
		margin: 0;
	}

	form {
		vertical-align: top;
		width: 250px;
		margin: 0 auto;

		-webkit-animation: formAnim 3s ease-out 1s 1 normal both;
	}

	form input {
		appearance: none;
		width: 100%;
		position: relative;
		left: -10px;
		padding: 13px 10px 12px;
		margin: 10px auto;

		border: none;
		border-radius: 5px;
	}

	form input:focus {
		box-shadow: 0 0 0 2px #bdc3c7;
		outline: none;
	}

	form input[type="submit"] {
		width: 270px;
		background: rgb(20, 163, 125);
		color: #fff;
		font-size: 14px;
		padding: 10px;
	}

	form input[type="submit"]:focus {
		box-shadow: none;
	}

	.pocket {
		width: 150px;
		height: 125px;
		background: rgb(20, 146, 113);

		position: relative;
		margin: 150px auto 50px;

		border-radius: 6px 6px 0 0;
		box-shadow: inset 0 0 0 5px rgb(20, 146, 113),
			inset 75px 0 rgb(20, 154, 121);

		-webkit-animation: pocketAnim 1s ease-out 0 1 normal both;
	}

	.pocket::before,
	.pocket::after {
		content: "";
		position: absolute;
	}

	.pocket::before {
		top: 100%;
		height: 50px;

		border: 75px solid transparent;
		border-top: 50px solid rgb(20, 146, 113);
		border-bottom: none;
	}

	.pocket::after {
		top: 120px;
		left: 5px;
		border: 70px solid transparent;
		border-width: 70px 0 0 70px;
		border-top: 45px solid rgb(20, 154, 121);
	}

	.card {
		width: 120px;
		height: 120px;
		background: rgb(247, 247, 247);

		position: relative;
		margin: 0 auto;

		opacity: .5;
		border-radius: 15px 15px 0 0;
		z-index: -1;

		box-shadow: inset 0 1px rgba(255, 255, 255, .2),
			/* shine */
			inset 40px -20px rgb(247, 247, 247),
			/* white */
			inset 50px -20px rgb(199, 54, 51),
			/* red */
			inset 60px -20px rgb(223, 177, 52),
			/* orange */
			inset 70px -20px rgb(82, 145, 185),
			/* blue */
			inset 80px -20px rgb(97, 174, 19);
		/* green */

		-webkit-transform: translateY(-80px);
		-webkit-animation: cardAnim 1s ease-out 0 1 normal both;
	}

	@-webkit-keyframes cardAnim {
		0% {
			opacity: .5;
			-webkit-transform: translateY(-100px);
		}

		100% {
			opacity: 1;
			-webkit-transform: translateY(-20px);
		}
	}

	@-webkit-keyframes pocketAnim {
		0% {
			top: 0px;
		}

		100% {
			top: -40px;
		}
	}

	@-webkit-keyframes formAnim {
		0% {
			opacity: 0;
		}

		100% {
			opacity: 1;
		}
	}

</style>

<body>
	<figure class="pocket">
		<figure class="card"></figure>
	</figure>
	<form action="<?= base_url("registeradmin/aksi_login") ?>" method="post">
		<input type="username" name="username" placeholder="Username" />
		<input type="password" name="password" placeholder="Password" />

		<input type="submit" value="Sign in" />
	</form>
	</div>
</body>

</html>
