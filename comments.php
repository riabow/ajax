<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>


<script type="text/javascript">

  function showComments(){
   
     $.ajax({
          type: 'POST',
          url: 'getcmt.php',
          success: function(result){
            $("#cmt").html(result);
          }


  })}

</script>
<script type="text/javascript">   

  function checkEmail( email ){
     var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
     is_valid = re.test(email) ;
     return is_valid;

  }
</script>
<script type="text/javascript">   
  function checkForm(form) {
    console.log(form);
    if($.trim(this.sname.value) == "") {
      alert("Заполните поле Имя");
      this.sname.focus();
      return false;
    }    
    if($.trim(this.tcomment.value)  == "") {
      alert("Заполните поле Комментрий");
      this.tcomment.focus();
      return false;
    } //else { alert('comment OK!' ); }


    if(!checkEmail(this.email.value)
      ) {
      alert("Введите правильный Email");
      this.email.focus();
      return false;
    }
   
 
     var values = $(form).serialize();
     $.ajax({
          type: 'POST',
          url: 'ajax.php',
          data: values, 
          success: function(result){
            alert ( result);
            showComments();
            document.getElementById("tcomment").value="";
            // document.getElementById("sname").value="";
            // document.getElementById("email").value="";
            //location.reload(); 
           // $("#div1").html(result);
          }
       

    });
     return false; // очень важно Иначе Мозилла начинает тупить
  }

</script>
<script type="text/javascript">   

  $(document).ready(function() {
       showComments();
   });

</script>
<form method="POST" action="" onsubmit="return checkForm(this);">

<fieldset>
<legend>Добавить комментарий</legend>

<p>Имя: <input type="text" size="32" name="sname" id="sname" >
</p>

<p>Email: <input type="text" size="32" id="email" name="email"   ">
</p>

<p>Комментарий: 
  <textarea  name="tcomment" id="tcomment"   ></textarea>
</p>

<p><input type="submit"  value="Добавить комментарий" ></p>
</fieldset>
</form>

<div id="cmt"></div>
