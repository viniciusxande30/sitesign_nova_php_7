<?php
include(VIEW.'/components/common/top.tpl.php');
?>
            
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?php echo ASSET ?>img/testimonial/test-bg.png)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title">
                                    <h2>Sobre Nós</h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo URL ?>">Página Inicial</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Sobre Nós</li>
                                    </ol>
                                </nav>
                            </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <!-- about-area -->
            <section id="about" class="about-area2 about-p pt-120 pb-120 p-relative">
                <div class="ab-ani"><img src="<?php echo ASSET ?>img/bg/ab-ani-01.png" alt="ab-ani-01.png"></div>
                <div class="ab-ani1"><img src="<?php echo ASSET ?>img/bg/ab-ani-02.png" alt="ab-ani-01.png"></div>
                <div class="container">
                    <div class="row">
                         <div class="col-lg-6 col-md-12 col-sm-12 pr-30">
                            <div class="s-about-img p-relative  wow fadeInLeft   animated" data-animation="fadeInLeft" data-delay=".4s" style="visibility: visible; animation-name: fadeInLeft;">
                                <img src="<?php echo ASSET ?>img/features/about_img.png" alt="img">    
                            </div>
                          
                        </div>
                        
					<div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content  wow fadeInRight   animated" data-animation="fadeInRight" data-delay=".4s" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="about-title second-title pb-25">  
                                     
                                    <h2>Temos  <span>+ de 25 anos</span>de Experiência.</h2>   
                                   
                                </div>
                                
                                <p>A SiGN AUDIT & ADVISORY tem como foco a prestação de serviços diferenciados a seus clientes, advinda da longa trajetória de sua liderança, com mais de 25 anos de experiência em AUDITORIA, CONSULTORIA, TRIBUTÁRIO e BPS, bem como a manutenção de um quadro de colaboradores experientes e amplamente capacitados para oferecer soluções de qualidade a seus clientes, observando as necessidades e características de cada organização.</p>
                                <div class="about-content3">
                                    <div class="row">
                                    <div class="col-md-4">
                                     <div class="exprince">
                                               <img src="<?php echo ASSET ?>img/features/awward-icon.png" alt="img">
                                                <h5>+ de 25 Anos de</h5>
                                                <p>Experiência</p>
                                           </div>
                                    </div>
                                    <div class="col-md-8">
                                     <ul class="green">
                                               <li>Auditoria</li>
                                                <li>Tributário</li>
                                                <li>Consultoria e Consultoria de RH</li>
                                                <li>BPS</li>
                                             
                                           </ul>
                                    </div>
                                    </div>
                                    
                                
                                </div>                              
                      
                            </div>
                        </div>
                     
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
           
          
			
             <!-- team-area -->
            <section id="team" class="team-area2 pt-120 pb-90" style="background:url('<?php echo ASSET ?>img/bg/team-bg.png')">            
                <div class="container">  
                    <div class="row">   
                        <div class="col-lg-12 p-relative">
                            <div class="section-title center-align mb-50 text-center">
                                 
                                <h2>Nosso time de especialistas
                                </h2>
                               <p>Um grupo reconhecidamente competente, com sólida experiência de mercado. Conheça o currículo dos sócios.</p>
                            </div>
                        </div>                        
                         
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-team text-center mb-30 ">
                                <div class="team-thumb">
                                  <div class="brd">
                                        <img src="<?php echo ASSET ?>img/team/team_img01.png" alt="img" height="350px">
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4><a href="<?php echo URL ?>">Luiz Roberto Cafarella</a></h4>
                                    <span>Executivo</span>
                                    <p>Executivo com mais de 28 anos de experiência profissional atendendo clientes nacionais e internacionais no mercado financeiro, segurador, indústria, comércio e serviços. Base de sua experiência foi consolidada...</p>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-team text-center mb-30 ">
                                <div class="team-thumb">
                                    <div class="brd">
                                         <img src="<?php echo ASSET ?>img/team/team_img02.png" alt="img" height="350px">
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4><a href="<?php echo URL ?>">Reinaldo Molina</a></h4>
                                    <span>Executivo</span>
                                 <p>Executivo com 27 anos de experiência nas áreas de Auditoria e Consultoria de Bancos, Seguradoras, Fundos de Pensão e Operadoras de Saúde, dos quais 17 anos em duas das maiores empresas globais...</p>
                                </div>
                            </div>
                        </div>
                       		
                       
                        
                        
                    </div>
                </div>
            </section>
            <!-- team-area-end -->   
            
          
         
        </main>
        <?php
include(VIEW.'components/common/footer.tpl.php');
?>