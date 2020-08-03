$(document).ready(function(){
        


        $('span.control.inc').click(function(){
          var rowNumber = $(this).parent().parent().attr("data");
          
          $("div.item").each(function(index,value){
            var checkRowNumber  =  $(value).attr("data");
            $("div.item").each(function(index,value){
              var checkRowNumber  =  $(value).attr("data");
              if(rowNumber == checkRowNumber){
                var txtValue = parseInt($(this).children().find('input[name="qty"]').val());
                $(this).children().find('input[name="qty"]').val(++txtValue); 
                rowNumber = 0;
              }
            });
          });

          calculate_totals();

        });



        $('span.control.dec').click(function(){
          var rowNumber = $(this).parent().parent().attr("data");
          
          $("div.item").each(function(index,value){
            var checkRowNumber  =  $(value).attr("data");
            $("div.item").each(function(index,value){
              var checkRowNumber  =  $(value).attr("data");
              if(rowNumber == checkRowNumber){
                var txtValue = parseInt($(this).children().find('input[name="qty"]').val());
                if(txtValue>0)
                $(this).children().find('input[name="qty"]').val(--txtValue); 
                rowNumber = 0;
              }
            });
          });


          calculate_totals();
          
        });

      });


    
    function calculate_totals(){

      var total = 0
      $('div.item input[name="qty"]').each(function(index,element){
        var quantity = parseInt($(element).val());
        var price = parseInt($(element).attr("data"));
        total += (quantity*price);

      });

      $("span.total").text(total);


    }