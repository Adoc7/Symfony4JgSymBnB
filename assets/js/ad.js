$('#add-image').click(function(){
    // Je récupère le numero des futurs champs que je veux creer
    const index = +$('#widgets-counter').val();
    // Jerécupère leprototype des entrées
    const tmpl = $('#an_images').data('prototype').replace(/__name__/g, index);
    //console.log(tmpl);
    // J'injecte ce codedans la div
   $('#an_images').append(tmpl);  

   $('#widgets-counter').val(index + 1);   
   //Je gère le bouton supprimer
   handleDeleteButtons(); 
});

function handleDeleteButtons(){
    $('button[data-action="delete"]').click(function(){
        const target = this.dataset.target;
        $(target).remove();
    })
}

function updateCounter(){
    const count = +$('#an_images div.form-group').length;
    $('#widgets-counter').val(count);
}
updateCounter();

handleDeleteButtons();