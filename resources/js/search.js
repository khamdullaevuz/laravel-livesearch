document.querySelector('#search').addEventListener('keyup', function() {
    axios.post('/search', {
        search_text: document.getElementById('search').value
    })
        .then( response => document.getElementById('persons-data').innerHTML = response.data)
        .catch( error => console.log(error) );
});
