
//Add new Photo
$("#new").click(function() {
    item = $(this);
    console.log(item);

    $.ajax({
        url: "photo/create",
        type: "get",

        success: function(data) {
            console.log(data);
            $("#data").html(data);
        },
        error: function() {
            console.log("failed");
        }
    });
});



// Update Photo
$(".update").click(function() {
    item = $(this).data();
    console.log(item);

    $.ajax({
        url: item +"/edit",
        type: "get",
        data: {
            item: item,
        },
        success: function(data) {
            console.log(data);
            $("#data").html(data);
        },
        error: function() {
            console.log("failed");
        }
    });
});

$("#change_pass").click(function() {
    item = $(this);
    console.log(item);

    $.ajax({
        url: "/change-pass",
        type: "get",
        success: function(data) {
            console.log(data);
            $("#data").html(data);
        },
        error: function() {
            console.log("failed");
        }
    });
});

// $(".nav-link").click(function() {
//     item = $(this).html();
//     console.log(item);

//     $.ajax({
//         url: "nav_items",
//         type: "get",
//         data: {
//             item: item,
//         },
//         success: function(data) {
//             console.log(data);
//             $("#data").html(data);
//         },
//         error: function() {
//             console.log("failed");
//         }
//     });
// });
