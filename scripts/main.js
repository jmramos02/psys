var dropdownParent = $('.has-dropdown');
var dropdown = dropdownParent.find('ul');

dropdown.addClass('dropdown--hidden');

dropdownParent.find('.dropdown__trigger').on('click', function(event){
    event.preventDefault();
    if(dropdown.hasClass('dropdown--hidden')) {
        dropdown.removeClass('dropdown--hidden').addClass('dropdown--show');
    } else {
        dropdown.removeClass('dropdown--show').addClass('dropdown--hidden');
    }
})

function ConfirmDelete(){
    if (confirm("Are you sure to delete this employee?")){
		window.location.href='#';
    }

    else{
    	window.location.href='employeemanagement.php';
    }
}