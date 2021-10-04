<?=$this->extend('dasar_tampilan');?>
<?=$this->section('WebProgramming')?>
<form method="POST" action="<?=base_url('/login')?>">
    <div class="container col-md-3">
            <div class="card mt-5">
                <div class="card-header">
                    <h3 class="card-title">login</h3>
                </div>
                <div class="form-floating">
                    <input id="txtEmail" class="form-control"
                        placeholder="Email"
                        type="text" name="email" />
                    <label for="txtEmail" >Email</label>
                </div>
                <div class="form-floating">
                    <input id="txtpass" class="form-control"
                            placeholder="Password"
                            type="password" name="sandi" />
                    <label for='txtPass'>Kata Sandi</label>
                 </div>

                <button class="btn btn-primary mt-2" >Login</button>
            </div>
        </div>
    </div>
</form>
<?=$this->endSection()?>