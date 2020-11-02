//Getting value from "ajax.php".

function fill(Value) {

   //Assigning value to "search" div in "search.php" file.

   $('#search').val(Value);

   //Hiding "display" div in "search.php" file.

   $('#display').hide();

}

$(document).ready(function() {

   //On pressing a key on "Search box" in "search.php" file. This function will be called.

   $("#search").keyup(function() {

       //Assigning search box value to javascript variable descriptiond as "description".

       var description = $('#search').val();

       //Validating, if "description" is empty.

       if (description == "") {

           //Assigning empty value to "display" div in "search.php" file.

           $("#display").html("");

       }

       //If description is not empty.

       else {

           //AJAX is called.

           $.ajax({

               //AJAX type is "Post".

               type: "POST",

               //Data will be sent to "ajax.php".

               url: "ajax.php",

               //Data, that will be sent to "ajax.php".

               data: {

                   //Assigning value of "description" into "search" variable.

                   search: description

               },

               //If result found, this funtion will be called.

               success: function(html) {

                   //Assigning result to "display" div in "search.php" file.

                   $("#display").html(html).show();

               }

           });

       }

   });

});