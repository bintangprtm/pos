<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>frondend</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="../../sources/fontawesome/css/all.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>

<body>
    <div></div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-2 offset-lg-0"><label class="col-form-label">Sales No</label><label class="col-form-label">Transaction Date</label><label class="col-form-label">Staff Name</label><label class="col-form-label">Transaction Status</label></div>
                <div class="col-lg-3"><input type="text"><input type="text"><input type="text"><input type="text"></div>
                <div class="col">
                    <div></div>
                    <div class="row">
                        <div class="col">
                             <button class="btn btn-primary"><i class="fa fa-angle-double-left"></i>Previous</button>
                             <button class="btn btn-primary btn-tab" type="button">Button</button>
                             <button class="btn btn-primary">Next <i class="fa fa-angle-double-right"></i></button>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>

                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>

                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>

                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>

                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>
                            <img src="../../sources/images/img1.png"/>
                        </div>
                    </div>
                    <div></div>
                </div>
            </div>
            <div class="row spacer"></div>
            <div class="row">
                <div class="col-lg-5">
                    <p> Transaction</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Column 1</th>
                                    <th>Column 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cell 1</td>
                                    <td>Cell 2</td>
                                </tr>
                                <tr>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                 <!-- FORM POPUP -->
<div id="modal-wrapper" class="modal">
 <?php include '../settlement-new/index2.html'; ?>  
</div>
 <!-- END OF FORM POPUP -->

                <div class="col-lg-12"></div>
                <div class="col">

                    <button class="btn btn-primary" type="button">SALES ( F2 )</button>
                    <button class="btn btn-primary" type="button">HOLD ( F3 )</button>
                    <button class="btn btn-primary" onclick='document.getElementById("modal-wrapper").style.display="block"' type="button">SETTLEMENT ( F4 )</button>
                    <button class="btn btn-primary" type="button">RECALL ( F5 )</button>
                    <button class="btn btn-primary" type="button">DELETE ( F6 )</button>
                    <button class="btn btn-primary" type="button">RECEIPT ( F7 )</button>                    
                    <button class="btn btn-primary" type="button">DRAWER ( F9 )</button>
                   <!--  <button class="btn btn-primary" type="button">VOID ( F8 ) </button>
                    <button class="btn btn-primary" type="button">Button</button>
                    <button class="btn btn-primary" type="button">Button</button>
                    <button class="btn btn-primary" type="button">Button</button> -->
                </div>
            </div>
        </div>
    </div>
    <div class="row spacer"></div>
    <div></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>