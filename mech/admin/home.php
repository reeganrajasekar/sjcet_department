<?php require("./layout/Header.php") ?>

<div id="loader" style="position:fixed;width:100%;height:100%;background-color:#ff965999;z-index: 10000;top:0px;display: none;">
      <div class="spinner-border" style="color:#fff;position:fixed;top:48%;left:49%;" role="status">
        <span class="sr-only"></span>
      </div>
</div>
<div class="container mt-3">
    <div style="display:flex;flex-direction:row;justify-content:space-between">
        <h2 style="color:#922521;font-weight:600">Image Slider </h2>
    </div>
    <br>  
    <div class="table-responsive">        
    <table class="table table-striped table-bordered">
        <thead style="text-align:center">
            <tr>
                <th>#</th>
                <th>Image (2000px X 680px)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align:center">1</td>
                <td >
                    <img src="/static/images/1.jpg" width="100%">
                </td>
                <td style="text-align:center">
                    <form onsubmit="document.getElementById('loader').style.display='block'" enctype="multipart/form-data" action="/admin/create/img.php" method="post">
                        <input type="hidden" name="id" value="1">
                        <input type="file" required accept="image/*" name="img" class="form-control"><br>
                        <button onclick="return confirm('Do you want to Edit?')" class="btn btn-secondary">Upload</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td style="text-align:center">2</td>
                <td >
                    <img src="/static/images/2.jpg" width="100%">
                </td>
                <td style="text-align:center">
                    <form onsubmit="document.getElementById('loader').style.display='block'" enctype="multipart/form-data" action="/admin/create/img.php" method="post">
                        <input type="hidden" name="id" value="2">
                        <input type="file" required accept="image/*" name="img" class="form-control"><br>
                        <button onclick="return confirm('Do you want to Edit?')" class="btn btn-secondary">Upload</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td style="text-align:center">3</td>
                <td >
                    <img src="/static/images/3.jpg" width="100%">
                </td>
                <td style="text-align:center">
                    <form onsubmit="document.getElementById('loader').style.display='block'" enctype="multipart/form-data" action="/admin/create/img.php" method="post">
                        <input type="hidden" name="id" value="3">
                        <input type="file" required accept="image/*" name="img" class="form-control"><br>
                        <button onclick="return confirm('Do you want to Edit?')" class="btn btn-secondary">Upload</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td style="text-align:center">4</td>
                <td >
                    <img src="/static/images/4.jpg" width="100%">
                </td>
                <td style="text-align:center">
                    <form onsubmit="document.getElementById('loader').style.display='block'" enctype="multipart/form-data" action="/admin/create/img.php" method="post">
                        <input type="hidden" name="id" value="4">
                        <input type="file" required accept="image/*" name="img" class="form-control"><br>
                        <button onclick="return confirm('Do you want to Edit?')" class="btn btn-secondary">Upload</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td style="text-align:center">5</td>
                <td >
                    <img src="/static/images/5.jpg" width="100%">
                </td>
                <td style="text-align:center">
                    <form onsubmit="document.getElementById('loader').style.display='block'" enctype="multipart/form-data" action="/admin/create/img.php" method="post">
                        <input type="hidden" name="id" value="5">
                        <input type="file" required accept="image/*" name="img" class="form-control"><br>
                        <button onclick="return confirm('Do you want to Edit?')" class="btn btn-secondary">Upload</button>
                    </form>
                </td>
            </tr>
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
            <h4 class="modal-title">Add News</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <form action="/admin/create/news.php" onsubmit="document.getElementById('loader').style.display='block'" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">News <span style="color:red">*</span>:</label>
                    <textarea maxlength="500" required name="content" class="form-control" id="exampleFormControlTextarea1" placeholder="Type News here ..." rows="2"></textarea>
                </div>

                <div class="mt-3 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">File (pdf) <span style="color:red">*</span>:</label>
                    <input required type="file" accept="application/pdf" class="form-control" id="pdf" placeholder="File ( PDF )" name="pdf">
                </div>

                <div class="mt-3 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Date <span style="color:red">*</span>:</label>
                    <input required type="date" class="form-control" id="pdf" placeholder="Date :" name="news_date">
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