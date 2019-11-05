
var $collectionHolder;
// setup an "add a tag" link
var $addProductLink = $('<a class="link-black text-sm" href="#"><i class="fa fa-plus-circle margin-r-5 text-green"></i> Adicionar producto</a>');
var $addNewColumn = $('<div class="col-sm-12"></div>' ).append($addProductLink);
var $addNewRow = $('<div class="row newfilaAdd"></div>' ).append($addNewColumn);

jQuery(document).ready(function() {
    // Get the ul that holds the collection of tags
    $collectionHolder = $('div.receta');

// add a delete link to all of the existing tag form li elements
    $collectionHolder. find('.ingrediente' ). each(function() {
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
    var $addComponetRow = $('<div class="row item"><label class="col-sm-2 control-label"></label></div>' ).append(newForm);

    $addNewRow.before($addComponetRow);
    addTagFormDeleteLink($addComponetRow);
}

function addTagFormDeleteLink($addComponetRow) {
    var $removeFormA = $('<button  title="Remover elemento" data-toggle="tooltip" class="btn btn-box-tool" type="button"> <i class="fa fa-trash text-yellow"></i> Eliminar</button>' );

    $addComponetRow.append($removeFormA);
    $removeFormA. on('click' , function(e) {
    // prevent the link from creating a "#" on the URL
        e. preventDefault();
    // remove the li for the tag form
        $addComponetRow. remove();
    });
}