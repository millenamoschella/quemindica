<footer class="page-footer text-center footer">

    <div class="container-fluid text-md-left ">
        <div class="row">

            {{-- ASIDE ESQUERDO --}}
            <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">
                <ul class="list-unstyled">
                    <li>
                        <p><a href="{{ url('sobre') }}">Quem Somos</a></p>
                    </li>
                    <li>
                        <p><a href="{{ url('suporte') }}">Suporte</a></p>
                    </li>
                    <li>
                        <p><a href="{{ url('termos') }}">Termos de Uso</a></p>
                    </li>
                    <li>
                        <p><a href="{{ url('politica-dados') }}">Politica de Dados</a></p>
                    </li>
                    <li>
                        <p><a href="{{ url('politica-cookies') }}">Politica de Cookies</a></p>
                    </li>
                </ul>
            </div>

            {{-- LOCALIZAÇÃO --}}
            <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">
                <h6 class="font-weight-bold text-uppercase mb-4">Localização</h6>
                <ul class="list-unstyled endereco">
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

            {{-- ASIDE DIREIRO --}}
            <div class="col-md-2 col-lg-2 text-center mx-auto my-4">
                <h6 class="font-weight-bold text-uppercase mb-4">Na Web</h6>
                <a href="https://www.facebook.com" target="_blank"><img src="{{ asset('imagens/midias/facebook.png') }}"
                        alt="Facebook"></a>
                <a href="https://www.instagram.com" target="_blank"><img
                        src="{{ asset('imagens/midias/instagram.png') }}" alt=" Instagram"></a>
                <a href="https://wa.me/5511900000000" target="_blank"><img
                        src="{{ asset('imagens/midias/whatsapp.png') }}" alt="Whatsapp"></a>
            </div>

            {{-- DIREIRO AUTORAIS --}}
            <p class="copyright">Quem Indica &copy; <?php echo date('Y'); ?> - Todos os
                direitos reservados</p>

        </div>

</footer>
