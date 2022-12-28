import './bootstrap';


import Echo from 'laravel-echo'
import Pusher from 'pusher-js'
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    wsHost: window.location.hostname,
    wsPort: 6001,
    forceTLS: false,
    disableStats: true
});
window.Echo.join('EventTriggered')
    .here((users) => {
        //console.log(users);
    })
    .joining((user) => {
       // console.log(user.name);
    })
    .leaving((user) => {
      //  console.log(user.name);
    });

    //Online-user
window.Echo.join('online')
.here((users) => {
    let userId =$('meta[name=user-id]').attr('content');
    //console.log(userId);
    users.forEach(user => {
            if(user.id == userId){
                return ;
            }
            $("#online-users").append(`<li id="user-${user.id}" class="list-group-item"><span class="icon icon-circle text-success"></span>${user.name}`)


    });

})
.joining((user) => {
    // var ul = document.getElementById("online-users");
    // var li = document.createElement('li');
    // li.appendChild(document.createTextNode(user.name));
    // li.setAttribute("class","list-group-item");
    // li.setAttribute("id","user-"+user.id);
    // ul.appendChild(li);
    $("#online-users").append(`<li id="user-${user.id}" class="list-group-item"><span class="icon icon-circle text-success"></span>${user.name}`)

})
.leaving((user) => {
    $("#user-"+user.id).remove();
});


let count = 0;
    window.Echo.join('online')
    .here((users) => {
        users.forEach(user => {count++});
        console.log(count)
        document.getElementById("counter").innerHTML= `${count}`;
    }).joining((user) => {
       count++;
       document.getElementById("counter").innerHTML= `${count}`;

    })
    .leaving((user) => {
        count--;
        document.getElementById("counter").innerHTML= `${count}`;

    })


