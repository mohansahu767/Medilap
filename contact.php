<style>
    .carousel-item>img{
        object-fit:cover !important;
    }
    #carouselExampleControls .carousel-inner{
        height:35em !important;
    }
</style>
<div class="container">

    <div class="row mt-lg-n4 mt-md-n4 justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card rounded-0">
                <div class="card-body">
                    <h3 class="text-center"><b>Contact Us</b></h3>
                    <center><hr style="height:2px;width:5em;opacity:1" class="bg-danger"></center>
                    <dl>
                        <dt class="text-muted">Email</dt>
                        <dd class="pl-4"><?= $_settings->info('email') ?></dd>
                        <dt class="text-muted">Telephone #</dt>
                        <dd class="pl-4"><?= $_settings->info('phone') ?></dd>
                        <dt class="text-muted">Mobile #</dt>
                        <dd class="pl-4"><?= $_settings->info('mobile') ?></dd>
                        <dt class="text-muted">Address</dt>
                        <dd class="pl-4"><?= $_settings->info('address') ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
    })
</script>
