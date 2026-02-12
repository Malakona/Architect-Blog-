
<?php get_header(); ?>
  <main class="container">
    <div class="breadcrumb">
      <a href="index.html">Home</a> <span>›</span> <span>Progetti</span>
    </div>

    <h2 class="section-title">Progetti</h2>
    <p class="muted" style="margin-top:0">Archivio progetti (demo): ideale per “custom post type” in WordPress.</p>

    <div class="grid" aria-label="Elenco progetti">
      <a class="card" href="progetto-casa-cortile.html" aria-label="Apri progetto: Casa Cortile">
  <div class="feature">
    <img src="<?php echo bloginfo("template_url"); ?>/assets/projects/casa-cortile.svg" alt="Immagine progetto: Casa Cortile" />
    <div class="tag">🏷️ Residenziale</div>
    <div class="date">2025</div>
  </div>
  <div class="pad">
    <h3>Casa Cortile</h3>
    <p>Ristrutturazione con patio centrale e continuità interno/esterno.</p>
    <div class="meta-line">
      <span class="chip">📍 Roma</span>
      <span class="chip">🧩 3 servizi</span>
    </div>
  </div>
</a>
<a class="card" href="progetto-loft-ferro.html" aria-label="Apri progetto: Loft Ferro">
  <div class="feature">
    <img src="<?php echo bloginfo("template_url"); ?>/assets/projects/loft-ferro.svg" alt="Immagine progetto: Loft Ferro" />
    <div class="tag">🏷️ Interni</div>
    <div class="date">2024</div>
  </div>
  <div class="pad">
    <h3>Loft Ferro</h3>
    <p>Recupero industriale: ferro, legno e luce zenitale.</p>
    <div class="meta-line">
      <span class="chip">📍 Milano</span>
      <span class="chip">🧩 2 servizi</span>
    </div>
  </div>
</a>
<a class="card" href="progetto-biblioteca.html" aria-label="Apri progetto: Biblioteca di Quartiere">
  <div class="feature">
    <img src="<?php echo bloginfo("template_url"); ?>/assets/projects/biblioteca.svg" alt="Immagine progetto: Biblioteca di Quartiere" />
    <div class="tag">🏷️ Pubblico</div>
    <div class="date">2023</div>
  </div>
  <div class="pad">
    <h3>Biblioteca di Quartiere</h3>
    <p>Spazi modulari, acustica controllata e percorsi chiari.</p>
    <div class="meta-line">
      <span class="chip">📍 Bologna</span>
      <span class="chip">🧩 3 servizi</span>
    </div>
  </div>
</a>
<a class="card" href="progetto-atelier-luce.html" aria-label="Apri progetto: Atelier della Luce">
  <div class="feature">
    <img src="<?php echo bloginfo("template_url"); ?>/assets/projects/atelier-luce.svg" alt="Immagine progetto: Atelier della Luce" />
    <div class="tag">🏷️ Commerciale</div>
    <div class="date">2025</div>
  </div>
  <div class="pad">
    <h3>Atelier della Luce</h3>
    <p>Showroom e laboratorio con scenografie luminose e materiali naturali.</p>
    <div class="meta-line">
      <span class="chip">📍 Torino</span>
      <span class="chip">🧩 3 servizi</span>
    </div>
  </div>
</a>
    </div>
  </main>

  <?php get_footer(); ?>