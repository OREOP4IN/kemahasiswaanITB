
<div class="section section-xlg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0 bg-white">
                        <li class="breadcrumb-item"><a href="<?= base_url('beranda') ?>"><?= $this->lang->line('utama:beranda'); ?></a></li>
                        <li class="breadcrumb-item page active" aria-current="page">FAQ</li>
                    </ol>
                </nav>
                <!-- Page Title -->
                <div class="d-block">
                    <h1 class="mb-lg-4 mb-3">Frequently Asked Questions</h1>
                </div>
                <!-- Tab Header -->
                <div class="tab-header">
                    <div class="tab-header--menu">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <?php $i=0; foreach ($faq_kategori as $key): $i++; ?>
                                    <a class="nav-link active" data-toggle="tab" href="<?= base_url('beranda/faq/kategori').'/'.$key->id_faq_kategori.'/'.$key->nama_kategori ?>" role="tab" aria-selected="true"><?= $key->nama_kategori ?></a>
                                <?php endforeach ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Content -->
                <div class="tab-content" id="myTabContent">


                    <div class="tab-pane fade show active" id="beasiswa" role="tabpanel">
                        <div class="d-block">

                            <?php $in = 1; ?>
                            <?php foreach ($faq as $faq_key): ?>
                            <div class="d-block mb-3 collapse-block">
                                <button class="btn btn-light border shadow-sm btn-block text-left p-3" type="button" data-toggle="collapse" data-target="#q<?=$in ?>" aria-expanded="false">
                                   <?= $faq_key->pertanyaan ?>
                                </button>
                                <div class="collapse multi-collapse show shadow-sm" id="q<?=$in ?>">
                                    <div class="card card-collapse card-body pb-2">
                                    <p><?= $faq_key->jawaban ?></p>
                                    </div>
                                </div>
                            </div>

                            <?php $in++; ?>
                            <?php endforeach ?>
                        
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
