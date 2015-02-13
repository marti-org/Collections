<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="style.css">

    <meta charset="utf-8">
  <title>jQuery UI Slider - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#slider" ).slider();
  });
  </script>
  <script>
  $(function() {
    $( "#speed" ).selectmenu();
 
    $( "#files" ).selectmenu();
 
    $( "#number" )
      .selectmenu()
      .selectmenu( "menuWidget" )
        .addClass( "overflow" );
  });
  </script>
  <style>
    fieldset {
      border: 0;
    }
    label {
      display: block;
      margin: 30px 0 0 0;
    }
    select {
      width: 200px;
    }
    .overflow {
      height: 200px;
    }
  </style>

  </head>
  <body>

    <div id="page">
       <div id="top">
            <div id="title">
                <h1>LearnMixer</h1>
            </div>
            <div id="login">
                <form>
                    <input type="text" name="txtLogin">
                    <input type="submit" name="btnSend" value="Search">
                    <img src="u405.png" id="bel">
                
                    Help
                    <a> Log out </a>
                </form>
            </div>  
        </div> 
        <div id="subtitle">
            My Collections > Math > Math Mammoth > Editing
        </div> 
        <div id="math">
            <h2> Math Mouth </h2>
            <table>
                <tr> <td> Description </td> 
                    <td> <textarea rows="4" cols="50"> </textarea> </td>
                </tr>
                <tr> <td> Age group </td> 
                    <td> <div id="slider"></div> </td>
                </tr>
                <tr> <td> Subject </td> 
                    <td>
                        <select name="speed" id="speed">
                          <option>Biographz</option>
                          <option>Geographz</option>
                          <option selected="selected">Subject</option>
                          <option>Fyzic</option>
                          <option>History</option>
                        </select>
                    </td>
                </tr>
                <tr> <td> Licence </td> 
                    <td>
                        <select name="speed" id="speed">
                          <option>All right reserved</option>
                          <option>Atributions</option>
                          <option selected="selected">Atribute allone</option>
                        </select>
                    </td>
                </tr>
            </table>
            

        </div>
        <div> Floating div </div>
    </div>
    

    Hello word
    <?php
        echo '!';
    ?>
  </body>
</html>
