@include('navbar')

<!-- Hero Section -->
<div class="hero">
   
        <img src="{{asset('imgs/2.svg')}}" alt="Spice it up your brand" style="width: 100%; height: 100%;">
    
</div>

<!-- Collection Section -->
<section id="collections">
    <div class="title title-right">
        <span class="line line-right"></span>
        <h2>Nuestros pilares</h2>
    </div>
    <div class="wrapper">
        <a class="box box1" href="{{route('pilares')}}/#featured">
            <h3>Branding y diseño gráfico </h3>
            <div class="box-overlay"></div>
        </a>
        <a class="box box2" href="{{route('pilares')}}/#featuredOrange">
            <h3>Marketing digital y servicios web</h3>
            <div class="box-overlay"></div>
        </a>
        <a class="box box3" href="{{route('pilares')}}/#featuredGray">
            <h3>Impresión y promocionales</h3>
            <div class="box-overlay"></div>
        </a>
        <p>Con más de una década de experiencia, nos dedicamos a cumplir
            los objetivos de cada proyecto en los sectores industrial, hotelería,
            bares y restaurantes, así como inmobiliario. Con presencia en Querétaro,
            Ciudad de México, Hidalgo y Guanajuato, estamos listos para brindar
            soluciones efectivas en múltiples ubicaciones.</p>
    </div>
</section>

<!-- Featured Section -->
<section id="featured">
    <div class="title title-left" style="margin-top:50px">
        <span class="line"></span>
        <h3>Expandiendo Horizontes Comerciales en el Mundo Virtual</h3>
    </div>
    <div class="wrapper">
        
        <div class="text">
            <h2>Tener presencia en internet se ha vuelto crucial para el éxito comercial. </h2>
            <p>Nuestro enfoque en el desarrollo de E-commerce y marketplaces se convierte
                en un activo invaluable para ayudar a los comercios a establecer y potenciar
                su presencia en la web, ya sea a través de tiendas en línea personalizadas o
                en plataformas consolidadas como Amazon, Mercado Libre y Liverpool.</p>
            <a href="#" class="btn submitOrange">Quiero innovar en línea!</a>
        </div>
        <div class="text">
            <img src="{{asset('imgs/4.svg')}}" alt="" style="width: 100%; height: Auto;">
        </div>
    </div>
</section>




<!-- About Section -->
<section id="about">
    <div class="title title-right">
        <h3>Algunos de nuestros clientes</h3><span class="line"></span>
    </div>
    <div class="wrapper">
        <div class="video-wrapper">
            <img src="{{asset('imgs/clients.png')}}" alt="">
        </div>
        <div class="text">
            <p>Contamos con una sólida relación con clientes que nos han
                acompañado por más de 7 años, respaldando nuestra calidad y
                compromiso. </p>
            <p>Además, gracias a nuestros más de 40 partners directos
                en la venta de promocionales, podemos ofrecer los mejores precios
                y servicios de impresión y grabado. </p>
            <p>Estos son solo algunos
                de nuestros clientes destacados a través de sus logos
                en nuestra sección dedicada.</p>
        </div>
    </div>
</section>

@include('footer')

