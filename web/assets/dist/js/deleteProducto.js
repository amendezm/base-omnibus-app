/**
 * Created by ecfcode on 01/01/2016.
 */
$(document).ready(function(){

    var $url ;
    $("a.btn-danger").on('click' , function(e) {
        // prevent the link from creating a "#" on the URL
        //e.preventDefault();
        // add a new tag form (see next code block)
        var producto = $(this);

        $url = producto.data("url");
        $("a.btn-delete").attr('href', $url);
        console.log($url);
    });


});
