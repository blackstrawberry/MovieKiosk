<html>
<%@ page language="java" contentType="text/html; charset=UTF-8"
   pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt"%>
<%@ taglib prefix="fn" uri="http://java.sun.com/jsp/jstl/functions"%>
<c:set var="path" value="${pageContext.request.contextPath}"/>
<jsp:include page="/WEB-INF/views/common/header.jsp">
    <jsp:param value="오다가다 타는 카풀" name="pageTitle"/>
</jsp:include>
 
<style>
    #container{
        text-align: center;
    }
</style>
 
​<section id="container">
    <div id="title">
        <h2>신고 내역</h2>
    </div>
    <table class="table table-hover">
        <tr>
            <td>신고한 회원</td>
            <td>신고 당한 회원</td>
            <td>신고 내용</td>
            <td>신고 날짜</td>
            <td>처리</td>
        </tr>
        <c:forEach var="list" items="${notifyList }">
            <tr>
                <td>${list.NOTIFYID }</td>
                <td>${list.NONNOTIFYID }</td>
                <td>${list.NCONTENT }</td>
                <td>${list.NDATE }</td>
                <td>
                <button class="btn btn-success" onclick="deleteNotify('${list.NOTIFYID}','${list.NONNOTIFYID}','${list.NCONTENT}');">경미</button> &nbsp; 
                <button data-toggle="modal" data-target="#insertBlack"  data-notifyid="${list.NOTIFYID }" data-nonnotifyid="${list.NONNOTIFYID }" data-ncontent="${list.NCONTENT }" class="btn btn-danger">블랙</button>
                </td>
            </tr>
        </c:forEach>
    </table>
    
<!-- Modal -->
<div class="modal fade" id="insertBlack" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">몇일 블랙 시킬지 날짜를 입력하세요. </h5>
      </div>
      <div class="modal-body">
        <input type="text" id="blackCount" placeholder="1일 일경우 => 1">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
        <button type="button" class="btn btn-primary" onclick="insertBlack();">확인</button>
      </div>
    </div>
  </div></div>
  
    ${pageBar }
</section>
 
<script>
 
    var NOTIFYID="";
    var NONNOTIFYID="";
    var NCONTENT="";
    
    $(document).ready(function() {     
        $('#insertBlack').on('show.bs.modal', function(event) {          
            NOTIFYID = $(event.relatedTarget).data('notifyid');
            NONNOTIFYID = $(event.relatedTarget).data('nonnotifyid');
            NCONTENT = $(event.relatedTarget).data('ncontent');
        });
    });
    
    
    function deleteNotify(notifyid,nonnotifyid,ncontent)
    {
        location.href='${path}/admin/deleteNotify.do?notifyId='+notifyid+'&nonNotifyId='+nonnotifyid+'&nContent='+ncontent;
    }
    
    function insertBlack()
    {
        var blackCount = $('#blackCount').val();
        location.href='${path}/admin/insertBlack.do?notifyId='+NOTIFYID+'&nonNotifyId='+NONNOTIFYID+'&nContent='+NCONTENT+'&blackCount='+blackCount;
    }
</script>
 
​
<jsp:include page="/WEB-INF/views/common/footer.jsp"></jsp:include>
</html>
​
