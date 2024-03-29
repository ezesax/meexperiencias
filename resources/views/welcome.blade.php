@extends('layouts.site')

@section('content')

  <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix bg-white position-relative" id="home">
        <div class="container h-100 mt-7">
			@if (session('successMail'))
				<div class="col-md-12">
					<div class="alert alert-warning alert-styled-left alert-dismissible">
						<button type="button" class="close" data-dismiss="alert"><span>×</span></button>
						<span class="font-weight-semibold">{{ session('successMail') }}</span>
					</div>
				</div>
			@endif
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-4">
                    <div class="wellcome-heading wow fadeInLeft text-center text-md-left" data-wow-delay="0.7s">
                        <h2 class="mb-5">Consultora en Felicidad Organizacional</h2>
                        <a href="#about" class="btn-primary wow fadeInLeft mt-5" data-wow-delay="0.9s">INFORMAME</a>
                    </div>
                </div>
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-6 wow fadeInDown" data-wow-delay="1s" style="z-index:1000;">
                    <img src="{{ asset('img/ilustraciones/bienvenido.svg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="special-area wow fadeInUp" data-wow-delay="0.3s">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3"></div>
                    <div class="col-12 col-md-6 text-center mt-5 mt-md-0">
                        <img src="{{ asset('img/core-img/me-eb.svg') }}" class="pl-5 pr-5 pr-md-0 pl-md-0" alt="">
                        <h3 class="text-white mt-5 mb-5">Promovemos la felicidad organizacional para potenciar tu marca empleadora</h3>
                        <!-- <a href="#about" class="btn-primary">CONOCEME</a> -->
                    </div>
                    <div class="col-12 col-md-3"></div>
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.4s">
            <img src="{{ asset('img/ilustraciones/fondo-circulo.svg') }}" alt="">
        </div>
    </section>
	@if (isset($message))
        <div class="alert alert-warning alert-styled-left alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
            <span class="font-weight-semibold">{{ $message }}</span>
        </div>
    @endif
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="section_padding_100 bg-white" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <img src="{{ asset('img/core-img/estrellas.svg') }}" class="mb-4" alt="">
                        <h2>¿Qué hacemos?</h2>
                        <!-- <div class="line-shape"></div> -->
                    </div>
                </div>
            </div>
            
            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-3">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                            <img src="{{ asset('img/core-img/asesoria.svg') }}" alt="">
                        </div>
                        <h4 class="mb-60">Asesoría</h4>
                        <a href="servicios.php" class="btn-primary btn-yellow">CONOCEME</a>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-3">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <img src="{{ asset('img/core-img/cursos.svg') }}" alt="">
                        </div>
                        <h4  class="mb-30">Cursos de Formación</h4>
                        <a href="servicios.php" class="btn-primary btn-yellow">CONOCEME</a>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-3">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                            <img src="{{ asset('img/core-img/team.svg') }}" alt="">
                        </div>
                        <h4  class="mb-30">Team<br>Building</h4>
                        <a href="servicios.php" class="btn-primary btn-yellow">CONOCEME</a>
                        
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-3">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.8s">
                        <div class="single-icon">
                            <img src="{{ asset('img/core-img/charlas.svg') }}" alt="">
                        </div>
                        <h4  class="mb-30">Charlas y Conferencias</h4>
                        <a href="servicios.php" class="btn-primary btn-yellow">CONOCEME</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Special Area End ***** -->
    
    <!-- ***** Client Feedback Area Start ***** -->
	@if(session('country') == 'ar')
		<section class="clients-feedback-area bg-white section_padding_100 clearfix" id="testimonials">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10">
						<div class="slider slider-for">
							<!-- Client Feedback Text  -->
							<div class="client-feedback-text text-center">
								<div class="client">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</div>
								<div class="client-description text-center">
									<p>“ Hermosa experiencia y excelentes las actividades propuestas y su dinámica en la Jornada de Logística de Arcor Argentina. Destaco el compromiso, la buena energía y la predisposición de todo el equipo de ME!!! ”</p>
								</div>
								
								<div class="client-name text-center">
									<h5>Adriana Juárez</h5>
									<p>Arcor</p>
								</div>
							</div>
							<!-- Client Feedback Text  -->
							<div class="client-feedback-text text-center">
								<div class="client">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</div>
								<div class="client-description text-center">
									<p>“ Cuando te brindan calidad y calidez, capacitan, enseñan y divierten, ¡se aprende! Excelente grupo de trabajo!!! Un placer trabajar con ustedes ME!!! ”</p>
								</div>
								<div class="client-name text-center">
									<h5>Yamila Abad</h5>
									<p>Equipo de FARMACIAS LÍDER</p>
								</div>
							</div>
							<!-- Client Feedback Text  -->
							<div class="client-feedback-text text-center">
								<div class="client">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</div>
								<div class="client-description text-center">
									<p>“ Hicimos una capacitación con el equipo, son muy originales, fuera de lo común. Una experiencia muy linda, amena.. una nueva manera de aprender!!! ”</p>
								</div>
								<div class="client-name text-center">
									<h5>Belén Matias</h5>
									<p>Grupo Edisur</p>
								</div>
							</div>
							
						</div>
					</div>
					<!-- Client Thumbnail Area -->
					<div class="col-12 col-md-6 col-lg-5">
						<div class="slider slider-nav">
							<div class="client-thumbnail">
								<img src="img/logos/arcor.png" alt="">
							</div>
							<div class="client-thumbnail">
								<img src="img/logos/lider.png" alt="">
							</div>
							<div class="client-thumbnail">
								<img src="img/logos/edisur.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	@endif
	@if(session('country') == 'cr')
		<section class="clients-feedback-area bg-white section_padding_100 clearfix" id="testimonials">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10">
						<div class="slider slider-for">
							<!-- Client Feedback Text  -->
							<div class="client-feedback-text text-center">
								<div class="client">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</div>
								<div class="client-description text-center">
									<p>“ Aprendí muchísimo y lo disfruté... fue maravilloso conocer personas maravillosas como ustedes, con un gran carisma y que disfrutan al máximo lo que hacen ”</p>
								</div>
								
								<div class="client-name text-center">
									<h5>Gau Zuniga</h5>
								</div>
							</div>
							<!-- Client Feedback Text  -->
							<div class="client-feedback-text text-center">
								<div class="client">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</div>
								<div class="client-description text-center">
									<p>“ Excelente entrenamiento, muy provechoso! Y tanto Meli como Cande, muy buenas transmitiendo el amplio conocimiento que tienen ”</p>
								</div>
								<div class="client-name text-center">
									<h5>Carolina Golcher</h5>
								</div>
							</div>
							<!-- Client Feedback Text  -->
							<div class="client-feedback-text text-center">
								<div class="client">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</div>
								<div class="client-description text-center">
									<p>“ Me encanto lo disfrute mil ”</p>
								</div>
								<div class="client-name text-center">
									<h5>Peggy Chaves Mora</h5>
								</div>
							</div>
							
						</div>
					</div>
					<!-- Client Thumbnail Area -->
					<div class="col-12 col-md-6 col-lg-5">
						<div class="slider slider-nav">
							<div class="client-thumbnail">
								<img src="img/logos/user.png" alt="">
							</div>
							<div class="client-thumbnail">
								<img src="img/logos/user.png" alt="">
							</div>
							<div class="client-thumbnail">
								<img src="img/logos/user.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	@endif
    <!-- ***** Client Feedback Area End ***** -->

    <!-- Special Description Area -->
    <section class="bg-white section_padding_100 clearfix pb-4">
        <div class="special_description_area mt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <img src="img/core-img/estrellas.svg" class="mb-4" alt="">
                            <h2>Confían en nosotros</h2>
                            <!-- <div class="line-shape"></div> -->
                        </div>
                    </div>
                    <div class="cont-princ-slider" style="background-color:white">
                          <div class="slier-prin">
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/gedisur.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/iveco.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/flider.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/lekons.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/protectia.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/paclin.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/proa.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/tecnocampo.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/tecnoair.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/apex.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/golf.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/nodhos.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/01.jpg') }}" alt=""></div>
                            <!-- <div class="juegos_DWG"><img src="img/logos/apex.png" alt=""></div> -->
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/03.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/04.jpg') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/05.jpg') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/06.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/gedisur.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/08.jpg') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/09.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/lekons.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/flider.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/12.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/13.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/14.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/15.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/tecnocampo.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/nodhos.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/18.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/01.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/paclin.jpg') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/20.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/21.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/22.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/sancor.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/24.png') }}" alt=""></div>
                            <div class="juegos_DWG"><img src="{{ asset('img/logos/tecnoair.png') }}" alt=""></div>
                          </div>
                        </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ***** Our Team Area Start ***** -->
    <section class="our-Team-area bg-white section_padding_100_50 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <img src="img/core-img/estrellas.svg" class="mb-4" alt="">
                        <h2>Próximos eventos</h2>
                        <!-- <div class="line-shape"></div> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="app_screenshots_slides owl-carousel">
					@if(count($events) >= 3)
						@for($i = 0; $i < 3; $i++)
							<div class="single-shot">
								<div class="single-team-member">
									<div class="charlas-image">
										<img src="{{asset('storage/'.$events[$i]->img)}}" alt="">
										<div class="charlas-hover-effects">
											<div class="charlas-social-icon">
												<a href="{{ route('events.show.front',$events[$i]->id) }}">
													<h5>{{$events[$i]->name}}</h5>
													<ul class="d-inline-flex charla-info">
														<li>
															<i class="fa fa-calendar"></i> {{date('d',strtotime($events[$i]->date_start)) }} / {{ date('m',strtotime($events[$i]->date_start))}}
														</li>
														<li>
															<i class="fa fa-clock-o"></i> {{$events[$i]->hour}}
														</li>
													</ul>
													<a href="{{ route('events.show.front',$events[$i]->id) }}" class="charlas-mas">
														<i class="fa fa-plus"></i>
													</a>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>					
						@endfor
					@else
						@for($i = 0; $i < count($events); $i++)
							<div class="single-shot">
								<div class="single-team-member">
									<div class="charlas-image">
										<img src="{{asset('storage/'.$events[$i]->img)}}" alt="">
										<div class="charlas-hover-effects">
											<div class="charlas-social-icon">
												<a href="{{ route('events.show.front',$events[$i]->id) }}">
													<h5>{{$events[$i]->name}}</h5>
													<ul class="d-inline-flex charla-info">
														<li>
															<i class="fa fa-calendar"></i> {{date('d',strtotime($events[$i]->date_start)) }} / {{ date('m',strtotime($events[$i]->date_start))}}
														</li>
														<li>
															<i class="fa fa-clock-o"></i> {{$events[$i]->hour}}
														</li>
													</ul>
													<a href="{{ route('events.show.front',$events[$i]->id) }}" class="charlas-mas">
														<i class="fa fa-plus"></i>
													</a>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>					
						@endfor
					@endif
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area End ***** -->

    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix bg-white" id="contact">
        <div class="container">
            <div class="row">
                
                <div class="col-md-5">
                    <!-- Heading Text  -->
                    <div class="footer-heading">
                        <h2>Contacto</h2>
                    </div>
                    <div class="footer-text">
                        <img src="img/core-img/mail.svg" class="float-left mr-3 mb-5" alt="">
                        <h4>EscribiME</h4>
                        <p>contamemas@meexperiencias.com</p>
                    </div>
                    <div class="footer-text">
                        <img src="img/core-img/tel.svg" class="float-left mr-3 mb-5" alt="">
                        <h4>LlamaME</h4>
                        <p>+54-9-351-2017150</p>
                    </div>
                    <div class="footer-social-icon">
                        <a href="https://www.facebook.com/MEExperiencias" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/meexperiencias" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/meexperiencias/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/company/meexperiencias/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    
                </div>
                <div class="col-md-7">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <form action="cursos/sendEmail" method="post">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <div class="col-10">
                                        <h3 class="mb-3">¿Querés recibir + info?</h3>
                                    </div>
                                    <div class="col-2">
                                        <img src="img/core-img/sonrisa.png" class="sonrisa" alt="">
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-6">
                                        <div class="form-group">
											<input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Nombre y Apellido" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Teléfono" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Casilla de correo" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" id="pais" name="country">
                                                <option disabled selected>¿De donde nos escribís?</option>
                                                <option value="Afganistán" id="AF">Afganistán</option>
                                                <option value="Albania" id="AL">Albania</option>
                                                <option value="Alemania" id="DE">Alemania</option>
                                                <option value="Andorra" id="AD">Andorra</option>
                                                <option value="Angola" id="AO">Angola</option>
                                                <option value="Anguila" id="AI">Anguila</option>
                                                <option value="Antártida" id="AQ">Antártida</option>
                                                <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                                                <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                                                <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                                                <option value="Argelia" id="DZ">Argelia</option>
                                                <option value="Argentina" id="AR">Argentina</option>
                                                <option value="Armenia" id="AM">Armenia</option>
                                                <option value="Aruba" id="AW">Aruba</option>
                                                <option value="Australia" id="AU">Australia</option>
                                                <option value="Austria" id="AT">Austria</option>
                                                <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                                                <option value="Bahamas" id="BS">Bahamas</option>
                                                <option value="Bahrein" id="BH">Bahrein</option>
                                                <option value="Bangladesh" id="BD">Bangladesh</option>
                                                <option value="Barbados" id="BB">Barbados</option>
                                                <option value="Bélgica" id="BE">Bélgica</option>
                                                <option value="Belice" id="BZ">Belice</option>
                                                <option value="Benín" id="BJ">Benín</option>
                                                <option value="Bermudas" id="BM">Bermudas</option>
                                                <option value="Bhután" id="BT">Bhután</option>
                                                <option value="Bielorrusia" id="BY">Bielorrusia</option>
                                                <option value="Birmania" id="MM">Birmania</option>
                                                <option value="Bolivia" id="BO">Bolivia</option>
                                                <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                                                <option value="Botsuana" id="BW">Botsuana</option>
                                                <option value="Brasil" id="BR">Brasil</option>
                                                <option value="Brunei" id="BN">Brunei</option>
                                                <option value="Bulgaria" id="BG">Bulgaria</option>
                                                <option value="Burkina Faso" id="BF">Burkina Faso</option>
                                                <option value="Burundi" id="BI">Burundi</option>
                                                <option value="Cabo Verde" id="CV">Cabo Verde</option>
                                                <option value="Camboya" id="KH">Camboya</option>
                                                <option value="Camerún" id="CM">Camerún</option>
                                                <option value="Canadá" id="CA">Canadá</option>
                                                <option value="Chad" id="TD">Chad</option>
                                                <option value="Chile" id="CL">Chile</option>
                                                <option value="China" id="CN">China</option>
                                                <option value="Chipre" id="CY">Chipre</option>
                                                <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
                                                <option value="Colombia" id="CO">Colombia</option>
                                                <option value="Comores" id="KM">Comores</option>
                                                <option value="Congo" id="CG">Congo</option>
                                                <option value="Corea" id="KR">Corea</option>
                                                <option value="Corea del Norte" id="KP">Corea del Norte</option>
                                                <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
                                                <option value="Costa Rica" id="CR">Costa Rica</option>
                                                <option value="Croacia" id="HR">Croacia</option>
                                                <option value="Cuba" id="CU">Cuba</option>
                                                <option value="Dinamarca" id="DK">Dinamarca</option>
                                                <option value="Djibouri" id="DJ">Djibouri</option>
                                                <option value="Dominica" id="DM">Dominica</option>
                                                <option value="Ecuador" id="EC">Ecuador</option>
                                                <option value="Egipto" id="EG">Egipto</option>
                                                <option value="El Salvador" id="SV">El Salvador</option>
                                                <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
                                                <option value="Eritrea" id="ER">Eritrea</option>
                                                <option value="Eslovaquia" id="SK">Eslovaquia</option>
                                                <option value="Eslovenia" id="SI">Eslovenia</option>
                                                <option value="España" id="ES">España</option>
                                                <option value="Estados Unidos" id="US">Estados Unidos</option>
                                                <option value="Estonia" id="EE">Estonia</option>
                                                <option value="c" id="ET">Etiopía</option>
                                                <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
                                                <option value="Filipinas" id="PH">Filipinas</option>
                                                <option value="Finlandia" id="FI">Finlandia</option>
                                                <option value="Francia" id="FR">Francia</option>
                                                <option value="Gabón" id="GA">Gabón</option>
                                                <option value="Gambia" id="GM">Gambia</option>
                                                <option value="Georgia" id="GE">Georgia</option>
                                                <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
                                                <option value="Ghana" id="GH">Ghana</option>
                                                <option value="Gibraltar" id="GI">Gibraltar</option>
                                                <option value="Granada" id="GD">Granada</option>
                                                <option value="Grecia" id="GR">Grecia</option>
                                                <option value="Groenlandia" id="GL">Groenlandia</option>
                                                <option value="Guadalupe" id="GP">Guadalupe</option>
                                                <option value="Guam" id="GU">Guam</option>
                                                <option value="Guatemala" id="GT">Guatemala</option>
                                                <option value="Guayana" id="GY">Guayana</option>
                                                <option value="Guayana francesa" id="GF">Guayana francesa</option>
                                                <option value="Guinea" id="GN">Guinea</option>
                                                <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                                                <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                                                <option value="Haití" id="HT">Haití</option>
                                                <option value="Holanda" id="NL">Holanda</option>
                                                <option value="Honduras" id="HN">Honduras</option>
                                                <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                                                <option value="Hungría" id="HU">Hungría</option>
                                                <option value="India" id="IN">India</option>
                                                <option value="Indonesia" id="ID">Indonesia</option>
                                                <option value="Irak" id="IQ">Irak</option>
                                                <option value="Irán" id="IR">Irán</option>
                                                <option value="Irlanda" id="IE">Irlanda</option>
                                                <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                                                <option value="Isla Christmas" id="CX">Isla Christmas</option>
                                                <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                                                <option value="Islandia" id="IS">Islandia</option>
                                                <option value="Islas Caimán" id="KY">Islas Caimán</option>
                                                <option value="Islas Cook" id="CK">Islas Cook</option>
                                                <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                                                <option value="Islas Faroe" id="FO">Islas Faroe</option>
                                                <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                                                <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                                                <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                                                <option value="Islas Marshall" id="MH">Islas Marshall</option>
                                                <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                                                <option value="Islas Palau" id="PW">Islas Palau</option>
                                                <option value="Islas Salomón" d="SB">Islas Salomón</option>
                                                <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                                                <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                                                <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                                                <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
                                                <option value="Israel" id="IL">Israel</option>
                                                <option value="Italia" id="IT">Italia</option>
                                                <option value="Jamaica" id="JM">Jamaica</option>
                                                <option value="Japón" id="JP">Japón</option>
                                                <option value="Jordania" id="JO">Jordania</option>
                                                <option value="Kazajistán" id="KZ">Kazajistán</option>
                                                <option value="Kenia" id="KE">Kenia</option>
                                                <option value="Kirguizistán" id="KG">Kirguizistán</option>
                                                <option value="Kiribati" id="KI">Kiribati</option>
                                                <option value="Kuwait" id="KW">Kuwait</option>
                                                <option value="Laos" id="LA">Laos</option>
                                                <option value="Lesoto" id="LS">Lesoto</option>
                                                <option value="Letonia" id="LV">Letonia</option>
                                                <option value="Líbano" id="LB">Líbano</option>
                                                <option value="Liberia" id="LR">Liberia</option>
                                                <option value="Libia" id="LY">Libia</option>
                                                <option value="Liechtenstein" id="LI">Liechtenstein</option>
                                                <option value="Lituania" id="LT">Lituania</option>
                                                <option value="Luxemburgo" id="LU">Luxemburgo</option>
                                                <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                                                <option value="Madagascar" id="MG">Madagascar</option>
                                                <option value="Malasia" id="MY">Malasia</option>
                                                <option value="Malawi" id="MW">Malawi</option>
                                                <option value="Maldivas" id="MV">Maldivas</option>
                                                <option value="Malí" id="ML">Malí</option>
                                                <option value="Malta" id="MT">Malta</option>
                                                <option value="Marruecos" id="MA">Marruecos</option>
                                                <option value="Martinica" id="MQ">Martinica</option>
                                                <option value="Mauricio" id="MU">Mauricio</option>
                                                <option value="Mauritania" id="MR">Mauritania</option>
                                                <option value="Mayotte" id="YT">Mayotte</option>
                                                <option value="México" id="MX">México</option>
                                                <option value="Micronesia" id="FM">Micronesia</option>
                                                <option value="Moldavia" id="MD">Moldavia</option>
                                                <option value="Mónaco" id="MC">Mónaco</option>
                                                <option value="Mongolia" id="MN">Mongolia</option>
                                                <option value="Montserrat" id="MS">Montserrat</option>
                                                <option value="Mozambique" id="MZ">Mozambique</option>
                                                <option value="Namibia" id="NA">Namibia</option>
                                                <option value="Nauru" id="NR">Nauru</option>
                                                <option value="Nepal" id="NP">Nepal</option>
                                                <option value="Nicaragua" id="NI">Nicaragua</option>
                                                <option value="Níger" id="NE">Níger</option>
                                                <option value="Nigeria" id="NG">Nigeria</option>
                                                <option value="Niue" id="NU">Niue</option>
                                                <option value="Norfolk" id="NF">Norfolk</option>
                                                <option value="Noruega" id="NO">Noruega</option>
                                                <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                                                <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                                                <option value="Omán" id="OM">Omán</option>
                                                <option value="Panamá" id="PA">Panamá</option>
                                                <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                                                <option value="Paquistán" id="PK">Paquistán</option>
                                                <option value="Paraguay" id="PY">Paraguay</option>
                                                <option value="Perú" id="PE">Perú</option>
                                                <option value="Pitcairn" id="PN">Pitcairn</option>
                                                <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                                                <option value="Polonia" id="PL">Polonia</option>
                                                <option value="Portugal" id="PT">Portugal</option>
                                                <option value="Puerto Rico" id="PR">Puerto Rico</option>
                                                <option value="Qatar" id="QA">Qatar</option>
                                                <option value="Reino Unido" id="UK">Reino Unido</option>
                                                <option value="República Centroafricana" id="CF">República Centroafricana</option>
                                                <option value="República Checa" id="CZ">República Checa</option>
                                                <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                                                <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
                                                <option value="República Dominicana" id="DO">República Dominicana</option>
                                                <option value="Reunión" id="RE">Reunión</option>
                                                <option value="Ruanda" id="RW">Ruanda</option>
                                                <option value="Rumania" id="RO">Rumania</option>
                                                <option value="Rusia" id="RU">Rusia</option>
                                                <option value="Samoa" id="WS">Samoa</option>
                                                <option value="Samoa occidental" id="AS">Samoa occidental</option>
                                                <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                                                <option value="San Marino" id="SM">San Marino</option>
                                                <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                                                <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
                                                <option value="Santa Helena" id="SH">Santa Helena</option>
                                                <option value="Santa Lucía" id="LC">Santa Lucía</option>
                                                <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                                                <option value="Senegal" id="SN">Senegal</option>
                                                <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                                                <option value="Sychelles" id="SC">Seychelles</option>
                                                <option value="Sierra Leona" id="SL">Sierra Leona</option>
                                                <option value="Singapur" id="SG">Singapur</option>
                                                <option value="Siria" id="SY">Siria</option>
                                                <option value="Somalia" id="SO">Somalia</option>
                                                <option value="Sri Lanka" id="LK">Sri Lanka</option>
                                                <option value="Suazilandia" id="SZ">Suazilandia</option>
                                                <option value="Sudán" id="SD">Sudán</option>
                                                <option value="Suecia" id="SE">Suecia</option>
                                                <option value="Suiza" id="CH">Suiza</option>
                                                <option value="Surinam" id="SR">Surinam</option>
                                                <option value="Svalbard" id="SJ">Svalbard</option>
                                                <option value="Tailandia" id="TH">Tailandia</option>
                                                <option value="Taiwán" id="TW">Taiwán</option>
                                                <option value="Tanzania" id="TZ">Tanzania</option>
                                                <option value="Tayikistán" id="TJ">Tayikistán</option>
                                                <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
                                                <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                                                <option value="Timor Oriental" id="TP">Timor Oriental</option>
                                                <option value="Togo" id="TG">Togo</option>
                                                <option value="Tonga" id="TO">Tonga</option>
                                                <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                                                <option value="Túnez" id="TN">Túnez</option>
                                                <option value="Turkmenistán" id="TM">Turkmenistán</option>
                                                <option value="Turquía" id="TR">Turquía</option>
                                                <option value="Tuvalu" id="TV">Tuvalu</option>
                                                <option value="Ucrania" id="UA">Ucrania</option>
                                                <option value="Uganda" id="UG">Uganda</option>
                                                <option value="Uruguay" id="UY">Uruguay</option>
                                                <option value="Uzbekistán" id="UZ">Uzbekistán</option>
                                                <option value="Vanuatu" id="VU">Vanuatu</option>
                                                <option value="Venezuela" id="VE">Venezuela</option>
                                                <option value="Vietnam" id="VN">Vietnam</option>
                                                <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                                                <option value="Yemen" id="YE">Yemen</option>
                                                <option value="Zambia" id="ZM">Zambia</option>
                                                <option value="Zimbabue" id="ZW">Zimbabue</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Consulta" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area End ***** -->    

@endsection