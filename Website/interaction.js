  // Sélectionnez les boutons par leur ID ou une autre méthode appropriée
  const blogButton = document.getElementById('blog');
  const downloadButton = document.getElementById('download');
  const aboutButton = document.getElementById('about');
  const popupButton = document.getElementById('popup');

  // Définissez les fonctions à exécuter lors du clic sur les boutons
  function ouvrirBlog() {
    const url1 = 'blog.html';
    window.open(url1);
    ouvrirPopup();
  }

  function ouvrirDownload() {
    const url2 = 'download.html';
    window.open(url2);
    ouvrirPopup();
  }

  function ouvrirAbout() {
    const url3 = 'about.html';
    window.open(url3);
    ouvrirPopup();
  }

  // Ajoutez des écouteurs d'événements aux boutons pour détecter les clics
  blogButton.addEventListener('click', ouvrirBlog);
  downloadButton.addEventListener('click', ouvrirDownload);
  aboutButton.addEventListener('click', ouvrirAbout);
  popupButton.addEventListener('click', ouvrirPopup);

  function ouvrirPopup() {
    const url = 'login.html';
    const name = 'SRP Play | Login';
    // Définissez les options pour le popup
    const width = 508;
    const height = 590;
    const left = (window.innerWidth - width) / 2; // Calculer la position x pour centrer le popup
    const top = (window.innerHeight - height) / 2; // Calculer la position y pour centrer le popup

    const options = `width=${width},height=${height},left=${left},top=${top},scrollbars=no,resizable=no`;
    window.open(url, name, options);
  }