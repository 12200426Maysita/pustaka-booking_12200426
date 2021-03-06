<?=$this->extend('template_dashboard')?>
<?php

use Config\Services;

$vd = $vd ?: Services::validation();
?>

<?=$this->section('konten')?>
<div class="container">
    <div class="col-md-5">
    <div class="card">
        <div class="card-header">
            <h3 class="card title">Form pengguna</h3>
        </div>
        <div class="card-body">
            <?php if ($error):?>
                    <div class="alert alert-danger">
                        <?=$error?>

                    </div>
            <?php endif;?>
            
            <form method="POST" action="/pengguna">
            <input type="hidden" name="id" value="<?=$data['id']??''?>">
            <?php if($data['id']):?>
                <input type="hidden" name="_method" value="patch">
            <?php endif; ?>
            <div>
                <label for="txtNama" class="form-label">Nama</label>
                <input id="txtNama" type="text" name="nama" value="<?=$data['nama']??''?>" class="form-control"/>
            <?php
                    if($vd->getError('nama') ){?>
                    <div class="alert alert-danger">
                        <?=$vd->getError('nama')?>
                    </div>
                    <?php
                    }

                    
            ?>
            </div>

            <div>
                <label for="txtPassword" class="form-label">Kata Sandi</label>
                <input id="txtPassword" type="password" name="password" class="form-control">
                <?php
                    if($vd->getError('password') ){?>
                    <div class="alert alert-danger">
                        <?=$vd->getError('password')?>
                    </div>
                    <?php

                    }
            ?>
            </div>

            <div>
                <label for="txtPassword2" class="form-label">Ulangi kata sandi</label>
                <input id="txtPassword2" type="password" name="password2" class="form-control">
                <?php
                    if($vd->getError('password2') ){?>
                    <div class="alert alert-danger">
                        <?=$vd->getError('password2')?>
                    </div>
                    <?php

                    }
            ?>
            </div>
            <br>
            <button class="btn btn-sm btn-primary">Simpan</button>

            </form>
        </div>


    </div>

    </div>
    

</div>
        

<?=$this->endsection()?>