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
        } }) })})