<?php
/* =========================================================================
   PROPUESTA COMERCIAL — Marcela Fiorilo
   -------------------------------------------------------------------------
   CÓMO EDITAR:
   - Marcela: cambiá SOLO los textos entre comillas de aquí abajo.
   - No borres corchetes [ ], comas , ni comillas ".
   - La parte de "DATOS DE MARCELA" es igual en toda propuesta: casi no se toca.
   ========================================================================= */

$data = [

  /* ---------------- DATOS DEL CLIENTE (editá esto en cada propuesta) --------------- */
  "cliente" => "Flores Negras",
  "titulo_pestana" => "Propuesta para Flores Negras · Marcela Fiorilo",

  "hero_titulo" => 'Una propuesta pensada para <span class="hl">Flores Negras</span>',
  "hero_texto"  => "Hola Lucía y Nicolás. Leí lo que necesitan y les armé un plan concreto para que sus redes, la tienda online y sus proyectos empujen todos para el mismo lado: más ventas y una comunicación a la altura de la marca.",

  // Lo que pidieron (aparece en "Leí lo que necesitan")
  "tareas" => [
    "Instagram: historias, feed y destacadas — revisar y mejorar",
    "Newsletter mensual",
    "Facebook: activar, revisar y mejorar",
    "Tienda online: revisar y mejorar",
    "Acompañar el armado de Proyecto Barrio y Taller de plantas",
  ],
  "objetivos" => [
    "Aumentar las ventas por la tienda online",
    "Mejorar los canales de comunicación",
    "Impulsar los dos proyectos",
    "Llegar a consorcios, arquitectos/constructoras y oficinas",
  ],

  // Qué haría en cada frente (un bloque por tarea)
  "frentes" => [
    [
      "titulo" => "Instagram con intención",
      "texto"  => "Ordeno la grilla con una línea visual coherente con la identidad de Flores Negras. Historias con ritmo (detrás de escena del vivero, cuidados, novedades, eventos) para sostener presencia diaria; feed pensado para mostrar producto y comunidad; y destacadas armadas como una vidriera: catálogo, cuidados, envíos, eventos y talleres. Todo apuntado a que la cuenta convierta seguidores en clientes.",
    ],
    [
      "titulo" => "Newsletter mensual",
      "texto"  => "Un mail mensual simple y lindo: novedades del vivero, la planta del mes, tips de cuidado y aviso de eventos y talleres. Sirve para fidelizar a quienes ya los conocen y traerlos de vuelta a la tienda online.",
    ],
    [
      "titulo" => "Facebook, activado y alineado",
      "texto"  => "Reactivo Facebook y lo dejo alineado con Instagram, con publicación cruzada donde tenga sentido. Además es clave para llegar al público B2B y para la pauta, así que lo dejo listo para eso.",
    ],
    [
      "titulo" => "Tienda online que venda",
      "texto"  => "Reviso la tienda con ojo de cliente: fotos, descripciones, categorías y textos que ayuden a comprar. Conecto el contenido de las redes con la tienda para que cada publicación tenga un camino claro hacia la compra. Objetivo directo: más ventas online.",
    ],
    [
      "titulo" => "Proyecto Barrio + Taller de plantas",
      "texto"  => "Los acompaño en el armado: comunicación, piezas para redes, difusión de fechas e inscripciones y cobertura de contenido el día del evento para seguir alimentando las redes. Que cada proyecto sume ventas, contenido y comunidad.",
    ],
  ],

  // Ángulo diferencial
  "b2b_titulo" => 'El ángulo que puede <span class="hl">mover la aguja</span>: clientes B2B',
  "b2b_texto"  => "Consorcios, arquitectos, constructoras y oficinas son un público con ticket alto y compra recurrente. Para llegar ahí combino tres cosas: contenido que muestre a Flores Negras haciendo proyectos y ambientaciones (no solo la maceta suelta), pauta en Meta segmentada a ese público y esas zonas, y una comunicación preparada para responder ese tipo de consulta. Es donde veo más potencial de crecimiento.",

  // Cómo trabajaríamos
  "etapas" => [
    [ "titulo" => "Diagnóstico y puesta a punto",
      "texto" => "Audito redes, tienda y Facebook. Defino línea visual, tono y calendario de contenidos." ],
    [ "titulo" => "En marcha",
      "texto" => "Contenido, historias, feed, newsletter y gestión diaria funcionando de forma constante." ],
    [ "titulo" => "Proyectos y B2B",
      "texto" => "Acompañamiento de Proyecto Barrio y Taller, y arranque de la pauta orientada al público B2B." ],
  ],

  // Honorarios
  "honorarios_modalidad" => "Fee mensual",
  "honorarios_incluye" => [
    "Gestión de Instagram (historias, feed y destacadas)",
    "Newsletter mensual",
    "Facebook activado y alineado",
    "Revisión y mejora de la tienda online",
    "Acompañamiento de Proyecto Barrio y Taller de plantas",
    "Reporte mensual de métricas",
  ],
  "honorarios_nota" => "Propuesta personalizada: si algo sobra o falta, lo ajustamos juntos.",


  /* ---------------- DATOS DE MARCELA (constante — casi no se toca) --------------- */
  "quien_soy" => "Soy community manager y editora de contenido. Ayudo a marcas y emprendedores a que sus redes trabajen a su favor: no publico por publicar, cada pieza tiene un propósito y está pensada para acercarles clientes. Trabajo con estrategia, foco en crecimiento orgánico y conversión, y reportes claros para que siempre sepan cómo viene todo.",

  "cuentas" => [
    [ "nombre" => "Shukran Audiovisual", "handle" => "@shukran.audiovisual", "url" => "https://www.instagram.com/shukran.audiovisual/" ],
    [ "nombre" => "Al Passo Colegiales",  "handle" => "@alpasso.colegiales",  "url" => "https://www.instagram.com/alpasso.colegiales/" ],
    [ "nombre" => "Kumara Estudio",       "handle" => "@kumaraestudio",       "url" => "https://www.instagram.com/kumaraestudio/" ],
    [ "nombre" => "Upside Agencia",       "handle" => "@upside_agencia",       "url" => "https://www.instagram.com/upside_agencia/" ],
    [ "nombre" => "Fleyt's Life",         "handle" => "@fleytslife",           "url" => "https://www.instagram.com/fleytslife/" ],
  ],

  "testimonios" => [
    [ "texto" => "Marcela entiende la marca. Los reels que editó generaron más leads en un mes que todo el semestre anterior. Es comprometida y aporta muy buenas ideas.", "autor" => "Alejo Aguero", "marca" => "Upside Agencia" ],
    [ "texto" => "Desde que empezamos a trabajar juntos, nuestras ventas crecieron y nuestra marca se ve mucho más profesional.", "autor" => "Carmen Alicia Bogado", "marca" => "Carmenchy Cocina" ],
    [ "texto" => "Los clips que editó del podcast para redes tuvieron un gran alcance. Sabe exactamente qué momento destacar.", "autor" => "Harry Mulhall", "marca" => "Edición de video" ],
  ],

  "whatsapp_url"  => "https://wa.me/5491136667335",
  "whatsapp_cta"  => "Hablá conmigo",
  "mail"          => "mar.fiorilo@gmail.com",
];

