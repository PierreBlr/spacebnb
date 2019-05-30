$('#add-image').click(function(){
    // Je récupère le numéro des futurs champs que j'ajoute
    const index = +$('#widgets-counter').val();

    console.log(index);

    // Je récupère le prototype des entrées
    const tmpl = $('#ad_images').data('prototype').replace(/__name__/g, index);
    console.log(tmpl);

    $('#widgets-counter').val(index+1);

    //supprimer
    deleteButtons();
    
});

function deleteButtons() {
    $('button[data-action="delete"]').click(function(){
        const target =  this.dataset.target;
        console.log(target);
        $(target).remove();
    });
}

    function updateCounter() {
    const count = +$('#ad_images div.form-group').length;

    ("#widgets-counter").val(count);
    }

    updateCounter();
    deleteButtons();
}