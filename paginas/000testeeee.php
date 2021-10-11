<html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
}

.parallax {
  /* The image used */
  background-image: url('img_parallax.jpg');

  /* Full height */
  height: 100%; 

  /* Create the parallax scrolling effect */
  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Turn off parallax scrolling for tablets and phones. Increase the pixels if needed */
@media only screen and (max-device-width: 1366px) {
  .parallax {
    background-attachment: scroll;
  }
}
</style>
</head>
<body>

<p>In this example we have turned off parallax scrolling for mobile devices. It works as expected on all desktop screens sizes.</p>
<p>Scroll Up and Down this page to see the parallax scrolling effect.</p>

<div class="parallax"></div>

<div style="height:1000px;background-color:red;font-size:36px">
This div is just here to enable scrolling.
Tip: Try to remove the background-attachment property to remove the scrolling effect.
</div>

<div class="parallax"></div>

</body>
</html>