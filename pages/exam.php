[<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
 <?php 
    $examId = $_GET['id'];
    $selExam = $conn->query("SELECT * FROM exam_tbl WHERE ex_id='$examId' ")->fetch(PDO::FETCH_ASSOC);
    $selExamTimeLimit = $selExam['ex_time_limit'];
    $exDisplayLimit = $selExam['ex_questlimit_display'];
 ?>


<div class="app-main__outer">
<div class="app-main__inner">
    <div class="col-md-12">
         <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div>
                            <?php echo $selExam['ex_title']; ?>
                            <div class="page-title-subheading">
                              <?php echo $selExam['ex_description']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions mr-5" style="font-size: 20px;">
                        <form name="cd">
                          <input type="hidden" name="" id="timeExamLimit" value="<?php echo $selExamTimeLimit; ?>">
                          <label>Remaining Time : </label>
                          <input style="border:none;background-color: transparent;color:blue;font-size: 25px;" name="disp" type="text" class="clock" id="txt" value="00:00" size="5" readonly="true" />
                      </form> 
                    </div>   
                 </div>
            </div>  
    </div>

   


<div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addFeebacks" method="post">
     <div class="modal-content">
	       <div class="modal-header">


  <h5 class="modal-title" id="exampleModalLabel">Submit Your Coding</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Language As</label><br>
            <?php 
               $selMe = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$exmneId' ")->fetch(PDO::FETCH_ASSOC);
             ?>
            <input type="radio" name="asMe" value="C/C++"> C Language  <br>
            <input type="radio" name="asMe" value="Java"> Java Language
            
          </div>
          <div class="form-group">
           <textarea name="myFeedbacks" class="form-control" rows="3" placeholder="Input your Solution here.."></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
		
        <button type="submit" class="btn btn-primary"  >Submit Your Answer</button>
      </div>
	  
	  </div>
    </div>
   </form>
 
 
Hi! <?php echo $selMe['exmne_fullname']; ?>Please choose the appropriate language:

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    $('#button').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe height="400px" width="100%" src="https://replit.com/@Akil01/VapidLinenDownloads?lite=true" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>');
        }
    });   
});
</script>
 




<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    $('#buttons').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolders').html('<iframe height="400px" width="100%" src="https://replit.com/@Akil01/PaleTemporalSystemresource?lite=true" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>');
        }
    });   
});
</script>
 


<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
<div class="dropdown">
  <button class="dropbtn">Click Here</button>
  
  <div class="dropdown-content">
 <a> <button id="button">C</button> </a>
  <a><button id="buttons">Java</button></a>

  </div>
</div>
<div id="iframeHolder"></div>
<div id="iframeHolders"></div>