$(document).ready(function () {
  var markdownElement = document.getElementById('parse_markdown');

  if (markdownElement) {
    markdownReadme();
  }

  function markdownReadme () {
    var readmeFile = 'README.md';
    $.get(readmeFile, function (result) {
      if (markdownElement) {
        markdownElement.innerHTML = marked(result);
      }
    });
  }
});
