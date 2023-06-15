window.addEventListener('load', function() {
    var loadingScreen = document.getElementById('loading');
    loadingScreen.style.display = 'none';
  });

  window.addEventListener('load', function() {
    var popupElement = document.getElementById('fixedban');
    var loadingElement = document.createElement('div');
    loadingElement.className = 'loading';
    popupElement.appendChild(loadingElement);
  
    popupElement.style.opacity = '0';

    setTimeout(function() {
      popupElement.removeChild(loadingElement);
  
      popupElement.style.opacity = '1';
    }, 2000); // Waktu simulasi loading dalam milidetik (di sini, 2 detik)
  });