<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1> What to know About me </h1>
  <p>An IT expert and designer</p>
  <p>.</p>
</div>

<h2 style="text-align:center">ME</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="bg.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Dochka</h2>
        <p class="title">Agri/business</p>
        <p>Hydroponics knowledge.</p>
        <p>mohadolo@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="ee.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>moher salesa</h2>
        <p class="title">Art Director</p>
        <p>Sheikh customs available.</p>
        <p>salesa@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="de.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Dolandoz</h2>
        <p class="title">Designer</p>
        <p>Graphics designer wedding editor.</p>
        <p>doch@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
