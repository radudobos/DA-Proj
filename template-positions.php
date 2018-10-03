<?php
/**
 * Template Name: Positions
 */

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>


<div class="jobs-hero">
    <div class="container">
        
        <div class="wrap">
            
            <h1>Open positions</h1>
            <div class="sub-heading">Your career starts here</div>
            
            
            
        </div><!-- /wrap -->
    
    </div><!-- /container -->
</div><!-- /hero -->

<div class="container">
    <form method="post">
        <div class="row">
            
            <div class="col-sm-3">
                <div class="form-group">
                    <select name="" class="form-control input-lg">
                        <option value="">Select type</option>
                        <option value="internship"><?php _e('Internship','sage'); ?></option>
                        <option value="full-time"><?php _e('Full-time','sage'); ?></option>
                        <option value="part-time"><?php _e('Part-time','sage'); ?></option>
                    </select>
                </div>
            </div><!-- /col -->
            
            <div class="col-sm-3">
                <div class="form-group">
                    <select name="" class="form-control input-lg">
                        <option value="">Select company</option>
                        <option value="leadsupply"><?php _e('Lead Supply','sage'); ?></option>
                        <option value="Boligportal"><?php _e('Boligportal','sage'); ?></option>
                        <option value="Letloop"><?php _e('Letloop','sage'); ?></option>
                    </select>
                </div>
            </div><!-- /col -->
            
        </div><!-- /row -->
    </form><!-- /form -->
</div>


<div class="container">
    <div class="jobs">
        
        <div class="jobs-filter">
            <div class="filter-job-type">
                
            </div>
            <div class="filter-company">
                
            </div>
        </div>
        
        <div class="position first">
            <div class="position-text">
                <div class="position-title">PPC specialist<div class="position-type">Internship</div></div>
                <div class="position-company">Lead Supply ApS</div>
            </div>
            <div class="position-cta">
                <a href="#" class="btn btn-primary btn-round btn-lg"><?php _e('Read more','sage'); ?></a>
            </div>
        </div><!-- /position # -->
        
        <div class="position">
            <div class="position-text">
                <div class="position-title">PPC specialist<div class="position-type">Full-time</div></div>
                <div class="position-company">Lead Supply ApS</div>
            </div>
            <div class="position-cta">
                <a href="#" class="btn btn-primary btn-round btn-lg"><?php _e('Read more','sage'); ?></a>
            </div>
        </div><!-- /position # -->
        
        <div class="position">
            <div class="position-text">
                <div class="position-title">PPC specialist<div class="position-type">Part-time</div></div>
                <div class="position-company">Lead Supply ApS</div>
            </div>
            <div class="position-cta">
                <a href="#" class="btn btn-primary btn-round btn-lg"><?php _e('Read more','sage'); ?></a>
            </div>
        </div><!-- /position # -->
        
        
    </div><!-- /positions -->
</div><!-- /container -->



<div class="collage">
    <div class="container">
        
    <div class="row gutter-10">
        
        <div class="col-sm-3">
            <div class="collage-item collage-1"></div>
            <div class="collage-item collage-2"></div>
        </div><!-- /col -->
        
        <div class="col-sm-3">
            <div class="collage-item collage-3"></div>
        </div>
        
        <div class="col-sm-6">
            <div class="row gutter-10">
                <div class="col-sm-6">
                    <div class="collage-item collage-4"></div>
                </div>
                <div class="col-sm-6">
                    <div class="collage-item collage-5"></div>
                </div>
            </div><!-- /row -->
            <div class="collage-item collage-6"></div>
        </div><!-- /col -->
        
    </div><!-- /row -->
    
    </div><!-- /container -->
</div><!-- /collage -->




<div class="partners">
    <div class="container">
        
        <h2>Partners</h2>
        <p>Digital Academy partner up with the best educations and companies</p>
        
        <div class="partner-logos">
            
            <div class="partner-logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/partner-eaa.png" alt="Partner - EAA" /></div>
            <div class="partner-logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/partner-au.png" alt="Partner - AU" /></div>
            <div class="partner-logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/partner-google.png" alt="Partner - Google" /></div>
            
        </div><!-- /partner-logos -->
        
    </div><!-- /container -->
</div><!-- /partners -->




<div class="partner-quotes">
    <div class="container">
        <div class="row">
        
            <div class="col-sm-4">
                <div class="partner-quote">
                    <div class="quote-image">
                        <div class="partner-logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/quote-eaa.png" alt="Partner - EAA" /></div>
                    </div><!-- /image -->
                    <div class="quote-author">
                        <div class="name">Christian Mathiasen</div>
                        <div class="title">Erhvervs Akademi Aarhus</div>
                    </div><!-- /author -->
                    <div class="quote">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue erat ipsum, vel pretium nulla rhoncus ut. Donec iaculis dapibus nulla. Nam lorem felis, lacinia vel fermentum quis, fringilla vel ipsum.
                        <div class="quote-mark"></div>
                    </div><!-- /quote -->
                </div><!-- /partner-quote -->
            </div><!-- /col -->
            
            <div class="col-sm-4">
                <div class="partner-quote">
                    <div class="quote-image">
                        <div class="partner-logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/quote-au.png" alt="Partner - EAA" /></div>
                    </div><!-- /image -->
                    <div class="quote-author">
                        <div class="name">Christian Mathiasen</div>
                        <div class="title">Erhvervs Akademi Aarhus</div>
                    </div><!-- /author -->
                    <div class="quote">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue erat ipsum, vel pretium nulla rhoncus ut. Donec iaculis dapibus nulla. Nam lorem felis, lacinia vel fermentum quis, fringilla vel ipsum.
                        <div class="quote-mark"></div>
                    </div><!-- /quote -->
                </div><!-- /partner-quote -->
            </div><!-- /col -->
            
            <div class="col-sm-4">
                <div class="partner-quote">
                    <div class="quote-image">
                        <div class="partner-logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/quote-google.png" alt="Partner - EAA" /></div>
                    </div><!-- /image -->
                    <div class="quote-author">
                        <div class="name">Christian Mathiasen</div>
                        <div class="title">Erhvervs Akademi Aarhus</div>
                    </div><!-- /author -->
                    <div class="quote">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla congue erat ipsum, vel pretium nulla rhoncus ut. Donec iaculis dapibus nulla. Nam lorem felis, lacinia vel fermentum quis, fringilla vel ipsum.
                        <div class="quote-mark"></div>
                    </div><!-- /quote -->
                </div><!-- /partner-quote -->
            </div><!-- /col -->
        
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /partner-qoutes -->