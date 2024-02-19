@include('navbar')
<!-- About Section -->
<section id="featuredQS">
    <div class="title title-right" style="margin-top: 20px">
        <h1>¿Quiénes somos?</h1><span class="line"></span>
    </div>
    <div class="wrapper">
        <div class="video-wrapper">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/MWd8JhJmldI"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
        <div class="text">
            <p>Somos una agencia de publicidad con más de una década de experiencia, comprometidos con cada proyecto que
                emprendemos. </p>
            <p>Nos especializamos en el diseño gráfico, branding y marketing digital, sirviendo a sectores clave como el
                industrial, hotelería, bares y restaurantes, así como el sector inmobiliario. Con oficinas en Querétaro,
                Ciudad de México, Hidalgo y Guanajuato, hemos establecido una presencia regional sólida, adaptándonos a
                las necesidades locales.</p>
            <p>Gracias a nuestra amplia red de más de 40 partners, ofrecemos los mejores precios y servicios en
                impresión y grabado. Descubre nuestro compromiso con la excelencia y lleva tu negocio al siguiente nivel
                con nosotros.</p>
        </div>
    </div>
    <h2 style="justify-content: center; align-items:center">Explora nuestra esencia en imágenes:</h2>



</section>

<div class="hero" id="DG">
    <img src="{{ asset('imgs/10.svg') }}" alt="Spice it up your brand" style="width: 100%; height: 100%;">
</div>
<div class="hero" id="marketing"> <img src="{{ asset('imgs/14.svg') }}" alt="Spice it up your brand"
        style="width: 100%; height: 100%;">
</div>
<div class="hero" id="publicidad"> <img src="{{ asset('imgs/17.svg') }}" alt="Spice it up your brand"
        style="width: 100%; height: 100%;">
</div>
<div class="hero"> <img src="{{ asset('imgs/19.svg') }}" alt="Spice it up your brand"
        style="width: 100%; height: 100%;">
</div>


@include('footer')
