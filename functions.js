function deleteTask(id) {
    var id = id;
    $.ajax({
        url: 'delete_task.php',
        type: 'POST',
        data: 'id=' + id,
        success: function () {
            $('#lists').load('lists.php');
        }
    })
}

function doneTask(id) {
    var id = id;
    $.ajax({
        url: 'done_task.php',
        type: 'POST',
        data: 'id=' + id,
        success: function () {
            $('#lists').load('lists.php');
        }
    })
}

function editTask(id) {
    var tt = "#input_task"+id;
    var text = $(tt).val().trim();
    $.ajax({
        url: 'update_task.php',
        type: 'POST',
        data: {
            'id': id,
            'name': text
        },
        success: function () {
            $('#lists').hide().load('lists.php').fadeIn('slow');
        }
    });
}

function show(id) {
    var divname = "#form" + id;
    var text = "#text" + id;
    var edit = "#edit" + id;
    var back = "#back" + id;

    $(divname).fadeOut('slow');
    $(text).fadeIn('slow');

    $(edit).fadeOut('fast');
    $(back).fadeIn('fast');
}

function hide(id) {
    var divname = "#form" + id;
    var text = "#text" + id;
    var edit = "#edit" + id;
    var back = "#back" + id;

    $(text).fadeOut('slow');
    $(divname).fadeIn('slow');

    $(back).fadeOut('fast');
    $(edit).fadeIn('fast');
}