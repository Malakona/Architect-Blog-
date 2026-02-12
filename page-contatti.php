<?php get_header(); ?>

  <main class="container">
    <div class="breadcrumb">
      <a href="index.html">Home</a> <span>›</span> <span>Contatti</span>
    </div>

    <h2 class="section-title">Contatti</h2>

    <div class="split">
      <section class="panel">
        <h3 style="margin:0 0 8px">Richiesta consulenza</h3>
        <p class="muted" style="margin-top:0">
          Sito statico: il form usa <em>mailto</em> (dipende dal client email del dispositivo).
        </p>

        <div class="meta-line" style="margin-top:14px">
          <span class="chip">☎️ +39 06 0000 0000</span>
          <a class="chip" href="mailto:info@studiolinea.it?subject=Richiesta%20consulenza%20dal%20sito">✉️ info@studiolinea.it</a>
          <span class="chip">📍 Roma</span>
        </div>

        <hr class="sep" />

        <form class="form" action="mailto:info@studiolinea.it" method="post" enctype="text/plain">
          <div>
            <label for="nome">Nome</label>
            <input id="nome" name="Nome" placeholder="Es. Laura" />
          </div>
          <div>
            <label for="email">Email</label>
            <input id="email" name="Email" type="email" placeholder="Es. laura@email.it" />
          </div>
          <div>
            <label for="messaggio">Messaggio</label>
            <textarea id="messaggio" name="Messaggio" placeholder="Racconta brevemente il progetto..."></textarea>
          </div>
          <button class="btn primary" type="submit">Apri email →</button>
        </form>
      </section>

      <aside class="panel">
        <h3 style="margin:0 0 8px">Informazioni</h3>
        <p class="muted" style="margin:0">Via delle Trame 21, 00100 Roma</p>
        <p class="muted" style="margin:8px 0 0">Ricevo su appuntamento · Consulenze online disponibili</p>

        <hr class="sep" />

        <h3 style="margin:0 0 10px">Mappa</h3>
        <div style="border-radius:16px; overflow:hidden; border:1px solid var(--soft); background:#fff">
          <iframe
            title="Mappa Studio Linea"
            width="100%"
            height="320"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.openstreetmap.org/export/embed.html?bbox=12.483%2C41.893%2C12.503%2C41.903&layer=mapnik">
          </iframe>
        </div>
        <p class="small muted" style="margin-top:10px">(Coordinate demo: sostituisci il link con la posizione reale.)</p>
      </aside>
    </div>
  </main>

  <?php get_footer(); ?>