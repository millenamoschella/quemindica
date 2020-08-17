<footer>
    <div class="secao-footer">
        <div class="container">
            <div class="row text-center">


                {{-- MENU --}}
                <div class="col-lg-3 col-md-6">

                    <h5>Navegação</h5>

                    <div class="menu-footer">
                        <p>
                            <a href="{{ url('sobre') }}">Quem Somos</a>
                        </p>
                        <p>
                            <a href="{{ url('suporte') }}">Suporte</a>
                        </p>
                        <p>
                            <a href="{{ url('faq') }}">FAQ</a>
                        </p>
                        <p>
                            <a href="{{ url('politicas-termos') }}">Termos de Uso</a>
                        </p>
                        <p>
                            <a href="{{ url('politicas-termos') }}">Política de Dados</a>
                        </p>
                        <p>
                            <a href="{{ url('politicas-termos') }}">Política de Cookies</a>
                        </p>
                    </div>
                </div>


                {{-- NEWSLETTER --}}
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-3">Fique por dentro!</h5>

                    <div class="footer-assinar">
                        <form action="#" method="post">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            <button class="btn botao-assinar mt-4" type="submit">Assinar</button>
                        </form>
                    </div>
                </div>


                {{-- LOCALIZAÇÃO --}}
                <div class="col-lg-3 col-md-6 ">

                    <h5>Localização</h5>

                    <div class="localizacao-footer">
                        <ul class="list-unstyled">
                            <li>
                                <p> São Paulo, 01010-010</p>
                            </li>
                            <li>
                                <p> contato@quemindica.com.br</p>
                            </li>
                            <li>
                                <p> + 55 11 0000-000</p>
                            </li>
                        </ul>
                    </div>

                </div>

                {{-- MÍDIAS SOCIAIS --}}
                <div class="col-lg-3 col-md-6">

                    <h5>Na Web</h5>

                    <div class="social-media">
                        {{-- FACEBOOK --}}
                        <a href="https://www.facebook.com" target="_blank">
                            <i class="fa fa-facebook-official fa-lg white-text"></i>
                        </a>

                        {{-- INSTAGRAM --}}
                        <a href="https://www.instagram.com" target="_blank">
                            <i class="fa fa-instagram fa-lg white-text"></i>
                        </a>

                        {{-- LINKEDIN --}}
                        <a href="https://www.linkedin.com" target="_blank">
                            <i class="fa fa-linkedin-square fa-lg white-text"></i>
                        </a>

                        {{-- WHATSAPP --}}
                        <a href="https://wa.me/5511900000000" target="_blank">
                            <i class="fa fa-whatsapp fa-lg white-text"></i>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    {{-- COPYRIGHT --}}
    <div class="footer-copyright text-center">
        <p class="copyright">Quem Indica</a> &copy; <?php echo date('Y'); ?> - Todos os
            direitos reservados</p>
    </div>

</footer>