/* Helper para escapar texto (no tocar) */
function e($s){ return htmlspecialchars($s, ENT_QUOTES, "UTF-8"); }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($data["titulo_pestana"]) ?></title>
  <meta name="robots" content="noindex">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="estilos.css">
</head>
<body>

  <!-- HERO -->
  <header class="hero">
    <div class="wrap">
      <p class="eyebrow">Community Manager · Propuesta de redes</p>
      <h1><?= $data["hero_titulo"] /* contiene HTML del destacado */ ?></h1>
      <p class="lead"><?= e($data["hero_texto"]) ?></p>
      <a class="cta" href="<?= e($data["whatsapp_url"]) ?>" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-8.6 15l-1.4 5 5.1-1.3A10 10 0 1 0 12 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .2-3.3-.7-2.8-1.1-4.5-3.9-4.7-4.1-.1-.2-1-1.4-1-2.6 0-1.2.6-1.8.9-2 .2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5.2.5.7 1.8.8 1.9.1.1.1.3 0 .5-.1.2-.2.4-.3.5-.2.2-.3.4-.2.6.1.2.6 1 1.3 1.6.9.8 1.6 1 1.9 1.2.2.1.4.1.5-.1.2-.2.6-.7.7-.9.2-.2.3-.2.6-.1.2.1 1.5.7 1.8.8.2.1.4.2.4.3.1.1.1.6-.1 1.1z"/></svg>
        <?= e($data["whatsapp_cta"]) ?>
      </a>
    </div>
  </header>

  <!-- QUIÉN SOY -->
  <section class="alt">
    <div class="wrap reveal quien-soy">
      <div class="quien-texto">
        <p class="eyebrow">Quién soy</p>
        <h2 class="section-title">Hola, soy <span class="hl">Marcela</span></h2>
        <p class="lead"><?= e($data["quien_soy"]) ?></p>
      </div>
      <div class="quien-foto">
        <img src="marcela.png" alt="Marcela Fiorilo" loading="lazy">
      </div>
    </div>
  </section>

  <!-- LEÍ LO QUE NECESITAN -->
  <section>
    <div class="wrap reveal">
      <p class="eyebrow">Punto de partida</p>
      <h2 class="section-title">Leí lo que necesitan</h2>
      <div class="needs">
        <div>
          <h3>Sus tareas</h3>
          <ul>
            <?php foreach ($data["tareas"] as $t): ?>
              <li><?= e($t) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div>
          <h3>Sus objetivos</h3>
          <ul>
            <?php foreach ($data["objetivos"] as $o): ?>
              <li><?= e($o) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- QUÉ HARÍA EN CADA FRENTE -->
  <section class="alt">
    <div class="wrap reveal">
      <p class="eyebrow">El plan</p>
      <h2 class="section-title">Qué haría en cada frente</h2>
      <?php foreach ($data["frentes"] as $i => $f): ?>
        <div class="frente">
          <div class="num"><?= str_pad($i + 1, 2, "0", STR_PAD_LEFT) ?></div>
          <div>
            <h3><?= e($f["titulo"]) ?></h3>
            <p><?= e($f["texto"]) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- B2B -->
  <section>
    <div class="wrap reveal">
      <p class="eyebrow">Diferencial</p>
      <h2 class="section-title"><?= $data["b2b_titulo"] ?></h2>
      <div class="b2b-box">
        <p><?= e($data["b2b_texto"]) ?></p>
      </div>
    </div>
  </section>

  <!-- CUENTAS QUE MANEJÉ -->
  <section class="alt">
    <div class="wrap reveal">
      <p class="eyebrow">Referencias</p>
      <h2 class="section-title">Cuentas que manejé</h2>
      <div class="cuentas">
        <?php foreach ($data["cuentas"] as $c): ?>
          <a class="cuenta" href="<?= e($c["url"]) ?>" target="_blank" rel="noopener">
            <span class="nombre"><?= e($c["nombre"]) ?></span>
            <span class="handle"><?= e($c["handle"]) ?> ↗</span>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- TESTIMONIOS -->
  <section>
    <div class="wrap reveal">
      <p class="eyebrow">Lo que dicen</p>
      <h2 class="section-title">Testimonios</h2>
      <div class="grid cols-3">
        <?php foreach ($data["testimonios"] as $t): ?>
          <div class="card testi">
            <p>“<?= e($t["texto"]) ?>”</p>
            <div class="autor"><?= e($t["autor"]) ?></div>
            <div class="marca"><?= e($t["marca"]) ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CÓMO TRABAJARÍAMOS -->
  <section class="alt">
    <div class="wrap reveal">
      <p class="eyebrow">Proceso</p>
      <h2 class="section-title">Cómo trabajaríamos</h2>
      <?php foreach ($data["etapas"] as $et): ?>
        <div class="etapa">
          <h3><?= e($et["titulo"]) ?></h3>
          <p><?= e($et["texto"]) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- HONORARIOS -->
  <section>
    <div class="wrap reveal">
      <p class="eyebrow">Inversión</p>
      <h2 class="section-title">Honorarios</h2>
      <div class="precio-box">
        <p class="lead"><?= e($data["honorarios_modalidad"]) ?></p>
        <ul class="incluye">
          <?php foreach ($data["honorarios_incluye"] as $inc): ?>
            <li><?= e($inc) ?></li>
          <?php endforeach; ?>
        </ul>
        <p class="nota"><?= e($data["honorarios_nota"]) ?></p>
      </div>
    </div>
  </section>

  <!-- CONTACTO -->
  <section class="alt contacto">
    <div class="wrap reveal">
      <p class="eyebrow">¿Avanzamos?</p>
      <h2>Coordinemos una reunión</h2>
      <p class="lead" style="margin:0 auto 30px;">Si les cierra, escribime y vemos los detalles. Cualquier duda, por acá.</p>
      <a class="cta" href="<?= e($data["whatsapp_url"]) ?>" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-8.6 15l-1.4 5 5.1-1.3A10 10 0 1 0 12 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .2-3.3-.7-2.8-1.1-4.5-3.9-4.7-4.1-.1-.2-1-1.4-1-2.6 0-1.2.6-1.8.9-2 .2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5.2.5.7 1.8.8 1.9.1.1.1.3 0 .5-.1.2-.2.4-.3.5-.2.2-.3.4-.2.6.1.2.6 1 1.3 1.6.9.8 1.6 1 1.9 1.2.2.1.4.1.5-.1.2-.2.6-.7.7-.9.2-.2.3-.2.6-.1.2.1 1.5.7 1.8.8.2.1.4.2.4.3.1.1.1.6-.1 1.1z"/></svg>
        <?= e($data["whatsapp_cta"]) ?>
      </a>
      <a class="mail" href="mailto:<?= e($data["mail"]) ?>"><?= e($data["mail"]) ?></a>
    </div>
  </section>

  <footer>
    <div class="wrap">Marcela G. Fiorilo · Propuesta para <?= e($data["cliente"]) ?></div>
  </footer>

  <!-- Animación de entrada mínima -->
  <script>
    const io = new IntersectionObserver((entries) => {
      entries.forEach(el => { if (el.isIntersecting) { el.target.classList.add("in"); io.unobserve(el.target); } });
    }, { threshold: 0.12 });
    document.querySelectorAll(".reveal").forEach(el => io.observe(el));
  </script>
</body>
</html>
