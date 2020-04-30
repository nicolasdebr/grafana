// example for calling the PUT /notes/1 URL
var baseUrl = OC.generateUrl('/apps/grafana');
var note = {
    title: 'New note',
    content: 'This is the note text'
};

$.ajax({
    url: baseUrl + '/notes',
    type: 'POST',
    contentType: 'application/json',
    data: JSON.stringify(note)
}).done(function (response) {
    alert(response);
}).fail(function (response, code) {
    // handle failure
});
