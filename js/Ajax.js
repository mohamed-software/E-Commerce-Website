



    var log = console.log;




    $('.leave-comment').submit(function(ev){
    ev.preventDefault();

        var data = {};

        var name    = $('input[id = "name"]').val();
        var email   = $('input[id = "email"]').val();
        var phone   = $('input[id = "phone"]').val();
        var address = $('input[id = "address"]').val();
        var city    = $('input[id = "city"]').val();
        var massage = $('input[id = "massage"]').val();

        $('.leave-comment input').each(function(index , item){
                    data[$(item).attr('id')] = $(item).val();
                })
                
        if(name && email && phone && address && city && massage ){
            $.post('function/send_massage.php' , data , function(data){
            $('.newData').append(data);
            $('.leave-comment input').val('');
            
            })
    }
        
})
        



















    
//     var data = {};

//     $('.leave-comment input').each(function(index , item){
//         data[$(item).attr('name')] = $(item).val();
//     })

//         // log(data);

// $.post('function/send_massage.php' , data , function(data){
//     $('.nweData').append(data);
//     $('from input').val('');

//         // console.log(data);
// })

// })

// $.post('function/send_massage.php' , {

//     name    : $('input[id = "name"]').val(),
//     email   : $('input[id = "email"]').val(),
//     phone   : $('input[id = "phone"]').val(),
//     address : $('input[id = "address"]').val(),
//     city    : $('input[id = "city"]').val(),
//     massage : $('input[id = "massage"]').val(),

// } , function(data){

//     $('.nweData').append(data);
//     // console.log(data);

//     $('from input').val('');
    
//     });


