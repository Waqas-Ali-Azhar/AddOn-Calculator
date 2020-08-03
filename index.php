<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    
  </head>
  <body>

    <h1 class="heading">Add-on Calculator </h1>

    <div class="container">

      <div class="calculator-wrapper">
      

        <div class="item 1" data="1">

          <div class="left ib">
            <span class="control dec">-</span>
          </div>
          <div class="center ib">
            <input type="text" name="qty" value="1" data="4">
          </div>
          <div class="right ib">
            <span class="control inc">+</span>
          </div>
          <div><label>Apple 1 kg-$4</label></div>
          
        </div>


        <div class="item" data="2">

          <div class="left ib">
            <span class="control dec">-</span>
          </div>
          <div class="center ib">
            <input type="text" name="qty" value="1" data="7">
          </div>
          <div class="right ib">
            <span class="control inc">+</span>
          </div>
          <div><label>Mango 1 kg-$7</label></div>
          
        </div>


        <div class="item 1" data="3">

          <div class="left ib">
            <span class="control dec">-</span>
          </div>
          <div class="center ib">
            <input type="text" name="qty" value="1" data="16">
          </div>
          <div class="right ib">
            <span class="control inc">+</span>
          </div>
          <div><label>Pineapple 1 kg-$16</label></div>
          
        </div>


        <div class="total">
          <label>Total- $</label>
          <span class="total"></span>
        </div>

    </div>

    </div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          // bind events here  
      });
    </script>
  </body>
</html> 

<?php ?>