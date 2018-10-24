<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>frondend</title>
    <link rel="stylesheet" href="../../pages/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../pages/frontend-new/assets/css/styles.css">
    <link rel="stylesheet" href="../../sources/fontawesome/css/all.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>

<body>
    <div></div>
    <div>
        <div class="container page-main">
            <div class="row">

                <div class="col-40 transaction-panel">
                    <div class="row-in">
                        <table>
                        <tr>
                            <td><label class="col-form-label mg-top1">Sales No</label></td>
                            <td class="between"></td>
                            <td><input type="text" placeholder="Sales No"></td>
                        </tr><tr>
                            <td><label class="col-form-label mg-top1">Transaction Date</label></td>
                            <td class="between"></td>
                            <td><input type="text" placeholder="02/10/2018 12:24"></td>
                        </tr><tr>
                            <td><label class="col-form-label mg-top1">Staff Name</label></td>
                            <td class="between"></td>
                            <td><input type="text" placeholder="Staff Name"></td>
                        </tr><tr>
                            <td><label class="col-form-label mg-top1">Transaction Status</label></td>
                            <td class="between"></td>
                            <td><input type="text" placeholder="On Process"></td>
                        </tr><tr>
                        </table>

                        
                    </div>

                    <div class="row-in col-40 mg-top-5">
                        <p> Transaction</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="th-header">Item Name</th>
                                        <th class="th-header">Qty</th>
                                        <th class="th-header">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Coca-Cola</td>
                                        <td>2</td>
                                        <td>$5.0</td>
                                    </tr>
                                    <tr>
                                        <td>Bread</td>
                                        <td>1</td>
                                        <td>$0.8</td>
                                    </tr>
                                    <tr>
                                        <td>Milk</td>
                                        <td>4</td>
                                        <td>$5.2</td>
                                    </tr>
                                    <tr>
                                        <td>Coca-Cola</td>
                                        <td>2</td>
                                        <td>$5.0</td>
                                    </tr>
                                    <tr>
                                        <td>Bread</td>
                                        <td>7</td>
                                        <td>$0.8</td>
                                    </tr>
                                    <tr>
                                        <td>Milk</td>
                                        <td>5</td>
                                        <td>$1.2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row-in price-panel">
                        <div class="col-40 offset-lg-0">
                            <p>TOTAL</p>
                            <!-- <p>DISC<p>
                            <p>GST</p>
                            <p>CHANGE<p> -->
                        </div>
                        <div class="col-60">
                            <p>$18</p>
                            <!-- <p>$0<p>
                            <p>$0.2</p>
                            <p>$0<p> -->
                        </div>
                    </div>

                </div>

                <div class="col-50 item-panel">
                    <div></div>
                    
RESTO
                 <div class="row-in-1">
                    
<div id="modal-wrapper" class="modal">
 <?php include '../settlement-barubgt/index.html'; ?>  
</div>
<fieldset class="col-50 mg-top-10 container-operation" style="height: auto;min-height: 10px; width: 88%;"><legend style="width: 3%; margin-bottom: 0;"><a id href="#colapse" data-toggle="collapse" > <i class="fa fa-angle-down pull down"></i></a></legend>
    <div id="colapse">
                <button class=" btn-primary btn-operation" type="button">SPLIT<br>( F2 )</button>
                <button class=" btn-primary btn-operation" type="button">HOLD<br>( F3 )</button>
                <button class=" btn-warning btn-operation" type="button" onclick='document.getElementById("modal-wrapper").style.display="block"'>SETTLEMENT<br>( F4 )</button>
                <button class=" btn-primary btn-operation" type="button">RECALL<br>( F5 )</button>
                <button class=" btn-danger btn-operation" type="button">DELETE<br>( F6 )</button>
                <button class=" btn-primary btn-operation" type="button">RECEIPT<br>( F7 )</button>
                <button class=" btn-primary btn-operation" type="button">VOID<br>( F8 )</button>
             </div>
  </fieldset>
                </div>
            </div>

        </div>

        <div class="row spacer"></div>
        <div class="row">
            <div class="col-lg-5">

            </div>
            <div class="col-lg-12"></div>
           
            </div>
        </div>
    </div>
    <div class="row spacer"></div>
    <div></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>