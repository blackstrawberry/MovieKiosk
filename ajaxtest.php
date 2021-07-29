<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<form name="AjaxForm" id="AjaxForm"> 
   <label for="name">이름</label> 
   <input type="text" name="name" id="name" /> <br /> 
   <label for="email">이메일</label> 
   <input type="text" name="email" id="email" /> 
</form> 
<input type="button" value="GET" onclick="AjaxCall('GET');" /> 
<input type="button" value="POST" onclick="AjaxCall('POST');" />

<script type="text/javascript"> 
//<![CDATA[ 
   function createData() { 
      // 1. 자바스크립트 객체 형태로 전달 
      var sendData = {
         name:$('#name').val(), 
         email:$('#email').val()
      }; 
      // 2. jQuery serialize함수를 사용해서 전달 
      //var sendData = $('#AjaxForm').serialize(); 
      //console.log(sendData); 
      return sendData; 
      // 3. 객체를 json 문자열로 만들어서 전달 
      //var sendData = JSON.stringify({name:$('#name').val(), email:$('#email').val()}); 
      //console.log(sendData); 
      //return {"data" : sendDta}; 
   } function AjaxCall(method) { 
      $.ajax({ 
         type: method, 
         url : "ajaxtest1.php?mode=" + method, 
         data: createData(), 
         dataType:"json", 
         success : function(data, status, xhr) {
            console.log("성공"); 
            console.log(data);
         }, 
         error: function(jqXHR, textStatus, errorThrown) { 
            console.log(jqXHR.responseText); 
         } 
      }); 
   } 
   //]]> 
</script>


