//Login
// $(".btn-submit").click(function(e){
//     alert('add')
//     e.preventDefault();
//     $.ajax({
//         type:'POST',
//         url:'/authenticated',
//         data:$("#loginForm").serialize(),
//         success:function(data){
//             alert(data.success);
//         }
//     });
// });

/*
Add Customer
 */
$(document).on('click','.btn-customer',function(e){
    e.preventDefault();
    $.ajax({
        type:'POST',
        url:'/customer/store',
        data:$("#customer-form").serialize(),
        success:function(response){
            if(response.error){
                // Appending Errors Fields
            }else{
                swal("Good job!", "Customer Added Successful...", "success");
            }
        },
    });
});

/*
Update Customer (Same Form Used)
 */
$(document).on('click','.btn-customer',function(e){
    e.preventDefault();
    $.ajax({
        type:'POST',
        url:'/customer/update',
        data:$("#customer-form").serialize(),
        success:function(response){
            if(response.error){
                // Appending Errors Fields
            }else{
                swal("Good job!", "Customer Updated Successful...", "success");
            }
        },
    });
});

/*
Add Type
 */
$(document).on('click','.btn-customer',function(e){
    e.preventDefault();
    $.ajax({
        type:'POST',
        url:'/type/store',
        data:$("#customer-form").serialize(),
        success:function(response){
            if(response.error){
                // Appending Errors Fields
            }else{
                swal("Good job!", "Type Added Successful...", "success");
            }
        },
    });
});

/*
Update Type (Same Form Used)
 */
$(document).on('click','.btn-customer',function(e){
    e.preventDefault();
    $.ajax({
        type:'POST',
        url:'/type/update',
        data:$("#customer-form").serialize(),
        success:function(response){
            if(response.error){
                // Appending Errors Fields
            }else{
                swal("Good job!", "Type Updated Successful...", "success");
            }
        },
    });
});

/*
Add Product
 */
$(document).on('click','.btn-customer',function(e){
    e.preventDefault();
    $.ajax({
        type:'POST',
        url:'/product/store',
        data:$("#customer-form").serialize(),
        success:function(response){
            if(response.error){
                // Appending Errors Fields
            }else{
                swal("Good job!", "Type Added Successful...", "success");
            }
        },
    });
});

/*
Update Product  (Same Form Used)
 */
$(document).on('click','.btn-customer',function(e){
    e.preventDefault();
    $.ajax({
        type:'POST',
        url:'/product/update',
        data:$("#customer-form").serialize(),
        success:function(response){
            if(response.error){
                // Appending Errors Fields
            }else{
                swal("Good job!", "Type Updated Successful...", "success");
            }
        },
    });
});