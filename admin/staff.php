<?php require("./layout/Header.php") ?>
<?php require("./layout/db.php") ?>

<div id="loader" style="position:fixed;width:100%;height:100%;background-color:#ff965999;z-index: 10000;top:0px;display: none;">
      <div class="spinner-border" style="color:#fff;position:fixed;top:48%;left:49%;" role="status">
        <span class="sr-only"></span>
      </div>
</div>
<div class="container mt-3">
    <div style="display:flex;flex-direction:row;justify-content:space-between">
        <h2 style="color:#922521;font-weight:600">Staff</h2>
        <button type="button" class="btn btn-primary" style="color:white;background:#922521;font-weight:600" data-bs-toggle="modal" data-bs-target="#myModal">
            Add Staff
        </button>
    </div>
    <br>   
    
    <div class="container">
        <div class="row">
        <?php
        $sql = "SELECT * FROM staff WHERE dept='CSE' order by place ASC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mb-5">
            <div class="card shadow-sm" style="width:100%;max-height:530px;min-height:330px">
                <img class="card-img-top" style="height:300px" src="/static/uploads/staff/image/<?php echo($row['pic']) ?>">
                <div class="card-body" style="overflow: scroll;">
                    <p><span style="color:#922521">Name :</span> <?php echo($row['name']) ?></p>
                    <p><span style="color:#922521">Position :</span> <?php echo($row['position']) ?></p>
                    <p><span style="color:#922521">Email :</span> <?php echo($row['email']) ?></p>
                    <p style="color:#922521">PDF :<a target="blind" href="/static/uploads/staff/<?php echo($row['pdf']) ?>">More</a></p>
                    <p><span style="color:#922521">Place :</span> <?php echo($row['place']) ?></p>

                    <div style="display:flex;flex-direction:row;justify-content:flex-end">
                        <form action="/admin/delete/staff.php" onsubmit="document.getElementById('loader').style.display='block'" method="post">
                            <input type="hidden" name="id" value="<?php echo($row["id"]) ?>">
                            <input type="hidden" name="pdf" value="<?php echo($row["pdf"]) ?>">
                            <input type="hidden" name="img" value="<?php echo($row["pic"]) ?>">
                            <button style="position:absolute;bottom:10px;right:10px;border:none;background:none" onclick="return confirm('Do you want to delete?')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3 text-danger" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
            }
        } else {
        ?>
        <p colspan=4 style="text-align:center">No Staff Details found !</p>
        <?php
        }
        ?>
        </div>
    </div>
    <br>
</div>



<div class="modal fade model-sm" id="myModal">
  <div class="modal-dialog ">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Add Staff</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <form action="/admin/create/staff.php" onsubmit="document.getElementById('loader').style.display='block'" method="post" enctype="multipart/form-data">
                <div class=" mb-3">
                    <label for="name" class="form-label">Name <span style="color:red">*</span>:</label>
                    <input required type="text" placeholder="Staff name ..." class="form-control" id="name" name="name">
                </div>

                <div class="mt-3 mb-3">
                    <label for="position" class="form-label">Position <span style="color:red">*</span>:</label>
                    <input required type="text" placeholder="Staff position ..." class="form-control" id="position" name="position">
                </div>

                <div class="mt-3 mb-3">
                    <label for="email" class="form-label">Email <span style="color:red">*</span>:</label>
                    <input required type="email" placeholder="Staff email ..." class="form-control" id="position" name="email">
                </div>

                
                <div class="mt-3 mb-3">
                    <label for="img" class="form-label">Image (jpg,jpeg,png) <span style="color:red">*</span>:</label>
                    <input required type="file" accept="image/*" class="form-control" id="img" name="img">
                </div>
                
                <div class="mt-3 mb-3">
                    <label for="pdf" class="form-label">File (PDF) <span style="color:red">*</span>:</label>
                    <input required type="file" accept="application/pdf" class="form-control" id="pdf" name="pdf">
                </div>
                
                <div class="mt-3 mb-3">
                    <label for="place" class="form-label">Place <span style="color:red">*</span>:</label>
                    <input required type="number" placeholder="HOD-1 / AHOD-2 / AP-3" class="form-control" id="place" name="place">
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