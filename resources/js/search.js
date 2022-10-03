document.querySelector('#search').addEventListener('keyup', function() {
    axios.post('/search', {
        search_text: document.getElementById('search').value
    }).then(function (response) {
        document.getElementById('persons-data').innerHTML = response.data;
    });
});
