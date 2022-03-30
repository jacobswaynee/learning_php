
if( window.location.search){
    let name =  window.location.search.replace('?name=', '');
    document.getElementById('name').value = name;
    alert('Awesome, '+name+ ' your application has been sent');
}
