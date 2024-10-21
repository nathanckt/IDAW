$(document).ready(function(){

    let table;

    //AFFICHAGE DES DONNEES

    $.ajax({
        url: "http://localhost:8888/IDAW/TP4-REST/exo5/users.php",

        method: "GET",

        dataType: "json"
    })

    .done(function(response){
        table = $('.table').DataTable({
            data: response,
            columns: [
                { data: 'id' },    
                { data: 'name' },   
                { data: 'email' }, 
                {
                    data: null, 
                    defaultContent: `
                             <button class="btn  btn-edit" >Modifier</button>
                             <button class="btn  btn-delete">Supprimer</button>
                         `,
                    target: -1
                }
            ]
        });

        
        $('.table').on('click', '.btn-edit', function() {
            let userId = $(this).data('id');
            console.log('Modifier l\'utilisateur avec l\'ID : ' + userId);
        });

        $('.table').on('click', '.btn-delete', function() {
            let id = $(this).closest(".dt-type-numeric");
            console.log('Supprimer l\'utilisateur avec l\'ID : ' + id);
        });

    })

    .fail(function(error){
        alert("La requete s'est terminée en erreur :" + JSON.stringify(error));
    });


    //GESTION DU FORMULAIRE

    $("#addStudentForm").submit(function(event){
        event.preventDefault();

        let nom = $("#inputNom").val();
        let email = $("#inputMail").val();

        let jsonData = JSON.stringify({
            name: nom,
            email: email
        });

        $.ajax({
            url: "http://localhost:8888/IDAW/TP4-REST/exo5/users.php",

            method: "POST",

            data: jsonData, 

            dataType: "json"
        })

        .done(function(response){
            table.row.add({
                id: response.id,
                name: nom,
                email: email
            }).draw();

            $("#addStudentForm")[0].reset();
        })

        .fail(function(error){
            alert("La requete s'est terminée en erreur :" + JSON.stringify(error));
        });

    });

    // GESTION DU BOUTON SUPPRIMER 

});
