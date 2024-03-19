var beni = [];
var users = [];
function goods() { 
    $.ajax({
        url: 'api/getIlleciti.php', 
        dataType: 'json', //restituisce un oggetto JSON
        complete: function (obj, stato) {
            console.log("RISPOSTA", obj.responseJSON);
           
            var righe = obj.responseJSON;
            beni = righe;
            for (i = 0; i < righe.length; i++) {
                var riga = righe[i];
                var element = "<td>" + riga.id + "</td>";
                element += "<td>" + riga.segnalatore + "</td>";
                element += "<td>" + riga.segnalato + "</td>";
                element += "<td>" + riga.data + "</td>";
                element += "<td>" + riga.motivazione + "</td>";
                element += '<td><button type="button" class="btn btn-sm btn-outline-secondary"  onClick="viewIlleciti(' + i +')"><i class="fa-solid fa-desktop"></i></td>';
                $("<tr/>")
                    .append(element)
                    .appendTo("#tabella");
            }
        }
    });
}

function viewIlleciti(id) {
    console.log(beni[id]);
    var illecito = beni[id];
    $("#view-segnalatore").text(illecito.segnalatore);
    $("#view-segnalato").text(illecito.segnalato);
    $("#view-data").text(illecito.data);
    $("#view-motivazione").text(illecito.motivazione);
    $("#view-testo").text(illecito.testo);
    $('#viewIlleciti').modal('show');
}

function usersCall() {
    $.ajax({
        url: 'api/getEmployees.php',
        dataType: 'json', //restituisce un oggetto JSON
        complete: function (user) {
            console.log("RISPOSTA", user.responseJSON);
            users = user.responseJSON;
            for (i = 0; i < users.length; i++) {
                var riga = users[i];
                var element = "<option value='" + riga.id + "'>" + riga.nome + " " + riga.cognome + "</option>";
           
                $("#user-gest")
                    .append(element);
            }
            
        }
    });
}


$(document).ready(function () {
    usersCall();
    goods();
});
    
           