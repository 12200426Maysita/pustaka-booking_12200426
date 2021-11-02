<?=$this->extend('dasar_tampilan')?>

<?=$this->section('WebProgramming')?>
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Collapsed content</h5>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Beranda</h3> 
            </div>
            <div class="card-body">
                Halo ini beranda<br/>
                Email yang diisikan : <?=$email?> <br/>
                Password : <?=$sandi?>
            </div>
        </div>
    </div>

<?=$this->endSection()?>