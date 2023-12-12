$(document).ready(function(){
    form=$("#form");
    id=$("#id");
    uname=$("#uname");
    email=$("#email");
    pass=$("#pass");
    btn=$("#btn");
    tablebody=$("#tab");

    function getData(){
$.ajax({
    method:"POST",
    url:"fetch.php",
    success:function(data){
        tablebody.html(data);
    }
        })
    }
    getData();

    btn.on("click",function(e){
        e.preventDefault();
    $.ajax({
        method:"POST",
        url:"insert.php",
        data:{
            id:id.val(),
            uname:uname.val(),
            email:email.val(),
            pass:pass.val(),
        },
        success:function(data){
         alert(data);
          getData();
          form.trigger('reset');
        } 
    }) 
    })


    $('tbody').on('click', '.deletebtn', function(){
       let userid=$(this).attr('data-id')
    //    console.log(userid);
        $.ajax({
            method:"POST",
            url:"trash.php",
            data:{
                id:userid
            },
            success:function(data){
             alert(data);
             getData();
          
            } })
         })

    $('tbody').on('click', '.updatebtn', function(){
       let userid=$(this).attr('data-id')
    //    console.log(userid);
        $.ajax({
            method:"POST",
            url:"update.php",
            data:{
                id:userid
            },
            success:function(data){
                // console.log(data)
                
                data=JSON.parse(data);
                id.val(data.id);
                uname.val(data.uname);
                email.val(data.email);
                pass.val(data.pass);
          
            } })
         })
    
    
    })