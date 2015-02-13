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

  <style>
  #draggable { width: 150px; height: 150px; padding: 0.5em; }
  </style>
  <script>
  $(function() {
    $( "#draggable" ).draggable();
  });
  </script>

  <style>
  .toggler { width: 500px; height: 200px; }
  #button { padding: .5em 1em; text-decoration: none; }
  #effect { width: 240px; height: 135px; padding: 0.4em; position: relative; }
  #effect h3 { margin: 0; padding: 0.4em; text-align: center; }
  </style>
  <script>
  $(function() {
    // run the currently selected effect
    function runEffect() {
      // get effect type from
      var selectedEffect = $( "#effectTypes" ).val();
 
      // most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 100 };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 280, height: 185 } };
      }
 
      // run the effect
      $( "#effect" ).show( selectedEffect, options, 500, callback );
    };
 
    //callback function to bring a hidden box back
    function callback() {
      setTimeout(function() {
        $( "#effect:visible" ).removeAttr( "style" ).fadeOut();
      }, 1000 );
    };
 
    // set effect from select menu value
    $( "#button" ).click(function() {
      runEffect();
    });
 
    $( "#effect" ).hide();
  });
  </script>


  </head>
  <body>

    <div class="toggler">
          <div id="effect" class="ui-widget-content ui-corner-all">
            <h3 class="ui-widget-header ui-corner-all">Show</h3>
            <p>
              Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
            </p>
          </div>
    </div>
    Nova hlavicka
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
            

        </div class="ui-widget-content">
        <h2> Chapter 1 </h2>
        <div id="draggable" >
            <img src="edit.png">
            <textarea rows="4" cols="70"> </textarea> </td>
        </div>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/9XFeW9dgyIs?list=UUAuUUnT6oDeKwE6v1NGQxug" frameborder="0" allowfullscreen></iframe>
    </div>
    

    Hello word
    <?php
        echo '!';
    ?>
  </body>
</html>
