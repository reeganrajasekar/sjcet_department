<?php require("./layout/Header.php") ?>
<?php require("./layout/db.php") ?>

<div id="loader" style="position:fixed;width:100%;height:100%;background-color:#ff965999;z-index: 10000;top:0px;display: none;">
      <div class="spinner-border" style="color:#fff;position:fixed;top:48%;left:49%;" role="status">
        <span class="sr-only"></span>
      </div>
</div>
<div class="container mt-3">
    <div style="display:flex;flex-direction:row;justify-content:space-between">
        <h2 style="color:#922521;font-weight:600">Achievement</h2>
        <button type="button" class="btn btn-primary" style="color:white;background:#922521;font-weight:600" data-bs-toggle="modal" data-bs-target="#myModal">
            Add Achievement
        </button>
    </div>
    <br>          
    <table class="table table-striped table-bordered">
        <thead style="text-align:center">
            <tr>
                <th>#</th>
                <th>Person</th>
                <th>Name</th>
                <th>Content</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            

            $results_per_page = 10;   
            $query = "select *from ac WHERE dept='$department'";  
            $result = mysqli_query($conn, $query);  
            $number_of_result = mysqli_num_rows($result);  
            $number_of_page = ceil ($number_of_result / $results_per_page);  

            if (!isset ($_GET['page']) ) {  
                $page = 1;  
            } else {  
                $page = $_GET['page'];  
            } 

            $page_first_result = ($page-1) * $results_per_page; 

            $sql = "SELECT * FROM ac WHERE dept='$department' order by id DESC LIMIT " . $page_first_result . ',' . $results_per_page;
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
                <td ><?php echo($row["title"]) ?></td>
                <td ><?php echo($row["name"]) ?></td>
                <td ><?php echo($row["content"]) ?></td>
                <td >
                    <script>
                        document.write(moment("<?php echo($row["ac_date"])?>").format('ll'))
                    </script> 
                </td>
                <td style="text-align:center">
                    <form onsubmit="document.getElementById('loader').style.display='block'" action="/admin/delete/achievement.php" method="post">
                        <input type="hidden" name="id" value="<?php echo($row["id"]) ?>">
                        <input type="hidden" name="pdf" value="<?php echo($row["pdf"]) ?>">
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
                <td colspan=6 style="text-align:center">No Achievement Details found !</td>
            </tr>

            <?php
            }
            ?>
            
        </tbody>
    </table>

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
            <h4 class="modal-title">Add Achievement</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <form action="/admin/create/achievement.php" onsubmit="document.getElementById('loader').style.display='block'" method="post" enctype="multipart/form-data">
                
                <div class="mt-3 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Person Type <span style="color:red">*</span>:</label>
                    <select required class="form-select" name="title" aria-label="Default select example">
                        <option selected>Select Person type</option>
                        <option value="Student">Student</option>
                        <option value="Staff">Staff</option>
                    </select>
                </div>

                <div class="mt-3 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Person Name <span style="color:red">*</span>:</label>
                    <input required type="text" class="form-control" id="pdf" placeholder="Student/Staff Name" name="name">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Content <span style="color:red">*</span>:</label>
                    <textarea maxlength="500" placeholder="Achievement Details ..." required name="content" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>

                <div class="mt-3 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Date <span style="color:red">*</span>:</label>
                    <input required type="date" class="form-control" id="pdf" placeholder="Date :" name="ac_date">
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