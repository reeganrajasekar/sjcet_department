<?php require("./layout/Header.php") ?>
<?php require("./layout/db.php") ?>

<div id="loader" style="position:fixed;width:100%;height:100%;background-color:#ff965999;z-index: 10000;top:0px;display: none;">
      <div class="spinner-border" style="color:#fff;position:fixed;top:48%;left:49%;" role="status">
        <span class="sr-only"></span>
      </div>
</div>
<div class="container mt-3">
    <div style="display:flex;flex-direction:row;justify-content:space-between">
        <h2 style="color:#922521;font-weight:600">Regulations</h2>
        <button type="button" class="btn btn-primary" style="color:white;background:#922521;font-weight:600" data-bs-toggle="modal" data-bs-target="#myModal">
            Add Regulation
        </button>
    </div>
    <br>  
    <div class="table-responsive">        
    <table class="table table-striped table-bordered">
        <thead style="text-align:center">
            <tr>
                <th>#</th>
                <th>Regulation</th>
                <th>Regulation File</th>
                <th>Syllabus File</th>
                <th>Open Elective File</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            

            $results_per_page = 10;   
            $query = "select *from sub WHERE dept='$department'";  
            $result = mysqli_query($conn, $query);  
            $number_of_result = mysqli_num_rows($result);  
            $number_of_page = ceil ($number_of_result / $results_per_page);  

            if (!isset ($_GET['page']) ) {  
                $page = 1;  
            } else {  
                $page = $_GET['page'];  
            } 

            $page_first_result = ($page-1) * $results_per_page; 

            $sql = "SELECT * FROM sub WHERE dept='$department' order by reg DESC LIMIT " . $page_first_result . ',' . $results_per_page;
            $result = $conn->query($sql);
            if($_GET['page'] && $_GET['page']>1){
                $i = $_GET['page']*10;
            }else{
                $i=0;
            }
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $i++;
            ?>
            
            <tr>
                <td style="text-align:center"><?php echo($i) ?></td>
                <td ><?php echo($row["reg"]) ?></td>
                <td ><a href="/static/uploads/reg/reg/<?php echo($row['reg_file']) ?>" target="blank">Click here</a></td>
                <td ><a href="/static/uploads/reg/sy/<?php echo($row['sy_file']) ?>" target="blank">Click here</a></td>
                <td ><a href="/static/uploads/reg/oe/<?php echo($row['oe_file']) ?>" target="blank">Click here</a></td>
                <td style="text-align:center">
                    <form onsubmit="document.getElementById('loader').style.display='block'" action="/admin/delete/curriculum.php" method="post">
                        <input type="hidden" name="id" value="<?php echo($row["id"]) ?>">
                        <input type="hidden" name="reg_file" value="<?php echo($row["reg_file"]) ?>">
                        <input type="hidden" name="sy_file" value="<?php echo($row["sy_file"]) ?>">
                        <input type="hidden" name="oe_file" value="<?php echo($row["oe_file"]) ?>">
                        <button onclick="return confirm('Do you want to delete?')" style="border:none;background:none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash3 text-danger" viewBox="0 0 16 16">
                              <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>

            <?php
                }
            } else {
            ?>

            <tr>
                <td colspan=7  style="text-align:center">No Regulation Details found !</td>
            </tr>

            <?php
            }
            ?>
            
        </tbody>
    </table>
    </div>

    <p style="text-align:center;line-height:3.5;font-size:16px">
        <?php 
        for($page = 1; $page<= $number_of_page; $page++) { 
            if($page==$_GET['page']){
                echo '<a style="margin:5px;padding:14px;border-radius:5px;border:2px solid #922521;background-color:#922521;font-weight:600;color:#fff;text-decoration:none" href = "?page=' . $page . '">' . $page . ' </a>';  
            }else{
                echo '<a style="margin:5px;padding:8px;border-radius:5px;border:1px solid #aaa;color:#444;text-decoration:none" href = "?page=' . $page . '">' . $page . ' </a>';  
            }
        }  
        ?>
    </p>
    <br>
</div>



<div class="modal fade model-sm" id="myModal">
  <div class="modal-dialog ">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Add Regulation</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <form action="/admin/create/curriculum.php" enctype="multipart/form-data" onsubmit="document.getElementById('loader').style.display='block'" method="post" >

                <div class="mt-1 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Regulation<span style="color:red">*</span>:</label>
                    <input required type="number" placeholder="YYYY" class="form-control" name="reg">
                </div>

                <div class="mt-3 mb-3">
                    <label for="pdf" class="form-label">Regulation File (PDF) <span style="color:red">*</span>:</label>
                    <input required type="file" accept="application/pdf" class="form-control" id="pdf" name="reg_file">
                </div>

                <div class="mt-3 mb-3">
                    <label for="pdf" class="form-label">Syllabus File (PDF) <span style="color:red">*</span>:</label>
                    <input required type="file" accept="application/pdf" class="form-control" id="pdf" name="sy_file">
                </div>

                <div class="mt-3 mb-3">
                    <label for="pdf" class="form-label">Open Elective File (PDF) <span style="color:red">*</span>:</label>
                    <input required type="file" accept="application/pdf" class="form-control" id="pdf" name="oe_file">
                </div>

                <button class="btn mt-2 mb-2" style="text-align:center;width:100%;height:50px;background-color:#922521;color:white;font-weight:800">Create</button>
            </form>
        </div>
    </div>
  </div>
</div>

<script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    if(urlParams.get('err')){
      document.write("<div id='err' style='position:fixed;bottom:30px; right:30px;background-color:#FF0000;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('err')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("err").style.display="none"
    }, 3000)
</script>

<script>
    if(urlParams.get('msg')){
      document.write("<div id='msg' style='position:fixed;bottom:30px; right:30px;background-color:#4CAF50;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('msg')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("msg").style.display="none"
    }, 3000)
</script>


<?php require("./layout/Footer.php") ?>