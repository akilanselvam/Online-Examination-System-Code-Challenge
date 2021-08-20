<div class="app-main__outer">
        <div class="app-main__inner">
                <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div><b>CODE CHALLENGE ANSWERS</b></div>
                    </div>
                </div>
                </div> 

                 <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Submitted Answers's List
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th class="text-left pl-4" width="20%">Language</th>
                                <th class="text-left ">Answers</th>
                                <th class="text-center" width="15%">Submitted Date</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selExam = $conn->query("SELECT * FROM feedbacks_tbl ORDER BY fb_id DESC ");
                                if($selExam->rowCount() > 0)
                                {
                                    while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4"><?php echo $selExamRow['fb_exmne_as']; ?></td>
                                            <td><?php echo $selExamRow['fb_feedbacks']; ?></td>
                                            <td><?php echo $selExamRow['fb_date']; ?></td>
                                        </tr>

                                    <?php }
                                }
                                else
                                { ?>
                                    <tr>
                                      <td colspan="5">
                                        <h3 class="p-3">No Answers Have Been Submitted</h3>
                                      </td>
                                    </tr>
                                <?php }
                               ?>
                            </tbody>
                        </table>
						
                    </div>
					
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
  <button class="dropbtn">Click Here To Evaluate</button>
  
  <div class="dropdown-content">
 <a> <button id="button">C</button> </a>
  <a><button id="buttons">Java</button></a>

  </div>
</div>
<div id="iframeHolder"></div>
<div id="iframeHolders"></div>
                </div>
            </div>   
                    
     
      
        
</div>
         



















