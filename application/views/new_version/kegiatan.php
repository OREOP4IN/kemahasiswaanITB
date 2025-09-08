<div class="section section-xlg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0 bg-white">
                        <li class="breadcrumb-item"><a href="<?= base_url('beranda') ?>"><?= $this->lang->line('utama:beranda'); ?></a></li>
                        <li class="breadcrumb-item page active" aria-current="page"><?= $this->lang->line('utama:kegiatan'); ?></li>
                    </ol>
                </nav>
                <!-- Content -->
                <div class="d-block mt-4 mb-5">
                    <div id="my-calendar" class="mb-5"></div>
                    <input type="hidden"  name="tgl_filter" id="tgl_filter">
                    <div class="d-block">
                        <h3 class="mb-4"><?= $this->lang->line('utama:daftarkegiatan'); ?></h3>
                        <div class="d-block" id="media-list">
                           <!-- NOTES: its empty -->
                        </div>
                        <br>
                       
                        <nav>
                            <ul class="pagination">
                              
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="viewDetailKegiatan" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-xl border-0">
        <div class="modal-content border-0">
            <div class="modal-header bg-dark-navy text-white">
                <h5 class="modal-title">Detail Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="detailkegiatantable">


            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
