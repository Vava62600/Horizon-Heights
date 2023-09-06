
  const popupButton = document.getElementById('popup');

  popupButton.addEventListener('click', ouvrirPopup);

  function ouvrirPopup() {
    const url = 'Login.html';
    const name = 'Horizon Heights | Login';
    // Définissez les options pour le popup
    const width = 508;
    const height = 590;
    const left = (window.innerWidth - width) / 2; // Calculer la position x pour centrer le popup
    const top = (window.innerHeight - height) / 2; // Calculer la position y pour centrer le popup

    const options = `width=${width},height=${height},left=${left},top=${top},scrollbars=no,resizable=no`;
    window.open(url, name, options);
  }