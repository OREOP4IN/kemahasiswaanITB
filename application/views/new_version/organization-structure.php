<style type="text/css">
   .orgchart .middle-level .content {
     height: 40px;
   }
   .orgchart .top-level .content {
    border-color: #006699;
    width: 300px;
    height: 30px;
    font-size: 9px;
    padding: 3%;
}
.orgchart .top-level .title {
    background-color: #006699;
    width: 300px;
    height: 30px;
    font-size: 9px;
    padding: 3%;
}
</style>

<div class="section section-xlg bg-primary">
    <div class="container" style="max-width: 100%;">
        <div class="row justify-content-center">
            <div class="col-md-12">
              
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="d-block px-lg-12">
                            <center>
                            <h1 class="mb-4"><?= $this->lang->line('utama:strukturorganisasi'); ?></h1>
                         
                            <div class="d-block p-2 bg-lighter-grey rounded border" id="chart-container" style="width: 100%; overflow: scroll!important; background-color: white;">
                              
                            </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



