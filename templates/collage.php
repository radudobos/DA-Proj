<?php function collage( $home = 0 ) { ?>
<div class="collage">
    <div class="container">
        
        <div class="row gutter-10">
            
            <div class="col-xs-4 col-sm-3">
                <div class="collage-item collage-1"></div>
                <div class="collage-item collage-2"></div>
            </div><!-- /col -->
            
            <div class="col-xs-4 col-sm-3">
                <div class="collage-item collage-3"></div>
            </div>
            
            <div class="col-xs-8 col-sm-6">
                <div class="row gutter-10">
                    <div class="col-xs-6">
                        <div class="collage-item collage-4"></div>
                    </div>
                    <div class="col-xs-6">
                        <div class="collage-item collage-5"></div>
                    </div>
                </div><!-- /row -->
                <div class="collage-item collage-6">
                    <?php if( $home === 1 ): ?>
                        <a href="<?php echo home_url(); ?>/career">Want to join?</a>
                    <?php endif; ?>
                </div>
            </div><!-- /col -->
            
        </div><!-- /row -->
    
    </div><!-- /container -->
</div><!-- /collage -->
<?php } ?>