<!Doctype html>
<html lang="en-US">

<head>

    <link rel="stylesheet" href="CSS and Images\index.css ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="wrap">
        <span class="decor"></span>
        <nav>
            <ul class="primary">
                <li>
                    <a href="index.php">Home</a>
                </li>

                <li>
                    <a href="recipe.php">Send a recipe</a>
                </li>

                <li>
                    <a href="feedback.php">Give us feedback</a>
                </li>

                <li style="float: right;">
                    <a href="about.html">About</a>
                </li>

                <li>
                    <div id="google_translate_element"></div>

                </li>

            </ul>
        </nav>
    </div>

    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

</body>
<!-- Search-->
<div class="container1">

        <input type="text" name="search_text" id="search_text" style="height: 70px"placeholder="What you have in your fridge?" class="form-control" >
		<div id="result"></div>
		<div style="clear:both"></div>
</div>
<!-- Search-->
<script src="search.js"></script>
<footer>

&copy 2020 Foods be like
</footer>
</html>
