var hasNewNotifications = true; // this is a variable that php should be changing on runtime;

var primaryModal = $('#notif');


function toggleModal (modal) {
    if(modal.hasClass('modal--show')) {
        modal.addClass('modal--hidden').removeClass('modal--show');
    } else {
        modal.removeClass('modal--hidden').addClass('modal--show');
    }
}

$('#close').on('click', function(event){
    event.preventDefault();
    toggleModal($(this).parent());
    hasNewNotifications = false; // send also an ajax request to change the status of the notifications
});

// simulate has new notifications

if(hasNewNotifications === true) {
    toggleModal(primaryModal);
}