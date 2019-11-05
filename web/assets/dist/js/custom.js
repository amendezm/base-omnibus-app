/**
 * Created by ecfcode on 01/01/2016.
 */
$(document).ready(function(){
    $('#sale_saledate').datetimepicker({
        format:'YYYY-MM-DD HH:mm',
        locale:'es'
    });

    $('#sale_requireddate').datetimepicker({
        format:'YYYY-MM-DD HH:mm',
        locale:'es',
        useCurrent: false //Important! See issue #1075
    });

    $("#sale_saledate").on("dp.change", function (e) {
        $('#sale_requireddate').data("DateTimePicker").minDate(e.date);
    });
    $("#requireddate").on("dp.change", function (e) {
        $('#orderdate').data("DateTimePicker").maxDate(e.date);
    });


    $('#sale_shippeddate').datetimepicker({
        format:'YYYY-MM-DD HH:mm',
        locale:'es',
        useCurrent: false //Important! See issue #1075
    });

    $('#country').change(function(){
        console.log($(this).val());
        $.ajax({
            type:"POST",
            url:"//localhost/tpv/ajax/customers_json",
            dataType:'json',
            data:{country:$(this).val()},
            beforeSend: function() {
             $('#ajaxInProgress').addClass('progreso');
            },
            error: function() {
                $('#status').addClass('label-danger').text('Update failed —try again.').slideDown('slow'); 
            },
            success: function(response) {
                //var result = $.evalJSON(response);
                $('.customers_select').html('<option value="none" selected="selected">You must select one sip name</option>');
            
                $.each(response, function(index, value){
                    $('<option>').attr('value',value.customerid).html(value.companyname).appendTo('.customers_select');
                });
                
                $('#status').addClass('label-success').text('Update successful!'); 
            },
            complete: function() { 
                $('#ajaxInProgress').removeClass('progreso');
            }

        });
    });

    //$('#loading-img').hide();
    
    //$('.customers_select').attr('disabled','')

});
var $collectionHolder;
// setup an "add a tag" link
var $addProductLink = $('<a class="link-black text-sm" href="#"><i class="fa fa-plus-circle margin-r-5 text-green"></i> Add new product</a>');
var $addNewColumn = $('<div class="col-sm-12"></div>' ).append($addProductLink);
var $addNewRow = $('<div class="row newfilaAdd"></div>' ).append($addNewColumn);

jQuery(document).ready(function() {
    // Get the ul that holds the collection of tags
    $collectionHolder = $('div.products');

// add a delete link to all of the existing tag form li elements
    $collectionHolder. find('.order' ). each(function() {
        addTagFormDeleteLink($(this));
    });
    // add the "add a tag" anchor and li to the tags ul
    $collectionHolder.after($addNewRow);
    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $collectionHolder.data('index' , $collectionHolder.find(':input' ). length);
    $addProductLink.on('click' , function(e) {
    // prevent the link from creating a "#" on the URL
        e.preventDefault();
    // add a new tag form (see next code block)
        addTagForm($collectionHolder, $addNewRow);
    });
});

function addTagForm($collectionHolder, $addNewRow) {
    // Get the data-prototype explained earlier
    var prototype = $collectionHolder. data('prototype' );
    // get the new index
    var index = $collectionHolder. data('index' );
    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype. replace(/__name__/g, index);
    // increase the index with one for the next item
    $collectionHolder. data('index' , index + 1);

    // Display the form in the page in an li, before the "Add a tag" link li
    //var $addComponentGroup = $('<div class="form-group"></div>');
    //var $addComponentColumn = $('<div class="col-sm-3"></div>' ).append($addComponentGroup);
    var $addComponetRow = $('<div class="row item"></div>' ).append(newForm);

    $addNewRow.before($addComponetRow);
    addTagFormDeleteLink($addComponetRow);
}

function addTagFormDeleteLink($addComponetRow) {
    var $removeFormA = $('<button  title="Remove this product" data-toggle="tooltip" class="btn btn-box-tool" type="button"> <i class="fa fa-trash text-yellow"></i></button>' );

    $addComponetRow.append($removeFormA);
    $removeFormA. on('click' , function(e) {
    // prevent the link from creating a "#" on the URL
        e. preventDefault();
    // remove the li for the tag form
        $addComponetRow. remove();
    });
}