@include('includes.top')
 <!-- breadcrumb-area -->
 <section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{url('/')}}/assets/img/testimonial/test-bg.png)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title">
                                    <h2>Fale Conosco</h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Página Inicial</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Fale Conosco</li>
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
<section id="services" class="services-area pt-120 pb-90 fix">
                <div class="container">
                   
                    <div class="row">
                         <div class="col-lg-4 col-md-4">
                         <div class="services-box text-center">
                              <div class="services-icon">
                                   <i class="fal fa-phone-alt"></i>
                                </div>
                               <div class="services-content2">
                                    <h5>Telefone</h5>   
                                     <p>(11) 2638-9710</p>
                                     
                                </div>
                            </div>   
                          
                             
                         
                        </div>
                        <div class="col-lg-4 col-md-4">
                             
                        <div class="services-box text-center">
                              <div class="services-icon">
                                   <i class="fal fa-envelope"></i>
                                </div>
                               <div class="services-content2">
                                    <h5>E-mail</h5>   
                                    <p>contato@signadvisory.com.br<br></p>
                                </div>
                            </div>   
                             
                         
                        </div>
                        <div class="col-lg-4 col-md-4">
                             
                          <div class="services-box text-center">
                              <div class="services-icon">
                                  <i class="fal fa-map-marked"></i>
                                </div>
                               <div class="services-content2">
                                    <h5>Endereço</h5>   
                                    <p>Rua Helena, 285 Cjs. 43/45 - Vila Olimpia</p>
                                </div>
                            </div>   
                             
                         
                        </div>
                        
                    </div>
                </div>
            </section>



            <section id="contact" class="contact-area contact-bg pt-120 pb-120 p-relative fix" style="background: #f6faff;">
                <div class="ab-ani2"><img src="{{url('/')}}/assets/img/bg/p-shape02.png" alt="ab-ani-01.png"></div>
                <div class="ab-ani3"><img src="{{url('/')}}/assets/img/bg/p-shape.png" alt="ab-ani-01.png"></div>
                
                <div class="container">
             
					<div class="row">
                        <div class="col-lg-6 col-md-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14625.201969649326!2d-46.705319673091665!3d-23.59355384546306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5746494ffac5%3A0x4d63a61bb421ee92!2sSIGN%20Audit%20%26%20Advisory!5e0!3m2!1spt-BR!2sbr!4v1697069019551!5m2!1spt-BR!2sbr" width="600" height="615" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-bg02">
                            <div class="section-title center-align">
                                 
                                <h2>
                                    Preencha o Formulário de Contato
                                </h2>
                              
                            </div>
                                
						<form action="mail.php" method="post" class="contact-form mt-30">
							<div class="row">
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-name mb-15">                                    
                                    <input type="text" id="firstn" name="firstn" placeholder="Nome" required="">
                                </div>                               
                            </div>
							
							<div class="col-lg-12">                               
                                <div class="contact-field p-relative c-subject mb-15">                                   
                                    <input type="text" id="email" name="email" placeholder="E-mail" required="">
                                </div>
                            </div>		
                            <div class="col-lg-12">                               
                                <div class="contact-field p-relative c-subject mb-15">                                   
                                    <input type="text" id="phone" name="phone" placeholder="Telefone" required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-30">                                  
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Escreva sua Mensagem"></textarea>
                                </div>
                                <div class="slider-btn">                                          
                                            <button class="btn ss-btn active" data-animation="fadeInRight" data-delay=".8s">Enviar</button>				
                                        </div>                             
                            </div>
                            </div>
                        
                    </form>
                            
                            </div>
                        
						</div>
                        
					</div>
                    
                </div>
               
            </section>
@include('includes.footer')