$(document).ready(function () {

/*    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }*/
    console.log("hello");
    $('.done').on("click", function () {

/*
       console.log($(this).attr('id'));
*/
  /*  let id = $(this).attr('id');
    let myurl = $('#myurl').attr('url');

        $.ajax(
        {
            url: myurl,
            data: id,
            type: "DELETE",
            dataType: "JSON",
            success: function ()
            {
                console.log("deleted")
            }
        }
    );

   */
        let id = $(this).data("id");
        let $tr = $(this).closest('tr');
        let token = $("meta[name='csrf-token']").attr("content");

        $.ajax(
            {
                url: "del/"+id,
                type: 'DELETE',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function (){
                    console.log("it Works");

                    $tr.find('td').remove();
                }
            });
    });


});