<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="/css/materialize.min.css">
  <link rel="stylesheet" href="/css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>



  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Pokedex proyecto 2</h1>
        <div class="row center">
          <h5 class="header col s12 light">Mini pokedex echa con laravel y materialize</h5>
        </div>
        <br><br>
      </div>
    </div>
    <div class="parallax"><img src="http://stuffpoint.com/pokemon/image/185857-pokemon-pokemon-conquest.jpg"></div>
  </div>


  <div id="customers">
      <table id="tab_customers" class="table table-striped">
          <colgroup>
              <col width="20%">
                  <col width="20%">
                      <col width="20%">
                          <col width="20%">
          </colgroup>
          <thead>
              <tr class='warning'>
                  <th>Country</th>
                  <th>Population</th>
                  <th>Date</th>
                  <th>Age</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>Chinna</td>
                  <td>1,363,480,000</td>
                  <td>March 24, 2014</td>
                  <td>19.1</td>
              </tr>
              <tr>
                  <td>India</td>
                  <td>1,241,900,000</td>
                  <td>March 24, 2014</td>
                  <td>17.4</td>
              </tr>
              <tr>
                  <td>United States</td>
                  <td>317,746,000</td>
                  <td>March 24, 2014</td>
                  <td>4.44</td>
              </tr>
              <tr>
                  <td>Indonesia</td>
                  <td>249,866,000</td>
                  <td>July 1, 2013</td>
                  <td>3.49</td>
              </tr>
              <tr>
                  <td>Brazil</td>
                  <td>201,032,714</td>
                  <td>July 1, 2013</td>
                  <td>2.81</td>
              </tr>
          </tbody>
      </table>
  </div>
  <button onclick="javascript:demoFromHTML();">PDF</button>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="/js/materialize.min.js"></script>
  <script src="/js/init.js"></script>
  <script src="/js/jspdf.min.js"></script>

</body>
</html>
