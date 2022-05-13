
setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "/usersphp", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                $('.users-list').html(data)
            }
        }
    }
    xhr.send();
}, 500);

