// example for calling the PUT /notes/1 URL
var baseUrl = OC.generateUrl('/apps/grafana');
var note = {
    title: 'New note',
    content: 'This is the note text'
};
var id = 1;
$.ajax({
    url: baseUrl + '/notes',
    type: 'POST',
    contentType: 'application/json',
    data: JSON.stringify(note)
}).done(function (response) {
    // handle success
}).fail(function (response, code) {
    // handle failure
});
