$(document).ready(function(){
   
    tablebody=$("#tab");

    function getTrashData(){
$.ajax({
    method:"POST",
    url:"fetchtrash.php",
    success:function(data){
        tablebody.html(data);
    }
        })
    }
    getTrashData();


    $('tbody').on('click', '.restorebtn', function(){
       let userid=$(this).attr('data-id')
    //    console.log(userid);
        $.ajax({
            method:"POST",
            url:"restore.php",
            data:{
                id:userid
            },
            success:function(data){
             alert(data);
             getTrashData();
          
            } })
         })
    $('tbody').on('click', '.deletebtn', function(){
       let userid=$(this).attr('data-id')
    //    console.log(userid);
        $.ajax({
            method:"POST",
            url:"perdelete.php",
            data:{
                id:userid
            },
            success:function(data){
             alert(data);
             getTrashData();
          
            } })
         })
    
    
    })