$(document).ready(function () {
    $('#lists').load('lists.php');

    function addTask() {
        var text = $('#tasks').val().trim();
        if(text != ""){
            $.ajax({
            url: 'add_task.php',
            type: 'POST',
            data: 'name=' + text,
            success: function () {
                $('#tasks').val("");
                $('#lists').hide().load('lists.php').fadeIn('slow');
            }
        });
        }
        
    }

    $('#add').click(function () {
        addTask();
    });

})