<footer id="rs-footer" class="rs-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 footer-widget">
                    @php
                        $footer_data = \App\Models\About::whereId(1)->first();
                    @endphp
                    <p>Email</p>
                    <a href="mailto:{{ $footer_data->email }}">
                        <h5>{{ $footer_data->email }}</h5>
                    </a>

                    <p>Phone</p>
                    <a href="tel:{{ $footer_data->phone }}">
                        <h5>{{ $footer_data->phone }}</h5>
                    </a>

                    <p>Location</p>
                    <h5 class="address">{{ $footer_data->location }}</h5>

                </div>
                <div class="col-lg-3  d-flex align-items-end mt-5">
                    <a href="{{ $footer_data->instagram }}" target=”blank”>Instagram </a>
                    <div class="footer-fav">
                        <a href="{{ $footer_data->linkedin }}" target=”blank”>LinkedIn</a>
                    </div>
                    <div class="footer-fav">
                        <a href="{{ $footer_data->behance }}" target=”blank”>Behance</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-12">
                    <div class="copyright text-center md-text-left">
                        <p>© {{ date('Y') }} All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
